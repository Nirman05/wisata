<!DOCTYPE html>
<html>
  <head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Map</title>
    
  </head>
  <body>
  <div class="card mb-3" style="max-width: 100%;">
      <div class="row no-gutters">
          <div class="col-sm-8 ">
        <?php
            include 'admin/administrator/config/koneksi.php';
            if(isset($_GET['id'])){
            $id =$_GET['id'];
            $query = mysqli_query($config, "SELECT * FROM pantai WHERE id_pantai='$id'");
            $d = mysqli_fetch_array($query);
           }
          ?>
          <div id="destinationHolder">
            <input type="text" id="destination_input" value="<?php echo $d['gr_lintang']; echo ","; echo $d['gr_bujur']; ?>" onClick="this.select();" />
            <button id="submit">rute</button> 
          </div>
          <div id="mapContainer">
            <div id="map" style="height: 500px;"></div>
               
       
          
        <script>
          var map, infoWindow;
          function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 1.107117, lng: 121.409629},
              zoom: 12
            });
            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer();        
            directionsRenderer.setMap(map);  

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                };
                var originMarker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    title: 'My current position!'
                });    
                map.setCenter(pos);
                document.getElementById('submit').addEventListener('click', function(){
                    console.log('test');
                    calculateAndDisplayRoute(pos,directionsService,directionsRenderer)
                });  
              }, function() {
                console.log('current position issue');
              });
            } else {
              console.log('Browser does not support Geolocation!');
            }
          }
            
          function calculateAndDisplayRoute(origin, directionsService, directionsRenderer) {
            directionsService.route(
                {
                  origin: origin,
                  destination: {query: document.getElementById('destination_input').value},
                  travelMode: 'DRIVING',
                  provideRouteAlternatives: true
                },
                function(response, status) {
                  if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                      console.log(response);
                  } else {
                    window.alert('Directions request failed due to ' + status);
                  }
                });
          }
        </script>
       
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN2bsTapDESXaE3C2hL-Y8T3h0wTkD6yA&callback=initMap">
        </script>
  </div>
     </div>
  </body>
</html>