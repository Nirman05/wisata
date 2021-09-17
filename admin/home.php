<?php
session_start();
if($_SESSION['status']!="login"){
  header('location:index.php?pesan=gagal');
}
?>
<?php

ob_start();

?>

<button type="submit" name="logout" class="btn btn-primary"><a href="logout.php"><i class="fa fa-power-off" close></i> Log Out</a></button>