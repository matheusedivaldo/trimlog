<?php

namespace App\Utils;

class Response {
    static public function NaoEncontrado($mensagem = 'Recurso não encontrado') {
        http_response_code(404);
        self::Json([ 'mensagem' => $mensagem ]);
    }

    static public function Json($dados) {
        header('Content-Type: application/json');
        die(json_encode($dados, JSON_UNESCAPED_UNICODE));
    }
}