<?php

$errorMSG = "";
 
// NOMBRE
if (empty($_POST["name"])) {
    $errorMSG = "Tu nombre es requerido";
} else {
    $name = $_POST["name"];
}
 
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Tu mail es requerido";
} else {
    $email = $_POST["email"];
}
 
// MENSAJE
if (empty($_POST["message"])) {
    $errorMSG .= "Tu mensaje es requerido ";
} else {
    $message = $_POST["message"];
}
 
$EmailTo = "maria_silvia_sosa@hotmail.com";
$Subject = "Msj de la Pagina CAFSa";
 
//Prepara el cuerpo del mensaje
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Algo salio mal! :(";
    } else {
        echo $errorMSG;
    }
}
 
?>