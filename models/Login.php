<?php

// No hay necesidad de poner require entre las claes padre-hijo como antes porque ya el autoload con el namespace nos hace esta funcion.
namespace models;

class Login extends Validacion {

    // propiedades

    // constructor

    // metodos

    // metodo login

    public function Login($mailinput) {

        // ABRIR ARCHIVO Y PONERLO EN ARRAY
//         $archivo = fopen('registros.txt', 'a')
// or die ('Error al crear');

// No hay necesidad de poner fopen, porque no queremos escribir o modo lectura. Sino solo visualizar. Usamos fopen para escribir o dar lectura al archivo.
// Ademas de que file() nos suple esta funcion del fopen por si sola.

$arrayregistro = file("registros.txt", FILE_IGNORE_NEW_LINES);

echo('<pre>');
print_r($arrayregistro);
echo('</pre>');

        // FOREACH PARA CONDICIONAR EL ARRAY PARA LOGIN

       

        foreach($arrayregistro AS $valor) {


              // Comprobacion de que cuando aplique los condicionales nos compare que el email del input es igual al del txt, sino es asi. Los var_dump nos permite saber que pasa.

              echo('<pre>');
              print_r($valor);
              var_dump($mailinput);
              var_dump($valor);
              echo('</pre>');

            if($valor == $mailinput){

              
        
                header('Location: php/formulario.php');
                echo "email correcto";
                
       
                break;
            } else if ($valor != $mailinput) {
        
                // $contadorerrores += 1;
               
                echo "Email incorrecto o no registrado";

                echo('<div class="Irregistro">');

echo('<h3>');
echo('Registrate para acceder aqui.'); 

echo('<a href="php/registro.php">');
echo('Registrarse');
echo('</a>');
echo('</h3>');

echo('</div>');

                
                break;
            }
        
        }

        // fclose($archivo);
    }

    
}
?>