<?php

namespace App\Service;

use App\Interfaces\InterfacePriceTagService;

class PriceTagService implements InterfacePriceTagService
{
    /**
     * @var float
     */
    protected float $markupPercentage;

    /**
     * @param float $markupPercentage
     */
    public function __construct(float $markupPercentage)
    {
        $this->markupPercentage = $markupPercentage;
    }

    /**
     * @param float $costPrice
     * @return float
     */
    public function sellingPrice(float $costPrice): float
    {
        $markup = $costPrice * ($this->markupPercentage / 100);
        return $costPrice + $markup;
    }

    /**
     * @return float
     */
    public function getMarkupPercentage(): float
    {
        return $this->markupPercentage;
    }

    /**
     * @param float $markupPercentage
     * @return void
     */
    public function setMarkupPercentage(float $markupPercentage): void
    {
        $this->markupPercentage = $markupPercentage;
    }

}
