<!DOCTYPE html>

<style>
    /* Mengelompokkan tombol-tombol dalam div */
        .button-group {
            display: flex;
            align-items: center;
        }

        /* Mengatur jarak antar tombol dan penempatan di sebelah kanan */
        .button-group .button {
            background-color: black !important;
            border: none;
            color: #fff;
            margin-left: 10px; /* Sesuaikan jarak antar tombol */
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button-group .button:hover {
            color: #5d68f1;
        }

        /* Menambahkan margin pada tombol-tombol di sebelah kanan */
        .button-group {
            margin-left: auto;
            margin-right: 30px;
        }

</style>
</html>
<?php

include('koneksi.php');

session_start(); /* untuk memulai session*/

if (!isset($_SESSION['login'])) { 
    header('location: login.php');
}

$data = mysqli_query($koneksi, "SELECT * FROM students");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University System Management </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            background: url("mandatsis2.png");
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">University System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir dari Navbar -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h3 class="card-title"> University System Management </h3>
            </div>
    <div class="card-body">
                <?php
                if (isset($_SESSION['gagal'])) {
                    echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show" role="alert">
                            ' . $_SESSION['gagal'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    unset($_SESSION['gagal']);
                } elseif (isset($_SESSION['sukses'])) {
                    echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show" role="alert">
                            ' . $_SESSION['sukses'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    unset($_SESSION['sukses']);
                }
                ?>         
        <div class="button-group">
            <a href="query1.php" class="button">Query 1</a>
            <a href="query2.php" class="button">Query 2</a>
            <a href="query3.php" class="button">Query 3</a>
            <a href="query4.php" class="button">Query 4</a>
            <a href="query5.php" class="button">Query 5</a>
            <a href="query6.php" class="button">Query 6</a>
            <a href="query7.php" class="button">Query 7</a>
            <a href="query8.php" class="button">Query 8</a>
            <a href="query9.php" class="button">Query 9</a>
            <a href="query10.php" class="button">Query 10</a>
            <a href="query11.php" class="button">Query 11</a>
            <a href="query12.php" class="button">Query 12</a>
        </div>
    </div>
</body>

</html>