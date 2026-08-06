<?php

session_start();


if($_SESSION['role']!="user"){

header("location:../auth/login.php");

}

?>


<h1>
Dashboard User
</h1>


<h3>
Selamat datang <?= $_SESSION['nama']; ?>
</h3>


<a href="../auth/logout.php">
Logout
</a>