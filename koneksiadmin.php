<?php
$con = mysqli_connect($idtanaman, $nmtanaman, $metodetanaman, $jumlahtanaman, $ukurantanaman) or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idtanaman = $_POST['idtanaman'];
    $nmtanaman = $_POST['nmtanaman'];
    $metodetanaman = $_POST['metodetanaman'];
    $jumlahtanaman = $_POST['jumlahtanaman'];
    $ukurantanaman = $_POST['ukurantanaman'];
    $koneksi->query("INSERT INTO pasien (idtanaman, nmtanaman, metodetanaman, jumlahtanaman, ukurantanaman) values ('$idtanaman',
    '$nmtanaman','$metodetanaman','$jumlahtanaman','$ukurantanaman')");
    header('location:index.php');
}

if (isset($_GET['idtanaman'])) {
    $idtanaman = $_GET['idtanaman'];
    $koneksi->query("DELETE FROM pasien where idtanaman = '$idtanaman'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idtanaman = $_POST['idtanaman'];
    $nmtanaman = $_POST['nmtanaman'];
    $metodetanaman = $_POST['metodetanaman'];
    $jumlahtanaman = $_POST['jumlahtanaman'];
    $ukurantanaman = $_POST['ukurantanaman'];

    $koneksi->query("UPDATE pasien SET idtanaman='$idtanaman', nmtanaman='$nmtanaman', metodetanaman='$metodetanaman', jumlahtanaman='$jumlahtanaman',ukurantanaman='$ukurantanaman'");

    header("location:index.php");
}
?>