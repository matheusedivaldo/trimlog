<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/App/Config/Credenciais.php';
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Headers: Content-Type');
use App\Config\Rotas;

$rotas = new Rotas;
