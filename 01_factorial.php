<?php
// Recursive function of factorial
function factorial($n) {
    // Base case : factorial of 0 or 1 is 1
    if (($n === 0) || ($n === 1)) {
        return 1;
    // Recursive case: factorial of n is n * factorial(n-1)
    } 
    return $n * factorial($n - 1);
}

var_dump(factorial(5)); // 120
// time : O(n) / space : O(n)