<?php

/**
 * @return array
 */
function paponacciNumbers()
{
    $paponacciNumbers = [];
    for ($i = 0; $i <= 2137; $i++) {
        if (!preg_match('/[045689]{1}/', $i)) {
            $paponacciNumbers[] = $i;
        }
    }

    return $paponacciNumbers;
}
