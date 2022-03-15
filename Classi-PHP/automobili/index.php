<?php


class Automobile {

    public $marca;
    public $modello;
    public $cilindrata;
    public $alimentazione;
    public $velocità = 0;

    public function __construct($marca,$modello ){
        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function setCilindrata($cilindrata){
        if (is_numeric($cilindrata) && $cilindrata > 0){
            $this->cilindrata = $cilindrata;
        }else{
            echo "valore non valido!";
        }
    }

    public function accelera($incremento){
        if(is_numeric($incremento)){
            $this->velocità += $incremento;
        }else{
            echo "valore non valido!";
        }
        
    }

    public function frena(){
        $this->velocità -= 5;

        if($this->velocità < 0){
            $this->velocità = 0;
        }
    }

}

$fiatPanda = new Automobile('Fiat','Panda');
$fiatPanda->setCilindrata(1300);

$fiatPanda->accelera(30);
$fiatPanda->accelera(20);

echo "La velocità attuale è: ". $fiatPanda->velocità;