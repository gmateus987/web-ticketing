<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Router.php';

class RoutesTest extends TestCase
{
    public function testHomeRoute()
    {
        $response = handleRequest('/');   

        $this->assertEquals(200, $response['status']);
        $this->assertEquals('text/plain', $response['contentType']);

    }

    public function testSaudeRoute()
    {
        $response = handleRequest('/saude', getenv('APP_VERSION'));
        $body = json_encode([
            'status' => 'ok',
            'versao' => 'dev'
        ]);

        $this->assertEquals(200, $response['status']);
        $this->assertEquals($body, $response['body']);
        $this->assertEquals('application/json', $response['contentType']);
    }

    public function testOtherRoute()
    {
        $response = handleRequest('/teste');   

        $this->assertEquals(404, $response['status']);
        $this->assertEquals('text/plain', $response['contentType']);
    }
}
