<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/App/Config/Credenciais.php';

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

$allowed_origins = [
    'http://localhost:8080',
    'http://localhost:5173',
    'https://trimlog.com.br',
    'https://lp.trimlog.com.br'
];

if (in_array($origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: $origin");
}

header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

use App\Config\Rotas;

$rotas = new Rotas;
