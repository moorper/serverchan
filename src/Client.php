<?php

namespace Moorper\ServerChan;

use GuzzleHttp\Client as HttpClient;

class Client
{
    private $baseUrl = 'https://sc.ftqq.com/';
    private $url = '';

    public function __construct(string $sckey)
    {
        if (empty($sckey)) {
            throw new \Exception('SCKEY 不能为空');
        }
        $this->url = $this->baseUrl.$sckey.'.send';
    }

    public function send(string $text, string $desp = null)
    {
        if (empty($text)) {
            throw new \Exception('text 不能为空');
        }
        $options = [
            'query' => [
                'text' => $text,
                'dest' => is_null($desp) ? '' : $desp,
            ],
        ];
        $client = new HttpClient();
        $response = $client->get($this->url, $options);
        $body = $response->getBody();

        return json_decode($body, true);
    }
}
