<?php

namespace App\Interfaces;

interface InterfaceDateValidator
{
    public static function validation($dateString): ?string;
}