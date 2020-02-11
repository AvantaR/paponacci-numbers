<?php

declare(strict_types=1);

/**
 * @param int $highestNumber
 * @return Generator
 */
function paponacciNumbers(int $highestNumber = 2137): Generator
{
    for ($i = 0; $i <= $highestNumber; $i++) {
        if (!preg_match('/[045689]{1}/', $i)) {
            yield $i;
        }
    }
}
