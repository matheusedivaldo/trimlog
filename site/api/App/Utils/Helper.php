<?php
namespace App\Utils;

class Helper
{
    public static function debug($dados) {
        echo '<pre>';
        var_dump($dados);
        echo '</pre>';
    }
}
