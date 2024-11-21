<?php
define('NAMA', 'Damar Syahada');
echo NAMA;

echo "<br>";

const UMUR = 17;
echo UMUR;
echo "<hr>";

class Coba {
    const NAMA = 'Damar Syahada';
}
echo Coba::NAMA;
 echo "<br>";
echo "Baris Ke " . __LINE__;