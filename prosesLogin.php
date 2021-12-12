
<link rel="stylesheet" href="style.css" type="text/css">
<?php
    include "koneksi.php";


    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query="SELECT * FROM pengguna WHERE username='$username' and password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == '1'){
        echo " ";?>
            <h3>Anda berhasil Login, silahkan klik tombol berikut: </h3>
        <a href="halAdmin.html">Halaman HOME</a>
        <?php
    } else if ($row['level'] == '2'){
        echo " ";?>
         <h3>Anda berhasil Login, silahkan klik tombol berikut: </h3>
        <a href="halGuest.html">Halaman HOME</a>
        <?php
    } 
    else {
        echo " ";?>
        <h3>Anda gagal login. Silahkan: </h3>
        <a href="formLogin.html">Login kembali</a>
        <?php
        echo mysqli_error($connect);
    }

?>
