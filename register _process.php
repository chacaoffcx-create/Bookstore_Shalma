<?php


include "../config/koneksi.php";


$nama=$_POST['nama'];

$email=$_POST['email'];

$password=$_POST['password'];

$alamat=$_POST['alamat'];

$telepon=$_POST['telepon'];

$tanggal=date("Y-m-d");



// cek email

$cek=mysqli_query(
$conn,
"SELECT * FROM user WHERE email='$email'"
);



if(mysqli_num_rows($cek)>0){

echo "
<script>
alert('Email sudah digunakan');
window.location='register.php';
</script>
";

exit;

}



$query=mysqli_query(
$conn,

"INSERT INTO user
(nama,email,password,alamat,telepon,tanggal_daftar)

VALUES

(
'$nama',
'$email',
'$password',
'$alamat',
'$telepon',
'$tanggal'
)"

);



if($query){

echo "
<script>

alert('Registrasi berhasil');

window.location='login.php';

</script>
";


}else{

echo "Gagal daftar";

}


?>