<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
    use CheckArray;

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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectTask();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('taskId', $data) && $data['taskId'] !== null) {
            $object->setTaskId($data['taskId']);
        } elseif (\array_key_exists('taskId', $data) && $data['taskId'] === null) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('taskName', $data) && $data['taskName'] !== null) {
            $object->setTaskName($data['taskName']);
        } elseif (\array_key_exists('taskName', $data) && $data['taskName'] === null) {
            $object->setTaskName(null);
        }
        if (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] !== null) {
            $object->setHourlyRate($data['hourlyRate']);
        } elseif (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] === null) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
        } elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
        }
        if (\array_key_exists('unspecified', $data) && $data['unspecified'] !== null) {
            $object->setUnspecified($data['unspecified']);
        } elseif (\array_key_exists('unspecified', $data) && $data['unspecified'] === null) {
            $object->setUnspecified(null);
        }
        if (\array_key_exists('budgetHours', $data) && $data['budgetHours'] !== null) {
            $object->setBudgetHours($data['budgetHours']);
        } elseif (\array_key_exists('budgetHours', $data) && $data['budgetHours'] === null) {
            $object->setBudgetHours(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getTaskId()) {
            $data['taskId'] = $object->getTaskId();
        }
        if (null !== $object->getTaskName()) {
            $data['taskName'] = $object->getTaskName();
        }
        if (null !== $object->getHourlyRate()) {
            $data['hourlyRate'] = $object->getHourlyRate();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getUnspecified()) {
            $data['unspecified'] = $object->getUnspecified();
        }
        if (null !== $object->getBudgetHours()) {
            $data['budgetHours'] = $object->getBudgetHours();
        }

        return $data;
    }
}
