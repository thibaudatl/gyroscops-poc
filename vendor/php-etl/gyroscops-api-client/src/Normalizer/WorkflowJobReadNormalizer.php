<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Normalizer;

use Gyroscops\Api\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class WorkflowJobReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return \Gyroscops\Api\Model\WorkflowJobRead::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && \Gyroscops\Api\Model\WorkflowJobRead::class === $data::class;
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Api\Model\WorkflowJobRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('workflow', $data) && null !== $data['workflow']) {
            $object->setWorkflow($data['workflow']);
        } elseif (\array_key_exists('workflow', $data) && null === $data['workflow']) {
            $object->setWorkflow(null);
        }
        if (\array_key_exists('pipeline', $data) && null !== $data['pipeline']) {
            $object->setPipeline($data['pipeline']);
        } elseif (\array_key_exists('pipeline', $data) && null === $data['pipeline']) {
            $object->setPipeline(null);
        }
        if (\array_key_exists('action', $data) && null !== $data['action']) {
            $object->setAction($data['action']);
        } elseif (\array_key_exists('action', $data) && null === $data['action']) {
            $object->setAction(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['workflow'] = $object->getWorkflow();
        if (null !== $object->getPipeline()) {
            $data['pipeline'] = $object->getPipeline();
        }
        if (null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }

        return $data;
    }
}