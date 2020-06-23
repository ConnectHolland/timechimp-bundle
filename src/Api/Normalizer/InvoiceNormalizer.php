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

class InvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Invoice';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Invoice';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Invoice();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('clientId', $data) && $data['clientId'] !== null) {
            $object->setClientId($data['clientId']);
        } elseif (\array_key_exists('clientId', $data) && $data['clientId'] === null) {
            $object->setClientId(null);
        }
        if (\array_key_exists('companyInvoicePrefix', $data) && $data['companyInvoicePrefix'] !== null) {
            $object->setCompanyInvoicePrefix($data['companyInvoicePrefix']);
        } elseif (\array_key_exists('companyInvoicePrefix', $data) && $data['companyInvoicePrefix'] === null) {
            $object->setCompanyInvoicePrefix(null);
        }
        if (\array_key_exists('companyInvoiceId', $data) && $data['companyInvoiceId'] !== null) {
            $object->setCompanyInvoiceId($data['companyInvoiceId']);
        } elseif (\array_key_exists('companyInvoiceId', $data) && $data['companyInvoiceId'] === null) {
            $object->setCompanyInvoiceId(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
        } elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('customerRelationId', $data) && $data['customerRelationId'] !== null) {
            $object->setCustomerRelationId($data['customerRelationId']);
        } elseif (\array_key_exists('customerRelationId', $data) && $data['customerRelationId'] === null) {
            $object->setCustomerRelationId(null);
        }
        if (\array_key_exists('customerName', $data) && $data['customerName'] !== null) {
            $object->setCustomerName($data['customerName']);
        } elseif (\array_key_exists('customerName', $data) && $data['customerName'] === null) {
            $object->setCustomerName(null);
        }
        if (\array_key_exists('customerContactPerson', $data) && $data['customerContactPerson'] !== null) {
            $object->setCustomerContactPerson($data['customerContactPerson']);
        } elseif (\array_key_exists('customerContactPerson', $data) && $data['customerContactPerson'] === null) {
            $object->setCustomerContactPerson(null);
        }
        if (\array_key_exists('customerEmail', $data) && $data['customerEmail'] !== null) {
            $object->setCustomerEmail($data['customerEmail']);
        } elseif (\array_key_exists('customerEmail', $data) && $data['customerEmail'] === null) {
            $object->setCustomerEmail(null);
        }
        if (\array_key_exists('customerAddress', $data) && $data['customerAddress'] !== null) {
            $object->setCustomerAddress($data['customerAddress']);
        } elseif (\array_key_exists('customerAddress', $data) && $data['customerAddress'] === null) {
            $object->setCustomerAddress(null);
        }
        if (\array_key_exists('customerVatNumber', $data) && $data['customerVatNumber'] !== null) {
            $object->setCustomerVatNumber($data['customerVatNumber']);
        } elseif (\array_key_exists('customerVatNumber', $data) && $data['customerVatNumber'] === null) {
            $object->setCustomerVatNumber(null);
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['date']));
        } elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('dueDate', $data) && $data['dueDate'] !== null) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dueDate']));
        } elseif (\array_key_exists('dueDate', $data) && $data['dueDate'] === null) {
            $object->setDueDate(null);
        }
        if (\array_key_exists('reference', $data) && $data['reference'] !== null) {
            $object->setReference($data['reference']);
        } elseif (\array_key_exists('reference', $data) && $data['reference'] === null) {
            $object->setReference(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($data['total']);
        } elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        if (\array_key_exists('totalWithoutExchangeRate', $data) && $data['totalWithoutExchangeRate'] !== null) {
            $object->setTotalWithoutExchangeRate($data['totalWithoutExchangeRate']);
        } elseif (\array_key_exists('totalWithoutExchangeRate', $data) && $data['totalWithoutExchangeRate'] === null) {
            $object->setTotalWithoutExchangeRate(null);
        }
        if (\array_key_exists('totalExTax', $data) && $data['totalExTax'] !== null) {
            $object->setTotalExTax($data['totalExTax']);
        } elseif (\array_key_exists('totalExTax', $data) && $data['totalExTax'] === null) {
            $object->setTotalExTax(null);
        }
        if (\array_key_exists('totalExTaxWithoutExchangeRate', $data) && $data['totalExTaxWithoutExchangeRate'] !== null) {
            $object->setTotalExTaxWithoutExchangeRate($data['totalExTaxWithoutExchangeRate']);
        } elseif (\array_key_exists('totalExTaxWithoutExchangeRate', $data) && $data['totalExTaxWithoutExchangeRate'] === null) {
            $object->setTotalExTaxWithoutExchangeRate(null);
        }
        if (\array_key_exists('additionalNotes', $data) && $data['additionalNotes'] !== null) {
            $object->setAdditionalNotes($data['additionalNotes']);
        } elseif (\array_key_exists('additionalNotes', $data) && $data['additionalNotes'] === null) {
            $object->setAdditionalNotes(null);
        }
        if (\array_key_exists('internNotes', $data) && $data['internNotes'] !== null) {
            $object->setInternNotes($data['internNotes']);
        } elseif (\array_key_exists('internNotes', $data) && $data['internNotes'] === null) {
            $object->setInternNotes(null);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        } elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('exchangeRate', $data) && $data['exchangeRate'] !== null) {
            $object->setExchangeRate($data['exchangeRate']);
        } elseif (\array_key_exists('exchangeRate', $data) && $data['exchangeRate'] === null) {
            $object->setExchangeRate(null);
        }
        if (\array_key_exists('credit', $data) && $data['credit'] !== null) {
            $object->setCredit($data['credit']);
        } elseif (\array_key_exists('credit', $data) && $data['credit'] === null) {
            $object->setCredit(null);
        }
        if (\array_key_exists('invoiceRows', $data) && $data['invoiceRows'] !== null) {
            $values = [];
            foreach ($data['invoiceRows'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\InvoiceRow', 'json', $context);
            }
            $object->setInvoiceRows($values);
        } elseif (\array_key_exists('invoiceRows', $data) && $data['invoiceRows'] === null) {
            $object->setInvoiceRows(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if (null !== $object->getCompanyInvoicePrefix()) {
            $data['companyInvoicePrefix'] = $object->getCompanyInvoicePrefix();
        }
        if (null !== $object->getCompanyInvoiceId()) {
            $data['companyInvoiceId'] = $object->getCompanyInvoiceId();
        }
        if (null !== $object->getCustomerId()) {
            $data['customerId'] = $object->getCustomerId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getCustomerRelationId()) {
            $data['customerRelationId'] = $object->getCustomerRelationId();
        }
        if (null !== $object->getCustomerName()) {
            $data['customerName'] = $object->getCustomerName();
        }
        if (null !== $object->getCustomerContactPerson()) {
            $data['customerContactPerson'] = $object->getCustomerContactPerson();
        }
        if (null !== $object->getCustomerEmail()) {
            $data['customerEmail'] = $object->getCustomerEmail();
        }
        if (null !== $object->getCustomerAddress()) {
            $data['customerAddress'] = $object->getCustomerAddress();
        }
        if (null !== $object->getCustomerVatNumber()) {
            $data['customerVatNumber'] = $object->getCustomerVatNumber();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getDueDate()) {
            $data['dueDate'] = $object->getDueDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if (null !== $object->getTotalWithoutExchangeRate()) {
            $data['totalWithoutExchangeRate'] = $object->getTotalWithoutExchangeRate();
        }
        if (null !== $object->getTotalExTax()) {
            $data['totalExTax'] = $object->getTotalExTax();
        }
        if (null !== $object->getTotalExTaxWithoutExchangeRate()) {
            $data['totalExTaxWithoutExchangeRate'] = $object->getTotalExTaxWithoutExchangeRate();
        }
        if (null !== $object->getAdditionalNotes()) {
            $data['additionalNotes'] = $object->getAdditionalNotes();
        }
        if (null !== $object->getInternNotes()) {
            $data['internNotes'] = $object->getInternNotes();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getExchangeRate()) {
            $data['exchangeRate'] = $object->getExchangeRate();
        }
        if (null !== $object->getCredit()) {
            $data['credit'] = $object->getCredit();
        }
        if (null !== $object->getInvoiceRows()) {
            $values = [];
            foreach ($object->getInvoiceRows() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['invoiceRows'] = $values;
        }

        return $data;
    }
}
