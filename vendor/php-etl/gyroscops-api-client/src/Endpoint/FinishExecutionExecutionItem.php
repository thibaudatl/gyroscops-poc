<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Endpoint;

class FinishExecutionExecutionItem extends \Gyroscops\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Finishes a pipeline execution.
     *
     * @param string                                                                                 $id          Resource identifier
     * @param \Gyroscops\Api\Model\ExecutionFinishPipelineExecutionCommandInputJsonld|\stdClass|null $requestBody
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
        return str_replace(['{id}'], [$this->id], '/runtime/execution/{id}/finish');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gyroscops\Api\Model\ExecutionFinishPipelineExecutionCommandInputJsonld) {
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
     * @throws \Gyroscops\Api\Exception\FinishExecutionExecutionItemBadRequestException
     * @throws \Gyroscops\Api\Exception\FinishExecutionExecutionItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\FinishExecutionExecutionItemNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (202 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body, null, 512, \JSON_THROW_ON_ERROR);
        }
        if (400 === $status) {
            throw new \Gyroscops\Api\Exception\FinishExecutionExecutionItemBadRequestException();
        }
        if (422 === $status) {
            throw new \Gyroscops\Api\Exception\FinishExecutionExecutionItemUnprocessableEntityException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Api\Exception\FinishExecutionExecutionItemNotFoundException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKey'];
    }
}