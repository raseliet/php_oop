<?php

class Person {
   //centimetrais
   public $ugis;
   public $vardas;
   private $asmens_kodas;
   
   public function __construct($vardas, $centimetrai) {
       $this->vardas = $vardas;
       $this->ugis = $centimetrai;
       $this->asmens_kodas=rand(100000,9999999);
       $this->kalbeti();
   }
   private function kalbeti() {
       print "labas, as $this->vardas, mano ugis $this->ugis!";
   }
}

$zmogus_1 = new Person('Arnas',186);
var_dump($zmogus_1);

$zmogus_1->vardas = 'Rasa';
var_dump($zmogus_1);

//
//$zmogus_2 = new Person('Rasa', 190);
//var_dump($zmogus_2);


//$aurimas = new Person(186);
//var_dump($aurimas);
//
//$dainora = new Person();
//
//$aurimas->kalbeti();
//
//$jonas = new Person(190);
//var_dump($jonas);
