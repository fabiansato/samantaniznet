<?php
//declarando las variables

$error = '';

$nombre = '';
$apellido = '';
$email = '';
$pais = ' ';
$en_revision  = TRUE;

$id_user_anterior = '';

$id_user = '';

    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $nombre = trim($nombre);


	
	  $apellido = $_POST["apellido"];
    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    $apellido = trim($apellido);   

    



    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $email = trim($email); 


    /* corrobora si la persona es mayor de 18 años */
  

    $pais = $_POST["pais"];
    $pais = filter_var($pais, FILTER_SANITIZE_STRING);
    $pais = trim($pais);

    $cuotas_pagadas = $_POST["cuotas_pagadas"];
    $cuotas_pagadas = filter_var($cuotas_pagadas, FILTER_SANITIZE_STRING);
    $cuotas_pagadas = trim($cuotas_pagadas);

// ---------------- LUEGO CAMBIAR
    $username = $nombre . $apellido;

$password = $username;

//*------------- para log de pagos

    $metodo_pago = $_POST["metodo_pago"];
    $metodo_pago = filter_var($metodo_pago, FILTER_SANITIZE_STRING);
    $metodo_pago = trim($metodo_pago);

    
    $cantidad_enviada = $_POST["cantidad_enviada"];
    $cantidad_enviada = filter_var($cantidad_enviada, FILTER_SANITIZE_STRING);
    $cantidad_enviada = trim($cantidad_enviada);

//guarda el mail del administrador
$mailmio = "fabiansatodev@gmail.com";
//asunto del mensaje
$asunto = "Alguien quiere registrarse en tu curso Samanta Niz";
//Guarda la info para enviar al mail del administrador
$mensajemio = 
"Nombre: ".$nombre." 
"."Apellido: ".$apellido." 
"."Email: ".$email." 
"."pais: ".$pais." 
";

//ENVIAR CORREO
if($error == ''){
 

//guarda el mensaje para enviar al usuario satisfactoriamente
//$mensajeusuario = "¡Ya estás participando en REXONA!";

//
mail ($mailmio, $asunto, $mensajemio);

//conexion con la base y seleccion de la basede datos
include ("../conect.php");


$timestamp = time();


date_default_timezone_set('America/Argentina/Buenos_Aires');
$lafecha = date('Y/m/d', $timestamp);
$hora = date('h:i:s', $timestamp);



// ---------------- LUEGO CAMBIAR
$inicio_clases = $lafecha;
$fin_clases = $lafecha;




$cuotas_pagadas = (float)$cuotas_pagadas;


//ejecución de la sentencia sql
/* VALUES
('Fabian', 'Gonzalez', 'fabiansato@gmail.com', '1986-07-08', 0, 'otro', 'por la tele', 'por su olor', 1, 0, 'me gusta', 'asdasdasdasdasdsad', 1, 1, 1, 1);
*/
mysqli_query($conexion, "INSERT INTO `usuarios`(`nombre`, `apellido`, `username`, `email`, `password`, `pais`, `cuotas_pagadas`, `inicio_clases`, `fin_clases`, `dia_alta`, `hora_alta`) VALUES ('$nombre','$apellido','$username','$email','$password','$pais','$cuotas_pagadas','$inicio_clases','$fin_clases','$lafecha','$hora')");

//$id_user = mysqli_query($conexion, "SELECT MAX(`userid`) AS `id` FROM `usuarios`");

$id_user = 25241;
mysqli_query($conexion, "INSERT INTO `log_pagos`(`metodo_pago`, `cantidad_enviada`, `en_revision`, `id_user`, `email`) VALUES ('$metodo_pago', '$cantidad_enviada', '$en_revision', '$id_user', '$email')");


//agregar si quiere recibir el usuario un mail
//mail ($email, $asunto, $mensajeusuario);



  

    

    //Seccion de conexion con bdd
    



 // header("Location: ../exito.html");

    

}else{
    echo $error;
    echo "No se pudo mandar el formulario";
}

// ---


  //print json en pantalla


    echo '----Resultados------</br>';
    echo "Nombre ".$nombre."</br>";
    echo "Apellido ".$apellido."</br>";
     echo "Username ".$username."</br>";
        echo "Email ".$email."</br>";
         echo "password ".$password."</br>";
    echo "pais ".$pais."</br>";
     echo "cuotas pagadas ".$cuotas_pagadas."</br>";
 echo "total pagado ".$total_pagado."</br>";
 echo "inicio clases ".$inicio_clases."</br>";
 echo "fin clases ".$fin_clases."</br>";
 echo "la fecha ".$lafecha."</br>";
 echo "hora ".$hora."</br>";

?>  