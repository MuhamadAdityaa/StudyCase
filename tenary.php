<?php

// Program ini menggunakan operator ternary untuk menentukan status kelulusan mahasiswa berdasarkan nilai akhir.

// Data mahasiswa
$nama = "Andi";
$nilaiAkhir = 82;

// tenary operator untuk menentukan status kelulusan
$status = ($nilaiAkhir >= 75) ? "Lulus" : "Tidak Lulus";

// Menampilkan hasil
echo "Nama: $nama<br>";
echo "Nilai Akhir: $nilaiAkhir<br>";
echo "Status: $status<br>";

?>
