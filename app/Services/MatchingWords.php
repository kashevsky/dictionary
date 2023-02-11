<?php

namespace App\Services;

class MatchingWords
{
    public static function procentMatching($mainWord, $currentWord)
    {
        $mainWordCount = strlen($mainWord);
        $currentWordCount = strlen($currentWord);
        similar_text($mainWord, $currentWord, $matching);
        return $matching;
    }

}