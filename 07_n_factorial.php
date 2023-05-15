<?php

function permutations($string) {
    $length = strlen($string);
    if ($length == 1) {
        return [$string];
    }
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $firstChar = $string[$i];
        $remainingChars = substr($string, 0, $i) . substr($string, $i+1);
        $subPermutations = permutations($remainingChars);
        foreach ($subPermutations as $perm) {
            $result[] = $firstChar . $perm;
        }
    }
    return $result;
}

// time : O(n!) | space : ...