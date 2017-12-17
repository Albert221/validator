<?php

declare(strict_types=1);

namespace Albert221\Validation\Rule;

use Albert221\Validation\VerdictInterface;

abstract class RuleValidator
{
    /**
     * @param mixed $value
     * @param Rule $rule
     *
     * @return VerdictInterface
     */
    abstract public function verdict($value, Rule $rule): VerdictInterface;
}
