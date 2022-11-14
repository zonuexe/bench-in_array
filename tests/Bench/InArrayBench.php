<?php

declare(strict_types=1);

namespace zonuexe;

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
    public function benchInArrayGlobal($param)
    {
        $result = false;
        $subject = $param[0];
        foreach ($subject as $v) {
            $result = \in_array($v, $subject);
        }
    }


    /**
     * @Warmup
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchInArrayNamespace($param)
    {
        $result = false;
        $subject = $param[0];
        foreach ($subject as $v) {
            $result = in_array($v, $subject);
        }
    }
}
