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

class ExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Expense';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Expense';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Expense();
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
        if (property_exists($data, 'categoryName') && $data->{'categoryName'} !== null) {
            $object->setCategoryName($data->{'categoryName'});
        } elseif (property_exists($data, 'categoryName') && $data->{'categoryName'} === null) {
            $object->setCategoryName(null);
        }
        if (property_exists($data, 'categoryId') && $data->{'categoryId'} !== null) {
            $object->setCategoryId($data->{'categoryId'});
        } elseif (property_exists($data, 'categoryId') && $data->{'categoryId'} === null) {
            $object->setCategoryId(null);
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
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'attachment') && $data->{'attachment'} !== null) {
            $object->setAttachment($data->{'attachment'});
        } elseif (property_exists($data, 'attachment') && $data->{'attachment'} === null) {
            $object->setAttachment(null);
        }
        if (property_exists($data, 'quantity') && $data->{'quantity'} !== null) {
            $object->setQuantity($data->{'quantity'});
        } elseif (property_exists($data, 'quantity') && $data->{'quantity'} === null) {
            $object->setQuantity(null);
        }
        if (property_exists($data, 'rate') && $data->{'rate'} !== null) {
            $object->setRate($data->{'rate'});
        } elseif (property_exists($data, 'rate') && $data->{'rate'} === null) {
            $object->setRate(null);
        }
        if (property_exists($data, 'tax') && $data->{'tax'} !== null) {
            $object->setTax($data->{'tax'});
        } elseif (property_exists($data, 'tax') && $data->{'tax'} === null) {
            $object->setTax(null);
        }
        if (property_exists($data, 'billable') && $data->{'billable'} !== null) {
            $object->setBillable($data->{'billable'});
        } elseif (property_exists($data, 'billable') && $data->{'billable'} === null) {
            $object->setBillable(null);
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
        if (null !== $object->getCategoryName()) {
            $data->{'categoryName'} = $object->getCategoryName();
        } else {
            $data->{'categoryName'} = null;
        }
        if (null !== $object->getCategoryId()) {
            $data->{'categoryId'} = $object->getCategoryId();
        } else {
            $data->{'categoryId'} = null;
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
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getAttachment()) {
            $data->{'attachment'} = $object->getAttachment();
        } else {
            $data->{'attachment'} = null;
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        } else {
            $data->{'quantity'} = null;
        }
        if (null !== $object->getRate()) {
            $data->{'rate'} = $object->getRate();
        } else {
            $data->{'rate'} = null;
        }
        if (null !== $object->getTax()) {
            $data->{'tax'} = $object->getTax();
        } else {
            $data->{'tax'} = null;
        }
        if (null !== $object->getBillable()) {
            $data->{'billable'} = $object->getBillable();
        } else {
            $data->{'billable'} = null;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        } else {
            $data->{'status'} = null;
        }

        return $data;
    }
}
