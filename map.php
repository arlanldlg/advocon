<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">
	var map;
function initMap() {
	var lat = parseFloat(document.getElementById("lat").value);
	var lng = parseFloat(document.getElementById("lng").value);
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: lat, lng: lng},
    zoom: 19
  });
  
  var marker = new google.maps.Marker({
  position : {lat: lat, lng: lng},
  title: document.getElementById("tit").value
  });
  marker.setMap(map);
}


    </script>
	<input type="text" id = lat value="<?php echo $_GET['lat'];?>" disabled style="visibility:hidden;">		
	<input type="text" id  = lng value="<?php echo $_GET['long'];?>" disabled style="visibility:hidden;">
	<input type="text" id  = tit value="<?php echo $_GET['tit'];?>" disabled style="visibility:hidden;">
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALHPDuAPZ6hGsLw54SKtVj237w-Mm035U&callback=initMap">
    </script>
  </body>
</html>