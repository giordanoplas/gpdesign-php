<?php require 'views/header.php' ?>

<main class="container">
	<div class="row">
		<div class="col-12 mb-3">
			<div class="card-columns text-center">
				<div class="card bg-light">
					<div class="card-body">
						<h1 class="text-success mb-3"><strong>GP Libros</strong></h1>
						<a href="https://gpdesign.site/pages/libros/"><img src="<?php echo $gp_config['carpeta_portafolio'] ?>libros.jpg" class="card-img-top img-fluid"></a>
					</div>
				</div>
				<div class="card bg-light">
					<div class="card-body">
						<h1 class="text-primary mb-3"><strong>GP Cine</strong></h1>
						<a href="https://gpdesign.site/pages/cine/"><img src="<?php echo $gp_config['carpeta_portafolio'] ?>cine.jpg" class="card-img-top img-fluid"></a>
					</div>	
				</div>
				<div class="card bg-light">				
					<div class="card-body">
						<h1 class="text-danger mb-3"><strong>GP Tienda</strong></h1>
						<img src="<?php echo $gp_config['carpeta_portafolio'] ?>noimagetext.jpg" class="card-img-top img-fluid">
					</div>
				</div>
				<div class="card bg-light">
					<div class="card-body">
						<h1 class="text-danger mb-3"><strong>GP Blog</strong></h1>
						<img src="<?php echo $gp_config['carpeta_portafolio'] ?>noimagetext.jpg" class="card-img-top img-fluid">
					</div>					
				</div>
				<div class="card bg-light">
					<div class="card-body">
						<h1 class="text-danger mb-3"><strong>GP APK's</strong></h1>
						<img src="<?php echo $gp_config['carpeta_portafolio'] ?>noimagetext.jpg" class="card-img-top img-fluid">
					</div>					
				</div>
			</div>
		</div>
		<div class="col-auto mb-3">
			
		</div>
		<div class="col-auto mb-3">
			
		</div>
		<div class="col-auto">
			<div class="card bg-light">
				
			</div>
		</div>
	</div>
</main>

<?php require 'views/footer.php' ?>