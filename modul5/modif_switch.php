<?php
$ukuran_baju = "L";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small - cocok untuk anak-anak.";
        break;
    case "M":
        echo "Ukuran Medium - cocok untuk remaja.";
        break;
    case "L":
        echo "Ukuran Large - cocok untuk dewasa.";
        break;
    case "XL":
        echo "Ukuran Extra Large - cocok untuk orang berbadan besar.";
        break;
    default:
        echo "Ukuran tidak dikenal.";
}
?>