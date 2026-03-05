<?php
// front.php
require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

// Este é o nosso mapa de rotas (Roteamento)
$map = array(
    '/hello' => __DIR__.'/hello.php',
    '/bye'   => __DIR__.'/bye.php',
);

$path = $request->getPathInfo();

if (isset($map[$path])) {
    require $map[$path];
} else {
    $response->setStatusCode(404);
    $response->setContent('Página não encontrada');
}

$response->send();