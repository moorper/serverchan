<?php

namespace Moorper\ServerChan\Tests;

require __DIR__.'/../vendor/autoload.php';

use Moorper\ServerChan\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testSend()
    {
        $client = new Client('****');
        $response = $client->send('text', 'desp');
        $this->assertArrayHasKey('errmsg');
    }
}
