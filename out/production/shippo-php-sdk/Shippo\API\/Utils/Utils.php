<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Utils;

use GuzzleHttp\ClientInterface;

class Utils
{
    /**
     * configureClient configures the client with the given security.
     *
     * @param  ClientInterface  $client
     * @param  mixed  $security
     * @return ClientInterface
     */
    public static function configureSecurityClient(ClientInterface $client, mixed $security): ClientInterface
    {
        $sec = new Security();
        $clientOptions = $sec->parseSecurity($security);

        return new SecurityClient(
            client: $client,
            clientOptions: $clientOptions,
        );
    }

    /**
     * templateUrl will replace the path parameters in the given URL with the given values.
     *
     * @param  string  $url
     * @param  mixed  $params
     * @return string
     */
    public static function templateUrl(string $url, mixed $params): string
    {
        $url = preg_replace_callback('/{([^}]+)}/', function ($matches) use ($params) {
            $key = $matches[1];
            if (array_key_exists($key, $params)) {
                return $params[$key];
            } else {
                return $matches[0];
            }
        }, $url);

        return $url;
    }

    /**
     * generateUrl generates a URL from the given path and path parameters.
     *
     * @param  string  $url
     * @param  string  $path
     * @param  string|null  $type
     * @param  mixed|null  $pathParams
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return string
     */
    public static function generateUrl(string $url, string $path, ?string $type = null, mixed $pathParams = null, ?array $globals = null): string
    {
        $url = removeSuffix($url, '/').$path;
        $globals ??= [];

        $pp = new PathParameters();
        $params = $type !== null ? $pp->parsePathParams($type, $pathParams, $globals) : [];

        return Utils::templateUrl($url, $params);
    }

    /**
     * matchContentType will return true if the given content type matches the given pattern.
     *
     * @param  string  $contentType
     * @param  string  $pattern
     * @return bool
     */
    public static function matchContentType(string $contentType, string $pattern): bool
    {
        if ($contentType === $pattern || $pattern === '*' || $pattern === '*/*') {
            return true;
        }

        $mediaType = strtolower(trim(explode(';', $contentType)[0]));

        if ($mediaType === $pattern) {
            return true;
        }

        $parts = explode('/', $mediaType);
        if (count($parts) === 2) {
            $type = $parts[0];
            $subtype = $parts[1];

            if ($pattern === '$type/*' || $pattern === '*/$subtype') {
                return true;
            }
        }

        return false;
    }

    /**
     * serializeRequestBody will serialize the given request body.
     *
     * @param  mixed  $request
     * @param  string  $requestFieldName
     * @param  string  $serializationMethod
     * @return array<string,mixed>|null
     */
    public static function serializeRequestBody(mixed $request, string $requestFieldName, string $serializationMethod): ?array
    {
        $rb = new RequestBodies();

        return $rb->serializeRequestBody($request, $requestFieldName, $serializationMethod);
    }

    /**
     * getQueryParams will return serialized query parameters for the given type.
     *
     * @param  string  $type
     * @param  mixed  $queryParams
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return array<string,mixed>
     */
    public static function getQueryParams(string $type, mixed $queryParams, ?array $globals = null): array
    {
        $qp = new QueryParameters();
        $globals ??= [];

        $query = $qp->parseQueryParams($type, $queryParams, $globals);

        if ($query === null) {
            return [];
        }

        return [
            'query' => $query,
        ];
    }

    /**
     * getHeaders will return serialized headers for the given type.
     *
     * @param  mixed  $headers
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return array<string,mixed>
     */
    public static function getHeaders(mixed $headers, ?array $globals = null): array
    {
        $h = new Headers();

        $headers = $h->parseHeaders($headers, $globals);

        return [
            'headers' => $headers,
        ];
    }
}

function removePrefix(string $text, string $prefix): string
{
    if (strpos($text, $prefix) === 0) {
        $text = substr($text, strlen($prefix));
    }

    return $text;
}

function removeSuffix(string $text, string $suffix): string
{
    $suffix_length = strlen($suffix);
    if (substr($text, -$suffix_length) === $suffix) {
        return substr($text, 0, -$suffix_length);
    }

    return $text;
}

function valToString(mixed $val, string $dateTimeFormat = ''): string
{
    switch (gettype($val)) {
        case 'string':
            return $val;
        case 'object':
            switch (get_class($val)) {
                case 'DateTime':
                    if (empty($dateTimeFormat)) {
                        $dateTimeFormat = 'Y-m-d\TH:i:s.uP';
                    }

                    return $val->format($dateTimeFormat);
                default:
                    if (is_a($val, \BackedEnum::class, true)) {
                        $enumVal = $val->value;
                        if (is_string($enumVal)) {
                            return $enumVal;
                        }

                        return var_export($enumVal, true);
                    }

                    return var_export($val, true);
            }
        default:
            return var_export($val, true);
    }
}

/**
 * @param  mixed  $value
 * @param  string  $type
 * @param  string  $field
 * @param  array<string,array<string,array<string,string>>>  $globals
 * @return mixed
 */
function populateGlobal(mixed $value, string $type, string $field, array $globals): mixed
{
    if ($globals !== null && $value === null && isset($globals['parameters'][$type]) && isset($globals['parameters'][$type][$field])) {
        $globalVal = $globals['parameters'][$type][$field];
        if ($globalVal !== null) {
            $value = $globalVal;
        }
    }

    return $value;
}
