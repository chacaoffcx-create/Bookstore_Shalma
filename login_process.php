<?php

session_start();

include "../config/koneksi.php";


$email = $_POST['email'];
$password = $_POST['password'];


// cek admin

$query_admin = mysqli_query(
$conn,
"SELECT * FROM admin 
WHERE username='$email'"
);


$admin = mysqli_fetch_assoc($query_admin);



if($admin){

    if($password == $admin['password']){


        $_SESSION['login']=true;
        $_SESSION['role']="admin";
        $_SESSION['nama']=$admin['nama'];
        $_SESSION['id']=$admin['id_admin'];


        header("location:../admin/dashboard.php");

        exit;

    }

}



// cek user


$query_user=mysqli_query(
$conn,
"SELECT * FROM user 
WHERE email='$email'"
);


$user=mysqli_fetch_assoc($query_user);



if($user){


    if($password == $user['password']){


        $_SESSION['login']=true;
        $_SESSION['role']="user";
        $_SESSION['nama']=$user['nama'];
        $_SESSION['id']=$user['id_user'];


        header("location:../user/dashboard.php");

        exit;

    }


}


echo "
<script>
alert('Email atau Password salah');
window.location='login.php';
</script>
";


?>