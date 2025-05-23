<?php
$hewan = [
    "H001" => "Kucing",
    "H002" => "Kudanil",
    "H003" => "Kuda",
    "H004" => "Ayam",
    "H005" => "Burung",
    "H006" => "Ikan"
];

foreach ($hewan as $kode => $nama) {
    echo "Kode: " . $kode . ", Hewan: " . $nama . "<br>";
}
?>