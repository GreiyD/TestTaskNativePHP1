<?php

namespace App\Models;

use App\Helpers\Validators\DateValidator;
use App\Service\PreOrderService;


class PreOrder
{
    protected PreOrderService $preOrderService;
    protected DateValidator $dateValidator;
    protected string $date;
    protected int $preOrder;


    public function __construct(string $dateString, PreOrderService $preOrderService, DateValidator $dateValidator)
    {
        $this->date = $dateValidator::validation($dateString);

        $day = substr($this->date, 8, 2);

        $this->preOrder = $preOrderService::fibonacci(intval($day));
    }

    public function getPreOrder(): int
    {
        return $this->preOrder;
    }

    public function setPreOrder(int $preOrder): void
    {
        $this->preOrder = $preOrder;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

}