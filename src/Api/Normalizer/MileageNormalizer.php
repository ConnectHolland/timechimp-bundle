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

class MileageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Mileage';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Mileage';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Mileage();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
        } elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('customerName', $data) && $data['customerName'] !== null) {
            $object->setCustomerName($data['customerName']);
        } elseif (\array_key_exists('customerName', $data) && $data['customerName'] === null) {
            $object->setCustomerName(null);
        }
        if (\array_key_exists('projectId', $data) && $data['projectId'] !== null) {
            $object->setProjectId($data['projectId']);
        } elseif (\array_key_exists('projectId', $data) && $data['projectId'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('projectName', $data) && $data['projectName'] !== null) {
            $object->setProjectName($data['projectName']);
        } elseif (\array_key_exists('projectName', $data) && $data['projectName'] === null) {
            $object->setProjectName(null);
        }
        if (\array_key_exists('vehicleId', $data) && $data['vehicleId'] !== null) {
            $object->setVehicleId($data['vehicleId']);
        } elseif (\array_key_exists('vehicleId', $data) && $data['vehicleId'] === null) {
            $object->setVehicleId(null);
        }
        if (\array_key_exists('vehicleName', $data) && $data['vehicleName'] !== null) {
            $object->setVehicleName($data['vehicleName']);
        } elseif (\array_key_exists('vehicleName', $data) && $data['vehicleName'] === null) {
            $object->setVehicleName(null);
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
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['date']));
        } elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('fromAddress', $data) && $data['fromAddress'] !== null) {
            $object->setFromAddress($data['fromAddress']);
        } elseif (\array_key_exists('fromAddress', $data) && $data['fromAddress'] === null) {
            $object->setFromAddress(null);
        }
        if (\array_key_exists('toAddress', $data) && $data['toAddress'] !== null) {
            $object->setToAddress($data['toAddress']);
        } elseif (\array_key_exists('toAddress', $data) && $data['toAddress'] === null) {
            $object->setToAddress(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('distance', $data) && $data['distance'] !== null) {
            $object->setDistance($data['distance']);
        } elseif (\array_key_exists('distance', $data) && $data['distance'] === null) {
            $object->setDistance(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
        } elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getCustomerId()) {
            $data['customerId'] = $object->getCustomerId();
        }
        if (null !== $object->getCustomerName()) {
            $data['customerName'] = $object->getCustomerName();
        }
        if (null !== $object->getProjectId()) {
            $data['projectId'] = $object->getProjectId();
        }
        if (null !== $object->getProjectName()) {
            $data['projectName'] = $object->getProjectName();
        }
        if (null !== $object->getVehicleId()) {
            $data['vehicleId'] = $object->getVehicleId();
        }
        if (null !== $object->getVehicleName()) {
            $data['vehicleName'] = $object->getVehicleName();
        }
        if (null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        if (null !== $object->getUserDisplayName()) {
            $data['userDisplayName'] = $object->getUserDisplayName();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getFromAddress()) {
            $data['fromAddress'] = $object->getFromAddress();
        }
        if (null !== $object->getToAddress()) {
            $data['toAddress'] = $object->getToAddress();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getDistance()) {
            $data['distance'] = $object->getDistance();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        return $data;
    }
}
