<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>

</head>
<body>
<table class="table table-dark table-striped table_id">

<thead>    
<tr>
<th>ID</th>
<th>Categoria</th>

</tr>
</thead>
<tbody>

<?php

    $conexion=mysqli_connect("localhost","root","perraloca1","basejamal");               
    $SQL="select * from categorias";
    $dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){      
?>
<tr>
<td><?php echo $fila['IdCat']; ?></td>
<td><?php echo $fila['Producto']; ?></td>

</tr>

<?php
} // finaliza el whiles
}else{

?>
<tr class="text-center">
<td colspan="16">No existen registros</td>
</tr>
<?php
}
?>
</body>
</table>

</div>
<a   href="productos.blade.php" ><b>Ver productos</b></a>
</body>
</html>
