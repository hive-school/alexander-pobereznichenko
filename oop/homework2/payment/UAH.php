<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 06.05.14
 * Time: 21:48
 */

namespace homework_2\payment;

class UAH extends AbstractCurrency
{
    private $currencyName = 'UAH';

    /**
     * @return array of integer values
     */
    function getAvailableNotes()
    {
        // TODO: Implement getAvailableNotes() method.
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }
} 