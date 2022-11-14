<?php

declare(strict_types=1);

namespace zonuexe;

/**
 * @Revs(10)
 * @Iterations(1)
 */
trait ArrayProvider
{
    public function provideArray()
    {
        yield 'range(0, 99)' => [range(1, 10)];
        yield 'range(1, 10000)' => [range(1, 10000)];
        yield 'md5(range(1, 1000))' => [array_map('md5', range(1, 1000))];
    }
}
