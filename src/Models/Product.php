<?php
namespace App\Models;

use App\Service\PriceTagService;

class Product
{
    protected string $name;
    protected float $costPrice;
    protected int $stockQuantity;
    protected PriceTagService $priceTagService;
    protected float $sellingPrice;

    protected PreOrder $preOrder;


    public function __construct(string $name, float $costPrice, int $stockQuantity, PriceTagService $priceTagService, PreOrder $preOrder)
    {
        $this->name = $name;
        $this->costPrice = $costPrice;
        $this->stockQuantity = $stockQuantity;
        $this->priceTagService = $priceTagService;
        $this->sellingPrice = $priceTagService->sellingPrice($costPrice);
        $this->preOrder = $preOrder;
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

    public function getPreOrder(): PreOrder
    {
        return $this->preOrder;
    }

    public function setPreOrder(PreOrder $preOrder): void
    {
        $this->preOrder = $preOrder;
    }

}