<?php

$nama = $_GET ['nama'];
$nilai = $_GET ['nilai'];

echo "Nama : ".$nama;
echo "<br>";
echo "Nilai : ".$nilai;
echo "<br>";

$nilai;
if($nilai >= 85 && $nilai <= 100){
    echo "Predikat: A". "<br>";
    echo "Status : Lulus";
}elseif($nilai >=75 && $nilai<=84){
    echo "Predikat: B". "<br>";
    echo "Status : Lulus";
    
}elseif($nilai >=65 && $nilai<=74){
    echo "Predikat: C". "<br>";
    echo "Status : Lulus";

}elseif($nilai >=50 && $nilai<=64){
    echo "Predikat: D". "<br>";
    echo "Status : Lulus";
}elseif($nilai >=0 && $nilai<=49){
    echo "Predikat: E". "<br>";
    echo "Status : Tidak Lulus";
}
?>