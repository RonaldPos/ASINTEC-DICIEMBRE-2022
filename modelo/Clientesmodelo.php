<?php
    class clientes{
                    public $id;
                    public $Nombres;
                    public $Apellidos;
                    public $Tipo_Documento;
                    public $Numero_Documento;
                    public $Telefono_Contacto;
                    public $Correo_Electronico;
                    public $Direccion_Residencia;

                function agregar(){
                        $conec = new conexion();
                                    $c = $conec->conectando();
                                    $query = "select * from clientes where idCliente = '$this->idCLIENTE'";
                                        $ejecuta = mysqli_query($c, $query);
                                    if(mysqli_fetch_array($ejecuta)){
                                        echo "<script> alert('El Producto ya Existe en el Sistema')</script>";
                                    }else{
                                        $insertar = "insert into clientes value(
                                        '$this->idCLIENTE',
                                        '$this->Nombres',
                                        '$this->Apellidos',
                                        '$this->Tipo_Documento',
                                        '$this->Numero_Documento',
                                        '$this->Telefono_Contacto',
                                        '$this->Correo_Electronico',
                                        '$this->Direccion_Residencia')";
                                        echo $insertar;
                                        mysqli_query($c,$insertar);
                                        echo "<script> alert('El Cliente a sido Agregado correctamente en el Sistema')</script>"; 
                                    }
                                    }

                function modificar(){
                            $conec = new conexion();
                                        $c = $conec->conectando();
                                        $query = "select * from clientes where id = '$this->id'";
                                        $ejecuta = mysqli_query($c, $query);
                                    if(mysqli_fetch_array($ejecuta)){
                                        echo "<script> alert('El Cliente fue modificado correctamente en el sistema')</script>";
                                    }else{
                                        $update = "update clientes set 
                                        id='$obj->id',
                                        Nombres='$obj->Nombres',
                                        Apellidos='$obj->Apellidos',
                                        Tipo_Documento='$obj->Tipo_Documento',
                                        Numero_Documento='$obj->Numero_Documento',
                                        Telefono_Contacto='$obj->Telefono_Contacto',
                                        Corrreo_Electronico='$obj->Corrreo_Electronico',
                                        Direccion_Residencia='$obj->Direccion_Residencia'
                                        where  idCLIENTE, = '$this->idCLIENTE',";
                                        echo $update;
                                        mysqli_query($c,$update);
                                        echo "<script> alert('El Cliente fue Modificado en el Sistema Correctamente')</script>";
                                            }                    
                                        }
                function eliminar(){
                            $conec = new conexion();
                                        $c = $conec->conectando();
                                        $query = "select * from clientes where id = '$this->id'";
                                        $ejecuta = mysqli_query($c, $query);
                                    if(mysqli_fetch_array($ejecuta)){
                                        echo "<script> alert('El Cliente fue eliminado correctamente del Sistema')</script>";
                                    }else{
                                        $erase = "erase clientes set
                                        id='$obj->id',
                                        Nombres='$obj->Nombres',
                                        Apellidos='$obj->Apellidos',
                                        Tipo_Documento='$obj->Tipo_Documento',
                                        Numero_Documento='$obj->Numero_Documento',
                                        Telefono_Contacto='$obj->Telefono_Contacto',
                                        Corrreo_Electronico='$obj->Corrreo_Electronico',
                                        Direccion_Residencia='$obj->Direccion_Residencia'
                                        where  id, = '$this->id',";
                                        echo $erase;
                                        mysqli_query($c,$erase);
                                        echo "<script> alert('El Cliente fue eliminado en el Sistema Correctamente')</script>";
                                            }                    
                                        }

                function limpiar(){}
}
?>