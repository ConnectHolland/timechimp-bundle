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

class ProjectTaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectTask';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectTask';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectTask();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'taskId') && $data->{'taskId'} !== null) {
            $object->setTaskId($data->{'taskId'});
        } elseif (property_exists($data, 'taskId') && $data->{'taskId'} === null) {
            $object->setTaskId(null);
        }
        if (property_exists($data, 'taskName') && $data->{'taskName'} !== null) {
            $object->setTaskName($data->{'taskName'});
        } elseif (property_exists($data, 'taskName') && $data->{'taskName'} === null) {
            $object->setTaskName(null);
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
        if (property_exists($data, 'unspecified') && $data->{'unspecified'} !== null) {
            $object->setUnspecified($data->{'unspecified'});
        } elseif (property_exists($data, 'unspecified') && $data->{'unspecified'} === null) {
            $object->setUnspecified(null);
        }
        if (property_exists($data, 'budgetHours') && $data->{'budgetHours'} !== null) {
            $object->setBudgetHours($data->{'budgetHours'});
        } elseif (property_exists($data, 'budgetHours') && $data->{'budgetHours'} === null) {
            $object->setBudgetHours(null);
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
        if (null !== $object->getTaskId()) {
            $data->{'taskId'} = $object->getTaskId();
        } else {
            $data->{'taskId'} = null;
        }
        if (null !== $object->getTaskName()) {
            $data->{'taskName'} = $object->getTaskName();
        } else {
            $data->{'taskName'} = null;
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
        if (null !== $object->getUnspecified()) {
            $data->{'unspecified'} = $object->getUnspecified();
        } else {
            $data->{'unspecified'} = null;
        }
        if (null !== $object->getBudgetHours()) {
            $data->{'budgetHours'} = $object->getBudgetHours();
        } else {
            $data->{'budgetHours'} = null;
        }

        return $data;
    }
}
