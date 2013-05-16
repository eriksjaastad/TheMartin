<?php
/*
property-api-include.php

A place to store API functions, etc. so we don't need to 
rebuild them on every page

*/
if(!isset($_SESSION)){session_start();} //use session to store data
loadAvailableUnits(); //loads property data into a session var use info from there!
/*
propertyAPI() passes in credentials and connects to the propertysolutions API:
https://riverstone.propertysolutions.com/api/

API is IP address aware, so code must reside on http://themartin.logicdesigns.com/


*/		
function propertyAPI($method, $params) {
	$jsonRequest = array(
		"auth" => array( "type" => "basic", "username" => "username", "password" => "password"),
		"method" => array(
			"name" => $method, // <- method name
			"params" => $params
		),
	
	);
	
	//now we can construct this object programmatically, then turn it into JSON for submission.
	$jsonRequest = json_encode($jsonRequest);
	
	/* Initiate a CURL resource */
	$resCurl = curl_init();
	/* If you want to send a JSON Request, use these options */
	curl_setopt( $resCurl, CURLOPT_HTTPHEADER,  array( 'Content-type: APPLICATION/JSON; CHARSET=UTF-8' ) );
	curl_setopt( $resCurl, CURLOPT_POSTFIELDS, $jsonRequest );
	
	curl_setopt( $resCurl, CURLOPT_POST, true );
	//let's add the service endpoint
	//the Request URL on the API pages.
	curl_setopt( $resCurl, CURLOPT_URL, "https://riverstone.propertysolutions.com/api/propertyunits" );
	
	//we have to provide the method name, because that URL handles several different kinds of requests.
	curl_setopt( $resCurl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec( $resCurl );
	curl_close( $resCurl );
	return json_decode($result); //<- turns it back into PHP data for work

}

/*
The API returns @attribute as a class name which is illegal as part of the room info
So here we'll convert to an array
http://www.if-not-true-then-false.com/2009/php-tip-convert-stdclass-object-to-multidimensional-array-and-convert-multidimensional-array-to-stdclass-object/


*/
function objectToArray($d) {
	if (is_object($d)) {
		// Gets the properties of the given object
		// with get_object_vars function
		$d = get_object_vars($d);
	}

	if (is_array($d)) {
		/*
		* Return array converted to object
		* Using __FUNCTION__ (Magic constant)
		* for recursive call
		*/
		return array_map(__FUNCTION__, $d);
	}
	else {
		// Return array
		return $d;
	}
}

//some of the attributes are null, so don't appear.  Here we're converting to 
//the text "NULL"
function nullToString($var)
{//convert to string	
	if(is_null($var))
	{
		return "NULL";
	}else{
		return $var;
	}
}

function dumpDie($var)
{//var dump and crash page for testing
	echo "<pre>";
	var_dump($var);
	echo "</pre>";	
	die;
}

function makeUnits($result)
{//input the JSON response and create an array of stdClass objects in the following pattern:
/*
ID: 2124919
FloorLevel: 21
MarketingName: 2105
UnitType: Den G
UnitBedrooms: 1
UnitBathrooms: 1
MinSquareFeet: 820
*/
	$units = array();
	$_SESSION['AvailableFloors'] = array();
	#drill down to specific property	
	$property = $result->response->result->PhysicalProperty->Property[0];
	
	#drill down to ILS_Units
	$ILS_Units = $property->ILS_Unit;
	$ILS_Units = objectToArray($ILS_Units);
	foreach($ILS_Units as  $key => $value)
	{
		$unitObj->ID = $key;
		$unitObj->FloorLevel = (int)$value['FloorLevel'];
		//store array of floors that have availability
		if(!in_array($unitObj->FloorLevel,$_SESSION['AvailableFloors'])){$_SESSION['AvailableFloors'][] = $unitObj->FloorLevel;} 
		foreach($value['Units'] as  $unit)
		{
			$unitObj = new stdClass;
			$unitObj->ID = $key;
			$unitObj->FloorLevel = $value['FloorLevel'];
			$unitObj->MarketingName = $unit['MarketingName'];
			$unitObj->UnitType = $unit['UnitType'];
			$unitObj->UnitBedrooms = $unit['UnitBedrooms'];
			$unitObj->UnitBathrooms = $unit['UnitBathrooms'];
			$unitObj->MinSquareFeet = $unit['MinSquareFeet'];
			$units[] = $unitObj; //add to array
		}
	}
	return $units;
}	

//needed to compare dates to refresh cache:
//http://www.highlystructured.com/comparing_dates_php.html

function useCache()
{//returns true if cache is still the same date - renew daily
	if(isset($_SESSION['PropertyAvailableUnits'])
	&& $_SESSION['PropertyAvailableUnits'] != "" 
	&& isset($_SESSION['PropertyCacheDate']) 
	&& $_SESSION['PropertyCacheDate'] != "")
	{//
		
		$exp_date = $_SESSION['PropertyCacheDate'];
		$todays_date = date("Y-m-d");
		
		$today = strtotime($todays_date);
		$expiration_date = strtotime($exp_date);
		
		if ($expiration_date >= $today) {
		     return true;
		} else {
		    return false;
		}
		
	}else{//no cache!
		return false;
		
	}
}

//load properties into a session var, or use existing

function loadAvailableUnits()
{
	if(!useCache())
	{//only load from API if what is in cache is too old
		#pass in API method and identifiers and retrieve JSON data - available units only!
		#$result is a stdClass object.
		#thus far no info about non-available units - DUH all available?
		$result = propertyAPI("getMitsPropertyUnits", array(
							"propertyIds" => "66668",
							"availableUnitsOnly" => "true"
							));
		$_SESSION['PropertyAvailableUnits'] = makeUnits($result);
		$_SESSION['PropertyCacheDate'] = date("Y-m-d");
	}
}

function getUnitByRoomNumber($num)
{
	$myReturn = "";
	if(isset($_SESSION['PropertyAvailableUnits']) 
	&& $_SESSION['PropertyAvailableUnits'] != "" 
	&& is_array($_SESSION['PropertyAvailableUnits']))
	{//process and return data by room number
		foreach($_SESSION['PropertyAvailableUnits'] as  $unitObj)
		{
			if($unitObj->MarketingName == $num)
			{//got it!
				return $unitObj;
			}
		}		
	}	
	return $myReturn;
}

function getUnitsByFloorNumber($num)
{
	$myReturn = "";
	if(isset($_SESSION['PropertyAvailableUnits']) 
	&& $_SESSION['PropertyAvailableUnits'] != "" 
	&& is_array($_SESSION['PropertyAvailableUnits']))
	{//process and return data by room number
		$units = array();
		foreach($_SESSION['PropertyAvailableUnits'] as  $unitObj)
		{
			if($unitObj->FloorLevel == $num)
			{//got it!
				$units[] = $unitObj;//add to array
			}
		}		
	}	
	if(count($units)>0)
	{
		return $units;
	}else{
		return "";	
		
	}
}
/*
getRoomArrayByFloor()
used on numbered pages 6.php, for example which show
a map of the rooms.  We're only placing a link on available rooms 
by creating an array of available rooms, by floor

$roomArray = getRoomArrayByFloor(6); //get rooms in an array for 6th floor

*/
function getRoomArrayByFloor($num)
{
	$myReturn = "";
	if(isset($_SESSION['PropertyAvailableUnits']) 
	&& $_SESSION['PropertyAvailableUnits'] != "" 
	&& is_array($_SESSION['PropertyAvailableUnits']))
	{//process and return data by room number
		$units = array();
		foreach($_SESSION['PropertyAvailableUnits'] as  $unitObj)
		{
			if($unitObj->FloorLevel == $num)
			{//right floor!  check rooms
				if(!in_array($unitObj->MarketingName,$units)){$units[] = $unitObj->MarketingName;} 
			}
		}		
	}	
	if(count($units)>0)
	{
		return $units;
	}else{
		return "";	
		
	}
}



?>
