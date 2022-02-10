<?php

define("EXPRESIONES", [
    'nombre' => '/^[a-zA-ZÀ-ÿ\s]{1,40}$/',
    'correo' => '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
    'correo2' => '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
    'telefono' => '/^\d{7,14}$/',
]);

function conexion($bd_config) {
    $conn = new mysqli($bd_config['host'], $bd_config['usuario'], $bd_config['pass'], $bd_config['basedatos']);
    if($conn->connect_errno) {
        return false;
    } else {
        return $conn;
    }
}

function close_conexion($conexion) {
    $thread = $conexion->thread_id;
    $conexion->kill($thread);
    $conexion->close();
}

function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    
    return $datos;
}

function limpiarId($id) {
    return (int)limpiarDatos($id);
}

function limpiarCorreo($correo) {
    return filter_var($correo, FILTER_SANITIZE_EMAIL);
}

function validarCorreo($dato) {
    return preg_match(EXPRESIONES['correo2'], $dato) ? true : false;
}

function validarTelefono($dato) {
    return preg_match(EXPRESIONES['telefono'], $dato) ? true : false;
}

function validarNombre($dato) {
    return preg_match(EXPRESIONES['nombre'], $dato) ? true : false;
}

function encriptarPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT, [20]);
}

function verificarPassword($password, $passEncriptado) {
    return password_verify($password, $passEncriptado);
}

function parse_results($stmt)
{
    $params = array();
    $data = array();
    $results = array();
    $meta = $stmt->result_metadata();
    
    while($field = $meta->fetch_field())
        $params[] = &$data[$field->name]; // pass by reference
    
    call_user_func_array(array($stmt, 'bind_result'), $params);
    
    while($stmt->fetch())
    {
        foreach($data as $key => $val) 
        {
            $c[$key] = $val;
        }
        $results[] = $c;
    }
    return $results;
}

function enviar_correo($to, $subject, $message, $headers) {
    return mail($to, $subject, $message, $headers) ? true : false;
}