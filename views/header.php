<?php $cur_file = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/ico" href="<?php echo RUTA ?>img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ba3661d33a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo RUTA ?>css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?php echo RUTA ?>js/particles.js"></script>
    <script src="<?php echo RUTA ?>js/particulas.js"></script>
    <script src="<?php echo RUTA ?>js/header-dinamico.js"></script>    
    <title>GP Design</title>
</head>
<body>
    <div id="particles-js"></div>
    <header>
        <div class="container-fluid">
            <div class="row bg-light d-flex justify-content-between">
                <div class="col-2 mx-2 my-2 d-flex">
                    <a href="<?php echo RUTA ?>" class="logo"><img src="<?php echo $gp_config['carpeta_logotipos']; ?>logo.png" width="120px"></a>
                    <a href="<?php echo RUTA ?>" class="logo-scroll d-none"><img src="<?php echo $gp_config['carpeta_logotipos']; ?>logoh.png"></a>
                </div>
                <div class="menu_bar d-md-none d-flex justify-content-end align-items-center mx-5">
                    <a href="#" id="btn-menu"><i class="fas fa-bars"></i></a>
                </div>
                <nav class="col menu d-none d-md-flex justify-content-end align-items-center">                    
                    <?php if($cur_file == 'index.php'): ?>
                        <a href="<?php echo RUTA ?>" class="selected">
                            <i class="fas fa-home"></i> 
                            <p class="d-inline p-menu">Inicio</p>                            
                        </a>
                        <a href="<?php echo RUTA ?>" class="selected d-none link-scroll">
                            <i class="fas fa-home"></i>                           
                        </a>
                    <?php else: ?>
                        <a href="<?php echo RUTA ?>">
                            <i class="fas fa-home"></i> 
                            <p class="d-inline p-menu">Inicio</p>
                        </a>
                        <a href="<?php echo RUTA ?>" class="d-none link-scroll">
                            <i class="fas fa-home"></i>                           
                        </a>
                    <?php endif; ?>

                    <?php if($cur_file == 'blog.php'): ?>
                        <a href="<?php echo RUTA ?>blog.php" class="selected">
                            <i class="fas fa-blog"></i> 
                            <p class="d-inline">Blog</p>
                        </a>
                        <a href="<?php echo RUTA ?>blog.php" class="selected d-none link-scroll">
                            <i class="fas fa-blog"></i>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo RUTA ?>blog.php">
                            <i class="fas fa-blog"></i> 
                            <p class="d-inline">Blog</p>
                        </a>
                        <a href="<?php echo RUTA ?>blog.php" class="d-none link-scroll">
                            <i class="fas fa-blog"></i>
                        </a>
                    <?php endif; ?>

                    <?php if($cur_file == 'portafolio.php'): ?>
                        <a href="<?php echo RUTA ?>portafolio.php" class="selected">
                            <i class="fas fa-suitcase"></i> 
                            <p class="d-inline">Portafolio</p>
                        </a>
                        <a href="<?php echo RUTA ?>portafolio.php" class="selected d-none link-scroll">
                            <i class="fas fa-suitcase"></i>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo RUTA ?>portafolio.php">
                            <i class="fas fa-suitcase"></i> 
                            <p class="d-inline">Portafolio</p>
                        </a>
                        <a href="<?php echo RUTA ?>portafolio.php" class="d-none link-scroll">
                            <i class="fas fa-suitcase"></i> 
                        </a>
                    <?php endif; ?>
                    
                    <?php if($cur_file == 'contacto.php'): ?>
                        <a href="<?php echo RUTA ?>contacto.php" class="selected">
                            <i class="fas fa-id-card-alt"></i> 
                            <p class="d-inline">Contacto</p>
                        </a>
                        <a href="<?php echo RUTA ?>contacto.php" class="selected d-none link-scroll">
                            <i class="fas fa-id-card-alt"></i>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo RUTA ?>contacto.php">
                            <i class="fas fa-id-card-alt"></i> 
                            <p class="d-inline">Contacto</p>
                        </a>
                        <a href="<?php echo RUTA ?>contacto.php" class="d-none link-scroll">
                            <i class="fas fa-id-card-alt"></i>
                        </a>
                    <?php endif; ?>
                </nav>
            </div>            
        </div>

        <!-- Barra lateral izquierda -->
        <div class="col-md-3 barra-lateral-izquierda" id="barra-lateral-izquierda">
            <div class="d-flex justify-content-center my-3">
                <img src="<?php echo $gp_config['carpeta_logotipos']; ?>logo.png" width="100px">
            </div>            
            <nav>
                <a href="<?php echo RUTA ?>"><i class="fas fa-home"></i> Inicio</a>
                <a href="<?php echo RUTA ?>blog.php"><i class="fas fa-blog"></i> Blog</a>
                <a href="<?php echo RUTA ?>portafolio.php"><i class="fas fa-suitcase"></i> Portafolio</a>
                <a href="<?php echo RUTA ?>contacto.php"><i class="fas fa-id-card-alt"></i> Contacto</a>
            </nav>
        </div>

        <a href="#" class="fondo-enlace d-md-none" id="fondo-enlace"></a>
        
        <script src="<?php echo RUTA ?>js/menu.js"></script>
    </header>