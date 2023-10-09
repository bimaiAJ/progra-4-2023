<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Producto</title>
</head>
<body>
<?php
    $id = $_GET['id'];
    $conexion=mysqli_connect("localhost","root","perraloca1","basejamal");               
    $SQL="select * from productos,categorias where IdCategoria=IdCat and IdProducto=$id";
    $dato = mysqli_query($conexion, $SQL);
    $fila=mysqli_fetch_array($dato)
?>
<br><?php echo $fila['IdProducto']; ?>
<br><?php echo $fila['Precio']; ?>
<br><?php echo $fila['Talla']; ?>
<br><a href="productos.blade.php" ><b>Regresar a Productos</b></a>
</body>
</html>