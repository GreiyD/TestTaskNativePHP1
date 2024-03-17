<?php

namespace App\Models;

use App\Helpers\Validators\DateValidator;
use App\Service\PreOrderService;

class PreOrder
{
    /**
     * @var PreOrderService
     */
    protected PreOrderService $preOrderService;
    /**
     * @var DateValidator
     */
    protected DateValidator $dateValidator;
    /**
     * @var string|null
     */
    protected string $date;
    /**
     * @var int
     */
    protected int $preOrder;


    /**
     * @param string $dateString
     * @param PreOrderService $preOrderService
     * @param DateValidator $dateValidator
     * @throws \Exception
     */
    public function __construct(string $dateString, PreOrderService $preOrderService, DateValidator $dateValidator)
    {
        $this->date = $dateValidator::validation($dateString);

        $day = substr($this->date, 8, 2);

        $this->preOrder = $preOrderService::fibonacci(intval($day));
    }

    /**
     * @return int
     */
    public function getPreOrder(): int
    {
        return $this->preOrder;
    }

    /**
     * @param int $preOrder
     * @return void
     */
    public function setPreOrder(int $preOrder): void
    {
        $this->preOrder = $preOrder;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return void
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

}