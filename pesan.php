<!doctype html>
<html lang="en">

<head>
    <title>Pesan-Pesan dari Orang</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        .shadow {
            text-shadow: 2px 2px darkblue;
        }

        .shadow2 {
            text-shadow: 2px 2px lightcyan;
        }
    </style>
</head>

<body class="shadow">
    <nav class="navbar fixed-bottom navbar-dark bg-info">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="index.php">Pesan <i class="bi bi-envelope-fill"></i> Pesan</a>
        </div>
    </nav>

    <?php
    include('database.php');

    $sql = "SELECT pesan FROM pesan_user ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
    ?>

        <div class="container-fluid bg-primary py-3 text-light">
            <div class="text-center mb-5">
                <p>Kirim Pesan Anda & Lihat Pesan Orang Lain.</p>
            </div>
            <div class="d-flex py-4 justify-content-center">
                <div class="card" style="width:69rem; min-height: 300px;">
                    <div class="card-body shadow2 text-center">
                        <h6 class="card-title text-dark"><i><strong>Pesan dari user lain...</strong></i></h6>
                        <hr style="height: 5px; border-width:0; color:gray; background-color:gray">
                        <h1 class="text-dark my-5"><i>"<?php echo  $row["pesan"]; ?>"</i></h1>
                        <br>
                        <hr style="height: 5px; border-width:0; color:gray; background-color:gray">
                    </div>
                </div>
            </div>
            <div class="text-center p-5">
                <a class="btn btn-light shadow2" href="index.php" role="button">Tulis pesan baru ?</a>
            </div>
        </div>

    <?php
    }
    $conn->close();
    ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>