<?php

namespace App\Helpers\Validators;

use App\Interfaces\InterfaceDateValidator;
use DateTime;
use Exception;
use InvalidArgumentException;

class DateValidator implements InterfaceDateValidator
{
    public static function validation($dateString): ?string
    {
        try {
            $date = new DateTime($dateString);

            $currentDate = new DateTime();

            if ($currentDate > $date) {
                throw new Exception();
            }
            return $date->format('Y-m-d');
        }catch (InvalidArgumentException $e) {
            echo 'Ошибка: Не валидная дата';
        } catch (Exception $e) {
            echo 'Ошибка: Неверная дата ' . $e->getMessage();
        }
    }
}