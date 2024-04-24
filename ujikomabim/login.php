<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Login</title>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 350px;
}

h1 {
    text-align: center;
    color: #333;
}

table {
    margin: auto;
}

input[type="text"],
input[type="password"] {
    width: calc(100% - 20px); /* Adjusted for padding */
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #007bff;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.sign-up-link {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.sign-up-link a {
    color: #007bff;
    text-decoration: none;
}

.sign-up-link a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
<!-- card -->
<div class="hero min-h-screen m-8">
  <div class="hero-content text-center">
       
<div>
    <div class="card w-[550px] bg-base-100 shadow-2xl">
        <div class="card-body">

        <form action="proses_login.php" method="post" class="m-5">
        <div class="text-2xl m-5"><b>Login!!</b></div> 
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

        <div class="card-actions justify-end mt-5">
            <button type="submit" class="btn btn-neutral" value="register">Daftar</button>
        </div>

        <div class="sign-up-link">
            Sudah punya akun? <a href="register.php">Sign up</a>
        </div>

        </form>
        </div>
    </div>
</div>

  </div>
</div>

</body>
</html>