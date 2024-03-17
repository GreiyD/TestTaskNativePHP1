<?php

namespace App\Helpers\Validators;

use App\Interfaces\InterfaceDateValidator;
use DateTime;
use Exception;

class DateValidator implements InterfaceDateValidator
{
    public static function validation($dateString): ?string
    {
            $date = new DateTime($dateString);

            $currentDate = new DateTime();

            if ($currentDate > $date) {
                throw new Exception();
            }
            return $date->format('Y-m-d');
    }
}