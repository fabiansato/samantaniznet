<?php
//declarando las variables

$error = '';

$nombre = 'asdsadasd';
$apellido = 'asdasdsad';



//ENVIAR CORREO
if($error == ''){
 


//conexion con la base y seleccion de la basede datos
include ("../conect.php");





//ejecución de la sentencia sql
/* VALUES
('Fabian', 'Gonzalez', 'fabiansato@gmail.com', '1986-07-08', 0, 'otro', 'por la tele', 'por su olor', 1, 0, 'me gusta', 'asdasdasdasdasdsad', 1, 1, 1, 1);
*/
mysqli_query($conexion, "INSERT INTO `usuarios`(`nombre`, `apellido`) VALUES ('$nombre','$apellido')");


}else{
    echo $error;
    echo "No se pudo mandar el formulario";
}

// ---


  //print json en pantalla


    echo '----Resultados------</br>';
    echo "Nombre ".$nombre."</br>";
    echo "Apellido ".$apellido."</br>";



?>  