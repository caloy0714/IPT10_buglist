<?php
$client = new Client();
$headers = [
  'Authorization' => 'NdQe03YgKb1pf9fMufhWVLtCBmMGloXs',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "Caloy",
  "password": "123",
  "real_name": "Carlitos S. Bernardino",
  "email": "bernardino.carlitos@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
