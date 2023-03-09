<?php
$nombre = "Pepe";
$apellido = "Hernández";
$direccion = "Bajada de San Juan 12";
$email = "pepehernandez@gmail.com";
$emailconfirmacion = "pepehernandez@gmail.com";
$dni = "72184616G";
$contraseña = "arbusto";

/*for ( $pos=0; $pos < strlen($nombre); $pos ++ ) {
    $byte = substr($nombre, $pos); 
    echo "El byte " . $pos . " de $nombre tiene el valor " . ord($byte) . "<br>" ;
   }
function validarMayus($nombre,$apellido){
if(ord($nombre[0])>=65 and ord($nombre[0])<=90){
    return true;
    else {
    return false;
    }
}
}
function validarLetra($nombre,$apellido){
    for ( $pos=0; $pos < strlen($nombre); $pos ++ ) {
        $byte = substr($nombre, $pos);
        if(ord($byte)>=97 and ord($byte)<=122)
        echo "correcto";
        else 
        echo "incorrecto";
}
}

validarLetra($nombre,$apellido);*/

//function validarDireccion($direccion)

function validarEmail($email, $emailconfirmacion){
    if($email == $emailconfirmacion){
        echo "correcto";
    } else{
        echo "incorrecto";
    }    
}

validarEmail($email, $emailconfirmacion);


?>