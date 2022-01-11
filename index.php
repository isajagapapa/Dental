<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/ico.png">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </script> -->
    <link href="/styles.css" rel="stylesheet">
    <link href="/fade.css" rel="stylesheet">
    <!-- <link href="bootstrap.min.css" rel="stylesheet"> -->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
</head>

<body id="page-top">
    <!-- Topbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand ml-5" href="index.php">
                <img src="/img/logoweb.png" alt="" width="125" height="29,85">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class=" collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <div class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php" id="" role=" button" data-toggle="" aria-haspopup="true" aria-expanded="false" :active>
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"">Layanan <i class=" fas fa-caret-down ml-1"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/page2.php">Dasar Perawatan Gigi</a></li>
                                <li><a class="dropdown-item" href="/page3.php">Alat Untuk Menjaga Kesehatan Gigi</a>
                                </li>
                                <li><a class="dropdown-item" href="/page4.php">Tips Menjaga Gigi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/page5.php" id="" role=" button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                            </a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Topbar -->

    <header class="masthead">
        <div class="container px-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-left text-lg-start">
                        <h1 id="type" class="display mb-3"></h1>
                        <div class="slide-in from-left">
                            <p class="lead mb-5 mt-4">Disini kami akan membantu para orang tua untuk
                                mempelajari cara merawat kesehatan gigi anak-anak.
                                Seperti halnya menampilkan dasar-dasar perawatan
                                kesehatan gigi, menyikat gigi yang baik dan benar,
                                mengenalkan alat-alat kesehatan gigi yang baik dan benar,
                                sekaligus hal-hal yang harus dihindari untuk merawat
                                kesehatan gigi.</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="btn btn-primary" href="#layanan" role="button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 gx-6">
                    <!-- Masthead device mockup feature-->
                    <img class="slide-in from-right img-fluid" src="img/hp.png" alt="" style="width: 500px;">
                </div>
            </div>
        </div>
    </header>
    <div class="container px-5 mb-6 text-center justify-content-center" id="layanan">
        <h2 class="fade-in align-items-center text-lg-center justify-content-center position-relative text-center">Layanan Kami</h2>
        <hr class="fade-in mt-3 mb-5" size="7px" width="10%">

        <div class="row row-cols-1 row-cols-md-3 g-4 text-center align-items-center">
            <div class="fade-in col text-center justify-content-center">
                <div class="card h-100 w-75 shadow-lg border-0 px-3">
                    <img src="img/dasar.png" style="width:50%" class="mt-5" alt="...">
                    <hr class="mt-4 mb-3" size="7px" width="50%">
                    <div class="card-body">
                        <h3 class="card-title">Dasar Perawatan Gigi</h3>
                    </div>
                    <a class="btn btn-primary mb-4" href="page2.php" role="button">Cari Tahu</a>
                </div>
            </div>
            <div class="fade-in col text-center justify-content-center">
                <div class="card h-100 w-75 shadow-lg border-0 px-3">
                    <img src="img/alat.png" class="mt-5" style="width:50%" alt="...">
                    <hr class="mt-4 mb-3" size="7px" width="50%">
                    <div class="card-body">
                        <h3 class="card-title">Alat Untuk Menjaga Kesehatan Gigi</h3>
                    </div>
                    <a class="btn btn-primary mb-4" href="page3.php" role="button">Cari Tahu</a>
                </div>
            </div>
            <div class="fade-in col text-center justify-content-center">
                <div class="card h-100 w-75 shadow-lg border-0 px-3">
                    <img src="/img/tips.png" class="mt-5" style="width:50%" alt="...">
                    <hr class="mt-4 mb-3" size="7px" width="50%">
                    <div class="card-body">
                        <h3 class="card-title">Tips Menjaga Kesehatan Gigi</h3>
                    </div>
                    <a class="btn btn-primary mb-4" href="page4.php" role="button">Cari Tahu</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="bg-primary text-center py-4">
        <div class="container px-5">
            <div class="text-white-50">
                <a class="text-footer text-center align-content-center" href="">2021</a>
                <span class="mx-3">&horbar;</span>
                <a href="index.php"><img src="img/roarp.png" width="80px" alt=""></a>
            </div>
        </div>
    </footer>

    <script>
        var x = new Typed('#type', {
            strings: [
                'Selamat Datang Bunda,'
            ],
            typeSpeed: 100,
            delaySpeed: 300,
            backSpeed: 50,
            loop: false,
            showCursor: false
        })
        // typeWriter();
    </script>
    <script src="fade.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>