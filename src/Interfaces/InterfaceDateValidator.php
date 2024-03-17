<?php

namespace App\Interfaces;

interface InterfaceDateValidator
{
    /**
     * @param $dateString
     * @return string|null
     */
    public static function validation($dateString): ?string;
}