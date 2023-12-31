<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class PutAkeneoOauthTokenAkeneoOauthTokenCollection extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;

    /**
     * Generate an Akeneo OAuth token.
     *
     * @param \Gyroscops\Api\Model\GatewayAkeneoOauthTokenPutBody|\Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput[]|null $requestBody
     */
    public function __construct($requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/gateway/akeneo/oauth/token';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\GatewayAkeneoOauthTokenPutBody) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if (\is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof \Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if (\is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof \Gyroscops\Api\Model\AkeneoOauthTokenOauthTokenInput) {
            return [['Content-Type' => ['text/html']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionUnprocessableEntityException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body, null, 512, \JSON_THROW_ON_ERROR);
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\PutAkeneoOauthTokenAkeneoOauthTokenCollectionUnprocessableEntityException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
