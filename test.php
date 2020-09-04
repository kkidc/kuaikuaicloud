<?php

require_once './vendor/autoload.php';

$client = new \kuaikuaicloud\oss\Client(['version' => 'v1', 'api_url' => 'http://www.kkcloud.com/api.php/oss', 'access_key' => '访问密钥', 'secret_key' => '安全密钥']);

($result = $client->GetBucketTagsRequest(['id' => 89]));

var_dump($result->isOk());//处理成功

var_dump($result->getData());

var_dump($result->getMessage());


