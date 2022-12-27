<?php

require './vendor/autoload.php';

use App\Greetings\FromConfig;
use App\Greetings\Greetings;

$fromConfig = new FromConfig();
$date = new \DateTime("25-12-2022");

$greetings = (new Greetings($fromConfig))->setDate($date);

echo $greetings->salute() . PHP_EOL;
