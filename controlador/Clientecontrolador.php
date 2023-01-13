<?php
include('../modelo/Clientesmodelo.php');
$obj = new clientes();
if($_POST){

    $obj->idCLIENTES = $_POST['idCLIENTES'];
    $obj->Nombres = $_POST['Nombres'];
    $obj->Apellidos= $_POST['Apellidos'];
    $obj->Tipo_Documento= $_POST['Tipo_documento'];
    $obj->Numero_Documento = $_POST['Numero_documento'];
    $obj->Telefono_Eontacto = $_POST['Telefono_contacto'];
    $obj->Correo_Electronico = $_POST['Correo_electronico'];
    $obj->Direccion_residencia = $_POST['Direccion_residencia'];
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