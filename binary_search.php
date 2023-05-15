<?php

// Binary search with iterration 
function binary_search_iterration($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $mid = (int)(($left + $right) / 2);
    
        if ($arr[$mid] === $target) {
            return true; // target found
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1; // search right half
        } else {
            $right = $mid - 1; // search left half
        }
    }
    return false; // target not found
}

// example usage
$arr = [1, 3, 5, 7, 9];
$target = 5;

var_dump(binary_search_iterration($arr, $target)); // true


// Binary search with recursive function 

function binary_search_recursive($arr, $target) {
    if (empty($arr)) {
        return false;
    } else if (count($arr) === 1) {
        return $arr[0] === $target ? true : false;
    }

    $lenght = count($arr);
    $mid = round($lenght / 2);

    if ($arr[$mid] === $target) {
        return true; // target found
    } elseif ($arr[$mid] < $target) {
        return binary_search_recursive(array_slice($arr, $mid, $lenght), $target); // search right half
    } else {
        return binary_search_recursive(array_slice($arr, 0, $mid), $target); // search left half
    }
}

// other way to do the function
function binary_search($arr, $target, $left = 0, $right = null) {
    if ($right === null) {
        $right = count($arr) - 1;
    }

    if ($left > $right) {
        return -1; // target not found
    }

    $mid = (int)(($left + $right) / 2);
    
    if ($arr[$mid] === $target) {
        return $mid; // target found
    } elseif ($arr[$mid] < $target) {
        return binary_search($arr, $target, $mid + 1, $right); // search right half
    } else {
        return binary_search($arr, $target, $left, $mid - 1); // search left half
    }
}

// example usage
$arr = [1, 3, 5, 7, 9];

var_dump(binary_search_recursive($arr, 5)); // true
var_dump(binary_search_recursive($arr, 3)); // true
var_dump(binary_search_recursive($arr, 10)); // false
var_dump(binary_search_recursive($arr, 2)); // false