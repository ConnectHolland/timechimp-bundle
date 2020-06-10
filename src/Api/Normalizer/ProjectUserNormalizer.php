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

class ProjectUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectUser();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'userId') && $data->{'userId'} !== null) {
            $object->setUserId($data->{'userId'});
        } elseif (property_exists($data, 'userId') && $data->{'userId'} === null) {
            $object->setUserId(null);
        }
        if (property_exists($data, 'userDisplayName') && $data->{'userDisplayName'} !== null) {
            $object->setUserDisplayName($data->{'userDisplayName'});
        } elseif (property_exists($data, 'userDisplayName') && $data->{'userDisplayName'} === null) {
            $object->setUserDisplayName(null);
        }
        if (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} !== null) {
            $object->setHourlyRate($data->{'hourlyRate'});
        } elseif (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} === null) {
            $object->setHourlyRate(null);
        }
        if (property_exists($data, 'budgetHours') && $data->{'budgetHours'} !== null) {
            $object->setBudgetHours($data->{'budgetHours'});
        } elseif (property_exists($data, 'budgetHours') && $data->{'budgetHours'} === null) {
            $object->setBudgetHours(null);
        }
        if (property_exists($data, 'projectManager') && $data->{'projectManager'} !== null) {
            $object->setProjectManager($data->{'projectManager'});
        } elseif (property_exists($data, 'projectManager') && $data->{'projectManager'} === null) {
            $object->setProjectManager(null);
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
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        } else {
            $data->{'userId'} = null;
        }
        if (null !== $object->getUserDisplayName()) {
            $data->{'userDisplayName'} = $object->getUserDisplayName();
        } else {
            $data->{'userDisplayName'} = null;
        }
        if (null !== $object->getHourlyRate()) {
            $data->{'hourlyRate'} = $object->getHourlyRate();
        } else {
            $data->{'hourlyRate'} = null;
        }
        if (null !== $object->getBudgetHours()) {
            $data->{'budgetHours'} = $object->getBudgetHours();
        } else {
            $data->{'budgetHours'} = null;
        }
        if (null !== $object->getProjectManager()) {
            $data->{'projectManager'} = $object->getProjectManager();
        } else {
            $data->{'projectManager'} = null;
        }

        return $data;
    }
}
