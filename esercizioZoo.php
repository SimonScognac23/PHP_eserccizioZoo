<?php





//-----------Classe astratta---------------------------------------------------
 abstract class Animal{

public $food;  
public $age;
public $habitat;

// Metodi

public function __construct($_food, $_age, $_habitat){

    $this->food = $_food;
    $this->age = $_age;
    $this->habitat = $_habitat;

}


public function nutriti(){
    
    echo "Questo animale è di tipo $this->food";

}

}








//------------------Classi figlie--------------------------------------
class Lion extends Animal{

public $criniera;

public $sesso;

// Il costruttore dentro lion accetta 5 parametri, o meglio ha bisogno di 5 parametri quindi quando creo l'oggetto ci devo mettere 5 parametri
public function __construct($_food, $_age, $_habitat, $_criniera, $_sesso){  //Questi attributi vanno passato per forza perche derivano dalla classe genitore

    parent::__construct($_food, $age, $_habitat); // per accedere alla classe padre
//NB questi parametri hanno valore posizionale

$this->criniera = $_criniera; //Valorizzo quelli che mi mancano
$this->sesso = $_sesso;

}



public function cacciaInBranco(){   // Questa funzione è disponibile solo dentro leone

    echo "Il leone sta cacciando in branco\n";

    }

}








class Eagle extends Animal{

 public $piume;
 public $sesso;


 public function volare(){

    echo "L'aquila sta volando\n";
 }

}







$simba = new Lion('carnivoro', 4,'savana' , true, 'Maschio');  // true è per la criniera


$aquilotto = new Eagle('carnivoro', 3,'montagne');

$aquilotto->volare; // specifico solo di eagle ----> volare



?>