<?php
session_start();

// Koneksi ke functions.php
require '../../../functions/auth.php';

if(isset($_SESSION["login"])){
    header("Location: ../dashboard.php");
    exit;
}

// cek apakah tombol submit, sudah diklik apa belum
if(isset($_POST["login"])){
   if(loginLaboran($_POST) >0){
    header("Location: ../dashboard.php");
    exit;
   }else{
     echo "
        <script>
            alert('Gagal Login, silakan cek ulang');
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
    <title>Login Page</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="flex flex-col items-center justify-center min-h-screen py-2 bg-graywarrior">

    <section class="flex flex-col items-center justify-center w-full flex-1 px-20 text-center">
        <div class="bg-white rounded-2xl shadow-2xl flex w-2/3 max-w-4xl">
            <!-- Sign In Section Start -->
            <div class="w-3/5 p-5">
                <div class="text-left font-bold">
                    <span class="text-freshgreen">Team</span> Newbie
                </div>
                <div class="py-10">
                    <h2 class="text-3xl font-bold text-freshgreen mb-2">
                        Sign in to Account
                    </h2>
                    <div class="border-2 w-10 border-freshgreen inline-block mb-2"></div>
                    <div class="flex justify-center my-2">
                        <div class="border-2 border-graysimple rounded-full p-3 mx-1"></div>
                        <div class="border-2 border-graysimple rounded-full p-3 mx-1"></div>
                        <div class="border-2 border-graysimple rounded-full p-3 mx-1"></div>
                    </div>
                    <p class="text-graysimple my-3 text-sm">If you already a member, easily log in.</p>
                    <form class="flex flex-col items-center" method="post">
                        <div class="bg-graywarrior border-graysimple w-64 p-2 rounded-xl border flex items-center mb-3">
                            <input type="username" name="username" placeholder="Username" class="bg-graywarrior outline-none text-sm flex-1">
                        </div>
                        <div class="bg-graywarrior border-graysimple w-64 p-2 rounded-xl border flex items-center mb-3 relative">
                             <input type="password" name="password" placeholder="Password" class="bg-graywarrior outline-none text-sm flex-1" id="password">
                             <img class="w-4 cursor-pointer top-1/2 absolute right-3 -translate-y-1/2 toggle-password" src="../../images/eye-close.png" data-close="../../images/eye-close.png" data-open="../../images/eye-open.png">
                        </div>
                        <button 
                            type="submit" name="login"
                            class="mt-4 border-2 border-freshgreen rounded-full px-12 py-2 inline-block font-semibold hover:bg-freshgreen hover:text-white"
                        >
                            Log In
                        </button>
                    </form>
                </div>
            </div>
            <!-- Sign In Section End -->

            <!-- Sign Up Section Start -->
             <div class="w-2/5 bg-freshgreen text-white rounded-tr-2xl rounded-br-2xl py-36 px-12">
                <h2 class="text-3xl font-bold mb-2">Hai, Kamu!</h2>
                <div class="border-2 w-10 border-white inline-block mb-2"></div>
                <p class="mb-7 mt-5">Register if you haven't already</p>
                <a 
                    href="regist.php" 
                    class="border-2 border-white rounded-full px-12 py-2 inline-block font-semibold hover:bg-white hover:text-freshgreen"
                >
                    Sign Up
                </a>
             </div>
             <!-- Sign Up Section End -->
        </div>
    </section>

    </div>

<script src="../../js/script.js"></script>
</body>
</html>