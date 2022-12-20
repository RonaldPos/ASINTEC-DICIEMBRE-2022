<?php
include('../conexion/conectar.php');
include('../controlador/ProductoControlador.php');

$obj = new PEDIDOS();
if($_POST){

    $obj->idPEDIDOS = $_POST['idPEDIDOS'];
    $obj->Tipo_Pedido = $_POST['Tipo_Pedido'];
    $obj->Cantidad_Product = $_POST['Cantidad_Product'];
    $obj->V_Indiv_Product = $_POST['V_Indiv_Product'];
    $obj->V_Total_Product = $_POST['V_Total_Product'];
    $obj->Fecha_Pedido = $_POST['Fecha_Pedido'];
    $obj->DescripcionPedido = $_POST['Numero_Pedido'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <link rel="stylesheet" href="../configuracion/css/font-awesome.min.css">
    <title>AGREGAR PEDIDO</title>
</head>
<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
        <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
            <form action="" name="Agregar Producto">
                <h3 class="shadow p-3 mb-5 bg-body rounded">Nuevo Pedido</h3>
    <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <td class="table-primary ">Tipo_Pedido</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Tipo_Pedido" placeholder="Ingrese el Tipo de Pedido" aria-label=".form-control-sm example"></td>
            </tr><tr>
                <td class="table-primary ">Cantidad_Product</td>
                <td><input class="border border-dark form-control form-control-sm" type="number" name="Cantidad_Product"placeholder="Ingrese la Cantidad de Productos" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">V_Indiv_Product</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="V_Indiv_Product"placeholder="Ingrese el Valor Indiv del producto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">V_Total_Product</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="V_Total_Product"placeholder="Ingrese el Valor Total del producto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Fecha_Pedido</td>
                <td><input class="border border-dark  accordionform-control form-control-sm" type="date" name="Fecha_Pedido"placeholder="Digite Feacha" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Numero_Pedido</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="Numero_Pedido"placeholder="Ingrese Numero de Pedido" aria-label=".form-control-sm example"></td>
            </tr>
            </tbody>
        </table>
            <td colspan="2">
                <center>
                    <a href="Productos_stock.php">
                        <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar</button>
                    </a>
                    <a href="Productos_stock.php">
                        <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                </center>
            </td>
        </form>
    </div>
</body>