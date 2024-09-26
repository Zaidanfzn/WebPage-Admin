<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: ../auth/login.php");
    exit;
}
// Koneksi ke functions.php
require '../../../functions/functions.php';

$id = $_GET["id"];

if (delateShift ($id) > 0){
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = '../shift.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus');
        document.location.href = '../shift.php';
    </script>
    ";
}

