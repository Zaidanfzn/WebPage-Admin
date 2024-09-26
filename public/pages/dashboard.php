<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: auth/login.php");
    exit;
}

require '../../functions/functions.php';

$asisten = query("SELECT shift_asisten.id, nim, asisten.name, code, start_time, end_time, shift.name AS day 
FROM shift_asisten 
JOIN asisten ON shift_asisten.asisten_id = asisten.id 
JOIN shift ON shift_asisten.shift_id =shift.id
ORDER BY asisten.id", []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
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
    <?php include 'template/navbar_root.php';?>
    <div class="absolute h-full left-[78px] transition-all duration-500 ease content" style="width: calc(100% - 78px);">
        <div class="mr-5 ml-[130px] my-5">
            <div class="mb-4">
                <a href="actions/add_schedule.php" class="bg-darksystem text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-800 transition-all duration-300 ease text-lg shadow-custom hover:bg-darkmode">
                    Add Schedule
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="max-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-darksystem text-center text-lg font-bold text-white">
                            <th class="py-3 px-4 border">No.</th>
                            <th class="py-3 px-4 border">NIM</th>
                            <th class="py-3 px-4 border">Name</th>
                            <th class="py-3 px-4 border">Code</th>
                            <th class="py-3 px-4 border">Schedule</th>
                            <th class="py-3 px-4 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($asisten as $as) : ?>
                        <tr class="text-center text-lg hover:bg-gray-50">
                            <td class="py-2 px-4 border"><?=$i++?></td>
                            <td class="py-2 px-4 border"><?=$as["nim"]?></td>
                            <td class="py-2 px-4 border"><?=$as["name"]?></td>
                            <td class="py-2 px-4 border"><?=$as["code"]?></td>
                            <td class="py-2 px-4 border"><?=$as["day"]?>, <?=$as["start_time"]?> - <?=$as["end_time"]?></td>
                            <td class="py-2 px-4 border">
                                <a href="actions/edit_schedule.php?id=<?=$as["id"]?>" class="text-blue-500 hover:underline mr-2">Edit</a>
                                <a href="actions/rm_schedule.php?id=<?=$as["id"]?>" class="text-red-500 hover:underline delete-link">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="../js/script.js"></script>
</body>
</html>