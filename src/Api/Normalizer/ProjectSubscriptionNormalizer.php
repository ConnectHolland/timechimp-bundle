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

class ProjectSubscriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectSubscription';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectSubscription';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectSubscription();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'frequency') && $data->{'frequency'} !== null) {
            $object->setFrequency($data->{'frequency'});
        } elseif (property_exists($data, 'frequency') && $data->{'frequency'} === null) {
            $object->setFrequency(null);
        }
        if (property_exists($data, 'startDate') && $data->{'startDate'} !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'startDate'}));
        } elseif (property_exists($data, 'startDate') && $data->{'startDate'} === null) {
            $object->setStartDate(null);
        }
        if (property_exists($data, 'endDate') && $data->{'endDate'} !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'endDate'}));
        } elseif (property_exists($data, 'endDate') && $data->{'endDate'} === null) {
            $object->setEndDate(null);
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        } elseif (property_exists($data, 'description') && $data->{'description'} === null) {
            $object->setDescription(null);
        }
        if (property_exists($data, 'code') && $data->{'code'} !== null) {
            $object->setCode($data->{'code'});
        } elseif (property_exists($data, 'code') && $data->{'code'} === null) {
            $object->setCode(null);
        }
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        } elseif (property_exists($data, 'amount') && $data->{'amount'} === null) {
            $object->setAmount(null);
        }
        if (property_exists($data, 'rate') && $data->{'rate'} !== null) {
            $object->setRate($data->{'rate'});
        } elseif (property_exists($data, 'rate') && $data->{'rate'} === null) {
            $object->setRate(null);
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
        if (null !== $object->getFrequency()) {
            $data->{'frequency'} = $object->getFrequency();
        } else {
            $data->{'frequency'} = null;
        }
        if (null !== $object->getStartDate()) {
            $data->{'startDate'} = $object->getStartDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'startDate'} = null;
        }
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'endDate'} = null;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        } else {
            $data->{'description'} = null;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        } else {
            $data->{'code'} = null;
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        } else {
            $data->{'amount'} = null;
        }
        if (null !== $object->getRate()) {
            $data->{'rate'} = $object->getRate();
        } else {
            $data->{'rate'} = null;
        }

        return $data;
    }
}
