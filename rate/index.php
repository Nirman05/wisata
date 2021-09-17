<!DOCTYPE html>
<html>
<head>
	<title>Rating System</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method="POST" action="index.php">
 <div class="rating-box">
    <h1>Rating System</h1>
      <div class="ratings">
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
      </div>
      <input type="hidden" name="rate" id="rating-value">
      <input type="submit" name="submit" class="btn btn-primary">
 </div>
</form>
<script src="script.js"></script>
</body>
</html>
<?php
  include '../admin/config/koneksi.php';
  if(isset($_POST['submit'])){
    $rate = $_POST['rate'];
    mysqli_query($config, "INSERT INTO fr_kontak VALUES set rate='$rate'");
  }

?>
