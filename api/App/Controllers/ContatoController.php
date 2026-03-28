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
            if (!isset($params['assunto'], $params['email'], $params['mensagem'], $params['nome'])) {
                throw new Exception('Os campos não foram passados corretamente');
            }

            $origem = $params['origem'] ?? 'Site Institucional';
            $corBadge = (strpos(strtolower($origem), 'lp') !== false) ? '#FF8000' : '#004AAD';
            $dataEnvio = date('d/m/Y H:i');

            $assuntoEmail = "{$params['nome']} - {$params['assunto']}";

            $mensagem = "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
            <div style=\"background-color: #E6E6E6; padding: 40px 10px; font-family: Arial, sans-serif;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" style=\"background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border: 1px solid #dedede;\">
                    <tr>
                        <td bgcolor=\"#151F20\" style=\"padding: 30px; text-align: center;\">
                            <div style=\"display: inline-block; padding: 4px 12px; background-color: {$corBadge}; color: #ffffff; font-size: 10px; font-weight: 800; border-radius: 20px; text-transform: uppercase; margin-bottom: 10px; letter-spacing: 1px;\">
                                Proveniente de: {$origem}
                            </div>
                            <h1 style=\"color: #E6E6E6; margin: 0; font-size: 22px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;\">
                                Novo Lead <span style=\"color: #D74802;\">TrimLog</span>
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"padding: 40px 30px;\">
                            <p style=\"font-size: 16px; color: #151F20; margin-bottom: 25px;\">
                                Olá, equipe. Você recebeu uma nova mensagem através da plataforma.
                            </p>
                            <table width=\"100%\" style=\"border-collapse: collapse; background-color: #F9F9F9; border-radius: 8px;\">
                                <tr>
                                    <td style=\"padding: 15px; border-bottom: 1px solid #dedede; font-weight: 700; color: #354041; width: 30%;\">Nome:</td>
                                    <td style=\"padding: 15px; border-bottom: 1px solid #dedede; color: #151F20;\">{$params['nome']}</td>
                                </tr>
                                <tr>
                                    <td style=\"padding: 15px; border-bottom: 1px solid #dedede; font-weight: 700; color: #354041;\">E-mail:</td>
                                    <td style=\"padding: 15px; border-bottom: 1px solid #dedede;\">
                                        <a href=\"mailto:{$params['email']}\" style=\"color: #D74802; text-decoration: none; font-weight: 600;\">{$params['email']}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=\"padding: 15px; border-bottom: 1px solid #dedede; font-weight: 700; color: #354041;\">Assunto:</td>
                                    <td style=\"padding: 15px; border-bottom: 1px solid #dedede; color: #151F20;\">{$params['assunto']}</td>
                                </tr>
                            </table>
                            <div style=\"margin-top: 30px;\">
                                <strong style=\"display: block; margin-bottom: 12px; color: #151F20; font-size: 14px; text-transform: uppercase;\">Mensagem enviada:</strong>
                                <div style=\"padding: 20px; background-color: #ffffff; border: 2px dashed #F4A44E; border-radius: 8px; color: #354041; line-height: 1.6; font-size: 15px;\">
                                    " . nl2br($params['mensagem']) . "
                                </div>
                            </div>
                            <div style=\"text-align: center; margin-top: 35px;\">
                                <a href=\"mailto:{$params['email']}\" style=\"background-color: #D74802; color: #ffffff; padding: 15px 30px; text-decoration: none; border-radius: 6px; font-weight: 600; display: inline-block;\">
                                    RESPONDER AGORA
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"padding: 25px; background-color: #151F20; text-align: center;\">
                            <p style=\"margin: 0; font-size: 12px; color: #dedede;\">
                                Notificação automática enviada pelo sistema de leads TrimLog.<br>
                                <span style=\"color: #FF8000;\">Gerado em {$dataEnvio}</span>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            ";

            $alternativo = "Origem: {$origem}" . PHP_EOL . "Nome: {$params['nome']}" . PHP_EOL . "E-mail: {$params['email']}" . PHP_EOL . "Mensagem: " . strip_tags($params['mensagem']);

            Email::enviar('contato@trimlog.com.br', $assuntoEmail, $mensagem, $alternativo);
        } catch (Exception $e) {
            $erro = $e->getMessage();
        }

        Response::Json([
            'mensagem' => $erro ?? 'E-mail enviado, aguarde pela resposta em seu e-mail',
            'sucesso' => empty($erro)
        ]);
    }
}
