<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Travel</title>
	<!-- Bootstrap & Font Awesome -->
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php">PergiTravelling</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
			        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link" href="paket.php">Package</a>
					<a class="nav-item nav-link" href="mice.php">Mice</a>
					<a class="nav-item nav-link" href="about.php">About Us</a>
					<a class="nav-item nav-link" href="galery.php">Our Galery</a>
					<?php if (!isset($_SESSION['id_user']) || !isset($_SESSION['nama_lengkap']) || !isset($_SESSION['username'])): ?>
						<a class="btn btn-primary tombol" href="login.php">Login</a>
					<?php else: ?>
						<a class="nav-item nav-link" href="riwayat.php">Riwayat</a>
						<a class="nav-item nav-link" href="profil.php"><?php echo $_SESSION['username']; ?></a>
						<a class="btn btn-primary tombol" href="logout.php">Logout</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</nav>

	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="info">
					<h1>AMAN</h1>
				</div>
			</div>
			<div class="carousel-item">
				<div class="info">
					<h1>NYAMAN</h1>
				</div>
			</div>
			<div class="carousel-item">
				<div class="info">
					<h1>BAHAGIA</h1>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- Gallery -->
	<section class="gallery-block cards-gallery">
		<div class="container">
			<div class="heading">
				<h2>Experience Our Destination</h2>
			</div>
			<div class="row">
				<?php
				$destinations = [
					["img/toba2.jpg", "sumatera.php", "Sumatera"],
					["img/bromo.jpg", "jawa.php", "Jawa"],
					["img/raja.jpg", "papua.php", "Papua"],
					["img/sulawesi.jpg", "sulawesi.php", "Sulawesi"]
				];
				foreach ($destinations as $dest): ?>
					<div class="col-md-6 col-lg-3">
						<div class="card border-0 transform-on-hover">
							<a class="lightbox" href="<?= $dest[1] ?>">
								<img src="<?= $dest[0] ?>" alt="Card Image" class="card-img-top" />
							</a>
							<div class="card-body">
								<h6><a href="<?= $dest[1] ?>"><?= $dest[2] ?></a></h6>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Working Space -->
	<div class="container">
		<div class="row workingspace">
			<div class="col-lg-6">
				<img src="img/bajo.jpg" alt="workingspace" class="img-fluid"/>
			</div>
			<div class="col-lg-6">
				<h3>Berlibur dengan hemat dan hati tenang bersama PergiTravelling</h3>
				<p>Melayani Dengan penuh hati dan senyuman</p>
				<a href="galery.php" class="btn btn-primary tombol">Gallery</a>
			</div>
		</div>
	</div>

	<!-- Services -->
	<div class="services">
		<h1>Services Lainnya</h1>
		<div class="container">
			<h6>Pada prinsipnya, karena apa yang kami tawarkan merupakan sebuah perjalanan serta pengalaman tak terlupakan...</h6>
		</div>
		<div class="cen">
			<?php
			$services = [
				["img/insurance.png", "Asuransi", "Lindungi perjalanan anda dari kejadian-kejadian tak diinginkan..."],
				["img/car.png", "Transportasi", "Kami memiliki layanan penyewaan mobil di setiap destinasi anda..."],
				["img/hotel.png", "Hotel", "Kami juga sudah menyediakan hotel - hotel terbaik untuk anda beristirahat"],
				["img/ticket.png", "Ticket & Attraction", "Tidak perlu lagi membayangkan antrean panjang..."]
			];
			foreach ($services as $srv): ?>
				<div class="service">
					<img src="<?= $srv[0] ?>" alt="service" class="img"/>
					<h2><?= $srv[1] ?></h2>
					<p><?= $srv[2] ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<!-- Optional JS dependencies -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>