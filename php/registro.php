<?php

require '../vendor/autoload.php';

if(isset($_POST['emaillogin'])){

    $emailinput = $_POST['emaillogin'];



    $Registro = new models\Registro();
    $Registro-> Registro($emailinput);




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
    <form action="registro.php" method="post">

    <h1>
    Registrarse
    </h1>

<div class="contenedorlogin">

<label for="text">

Email

</label>

<input type="email" name="emaillogin" id="emaillogin" autofocus='autofocus'>


<button type="submit">
          Registro
      </button>

</div>


</form>
</body>
</html>