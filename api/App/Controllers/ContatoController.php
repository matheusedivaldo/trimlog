<?php

namespace App\Controllers;

use App\Utils\Email;
use App\Utils\Helper;
use App\Utils\Request;
use App\Utils\Response;
use Exception;

class ContatoController
{
    public function enviarEmail()
    {
        $params = Request::jsonParams();

        try {
            if (!isset($params['assunto'], $params['email'], $params['mensagem'], $params['nome']))
                throw new Exception('Os campos não foram passados corretamente');

            $assunto = "{$params['nome']} - {$params['assunto']}";
            $mensagem = "

                <h1>{$params['assunto']}</h1>

                <dl>
                    <dt style=\"font-weight: bold\">Mensagem:</dt>
                    <dd>
                        {$params['mensagem']}
                    </dd>
                    <address>
                        <dt style=\"font-weight: bold\">Nome:</dt>
                        <dd>{$params['nome']}</dd>

                        <dt style=\"font-weight: bold\">Contato:</dt>
                        <dd>
                            <a href=\"mailto:{$params['email']}\"></a>
                            {$params['email']}
                        </dd>
                    </address>
                </dl>


            ";
            $alternativo = "Assunto: {$params['assunto']}</h1>" . PHP_EOL . "Nome: {$params['nome']}" . PHP_EOL . "Contato: {$params['email']}" . PHP_EOL . "Mensagem: {$params['mensagem']}";

            $response = Email::enviar('contato@trimlog.com.br', $assunto, $mensagem, $alternativo);
        } catch (Exception $e) {
            $erro = $e->getMessage();
        }

        Response::Json([
            'mensagem' => $erro ?? 'E-mail enviado, aguarde pela resposta em seu e-mail',
            'sucesso' => empty($erro)
        ]);
    }
}
