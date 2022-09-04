<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
$client = new Client();
$headers = [
  'Authorization' => 'NdQe03YgKb1pf9fMufhWVLtCBmMGloXs',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "bernardino.carlitos@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues/22131/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
