<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class OrderCreateRequest
{
    /**
     * **Required if total_price is provided**<br>
     *
     * Currency of the <code>total_price</code> and <code>total_tax</code> amounts.
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    /**
     * Custom buyer- or seller-provided notes about the order.
     *
     * @var ?string $notes
     */
    #[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notes = null;

    /**
     * An alphanumeric identifier for the order used by the seller/buyer. This identifier doesn't need to be unique.
     *
     * @var ?string $orderNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('order_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $orderNumber = null;

    /**
     * Current state of the order. See the <a href="https://docs.goshippo.com/docs/orders/orders/">orders tutorial</a> 
     *
     * for the logic of how the status is handled.
     *
     * @var ?\Shippo\API\Models\Components\OrderStatusEnum $orderStatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('order_status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\OrderStatusEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderStatusEnum $orderStatus = null;

    /**
     * Date and time when the order was placed. This datetime can be different from the datetime of the order object creation on Shippo.
     *
     * @var string $placedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('placed_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $placedAt;

    /**
     * Amount paid by the buyer for shipping. This amount can be different from the price the seller will actually pay for shipping.
     *
     * @var ?string $shippingCost
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipping_cost')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $shippingCost = null;

    /**
     * **Required if shipping_cost is provided**<br>
     *
     * Currency of the <code>shipping_cost</code> amount.
     *
     * @var ?string $shippingCostCurrency
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipping_cost_currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $shippingCostCurrency = null;

    /**
     * Shipping method (carrier + service or other free text description) chosen by the buyer. 
     *
     * This value can be different from the shipping method the seller will actually choose.
     *
     * @var ?string $shippingMethod
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipping_method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $shippingMethod = null;

    #[\JMS\Serializer\Annotation\SerializedName('subtotal_price')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subtotalPrice = null;

    /**
     * Total amount paid by the buyer for this order.
     *
     * @var ?string $totalPrice
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_price')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalPrice = null;

    /**
     * Total tax amount paid by the buyer for this order.
     *
     * @var ?string $totalTax
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_tax')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalTax = null;

    /**
     * Total weight of the order.
     *
     * @var ?string $weight
     */
    #[\JMS\Serializer\Annotation\SerializedName('weight')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $weight = null;

    /**
     * The unit used for weight.
     *
     * @var ?\Shippo\API\Models\Components\WeightUnitEnum $weightUnit
     */
    #[\JMS\Serializer\Annotation\SerializedName('weight_unit')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\WeightUnitEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WeightUnitEnum $weightUnit = null;

    /**
     * <a href="#tag/Addresses">Address</a> object of the sender / seller. Will be returned expanded by default..
     *
     * @var ?\Shippo\API\Models\Components\AddressCreateRequest $fromAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('from_address')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\AddressCreateRequest')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AddressCreateRequest $fromAddress = null;

    /**
     * <a href="#tag/Addresses">Address</a> object of the recipient / buyer. Will be returned expanded by default.
     *
     * @var \Shippo\API\Models\Components\AddressCreateRequest $toAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('to_address')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\AddressCreateRequest')]
    public AddressCreateRequest $toAddress;

    /**
     * Array of <a href="#section/Line-Item">line item</a> objects representing the items in this order. 
     *
     * All objects will be returned expanded by default.
     *
     * @var ?array<\Shippo\API\Models\Components\LineItemBase> $lineItems
     */
    #[\JMS\Serializer\Annotation\SerializedName('line_items')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\LineItemBase>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $lineItems = null;

    public function __construct()
    {
        $this->currency = null;
        $this->notes = null;
        $this->orderNumber = null;
        $this->orderStatus = null;
        $this->placedAt = '';
        $this->shippingCost = null;
        $this->shippingCostCurrency = null;
        $this->shippingMethod = null;
        $this->subtotalPrice = null;
        $this->totalPrice = null;
        $this->totalTax = null;
        $this->weight = null;
        $this->weightUnit = null;
        $this->fromAddress = null;
        $this->toAddress = new \Shippo\API\Models\Components\AddressCreateRequest();
        $this->lineItems = null;
    }
}