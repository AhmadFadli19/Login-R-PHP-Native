<?php
//inisialisasi session
session_start();

//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Alat Tanaman</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM tb_alat WHERE idtanaman = '$_GET[edit]'");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="editpasien.php" method="POST">
                    <div class="form-group">
                        <label for="idtanaman">ID</label>
                        <input type="text" class="form-control mb-3" name="idtanaman" value="<?= $row['idtanaman'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmtanaman">Nama</label>
                        <input type="text" class="form-control mb-3" name="nmtanaman" value="<?= $row['nmtanaman'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="motodetanaman">Metode Tanam</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="metodetanaman" value="Hidroponik" <?php if ($row['metodetanaman'] === "Hindroponik") {echo "checked";} ?>> Hidroponik
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="metodotanaman" value="non-Hidroponik" <?php if ($row['metodetanaman'] === "nonHidroponik") {echo "checked";} ?>> non Hidroponik
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlahtanaman">Jumlah Tanaman</label>
                        <input type="text" class="form-control mb-3" name="nmtanaman" value="<?= $row['jumlahtanaman'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="ukurantanaman">Ukuran</label>
                        <input type="text" class="form-control mb-3" name="ukurantanaman" value="<?= $row['ukurantanaman'] ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>