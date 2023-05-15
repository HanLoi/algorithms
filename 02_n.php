<?php

function recursiveTraversal(array $arr, int $index = 0) :void
{
    if ($index >= count($arr)) return;
    echo ($arr[$index]);
    recursiveTraversal($arr, $index++);
}

// time : O(n) | space : O(1) 