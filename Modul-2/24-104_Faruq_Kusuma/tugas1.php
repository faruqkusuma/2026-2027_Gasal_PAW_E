<?php
$matkul = ["PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL"];
$praktikum = ["JARKOM", "PAW"];

for ($i = 0; $i < count($matkul); $i++) {
    $matkul_sekarang = $matkul[$i];

    if (in_array($matkul_sekarang, $praktikum)) {
        echo "Saya sedang mengambil matkul " . $matkul_sekarang . " termasuk praktikumnya<br>";
    } elseif ($i == 6 || $i == 7) {
        echo "Saya belum mengambil matkul " . $matkul_sekarang . "<br>";
    } else {
        echo "Saya sudah mengambil matkul " . $matkul_sekarang . " semester lalu<br>";
    }
}
?>
