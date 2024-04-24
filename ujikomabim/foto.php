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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Foto</title>
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
<center>
<div>
    <div class="card w-[500px] bg-base-100 shadow-2xl">
        <div class="card-body">

        <form action="tambah_foto.php" method="post" enctype="multipart/form-data" class="m-5">
        <div class="text-3xl text-start m-5"><b>Tambah Foto!!</b></div> 
        <hr class="m-5">

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Judul</b></span>
        </div>
        <input type="text" placeholder="Type here" name="judulfoto" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Deskripsi</b></span>
        </div>
        <input type="text" placeholder="Type here" name="deskripsifoto" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Judul</b></span>
        </div>
        <input type="file" class="file-input w-full max-w-xs" name="lokasifile"/>
    </label>
        <div class="card-actions justify-end">
            <button type="submit" class="btn btn-neutral">Tambah</button>
        </div>

        </form>
        </div>
    </div>
</div>
</center>
 

<center>
<!-- table -->

    
  <div>
    <!-- card table -->
    <div class="card w-[850px] m-8 bg-base-100 shadow-2xl">
        <div class="card-body">
        <!-- form -->

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Tanggal Unggah</th>
        <th>Lokasi File</th>
        <th>Disukai</th>
        <th>Aksi</th>
    </thead>
    <tbody>
    <?php
         $i= 1;
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from foto where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
      <tr>
      <td><?=$i ?></td>
        <td><?=$data['judulfoto']?></td>
        <td><?=$data['deskripsifoto']?></td>
        <td><?=$data['tanggalunggah']?></td>
        <td>
            <img src="gambar/<?=$data['lokasifile']?>" width="200px">
        </td>
        <td>
            <?php
                $fotoid=$data['fotoid'];
                $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                echo mysqli_num_rows($sql2);
            ?>
        </td>
        <td>
            <a href="hapus_foto.php?fotoid=<?=$data['fotoid']?>" class="icon-link"><i class="fas fa-trash-alt"></i></a>
            <a href="edit_foto.php?fotoid=<?=$data['fotoid']?>" class="icon-link"><i class="fas fa-pencil-alt"></i></a>
        </td>
      </tr>
      <?php
             $i++; }
        ?>
    </tbody>
  </table>
</div>

        </div>
    </div>


</center>





</div>
</body>
</html>