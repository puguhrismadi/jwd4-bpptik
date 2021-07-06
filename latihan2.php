<h2>Kalkulator Sederhana</h2>


<?php 
//nama fungsi kalikan, dengan 2 parameter
function Kalikan($nilai1,$nilai2){
  return  $hasilkali=$nilai1*$nilai2;
}
function Bagikan($nilai1,$nilai2){
  return $nilai1/$nilai2;
}
function Kurangi($nilai1,$nilai2){
  return $nilai1 - $nilai2;
}
function Tambah($nilai1,$nilai2){
  return $nilai1 + $nilai2;
}


$nil1=10;
$nil2=2;


echo "Hasil kali : ";
//pemanggilan fungsi kalikan
echo Kalikan($nil1,$nil2);
echo "<br>";
echo "Hasil Bagi ";
echo Bagikan($nil1,$nil2);
echo "<br>";
echo "Hasil Pengurangan :";
echo Kurangi($nil1,$nil2);
echo "<br>";
echo "Hasil Penambahan ";
echo Tambah($nil1,$nil2);
?>