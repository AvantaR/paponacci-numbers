<?php

/**
 * @return array
 */
function paponacciNumbers()
{
    $paponacciNumbers = [];
    for ($i = 0; $i <= 2137; $i++) {
        if (preg_match('/[2137]{4}/', $i)) {
            $paponacciNumbers[] = $i;
        }
    }

    return [];
}
