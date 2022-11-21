<?php

namespace Core\Support;

class File
{
    public static function exists(string $path):bool
    {
        return file_exists($path);
    }
}