<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use PaypalServerSdkLib\ApiHelper;
use stdClass;

/**
 * The vaulted payment method details.
 */
class PaymentTokenResponsePaymentSource implements \JsonSerializable
{
    /**
     * @var CardPaymentToken|null
     */
    private $card;

    /**
     * @var PaypalPaymentToken|null
     */
    private $paypal;

    /**
     * @var VenmoPaymentToken|null
     */
    private $venmo;

    /**
     * @var ApplePayPaymentToken|null
     */
    private $applePay;

    /**
     * @var mixed
     */
    private $bank;

    /**
     * Returns Card.
     * Full representation of a Card Payment Token including network token.
     */
    public function getCard(): ?CardPaymentToken
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * Full representation of a Card Payment Token including network token.
     *
     * @maps card
     */
    public function setCard(?CardPaymentToken $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Paypal.
     */
    public function getPaypal(): ?PaypalPaymentToken
    {
        return $this->paypal;
    }

    /**
     * Sets Paypal.
     *
     * @maps paypal
     */
    public function setPaypal(?PaypalPaymentToken $paypal): void
    {
        $this->paypal = $paypal;
    }

    /**
     * Returns Venmo.
     */
    public function getVenmo(): ?VenmoPaymentToken
    {
        return $this->venmo;
    }

    /**
     * Sets Venmo.
     *
     * @maps venmo
     */
    public function setVenmo(?VenmoPaymentToken $venmo): void
    {
        $this->venmo = $venmo;
    }

    /**
     * Returns Apple Pay.
     * A resource representing a response for Apple Pay.
     */
    public function getApplePay(): ?ApplePayPaymentToken
    {
        return $this->applePay;
    }

    /**
     * Sets Apple Pay.
     * A resource representing a response for Apple Pay.
     *
     * @maps apple_pay
     */
    public function setApplePay(?ApplePayPaymentToken $applePay): void
    {
        $this->applePay = $applePay;
    }

    /**
     * Returns Bank.
     * Full representation of a Bank Payment Token.
     *
     * @return mixed
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Sets Bank.
     * Full representation of a Bank Payment Token.
     *
     * @maps bank
     *
     * @param mixed $bank
     */
    public function setBank($bank): void
    {
        $this->bank = $bank;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->card)) {
            $json['card']      = $this->card;
        }
        if (isset($this->paypal)) {
            $json['paypal']    = $this->paypal;
        }
        if (isset($this->venmo)) {
            $json['venmo']     = $this->venmo;
        }
        if (isset($this->applePay)) {
            $json['apple_pay'] = $this->applePay;
        }
        if (isset($this->bank)) {
            $json['bank']      = ApiHelper::decodeJson($this->bank, 'bank');
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
