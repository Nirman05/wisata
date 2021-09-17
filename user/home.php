
<script type="text/javascript" src="./js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox.js"></script>
<!-- css -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/jquery.fancybox.css"/>
<!-- <link rel="stylesheet" type="text/css" href="css2.css"/> -->

<!-- Selector -->
<script type="text/javascript">
  $(document).raedy(function () {
    $(".perbesar").fancybox();
  });
</script>




<div class="container">
 
    <div class="card mb-3" style="max-width: 100%; ">
          <div class="row no-gutters">
            <div class="col-md-12">
              <p><h3 class="ml-2">  Peta Kabupaten Buol</h3><hr></p>
             
                <!-- t -->
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href="image/gis.jpg" class="perbesar">
                        <img src="image/gis.jpg" class="d-block w-100" alt="GIS"></a>
                      </div>
                      <div class="carousel-item">
                        <a href="image/gis1.gif" class="perbesar">
                        <img src="image/gis1.gif" class="d-block w-100" alt="GIS"></a>
                      </div>
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <!-- h -->
                <!-- <p>Sumber :<a href="https://petatematikindo.wordpress.com/2013/01/09/administrasi-kabupaten-buol/#respond">petatematikindo.wordpress.com</a></p> -->
             
          </div>
        </div>
      </div>
      <br>
      <div class="card mb-3" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-12">
              <p><h3 class="ml-2">  Peta Kabupaten Buol</h3><hr></p>

          </div>
        </div>
        <div id="googleMap" style="height: 500px;"></div>
      </div>
      
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN2bsTapDESXaE3C2hL-Y8T3h0wTkD6yA&callback=initialize" async defer></script>
<script type="text/javascript">
// variabel global marker



var marker;
  
function buatMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center: new google.maps.LatLng(1.107117, 121.409629),
	zoom: 10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    buatMarker(this, event.latLng);
  });

}
</script>

</div>

		
