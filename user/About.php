<div id="About">
	<div class="container">
	<?php
		include 'admin/administrator/config/koneksi.php';
		$sql=mysqli_query($config,'SELECT * FROM about_us');
		while ($d=mysqli_fetch_array($sql)) {
			# code...
		?>

<style type="text/css">
	.jumbotron{
		background-color: #F1ECFF;
	}
</style>
	 <div class="jumbotron mt-1 "  align="center" style="max-width: 100%;">
	 	
	 	<h4 class="" align="center"> About Us</h4><hr class="my-4">
	 	<div class="col-md-2">
     					 <img src="admin/administrator/assets/img/foto_wisata/<?php echo $d['gambar_ab']; ?>" class="card-img" alt="...">
    				</div>
	 <br>	
	 	<section>
	 		<div class="row">
	 			<div class="col-md-12">
	 				<p align="center" align="justify" ><?php echo $d['informasi']; ?></p>
	 			</div>
	 		</div>
	 	</section>
	 </div>
<?php
}?>
	</div>
</div>

