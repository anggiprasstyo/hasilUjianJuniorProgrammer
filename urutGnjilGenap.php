<b>Menentukan Bilangan Ganjil/Genap</b>
<hr>
<!-- menggunakan variabel $_GET[] -->
<form action="" method="get">
    <input type="text" name="bil" placeholder="Bilangan">
    <input type="submit" value="Cek">
</form>
<?php
if (isset($_GET['bil'])) {
    $bil = $_GET['bil'];
    //gunakan pembagian sisa atau modulus  
    $hasil = $bil % 2;
    // % adalah pembagian sisa dimana jika hasilnya 1 maka ganjil jika 0 maka genap  
    if ($hasil == 0) {
        echo "Bilangan $bil adalah bilangan <b>Genap</b>";
    }
    if ($hasil == 1) {
        echo "Bilangan $bil adalah bilangan <b>Ganjil</b>";
    }
}
?>
<hr>
<a href="index.php">
    <button>RESET</button>
</a>