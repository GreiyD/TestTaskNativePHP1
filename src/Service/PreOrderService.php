<?php

namespace App\Service;

use App\Interfaces\InterfacePreOrderService;

class PreOrderService implements InterfacePreOrderService
{
    public static function fibonacci(int $n): int
    {
        $fib = [0, 1];
        for ($i = 2; $i <= $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib[$n];
    }
}