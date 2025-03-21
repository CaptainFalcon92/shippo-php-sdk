<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** CustomsExporterIdentification - Additional exporter identification that may be required to ship in certain countries */
class CustomsExporterIdentification
{
    /**
     * Economic Operators' Registration and Identification (EORI) number. Must start with a 2 character 
     *
     * country code followed by a 6-17 character alphanumeric identifier (e.g. PL1234567890ABCDE).
     * <a href="https://ec.europa.eu/taxation_customs/business/customs-procedures/general-overview/economic-operators-registration-identification-number-eori_en">More information on EORI.</a>
     *
     * @var ?string $eoriNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('eori_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $eoriNumber = null;

    /**
     * Tax identification that may be required to ship in certain countries. Typically used to assess duties on 
     *
     * goods that are crossing a border.
     *
     * @var ?\Shippo\API\Models\Components\CustomsTaxIdentification $taxId
     */
    #[\JMS\Serializer\Annotation\SerializedName('tax_id')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\CustomsTaxIdentification')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CustomsTaxIdentification $taxId = null;

    public function __construct()
    {
        $this->eoriNumber = null;
        $this->taxId = null;
    }
}