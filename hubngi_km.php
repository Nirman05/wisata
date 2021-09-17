<!-- <!DOCTYPE html>
<html>
 -->
<!-- <head> -->
<div id="hubngi_km">
  <title>Hubungi Kami</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="rate/stylem.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="rate/ratest.css">

<!-- </head> -->

<!-- <body> -->
<div class="container">
  <section id="hubngi_km">
  <div class="col-sm-12">
    <?php
    if (isset($_GET['status']) && $_GET['status'] == 'success') {
      echo '<div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              <strong> Sukses..!</strong> Data Berhasil terkirim termakasih atas masukan nya...
              </div>';
    }

    if (isset($_GET['status']) && $_GET['status'] == 'failed') {
      echo '<div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              <strong> Failed..!</strong> Data Gagal terkirim.
              </div>';
    }
    ?>
  </div>
  
  
    <form method='post' action="prsoses_frkn.php" class="col-sm-12" class="border border-primary">
      <h3>Hubungi Kami</h3>
      <hr>
      <div class="form-group row mt-4 ">
        <label for="Masukannama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
        </div>
        <label class="col-sm-2 col-form-label">Kontak Kami</label>
      </div>
      <div class="form-group row">
        <label for="Masukanemail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="email " name="email" placeholder="Email" required>
        </div>
        <label class="col-sm-4 col-form-label">Email : nirmanjr97@gmail.com</label>
      </div>
      <div class="form-group row">
        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
        <div class="col-sm-6">
          <textarea class="form-control" rows="6" id="pesan" name="pesan" placeholder="Pesan.."></textarea>
        </div>
        <label class="col-sm-4 col-form-label">Whatsapp : 082398373624</label>
      </div>
      <div class="form-group row">
        <label for="rating" class="col-sm-2 col-form-label">Rating</label>
        <div class="col-sm-6">
          <div class="rating-box">
            <div class="ratings">
              <span class="fa fa-star-o"></span>
              <span class="fa fa-star-o"></span>
              <span class="fa fa-star-o"></span>
              <span class="fa fa-star-o"></span>
              <span class="fa fa-star-o"></span>
            </div>
            <input type="hidden" name="rate" id="rating-value">
          </div>
        </div>


      </div>
      <div class="form-group row">
        <div class="col-sm-5 ml-auto  ">
          <button type="submit" name="submit" class="btn btn-primary ">Kirim</button>
        </div>
      </div>

      <script type="text/javascript" src="rate/script.js"></script>
      <script src="js/jquery-2.1.4.min.js"></script>



    </form>
  </div>
</div>
</section>