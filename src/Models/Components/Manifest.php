<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class Manifest
{
    /**
     * ID of carrier account
     *
     * @var string $carrierAccount
     */
    #[\JMS\Serializer\Annotation\SerializedName('carrier_account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $carrierAccount;

    /**
     * All shipments to be submitted on this day will be closed out. 
     *
     * Must be in the format `2014-01-18T00:35:03.463Z` (ISO 8601 date).
     *
     * @var string $shipmentDate
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipment_date')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $shipmentDate;

    /**
     * IDs transactions to use. If you set this to null or not send this parameter, 
     *
     * Shippo will automatically assign all applicable transactions.
     *
     * @var ?array<string> $transactions
     */
    #[\JMS\Serializer\Annotation\SerializedName('transactions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $transactions = null;

    /**
     * ID of the Address object that should be used as pickup address for the scan form. 
     *
     * The USPS will validate this address before creating the scan form.
     *
     * @var string $addressFrom
     */
    #[\JMS\Serializer\Annotation\SerializedName('address_from')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $addressFrom;

    /**
     * An array containing the URLs to all returned manifest documents.
     *
     * @var array<string> $documents
     */
    #[\JMS\Serializer\Annotation\SerializedName('documents')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $documents;

    /**
     * An array of codes and messages describing the error that occurred if any.
     *
     * @var ?array<string> $errors
     */
    #[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;

    /**
     * Date and time of object creation.
     *
     * @var \DateTime $objectCreated
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $objectCreated;

    /**
     * Unique identifier of the given object.
     *
     * @var string $objectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $objectId;

    /**
     * Username of the user who created the object.
     *
     * @var string $objectOwner
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $objectOwner;

    /**
     * Date and time of last object update.
     *
     * @var \DateTime $objectUpdated
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $objectUpdated;

    /**
     * Indicates the status of the manifest.
     *
     * @var \Shippo\API\Models\Components\ManifestStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\ManifestStatus>')]
    public ManifestStatus $status;

    public function __construct()
    {
        $this->carrierAccount = '';
        $this->shipmentDate = '';
        $this->transactions = null;
        $this->addressFrom = '';
        $this->documents = [];
        $this->errors = null;
        $this->objectCreated = new \DateTime();
        $this->objectId = '';
        $this->objectOwner = '';
        $this->objectUpdated = new \DateTime();
        $this->status = \Shippo\API\Models\Components\ManifestStatus::Queued;
    }
}