<?php

require 'vendor/autoload.php';

use Goutte\Client;

$client = new Client();

$crawler = $client ->request("GET", "https://www.counter-strike.net/news/updates");

echo $crawler->filterXPath('//title') ->text();