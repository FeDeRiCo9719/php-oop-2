<?php

class Abbigliamento {
    private $marca;
    private $prezzo;
    private $taglia;
    private $colore;
    private $categoria;
    
    // CONSTRUCT
    public function __construct($_marca,$_prezzo,$_taglia,$_colore,$_categoria)
    {
        $this-> marca = $_marca;
        $this-> prezzo = $_prezzo;
        $this-> taglia = $_taglia;
        $this-> colore = $_colore;
        $this-> categoria = $_categoria;
        // $this-> "" = $_"";
    }

    // GET FUNCTION
    public function getMarca() {
        return $this -> marca;
    }
    // public function get() {
    //     return $this -> ;
    // }
}