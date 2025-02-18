<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\CustomerRequest;
use PaypalServerSdkLib\Models\CustomerVaultPaymentTokensResponse;

/**
 * Builder for model CustomerVaultPaymentTokensResponse
 *
 * @see CustomerVaultPaymentTokensResponse
 */
class CustomerVaultPaymentTokensResponseBuilder
{
    /**
     * @var CustomerVaultPaymentTokensResponse
     */
    private $instance;

    private function __construct(CustomerVaultPaymentTokensResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new customer vault payment tokens response Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerVaultPaymentTokensResponse());
    }

    /**
     * Sets total items field.
     */
    public function totalItems(?int $value): self
    {
        $this->instance->setTotalItems($value);
        return $this;
    }

    /**
     * Sets total pages field.
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Sets customer field.
     */
    public function customer(?CustomerRequest $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets payment tokens field.
     */
    public function paymentTokens(?array $value): self
    {
        $this->instance->setPaymentTokens($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new customer vault payment tokens response object.
     */
    public function build(): CustomerVaultPaymentTokensResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
