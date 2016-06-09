<?php
session_start(); 
session_destroy();
header('Location:login.php');
?>

<script>
	document.location.href="index.php";
</script>