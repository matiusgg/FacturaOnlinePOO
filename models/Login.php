<?php
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

$arrayregistro = file("registros.txt", FILE_IGNORE_NEW_LINES);

echo('<pre>');
print_r($arrayregistro);
echo('</pre>');

        // FOREACH PARA CONDICIONAR EL ARRAY PARA LOGIN

       

        foreach($arrayregistro AS $valor) {

            if($valor == $mailinput){

              
        
                header('Location: php/formulario.php');
                echo "email correcto";
                
       
                break;
            } else if ($valor != $mailinput) {
        
                // $contadorerrores += 1;
               
                echo "Email incorrecto o no registrado";

                
                break;
            }
        
        }

        // fclose($archivo);
    }

    
}
?>