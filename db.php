<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "chat";

$conexao = new mysqli($servidor, $usuario, $password, $db);

function formatarData($data)
{
    return date('g:i a', strtotime($data));
}
