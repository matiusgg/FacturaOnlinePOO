<?php
namespace models;

class Formulario {

    // propiedades

    // constructor

    // metodos

    public function ImprimirFormulario() {

        echo('<!-- Contenedor Principal -->');
    
echo('<div class="ContenedorPrincipal">');

echo('<!-- Contenedor Cliente -->');

echo('<section>');

echo('<article>');
echo('<div class="Contenedorcliente">');
echo('<h1>');
echo "Factura Online";
echo('</h1>');

echo('<h2>');
echo "Cliente";
echo('</h2>');


echo('<!-- Contenido Informacion Cliente -->');

echo('<!--  -->');

echo('<label for="text">');
echo "Numero de Factura:";
echo('</label>');
echo('<input type="number" name="numerofactura" id="numerofactura"  autofocus=\'autofocus\'>');

echo('<!--  -->');

echo('<label for="text">');
echo('Cliente:');
echo('</label>');
echo('<input type="text" name="nombrecliente" id="nombrecliente"  >');

echo('<!--  -->');

echo('<label for="text">');
echo "Forma de Pago:";
echo('</label>');
echo('<select name="formapagocliente">');
            echo('<option value="efectivo">');
            echo ('Efectivo');
			echo('</option>');
            echo('<option value="TargetaCredito">');
            echo "Targeta de Credito";
        echo('</select>');


echo('<!--  -->');


echo('<label for="text">');
echo('Fecha:');
echo('</label>');
echo('<input type="date" name="fechacliente" id="fechacliente"  >');

echo('<!--  -->');

echo('<label for="text">');
echo('Empresa Cliente(opcional):');
echo('</label>');
echo('<input type="text" name="empresacliente" id="empresacliente"  autofocus=\'autofocus\'>');

echo('<!--  -->');

echo(' <label for="text">');
echo ('Direccion Cliente:');
echo('</label>');
echo('<input type="text" name="direccioncliente" id="direccioncliente"  > ');

echo('<!--  -->');

echo('<label for="text">');
echo ('Telefono Cliente:');
echo('</label>');
echo('<input type="text" name="telefonocliente" id="telefonocliente" > ');

echo('<!--  -->');

echo('<label for="text">');
echo('NIF:');
echo('</label>');
echo('<input type="text" name="nifcliente" id="nifcliente" >');

echo('<!--  -->');

echo('<label for=\"text\">');
echo('Poblacion:');
echo('</label>');
echo('<input type="text" name="poblacioncliente" id="poblacioncliente" autofocus=\'autofocus\'> ');

echo('<!--  -->');

echo(' <label for="text">');
echo('Codigo Postal:');
echo('</label>');
echo('<input type="text" name="codigopostalcliente" id="codigopostalcliente" >');


echo('</div>');
echo('</article>');

echo('<!-- Contenedor Usuario Mi empresa -->');

echo('<article>');

echo('<div class="Contenedorusuario">');
echo('<h2>');
echo('Usuario');
echo('</h2>');
echo('<!-- Contenido Informacion Usuario -->');

echo('<!--  -->');

echo('<label for="text">');
echo('Nombre Empresa:');
echo('</label>');
echo('<input type="text" name="nombreusuario" id="nombreusuario"  autofocus=\'autofocus\'>');

echo('<!--  -->');

echo('<label for="text">');
echo('Direccion:');
echo('</label>');
echo('<input type="text" name="direccionusuario" id="nombreusuario"  >');

echo('<!--  -->');



echo('<label for="text">');
echo('Fecha:');
echo('</label>');
echo('<input type="date" name="fechausuario" id="fechausuario" >');

echo('<!--  -->');

echo('<label for="text">');
echo('Codigo Postal:');
echo('</label>');
echo('<input type="text" name="codigopostalusuario" id="codigopostalusuario" > ');



echo('<!--  -->');

echo('<label for="text">');
echo('Telefono Empresa:');
echo('</label>');
echo('<input type="text" name="telefonousuario" id="telefonousuario" >');

echo('<!--  -->');

echo('<label for="text">');
echo('C.I.F.:');
echo('</label>');
echo('<input type="text" name="cifusuario" id="c.i.f.usuario" >');

echo('<!--  -->');

echo('<label for="text">');
echo('Poblacion:');
echo('</label>');
echo('<input type="text" name="poblacionusuario" id="poblacionusuario"  autofocus=\'autofocus\'>');


echo('</div>');


echo('</article>');

echo('<!-- Contenedor Descripcion -->');
echo('<article>');

echo('<div class="Contenedordescripcion">');

echo('<h2>');
echo('Datos Factura');
echo('</h2>');

echo('<!-- Contenido Informacion Descripcion -->');

echo('<!--  -->');

echo('<label for="text">');
echo('Descripcion');
echo('</label>');




for($i = 0; $i < 5; $i++) {
echo "echo('<input type=\"text\" name=\"descripcion0$i\" >');";


}




echo('<!--  -->');

echo('<label for="text">');
echo('Precio Base');
echo('</label>');




for($i = 0; $i < 5; $i++) {
echo "<input type=\"number\" name=\"preciobase0$i\">";


}



echo('<!--  -->');

echo('<label for="text">');
echo('Unidades');
echo('</label>');





for($i = 0; $i < 5; $i++) {
echo "<input type=\"number\" name=\"unidades0$i\">";


}




echo('</div>');


echo('</article>');
echo('<!-- Contenedor Comentario -->');

echo('<article>');

echo('<div class="Contenedorcomentario">');
echo('<h2>');
echo('Comentario');
echo('</h2>');

echo('<textarea name="comentario" id="comentario" rows="12">');

echo('</textarea>');


echo('<!-- Contenido Informacion Comentario -->');



echo('</div>');


echo('</article>');
echo('<button type="submit">');
          echo('Enviar');
      echo('</button>');

      echo('<button type="reset">');
          echo('Borrar');
      echo('</button>');

      echo('</section>');

echo('</div>');
    }

    
}
?>