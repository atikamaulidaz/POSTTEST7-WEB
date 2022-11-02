<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
$nama = $_SESSION["nama"];
$username = $_SESSION["username"];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <div class="header">
        <div class="nama-header">Laundry Express</div>
        <div class="list-header">
            <ul>
                <li><button id="switch"><img src="images/night-mode.png" width="50px" height="50px"></button></li>
                <li ><a href="http://localhost/Posttest7/beranda.php" style="text-decoration: none;">Home</a></li>
                <li><a href="aboutme.php" style="text-decoration: none;">About Me</a></li>
                <li><a href="data.php" style="text-decoration: none;">Buat Pesanan</a></li>
                <li><a href="logout.php" style="text-decoration: none;">Logout</a></li>
                <!-- <li><a href="login.php" style="text-decoration: none;">Login/Daftar</a></li> -->
            </ul>
        </div>
    </div>
    <div class="about-me">
        <div class="data">
            <center>
                <h3 class="data-diri">About Me</h3>
            </center>
            <div class="data-item">
                <center><img src="images/ancestors.png" width="350px" height="350px"></center>
            </div>
            <div class="data-item">
                <center>
                    <table>
                        <tbody>
                         <tr>
                             <td>Nama Lengkap</td>
                             <td>:</td>
                             <td><?php echo $nama?></td>
                         </tr>
                         <tr>
                             <td>Username</td>
                             <td>:</td>
                             <td><?php echo $username?></td>
                         </tr>
                         <!-- <tr>
                            <td>Hobi</td>
                            <td>:</td>
                            <td>Makan</td>
                         </tr> -->
                        </tbody>
                     </table>
                </center>
            </div>
        </div>
    </div>
    <script src="javascript/jquery.js"></script>
</body>
</html>