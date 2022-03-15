<?php

$conexion = mysqli_connect("localhost", "root", "", "samyniz") or
die("Error NO SE PUEDE CONECTAR" . mysqli_error($conexion));

/* los datos a colocar son: "servidor de la base de datos", "usuario de la base de datos", "contrase�a de la base de datos", "nombre de la base de datos" */
