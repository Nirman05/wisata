<?php
if ($_SESSION['level'] != "admin") {
  header("location:../home.php?page=dashboard");
}
?>
<?php
include '../assets/template/header.php';
?>

<div class="row">

  <body bgcolor="dark">
    <div class="col-lg-12">
      <h1>Dashboard <small>Admin</small></h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="icon-dashboard"></i> Dashboard</a></li>

      </ol>
    </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div id="wisata">



      <form method='post' action="prsoses_frkn.php" class="col-sm-12" class="border border-primary">

        <div class="form-group row">
          <label for="pesan" class="col-sm-2 col-form-label">Balas Pesan</label>
          <div class="col-sm-6">
            <textarea class="form-control" rows="6" id="pesan" name="pesan" placeholder="Pesan.."></textarea>
          </div>

          <div class="form-group row">
            <div class="col-sm-5  ">
              <button " type=" submit" name="submit" class="btn btn-primary ">Kirim</button>
            </div>
          </div>

      </form>

    </div>
  </div>
</div>


<?php
include '../assets/template/footer.php';
?>