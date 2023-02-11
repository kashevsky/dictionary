<?php

namespace App\Services;

class FormatWords
{
    public static function format($word)
    {
        $word = strtolower($word);
        $word = trim($word);
        $word = str_replace('\'', '', $word);
        return $word;
    }
}