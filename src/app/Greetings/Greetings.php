<?php

namespace App\Greetings;

use DateTime;

class Greetings implements GreetingsContract
{
    protected $greeting;

    public function __construct(GreetingsContract $greeting)
    {
        $this->greeting = $greeting;
    }

    public function setDate(?DateTime $date): self
    {
       $this->greeting->setDate($date);
       return $this;
    }

    public function salute():string
    {
        return $this->greeting->salute();
    }
}