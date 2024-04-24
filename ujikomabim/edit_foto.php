<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Edit Foto</title>
</head>
<body>
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
    
    <!-- card -->
<div class="hero min-h-screen ">
  <div class="hero-content text-center">
    
  <form action="update_foto.php" method="post" enctype="multipart/form-data" class="form-container">
    <?php
        include "koneksi.php";
        $fotoid=$_GET['fotoid'];
        $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
        while($data=mysqli_fetch_array($sql)){
    ?>

    <div class="card w-[500px] bg-base-100 m-8 shadow-2xl">
        <div class="card-body">
        <div class="text-3xl text-start m-5"><b>Edit Foto!!</b></div> 
        <hr class="m-5">

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Judul</b></span>
        </div>
        <input type="hidden" name="fotoid" value="<?=$data['fotoid']?>" hidden>
        <input type="text" placeholder="Type here" name="judulfoto" value="<?=$data['judulfoto']?>" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Deskripsi</b></span>
        </div>
        <input type="text" placeholder="Type here" name="deskripsifoto" value="<?=$data['deskripsifoto']?>" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Masukan Foto</b></span>
        </div>
        <input type="file" class="file-input w-full max-w-xs" name="lokasifile"/>
    </label>
        <div class="card-actions justify-end">
            <button type="submit" class="btn btn-neutral">Ubah</button>
        </div>

        </form>
        </div>
    </div>
    <?php
        }
    ?>
</form>



  </div>
</div>


    
</body>
</html>