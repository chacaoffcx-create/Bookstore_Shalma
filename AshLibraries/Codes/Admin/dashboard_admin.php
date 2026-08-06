<?php

session_start();


if($_SESSION['role']!="admin"){

header("location:../auth/login.php");

}


?>

<h1>
Dashboard Admin
</h1>


<h3>
Halo <?= $_SESSION['nama']; ?>
</h3>


<a href="../auth/logout.php">
Logout
</a>