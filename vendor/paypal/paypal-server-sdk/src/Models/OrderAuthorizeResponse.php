<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use stdClass;

class OrderAuthorizeResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $createTime;

    /**
     * @var string|null
     */
    private $updateTime;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var OrderAuthorizeResponsePaymentSource|null
     */
    private $paymentSource;

    /**
     * @var string|null
     */
    private $intent;

    /**
     * @var mixed
     */
    private $processingInstruction;

    /**
     * @var Payer|null
     */
    private $payer;

    /**
     * @var PurchaseUnit[]|null
     */
    private $purchaseUnits;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var LinkDescription[]|null
     */
    private $links;

    /**
     * Returns Create Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong>
     * The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * Sets Create Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong>
     * The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @maps create_time
     */
    public function setCreateTime(?string $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * Returns Update Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong>
     * The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * Sets Update Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong>
     * The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @maps update_time
     */
    public function setUpdateTime(?string $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * Returns Id.
     * The ID of the order.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The ID of the order.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Payment Source.
     * The payment source used to fund the payment.
     */
    public function getPaymentSource(): ?OrderAuthorizeResponsePaymentSource
    {
        return $this->paymentSource;
    }

    /**
     * Sets Payment Source.
     * The payment source used to fund the payment.
     *
     * @maps payment_source
     */
    public function setPaymentSource(?OrderAuthorizeResponsePaymentSource $paymentSource): void
    {
        $this->paymentSource = $paymentSource;
    }

    /**
     * Returns Intent.
     * The intent to either capture payment immediately or authorize a payment for an order after order
     * creation.
     */
    public function getIntent(): ?string
    {
        return $this->intent;
    }

    /**
     * Sets Intent.
     * The intent to either capture payment immediately or authorize a payment for an order after order
     * creation.
     *
     * @maps intent
     */
    public function setIntent(?string $intent): void
    {
        $this->intent = $intent;
    }

    /**
     * Returns Processing Instruction.
     *
     * @return mixed
     */
    public function getProcessingInstruction()
    {
        return $this->processingInstruction;
    }

    /**
     * Sets Processing Instruction.
     *
     * @maps processing_instruction
     *
     * @param mixed $processingInstruction
     */
    public function setProcessingInstruction($processingInstruction): void
    {
        $this->processingInstruction = $processingInstruction;
    }

    /**
     * Returns Payer.
     */
    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    /**
     * Sets Payer.
     *
     * @maps payer
     */
    public function setPayer(?Payer $payer): void
    {
        $this->payer = $payer;
    }

    /**
     * Returns Purchase Units.
     * An array of purchase units. Each purchase unit establishes a contract between a customer and
     * merchant. Each purchase unit represents either a full or partial order that the customer intends to
     * purchase from the merchant.
     *
     * @return PurchaseUnit[]|null
     */
    public function getPurchaseUnits(): ?array
    {
        return $this->purchaseUnits;
    }

    /**
     * Sets Purchase Units.
     * An array of purchase units. Each purchase unit establishes a contract between a customer and
     * merchant. Each purchase unit represents either a full or partial order that the customer intends to
     * purchase from the merchant.
     *
     * @maps purchase_units
     *
     * @param PurchaseUnit[]|null $purchaseUnits
     */
    public function setPurchaseUnits(?array $purchaseUnits): void
    {
        $this->purchaseUnits = $purchaseUnits;
    }

    /**
     * Returns Status.
     * The order status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The order status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Links.
     * An array of request-related [HATEOAS links](/api/rest/responses/#hateoas-links) that are either
     * relevant to the issue by providing additional information or offering potential resolutions.
     *
     * @return LinkDescription[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     * An array of request-related [HATEOAS links](/api/rest/responses/#hateoas-links) that are either
     * relevant to the issue by providing additional information or offering potential resolutions.
     *
     * @maps links
     *
     * @param LinkDescription[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
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
        if (isset($this->createTime)) {
            $json['create_time']            = $this->createTime;
        }
        if (isset($this->updateTime)) {
            $json['update_time']            = $this->updateTime;
        }
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->paymentSource)) {
            $json['payment_source']         = $this->paymentSource;
        }
        if (isset($this->intent)) {
            $json['intent']                 = CheckoutPaymentIntent::checkValue($this->intent);
        }
        if (isset($this->processingInstruction)) {
            $json['processing_instruction'] = $this->processingInstruction;
        }
        if (isset($this->payer)) {
            $json['payer']                  = $this->payer;
        }
        if (isset($this->purchaseUnits)) {
            $json['purchase_units']         = $this->purchaseUnits;
        }
        if (isset($this->status)) {
            $json['status']                 = OrderStatus::checkValue($this->status);
        }
        if (isset($this->links)) {
            $json['links']                  = $this->links;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
