#include <iostream>

using namespace std;
class Pojazd
{
  public:
      string marka;
      string kolor;
      int rocznik;
      void malowanie()
      {
        kolor="czerwony";
        cout << endl << "przemalowano auto" << endl << endl;
      }
      void wypisz()
      {
          cout <<"marka samochodu: " << marka << " ";
          cout <<" kolor samochodu: " << kolor << " ";
          cout <<" rocznik samochodu: " << rocznik << endl;
      }
      Pojazd()
      {
        marka = "mercedes";
        kolor = "zloty";
        rocznik = 2023;
      }

      Pojazd(string m,string k, int r)
      {
        marka = m;
        kolor = k;
        rocznik = r;
      }

      ~Pojazd(){
      cout << "Usuniêto obiekt" << endl;
      }
};

int main()
{
    Pojazd autko;
    //autko.marka = "Opel";
    //autko.kolor = "czarny";
    //autko.rocznik = 1999;
    autko.wypisz();
    autko.malowanie();
    autko.wypisz();
    Pojazd autko2("Ferrari","niebieski",2021);
    autko2.wypisz();
    autko2.malowanie();
    autko2.wypisz();
    return 0;
}
