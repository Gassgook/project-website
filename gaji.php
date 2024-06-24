<?php
function hitungGaji($jumlahHari, $jumlahJamLembur) {
    $gajiPerHari = 50000;
    $bonusUangMakanPerHari = 5000;
    $totalGaji = 0;

    // Menghitung gaji pokok
    $gajiPokok = $jumlahHari * $gajiPerHari;

    // Menghitung gaji lembur
    $gajiLembur = 0;
    if ($jumlahJamLembur > 0) {
        if ($jumlahJamLembur <= 2) {
            $gajiLembur = $jumlahJamLembur * 25000;
        } else {
            $gajiLembur = 2 * 25000 + ($jumlahJamLembur - 2) * 35000;
        }
    }

    // Menghitung bonus uang makan
    $bonusUangMakan = 0;
    if ($jumlahHari * 8 + $jumlahJamLembur >= 20) {
        $bonusUangMakan = $jumlahHari * $bonusUangMakanPerHari;
    }

    // Menghitung total gaji
    $totalGaji = $gajiPokok + $gajiLembur + $bonusUangMakan;

    return $totalGaji;
}

// Contoh penggunaan fungsi
$hariKerja = 5; // jumlah hari kerja
$jamLembur = 3; // jumlah jam lembur
echo "Total Gaji: Rp" . hitungGaji($hariKerja, $jamLembur);
?>
