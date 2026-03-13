<?php

namespace wearechicken\Bartec\Transformer;

use wearechicken\Bartec\Exception\TransformationException;

interface TransformerInterface
{
    /**
     * @param mixed $value
     * @return string
     * @throws TransformationException
     */
    public function transform($value);
}