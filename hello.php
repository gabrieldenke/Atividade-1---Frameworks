<?php 
// framework/hello.php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Cria um objeto Request com base nas globais do PHP ($_GET, $_POST, etc)
$request = Request::createFromGlobals();

// Tenta pegar o parâmetro 'name' da URL. Se não existir, usa 'World' por padrão
$input = $request->get('name', 'World');

// Cria a resposta formatando o texto e protegendo contra ataques XSS (htmlspecialchars)
$response = new Response(
    sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'))
);

// Envia os cabeçalhos e o conteúdo de volta para o navegador
$response->send();