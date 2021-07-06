<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
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

?>

    <table>
        <thead>
            <tr>
                <td colspan="3">
                    <h2>Kalkulator Sederhana</h2>
                </td>

            </tr>
        </thead>
        <tbody>
        <form action="" method="post">
            <tr>
                <td>Nilai 1 : <input type="text" name="nilai1" id=""></td>
                <td>Nilai 2 : <input type="text" name="nilai2" id=""></td>
                <td><input type="submit" name="proses" value="Proses"></td>
            </tr>
        </form>
        <?php 
    
    if(isset($_POST['proses'])){
    $nil1=$_POST['nilai1'];
    $nil2=$_POST['nilai2']; ?>

        <tr>
            <td>Hasil Kali </td>
            <td>: </td>
            <td><?php //pemanggilan fungsi kalikan
    echo Kalikan($nil1,$nil2); ?></td>
        </tr>
        <tr>
            <td>Hasil Bagi </td>
            <td>:</td>
            <td><?php echo Bagikan($nil1,$nil2); ?></td>
        </tr>
        <tr>
            <td>Hasil Tambah </td>
            <td>:</td>
            <td><?php  echo Tambah($nil1,$nil2); ?></td>
        </tr>
        <tr>
            <td>Hasil Pengurangan </td>
            <td>:</td>
            <td><?php echo Kurangi($nil1,$nil2); ?></td>
        </tr>
        <? } ?>
        </tbody>
    </table>

</body>

</html>