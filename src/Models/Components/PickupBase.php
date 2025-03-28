<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class PickupBase
{
    /**
     * The object ID of your USPS or DHL Express carrier account. 
     *
     * You can retrieve this from your Rate requests or our <a href="#tag/Carrier-Accounts/">Carrier Accounts</a> endpoint.
     *
     * @var string $carrierAccount
     */
    #[\JMS\Serializer\Annotation\SerializedName('carrier_account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $carrierAccount;

    /**
     * Location where the parcel(s) will be picked up.
     *
     * @var \Shippo\API\Models\Components\Location $location
     */
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\Location')]
    public Location $location;

    /**
     * A string of up to 100 characters that can be filled with any additional information you 
     *
     * want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    /**
     * The latest that you requested your parcels to be available for pickup. 
     *
     * Expressed in the timezone specified in the response.
     *
     * @var \DateTime $requestedEndTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('requested_end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $requestedEndTime;

    /**
     * The earliest that you requested your parcels to be ready for pickup. 
     *
     * Expressed in the timezone specified in the response.
     *
     * @var \DateTime $requestedStartTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('requested_start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $requestedStartTime;

    /**
     * The transaction(s) object ID(s) for the parcel(s) that need to be picked up.
     *
     * @var array<string> $transactions
     */
    #[\JMS\Serializer\Annotation\SerializedName('transactions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $transactions;

    public function __construct()
    {
        $this->carrierAccount = '';
        $this->location = new \Shippo\API\Models\Components\Location();
        $this->metadata = null;
        $this->requestedEndTime = new \DateTime();
        $this->requestedStartTime = new \DateTime();
        $this->transactions = [];
    }
}