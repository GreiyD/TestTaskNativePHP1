<?php

namespace App\Interfaces;

interface InterfacePriceTagService
{
    /**
     * @param float $costPrice
     * @return float
     */
    public function sellingPrice(float $costPrice): float;
}