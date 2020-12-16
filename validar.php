<?php
require 'jwt.php';
$jwt = new JWT();
if(!empty($_GET['jwt'])) {
    $token = $_GET['jwt'];
    $info = $jwt->validate($token);
    if($info) {
        echo "Token validado com sucesso!<br/><br/>";
        echo "Id: ".$info->id_user."<br/>";
        echo "Nome: ".$info->nome."<br/>";
    } else {
        echo "Token Inválido!";
    }
} else {
    echo "Token não enviado!";
}