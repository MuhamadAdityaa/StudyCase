<?php

/*
    Dalam sebuah machine learning ada yang dinamakan accuracy prediksi, accuracy prediksi memiliki 2 jenis:
    1. accuracy pada data latih.
    2. accuracy pada data test.

    Ada juga istilah overfitting dan underfitting, kedua istilah tersebut memiliki arti 
    bahwa machine learning tersebut memiliki peforma yang kurang baik.
    1. overfitting adalah ketika accuracy data latih tinggi tetapi accuracy pada data test jauh lebih rendah.
    2. underfitting adalah ketika accuracy data latih dan data test rendah.

    Ada juga kondisi yang jarang terjadi, kondisi tersebut adalah ketika 
    accuracy data latih rendah tapi accuracy di data test tinggi,
    penyebab hal tersebut adalah karna data yang kurang stabil.


    Program ini akan melakukan check apakah machine learning dalam keadaan yang baik, overfitting, underfitting, atau data kurang stabil
*/

$acc_latih = 89; // Memiliki range dari 0-100
$acc_test = 90; // Memiliki range dari 0-100

// Nested if untuk mengklasifikasi keadaan machine learning
if ($acc_latih > 80){
    if ($acc_test >= $acc_latih - 3){
        echo "Machine learning kamu BAIK";
    } else {
        echo "Machine learning kamu OVERFITTING";
    }
} else {
    if ($acc_test > $acc_latih + 20){
        echo "Data kamu kurang stabil nih";
    } else {
        echo "Machine learning kamu UNDERFITTING";
    }
}
?>
