<?php 
/**
 * template name:contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package yogi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	
	<section id="contact-bg" style="background-image:url('<?php the_field('hero_image'); ?>');">
		<h1><?php the_field('custom_title'); ?></h1>
		<h2><?php the_field('custom_headline'); ?><h2>
		<a href="#contact-form"><i class="icon icon-arrow-down-thick"></i></a>
	</section>

	<div id="contact-form">
		<div class="container">
			<p><?php the_field('contact_p'); ?></p>
			<form>
				<input type="text" name="name" placeholder="Your name" />
				<input type="text" name="email" placeholder="Your email" />
				<input type="text" name="subject" placeholder="Subject" />
				<textarea name="message" placeholder="Your message"></textarea>
				<input type="submit" value="Send Message">
			</form>
		</div>
	</div>

	<div id="contact-jobs">
		<div class="col-1-2" style="background-image:url('<?php the_field('job_image'); ?>');"></div>
		<div class="col-1-2">
			<p><?php the_field('join-team'); ?></p>
			<a href="mailto:<?php the_field('mailto-link'); ?>">Join Our Team</a>
		</div>
	</div>

	<div id="contact-map">


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
    <script>
		var map;
		var elkgrove = new google.maps.LatLng(37.7833, -122.4167);
		
		var latitude = 37.7833,
			longitude = -122.4167,
			map_zoom = 10;

		var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
		var marker_url = ( is_internetExplorer11 ) ? '../wp-content/themes/yogi/img/cd-icon-location.png' : '../wp-content/themes/yogi/img/cd-icon-location.svg';
			
		var MY_MAPTYPE_ID = 'custom_style';

		function initialize() {

		var	main_color = '#FF5C4A',
			saturation_value= -5,
			brightness_value= 5;

		//we define here the style of the map
		var style= [ 
			{
				//set saturation for the labels on the map
				elementType: "labels",
				stylers: [
					{saturation: saturation_value}
				]
			},  
		    {	//poi stands for point of interest - don't show these lables on the map 
				featureType: "poi",
				elementType: "labels",
				stylers: [
					{visibility: "off"}
				]
			},
			{
				//don't show highways lables on the map
		        featureType: 'road.highway',
		        elementType: 'labels',
		        stylers: [
		            {visibility: "off"}
		        ]
		    }, 
			{ 	
				//don't show local road lables on the map
				featureType: "road.local", 
				elementType: "labels.icon", 
				stylers: [
					{visibility: "off"} 
				] 
			},
			{ 
				//don't show arterial road lables on the map
				featureType: "road.arterial", 
				elementType: "labels.icon", 
				stylers: [
					{visibility: "off"}
				] 
			},
			{
				//don't show road lables on the map
				featureType: "road",
				elementType: "geometry.stroke",
				stylers: [
					{visibility: "off"}
				]
			}, 
			//style different elements on the map
			{ 
				featureType: "transit", 
				elementType: "geometry.fill", 
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			}, 
			{
				featureType: "poi",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.government",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.sport_complex",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.attraction",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "poi.business",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "transit",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "transit.station",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "landscape",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
				
			},
			{
				featureType: "road",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			},
			{
				featureType: "road.highway",
				elementType: "geometry.fill",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			}, 
			{
				featureType: "water",
				elementType: "geometry",
				stylers: [
					{ hue: main_color },
					{ visibility: "on" }, 
					{ lightness: brightness_value }, 
					{ saturation: saturation_value }
				]
			}
		];

		var mapOptions = {
			zoom: 10,
			center: elkgrove,
			scrollwheel: false,
			disableDefaultUI: true,
			mapTypeId: MY_MAPTYPE_ID
		};

		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);

		  var styledMapOptions = {
		    name: 'Custom Style'
		  };

			var marker = new google.maps.Marker({
			  	position: new google.maps.LatLng(latitude, longitude),
			    map: map,
			    visible: true,
			 	icon: marker_url,
			});

		  var customMapType = new google.maps.StyledMapType(style, styledMapOptions);

		  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>

		<div id="map-canvas"></div>
	</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>