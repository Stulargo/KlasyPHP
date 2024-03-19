<?php
class Pojazd{
    public $marka;
    public $kolor;
    public $rocznik;
    public function malowanie(){
        $this->kolor="czerwony";
        echo "</br>przemalowano auto!</br>";
    }
    public function wypisz(){
        echo "$this->marka"."$this->kolor"."$this->rocznik";
    }
    function __construct(){
            $this->marka="Mercedes";
            $this->kolor="bialy";
            $this->rocznik=2020;
        }

    function __destruct(){
        echo "<br>"."Usunieto obiekt";
    }
    
}

$auto = new Pojazd();
//$auto->marka="Opel";
//$auto->kolor="czarny";
//$auto->rocznik="2004";
echo "kolor auta: $auto->kolor </br>";

echo "<br>";


$auto->wypisz();
echo "<br>";

$auto -> malowanie();
echo "<br>";
echo "kolor auta: $auto->kolor </br>";
echo "<br>";
$auto->wypisz();


?>