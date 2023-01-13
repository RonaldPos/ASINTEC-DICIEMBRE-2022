<?php

class conexion{
                private $servidor = "localhost";
                private $usuario ="root";
                private $password = "";
                private $db = "asintec_final";

    
                public function conectando(){
                        $conec = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->db)
                            or die ("Error al conectar con el servidor comuniquese con el administrador"); 
                            return $conec;
                                            } 
                }
$obj = new conexion();
if($obj->conectando()){
// echo "conectado";
}
?>