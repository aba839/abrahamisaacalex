<?php
$nombre = "Pepe";
$apellido = "Hernández";
$direccion = "Bajada de San Juan 12";
$email = "pepehernandez@gmail.com";
$emailconfirmacion = "pepehernandez@gmail.com";
$dni = "72184616G";
$contraseña = "Arbusto";

for ( $pos=0; $pos < strlen($nombre); $pos ++ ) {
    $byte = substr($nombre, $pos); 
    echo "El byte " . $pos . " de $nombre tiene el valor " . ord($byte) . "<br>" ;
}

function validarMayus($nombre,$apellido){
    if(ord($nombre[0])>=65 and ord($nombre[0])<=90){
        return true;
    } else {
        return false;
    }
}

if(validarMayus($nombre, $apellido)){
    echo "La primera letra del nombre es una mayúscula.<br>";
} else {
    echo "La primera letra del nombre no es una mayúscula.<br>";
}

function validarLetra($nombre,$apellido){
    if(validarMayus($nombre, $apellido)){
        for ( $pos=0; $pos < strlen($nombre); $pos ++ ) {
            $byte = substr($nombre, $pos);
            if(ord($byte)>=97 and ord($byte)<=122){
                echo "correcto<br>";
            } else {
                echo "incorrecto<br>";
            }
        }
    } else {
        echo "El nombre no comienza con una letra mayúscula.<br>";
    }
}

validarLetra($nombre,$apellido);

function validarDireccion($direccion){

}

function validarEmail($email, $emailconfirmacion){
    if($email == $emailconfirmacion){
        echo "correcto<br>";
    } else{
        echo "incorrecto<br>";
    }    
}

validarEmail($email, $emailconfirmacion);
?>
