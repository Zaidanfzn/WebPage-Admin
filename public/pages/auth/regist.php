<?php

require "../../../functions/auth.php";

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if(regisLaboran($_POST) > 0){
        echo "
            <script>
                alert('Berhasil terdaftar');
                document.location.href = '../auth/login.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Gagal mendaftar');
                document.location.href = '../auth/register.php';
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
    <title>Regist Page</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="flex flex-col items-center justify-center min-h-screen py-2 bg-graywarrior">

    <section class="flex flex-col items-center justify-center w-full flex-1 px-20 text-center">
        <div class="bg-freshgreen rounded-2xl shadow-2xl flex w-2/3 max-w-4xl">

            <!-- Sign Up Section Start -->
            <div class="w-3/5 p-5">
                <div class="text-left font-bold">
                    <span class="text-white">Team</span> Newbie
                </div>
                <div class="py-10">
                    <h2 class="text-3xl font-bold text-white mb-2">
                        Register your account
                    </h2>
                    <div class="border-2 w-10 border-white inline-block mb-2"></div>
                    <p class="text-white my-3 text-sm">Fill out your profile well.</p>
                    <form class="flex flex-col items-center" method="post">
                        <div class="bg-graywarrior border-graysimple w-64 p-2 rounded-xl border flex items-center mb-3">
                            <input type="text" name="username" placeholder="Username" required class="bg-graywarrior outline-none text-sm flex-1">
                        </div>
                        <div class="bg-graywarrior border-graysimple w-64 p-2 rounded-xl border flex items-center mb-3">
                            <input type="email" name="email" placeholder="Email" required class="bg-graywarrior outline-none text-sm flex-1">
                        </div>
                        <div class="bg-graywarrior border-graysimple w-64 p-2 rounded-xl border flex items-center mb-3 relative">
                            <input type="password" name="password" placeholder="Password" required class="bg-graywarrior outline-none text-sm flex-1">
                            <img class="w-4 cursor-pointer top-1/2 absolute right-3 -translate-y-1/2 toggle-password" src="../../images/eye-close.png" data-close="../../images/eye-close.png" data-open="../../images/eye-open.png">
                        </div>
                        <div class="bg-graywarrior border-graysimple w-64 p-2 rounded-xl border flex items-center mb-3 relative">
                            <input type="password" name="confirm_password" placeholder="Password" required class="bg-graywarrior outline-none text-sm flex-1">
                            <img class="w-4 cursor-pointer top-1/2 absolute right-3 -translate-y-1/2 toggle-password" src="../../images/eye-close.png" data-close="../../images/eye-close.png" data-open="../../images/eye-open.png">
                        </div>
                        <button 
                             type="submit" name="submit"
                            class="mt-4 border-2 border-white text-white rounded-full px-12 py-2 inline-block font-semibold hover:bg-white hover:text-freshgreen"
                        >
                            Register
                        </button>
                    </form>
                </div>
            </div>
            <!-- Sign Up Section End -->

            <!-- Sign In Section Start -->
             <div class="w-2/5 bg-white text-freshgreen rounded-tr-2xl rounded-br-2xl py-36 px-12">
                <h2 class="text-3xl font-bold mb-2">Hai, Kamu!</h2>
                <div class="border-2 w-10 border-freshgreen inline-block mb-2"></div>
                <div class="flex justify-center my-2">
                    <div class="border-2 border-freshgreen rounded-full p-3 mx-1"></div>
                    <div class="border-2 border-freshgreen rounded-full p-3 mx-1"></div>
                    <div class="border-2 border-freshgreen rounded-full p-3 mx-1"></div>
                </div>
                <p class="mb-7 mt-5">Sign in if you already have an account</p>
                <a 
                    href="./login.php" 
                    class="border-2 border-freshgreen rounded-full px-12 py-2 inline-block font-semibold hover:bg-freshgreen hover:text-white"
                >
                    Sign In
                </a>
             </div>
             <!-- Sign In Section End -->
        </div>
    </section>

    </div>

<script src="../../js/script.js"></script>
</body>
</html>