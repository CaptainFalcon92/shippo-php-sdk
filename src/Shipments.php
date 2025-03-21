<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

class Shipments
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * List all shipments
     *
     * Returns a list of all shipment objects.<br><br>
     * In order to filter results, you must use the below path parameters. 
     * A maximum date range of 90 days is permitted. 
     * Provided dates should be ISO 8601 UTC dates (timezone offsets are currently not supported).<br><br>
     *
     * Optional path parameters:<br>
     *   `object_created_gt`- object(s) created greater than a provided date time<br>
     *   `object_created_gte` - object(s) created greater than or equal to a provided date time<br>
     *   `object_created_lt` - object(s) created less than a provided date time<br>
     *   `object_created_lte` - object(s) created less than or equal to a provided date time<br>
     *
     *   Date format examples:<br>
     *     `2017-01-01`<br>
     *     `2017-01-01T03:30:30` or `2017-01-01T03:30:30.5`<br>
     *     `2017-01-01T03:30:30Z`<br><br>
     *
     *   Example URL:<br>
     *     `https://api.goshippo.com/shipments/?object_created_gte=2017-01-01T00:00:30&object_created_lt=2017-04-01T00:00:30`
     *
     * @param  ?int  $page
     * @param  ?int  $results
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\ListShipmentsResponse
     */
    public function list(
        ?int $page = null,
        ?int $results = null,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\ListShipmentsResponse {
        $request = new \Shippo\API\Models\Operations\ListShipmentsRequest();
        $request->page = $page;
        $request->results = $results;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/shipments');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Shippo\API\Models\Operations\ListShipmentsRequest::class, $request, $this->sdkConfiguration->globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\ListShipmentsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->shipmentPaginatedList = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\ShipmentPaginatedList', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }

    /**
     * Create a new shipment
     *
     * Creates a new shipment object.
     *
     * @param  \Shippo\API\Models\Components\ShipmentCreateRequest  $shipmentCreateRequest
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\CreateShipmentResponse
     */
    public function create(
        \Shippo\API\Models\Components\ShipmentCreateRequest $shipmentCreateRequest,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\CreateShipmentResponse {
        $request = new \Shippo\API\Models\Operations\CreateShipmentRequest();
        $request->shipmentCreateRequest = $shipmentCreateRequest;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/shipments');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'shipmentCreateRequest', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\CreateShipmentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->shipment = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\Shipment', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a shipment
     *
     * Returns an existing shipment using an object ID
     *
     * @param  string  $shipmentId
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\GetShipmentResponse
     */
    public function get(
        string $shipmentId,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\GetShipmentResponse {
        $request = new \Shippo\API\Models\Operations\GetShipmentRequest();
        $request->shipmentId = $shipmentId;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/shipments/{ShipmentId}', \Shippo\API\Models\Operations\GetShipmentRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\GetShipmentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->shipment = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\Shipment', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }
}