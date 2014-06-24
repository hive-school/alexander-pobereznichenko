<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 08.05.14
 * Time: 10:11
 */

namespace Bionic\Seller\User;

use Bionic\Seller\Payment\Payment;
use Bionic\Seller\Payment\ReceivePaymentInterface;


/**
 * Class Seller
 * @package homework_2\user
 */
class Seller extends AbstractUser implements ReceivePaymentInterface
{
    /**
     * @var Payment;
     */
    private $receivedPayment;

    /**
     * @return Payment
     */
    public function getReceivedPayment()
    {
        return $this->receivedPayment;
    }

    /**
     * @param Payment $receivedPayment
     */
    public function setReceivedPayment($receivedPayment)
    {
        $this->receivedPayment = $receivedPayment;
    }

    /**
     * @param $sumReceived
     * @param $price
     * @param $receivedCurrency
     * @param $priceCurrency
     */
    public function receivePayment($sumReceived, $price, $receivedCurrency, $priceCurrency)
    {
        $this->setReceivedPayment(new Payment($sumReceived, $price, $receivedCurrency, $priceCurrency));
    }

    /**
     * @return array
     */
    public function giveChange()
    {
        return $this->getReceivedPayment()->composeChange();
    }
}