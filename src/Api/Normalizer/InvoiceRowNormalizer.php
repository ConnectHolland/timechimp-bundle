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

class InvoiceRowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\InvoiceRow';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\InvoiceRow';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\InvoiceRow();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'invoiceId') && $data->{'invoiceId'} !== null) {
            $object->setInvoiceId($data->{'invoiceId'});
        } elseif (property_exists($data, 'invoiceId') && $data->{'invoiceId'} === null) {
            $object->setInvoiceId(null);
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        } elseif (property_exists($data, 'description') && $data->{'description'} === null) {
            $object->setDescription(null);
        }
        if (property_exists($data, 'quantity') && $data->{'quantity'} !== null) {
            $object->setQuantity($data->{'quantity'});
        } elseif (property_exists($data, 'quantity') && $data->{'quantity'} === null) {
            $object->setQuantity(null);
        }
        if (property_exists($data, 'price') && $data->{'price'} !== null) {
            $object->setPrice($data->{'price'});
        } elseif (property_exists($data, 'price') && $data->{'price'} === null) {
            $object->setPrice(null);
        }
        if (property_exists($data, 'tax') && $data->{'tax'} !== null) {
            $object->setTax($data->{'tax'});
        } elseif (property_exists($data, 'tax') && $data->{'tax'} === null) {
            $object->setTax(null);
        }
        if (property_exists($data, 'total') && $data->{'total'} !== null) {
            $object->setTotal($data->{'total'});
        } elseif (property_exists($data, 'total') && $data->{'total'} === null) {
            $object->setTotal(null);
        }
        if (property_exists($data, 'index') && $data->{'index'} !== null) {
            $object->setIndex($data->{'index'});
        } elseif (property_exists($data, 'index') && $data->{'index'} === null) {
            $object->setIndex(null);
        }
        if (property_exists($data, 'code') && $data->{'code'} !== null) {
            $object->setCode($data->{'code'});
        } elseif (property_exists($data, 'code') && $data->{'code'} === null) {
            $object->setCode(null);
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
        if (null !== $object->getInvoiceId()) {
            $data->{'invoiceId'} = $object->getInvoiceId();
        } else {
            $data->{'invoiceId'} = null;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        } else {
            $data->{'description'} = null;
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        } else {
            $data->{'quantity'} = null;
        }
        if (null !== $object->getPrice()) {
            $data->{'price'} = $object->getPrice();
        } else {
            $data->{'price'} = null;
        }
        if (null !== $object->getTax()) {
            $data->{'tax'} = $object->getTax();
        } else {
            $data->{'tax'} = null;
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        } else {
            $data->{'total'} = null;
        }
        if (null !== $object->getIndex()) {
            $data->{'index'} = $object->getIndex();
        } else {
            $data->{'index'} = null;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        } else {
            $data->{'code'} = null;
        }

        return $data;
    }
}
