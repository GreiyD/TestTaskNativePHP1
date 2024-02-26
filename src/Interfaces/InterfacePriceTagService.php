<?php

namespace App\Interfaces;

interface InterfacePriceTagService
{
    public function sellingPrice(float $costPrice): float;
}