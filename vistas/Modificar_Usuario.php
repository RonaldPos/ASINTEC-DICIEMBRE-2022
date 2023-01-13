<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../configuracion/css/bootstrap.min.css">
            <title>MODIFICAR USUARIO</title>
    </head>
        <body>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded Larger shadow border border-dark ">
                <img src="../imagenes/LogoAsintec.jpg"width="150" height="110">
                <form action="" name="Modificar Usuario">
                <h3 class="shadow p-3 mb-5 bg-body rounded">Modificar Usuario</h3>
            <table class="table table-hover table-bordered">
                <tbody>
            <tr>
                <td class="table-primary">Nombres</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Nombres"placeholder="Digite nombres del Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Apellidos</td>
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Apellidos"placeholder="Digite apellidos del Usuario" aria-label=".form-control-sm example"></td>
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
                <td><input class=" border border-dark form-control form-control-sm" type="text" name="Direccion"placeholder="Ingrese Direccion de Domicilio" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Numero de Contacto</td>
                <td><input class=" border border-dark form-control form-control-sm" type="number" name="telefono"placeholder="Ingrese Numero de Contacto" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Numero de Documento</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="Entradas"placeholder="Ingrese Numero de Documento" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Correo Electronico</td>
                <td><input class="border border-dark form-control form-control-sm" type="email" name="email"placeholder="Ingrese Correo Electronico" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Username</td>
                <td><input class="border border-dark form-control form-control-sm" type="text" name="usuario"placeholder="Ingrese su Usuario" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="table-primary">Clave_Usuario</td>
                <td><input class="border border-dark  accordionform-control form-control-sm" type="password" name="password"placeholder="Digite su Contraseña" aria-label=".form-control-sm example"></td>
            </tr>
        </tbody>
        </table>
            <td colspan="2">
                <center>
                    <a href="usuarios.php">
                        <button class=" btn-sm btn btn-outline-success" type="button" name="guarda">Guardar Cambios</button>
                    </a>
                    <a href="usuarios.php">
                        <button class=" btn-sm  btn btn-outline-danger" type="button" name="salir">Cerrar</button>
                    </a>  
                </center>
            </td>
        </form>
    </div>
</body>