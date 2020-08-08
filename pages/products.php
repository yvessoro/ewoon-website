<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'include/metas.php'; ?>
</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<?php include 'inlude/top-header.php'; ?>
		<!-- /top Header -->

		<!-- header -->
		<?php include 'include/header.php'; ?>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<?php include 'include/navigation.php'; ?>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Pièces</a></li>
				<li class="active">Pneus et chaines</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filtre par marques</h3>
						<ul class="list-links">
							<li><a href="#">Peugeot</a></li>
							<li><a href="#">Honda</a></li>
							<li><a href="#">KIA</a></li>
						</ul>
					</div>
					<!-- /aside widget -->
					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filtre par fabricants</h3>
						<ul class="list-links">
							<li><a href="#">Honda</a></li>
							<li><a href="#">Clean car</a></li>
							<li><a href="#">Bosch</a></li>
						</ul>
					</div>
					<!-- /aside widget -->
				</div>
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="sort-filter">
								<span class="text-uppercase">Ordonner par:</span>
								<select class="input">
										<option value="0">Prix</option>
										<option value="0">Notation</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
					</div>
					<!-- /store top filter -->

					<!-- STORE -->
					<?php include 'include/products.php'; ?>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<?php include 'include/footer.php'; ?>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<?php include 'include/js.php'; ?> 

</body>

</html>
