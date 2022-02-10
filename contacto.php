<?php

require 'admin/config.php';
require 'funciones.php';

if(isset($_GET['error']) && !empty($_GET['error'])){
    $errores = limpiarDatos($_GET['error']);
} else {
    $errores = '';
}

if(isset($_GET['success']) && !empty($_GET['success'])){
    $success = limpiarDatos($_GET['success']);
} else {
    $success = '';
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = limpiarDatos($_POST['nombre']);
    $correo = limpiarCorreo($_POST['correo']);
    $telefono = limpiarDatos($_POST['telefono']);
    $mensaje = limpiarDatos($_POST['mensaje']);

	$to = $gp_admin['correos'];
	$subject = 'Mensaje desde gpdesign.site --- Sección Contacto';
	$headers = 'From: ' . $correo . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$msn = '<html><body>';
	$msn .= '<p><b>Nombre:</b> ' . $nombre . '</p>';
	$msn .= '<p><b>Correo:</b> ' . $correo . '</p>';
	$msn .= '<p><b>Teléfono:</b> ' . $telefono . '</p>';
    $msn .= '<p><b>Mensaje:</b> ' . $mensaje . '</p>';
    $msn .= '</body></html>';
    $sent = mail($to, $subject, $msn, $headers);
}


require 'views/contacto.view.php';