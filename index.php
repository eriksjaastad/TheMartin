
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width"/>
<title>The Martin</title>
<link rel='stylesheet' id='site-styles-css' href='css/styles.css' type='text/css' media='screen'/>
<!--[if lt IE 9]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<![endif]-->


<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript" src="//use.typekit.net/lhq3rlv.js"></script>
<script src="js/jquery.tinyscrollbar.min.js"></script>


<style type="text/css">.recentcomments a{display:inline!important;padding:0!important;margin:0!important}</style>
<script type="text/javascript">
$("document").ready(function(){
	$('.showbuild').click(function(e){
		e.preventDefault(); //stop default action of the link
		roomHref = $(this).attr("href");  //grab room page from href attribute
		$('#themartin').load(roomHref); //show the martin
	});
});
// SHOW The Martin building image, hide the text box 
function show( id ) { 
	document.getElementById(id).style.display = 'block'; 
} 
function hide( id ) { 
	document.getElementById(id).style.display = 'none'; 
}
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#scrollbar1').tinyscrollbar();

    });
</script>


<!-- REMOVE -->
<meta name='robots' content='noindex,nofollow'/>

<!-- REMOVE -->



</head>
<body><!-- class="home blog"-->
    <div class="site-wrap">
        <h1 class="logo"><a href="#" onclick="hide('themartin-tab'); hide('themartin');"><img src="img/header-logo-themartin.png" alt="The Martin"></a></h1>
        <header>
            <nav class="slides-pagination">
                <a data-pagehash="floorplans" href="floorplans/" onclick="show('themartin-tab'); show('toggleText');">Floor Plans</a>
                <a data-pagehash="amenities" href="amenities/" onclick="hide('themartin-tab'); hide('themartin');">Amenities</a>
                <a data-pagehash="features" href="features/" onclick="hide('themartin-tab'); hide('themartin');">Features</a>
                <a data-pagehash="neighborhood" href="neighborhood/" onclick="hide('themartin-tab'); hide('themartin');">Neighborhood</a>
                <a data-pagehash="gallery" href="gallery/" onclick="hide('themartin-tab'); hide('themartin');">Gallery</a>
                <a data-pagehash="green-facts" href="green-facts/" onclick="hide('themartin-tab'); hide('themartin');">Green Facts</a>
                <a data-pagehash="resident" href="resident/" onclick="hide('themartin-tab'); hide('themartin');">Resident</a>
            </nav>
            <div class="tab" id="themartin-tab" style="display:none;">
                <a class="showbuild" href="test.php" onclick="show('themartin'); hide('toggleText');" >The Martin</a>
            </div>
        </header>
        <div id="home-bars">
            <ul>
                <li style="background-image: url(uploads/2013/02/floorplans-home-color.jpg)">
                	<a style="background-image: url(uploads/2013/02/floorplans-home-bw.jpg)" data-pagehash="" href="floorplans/"><img src="uploads/2013/02/floorplans-home-bw.jpg" alt="Floor Plans"></a>
                </li>
                <li style="background-image: url(uploads/2013/02/amenities-home-color.jpg)">
                	<a style="background-image: url(uploads/2013/02/amenities-home-bw.jpg)" data-pagehash="" href="amenities/"><img src="uploads/2013/02/amenities-home-bw.jpg" alt="Amenities"></a>
                </li>
                <li style="background-image: url(uploads/2013/02/features-home-color.jpg)">
                	<a style="background-image: url(uploads/2013/02/features-home-bw.jpg)" data-pagehash="" href="features/"><img src="uploads/2013/02/features-home-bw.jpg" alt="Features"></a>
                </li>
                <li style="background-image: url(uploads/2013/02/neighborhood-home-color.jpg)">
                	<a style="background-image: url(uploads/2013/02/neighborhood-home-bw.jpg)" data-pagehash="" href="neighborhood/"><img src="uploads/2013/02/neighborhood-home-bw.jpg" alt="Neighborhood"></a>
                </li>
                <li style="background-image: url(uploads/2013/02/gallery-home-color.jpg)">
                	<a style="background-image: url(uploads/2013/02/gallery-home-bw.jpg)" data-pagehash="" href="gallery/"><img src="uploads/2013/02/gallery-home-bw.jpg" alt="Gallery"></a>
                </li>
                <li style="background-image: url(uploads/2013/02/greenfacts-home-color.jpg)">
                	<a style="background-image: url(uploads/2013/02/greenfacts-home-bw.jpg)" data-pagehash="" href="green-facts/"><img src="uploads/2013/02/greenfacts-home-bw.jpg" alt="Green Facts"></a>
                </li>
                <li style="background-image: url(uploads/2013/02/resident-home-color.jpg)">
                	<a style="background-image: url(uploads/2013/02/resident-home-bw.jpg)" data-pagehash="" href="resident/"><img src="uploads/2013/02/resident-home-bw.jpg" alt="Resident"></a>
                </li>
            </ul>
        </div>
        <div id="pages">
            <ul class="slides-container">
				<li class="page" id="floorplans">  
					<img src="uploads/2013/02/1-Floorplans.jpg" alt="Floor Plans">
  					<div class="scrollable">
                        <div class="content collapsible" id="toggleText">
                            <h1 class="collapsed-title">Floor Plans</h1>
                            <div class="collapse-content">
                            	<p>Whether you’re a lifelong urbanite or newly converted to city living, we’ve got the place for you.</p>
                                <p>Need a city flat for proximity to work? Exiting suburbia for the upbeat rhythm of midtown? The Martin is the ultimate metropolitan nest.</p>
                                <p>With oversized spaces, elegant finishes, and dazzling views, The Martin’s sleek beauty turns heads at first glance – but its rich features, amenities and conveniences are what give it staying power.</p>
                                <p>Built with an architectural emphasis on shimmering glass, The Martin promises to reflect the best in our city – and in you.</p>
                                <p>We invite you to get acquainted with The Martin, with 188 residential apartments and several design layouts to choose from. Take a tour of our available floor plans, below, and imagine the possibilities for your new space.</p>
                                <p>Any questions? Our leasing staff would be delighted to help you via phone or email. Or just click the Live Chat button on the home page and we’ll be right with you.<b></b></p>
                            </div>
                        </div>
                        <div id="themartin">
                        </div>
					</div>
                </li>
                
                
                <li class="page" id="amenities">
                    <img src="uploads/2013/02/2-Amenities.jpg" alt="Amenities">
                    <div class="scrollable">
                        <div class="content collapsible">
                            <h1 class="collapsed-title">Amenities</h1>
                            <div class="collapse-content">
                                <p>When the weather is its Northwestiest outside, The Martin has a wealth of diversions inside…a gaming and media room, fully equipped fitness center and communal kitchen for neighborly soirées. Once blue skies return, dig your hands into the rooftop garden or grill a fresh, wild salmon on the dining deck with friends. Take a moment to drink in the magnificent views of water and mountains from the top floor and you’ll see why Seattle is called the jewel of the Northwest.</p>
                                <p>When out-of-towners arrive, save space and sanity by installing them in our handy, reservable guest quarters. You’ll all appreciate the extra privacy.</p>
                                <p><b>Bonus points:</b> The Martin is bona fide dog-friendly. No matter how your pooch feels about baths, <i>you’ll</i> love the specially-appointed dog spa and relief area just for him. (Bid adieu to furry tubs and rainy midnight walks.)</p>
                                <p>Building amenities include:</p>
                                <ul>
                                    <li>Roof deck with community pea-patch</li>
                                    <li>Dining deck with grills</li>
                                    <li>Community room with full kitchen</li>
                                    <li>Business center and conference room</li>
                                    <li>Fitness center with cardio equipment, free weights and stretching area</li>
                                    <li>Media/gaming room</li>
                                    <li>Resident storage</li>
                                    <li>Self-service package pick-up lockers</li>
                                    <li>Guest suite</li>
                                    <li>Dog washing room / dog relief area</li>
                                    <li>123 parking spaces</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                
                
				<li class="page" id="features">
                    <img src="uploads/2013/02/3-Features.jpg" alt="Features">
                    <div class="scrollable">
                        <div class="content collapsible">
                            <h1 class="collapsed-title">Features</h1>
                            <div class="collapse-content">
                            	<p>It’s smart to live with quality appliances and lighting that sip – rather than gulp – precious water and energy. And if they happen to make your home sparkle like jewelry? Even better.</p>
                                <p>Exquisitely engineered cabinetry, quartz countertops and nearly floor-to-ceiling windows lend a substantial yet refined look to your personal sanctuary. Did we mention space? Capacious floor plans offer an airy, open sensibility, giving you room to breathe…<i>and</i> host martinis for your inner circle before dinner reservations and curtain call.</p>
                                <p>With glittering views of the city, Puget Sound, Lake Union and Space Needle, The Martin invites you to lift a glass to the world at your feet.</p>
                                <p>Handsome standard features include:</p>
                                <ul>
                                    <li>Walk-in closets in most homes</li>
                                    <li>Quartz countertops in kitchen and bathrooms</li>
                                    <li>Contemporary cabinetry with soft-close hardware</li>
                                    <li>Under-cabinet lighting in most homes</li>
                                    <li>Nearly floor-to-ceiling windows in most homes</li>
                                    <li>Tile backsplash in kitchens and baths</li>
                                    <li>Tiled tub surrounds</li>
                                    <li>Energy Star-rated stainless-steel Whirlpool kitchen appliances</li>
                                    <li>Energy- and water-efficient front-load washer/dryers</li>
                                    <li>High-efficiency water fixtures</li>
                                    <li>Well-designed kitchens with lots of storage</li>
                                    <li>Gas ranges</li>
                                    <li>Air conditioning</li>
                                    <li>Spacious open floor plans</li>
                                    <li>Mesh fabric roller shades</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                
                
				<li class="page" id="neighborhood">
                    <img src="uploads/2013/02/4-Neighborhood.jpg" alt="Neighborhood">
                    <div class="scrollable">
                        <div class="content collapsible">
                            <h1 class="collapsed-title">NEIGHBORHOOD</h1>
                            <div class="collapse-content">
                                <p>Never heard of Midtown? This cosmopolitan zone is about to pop, with new high-rises, eateries and boutiques converging in the zone embracing Denny Triangle, South Lake Union, Belltown and the retail district. Eminently walkable, you’ll find your way to movies, galleries, restaurants, shopping and recreation without losing your parking spot or hailing a cab.</p>
                                <p>Picture a casual stroll from your apartment to one of these local hot spots:</p>
                                <ul>
                                    <li><a title="Midtown Espresso" href="http://www.urbanspoon.com/r/1/1412246/restaurant/Belltown/Midtown-Espresso-Seattle" target="_blank">Midtown Espresso</a></li>
                                    <li><a title="Top Pot Doughnuts" href="http://www.urbanspoon.com/r/1/4845/restaurant/Belltown/Top-Pot-Doughnuts-Seattle" target="_blank">Top Pot Doughnuts</a></li>
                                    <li><a title="Assaggio Ristorante" href="http://www.urbanspoon.com/r/1/2178/restaurant/Belltown/Assaggio-Ristorante-Seattle" target="_blank">Assaggio Ristorante</a></li>
                                    <li><a title="Dahlia Lounge" href="http://www.urbanspoon.com/r/1/4395/restaurant/Belltown/Dahlia-Lounge-Seattle" target="_blank">Dahlia Lounge</a></li>
                                    <li><a title="Palace Kitchen" href="http://www.urbanspoon.com/r/1/2387/restaurant/Belltown/Palace-Kitchen-Seattle" target="_blank">Palace Kitchen</a></li>
                                    <li><a title="Serious Pie" href="http://www.urbanspoon.com/r/1/8114/restaurant/Belltown/Serious-Pie-Seattle" target="_blank">Serious Pie</a></li>
                                    <li><a title="Dimitriou's Jazz Alley" href="http://www.urbanspoon.com/r/1/2285/restaurant/Downtown/Dimitrious-Jazz-Alley-Seattle" target="_blank">Dimitriou&#8217;s Jazz Alley</a></li>
                                    <li><a href="http://opalinebakery.com/" target="_blank">Opaline Café &amp; Bakery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="#prev" class="gallery-btn prev">Previous</a>
                    <a href="#next" class="gallery-btn next">Next</a>
                    <div class="gallery">
                        <div class="image" style="background-image:url(uploads/2013/02/4-Neighborhood.jpg)"><img src="uploads/2013/02/4-Neighborhood.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/4-Neighborhood-1.jpg)"><img src="uploads/2013/02/4-Neighborhood-1.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/4-Neighborhood-2.jpg)"><img src="uploads/2013/02/4-Neighborhood-2.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/4-Neighborhood-3.jpg)"><img src="uploads/2013/02/4-Neighborhood-3.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/4-Neighborhood-4.jpg)"><img src="uploads/2013/02/4-Neighborhood-4.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/4-Neighborhood-5.jpg)"><img src="uploads/2013/02/4-Neighborhood-5.jpg" alt=""></div>
                    </div>
                    <div class="thumbnails-holder">
                        <div class="thumbnails">
                            <a href="#" class="prev">Previous</a>
                            <div class="thumbnail-bg play">
                                <a href="uploads/2013/02/4-Neighborhood.jpg" class="thumbnail active" style="background-image: url(uploads/2013/02/4-Neighborhood-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/4-Neighborhood-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/4-Neighborhood-1.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/4-Neighborhood-1-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/4-Neighborhood-1-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/4-Neighborhood-2.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/4-Neighborhood-2-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/4-Neighborhood-2-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/4-Neighborhood-3.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/4-Neighborhood-3-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/4-Neighborhood-3-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/4-Neighborhood-4.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/4-Neighborhood-4-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/4-Neighborhood-4-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/4-Neighborhood-5.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/4-Neighborhood-5-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/4-Neighborhood-5-60x40-bw.jpg)">Thumbnail</span></a>
                            </div>
                            <a href="#" class="next">Next</a>
                        </div>
                    </div>
                </li>
                
                
				<li class="page" id="gallery">
                    <img src="uploads/2013/02/5-Gallery.jpg" alt="Gallery">
                    <a href="#prev" class="gallery-btn prev">Previous</a>
                    <a href="#next" class="gallery-btn next">Next</a>
                    <div class="gallery">
                        <div class="image" style="background-image: url(uploads/2013/02/5-Gallery.jpg)"><img src="uploads/2013/02/5-Gallery.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/5-Gallery-1.jpg)"><img src="uploads/2013/02/5-Gallery-1.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/5-Gallery-2.jpg)"><img src="uploads/2013/02/5-Gallery-2.jpg" alt=""></div>
                        <div class="image" style="background-image: url(uploads/2013/02/5-Gallery-3.jpg)"><img src="uploads/2013/02/5-Gallery-3.jpg" alt=""></div>
                    </div>
                    <div class="thumbnails-holder">
                        <div class="thumbnails">
                            <a href="#" class="prev">Previous</a>
                            <div class="thumbnail-bg">
                                <a href="uploads/2013/02/5-Gallery.jpg" class="thumbnail active" style="background-image: url(uploads/2013/02/5-Gallery1-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/5-Gallery1-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/5-Gallery-1.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/5-Gallery-1-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/5-Gallery-1-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/5-Gallery-2.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/5-Gallery-2-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/5-Gallery-2-60x40-bw.jpg)">Thumbnail</span></a>
                                <a href="uploads/2013/02/5-Gallery-3.jpg" class="thumbnail" style="background-image: url(uploads/2013/02/5-Gallery-3-60x40.jpg)">
                                <span style="background-image: url(uploads/2013/02/5-Gallery-3-60x40-bw.jpg)">Thumbnail</span></a>
                            </div>
                            <a href="#" class="next">Next</a>
                        </div>
                    </div>
                </li>
                
                
				<li class="page" id="green-facts">
                    <img src="uploads/2013/02/6-Green-Facts.jpg" alt="Green Facts">
                    <div class="scrollable">
                        <div class="content collapsible">
                            <h1 class="collapsed-title">Green Facts</h1>
                            <div class="collapse-content">
                                <p>The Martin is targeting LEED-NC Gold certification, the hallmark of excellence for environmentally sensitive design, construction, operation and maintenance. You can be confident that the infrastructure and landscaping that surround you each day contribute to a healthy, sustainable lifestyle.</p>
                                <p><b>Key Green Features</b></p>
                                <ul>
                                    <li>Energy-efficient windows</li>
                                    <li>Low VOC paints and finishes for healthy indoor air quality</li>
                                    <li>Drought-resistant landscaping to reduce water waste</li>
                                    <li>Non-smoking policy</li>
                                    <li>On-site Zipcars</li>
                                    <li>Ample bike storage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                
                
				<li class="page" id="resident">
                    <img src="uploads/2013/02/7-Resident.jpg" alt="Resident">
                    <div class="scrollable">
                        <div class="content collapsible">
                            <h1 class="collapsed-title">Resident</h1>
                            <div class="collapse-content">
                                <p>We have a convenient way to get a hold us, make payment and request maintenance or assistance.</p>
                                <h3>Payments</h3>
                                <p>Make online payment, view payments history, and sign up for debit.</p>
                                <h3>Maintenance</h3>
                                <p>Request maintenance online in just minutes</p>
                                <h3>Assistance</h3>
                                <p>Contact on-site personnel available to assist you in any way possible</p>
                                <a href="https://themartin.residentportal.com/resident_portal/?module=authentication&amp;action=view_login" target="_blank" class="btn right">Launch the Resident Portal</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
    	</div>
	
        <footer>
            <div class="content">
                <div class="copyright">
                    <!-- code located in site-scripts.js at the bottom
                    <a href="#" class="btn livechat">Live Chat</a> -->
                    <a onclick="javascript:window.open('http://dm5.contactatonce.com/CaoClientContainer.aspx?MerchantId=246624&amp;Providerid=9910&amp;PlacementId=1&amp;OriginationUrl='+encodeURIComponent(location.href),'','resizable=yes,toolbar=no,menubar=no,location=no,scrollbars=no,status=no,height=400,width=600');return false;" href="#"><img class="btn livechat" onerror="this.height=0;this.width=0" src="http://dm5.contactatonce.com/getagentstatusimage.aspx?MerchantId=246624&amp;ProviderId=9910&amp;PlacementId=1" alt="Live Chat" /></a>
                    <a href="#" class="btn apply">Apply Online</a>
                    <span class="addgroup">206.937.1802</span>
                    <span class="addgroup">|</span>
                    <span class="addgroup">2105 5th Ave. Seattle, WA 98121</span>
                    <span class="addgroup">|</span>
                    <span class="addgroup"><a href="mailto:info@themartinseattle.com">Email Us</a></span>
                    <span class="addgroup">|</span>
                    <span class="addgroup"><a href="http://www.vulcanresidential.com/" target="_blank">Other Communities</a></span>
                    <span class="social-icons"><a href="https://www.facebook.com/TheMartinSeattle" class="icon facebook">Facebook</a>
                    <a href="https://twitter.com/TheMartinSea" class="icon twitter">Twitter</a></span>
                    <span class="addgroup">&copy; 2013 Vulcan Real Estate</span>
                </div>
            </div>
            <div class="vulcan">
                <a href="http://www.vulcanrealestate.com/" target="_blank"><img src="img/footer-logo-vulcan.png" alt="Vulcan Properties"></a>
            </div>
        </footer>
	</div>


<script type='text/javascript' src='js/jquery.easing.1.3.min.js'></script>
<script type='text/javascript' src='js/site-scripts-super.js'></script>
<script type="text/javascript" src="http://dm5.contactatonce.com/scripts/PopIn.js">//placeholder</script>
<script type="text/javascript" src="http://dm5.contactatonce.com/PopInGenerator.aspx?MerchantId=246624&amp;ProviderId=9910&amp;PlacementId=0">//placeholder</script>
<script type="text/javascript">
	function WrappedPopin() 
	{
		try
		{
			popIn();
		}
		catch(Exception)
		{
		} 
	}  
	WrappedPopin();
</script> 

</body>
</html>