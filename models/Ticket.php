<?php
namespace models;

class Ticket {

    // propiedades

    // constructor

    // metodos

    public function ImprimirTicket() {

// $this-> arrayPrecios();


$arrayprecios = [];
for($i=0; $i < 5; $i++){


    if(($_POST['preciobase0' . $i] != "" ) && ($_POST['unidades0' . $i]) != "") {


        echo('<pre>');
        print_r($_POST['preciobase0' . $i]);
        echo('</pre>');
        
        echo('<pre>');
        print_r($_POST['unidades0' . $i]);
        echo('</pre>');

       array_push($arrayprecios, $this-> precio(
          (int) $_POST['preciobase0' . $i], 
          (int) $_POST['unidades0' . $i]));


       }
else {


array_push($arrayprecios, NULL);
}



}



// subtotal con el array de precios de inputs dentro para ejecutar el metodo
$sumadeTotales = $this-> subtotal($arrayprecios);

// POST DE DATOS CLIENTE Y EMPRESA



echo('<h1>');
            echo('Factura Online');
        echo('</h1>');
    echo('<header>');
        
        echo('<!-- article.datos*3 -->');

        echo('<article class="datos">');



// DATOS TICKET FACTURA ONLINE
        
      $this-> datosGenerales();
      $this-> datosEmpresa();
      $this-> datosCliente();

    

    echo('</header>');



// POST DATOS DESCRIPCION, PRECIO Y UNIDADES


echo('<section >');

echo('<article class="filas_titulos">');

echo('<!-- un span es un bloque con el tamaño respectivo del contenido, no es una caja en inline, si div es bloque, span es para inline -->');

echo('<!-- titulos -->');

echo('<span>Descripcion</span>');
echo('<span>Precio/Unidad</span>');
echo('<span>Unidades</span>');
echo('<span>Importe</span>');
echo('</article>');

echo('<article class="filas_datos">');



$contador = 0;

foreach($arrayprecios AS $valor) {

    // Lo que ahora hacemos con este if es condicionarle que el array sea diferente de NULL 

    if($valor != NULL) {

    echo('<!-- Linea/fila -->');

    echo('<span>');

    
    echo($_POST['descripcion0' . $contador]);
    

echo('</span>');
echo('<br>');
echo('<span>');


    echo($_POST['preciobase0' . $contador]);
    

echo('</span>');
echo('<br>');
echo('<span>');


    echo($_POST['unidades0' . $contador]);
    

echo('</span>');
echo('<br>');
echo('<span>');


    echo('importe = ' . $valor );
    

echo('</span>');

    }

$contador++;

}

echo('<ul>');
echo('<li>');
echo('Comentario:');

echo($_POST['comentario']);

echo('</li>');

echo('</ul>');



    echo('</article>');



    echo('</section>');


    echo('<footer>');




// TOTAL Y AÑADIDOS

// $this-> irpf($sumadeTotales);
// $this-> iva();
// $this-> totalfactura($arrayprecios);


echo('<br>' . 'SUBTOTAL:' . $sumadeTotales);

//IRPF

echo('<br>' . 'IRPF:' . $this-> irpf($sumadeTotales));

// IVA

echo('<br>' . 'IVA:' . $this-> iva($sumadeTotales));

// TOTAL


echo('<br>' . 'TOTAL: ' . $this-> totalfactura($arrayprecios));



echo('</footer>');
    }


    // *************************************************


    // METODO DATOS CLIENTE

    private function datosGenerales(){

        echo('<!-- h4.usuario__titulo -->');
        echo('<h4 class="datos__titulo">');
            echo('Datos');
        echo('</h4>');
        echo('<!-- ul.datos__>li*6 -->');
        echo('<ul class="datos__">');
            echo('<li class="datos__numerofactura">');
                echo('Nº Factura');
            echo('</li>');
        
            echo('<!-- Aqui es donde ira el POST, donde introduciremos la informacion dinamica, osea los datos que introdujeron los clientes los queremos en la simulacion de PDF, osea aqui en factura.php. Esto lo haremos con POST porque ya la relacion la tenemos en el index con echo(\'<form>\');, entonces el primero numerofactura es el titulo y el siguiente con post es el dato que trajimos con POST desde el index que tiene el echo(\'<form>\'); -->');
            echo('<li class="datos__numerofactura--post">');
                
                // Cada $_POSt tiene que tener obviamente un echo para que nos muestre la informacion que introdujeron los clientes en el index
            echo($_POST['numerofactura']);
            
            echo('</li>');
            echo('<li class="datos__fechafactura">');
                echo('Fecha de Factura');
            echo('</li>');
            echo('<li class="datos__fechafactura--post">');
            
            echo($_POST['fechacliente']);
            
            echo('</li>');
        
        echo('</ul>');
        
        
                echo('</article>');
    }

