<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $angka1 = intval($_POST['angka1']);
        $angka2 = intval($_POST['angka2']);
        
        if ($nama && $angka1 && $angka2) {
            $penjumlahan = $angka1 + $angka2;
            $pengurangan = $angka1 - $angka2;
            $perkalian = $angka1 * $angka2;
            $pembagian = $angka1 / $angka2;
            $modulus = $angka1 % $angka2;
            
            echo "<h1>Perhitungan Aritmatika</h1>";
            echo "Nama: $nama<br>";
            echo "$angka1 + $angka2 = $penjumlahan<br>";
            echo "$angka1 - $angka2 = $pengurangan<br>";
            echo "$angka1 * $angka2 = $perkalian<br>";
            echo "$angka1 / $angka2 = $pembagian<br>";
            echo "$angka1 % $angka2 = $modulus<br>";
        } else {
            echo "<p>Silakan isi semua field dengan benar.</p>";
        }
    }
    ?>