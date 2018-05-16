<?php
/**
 * Template Name: Home
 * @package persons-of-interest
 **/

get_header();
?>

<style type="text/css" media="screen">
body {
	background-color: #e4e1ce;
}
#loading {
    width: 100%;
    height: auto;
    bottom: 0px;
    top: 0px;
    left: 0;
    position: absolute;
    z-index: 2000;
    background-color: #fff;
    opacity: .7;
}
.center {
    position: absolute;
    width: 300px;
    height: 300px;
    top: 50%;
    left: 50%;
    margin-top: -150px;
    margin-left: -150px;
    font-family: 'agltbold';
    font-size: 24px;
    color: #a75143:;
    /*background-color: #fff;*/
    text-align: center;
    line-height: 200px;
    border-radius: 10px;
    border: 4px solid #fff;
    /*opacity: .8;*/
}	
</style>
<div id="loading"><div class="center"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/load.gif" id="imgload">LOADING</div></div>
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
		<div class="idiomes"><?php echo iso_list_menu('strtoupper'); ?></div>
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
		    <div id="botohide">
		        <div class="botohi"></div><div class="text_b"><?php if(ICL_LANGUAGE_CODE=='es'): ?>Esconder marcadores<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>Hide markers<?php endif;?></div>
		    </div>
		    <div id="botoshow">
		        <div class="botolo"></div><div class="text_b"><?php if(ICL_LANGUAGE_CODE=='es'): ?>Mostrar marcadores<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>Show markers<?php endif;?></div>
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
							<div class="col-md-1 col-xs-hidden"></div>
							<div class="col-md-1 col-xs-4">
								<div class="text_titol"><p><?php the_sub_field('title'); ?></p></div>
								<div class="text_num"><p><?php the_sub_field('numero'); ?></p></div>
								<div class="text_adresa"><?php the_sub_field('direccion'); ?></div>
							</div>
							<div class="col-md-9 col-xs-8">
								<div class="text_resum"><?php the_sub_field('description'); ?></div>
							</div>
							<div class="col-md-1 col-xs-hidden"></div>
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
				<div class="col-md-3 col-md-offset-3 col-xs-12 text_tercera text_esq_xs credits"><?php the_field('creditos_columna_1'); ?></div> 
				<div class="col-md-3 col-xs-12 text_tercera text_dre_xs credits"><?php the_field('creditos_columna_2'); ?></div> 
			</div>
		</div>
</div>

<script type="text/javascript">

(function($) {

function new_map( $el ) {
	// var
	var $markers = $el.find('.marker');
	// vars
	var args = {
		//zoom		: 14,
		//center: new google.maps.LatLng(0,0),
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
		zoom: 12,
		mapTypeControl: false,
		scrollwheel: true,
		streetViewControl: false,
		navigationControl: false,
		//minZoom: 2, 
		//maxZoom: 18,
		center: new google.maps.LatLng(40.757634,-73.910337)
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

function add_marker( $marker, map ) {
	var ButtonOpen = document.getElementById('botoshow');
	var ButtonClose = document.getElementById('botohide');
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
		
		google.maps.event.addListener(marker, 'click', function() {
			// added in to close the previous open info window
			if($('.gm-style-iw').length) {
				$('.gm-style-iw').parent().hide();
    		}

			infowindow.open( map, marker );
		});

		google.maps.event.addDomListener(ButtonOpen, 'click', function() {
		        if (infowindow) {
		        	infowindow.setOptions({
                        disableAutoPan : true
                    });
		            infowindow.open(map, marker); }
				}); 

		google.maps.event.addDomListener(ButtonClose, 'click', function() {
		        if (infowindow) {
		            infowindow.close(); }
				}); 

		infowindow.open( map, marker );
	}
}

function show(id, value) {
	setTimeout(function () {
		//$('#imgload').animate({ 'zoom': 2 }, 50);
		$('#loading').fadeOut();
		//document.getElementById(id).style.display = value ? 'block' : 'none';
    }, 5000);
}

function center_map( map ) {
	console.log ('centrant...');
	show('loading', false);
}

// global var
var map = null;

function newLocation(newLat,newLng)
{
	map.setCenter({
		lat : newLat,
		lng : newLng
	});
}

$(document).ready(function(){
	$('.acf-map').each(function(){
		// create map
		map = new_map( $(this) );
	});
});

$(window).bind("load", function() {
	  //newLocation(40.7498346,-73.9691005);
	  console.log('canvi!');
/*	  if($(window).width() > 900) 
		{ 
			$.fn.fullpage.setAutoScrolling(true); 
		}
		else
		{ 
			$.fn.fullpage.setAutoScrolling(false); 
		}
*/
});

/*
$( window ).resize(function() {
if($(window).width() > 1000) { $.fn.fullpage.setAutoScrolling(true); }
else { $.fn.fullpage.setAutoScrolling(false);}
});
*/

})(jQuery);
</script>



<script type="text/javascript">// <![CDATA[
function pauseAll() {
    $('iframe[src*="vimeo.com"]').each(function () {
        $f(this).api('pause');
    });
}
// ]]>
console.log('fet vimeo');
</script>

<?php get_footer(); ?>