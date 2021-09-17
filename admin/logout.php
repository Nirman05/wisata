<?php

session_start();
session_destroy();
echo '<script>
		alert("username atau passsword salah ");
		</script>';
header('location: index.php');
	
?>