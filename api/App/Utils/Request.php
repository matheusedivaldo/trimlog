<?php

namespace App\Utils;

class Request {
    static public function jsonParams() {
        return json_decode(file_get_contents('php://input'), true);
    }

    static public function Json($dados) {
        header('Content-Type: application/json');
        die(json_encode($dados, JSON_UNESCAPED_UNICODE));
    }
}