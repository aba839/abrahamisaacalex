<?php 
$nombre = "Pepe";
$apellido = "Hernández";
$direccion = "Bajada de San Juan 12, 28000, Madrid, España";
$email = "pepehernandez@gmail.com";
$emailconfirmacion = "pepehernandez@gmail.com";
$dni = "72184616G";
$pass = "Arbusto1$";


function validarNombre($nombre) {
    // Esto valida que empieza por mayuscula 
    if (ord($nombre[0]) >= 65 && ord($nombre[0]) <= 90) {
        // Esto valida que contenga letras
        for ($i = 1; $i < strlen($nombre); $i++) {
            // Esto valida que no sea mayuscula
            if (!(ord($nombre[$i]) >= 65 && ord($nombre[$i]) <= 90) &&
                !(ord($nombre[$i]) >= 97 && ord($nombre[$i]) <= 122)) {
                return false;
            }
        }
        return true;
    }
    return false;
}

function validarApellido($apellido) {
    // Esto valida que empieza por mayuscula 
    if (ord($apellido[0]) >= 65 && ord($apellido[0]) <= 90) {
        // Esto valida que contenga letras
        for ($i = 1; $i < strlen($apellido); $i++) {
            // Esto valida que no sea mayuscula
            if (!(ord($apellido[$i]) >= 65 && ord($apellido[$i]) <= 90) &&
                !(ord($apellido[$i]) >= 97 && ord($apellido[$i]) <= 122)) {
                return false;
            }
        }
        return true;
    }
    return false;
}

//function ValidarDireccion($direccion){ es con count()

//}

function validarEmail($email, $emailconfirmacion){
    if($email == $emailconfirmacion){
        echo "correcto<br>";
    } else{
        echo "incorrecto<br>";
    }    
}

function validarDNI($dni) {
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
    return substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra;
}


function validarPass($pass) {
    
}
?>