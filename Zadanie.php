<?php
class Ulamek{
    public $licznik;
    public $mianownik;
    
    
    function __construct(){
    $this->licznik=12;
    $this->mianownik=48;
    }
    

    function wypisz(){
        echo $this -> licznik."/". $this -> mianownik."<br>";
    }
    public function skracanie() {
        $a = $this->licznik;
        $b = $this->mianownik;
        while ($a != $b) {
            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        }
        $nwd = $a;
        $this->licznik = $this->licznik / $nwd;
        $this->mianownik =  $this->mianownik / $nwd;
        echo "Skrócone: $this->licznik/$this->mianownik </br>";
    }

}

$u1 = new Ulamek();

$u1 -> wypisz();

$u1 -> skracanie();








?>