
<div id="wisata_alam">
	<div class="container">
	<?php
						
		include 'admin/administrator/config/koneksi.php';
		$sql = mysqli_query($config, 'SELECT * FROM df_informasi ORDER BY id_informasi DESC');
		while ($d = mysqli_fetch_array($sql)) {
					
		?>

			
		<div class="card mb-3" style="max-width: 100%;">
			<div class="row ">
				<div class="col-md-4">
					<img src="admin/administrator/assets/img/foto_wisata/<?php echo $d['gambar']; ?> " class="card-img"  alt="wisata_alam" >
				</div>
				<div class="col-md-8">
					<div class="card-body">
							
								<h2 > <?php echo $d['nm_infokasi']; ?></h2>
								<p class="card-text text-justify">Informasi : <?php echo $d['info_wst']; ?></p>

							</div>
						</div>
					</div>
				</div>
	

	<?php

		}
	?>
	</div>
</div>

