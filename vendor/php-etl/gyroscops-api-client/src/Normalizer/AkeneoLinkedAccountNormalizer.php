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

class AkeneoLinkedAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return \Gyroscops\Api\Model\AkeneoLinkedAccount::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && \Gyroscops\Api\Model\AkeneoLinkedAccount::class === $data::class;
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
        $object = new \Gyroscops\Api\Model\AkeneoLinkedAccount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('tokenId', $data) && null !== $data['tokenId']) {
            $object->setTokenId($data['tokenId']);
        } elseif (\array_key_exists('tokenId', $data) && null === $data['tokenId']) {
            $object->setTokenId(null);
        }
        if (\array_key_exists('akeneoUserId', $data) && null !== $data['akeneoUserId']) {
            $object->setAkeneoUserId($data['akeneoUserId']);
        } elseif (\array_key_exists('akeneoUserId', $data) && null === $data['akeneoUserId']) {
            $object->setAkeneoUserId(null);
        }
        if (\array_key_exists('token', $data) && null !== $data['token']) {
            $object->setToken($data['token']);
        } elseif (\array_key_exists('token', $data) && null === $data['token']) {
            $object->setToken(null);
        }
        if (\array_key_exists('akeneoInstance', $data) && null !== $data['akeneoInstance']) {
            $object->setAkeneoInstance($data['akeneoInstance']);
        } elseif (\array_key_exists('akeneoInstance', $data) && null === $data['akeneoInstance']) {
            $object->setAkeneoInstance(null);
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
        $data['user'] = $object->getUser();
        if (null !== $object->getTokenId()) {
            $data['tokenId'] = $object->getTokenId();
        }
        if (null !== $object->getAkeneoUserId()) {
            $data['akeneoUserId'] = $object->getAkeneoUserId();
        }
        $data['token'] = $object->getToken();
        if (null !== $object->getAkeneoInstance()) {
            $data['akeneoInstance'] = $object->getAkeneoInstance();
        }

        return $data;
    }
}