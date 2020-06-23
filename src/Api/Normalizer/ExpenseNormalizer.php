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

class ExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Expense();
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
        if (\array_key_exists('categoryName', $data) && $data['categoryName'] !== null) {
            $object->setCategoryName($data['categoryName']);
        } elseif (\array_key_exists('categoryName', $data) && $data['categoryName'] === null) {
            $object->setCategoryName(null);
        }
        if (\array_key_exists('categoryId', $data) && $data['categoryId'] !== null) {
            $object->setCategoryId($data['categoryId']);
        } elseif (\array_key_exists('categoryId', $data) && $data['categoryId'] === null) {
            $object->setCategoryId(null);
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
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('attachment', $data) && $data['attachment'] !== null) {
            $object->setAttachment($data['attachment']);
        } elseif (\array_key_exists('attachment', $data) && $data['attachment'] === null) {
            $object->setAttachment(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('rate', $data) && $data['rate'] !== null) {
            $object->setRate($data['rate']);
        } elseif (\array_key_exists('rate', $data) && $data['rate'] === null) {
            $object->setRate(null);
        }
        if (\array_key_exists('tax', $data) && $data['tax'] !== null) {
            $object->setTax($data['tax']);
        } elseif (\array_key_exists('tax', $data) && $data['tax'] === null) {
            $object->setTax(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
        } elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
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
        if (null !== $object->getCategoryName()) {
            $data['categoryName'] = $object->getCategoryName();
        }
        if (null !== $object->getCategoryId()) {
            $data['categoryId'] = $object->getCategoryId();
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
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getAttachment()) {
            $data['attachment'] = $object->getAttachment();
        }
        if (null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        if (null !== $object->getRate()) {
            $data['rate'] = $object->getRate();
        }
        if (null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        return $data;
    }
}
