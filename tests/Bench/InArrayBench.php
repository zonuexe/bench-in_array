<?php

declare(strict_types=1);

namespace zonuexe;

use function in_array;

/**
 * @Revs(10)
 * @Iterations(1)
 */
class InArrayBench
{
    use ArrayProvider;

    /**
     * @Warmup
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchInArrayTrue($param)
    {
        $result = false;
        $subject = $param[0];
        foreach ($subject as $v) {
            $result = in_array($v, $subject, true);
        }
    }

    /**
     * @Warmup
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchInArrayFalse($param)
    {
        $result = false;
        $subject = $param[0];
        foreach ($subject as $v) {
            $result = in_array($v, $subject, false);
        }
    }
}
