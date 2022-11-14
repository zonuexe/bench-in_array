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
        yield 'range(0, 99)' => [range(0, 99)];
        yield 'range(1, 10000)' => [range(1, 10000)];
        yield 'md5(range(0, 99))' => [array_map('md5', range(0, 99))];
        yield 'md5(range(1, 1000))' => [array_map('md5', range(1, 1000))];

        srand(1);
        $shuffled = array_merge(range(0, 49), array_map('md5', range(50, 99)));
        shuffle($shuffled);
        yield 'range(0, 99) + md5()' => [$shuffled];
    }
}
