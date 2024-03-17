<?php

namespace App\Models;

use App\Service\PriceTagService;

class Product
{
    /**
     * @var string
     */
    protected string $name;
    /**
     * @var float
     */
    protected float $costPrice;
    /**
     * @var int
     */
    protected int $stockQuantity;
    /**
     * @var PriceTagService
     */
    protected PriceTagService $priceTagService;
    /**
     * @var float
     */
    protected float $sellingPrice;

    /**
     * @var PreOrder
     */
    protected PreOrder $preOrder;

    /**
     * @param string $name
     * @param float $costPrice
     * @param int $stockQuantity
     * @param PriceTagService $priceTagService
     * @param PreOrder $preOrder
     */
    public function __construct(string $name, float $costPrice, int $stockQuantity, PriceTagService $priceTagService, PreOrder $preOrder)
    {
        $this->name = $name;
        $this->costPrice = $costPrice;
        $this->stockQuantity = $stockQuantity;
        $this->priceTagService = $priceTagService;
        $this->sellingPrice = $priceTagService->sellingPrice($costPrice);
        $this->preOrder = $preOrder;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getCostPrice(): float
    {
        return $this->costPrice;
    }

    /**
     * @param float $costPrice
     * @return void
     */
    public function setCostPrice(float $costPrice): void
    {
        $this->costPrice = $costPrice;
    }

    /**
     * @return float
     */
    public function getSellingPrice(): float
    {
        return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     * @return void
     */
    public function setSellingPrice(float $sellingPrice): void
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @return int
     */
    public function getStockQuantity(): int
    {
        return $this->stockQuantity;
    }

    /**
     * @param int $stockQuantity
     * @return void
     */
    public function setStockQuantity(int $stockQuantity): void
    {
        $this->stockQuantity = $stockQuantity;
    }

    /**
     * @return PreOrder
     */
    public function getPreOrder(): PreOrder
    {
        return $this->preOrder;
    }

    /**
     * @param PreOrder $preOrder
     * @return void
     */
    public function setPreOrder(PreOrder $preOrder): void
    {
        $this->preOrder = $preOrder;
    }

}