<?php

/*
    Program ini menentukan jenis beasiswa yang diterima mahasiswa berdasarkan beberapa kriteria:
    1. IPK harus di atas 2.75 agar masuk ke tahapan evaluasi.
    2. Pengecekan penghasilan orang tua jika di bawah 10 juta masuk ke tahap evaluasi lebih lanjut.
    3. Jika prestasi nasional atau internasional, maka mendapatkan beasiswa penuh.
    4. Jika prestasi daerah dan aktif organisasi, maka mendapatkan beasiswa penuh.
*/

$ipk = 3.8;
$penghasilan = 4.5;
$prestasi = "nasional"; // pilihan: "tidak ada", "daerah", "nasional", "internasional"
$aktifOrganisasi = true;

// Pengecekan IPK
if ($ipk >= 2.75) {

    // Pengecekan penghasilan orang tua
    if ($penghasilan <= 10) {

        // Pengecekan prestasi
        if ($prestasi == "nasional" || $prestasi == "internasional") {
            echo "Beasiswa Penuh";
        } else {

            // Pengecekan prestasi daerah dan keaktifan organisasi
            if ($prestasi == "daerah" && $aktifOrganisasi) {
                echo "Beasiswa Penuh (berkat prestasi dan aktif organisasi)";
            } else {
                echo "Beasiswa Parsial";
            }
        }
    } else {
        echo "Beasiswa Parsial";
    }
} else {
    echo "Tidak memenuhi syarat beasiswa (IPK rendah)";
}

?>
