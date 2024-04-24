<?php
    session_start();
    if(!isset($_SESSION['userid'])){

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Halaman Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php

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
    <h1 class="text-center text-3xl mt-8">Selamat datang <b>Anonymous</b></h1>
  
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
        <h1 class="text-center text-3xl mt-8">Selamat datang <b><?=$_SESSION['namalengkap']?>
    <?php
        }
    ?>

    
    </b></h1>
    <center>
    <!-- col 2 -->
    <div>
    <div class="card w-[500px] bg-base-100 m-8 shadow-2xl">
        <div class="card-body">

        <form action="tambah_komentar.php" method="post"  class="m-5">
<?php if(isset($_SESSION['userid'])): ?>
<table class="table">
    <!-- head -->
    <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"SELECT * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
    <tr>
                <td>Judul</td>
                <input type="" name="fotoid" value="<?=$data['fotoid']?>" hidden>
                <td>  <?=$data['judulfoto']?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td> <?=$data['deskripsifoto']?></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><img src="gambar/<?=$data['lokasifile']?>" width="200px"></td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td><input type="text" placeholder="Type here" name="isikomentar" class="input input-bordered w-full max-w-xs" required/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" value="Tambah" class="btn btn-neutral">Kirim</button>
                </td>
            </tr>
      <?php
             }
        ?>
  </table>

        </form>
        <?php endif;?>
        </div>
    </div>
</div>
</center>
 
   

    <center>
        <!-- col 1 -->
        <div>

     <!-- card -->

       
<div>
    <div class="card w-[600px] bg-base-100 m-8 shadow-2xl">
        <div class="card-body">

        <table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Komentar</th>
        <th>Tanggal</th>
        <th>Aksi</th> <!-- New column header for action -->
    </tr>
    <?php
    $i= 1;
        include "koneksi.php";
        $fotoid=$_GET['fotoid'];
        if(isset($_SESSION['userid'])){
            $userid=$_SESSION['userid'];
        }
        $sql=mysqli_query($conn,"SELECT * FROM komentarfoto,user WHERE komentarfoto.userid=user.userid AND fotoid=$fotoid");
        while($data=mysqli_fetch_array($sql)){
    ?>
        <tr>
        <td><?=$i ?></td>
            <td><?=$data['namalengkap']?></td>
            <td><?=$data['isikomentar']?></td>
            <td><?=$data['tanggalkomentar']?></td>
            <td>
                <!-- Delete comment action -->
                <?php 
                if(isset($_SESSION['userid'])){
                if($userid == $data['userid']){?>
                    <a href="hapus_komentar.php?komentarid=<?=$data['komentarid']?>&fotoid=<?= $fotoid ?>" class="icon-link"><i class="fas fa-trash-alt"></i></a>

                <?php }}?>
            </td>
        </tr>
    <?php
        $i++; }
    ?>
</table>

        </div>
    </div>
</div>

</div>
</center>

    




    
</body>
</html>