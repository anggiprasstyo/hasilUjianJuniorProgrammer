<html>

<head>
    <title> Tugas 3 Bab 6 </title>
</head>

<body>
    <h1> Menghitung Uang Pecahan </h1>

    <form method="post" action="">
        Masukkan jumlah uang <input type="text" name="uang"><br><br>
        <input type="submit" name="submit" value="proses">
        <input type="reset" name="reset" value="reset"><br><br>
    </form>
    <?php

    if (isset($_POST['submit'])) {

        echo "Uang anda sebesar " . $_POST['uang'] . "<br>";
        $dataa = $_POST['uang'] % 100000;
        $a = ($_POST['uang'] - $dataa) / 100000;

        $datab = $dataa % 50000;
        $b = ($dataa - $datab) / 50000;

        $datac = $datab % 20000;
        $c = ($datab - $datac) / 20000;

        $datad = $datac % 5000;
        $d = ($datac - $datad) / 5000;

        $datae = $datad % 1000;
        $e = ($datad - $datae) / 1000;

        $dataf = $datae % 50;
        $f = ($datae - $dataf) / 50;

        echo "Jumlah Rp.100.000 : " . $a . "<br>";
        echo "Jumlah Rp.50.000 : " . $b . "<br>";
        echo "Jumlah Rp.20.000 : " . $c . "<br>";
        echo "Jumlah Rp.5.000 : " . $d . "<br>";
        echo "Jumlah Rp.1000 : " . $e . "<br>";
        echo "Jumlah Rp.50 : " . $f . "<br>";
    }

    ?>
</body>

</html>