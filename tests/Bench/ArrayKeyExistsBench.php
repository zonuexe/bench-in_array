<?php

declare(strict_types=1);

namespace zonuexe;

use function array_flip;
use function array_key_exists;

/**
 * @Revs(10)
 * @Iterations(1)
 */
class ArrayKeyExistsBench
{
    use ArrayProvider;

    /** @var list<mixed> */
    private $prop = [];

    /**
     * @Warmup
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchIssetFlipOnetime($param): void
    {
        $result = false;
        $subject = array_flip($param[0]);
        foreach ($subject as $v => $_) {
            $result = array_key_exists($v, $subject);
        }
    }

    /**
     * @Warmup
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchIssetFlipOnetimeProp($param): void
    {
        $result = false;
        $subject = array_flip($param[0]);
        $this->prop = $subject;
        foreach ($subject as $v => $_) {
            $result = array_key_exists($v, $this->prop);
        }
    }

    /**
     * @Warmup
     * @ParamProviders("provideArray")
     * @param array{list<mixed>}
     */
    public function benchIssetFlipEach($param): void
    {
        $result = false;
        $subject = $param[0];
        foreach ($subject as $v => $_) {
            $result = array_key_exists($v, array_flip($subject));
        }
    }
}
