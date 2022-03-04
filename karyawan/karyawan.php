<?php
$hostname = "localhost";
$database = "karyawan";
$username = "root";
$password = "";
$kon = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
} ?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Karyawan </title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }

        thead {
            background-color: #cccddd;
        }
    </style>
</head>

<body>
    <h2>Data Karyawan</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Gaji (Perbulan)</td>
                <td>Level Jabatan</td>
                <td>Region</td>
                <td>Gaji Total</td>
            </tr>
        </thead>
        <?php
        // include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM data_karyawan');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= "Rp " . number_format($data['gaji'], 2, ',', '.'); ?></td>
                <td><?= $data['level_jabatan'] ?></td>
                <td><?= $data['region'] ?></td>

                <?php
                if ($data['gaji'] > 15000000) {
                    $gaji_tambahan = (10 / 100) * $data['gaji'];
                    $tot_gaji = $data['gaji'] + $gaji_tambahan;
                } elseif ($data['gaji'] < 15000000 && $data['gaji'] > 10000000) {
                    $gaji_tambahan = (12 / 100) * $data['gaji'];
                    $tot_gaji = $data['gaji'] + $gaji_tambahan;
                } else {
                    $gaji_tambahan = (15 / 100) * $data['gaji'];
                    $tot_gaji = $data['gaji'] + $gaji_tambahan;
                }
                ?>

                <?php
                if ($data['region'] == 'Jakarta') {
                    $potongan = (2.5 / 100) * $tot_gaji;
                    $gaji = $tot_gaji - $potongan;
                } elseif ($data['region'] == 'Bandung') {
                    $potongan = (2 / 100) * $tot_gaji;
                    $gaji = $tot_gaji - $potongan;
                } else {
                    $potongan = (1.8 / 100) * $tot_gaji;
                    $gaji = $tot_gaji - $potongan;
                }
                ?>

                <?php
                if ($data['level_jabatan'] == 'Manager') {
                    $gaji_total = $gaji + 250000;
                } elseif ($data['level_jabatan'] == 'Ass. Manager') {
                    $gaji_total = $gaji + 175000;
                } elseif ($data['level_jabatan'] == 'Senior Officer') {
                    $gaji_total = $gaji + 150000;
                } elseif ($data['level_jabatan'] == 'Middle Officer') {
                    $gaji_total = $gaji + 125000;
                } elseif ($data['level_jabatan'] == 'Junior Officer') {
                    $gaji_total = $gaji + 100000;
                }
                ?>

                <td><?= "Rp " . number_format($gaji_total, 2, ',', '.'); ?></td>

            </tr>
        <?php } ?>
    </table>
</body>

</html>