<?php
include ('librerias.php');
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/Estilos.css">
        <script src="js/jquery-latest.min.js" type="text/javascript"></script>
        <title>PRIVALIA</title>
    </head>
    <body>
        <?php
           include('menu.php');
   if (!isset($_SESSION["oUsuario"])){
include('form/formLogin.php');
}
else{
$oUsr=$_SESSION["oUsuario"];
?>

BIENVENIDO: <?=$oUsr->getNombre();?><a href="logout.php">Salir</a>
<?php }?>
</body>
</html>