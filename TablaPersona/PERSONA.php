<?php
class Persona {
    private $nombre;
    private $fecNac;
    private $eda;
    private $telefono;
    
    
    public function __construct($nombre,$fecNac,$eda,$telefono){
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->eda = $eda;
        $this->telefono = $telefono;
    }

    public function getNombre(){
        return$this->nombre;
    }
    public function setNombre($value){
        $this->nombre = $value;
    }
    public function getFecNac(){
        return$this->fecNac ;
    }
    public function setFecNac($value){
        $this->fecNac = $value;
    }
    public function getEda(){
        $fechaNac = new DateTime($this->fecNac);
        $now = new DateTime();
        $edad = $now->diff($fechaNac);
        return $edad->y;
    }
    public function setEda($value){
        $this->eda = $value;
    }
    public function getTelefono(){
        return$this->telefono;
    }
    public function setTelefono($value){
        $this->telefono = $value;
    }


}
//el cierre no se pone porque debe estar en otro lado, se crea y se deja abierto en otro(script abierto en PERSONA en este caso)