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
    </style>
</head>

<body class="shadow">
    <nav class="navbar fixed-bottom navbar-dark bg-info">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="index.php">Pesan <i class="bi bi-envelope-fill"></i> Pesan</a>
        </div>
    </nav>

    <div class="container-fluid text-light py-2 bg-primary">
        <div class="text-center">
            <p>Kirim Pesan Anda & Lihat Pesan Orang Lain.</p>
        </div>
        <div class="container py-4">
            <div class="mb-3 py-5">
                <form action="database.php" method="post">
                    <h3 class="text-center py-5"><i>Masukan Pesan Anda Lalu Lihat Pesan Orang Lain</i></h3>
                    <span class="input-group-text d-flex justify-content-center"><i class="bi bi-envelope-fill text-light"></i></span>
                    <textarea class="form-control" name="pesan" id="pesan" rows="4"></textarea>
                    <div class="d-grid">
                        <input type="submit" class="shadow my-5 btn btn-dark" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>