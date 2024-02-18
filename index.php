
<?php
//inisialisasi session
session_start();

//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: tabletanam.php');
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

<nav class="navbar navbar-expand-lg p-3 bg-primary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">PT. GreenHouse SinarMas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"style="margin-left: 50px;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" aria-disabled="true">Hubungi</a>
        </li>
        
      </ul>

    </div>
    <button type="submit" class="btn btn-outline-warning"><a href="login.php" style="color:white; text-decoration:none;">Login</a></button>
    </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="height: 100vh;">
    <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/1.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>project bandung</h5>
                  <p>Green House Sayur</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/2.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>project sentul</h5>
                  <p>Green House Sayur tanpa Hidropinik</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/3.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Project pelembang</h5>
                  <p>Green House bawang</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>  
      </div>
    </div>
          

<div class="container" style="padding: left 15rem; margin:350px;">
<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-top: 150px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
        
        
<div class="row" style="position:center;">
    
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="images/gambar1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Green House</h5>
    <p class="card-text">Greenhouse Latar Belakang Sektor pertanian menghadapi tantangan yang berat dalam menyediakan pangan yang memadai dan kebutuhan lain untuk populasi dunia yang berkembang, yang diproyeksikan menjadi</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="images/gambar2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">meracik nutrisi</h5>
    <p class="card-text">Meracik Nutrisi AB Mix Nutrisi Hidroponik yang lebih di kenal dengan dengan Nutrisi AB Mix merupakan salah satu komponen utama dalam budidaya hidroponik. Disini kami</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    
    
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="images/gambar3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Teknik dasar pembuatan NFT</h5>
    <p class="card-text">STeknis Dasar Sistem NFT NFT merupakan kepanjangan dari Nutrient Film Technique , konsep dasar sistem ini adalah mengalirkan nutrisi hidroponik ke akar tanaman secara tipis (film). Tujuan</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    
</div>
        
        
        
    </div>
    <div class="carousel-item">
        
        
        
<div class="row">
    
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="images/gambar4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HindroPonik</h5>
    <p class="card-text">Hidroponik Hidroponik adalah budidaya menanam dengan memanfaatkan air tanpa menggunakan tanah dengan menekankan pada pemenuhan kebutuhan nutrisi bagi tanaman. Kebutuhan air pada hidroponik lebih sedikit</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="images/alat1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">wadah tanaman</h5>
    <p class="card-text">Alat tersebut adalah alat untuk membuat tenamanan selalu di alirin air. jadi penggunaakan alat ini untuk pembuatan sistem hidropnik yang ramah lingkungan di karenakan tidak memerlukan perawatan yang ekstrim</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    
    
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="images/alat2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">jalur air</h5>
    <p class="card-text">Alat tersebut adalah alat untuk membuat tenamanan selalu di alirin air. jadi penggunaakan alat ini untuk pembuatan sistem hidropnik yang ramah lingkungan di karenakan tidak memerlukan perawatan yang ekstrim</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    
</div>
    
        
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="margin-left:-250px;">
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

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


 
  
    <div class="container" style="margin-left: -70px;">
	<div class="row">
		<div class="col-md-10">
			<div class="lc-block">
				<div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">

					<div class="carousel-inner px-5">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-6 col-lg-2 align-self-center">
									<img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
								</div>
							</div>

						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-6 col-lg-2 align-self-center">
									<img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
								</div>
								<div class="col-6 col-lg-2  align-self-center">
									<img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
								</div>
							</div>

						</div>

					</div>

					<div class="w-100 px-3 text-center mt-4">
						<a class="carousel-control-prev position-relative d-inline me-4" href="#carouselLogos" data-bs-slide="prev">
							<svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
							</svg>
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next position-relative d-inline" href="#carouselLogos" data-bs-slide="next">
							<svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
							</svg>
							<span class="visually-hidden">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="blockcode" style="margin-left: -300px;">

  <footer class="page-footer shadow" style="margin-bottom: -300px;">
    <div class="d-flex flex-column mx-auto py-5" style="width: 80%">
      <div class="d-flex flex-wrap justify-content-between">
        <div>
          <a href="/" class="d-flex align-items-center p-0 text-dark">
            <img alt="" src="/homepage/images/logo.png" width="30px" />
            <span class="ms-3 h5 font-weight-bold">PT. GreenHouse SinarMas</span>
          </a>
          <p class="my-3" style="width: 250px">
           Sinar Mas Land Plaza Sinar Mas Land Plaza Jl. Grand Boulevard BSD City, Sampora, Kec. Cisauk, Tangerang, Banten 15345
          </p>
          <span class="mt-4">
            <button class="btn btn-dark btn-flat p-2">
              <i class="fa fa-facebook"></i>
            </button>
            <button class="btn btn-dark btn-flat p-2">
              <i class="fa fa-twitter"></i>
            </button>
            <button class="btn btn-dark btn-flat p-2">
              <i class="fa fa-instagram"></i>
            </button>
          </span>
        </div>
        <div>
          <p class="h5 mb-4" style="font-weight: 600">Devwares</p>
          <ul class="p-0" style="list-style: none; cursor: pointer">
            <li class="my-2">
              <a class="text-dark" href="/">Home</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="/">Development</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="/">Corporate</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="/">Smart Move</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="h5 mb-4" style="font-weight: 600">Help</p>
          <ul class="p-0" style="list-style: none; cursor: pointer">
            <li class="my-2">
              <a class="text-dark" href="/">Precious</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="/">Career</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="/">Sustainability</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="h5 mb-4" style="font-weight: 600">Help</p>
          <ul class="p-0" style="list-style: none; cursor: pointer">
            <li class="my-2">
              <a class="text-dark" href="/">Investors</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="/">Contact Us</a>
            </li>
            <li class="my-2">
              <a class="text-dark" href="/">Events</a>
            </li>
          </ul>
        </div>
      </div>
      <small class="text-center mt-5">&copy; Devwares, 2023. All rights reserved.</small>
    </div>
  </footer>
</div>

</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>