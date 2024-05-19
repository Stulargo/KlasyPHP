<?php
/*
Zdefiniuj klasę o nazwie "Osoba" składającą się z pól: nazwisko, średnia_ocen, konstruktora, w którym nadajemy
wartości: nazwisko = Kowalski, średnia_ocen = 4.5.
Ta klasa ma się składać z metody wypisz, która wypisuje w postaci:
$Nazwisko średnia ocen $srednia_ocen, oraz metody czy_z_paskiem (czerwonym, średnia powyżej 4.75).

Zdefiniuj klasę
pochodną do klasy Osoba składającą się z pola o nazwie Abiturient z polami: Uczelnia i funkcji wypiszJeden, która
wypisuje nazwę uczelni.

Zdefiniuj 2 obiekty klasy Osoba, dla pierwszego wywołaj funkcję wypisz i czy_z_paskiem. Drugiemu nadaj wartości pobrane
z formularza i wywołaj powyższe metody

Zdefiniuj obiekt klasy Absolwent i wywołaj dla niego wszystkie dostępne metody pobierając dane z pliku
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form actiopn="" method="POST">
        <label for="nazwisko">Podaj nazwisko</label>
        <input type="text" name="nazwisko" />
        <br>
        <label for="srednia">Podaj średnią</label>
        <input type="number" name="srednia" step="any" />
        <br>
        <input type="submit" />
    </form>


    <?php
    class Osoba
    {
        public $nazwisko;
        public $srednia_ocen;

        function wypisz()
        {
            echo $this->nazwisko . " średnia ocen: " . $this->srednia_ocen . "<br>";
        }
        public function czy_z_paskiem()
        {
            if ($this->srednia_ocen > 4.75) {
                echo "Ma pasek";
            } else {
                echo "Nie ma paska";
            }
            echo "<br>";
        }
        public function __construct()
        {
            $this->nazwisko = "Kowalski";
            $this->srednia_ocen = 4.5;
        }
    }
    class Abiturient extends Osoba
    {
        public $uczelnia;

        function wypiszJeden()
        {
            echo $this->uczelnia . "<br>";
        }
    }

    if (isset($_POST['nazwisko']) && isset($_POST['srednia'])) {
        $Osoba1 = new Osoba();
        $Osoba2 = new Osoba();
        $nazwisko = $_POST['nazwisko'];
        $srednia = $_POST['srednia'];

        $Osoba1->wypisz();
        $Osoba1->czy_z_paskiem();
        echo "<br>";

        $Osoba2->nazwisko = $nazwisko;
        $Osoba2->srednia_ocen = $srednia;

        $Osoba2->wypisz();
        echo $Osoba2->czy_z_paskiem();
        echo "<br>";
        $abiturient = new Abiturient();

        $plik = fopen("dane.txt", "r");
        $absolwentNazwisko = fgets($plik);
        $abiturient->nazwisko = $absolwentNazwisko;
        $abiturient->uczelnia = fgets($plik);
        $abiturient->srednia_ocen = fgets($plik);

        $abiturient->wypisz();
        $abiturient->wypiszJeden();
        $abiturient->czy_z_paskiem();
    }


    ?>
</body>

</html>