<?php

function handleRequest(string $path, string|null $version = null) : array
{

    if ($path === '/') {
        return [
            'status' => 200,
            'body' => "Fala fi!",
            'contentType' => 'text/plain'
        ];
    }

    if ($path === '/saude') {
        return [
            'status' => 200,
            'body' => json_encode([
                'status' => 'ok',
                'versao' => $version
            ]),
            'contentType' => 'application/json'
        ];
    }

    return [
        'status' => 404,
        'body' => 'Página não encontrada',
        'contentType' => 'text/plain'
    ];
}