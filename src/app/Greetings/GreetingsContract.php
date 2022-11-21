<?php

namespace App\Greetings;

use DateTime;

interface GreetingsContract
{
    public function setDate(?DateTime $date):self;

    public function salute():string;
}