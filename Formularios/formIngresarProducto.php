<?php
$oProducto=new Producto();
?>

<form method="post" action="AccesosForm/AccProductoIngresar.php">
<div>ID Producto:</div><div><input name="id" type=text id="id"></div>
<br>
<div>Nombre Producto:</div><div><input name="nombre" type=text id="nombre"></div>
<br>
<div>Valor Producto:</div><div><input name="valor" type="text" id="valor"></div>
<br>
<div>Stock Producto:</div><div><input name="stock" type="text" id="stock"></div>
<br>
<div>ID Categoria:</div><div><input name="idCategoria" type="text" id="idCategoria"></div>
<br>

<input type="submit" value=Ingresar>
</form>