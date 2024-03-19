<?php
Class Osoba{

public $nazwisko;
public $wzrost;


public function wypisz(){
    echo  "Nazwisko - ".$this->nazwisko."</br> Wzrost - ".$this->wzrost." cm"."<br></br>";
}
public function czyWysoki(){

    if($this->wzrost>=180){
        return "Tak";
    }else{
        return "Nie";
    }

}



}
$osoba = new Osoba();

$plik = fopen("dane.txt","r");
$a = fgets($plik);


$tab = Array();

$tab = explode(" ",$a);
$nazwisko = $tab[0];
$wzrost = $tab[1];
$osoba -> nazwisko = $nazwisko;
$osoba -> wzrost = $wzrost;
$osoba->wypisz();
$osoba->czyWysoki();
echo "Czy osoba jest wysoka?</br>".$osoba->czyWysoki();



?>