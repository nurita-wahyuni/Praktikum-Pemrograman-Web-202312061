<?php 
$level_user = "admin";

switch ($level_user) {
    case "admin":
        echo "Anda login sebagai Administrator.";
        break;
    
    case "editor":
        echo "Anda login sebagai Editor.";
        break;

    case "user":
        echo "Anda login sebagai Pengguna.";
        break;

    default:
        echo "Level user tidak dikenali.";
        break;
}
?>