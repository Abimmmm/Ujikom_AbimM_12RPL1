<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
    
</head>
<body>
  <!-- card -->
<div class="hero min-h-screen m-8">
  <div class="hero-content text-center">
       
<div>
    <div class="card w-[550px] bg-base-100 shadow-2xl">
        <div class="card-body">

        <form action="proses_register.php" method="post" class="m-5">
        <div class="text-2xl m-5"><b>Registrasi!!</b></div> 
        <hr>
    
    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Username</b></span>
        </div>
        <input type="text" placeholder="Type here" name="username" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Password</b></span>
        </div>
        <input type="password" placeholder="Type here" name="password" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Email</b></span>
        </div>
        <input type="email" placeholder="Type here" name="email" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Nama</b></span>
        </div>
        <input type="text" placeholder="Type here" name="namalengkap" class="input input-bordered w-full max-w-xs" required/>
    </label>

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text text-xl"><b>Alamat</b></span>
        </div>
        <input type="text" placeholder="Type here" name="alamat" class="input input-bordered w-full max-w-xs" required/>
    </label>

        <div class="card-actions justify-end mt-5">
            <button type="submit" class="btn btn-neutral" value="register">Daftar</button>
        </div>

        <div class="sign-up-link">
            Sudah punya akun? <a href="login.php">Login</a>
        </div>

        </form>
        </div>
    </div>
</div>

  </div>
</div>

   
</body>
</html>