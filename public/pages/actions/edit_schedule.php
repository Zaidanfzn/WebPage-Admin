<?php 

session_start();

if( !isset($_SESSION["login"])){
    header("Location: ../auth/login.php");
    exit;
}
// Koneksi ke functions.php
require "../../../functions/functions.php";

// ambil data di url
$id = $_GET["id"];
// query data items berdasarkan ID
$jadwal = query("SELECT * FROM shift_asisten WHERE id = ?", ["i", $id])[0];

// Ambil data shift
 $shift = query("SELECT * FROM shift", []);
 // Ambil data asisten
 $asisten = query("SELECT * FROM asisten", []);


// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if(updateJadwal($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = '../dashboard.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = '../dashboard.php';
            </script>
        ";
    }
    // var_dump($_POST);
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        .sidebar {
            width: 78px;
        }
        .sidebar.active {
            width: 240px;
        }
        .sidebar .logo {
            opacity: 0;
            pointer-events: none;
        }
        .sidebar.active .logo {
            opacity: 1;
            pointer-events: none;
        }
        .sidebar.active #btn {
            left: 90%;
        }
        .sidebar.active .tooltip {
            display: none;
        }
        .sidebar.active .link_name {
            opacity: 1;
            pointer-events: auto;
        }
        .sidebar.active .prof {
            background: #1D1B31;
        }
        .sidebar.active .profile {
            opacity: 1;
            pointer-events: auto;
        }
        .sidebar.active .log_out {
            left: 88%;
            background: none;
        }
        .sidebar.active ~ .content {
            width: calc(100%-240px);
            left: 240px;
        }
    </style>
</head>
<body class="relative min-h-screen w-full overflow-hidden">

    <?php include '../template/navbar.php';?>
    <div class="absolute h-full left-[78px] transition-all duration-500 ease content" style="width: calc(100% - 78px);">
        <div class="mr-5 ml-[130px] my-5">
            
            <!-- POP UP EDIT SCHEDULE START -->      
            <div id="editSchedulePopup" class="fixed inset-0 bg-graysimple bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white p-6 rounded-lg w-[400px] shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4">Edit Schedule</h2>
                    <form id="editScheduleForm" method="post">
                        <input type="hidden" value="<?= $jadwal["id"]; ?>" name="id" id="id" >
                        <div class="mb-4">
                            <label for="asisten_id" class="block text-sm font-medium text-gray-700">Kode Asisten</label>
                            <select id="asisten_id" name="asisten_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <?php foreach($asisten as $a) :?>
                                <option value="<?=$a["id"]?>" <?= $a["id"] == $jadwal["asisten_id"] ? "selected" : "" ?>><?=$a["code"]?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="shift_id" class="block text-sm font-medium text-gray-700">Schedule</label>
                            <select id="shift_id" name="shift_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <?php foreach($shift as $s) :?>
                                <option value="<?=$s["id"]?>" <?= $s["id"] == $jadwal["shift_id"] ? "selected" : "" ?>><?=$s["name"]?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="button" id="closeEditSchedulePopupBtn" onclick="closeEditSchedulePopup()" class="mr-2 px-4 py-2 bg-darksystem text-white hover:bg-gray-600 rounded-lg">Cancel</button>
                            <button type="submit" name="submit" class="px-4 py-2 bg-darksystem text-white hover:bg-gray-600 rounded-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- POP UP EDIT SCHEDULE END -->

        </div>
    </div>
    <script src="../../js/script.js"></script>
</body>
</html>