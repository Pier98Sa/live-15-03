<?php

class User{

    public $nome;
    public $cognome;
    public $eta;
    public $email;

    //creo un costruttore che mi imposti nome cognome e eta
    public function __construct($nome,$cognome,$eta){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }
    public function getFullName(){
        return $this->nome . ' ' . $this->cognome;
    }

    public function setEta($eta){
        $this->eta = $eta;
    }

    public function getEta(){
        return $this->eta;
    }

    public function setNomeCognome($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

//inizializzo un istanza di user per mario
$mario = new User('Mario','Rossi', 50);

//imposto il nome
//$mario->nome = "Mario"; inutile dopo il costruttore
//imposto il cognome
//$mario->cognome = "Rossi"; inutile dopo il costruttore
//imposto l'età con una funzione setter
//$mario->setEta(50); inutile dopo il costruttore

//imposto l'email
$mario->email = "mario@rossi.it";

//stampo il nome e l'età con le funzioni get
echo "<p>". $mario->getFullName(). "</p>";
echo "<p>"."L'età è :". $mario->getEta() . "</p>";

//inizializzo un istanza di user per guido
$guido = new User('Guido','Bianchi',30);

//$guido->nome = "Guido"; inutile dopo il costruttore
//$guido->cognome = "Bianchi"; inutile dopo il costruttore
$guido->email = "guido@bianchi.it";

//cambio il nome e cognome in corso d'opera con la setNomeCognome
$guido->setNomeCognome('Umberto','Neri');

//$guido->setEta(30); inutile dopo il costruttore

echo "<p>". $guido->getFullName(). "</p>";
echo "<p>"."L'età è :". $guido->getEta() . "</p>";

