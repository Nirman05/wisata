<div id="About">
  <div class="container">
<?php
#$no=0;
include 'admin/administrator/config/koneksi.php';
$sql=mysqli_query($config,'SELECT * FROM penginapan ORDER BY id_penginapan DESC');
while ($d=mysqli_fetch_array($sql)) {
#$no++


?>
              <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                       <div class="col-sm-4 ">
                         <img src="admin/administrator/assets/img/foto_wisata/<?php echo $d['gambar']; ?>" class="card-img mt-2 mb-2 ml-1 "   alt="..." >
                        </div>
                    <div class="col-md-8">
                         <div class="card-body">
                                    <h2><?php echo $d['nm_penginapan']; ?></h2>
                                   <!-- awal ratind -->
                                    
                                    <!-- Akhir rating -->
                                    <p class="card-text" >Informasi :  <?php echo $d['info_pn']; ?></p>
                                  <a href="?page=rute_pn&id=<?= $d['id_penginapan'] ?>" class="btn btn-primary">Rute</a>          
                            </div>
                      </div>
                  </div>
                </div>
        </div>


  
<?php

	
}
?>
</div>
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

