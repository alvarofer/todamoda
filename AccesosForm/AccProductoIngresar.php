 <?php
include("../Libreria.php");

$oPro=new Producto();
$oPro->nombre_producto=$_POST["Nombre"];
$oPro->precio_producto=$_POST["Valor"];
$oPro->stock_producto=$_POST["Stock"];
$oPro->id_categoriaProducto=$_POST["ID_Categoria"];

if ($oUsr->ingresoProducto($_POST["Ingresar"])){
    echo json_encode(true);
    return;
 }
echo json_encode(false);
?>

 

<script>
	document.location.href="<?=PATHURL?>producto_agregar.php";
</script>