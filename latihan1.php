<style>
.fontBesar {
    font-size:40pt;
}
</style>
<h2>Praktek Latihan 1</h2>
<?php 
echo "<span class='fontBesar'>HALO Selamat Datang Latihan 1</span><span><b>Tebal</b></span> ";
echo "<p>Paragraph 2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, earum eum animi assumenda beatae delectus cupiditate aperiam totam debitis eveniet adipisci! Aliquam facere fugiat vitae quas aut eligendi qui laboriosam?</p>";
echo "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptate maiores, provident accusamus suscipit incidunt, eius iure illo vel aliquid magni, commodi enim alias blanditiis quod in quasi quos odit?</p>";
?>
<h2>Praktek Latihan 2</h2>
<?php
//deklrasi variabel dengan tipe data string 
$nama="Peserta JWD";
//deklarasi variabel dengan tipe data number /angka
$jumlah=40;
//ubah isi variabel 
$nama="Samuel ";

echo $nama;

?>
<h2>Praktek Latihan 3</h2>
<p>Perulangan</p>
<?php 
$awal=1;
//perulangan menggunakan for 
// for($awal;$awal<=100;$awal++){
// echo $awal." Bilangan ";
//     if($awal%2==0){
//         echo "Genap";
//     }else{
//         echo "Ganjil";
//     }
//     echo "<br>";
// }

?>
<h2>Praktek Latihan 4</h2>
<form action="" method="post">
Masukkan Jumlah Nominal : <input type="text" name="angka" id="">
<br>
<input type="submit" name="kirim" value="Kirim">
</form>
<?php
if(isset($_POST['kirim'])){
    //echo $_POST['angka'];
    $JumlahBintang=$_POST['angka'];
    //nilai awal variabel 
    $i=1;
    for ($i = 0; $i < $JumlahBintang; ++$i) {
        for ($j = 0; $j <= $i; ++$j) {
            echo '*';
        }
        echo '<br/>';
    }
}


?>