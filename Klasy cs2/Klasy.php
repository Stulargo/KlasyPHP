<?php //zdefiniuj klase o nazwie trójkąt składającą się z pól bok1 bok2 bok3 i konstruktora w ktorym boka nadajemy wartosci 3,4,5 metody wpisz,pole,i czy prostokątny. Zdefiniuj dwa obiekty klasy trójkąt. Dla pierwszego wywołaj wszystkie metody a dla drugiego pobierz dane z formularza. 
class Trojkat
{
   public $bok1;
   public $bok2;
   public $bok3;

    function __construct()
    {
        $this -> bok1 = 3;
        $this -> bok2 = 4;
        $this -> bok3 = 5;
    }
    function wypisz()
    {
        echo $this -> bok1." ".$this -> bok2." ".$this->bok3."<br>"; 
    }
    function pole()
    {
        $p = ($this -> bok1 + $this -> bok2 + $this -> bok3)/2;
        $pl = sqrt($p*($p-$this->bok1)*($p-$this->bok2)*($p-$this->bok3));
        return $pl."<br>";
    }
    function czyProstokatny()
    {
        if (pow($this->bok1,2)+(pow($this->bok2,2)==pow($this->bok3,2)) || pow($this->bok2,2)+(pow($this->bok3,2)==pow($this->bok1,1)) || pow($this->bok1,2)+(pow($this->bok3,2)==pow($this->bok2,2)))
        {
            return "tak <br>";
        }
        else
        {
            return "nie <br>";
        }
    }

}

    $t1 = new Trojkat();
    $t1 -> wypisz();
    echo $t1 -> pole();
    echo $t1 -> czyProstokatny();
    $t2 = new Trojkat();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form action="" method="POST">
    <label for="bok1">Podaj pierwszy bok: </label>
    <br>
    <input type="number" name="b1" id="b1">
    <br>
    <label for="bok2">Podaj drugi bok: </label>
    <br>
    <input type="number" name="b2" id="b2">
    <br>
    <label for="bok3">Podaj trzeci bok: </label>
    <br>
    <input type="number" name="b3" id="b3">
    <br>
    <button type="submit">wyślij</button>
    <br>
    </form>
    <?php 
    $bok1 = $_POST['b1'];
    $bok2 = $_POST['b2'];
    $bok3 = $_POST['b3'];
    $t2 -> bok1 = $bok1;
    $t2 -> bok2 = $bok2;
    $t2 -> bok3 = $bok3;
    $t2 -> wypisz();
    echo $t2 -> pole();
    echo $t2 -> czyProstokatny();
    
    ?>
</body>
</html>