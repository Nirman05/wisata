<?php include 'admin/config/koneksi.php'; ?>

  <div class="container">
    <div class="card mb-3" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-12">
              <p><h3 class="ml-2">  Peta Kabupaten Buol</h3><hr></p>
              <div id="map-canvas" style="height: 500px;"></div>
          </div>
        </div>
      </div>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN2bsTapDESXaE3C2hL-Y8T3h0wTkD6yA&callback=initialize" async defer></script>
 <script src="https://maps.googleapis.com/maps/api/streetview?size=400x400&location=47.5763831,-122.4211769
&fov=80&heading=70&pitch=0
&key=AIzaSyAN2bsTapDESXaE3C2hL-Y8T3h0wTkD6yA&callback&signature=YOUR_SIGNATURE"></script>
    <script>
        
    var marker;
      function initialize() {
          
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        
        <?php
            $query = mysqli_query($config,"select * from df_wisata");
            while ($data = mysqli_fetch_array($query))
            {
                $gbr = ' <img src=admin/assets/img/foto_wisata/ $data["gambar"]; >';
                $nama = $data['nm_lokasi'];
                $lat = $data['gr_lintang'];
                $lon = $data['gr_bujur'];
                
                echo ("addMarker( $lat, $lon, '<b>$nama</b>');\n");                        
            }
          ?>
           
       
          
        // Proses membuat marker 
        function addMarker ( lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new  mapIcons.Marker ({
                map: map,
                position: lokasi
        
   
    

            });       
            map.fitBounds(bounds);
            
            bindInfoWindow(marker, map, infoWindow, info);

         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html, label) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
            label.labels[labelIndex++ % labels.length];
          });
        }

        <?php
            $query = mysqli_query($config,"select * from pantai");
            while ($data = mysqli_fetch_array($query))
            {
              
                
                $nama = $data['nm_pantai'];
                $in = $data['inf_pantai'] ;
                $lat = $data['gr_lintang'];
                $lon = $data['gr_bujur'];
                
                echo ("addMarker( $lat, $lon, '<b>$nama</b>' ,'<b>$in</b>');\n");                        
            }
          ?>
           
  
          
        // Proses membuat marker 
        function addMarker ( lat, lng, info, label) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new  mapIcons.Marker ({
                map: map,
                position: lokasi,
                label : label
                
        
   
    

            });       
            map.fitBounds(bounds);
            
            bindInfoWindow(marker, map, infoWindow, info, label);

         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
            <?php
                $query = mysqli_query($config,"select * from df_kuliner");
                while ($data = mysqli_fetch_array($query))
                {
                    $nama = $data['nm_kuliner'];
                    $lat = $data['gr_lintang'];
                    $lon = $data['gr_bujur'];
                    
                    echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");                        
                }
              ?>

          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi,
                 // icon: "https://rachmat.id/content/uploads/2020/01/flag-marker.png"


            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }

      google.maps.event.addDomListener(window, 'load', initialize);
    
      
    

    
    </script>
    
</div>