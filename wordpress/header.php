<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script type="text/javascript" src="//use.typekit.net/lhq3rlv.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
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
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="site-wrap">
        	<!-- logo -->
			<h1 class="logo"><a href="#" onclick="hide('themartin-tab'); hide('themartin');"><img src="img/header-logo-themartin.png" alt="The Martin"></a></h1>
         	<!-- /logo -->
            <!-- header -->
                <header class="slides-pagination">
                        <!-- nav -->
                        <nav class="slides-pagination">
                            <a data-pagehash="floorplans" href="floorplans/" onclick="show('themartin-tab'); show('toggleText');">Floor Plans</a>
                            <a data-pagehash="amenities" href="amenities/" onclick="hide('themartin-tab'); hide('themartin');">Amenities</a>
                            <a data-pagehash="features" href="features/" onclick="hide('themartin-tab'); hide('themartin');">Features</a>
                            <a data-pagehash="neighborhood" href="neighborhood/" onclick="hide('themartin-tab'); hide('themartin');">Neighborhood</a>
                            <a data-pagehash="gallery" href="gallery/" onclick="hide('themartin-tab'); hide('themartin');">Gallery</a>
                            <a data-pagehash="green-facts" href="green-facts/" onclick="hide('themartin-tab'); hide('themartin');">Green Facts</a>
                            <a data-pagehash="resident" href="resident/" onclick="hide('themartin-tab'); hide('themartin');">Resident</a>
                        </nav>
                        <!-- /nav -->
                </header>
                <!-- /header -->
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