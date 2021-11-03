<?php

class User {
    private $nome;
    private $cognome;
    private $email;
    private $telefono;
    private $carta;
    
    // CONSTRUCT
    public function __construct($_nome,$_cognome,$_email,$_telefono,$_carta)
    {
        $this-> nome = $_nome;
        $this-> cognome = $_cognome;
        $this-> email = $_email;
        $this-> telefono = $_telefono;
        $this-> carta = $_carta;
    }

    // GET FUNCTION
    public function getNome() {
        return $this -> nome;
    }
    // public function get() {
    //     return $this -> ;
    // }
    
}