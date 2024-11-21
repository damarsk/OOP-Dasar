<?php
class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

echo "Default Number = " . ContohStatic::$angka;
echo "<hr>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo "Changed Number = " . ContohStatic::$angka;

class Contoh {
    public $angka = 1;

    public function halo() {
        return "Halo " . $this->angka++ . " kali.";
    }
}

echo "<hr>";
$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

$obj2 = new Contoh();
echo "<hr>";
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();