<?php
if (!isset($_POST["submit"])) {
    header("Location:index.php");
    die();
}

if (isset($_POST["submit"])){
 $nama=trim($_POST["nama"]);
 $email=trim($_POST["email"]);
 $hargamobil=trim($_POST["hargamobil"]);
 $tenor=trim($_POST["tenor"]);
 $dp=trim($_POST["dp"]);


    $query_nama = "nama=" . urlencode($nama);
    $query_email = "email=" . urlencode($email);
    $query_hargamobil ="hargamobil=" . urldecode($hargamobil);
    $query_tenor ="tenor=" . urldecode($tenor);
    $query_dp ="dp=" . urldecode($dp);
    $isi_form = "&$query_nama&$query_email&$query_hargamobil&$query_tenor&$query_dp";

if (empty($nama)) {
    $pesan = urlencode("Nama harus di isi");
    header("Location:index.php?pesan={$pesan}{$isi_form}");
    die();
}

if (empty($email)) {
    $pesan = urlencode("Email harus di isi");
    header("Location:index.php?pesan={$pesan}{$isi_form}");
    die();
}



if (empty($tenor)) {
    $pesan = urlencode("Tenor harus di isi");
    header("Location:index.php?pesan={$pesan}{$isi_form}");
    die();
}

if (empty($dp)) {
    $pesan = urlencode("DP harus di isi");
    header("Location:index.php?pesan={$pesan}{$isi_form}");
    die();
}



$nama = $_POST["nama"];
$email = $_POST["email"];
$hargamobil = $_POST['hargamobil'];
$tenor = $_POST['tenor'];
$dp = $_POST['dp'];
$hargaangsuran = 0;


if ($tenor == 1) {
    $lamaangsuran = $tenor * 12;
} elseif ($tenor == 2) {
    $lamaangsuran = $tenor * 12;
} elseif ($tenor == 3) {
    $lamaangsuran = $tenor * 12;
} elseif ($tenor == 4) {
    $lamaangsuran = $tenor * 12;
} elseif ($tenor == 5) {
    $lamaangsuran = $tenor * 12;
}

$dpNominal = ($dp / 100) * $hargamobil;
$bunga = (20 / 100) * $hargamobil;
$lamaangsuran = $tenor * 12;
$totalangsuran = ($hargamobil + $bunga ) - $dpNominal;
$hargaangsuran = $totalangsuran / $lamaangsuran;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Proses</title>
</head>
<body>

<h1>Halaman Proses</h1>

<?php
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
?>

</body>
</html>