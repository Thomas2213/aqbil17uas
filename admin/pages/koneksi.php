<?php
$host = "sql212.epizy.com";
$user = "epiz_23907506";
$passwd = "gEkY6C20iK7oQ";
$db = "epiz_23907506_makanmakan";

$konek = mysqli_connect($host, $user, $passwd, $db);
if (!$konek) {
  echo "Gagal koneksi !";
}

//fungsi logout
function logout(){
  session_start();
  session_destroy();
  header("location: login.php");
}
?>
