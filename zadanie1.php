<?php
//
//function series_sum($n) {
//    $jedynka = 1;
//    $wynik = 0;
//    $mianownik = 1;
//
//    for($i = 0; $i < $n; $i++) {
//        $wynik += $jedynka/$mianownik;
//        $mianownik += 3;
//    }
//
//
//    return  number_format($wynik,2,'.','');
//
//}


//echo series_sum(-4);

//function sum(...$sums){
//
//    $suma=0;
//   foreach($sums as $i) {
//       $suma += $i;
//   }
//    return $suma;
//}
//
//echo sum(1,3,5);

class Person{
    public $name;
    public $surname;

    /**
     * Person constructor.
     * @param $name
     * @param $surname
     */
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }


}
$a=4;
$b=2;
$c=0;

$delta = $b*$b - 4 *($a*$c);
echo "Pierwiastki: $a, $b <br> Deltas: $delta"

?>