<?php
$password = "messiretirado";
$hash =password_hash($password, PASSWORD_DEFAULT);
echo "contrseña encriptada: $hash\n" ;
echo "contraseña original $password\n" ;
echo (password_verify($_GET["pass"], $hash) );
if (password_verify($_GET ["pass"], $hash)){
echo "contraseña correcta";

}else {
    echo "contraseña incorrecta";

}



// \n salto en linea