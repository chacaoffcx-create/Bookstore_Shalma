<?php
session_start();

if(isset($_SESSION['login'])){
    header("location:../index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login BookStore</title>

<style>

body{
    font-family: Arial;
    background:#f2f2f2;
}

.container{
    width:350px;
    margin:100px auto;
    background:white;
    padding:25px;
    border-radius:10px;
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
}

button{
    width:100%;
    padding:10px;
    background:black;
    color:white;
    border:none;
}

a{
    text-decoration:none;
}

</style>

</head>


<body>


<div class="container">

<h2>Login BookStore</h2>


<form action="login_process.php" method="POST">


<input 
type="email" 
name="email" 
placeholder="Email"
required>


<input 
type="password"
name="password"
placeholder="Password"
required>


<button type="submit">
Login
</button>


</form>


<br>

Belum punya akun?

<a href="register.php">
Register
</a>


</div>


</body>
</html>