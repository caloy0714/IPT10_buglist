<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
define('TOKEN', 'NdQe03YgKb1pf9fMufhWVLtCBmMGloXs');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1');


$client = new Client();
$headers = [
  'Authorization' => 'NdQe03YgKb1pf9fMufhWVLtCBmMGloXs'
];
$request = new Request('GET', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();

$bugs_list = json_decode($bugs);

foreach ($bugs_list->issues as $bug)
{
	echo '<li>' . $bug->id . ' ' .
$bug->summary . ' - ' .
$bug->severity->name . ' - ' .
$bug->status->name . "\n";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IPT10 Bugs</title>
<h1>IPT10 Bugs List</h1>
</head>
<body>
<main>
<p style="color:blue"><u>Carlitos S. Bernardino</u></p>
</main>

<table>
<tr>
<th>ID</th>
<th>Summary</th>
<th>&emsp;&emsp;Severity</th>
<th>&emsp;Status</th>
</tr>
<tr>
<td>1</td>
<td>&emsp;&emsp;My Bug</td>
<td>&emsp;&emsp;minor</td>
<td>&emsp;&emsp;new</td>
</tr>
<tr>
<td>2</td>
<td>&emsp;&emsp;Another Bug</td>
<td>&emsp;&emsp;major</td>
<td>&emsp;&emsp;assigned</td>
</tr>
<tr>
<td>3</td>
<td>&emsp;&emsp;Yet Another Bug</td>
<td>&emsp;&emsp;minor</td>
<td>&emsp;&emsp;new</td>
</tr>
<tr>
<td>4</td>
<td>&emsp;&emsp;Oh Yes Another Bug</td>
<td>&emsp;&emsp;major</td>
<td>&emsp;&emsp;assigned</td>
</tr>
</table>


</html>
