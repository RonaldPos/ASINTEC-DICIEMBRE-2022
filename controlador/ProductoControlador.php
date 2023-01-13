<?php
include('../modelo/Productosmodelo.php');
$obj = new productos();
if($_POST){

    $obj->id = $_POST['id'];
    $obj->idProveedor = $_POST['idProveedor'];
    $obj->Nombre_Producto= $_POST['NombreProducto'];
    $obj->Stock_Producto= $_POST['CategoriaProducto'];
    $obj->Tipo_Producto = $_POST['PrecioVentaProducto'];
    $obj->Caract_Producto = $_POST['PrecioIngresoProducto'];
    $obj->Costo_Producto_Ingreso = $_POST['EntradaProducto'];
    $obj->Costo_Producto_Venta = $_POST['SalidaProducto'];
    $obj->F_Fabric_Producto = $_POST['CantidadProducto'];
    $obj->Proveedor_Producto = $_POST['DescripcionProducto'];

}
    if(isset($_POST['guarda'])){
    $obj->agregar();
}
    if(isset($_POST['modifica'])){
    $obj->modificar();
}
    if(isset($_POST['elimina'])){
    $obj->eliminar();
}
    if(isset($_POST['limpia'])){
    $obj->limpiar();
}
?>