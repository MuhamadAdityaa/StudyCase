<?php

/*

    Manusia tidak bisa sembarangan meminum air, ada yang namanya pH (potential of Hydrogen),
    jika pH air itu terlalu tinggi bersifat basa maka akan mengganggu sistem pencernaan
    dan jika pH air rendah air tersebut akan bersifat asam.
    
    pH air yang layak diminum oleh manusia berkisaran di angka 6.5 - 8.5

    Program ini akan melakukan klasifikasi apakah air layak untuk diminum atau tidak

*/


$pH_air = 7; // Memiliki range 0-14

// tenary operator untuk mengklasifikasikan kelayakan air
$layak = ($pH_air >= 6.5 && $pH_air <= 8.5 ) ? "Layak" : "Tidak layak";

// Output
echo "Air tersebut $layak untuk diminum<br>";

?>
