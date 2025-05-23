<?php
// Switch - Jenis Kendaraan berdasarkan jumlah roda
$roda = 4;

switch ($roda) {
    case 2:
        echo "Jenis kendaraan: Sepeda motor<br>";
        break;

    case 3:
        echo "Jenis kendaraan: Bajaj<br>";
        break;

    case 4:
        echo "Jenis kendaraan: Mobil<br>";
        break;

    case 6:
        echo "Jenis kendaraan: Truk<br>";
        break;

    default:
        echo "Jenis kendaraan tidak diketahui<br>";
}

// Perulangan for - Bilangan Genap dari 2 sampai 10
for ($i = 2; $i <= 10; $i += 2) {
    echo "Bilangan genap: $i<br>";
}

// Foreach - Daftar Kendaraan
$kendaraan = ["Sepeda", "Motor", "Mobil", "Truk"];
foreach ($kendaraan as $k) {
    echo "Kendaraan: $k<br>";
}

// Operator ternary - Cek Genap atau Ganjil
$angka = 7;
$jenis = ($angka % 2 == 0) ? "Genap" : "Ganjil";
echo "Angka $angka adalah $jenis<br>";
?>