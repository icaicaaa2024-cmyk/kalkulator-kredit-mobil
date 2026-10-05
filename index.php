<?php
if (isset($_GET["pesan"])) {
    $pesan = "<p>{$_GET["pesan"]} <p>";
} 
else {
    $pesan = "";
}

if (isset($_GET["nama"])) {
    $nilai_nama = $_GET["nama"];
} else {
    $nilai_nama = "";
}

if (isset($_GET["email"])) {
    $nilai_email = $_GET["email"];
} else {
    $nilai_email = "";
}

if (isset($_GET["hargmobil"])) {
    $nilai_hargamobil = $_GET["hargamobil"];
} else {
    $nilai_hargamobil = "";
}

if (isset($_GET["tenor"])) {
    $nilai_tenor = $_GET["tenor"];
} else {
    $nilai_tenor = "";
}

if (isset($_GET["lamaangsuran"])) {
    $nilai_lamaangsuran = $_GET["lamaangsuran"];
} else {
    $nilai_lamaangsuran = "";
}

if (isset($_GET["dp"])) {
    $nilai_dp = $_GET["dp"];
} else {
    $nilai_dp = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredit Mobil BMW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <img src="assets/logo (3).png" class="img-fluid" style="max-height: 50px;" alt="logo">
        <a class="navbar-brand me-auto" href="#"> <b>BMW</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Layanan</h5>
                <button type="button" class="btn-close btn-close-white"
                    data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Perusahaan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown"> Pilihan
                        </a>

                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li>
                                <a class="dropdown-item" href="#kalkulator">Pilihan DP</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#kalkulator">Pilihan Tenor</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#kontak"> Kontak </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!-- Carousel -->
<div id="beranda" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#beranda"data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#beranda"data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#beranda"data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/asli.jpg" class="d-block w-100" alt="mobil 1">
            <div class="carousel-caption d-none d-md-block">
                <h2>Kredit Mobil Terpercaya</h2>
                <p>Wujudkan mobil impian Anda dengan mudah.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="assets/asli 2.jpg" class="d-block w-100" alt="mobil 2">
            <div class="carousel-caption d-none d-md-block">
                <h2>Mobil Impian Anda Ada di Sini</h2>
                <p>Pilihan pembiayaan dengan tenor yang fleksibel.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="assets/asli 3.jpg" class="d-block w-100" alt="mobil 3">
            <div class="carousel-caption d-none d-md-block">
                <h2>Temukan Mobil yang Anda Inginkan</h2>
                <p>Hitung angsuran mobil Anda sekarang.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button"data-bs-target="#beranda" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button"data-bs-target="#beranda" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Tentang -->
<div class="container my-4">
    <div class="row align-items-center mb-3 bg-white" id="tentang">
        <div class="col-md-6 mb-3 mb-md-0">
            <div class="card h-100 border-0 bg-white shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-black">  Tentang Perusahaan</h3>
                    <p class="card-text">Kami adalah penyedia layanan pembiayaan mobil yang siap membantu Anda mewujudkan kendaraan impian.Kami menawarkan bunga yang kompetitif dan pilihantenor fleksibel untuk kenyamanan transaksi Anda.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="assets/2.jpg"class="img-fluid rounded shadow-sm"alt="Tentang Perusahaan">
        </div>
    </div>

    <!-- Kalkulator -->
    <div id="kalkulator" class="mt-5">
        <h2>Kredit Angsuran Mobil</h2>
        <?php echo $pesan; ?>
        <form action="proses.php" method="POST">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $nilai_nama; ?>" >
            <br>
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $nilai_email; ?>" >
            <br>
            <label>Harga mobil:</label>
            <input type="text"name="hargamobil"class="form-control" value="<?php echo $nilai_hargamobil; ?>" >
            <br>
            <label>Tenor:</label>
            <br>
            <input type="radio" name="tenor" value="1" <?php if ($nilai_tenor == 1) { echo "checked" ; } ?>> <label>1 Tahun</label>
            <input type="radio" name="tenor" value="2" <?php if ($nilai_tenor == 2) { echo "checked" ; } ?>> <label>2 Tahun</label>
            <input type="radio" name="tenor" value="3" <?php if ($nilai_tenor == 3) { echo "checked" ; } ?>> <label>3 Tahun</label>
            <input type="radio" name="tenor" value="4" <?php if ($nilai_tenor == 4) { echo "checked" ; } ?>> <label>4 Tahun</label>
            <input type="radio" name="tenor" value="5" <?php if ($nilai_tenor == 5) { echo "checked" ; } ?>> <label>5 Tahun</label>
            <br><br>

            <label>DP:</label>
            <select name="dp" class="form-select">
                <option value="10" <?php if ($nilai_dp == 10) {echo "selected" ; }?>>10 %</option>
                <option value="20"<?php if ($nilai_dp == 20) {echo "selected" ; }?>>20 %</option>
                <option value="30"<?php if ($nilai_dp ==30) {echo "selected" ; }?>>30 %</option>
                <option value="40"<?php if ($nilai_dp == 40) {echo "selected" ; }?>>40 %</option>
                <option value="50"<?php if ($nilai_dp == 50) {echo "selected" ; }?>>50 %</option>
            </select>
            <br>
            <input name="submit"  type="submit"  value="Hitung"  class="btn btn-dark">
        </form>
    </div>
</div>

<?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $hargamobil = $_POST['hargamobil'];
    $tenor = $_POST['tenor'];
    $dp = $_POST['dp'];
    $hargaangsuran = 0;


    
    $lamaangsuran=0;
    if ($tenor == 1) {
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 2){
         $lamaangsuran = $tenor * 12;
    }elseif($tenor == 3){
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 4){
         $lamaangsuran = $tenor * 12;
    }elseif($tenor == 5){
         $lamaangsuran = $tenor * 12;
    }
    
    $bunga = (20 / 100) * $hargaMobil;
    $hargaangsuran = (($hargaMobil + $bunga) - $dpNominal) / $lamaangsuran;

    echo "Nama = " . $nama . "<br>";
    echo "Email = " . $email . "<br>";
    echo "Harga Mobil = " . $hargamobil . "<br>";
    echo "Tenor = " . $tenor . " Tahun<br>";
    echo "Lama Angsuran = " . $lamaangsuran . " Bulan<br>";
    echo "DP = " . $dp . "%<br>";
    echo "Harga DP Mobil= Rp" . $dpNominal . "<br>";
    echo "Bunga = Rp" . $bunga . "<br>";
    echo "Lama Angsuran= " . $lamaangsuran. "Bulan<br>";
    echo "Angsuran Per Bulan = Rp" . $hargaangsuran . "<br>";
        }else{
            echo "Silahkan isi datanya" ;
        }
?>


<!-- Footer -->
<footer id="kontak"
    class="bg-dark bg-gradient text-white text-center py-4 mt-3">
    <div class="container">
        <h3>Kredit Mobil</h3>
        <p class="mb-1">Solusi pembiayaan mobil terpercaya.</p>
        <p class="mb-0"> Email : info@bmw.com</p>
        <p class="mb-0"> Hubungi : +62-8745-92700-3846 </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
