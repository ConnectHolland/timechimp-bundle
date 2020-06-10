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

class MileageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Mileage();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'customerId') && $data->{'customerId'} !== null) {
            $object->setCustomerId($data->{'customerId'});
        } elseif (property_exists($data, 'customerId') && $data->{'customerId'} === null) {
            $object->setCustomerId(null);
        }
        if (property_exists($data, 'customerName') && $data->{'customerName'} !== null) {
            $object->setCustomerName($data->{'customerName'});
        } elseif (property_exists($data, 'customerName') && $data->{'customerName'} === null) {
            $object->setCustomerName(null);
        }
        if (property_exists($data, 'projectId') && $data->{'projectId'} !== null) {
            $object->setProjectId($data->{'projectId'});
        } elseif (property_exists($data, 'projectId') && $data->{'projectId'} === null) {
            $object->setProjectId(null);
        }
        if (property_exists($data, 'projectName') && $data->{'projectName'} !== null) {
            $object->setProjectName($data->{'projectName'});
        } elseif (property_exists($data, 'projectName') && $data->{'projectName'} === null) {
            $object->setProjectName(null);
        }
        if (property_exists($data, 'vehicleId') && $data->{'vehicleId'} !== null) {
            $object->setVehicleId($data->{'vehicleId'});
        } elseif (property_exists($data, 'vehicleId') && $data->{'vehicleId'} === null) {
            $object->setVehicleId(null);
        }
        if (property_exists($data, 'vehicleName') && $data->{'vehicleName'} !== null) {
            $object->setVehicleName($data->{'vehicleName'});
        } elseif (property_exists($data, 'vehicleName') && $data->{'vehicleName'} === null) {
            $object->setVehicleName(null);
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
        if (property_exists($data, 'date') && $data->{'date'} !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'date'}));
        } elseif (property_exists($data, 'date') && $data->{'date'} === null) {
            $object->setDate(null);
        }
        if (property_exists($data, 'fromAddress') && $data->{'fromAddress'} !== null) {
            $object->setFromAddress($data->{'fromAddress'});
        } elseif (property_exists($data, 'fromAddress') && $data->{'fromAddress'} === null) {
            $object->setFromAddress(null);
        }
        if (property_exists($data, 'toAddress') && $data->{'toAddress'} !== null) {
            $object->setToAddress($data->{'toAddress'});
        } elseif (property_exists($data, 'toAddress') && $data->{'toAddress'} === null) {
            $object->setToAddress(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'distance') && $data->{'distance'} !== null) {
            $object->setDistance($data->{'distance'});
        } elseif (property_exists($data, 'distance') && $data->{'distance'} === null) {
            $object->setDistance(null);
        }
        if (property_exists($data, 'billable') && $data->{'billable'} !== null) {
            $object->setBillable($data->{'billable'});
        } elseif (property_exists($data, 'billable') && $data->{'billable'} === null) {
            $object->setBillable(null);
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        } elseif (property_exists($data, 'type') && $data->{'type'} === null) {
            $object->setType(null);
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        } elseif (property_exists($data, 'status') && $data->{'status'} === null) {
            $object->setStatus(null);
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
        if (null !== $object->getCustomerId()) {
            $data->{'customerId'} = $object->getCustomerId();
        } else {
            $data->{'customerId'} = null;
        }
        if (null !== $object->getCustomerName()) {
            $data->{'customerName'} = $object->getCustomerName();
        } else {
            $data->{'customerName'} = null;
        }
        if (null !== $object->getProjectId()) {
            $data->{'projectId'} = $object->getProjectId();
        } else {
            $data->{'projectId'} = null;
        }
        if (null !== $object->getProjectName()) {
            $data->{'projectName'} = $object->getProjectName();
        } else {
            $data->{'projectName'} = null;
        }
        if (null !== $object->getVehicleId()) {
            $data->{'vehicleId'} = $object->getVehicleId();
        } else {
            $data->{'vehicleId'} = null;
        }
        if (null !== $object->getVehicleName()) {
            $data->{'vehicleName'} = $object->getVehicleName();
        } else {
            $data->{'vehicleName'} = null;
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
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'date'} = null;
        }
        if (null !== $object->getFromAddress()) {
            $data->{'fromAddress'} = $object->getFromAddress();
        } else {
            $data->{'fromAddress'} = null;
        }
        if (null !== $object->getToAddress()) {
            $data->{'toAddress'} = $object->getToAddress();
        } else {
            $data->{'toAddress'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getDistance()) {
            $data->{'distance'} = $object->getDistance();
        } else {
            $data->{'distance'} = null;
        }
        if (null !== $object->getBillable()) {
            $data->{'billable'} = $object->getBillable();
        } else {
            $data->{'billable'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        } else {
            $data->{'type'} = null;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        } else {
            $data->{'status'} = null;
        }

        return $data;
    }
}
