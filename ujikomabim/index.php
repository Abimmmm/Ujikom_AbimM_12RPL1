
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <head>
</head>

    <title>Halaman Landing</title>
</head>

<body>
   
    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>

    <div class="navbar bg-base-100 shadow-xl">
        <div class="flex-1">
            <a href="index.php" class="btn btn-ghost text-xl">Home</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </div>
    </div>

    <?php
        }else{
    ?>   
      
    <div class="navbar bg-base-100 shadow-xl">
        <div class="flex-1">
        <a href="index.php" class="btn btn-ghost text-xl">Home</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
            <li><a href="foto.php">Foto</a></li>
            <li><a href="logout.php">Logout</a></li>
        </div>
    </div>
        <h1 class="text-center text-3xl mt-8">Selamat datang <b><?=$_SESSION['namalengkap']?></b></h1>
    <?php
        }
    ?>
    
    <!-- cards -->
<div class="grid grid-cols-3">
        <?php

            include "koneksi.php";
            $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <div>
        <div class="card w-96 shadow-md m-8 hover:shadow-2xl">
            <figure><img src="gambar/<?=$data['lokasifile']?>"></figure>
            <div class="card-body">
                <h2 class="card-title"><?=$data['namalengkap']?></h2>
                <p><?=$data['judulfoto']?></p>
                <p><?=$data['deskripsifoto']?></p>
                <div class="card-actions justify-end">
                    <a href="like.php?fotoid=<?=$data['fotoid']?>" class="icon-button"><i class="fas fa-heart"></i></a>
                    <?php
                    $fotoid = $data['fotoid'];
                    $rr = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
                    echo mysqli_num_rows($rr);
                    ?> Suka
                    <a href="komentar.php?fotoid=<?=$data['fotoid']?>" class="icon-button" class="btn btn-ghot btn-rounded"><i class="fas fa-comment"></i></a>
                    <?php
                    $fotoid = $data['fotoid'];
                    $rr = mysqli_query($conn, "SELECT * FROM komentarfoto WHERE fotoid='$fotoid'");
                    echo mysqli_num_rows($rr);
                    ?> Komentar
                </div>
            </div>
        </div>
        </div>


        <?php
         }
        ?>
    </div>
    
</body>
</html>