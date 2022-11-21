<?php

namespace App\Greetings;

use DateTime;
use Core\Support\Config;

class FromConfig implements GreetingsContract
{
    protected Config $config;
    protected DateTime $date;

    public function __construct(string $config = 'date')
    {
        $this->config = config($config);
    }

    public function setDate(?DateTime $date): self
    {
        if (!$date) {
            $this->date = new DateTime("NOW");
            return $this;
        }

        $this->date = $date;
        return $this;
    }

    public function salute(): string
    {
        $index = $this->date->format("d-m");

        if (!$this->config->has($index)) {
            return $this->config->get('default');
        }

        return $this->config->get($index);
    }
}
