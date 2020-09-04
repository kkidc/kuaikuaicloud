# kuaikuaicloud open api sdk

### 使用案例
```
<?php

require_once './vendor/autoload.php';

$client = new \kuaikuaicloud\oss\Client(['version' => 'v1', 'api_url' => '对应环境的请求地址', 'access_key' => '访问密钥', 'secret_key' => '安全密钥']);

var_dump($result = $client->GetObjectListsRequest(['id' => 'xxxx'])); //发起请求

var_dump($result->isOk()); //是否操作成功

var_dump($result->getData()); //获取返回数据

var_dump($result->getMessage()); //获取返回信息

```
