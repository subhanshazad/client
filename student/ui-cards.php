<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-cards.php" />

	<title>Cards | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<!-- Topbar Start -->
		<?php
		include 'assets/leftbar.php';
		?>
		<!-- Topbar End -->

		<div class="main">
		<!-- Topbar Start -->
		<?php
			include 'assets/topbar.php';
			?>
			<!-- Topbar End -->

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Cards</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.php">
      Get more card examples
  </a>
					</div>
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="card">
								<img class="card-img-top" src="img/photos/unsplash-1.jpg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with image and links</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link">Card link</a>
									<a href="#" class="card-link">Another link</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<img class="card-img-top" src="img/photos/unsplash-2.jpg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with image and button</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with links</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link">Card link</a>
									<a href="#" class="card-link">Another link</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with button</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

	<!-- footer -->
	<?php
			include 'assets/footer.php';
			?>
			<!-- footer end -->
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>