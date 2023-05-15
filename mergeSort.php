<?php

// Recursion function
function mergeSortRecursive($array)
{
    $length = count($array);
    
    if ($length <= 1) {
        return $array;
    }
    
    $mid = (int) ($length / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
    
    $left = mergeSortRecursive($left);
    $right = mergeSortRecursive($right);
    
    return array_merge($left, $right);
}

//------------------------------------------------------------------------------------------

// Iterative function
function mergeSortIterative($array)
{
    $length = count($array);
    
    if ($length <= 1) {
        return $array;
    }
    
    $size = 1;
    
    while ($size < $length) {
        $left = 0;
        
        while ($left + $size < $length) {
            $mid = $left + $size - 1;
            $right = min($left + 2 * $size - 1, $length - 1);
            $tempArray = array_merge(
                array_slice($array, $left, $size),
                array_slice($array, $left + $size, $right - $left - $size + 1)
            );
            
            for ($i = $left, $j = 0; $i <= $right; $i++, $j++) {
                $array[$i] = $tempArray[$j];
            }
            
            $left += 2 * $size;
        }
        
        $size *= 2;
    }
    
    return $array;
}