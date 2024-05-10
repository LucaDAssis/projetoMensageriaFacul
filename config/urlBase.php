<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . 'http://localhost:63342/projetoMensageriaFacul/index.php';

?>
