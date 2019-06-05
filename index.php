<?php
require 'vendor/autoload.php';

if(isset($_POST['emaillogin'])){

    $emailinput = $_POST['emaillogin'];



    $login = new models\Login();
    $login-> Login($emailinput);

    

    // CReamos o abrimos el txt para comprobar si el dato del input coincide con los datos del txt
    // Usamos '', porque

//     $archivo = fopen('registros.txt', 'a')
// or die ('Error al crear');

// $arrayregistro = file("registros.txt", FILE_IGNORE_NEW_LINES);

// echo('<pre>');
// print_r($array);
// echo('</pre>');
// }

// $contadorerrores = 0;

// foreach($arrayregistro AS $valor) {

//     if($valor = $emailinput){

//         header('Location: php/formulario.php');
//         echo "email correcto";

//         break;
//     } else if ( $valor != $emailinput) {

//         // $contadorerrores += 1;
//         echo "Email incorrecto o no registrado";
//         break;
//     }

// }

// if($contadorerrores >= 1) {

//     echo "Email incorrecto o no registrado";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">

    <h1>
    Login
    </h1>

<div class="contenedorlogin">

<label for="text">

Email

</label>

<input type="email" name="emaillogin" id="emaillogin" autofocus='autofocus'>


<button type="submit">
          login
      </button>

</div>

<div class="Irregistro">

<h3>
Registrate para acceder aqui. 

<a href="php/registro.php">
Registrarse
</a>
</h3>

</div>


</form>
</body>
</html>