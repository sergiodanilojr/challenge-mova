<?php

use App\Greetings\FromConfig;
use App\Greetings\Greetings;

require './vendor/autoload.php';

$fromConfig = new FromConfig();
$date = new \DateTime("15-12-2022");

$greetings = (new Greetings($fromConfig))->setDate(null);

echo $greetings->salute();
