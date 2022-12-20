<?php
include('../conexion/conectar.php');
include('../controlador/ProductoControlador.php');

$obj = new PRODUCTOS();
if($_POST){

    $obj->idPRODUCTOS = $_POST['idPRODUCTOS'];
    $obj->Nombre_Producto = $_POST['Nombre_Producto'];
    $obj->Stock_Producto = $_POST['Stock_Producto'];
    $obj->Tipo_Producto = $_POST['Tipo_Producto'];
    $obj->Caract_Producto = $_POST['Caract_Producto'];
    $obj->Costo_Producto_Ingreso = $_POST['Costo_Producto_Ingreso'];
    $obj->Costo_Producto_Venta = $_POST['Costo_Producto_Venta'];
    $obj->F_Fabric_Producto = $_POST['F_Fabric_Producto'];
    $obj->Proveedor_Producto = $_POST['Proveedor_Producto'];
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
    <title>Agregar Producto</title>
</head>
<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
        <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
            <form action="" name="Agregar Producto">
                <h3 class="shadow p-3 mb-5 bg-body rounded">Agregar Nuevo Producto</h3>
    <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <td class="table-primary ">Nombre_Producto</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Nombre_Producto" placeholder="Ingrese Nombre Del Producto" aria-label=".form-control-sm example"></td>
            </tr><tr>
                <td class="table-primary ">Stock_Producto</td>
                <td><input class="border border-dark form-control form-control-sm" type="number" name="Stock_Producto"placeholder="Ingrese la cantidad en el stock" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Tipo_Producto</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Tipo_Producto"placeholder="Digite el Tipo de producto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Caract_Producto</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Caract_Producto "placeholder="Digite la Caracteristica del Producto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Costo_Producto_Ingreso</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="Costo_Producto_Ingreso"placeholder="Ingrese Costo de Entrada" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Costo_Producto_Venta</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="Costo_Producto_Venta"placeholder="Ingrese Costo de Venta" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">F_Fabric_Producto</td>
                <td><input class="border border-dark form-control form-control-sm" type="date" name="F_Fabric_Producto"placeholder="Ingrese Fecha" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Proveedor_Producto</td>
                <td><input class="border border-dark  accordionform-control form-control-sm" type="text" name="Proveedor_Producto"placeholder="Digite Proveedor" aria-label=".form-control-sm example"></td>
            </tr>
            </tbody>
        </table>
            <td colspan="2">
                <center>
                    <a href="Productos_stock.php">
                        <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                    <a href="Productos_stock.php">
                        <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                </center>
            </td>
        </form>
    </div>
</body>