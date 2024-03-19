<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Licznik: </label><input type="number" name="licznik"></br>
        <label>Mianownik: </label><input type="number" name="mianownik"></br>
        <button type="submit">Submit</button></br></br>
    </form>
</body>
</html>

<?php
    $licznik = $_POST['licznik'];   
    $mianownik = $_POST['mianownik'];

    class Ulamek {
        public $licznik;
        public $mianownik;

        public function wypisz() {
            echo "Ułamek: $this->licznik/$this->mianownik</br>";
        }

        public function skracanie() {
            $a = $this->licznik;
            $b = $this->mianownik;
            while ($a != $b ) {
                if ($a > $b) {
                    $a -= $b;
                } else {
                    $b -= $a;
                }
            }
            $NWD = $a;
            $this->licznik /= $NWD;
            $this->mianownik /= $NWD;
            echo "Skrócone: $this->licznik/$this->mianownik </br>";
        }

        function __construct($l, $m) {
            $this->licznik = $l;
            $this->mianownik = $m;
        }
    }
    if($mianownik==0){
        echo "Nie dziel przez zero";
    }
    else{
    $ulamek = new Ulamek($licznik, $mianownik);
    $ulamek->wypisz();
    $ulamek->skracanie();
    }

?>