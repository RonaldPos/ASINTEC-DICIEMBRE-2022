<?php
include('../conexion/conectar.php');
include('../controlador/ClienteControlador.php');

$obj = new CLIENTES();
if($_POST){

    $obj->idCLIENTES = $_POST['idCLIENTES'];
    $obj->Nombres = $_POST['Nombres'];
    $obj->Apellidos = $_POST['Apellidos'];
    $obj->Tipo_Documento = $_POST['Tipo_Documento'];
    $obj->Numero_Documento = $_POST['Numero_Documento'];
    $obj->Telefono_Contacto = $_POST['Telefono_Contacto'];
    $obj->Correo_Electronico = $_POST['Correo_Electronico'];
    $obj->Direccion_Residencia = $_POST['Direccion_Residencia'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
    <title>Agregar Cliente</title>
</head>
<body>
      <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
      <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
        <form action="" name="Agregar Cliente">
          <h3 class="shadow p-3 mb-5 bg-body rounded">Agregar Nuevo Cliente</h3>
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <!--<td class="table-primary ">Id Cliente</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="idClientes" placeholder="Codigo Asignado por el Sistema" aria-label=".form-control-sm example"></td>
              </tr>-->

              <tr>
                <td class="table-primary">Nombres</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Ingrese Nombres del Cliente" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Apellidos</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Apellidos"placeholder="Ingrese Apellidos del Cliente" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary ">Tipo_Documento</td>
                <td>
            <select class="border border-dark form-control form-control-sm" type="text" name="Tipo_Documento">
                <option value="value1">seleccione tipo de Documento...</option>
                <option value="value1">Cedula de Ciudania</option>
                <option value="value1">Tarjeta de Identidad</option>
                <option value="value1">Cedula de Extranjeria</option>
                <option value="value1">Pasaporte</option>
            </select>
                </td>
              </tr>
              <tr>
                <td class="table-primary">Numero_Documento</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Numero_Documento"placeholder="Ingrese Numero de documento del Cliente" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Telefono_Contacto</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Telefono_Contacto"placeholder="Ingrese Numero de Telefono del Cliente" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Correo_Electronico</td>
                <td><input class=" border border-dark form-control form-control-sm" type="correo" name="Correo_Electronico"placeholder="Ingrese Correo Electronico del Cliente" aria-label=".form-control-sm example"></td>
              </tr>
              <tr>
                <td class="table-primary">Direccion_Residencia</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Direccion_Residencia"placeholder="Ingrese Direccion de Domicilio del Cliente" aria-label=".form-control-sm example"></td>
              </tr>
              
            </tbody>
          </table>
          <td colspan="2">
                  <center>
                    <a href="Clientes.php">
                      <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                      <a href="Clientes.php">
                      <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                  </center>
          </td>
        </form>
      </div>
</body>
</html>