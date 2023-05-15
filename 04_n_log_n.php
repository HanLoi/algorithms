<?php

// Recursion function
function mergeSort($array)
{
    $length = count($array);
    
    if ($length <= 1) {
        return $array;
    }
    
    $mid = (int) ($length / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
    
    $left = mergeSort($left);
    $right = mergeSort($right);
    
    return array_merge($left, $right);
}

// time : O(n log n) | space: O(N)