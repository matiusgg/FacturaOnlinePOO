<?php
namespace models;

class Registro extends Validacion {

    // propiedades

    // constructor

    // metodos


    public function Registro($mailinput) {

       // ABRIR ARCHIVO Y PONERLO EN ARRAY

       // Cuida el directorio o donde tengas el archivo que vas a poner en fopen o en file(). Por si no lo pones bien se te va a repetir
        $archivo = fopen('../registros.txt', 'a')
or die ('Error al crear');

$arrayregistro = file("../registros.txt", FILE_IGNORE_NEW_LINES);

echo('<pre>');
print_r($arrayregistro);
echo('</pre>');

        // FOREACH PARA CONDICIONAR EL ARRAY PARA LOGIN

    //    $contadorerrores = 0;

        foreach($arrayregistro AS $valor) {

            if($valor == $mailinput){

                echo "email ya registrado";
                
       // aqui el break nos ayuda a parar por si esa condicion se cumple.
                break;

            } else {

// tenemos que tener el OPEN para que nos de el fwrite
// y el header antes para que nos aplique primero este y despues el fwrite.
                header('Location: formulario.php');

                fwrite($archivo, $mailinput .  PHP_EOL);

                break;

                // header('Location: formulario.php');


            }
         
        }

        // fclose($archivo);
    }


    
}
?>