<?php
include('../conexion/conectar.php');
include('../controlador/usuarioControlador.php');

$obj = new usuarios();
if($_POST){

    $obj->idUSUARIOS = $_POST['idUSUARIOS'];
    $obj->Nombres = $_POST['Nombres'];
    $obj->Apellidos = $_POST['Apellidos'];
    $obj->Tipo_Usuario = $_POST['Tipo_Usuario'];
    $obj->Direccion_Domicilio = $_POST['Direccion_Domicilio'];
    $obj->Numero_Contacto = $_POST['Numero_Contacto'];
    $obj->Numero_Documento = $_POST['Numero_Documento'];
    $obj->Correo_Electronico = $_POST['Correo_Electronico'];
    $obj->Username = $_POST['Username'];
    $obj->Clave_Usuario = $_POST['Clave_Usuario'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Agregando Usuario</title>
</head>
<body>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
        <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
            <form action="" name="Agregar Inf Usuario">
                <h3 class="shadow p-3 mb-5 bg-body rounded">Agregar Usuario</h3>
    <table class="table table-hover table-bordered">
        <tbody>
            <!--<tr>
                <td class="table-primary ">ID de USUARIO</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="idUSUARIO" placeholder="Codigo Asignado por el Sistema" aria-label=".form-control-sm example"></td>
            </tr>-->
            <tr>
                <td class="table-primary ">Tipo de Documento</td>
                <td>
            <select class="border border-dark form-control form-control-sm" type="text" name="idDocumento" id="idDocumento">
                <option value="value1">seleccione tipo de Documento...</option>
                <option value="value1">Cedula de Ciudania</option>
                <option value="value1">Tarjeta de Identidad</option>
                <option value="value1">Cedula de Extranjeria</option>
                <option value="value1">Pasaporte</option>
            </select>
                </td>
            </tr>
            <tr>
                <td class="table-primary">Nombres</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Ingrese los nombres" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Apellidos</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Apellidos "placeholder="Ingrese Apellidos" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary ">Tipo de Usuario</td>
                <td>
            <select class="border border-dark form-control form-control-sm" type="text" name="idDocumento" id="idDocumento">
                <option value="value1">seleccione tipo de Usuario o Rol...</option>
                <option value="value1">Administrador</option>
                <option value="value1">Recepcionista</option>
                <option value="value1">Cajero</option>
                <option value="value1">Aux de Bodega</option>
            </select>
                </td>
            </tr>
            <tr>
                <td class="table-primary">Direccion de Domicilio</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Direccion de Domicilio"placeholder="Ingrese Direccion" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Numero de Contacto</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="Numero_Contacto"placeholder="Ingrese Numero Telefonico" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Numero de Documento</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="Numero_Documento"placeholder="Ingrese Numero de Documento" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Correo Electronico</td>
                <td><input class=" border border-dark form-control form-control-sm" type="email" name="Correo_Electronico"placeholder="Ingrese Correo Electronico" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Username</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Username"placeholder="Digite un Nombre de Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Clave_Usuario</td>
                <td><input class="border border-dark form-control form-control-sm" type="password" name="Clave_Usuario"placeholder="Digite una Contraseña" aria-label=".form-control-sm example"></td>
            </tr>
            </tbody>
        </table>
            <td colspan="2">
                <center>
                    <a href="Usuarios.php">
                        <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                    <a href="Usuarios.php">
                        <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                </center>
            </td>
        </form>
    </div>
</body>