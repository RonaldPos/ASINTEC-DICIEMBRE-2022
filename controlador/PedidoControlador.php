<?php
include('../modelo/Pedidosmodelo.php');
$obj = new pedidos();
if($_POST){

    $obj->id = $_POST['id'];
    $obj->Tipo_Producto = $_POST['Tipo_Producto'];
    $obj->Cantidad_Productos= $_POST['Cantidad_Productos'];
    $obj->V_Indiv_Producto= $_POST['V_Indiv_Producto'];
    $obj->V_Total_Producto = $_POST['V_Total_Producto'];
    $obj->Fecha_Pedido = $_POST['Fecha_Pedido'];
    $obj->hora_pedido = $_POST['hora_pedido'];
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