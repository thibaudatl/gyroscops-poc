<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class EditVariableFromSecretItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Replaces the VariableFromSecret resource.
     *
     * @param string                                                            $id          Resource identifier
     * @param \Gyroscops\Api\Model\VariableFromSecretJsonldWrite|\stdClass|null $requestBody
     */
    public function __construct(string $id, $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/variables-from-secret/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\VariableFromSecretJsonldWrite) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \stdClass) {
            return [['Content-Type' => ['application/json']], json_encode($this->body, \JSON_THROW_ON_ERROR)];
        }
        if ($this->body instanceof \stdClass) {
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
     * @return \Gyroscops\Api\Model\VariableFromSecretRead|null
     *
     * @throws \Gyroscops\Api\Exception\EditVariableFromSecretItemBadRequestException
     * @throws \Gyroscops\Api\Exception\EditVariableFromSecretItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\EditVariableFromSecretItemNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, \Gyroscops\Api\Model\VariableFromSecretRead::class, 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\EditVariableFromSecretItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\EditVariableFromSecretItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\EditVariableFromSecretItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}
