<!DOCTYPE html>
<html>
<head>
    <title>Hasil Diskon Mahasiswa</title>
    <style>
        fieldset {
            width: 350px;
            padding: 15px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $semester = $_POST["semester"];
    $ukt = $_POST["ukt"];

    // Hitung diskon
    $diskon = ($ukt >= 5000000) ? 10 : 0;
    if ($ukt >= 5000000 && $semester > 8) {
        $diskon = 15;
    }

    // Hitung jumlah bayar
    $bayar = $ukt - ($ukt * $diskon / 100);

    // Tampilkan hasil
    echo "
    <fieldset>
        <legend>Luaran yang diharuskan</legend>
        NPM: $npm<br>
        Nama: $nama<br>
        Prodi: $prodi<br>
        Semester: $semester<br>
        Biaya UKT: Rp. $ukt,-<br>
        Diskon: $diskon%<br>
        Yang Harus Dibayar: Rp. $bayar,-
    </fieldset>";
} else {
    echo "<p>Silakan isi form dari <a href='form_diskon.php'>sini</a>.</p>";
}
?>

</body>
</html>
