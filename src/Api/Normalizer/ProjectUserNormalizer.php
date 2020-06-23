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

class ProjectUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectUser';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectUser';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectUser();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
        } elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('userDisplayName', $data) && $data['userDisplayName'] !== null) {
            $object->setUserDisplayName($data['userDisplayName']);
        } elseif (\array_key_exists('userDisplayName', $data) && $data['userDisplayName'] === null) {
            $object->setUserDisplayName(null);
        }
        if (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] !== null) {
            $object->setHourlyRate($data['hourlyRate']);
        } elseif (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] === null) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('budgetHours', $data) && $data['budgetHours'] !== null) {
            $object->setBudgetHours($data['budgetHours']);
        } elseif (\array_key_exists('budgetHours', $data) && $data['budgetHours'] === null) {
            $object->setBudgetHours(null);
        }
        if (\array_key_exists('projectManager', $data) && $data['projectManager'] !== null) {
            $object->setProjectManager($data['projectManager']);
        } elseif (\array_key_exists('projectManager', $data) && $data['projectManager'] === null) {
            $object->setProjectManager(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        if (null !== $object->getUserDisplayName()) {
            $data['userDisplayName'] = $object->getUserDisplayName();
        }
        if (null !== $object->getHourlyRate()) {
            $data['hourlyRate'] = $object->getHourlyRate();
        }
        if (null !== $object->getBudgetHours()) {
            $data['budgetHours'] = $object->getBudgetHours();
        }
        if (null !== $object->getProjectManager()) {
            $data['projectManager'] = $object->getProjectManager();
        }

        return $data;
    }
}
