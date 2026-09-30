<?php
$namaSiswa  = "Budi Santoso";
$kelas      = "XII RPL 1";
$nilaiTugas = 85;
$nilaiUTS   = 80;
$nilaiUAS   = 90;

$nilaiAkhir = ($nilaiTugas * 0.30) + ($nilaiUTS * 0.30) + ($nilaiUAS * 0.40);

if ($nilaiAkhir >= 90 && $nilaiAkhir <= 100) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 80) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "C";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}

if ($nilaiAkhir >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penilaian Siswa</title>
</head>
<body>
    <?php
    echo "<h3>Hasil Penilaian Siswa</h3>";
    echo "<p><u>Nama</u>: $namaSiswa</p>";
    echo "<p><u>Kelas</u>: $kelas</p>";
    echo "<hr width='300' align='left'>";
    echo "<p><u>Nilai Tugas</u>: $nilaiTugas</p>";
    echo "<p><u>Nilai UTS</u>: $nilaiUTS</p>";
    echo "<p><u>Nilai UAS</u>: $nilaiUAS</p>";
    echo "<hr width='300' align='left'>";
    echo "<p><u>Nilai Akhir</u>: $nilaiAkhir</p>";
    echo "<p><u>Predikat</u>: $predikat</p>";
    echo "<p><u>Status</u>: $status</p>";
    ?>
</body>
</html>
