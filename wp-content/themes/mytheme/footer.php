<footer class="mastfoot silver-bg ">
  <div class="container">
    <div class="row">
      <article class="col-md-1">
        <nav class="footnav ">
          <ul>
            <li><a class="font1 h3-footer" href="#">Twitter</a></li>
            <li><a class="font1 h3-footer" href="#">Dribbble</a></li>
            <li><a class="font1 h3-footer" href="#">Facebook</a></li>
          </ul>
        </nav>
      </article>
      <article class="col-md-3 text-left">
        <h3 class="font2 black h3-footer">ZARA EPI</h3>
        <h6 class="font1 grey h6-footer">A homegrown design studio from Auckland. I create beautiful identities &amp; amazing web experience for modern business.</h6>
      </article>
      <article class="col-md-6 text-left">
        <h3 class="font2 black">&copy;</h3>
        <h6 class="font1 grey h6-footer">Copyright 2017 Zara Epi.<br/><a href="http://www.designova.net/themes.html">XXXXXXXXX</a></h6>
      </article>
      <article class="col-md-2 text-right">
        <img alt="" title="" class="img-responsive foot-logo" src="<?php echo get_bloginfo('template_directory')?>/images/logo-zara.png">
      </article>
    </div>
  </div>
</footer>
<!-- end : mastfoot -->
<!-- End Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!-- JS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="<?php echo get_bloginfo('template_directory')?>/javascripts/libs/common.js"></script>
<script src="<?php echo get_bloginfo('template_directory')?>/elements/js/elements.js"></script>
<script src="<?php echo get_bloginfo('template_directory')?>/javascripts/custom/main.js"></script>
<script src="<?php echo get_bloginfo('template_directory')?>/javascripts/custom/form-validation.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
// Basic options for a simple Google Map
// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
var mapOptions = {
// How zoomed in you want the map to start at (always required)
zoom: 15,
// The latitude and longitude to center the map (always required)
center: new google.maps.LatLng(-36.857266, 174.757956), // New York
// How you would like to style the map.
// This is where you would paste any style found on Snazzy Maps.
styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
};
// Get the HTML DOM element that will contain your map
// We are using a div with id="map" seen below in the <body>
  var mapElement = document.getElementById('map');
  // Create the Google Map using our element and options defined above
  var map = new google.maps.Map(mapElement, mapOptions);
  // Let's also add a marker while we're at it
  var marker = new google.maps.Marker({
  position: new google.maps.LatLng(-36.857266, 174.757956),
  map: map,
  title: 'Snazzy!'
  });
  }
  </script>
  <?php wp_footer();?>
</body>
</html>