<?php
   class usuarios{
                  public $idUSUARIO;
                  public $Nombres;
                  public $Apellidos;
                  public $Tipo_Usuario;
                  public $Direccion_Domicilio;
                  public $Numero_Contacto;
                  public $Numero_Documento;
                  public $Correo_Electronico;
                  public $Username;
                  public $Clave_Usuario;


                  function agregar(){
                     $conec = new Conexion();
                                       $c = $conec->conectando();
                                        $query = "select * from usuarios where idUSUARIO = '$this->idUSUARIO'";
                                       $ejecuta = mysqli_query($c, $query);
                                       if(mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
                                       }else{
                                          $insertar = "insert into usuarios value(
                                          '$this->idUSUARIO', 
                                          '$this->Nombres',
                                          '$this->Apellidos',
                                          '$this->Tipo_Usuario',
                                          '$this->Direccion_Domicilio',
                                          '$this->Numero_Contacto',
                                          '$this->Numero_Documento',
                                          '$this->Correo_Electronico',
                                          '$this->Username',
                                          '$this->Clave_Usuario')";
                                          echo $insertar;
                                          mysqli_query($c,$insertar);
                                          echo "<script> alert('El Usuario fue Creado en el Sistema')</script>"; 
                                       }
                                    }

                  function modificar(){
                     $conec = new Conexion();
                                       $c = $conec->conectando();
                                        $query = "select * from usuarios where idUsuario = '$this->idUsuario'";
                                       $ejecuta = mysqli_query($c, $query);
                                       if(mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('el usuario fue modificado')</script>";
                                       }else{
                                          $update = "update usuario set 
                                          idUSUARIO='$obj->idUsuario',
                                          Nombres='$obj->NombreUsuario',
                                          Apellidos='$obj->ApellidoUsuario',
                                          Tipo_Usuario='$obj->TelefonoUsuario',
                                          Direccion_Domicilio='$obj->CorreoUsuario',
                                          Numero_Contacto='$obj->DireccionUsuario',
                                          Numero_Documento='$obj->IniciosesionUsuario',
                                          Correo_Electronico='$obj->ContraseñaUsuario',
                                          Username='$obj->ContraseñaUsuario',
                                          Clave_Usuario='$obj->ContraseñaUsuario',
                                          where  idUsuario, = '$this->idUsuario',";
                                          echo $update;
                                          mysqli_query($c,$update);
                                          echo "<script> alert('el usuario fue Modificado en el Sistema')</script>";
                                             }                    
                                          }
                  /*function eliminar(){
                     $conec = new Conexion();
                                       $c = $conec->conectando();
                                       $query = "select * from usuario where idUsuario = '$this->idUsuario'";
                                       $ejecuta = mysqli_query($c, $query);
                                       if(mysqli_fetch_array($ejecuta)){
                                          echo "<script> alert('el usuario fue eliminado correctamente')</script>";
                                       }else{
                                          $erase = "erase usuario set
                                          idUsuario='$obj->idUsuario',
                                          NombreUsuario='$obj->NombreUsuario',
                                          ApellidoUsuario='$obj->ApellidoUsuario',
                                          TelefonoUsuario='$obj->TelefonoUsuario',
                                          CorreoUsuario='$obj->CorreoUsuario',
                                          DireccionUsuario='$obj->DireccionUsuario',
                                          IniciosesionUsuario='$obj->IniciosesionUsuario',
                                          ContraseñaUsuario='$obj->ContraseñaUsuario',
                                          idDocumento='$obj->idDocumento'
                                          where  idUsuario, = '$this->idUsuario', ";
                                          echo $erase;
                                          mysqli_query($c,$erase);
                                          echo "<script> alert('el usuario fue eliminado en el Sistema')</script>";
                                             }                    
                                          }*/
               function eliminar(){
                                       try{
                                          $conec = new conexion();
                                          $c= $conec->conectando();
                                          $put_off="delete from usuarios where idUSUARIO='$this->idUSUARIO'";
                                          echo $put_off;
                                          mysql_query($c,$put_off);
                                          echo"<script> alert('El Usuario fue Eliminado Efectivamente del Sistema')</script>";

                                       }catch(Exception $e){
                                          echo "ERROR";
                                       }
               }
                                          function limpiar(){}
}
?>