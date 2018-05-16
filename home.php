<?php
/**
 * Template Name: Home_alt
 * @package persons-of-interest
 **/

get_header();
?>

<div id="fullpage">
		<div class="section inici" data-anchor="planainici">
		<div id="cords"></div>
		<div id="menuburger">
		<a href="#menu" id="toggle"><span></span></a>
		<div id="menu">
		  <ul>
			<?php if(ICL_LANGUAGE_CODE=='es'): ?>
				<li><a href="#planasegona" class="mnu">PROYECTO</a></li>
			    <li><a href="#planaquarta" class="mnu">PERSONAJES</a></li>
			    <li><a href="#planasetena" class="mnu">CONTACTO</a></li>
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
				<li><a href="#planasegona" class="mnu">PROJECT</a></li>
		    	<li><a href="#planaquarta" class="mnu">PERSONS</a></li>
		    	<li><a href="#planasetena" class="mnu">CONTACT</a></li>
			<?php endif;?>
		  </ul>
		</div>
		</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-1"></div>
		    </div>
		    <div id="fletxafixe01">
		        <a href="#planasegona"><div class="flinici"></div></a>
		    </div>
		</div>
		<div class="section segona" data-anchor="planasegona">
			<div class="row">
				<a name="segona"></a>
				<div class="col-md-8 col-md-offset-2 text_segona">
					<?php if (have_posts()) while ( have_posts() ): the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div> 
			</div>
			<div id="fletxafixe02">
		    	<a href="#planatercera"><div class="fl"></div></a>
			</div>
		</div>
		<div class="section tercera" data-anchor="planatercera">
			<div class="row">
				<div class="col-md-3 col-md-offset-3 text_tercera"><?php the_field('columna_1'); ?></div> 
				<div class="col-md-3 text_tercera"><?php the_field('columna_2'); ?></div> 
			</div>
			<!--fletxa-->
			<div id="fletxafixe03">
				<a href="#planaquarta"><div class="fl"></div></a>
		    </div>
		    <!--fletxa-->
		</div>
		<div class="section quarta" data-anchor="planaquarta">
			<div id="fletxafixe_amunt01">
		        <a href="#planatercera"><div class="flamunt"></div></a>
		    </div>
			<!--<div class="row">
				<div class="col-md-12">	-->		
					<?php if( have_rows('locations') ): ?>
						<div class="acf-map google-maps">
							<?php while ( have_rows('locations') ) : the_row(); 
								$location = get_sub_field('location');
								?>
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
									<a href="#planacinquena" onClick="obreVideo(<?php the_sub_field('numero'); ?>)" class="wpgmza_markerbox scrollFix hover_titol"><p class="wpgmza_infowindow_title"><?php the_sub_field('title'); ?></p></a>									
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				<!--</div>
			</div>-->
		</div>
		<div class="section cinquena" data-anchor="planacinquena">
			<!--fletxa-->
			<div id="fletxafixe_amunt03">
		        <a href="#planaquarta"><div class="flamunt"></div></a>
		    </div>
		    <!--fletxa-->
			<div class="row">
				<?php if( have_rows('locations') ): ?>
					<?php while ( have_rows('locations') ) : the_row(); ?>
						<div class="container_video<?php the_sub_field('numero'); ?>">
							<!--<p><?php the_sub_field('video'); ?></p>-->
							<div class="col-md-1"></div>
							<div class="col-md-1">
								<div class="text_titol"><p><?php the_sub_field('title'); ?></p></div>
								<div class="text_num"><p><?php the_sub_field('numero'); ?></p></div>
								<div class="text_adresa"><?php the_sub_field('direccion'); ?></div>
							</div>
							<div class="col-md-9">
								<div class="text_resum"><?php the_sub_field('description'); ?></div>
							</div>
							<div class="col-md-1"></div>
							<!--<p><?php echo $location['address']; ?></p>-->
						</div>
					<?php endwhile; ?>
				<?php endif; ?>					
			</div>
			<div id="more">VIDEO</div>
			<div id="fletxafixe05">
		    	<a href="#planasisena"><div class="fl"></div></a>
			</div>
		</div>
		<div class="section sisena" data-anchor="planasisena">
			<div id="fletxafixe_amunt02">
		        <a href="#planacinquena" onclick="pauseAll();"><div class="flamunt"></div></a>
		    </div>
			<div class="row">
				<div class="detector"></div>
				<?php if( have_rows('locations') ): ?>
					<?php while ( have_rows('locations') ) : the_row(); ?>
						<div id="video<?php the_sub_field('numero'); ?>" class="container_video<?php the_sub_field('numero'); ?>">
							<iframe src="<?php the_sub_field('video'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=000000&amp;autoplay=0&amp;quality=1080p&amp;loop=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="Vimeo-video"></iframe>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<!--fletxa-->
			<div id="fletxafixe04">
				<a href="#planasetena" onclick="pauseAll();"><div class="fl"></div></a>
			</div>
		    <!--fletxa-->
		</div>
		<div class="section setena" data-anchor="planasetena">
			<div id="fletxafixe_amunt04">
		        <a href="#planasisena"><div class="flamunt"></div></a>
		    </div>
			<div class="row">
				<div class="col-md-3 col-md-offset-3 text_tercera"><?php the_field('creditos_columna_1'); ?></div> 
				<div class="col-md-3 text_tercera"><?php the_field('creditos_columna_2'); ?></div> 
			</div>
		</div>
