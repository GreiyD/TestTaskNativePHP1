<?php

namespace App\Service;

use App\Interfaces\InterfacePriceTagService;

class PriceTagService implements InterfacePriceTagService
{
    protected float $markupPercentage;

    /**
     * @param float $markupPercentage
     */
    public function __construct(float $markupPercentage)
    {
        $this->markupPercentage = $markupPercentage;
    }

    public function getMarkupPercentage(): float
    {
        return $this->markupPercentage;
    }

    public function setMarkupPercentage(float $markupPercentage): void
    {
        $this->markupPercentage = $markupPercentage;
    }

    public function sellingPrice(float $costPrice): float
    {
        $markup = $costPrice * ($this->markupPercentage / 100);
        return $costPrice + $markup;
    }
}