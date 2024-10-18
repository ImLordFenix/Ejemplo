<?php

include('clases/venta.php');
$venta = New venta();


$datos = $venta->mostrarVenta(1,0);

?>
<h2>Carrito de compras</h2>
<table>
    <tr>
        <th colspan="2">Producto</th>
        <th>Cantidad</th>
        <th>Importe</th>
    </tr>

    <?php
    foreach($datos as $fila){
        $total += $fila['subtotal'];
    ?>

    <tr>
        <td></td>
        <td><?=$fila['nombre']?></td>
        <td><?=$fila['cantidad']?></td>
        <td><?=$fila['subtotal']?></td>
    </tr>

    <?php
    }
    ?>
    <tr>
        <td colspan="3">Total:</td>
        <td><?=$total?></td>
    </tr>

</table>