</div>

<script type="text/javascript">

(function($) {
/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	// var
	var $markers = $el.find('.marker');
	// vars
	var args = {
		zoom		: 6,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	var styles = [ { "featureType": "landscape", "stylers": [ { "color": "#31312c" } ] },{ "featureType": "poi", "stylers": [ { "color": "#31312c" } ] },{ "featureType": "road.highway", "stylers": [ { "color": "#252421" } ] },{ "featureType": "road.arterial", "stylers": [ { "color": "#2b2a27" } ] },{ "featureType": "road.local", "stylers": [ { "color": "#252421" } ] },{ "featureType": "transit", "stylers": [ { "visibility": "off" } ] },{ "featureType": "water", "stylers": [ { "color": "#808080" } ] },{ "featureType": "administrative", "stylers": [ { "visibility": "simplified" }, { "color": "#6a6960" } ] },{ "elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#6a6960" } ] },{ "featureType": "poi", "stylers": [ { "visibility": "off" } ] },{ "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] } ];
	// add a markers reference
	map.markers = [];
	// add markers
	$markers.each(function(){
    	add_marker( $(this), map );
	});
	// center map
	center_map( map );
	map.setOptions({
		styles: styles,
		mapTypeControl: false,
		scrollwheel: true,
		streetViewControl: false,
		navigationControl: false,
		minZoom: 2, 
		maxZoom: 18,
	});
	// return
	return map;

// Resize stuff...
google.maps.event.addDomListener(window, "resize", function() {
   var center = map.getCenter();
   google.maps.event.trigger(map, "resize");
   map.setCenter(center); 
});

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/


function add_marker( $marker, map ) {
	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		icon: '<?php echo esc_url(get_template_directory_uri()); ?>/images/marker.png'
	});
	// add to array
	map.markers.push( marker );
	// if marker contains HTML, add it to an infoWindow

	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
		// show info window when marker is clicked

		liTag=$("fletxafixe_amunt01");
			// console.log(liTag);
			$(liTag).click(function() {
				infowindow.open(map, marker);
			});
		
		google.maps.event.addListener(marker, 'click', function() {
			// added in to close the previous open info window
			if($('.gm-style-iw').length) {
				$('.gm-style-iw').parent().hide();
    		}

			infowindow.open( map, marker );
		});

		 google.maps.event.addListener(map, 'click', function() {
		        if (infowindow) {
		            infowindow.close(); }
				}); 
		infowindow.open( map, marker );
	}
}


/*
function add_marker( $marker, map ) {
	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		icon: '<?php echo esc_url(get_template_directory_uri()); ?>/images/marker.png'
	});
	// add to array
	map.markers.push( marker );
	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );
		});
		infowindow.open(map,marker);
	}
}
*/



/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {
	// vars
	var bounds = new google.maps.LatLngBounds();
	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		bounds.extend( latlng );
	});
	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 6 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
		map.setCenter( bounds.getCenter() );
		//map.setZoom( 6 );
	}
}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;
$(document).ready(function(){
	$('.acf-map').each(function(){
		// create map
		map = new_map( $(this) );
	});
});
})(jQuery);
</script>
<script type="text/javascript">// <![CDATA[
function pauseAll() {
    $('iframe[src*="vimeo.com"]').each(function () {
        $f(this).api('pause');
    });
}
// ]]>
</script>

<?php get_footer(); ?>