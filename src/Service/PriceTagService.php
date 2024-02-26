<?php

namespace App\Service;

use App\Interfaces\InterfacePriceTagService;

class PriceTagService implements InterfacePriceTagService
{
    public function sellingPrice(float $costPrice, float $markupPercentage): float
    {
        $markup = $costPrice * ($markupPercentage / 100);
        return $costPrice + $markup;
    }
}