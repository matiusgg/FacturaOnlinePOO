<?php
namespace models;

class Usuario{

    // PROPIEDADES

    private $id;
    private $nombre;
    private $empresa;
    private $localidad;
    private $mail;
    

    // CONSTRUCTOR

    public function __construct($id, $nombre, $empresa, $localidad, $mail) {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->empresa = $empresa;
        $this->localidad = $localidad;
        $this->mail = $mail;

    }

    // METODOS

    


}
?>