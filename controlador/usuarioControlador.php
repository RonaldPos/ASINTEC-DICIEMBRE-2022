<?php
include('../modelo/Usuariomodelo.php');
$obj = new usuarios();
if($_POST){

    $obj->idUSUARIO = $_POST['idUSUARIO'];
    $obj->Nombres = $_POST['Nombres'];
    $obj->Nombres= $_POST['Apellidos'];
    $obj->Tipo_Usuario= $_POST['Tipo_Usuario'];
    $obj->Direccion_Domicilio = $_POST['Direccion_Domicilio'];
    $obj->Numero_Contacto = $_POST['Numero_Documento'];
    $obj->Correo_Electronico = $_POST['Correo_Electronico'];
    $obj->Username = $_POST['Username'];
    $obj->Clave_Usuario = $_POST['Clave_Usuario'];
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