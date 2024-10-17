<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://api.gameofthronesquotes.xyz/v1/random',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

print_r($client);

?>

