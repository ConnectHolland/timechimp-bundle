<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Task';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Task';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Task();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'active') && $data->{'active'} !== null) {
            $object->setActive($data->{'active'});
        } elseif (property_exists($data, 'active') && $data->{'active'} === null) {
            $object->setActive(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'code') && $data->{'code'} !== null) {
            $object->setCode($data->{'code'});
        } elseif (property_exists($data, 'code') && $data->{'code'} === null) {
            $object->setCode(null);
        }
        if (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} !== null) {
            $object->setHourlyRate($data->{'hourlyRate'});
        } elseif (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} === null) {
            $object->setHourlyRate(null);
        }
        if (property_exists($data, 'billable') && $data->{'billable'} !== null) {
            $object->setBillable($data->{'billable'});
        } elseif (property_exists($data, 'billable') && $data->{'billable'} === null) {
            $object->setBillable(null);
        }
        if (property_exists($data, 'common') && $data->{'common'} !== null) {
            $object->setCommon($data->{'common'});
        } elseif (property_exists($data, 'common') && $data->{'common'} === null) {
            $object->setCommon(null);
        }
        if (property_exists($data, 'unspecified') && $data->{'unspecified'} !== null) {
            $object->setUnspecified($data->{'unspecified'});
        } elseif (property_exists($data, 'unspecified') && $data->{'unspecified'} === null) {
            $object->setUnspecified(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getActive()) {
            $data->{'active'} = $object->getActive();
        } else {
            $data->{'active'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        } else {
            $data->{'code'} = null;
        }
        if (null !== $object->getHourlyRate()) {
            $data->{'hourlyRate'} = $object->getHourlyRate();
        } else {
            $data->{'hourlyRate'} = null;
        }
        if (null !== $object->getBillable()) {
            $data->{'billable'} = $object->getBillable();
        } else {
            $data->{'billable'} = null;
        }
        if (null !== $object->getCommon()) {
            $data->{'common'} = $object->getCommon();
        } else {
            $data->{'common'} = null;
        }
        if (null !== $object->getUnspecified()) {
            $data->{'unspecified'} = $object->getUnspecified();
        } else {
            $data->{'unspecified'} = null;
        }

        return $data;
    }
}
