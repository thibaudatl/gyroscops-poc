<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class EditEnvironmentItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Replaces the Environment resource.
     *
     * @param string                                                                                 $id          Resource identifier
     * @param \Gyroscops\Api\Model\EnvironmentJsonldWrite|\Gyroscops\Api\Model\EnvironmentWrite|null $requestBody
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
        return str_replace(['{id}'], [$this->id], '/environment/environment/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\EnvironmentJsonldWrite) {
            return [['Content-Type' => ['application/ld+json']], $this->body];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\EnvironmentWrite) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Gyroscops\Api\Model\EnvironmentWrite) {
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
     * @return \Gyroscops\Api\Model\EnvironmentRead|null
     *
     * @throws \Gyroscops\Api\Exception\EditEnvironmentItemBadRequestException
     * @throws \Gyroscops\Api\Exception\EditEnvironmentItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\EditEnvironmentItemNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, \Gyroscops\Api\Model\EnvironmentRead::class, 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\EditEnvironmentItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\EditEnvironmentItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\EditEnvironmentItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}