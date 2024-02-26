<?php
namespace App\Models;

use App\Service\PriceTagService;

class Product
{
    protected string $name;
    protected float $costPrice;
    protected int $stockQuantity;
    protected int $preOrder;
    protected float $markupPercentage;
    protected PriceTagService $priceTagService;
    protected float $sellingPrice;

    /**
     * @param string $name
     * @param float $costPrice
     * @param int $stockQuantity
     * @param int $preOrder
     * @param float $markupPercentage
     * @param PriceTagService $priceTagService
     */
    public function __construct(string $name, float $costPrice, int $stockQuantity, int $preOrder, float $markupPercentage, PriceTagService $priceTagService)
    {
        $this->name = $name;
        $this->costPrice = $costPrice;
        $this->stockQuantity = $stockQuantity;
        $this->preOrder = $preOrder;
        $this->markupPercentage = $markupPercentage;
        $this->priceTagService = $priceTagService;
        $this->sellingPrice = $priceTagService->sellingPrice($costPrice, $markupPercentage);
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCostPrice(): float
    {
        return $this->costPrice;
    }

    public function setCostPrice(float $costPrice): void
    {
        $this->costPrice = $costPrice;
    }

    public function getSellingPrice(): float
    {
        return $this->sellingPrice;
    }

    public function setSellingPrice(float $sellingPrice): void
    {
        $this->sellingPrice = $sellingPrice;
    }

    public function getStockQuantity(): int
    {
        return $this->stockQuantity;
    }

    public function setStockQuantity(int $stockQuantity): void
    {
        $this->stockQuantity = $stockQuantity;
    }

    public function getPreOrder(): int
    {
        return $this->preOrder;
    }

    public function setPreOrder(int $preOrder): void
    {
        $this->preOrder = $preOrder;
    }

}