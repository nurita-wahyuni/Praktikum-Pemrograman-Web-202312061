<?php
// Associative Array
$data_dosen = [
    "nama" => "Ir. ABADI NUGROHO, S.Kom., M.Kom.",
    "nidn" => "1104129002",
    "matkul" => "Pemrograman Web"
];

echo "Dosen Pengampu: " . $data_dosen["nama"] . "<br><br>";

// Indexed Array
$teman_kelas = ["Hana", "Alma", "Zulfa", "Ayu", "Mira"];

echo "Daftar Teman Sekelas:<br>";
foreach ($teman_kelas as $nama) {
    echo "- $nama<br>";
}
?>