    // METODO DATOS EMPRESA

private function datosEmpresa(){

    echo('<article class="usuario">');

    echo('<h4 class="usuario__titulo">');
        echo('Mi empresa');
    echo('</h4>');

    echo('<ul class="usuario__">');

    echo('<!-- Como todos estos datos vienen de indexfactura.php entonces por eso usamos post. -->');
    echo('<li class="usuario__nombreEmpresa--post">');

    echo('Empresa:');

    
echo($_POST['nombreusuario']);


    echo('</li>');

echo('<li class="usuario__CIF--post">');
    echo('CIF:');

    

echo($_POST['cifusuario']);

echo('</li>');
echo('<li class="usuario__direccion--post">');
    echo('Direccion:');

    
    
echo($_POST['direccionusuario']);

echo('</li>');
echo('<li class="usuario__poblacion--post">');
    echo('Poblacion:');

    
    
echo($_POST['poblacionusuario']);

echo('</li>');
echo('<li class="usuario__codigopostal--post">');
    echo('CodigoPostal:');

    
    
echo($_POST['codigopostalusuario']);

echo('</li>');

    echo('</ul>');

    echo('</article>');
        
    }

    private function datosCliente() {

echo('<article class="cliente">');
echo('<h4 class="cliente__titulo">');

echo('Empresa Cliente:');
echo('</h4>');

echo('<ul class="cliente__">');
echo('<li class="cliente__nombreEmpresa--post">');
    echo('Empresa Cliente:');

    
    
    echo($_POST['empresacliente']);

echo('</li>');
    echo('<li class="cliente__nombreContacto--post">');
        echo('Nombre:');

        
        
    echo($_POST['nombrecliente']);
    
    echo('</li>');
    echo('<li class="cliente__CIF--post">');
        echo('NIF:');

        
        
    echo($_POST['nifcliente']);
    
    echo('</li>');
    echo('<li class="cliente__direccion--post">');
        echo('Direccion:');

        
        
    echo($_POST['direccioncliente']);

    echo('</li>');
    echo('<li class="cliente__poblacion--post">');
        echo('Poblacion:');

        

    echo($_POST['poblacioncliente']);

    echo('</li>');
    echo('<li class="cliente__codigopostal--post">');
        echo('CodigoPostal:');

        
    
    echo($_POST['codigopostalcliente']);
    
    echo('</li>');
    echo('<li class="cliente__comentario--post">');
    echo('</li>');
echo('</ul>');
        echo('</article>');
    }

    // METODO PRECIO

    private function precio($precioUnidad, $cantidad, $descuento = 0 ){ // las variables que tenemos son arbitrarias, por lo cual hay que mirar bien si ponerlas en () de la funcion



        $multiplicar = $precioUnidad * $cantidad;

        
        $porcentaje = $multiplicar * $descuento;
        
        $solucion = $multiplicar - $porcentaje;
        return $solucion;

        }


        private function subtotal ($arrayprecios) {

          
            $Sumavalor = 0;
            foreach($arrayprecios AS $valor) {
             
        
        
            $Sumavalor += $valor;
           
            };
        
           
        return $Sumavalor;
        
        
        
        }
        
        
        //calcular el IRPF
        //Multiplicar el subtotal * 0.10 y sumar al subtotal
    
        private function irpf($subtotal, $irpf = 0.10){
            $porcentaje = $subtotal * $irpf;
            // $solucion = $subtotal - $porcentaje;
            return $porcentaje;
            }
         
         
         // Calcular el IVA
         //Multiplicar el subtotal * 0.21 y sumar al sodium_crypto_box_keypair_from_secretkey_and_privatekey
         private function iva($subtotal, $iva = 0.21){ // 
         $porcentaje = $subtotal * $iva;
        
         // pusimos en comentarios esto porque no necesitamos que nos haga una operacion final, solo que nos muestre el dato final
           // $solucion = $subtotal + $porcentaje;
         return $porcentaje;
         }
        
         // Total factura
         // suma de todas las filas = subtotal
         // subtotal - irpf + iva = Total factura
        
         private function totalfactura($arrayprecios) {
        
        
         $subtotal = $this-> subtotal($arrayprecios); 
         $irpf = $this-> irpf($subtotal); 
         $iva = $this-> iva($subtotal);
        
          $solucion = $subtotal - $irpf + $iva;
        
         return $solucion;
        
         }

        //  private function arrayPrecios() {
     
        //  }

}
?>