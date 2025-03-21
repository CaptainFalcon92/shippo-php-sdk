<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class UserParcelTemplateList
{
    /**
     * $results
     *
     * @var ?array<\Shippo\API\Models\Components\UserParcelTemplate> $results
     */
    #[\JMS\Serializer\Annotation\SerializedName('results')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\UserParcelTemplate>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $results = null;

    public function __construct()
    {
        $this->results = null;
    }
}