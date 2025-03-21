<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ShipmentCreateRequest
{
    /**
     * An object holding optional extra services to be requested.
     *
     * @var ?\Shippo\API\Models\Components\ShipmentExtra $extra
     */
    #[\JMS\Serializer\Annotation\SerializedName('extra')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\ShipmentExtra')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ShipmentExtra $extra = null;

    /**
     * A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    /**
     * Date the shipment will be tendered to the carrier. Must be in the format `2014-01-18T00:35:03.463Z`. 
     *
     * Defaults to current date and time if no value is provided. Please note that some carriers require this value to
     * be in the future, on a working day, or similar.
     *
     * @var ?string $shipmentDate
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipment_date')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $shipmentDate = null;

    #[\JMS\Serializer\Annotation\SerializedName('address_from')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $addressFrom;

    #[\JMS\Serializer\Annotation\SerializedName('address_return')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $addressReturn = null;

    #[\JMS\Serializer\Annotation\SerializedName('address_to')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $addressTo;

    #[\JMS\Serializer\Annotation\SerializedName('customs_declaration')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $customsDeclaration = null;

    #[\JMS\Serializer\Annotation\SerializedName('async')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $async = null;

    /**
     * List of <a href="#tag/Carrier-Accounts/">Carrier Accounts</a> `object_id`s used to filter 
     *
     * the returned rates.  If set, only rates from these carriers will be returned.
     *
     * @var ?array<string> $carrierAccounts
     */
    #[\JMS\Serializer\Annotation\SerializedName('carrier_accounts')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $carrierAccounts = null;

    /**
     * $parcels
     *
     * @var array<mixed> $parcels
     */
    #[\JMS\Serializer\Annotation\SerializedName('parcels')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    public array $parcels;

    public function __construct()
    {
        $this->extra = null;
        $this->metadata = null;
        $this->shipmentDate = null;
        $this->addressFrom = null;
        $this->addressReturn = null;
        $this->addressTo = null;
        $this->customsDeclaration = null;
        $this->async = null;
        $this->carrierAccounts = null;
        $this->parcels = [];
    }
}