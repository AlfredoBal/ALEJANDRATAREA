<?php
if(!empty($_POST["btnregistrar"])) {

if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["ciudad"]) and !empty($_POST["carrera"]) and !empty($_POST["nivel"])) {
    echo"TODO OK";
}else{
    echo "ALGUNOS DE LOS CAMPOS ESTAN VACIOS";
}
}
?>