<?php

namespace App\Interfaces;

interface InterfacePreOrderService
{
    /**
     * @param int $n
     * @return int
     */
    public static function fibonacci(int $n): int;
}