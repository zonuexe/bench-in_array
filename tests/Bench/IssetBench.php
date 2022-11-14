<?php

declare(strict_types=1);

namespace zonuexe;

/**
 * @Revs(10)
 * @Iterations(1)
 */
class IssetBench
{
    use ArrayProvider;

    /** @var list<mixed> */
    private $prop = [];

    /**
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchIssetFlipOnetime($param): void
    {
        $result = false;
        $subject = array_flip($param[0]);
        foreach ($subject as $v => $_) {
            $result = isset($subject[$v]);
        }
    }

    /**
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchIssetFlipOnetimeProp($param): void
    {
        $result = false;
        $subject = array_flip($param[0]);
        $this->prop = $subject;
        foreach ($subject as $v => $_) {
            $result = isset($this->prop[$v]);
        }
    }

    /**
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchIssetFlipEach($param): void
    {
        $result = false;
        $subject = $param[0];
        foreach ($subject as $v => $_) {
            $result = isset(array_flip($subject)[$v]);
        }
    }
}
