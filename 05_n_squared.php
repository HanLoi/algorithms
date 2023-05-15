<?php

function recursiveFunction($n) {
    if ($n <= 0) return;
    for ($i = $n; $i >= 0; $n--) {
        echo $n;
    }

    recursiveFunction($n - 1);
}
// time : o(n^2) space : o(n)