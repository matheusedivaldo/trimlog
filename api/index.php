<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/App/Config/Credenciais.php';

header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, OPTIONS');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

use App\Config\Rotas;

$rotas = new Rotas;
