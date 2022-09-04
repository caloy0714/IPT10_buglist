<?php
$client = new Client();
$headers = [
  'Authorization' => 'NdQe03YgKb1pf9fMufhWVLtCBmMGloXs',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "caloy0714@gmail.com",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues/[ISSUE_NUMBER]/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
