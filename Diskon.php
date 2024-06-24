<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Barang</title>
</head>
<body>
    <h1>Form Pembelian Barang</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required><br><br>
        <label for="harga">Harga Barang (Rp):</label>
        <input type="number" id="harga" name="harga" required><br><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required><br><br>
        <input type="submit" value="Hitung Total Bayar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $diskon = 0;
        if ($jumlah >= 3) {
            $diskon = 0.1 * $harga * $jumlah; // 10% dari total harga sebelum diskon
        }

        $total_bayar = ($harga * $jumlah) - $diskon;

        echo "<h2>Detail Pembelian</h2>";
        echo "Nama Barang: " . $nama_barang . "<br>";
        echo "Harga per unit: Rp" . number_format($harga, 2) . "<br>";
        echo "Jumlah: " . $jumlah . "<br>";
        echo "Diskon: Rp" . number_format($diskon, 2) . "<br>";
        echo "Total Bayar: Rp" . number_format($total_bayar, 2) . "<br>";
    }
    ?>
</body>
</html>
