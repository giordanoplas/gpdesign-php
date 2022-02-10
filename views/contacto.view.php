<?php require 'views/header.php' ?>
<script src="https://www.google.com/recaptcha/api.js?render=6LdxrMkZAAAAAO7IGB3oHjeO0Ex5SlIsf-zFOvth"></script>

<main class="container">
	<div class="row bg-light py-4">
		<div class="col-12 d-flex justify-content-center">				
			<form id="contacto" class="formulario w-100" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
				<h1 class="text-center">Contáctenos</h1>
				<label for="nombre" class="formulario__label">Nombre y Apellido</label>
				<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre Apellido">

				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
				
				<label for="telefono" class="formulario__label">Teléfono</label>
				<input type="number" class="formulario__input" name="telefono" id="telefono" placeholder="8097777777">			

				<label for="mensaje" class="formulario__label">Mensaje</label>
				<textarea name="mensaje" id="mensaje" placeholder="Mensaje:"></textarea>						
				
				<input type="hidden" name="recaptcha_response" id="recaptchaResponse">				
				<div id="recaptcha" class="g-recaptcha" data-sitekey="6LczGsoZAAAAAHuVQEB2aJaY2NZ0WCnnX4YppPQq" data-callback="vcc"></div>
				
				<div class="row d-flex justify-content-center">
					<div class="col-12 my-2" id="error"></div>
					<div class="col-12 my-2" id="success"></div>
				</div>					
				
				<div class="enviar">				
					<button id="btnEnviar" class="formulario__btn">Enviar</button>
				</div>
			</form>	
		</div>			
	</div>

	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="<?php echo RUTA ?>js/reCaptcha.js"></script>
</main>

<?php require 'views/footer.php' ?>

