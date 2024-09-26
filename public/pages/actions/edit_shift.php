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
$shift = query("SELECT * FROM shift WHERE id = ?", ["i", $id])[0];


// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di edit atau tidak
    if(updateShift($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil di edit');
                document.location.href = '../shift.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Data gagal di edit');
                document.location.href = '../shift.php';
            </script>
        ";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Shift</title>
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

        <!-- POP UP EDIT SHIFT START -->
            <div id="editShiftPopup" class="fixed inset-0 bg-graysimple bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white p-6 rounded-lg w-[400px] shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4">Edit Shift</h2>
                    <form id="editShiftForm" method="post">
                        <input type="hidden" value="<?= $shift["id"]; ?>" name="id" id="id" >
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Shift</label>
                            <input type="text" id="name" name="name" value="<?= $shift["name"] ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
                            <input type="time" id="start_time" name="start_time" value="<?= $shift["start_time"] ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
                            <input type="time" id="end_time" name="end_time" value="<?= $shift["end_time"] ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="button" name="exit" onclick="closeEditShiftPopup()" id="closeEditShiftPopupBtn" class="mr-2 px-4 py-2 bg-darksystem text-white hover:bg-gray-600 rounded-lg">Cancel</button>
                            <button type="submit" name="submit" class="px-4 py-2 bg-darksystem text-white hover:bg-gray-600 rounded-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- POP UP EDIT SHIFT END -->

        </div>
    </div>
    <script src="../../js/script.js"></script>
</body>
</html>