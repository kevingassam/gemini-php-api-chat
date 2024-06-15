<?php

require "vendor/autoload.php";
require "key.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;


$data = json_decode(file_get_contents("php://input"));

$text = $data->text;

$client = new Client($ApiKey);

$response = $client->geminiPro()->generateContent(
    new TextPart($text),
);

echo $response->text();

?>