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

class InvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Invoice();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'clientId') && $data->{'clientId'} !== null) {
            $object->setClientId($data->{'clientId'});
        } elseif (property_exists($data, 'clientId') && $data->{'clientId'} === null) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'companyInvoicePrefix') && $data->{'companyInvoicePrefix'} !== null) {
            $object->setCompanyInvoicePrefix($data->{'companyInvoicePrefix'});
        } elseif (property_exists($data, 'companyInvoicePrefix') && $data->{'companyInvoicePrefix'} === null) {
            $object->setCompanyInvoicePrefix(null);
        }
        if (property_exists($data, 'companyInvoiceId') && $data->{'companyInvoiceId'} !== null) {
            $object->setCompanyInvoiceId($data->{'companyInvoiceId'});
        } elseif (property_exists($data, 'companyInvoiceId') && $data->{'companyInvoiceId'} === null) {
            $object->setCompanyInvoiceId(null);
        }
        if (property_exists($data, 'customerId') && $data->{'customerId'} !== null) {
            $object->setCustomerId($data->{'customerId'});
        } elseif (property_exists($data, 'customerId') && $data->{'customerId'} === null) {
            $object->setCustomerId(null);
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        } elseif (property_exists($data, 'status') && $data->{'status'} === null) {
            $object->setStatus(null);
        }
        if (property_exists($data, 'customerRelationId') && $data->{'customerRelationId'} !== null) {
            $object->setCustomerRelationId($data->{'customerRelationId'});
        } elseif (property_exists($data, 'customerRelationId') && $data->{'customerRelationId'} === null) {
            $object->setCustomerRelationId(null);
        }
        if (property_exists($data, 'customerName') && $data->{'customerName'} !== null) {
            $object->setCustomerName($data->{'customerName'});
        } elseif (property_exists($data, 'customerName') && $data->{'customerName'} === null) {
            $object->setCustomerName(null);
        }
        if (property_exists($data, 'customerContactPerson') && $data->{'customerContactPerson'} !== null) {
            $object->setCustomerContactPerson($data->{'customerContactPerson'});
        } elseif (property_exists($data, 'customerContactPerson') && $data->{'customerContactPerson'} === null) {
            $object->setCustomerContactPerson(null);
        }
        if (property_exists($data, 'customerEmail') && $data->{'customerEmail'} !== null) {
            $object->setCustomerEmail($data->{'customerEmail'});
        } elseif (property_exists($data, 'customerEmail') && $data->{'customerEmail'} === null) {
            $object->setCustomerEmail(null);
        }
        if (property_exists($data, 'customerAddress') && $data->{'customerAddress'} !== null) {
            $object->setCustomerAddress($data->{'customerAddress'});
        } elseif (property_exists($data, 'customerAddress') && $data->{'customerAddress'} === null) {
            $object->setCustomerAddress(null);
        }
        if (property_exists($data, 'customerVatNumber') && $data->{'customerVatNumber'} !== null) {
            $object->setCustomerVatNumber($data->{'customerVatNumber'});
        } elseif (property_exists($data, 'customerVatNumber') && $data->{'customerVatNumber'} === null) {
            $object->setCustomerVatNumber(null);
        }
        if (property_exists($data, 'date') && $data->{'date'} !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'date'}));
        } elseif (property_exists($data, 'date') && $data->{'date'} === null) {
            $object->setDate(null);
        }
        if (property_exists($data, 'dueDate') && $data->{'dueDate'} !== null) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'dueDate'}));
        } elseif (property_exists($data, 'dueDate') && $data->{'dueDate'} === null) {
            $object->setDueDate(null);
        }
        if (property_exists($data, 'reference') && $data->{'reference'} !== null) {
            $object->setReference($data->{'reference'});
        } elseif (property_exists($data, 'reference') && $data->{'reference'} === null) {
            $object->setReference(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'total') && $data->{'total'} !== null) {
            $object->setTotal($data->{'total'});
        } elseif (property_exists($data, 'total') && $data->{'total'} === null) {
            $object->setTotal(null);
        }
        if (property_exists($data, 'totalWithoutExchangeRate') && $data->{'totalWithoutExchangeRate'} !== null) {
            $object->setTotalWithoutExchangeRate($data->{'totalWithoutExchangeRate'});
        } elseif (property_exists($data, 'totalWithoutExchangeRate') && $data->{'totalWithoutExchangeRate'} === null) {
            $object->setTotalWithoutExchangeRate(null);
        }
        if (property_exists($data, 'totalExTax') && $data->{'totalExTax'} !== null) {
            $object->setTotalExTax($data->{'totalExTax'});
        } elseif (property_exists($data, 'totalExTax') && $data->{'totalExTax'} === null) {
            $object->setTotalExTax(null);
        }
        if (property_exists($data, 'totalExTaxWithoutExchangeRate') && $data->{'totalExTaxWithoutExchangeRate'} !== null) {
            $object->setTotalExTaxWithoutExchangeRate($data->{'totalExTaxWithoutExchangeRate'});
        } elseif (property_exists($data, 'totalExTaxWithoutExchangeRate') && $data->{'totalExTaxWithoutExchangeRate'} === null) {
            $object->setTotalExTaxWithoutExchangeRate(null);
        }
        if (property_exists($data, 'additionalNotes') && $data->{'additionalNotes'} !== null) {
            $object->setAdditionalNotes($data->{'additionalNotes'});
        } elseif (property_exists($data, 'additionalNotes') && $data->{'additionalNotes'} === null) {
            $object->setAdditionalNotes(null);
        }
        if (property_exists($data, 'internNotes') && $data->{'internNotes'} !== null) {
            $object->setInternNotes($data->{'internNotes'});
        } elseif (property_exists($data, 'internNotes') && $data->{'internNotes'} === null) {
            $object->setInternNotes(null);
        }
        if (property_exists($data, 'currency') && $data->{'currency'} !== null) {
            $object->setCurrency($data->{'currency'});
        } elseif (property_exists($data, 'currency') && $data->{'currency'} === null) {
            $object->setCurrency(null);
        }
        if (property_exists($data, 'language') && $data->{'language'} !== null) {
            $object->setLanguage($data->{'language'});
        } elseif (property_exists($data, 'language') && $data->{'language'} === null) {
            $object->setLanguage(null);
        }
        if (property_exists($data, 'exchangeRate') && $data->{'exchangeRate'} !== null) {
            $object->setExchangeRate($data->{'exchangeRate'});
        } elseif (property_exists($data, 'exchangeRate') && $data->{'exchangeRate'} === null) {
            $object->setExchangeRate(null);
        }
        if (property_exists($data, 'credit') && $data->{'credit'} !== null) {
            $object->setCredit($data->{'credit'});
        } elseif (property_exists($data, 'credit') && $data->{'credit'} === null) {
            $object->setCredit(null);
        }
        if (property_exists($data, 'invoiceRows') && $data->{'invoiceRows'} !== null) {
            $values = [];
            foreach ($data->{'invoiceRows'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\InvoiceRow', 'json', $context);
            }
            $object->setInvoiceRows($values);
        } elseif (property_exists($data, 'invoiceRows') && $data->{'invoiceRows'} === null) {
            $object->setInvoiceRows(null);
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
        if (null !== $object->getClientId()) {
            $data->{'clientId'} = $object->getClientId();
        } else {
            $data->{'clientId'} = null;
        }
        if (null !== $object->getCompanyInvoicePrefix()) {
            $data->{'companyInvoicePrefix'} = $object->getCompanyInvoicePrefix();
        } else {
            $data->{'companyInvoicePrefix'} = null;
        }
        if (null !== $object->getCompanyInvoiceId()) {
            $data->{'companyInvoiceId'} = $object->getCompanyInvoiceId();
        } else {
            $data->{'companyInvoiceId'} = null;
        }
        if (null !== $object->getCustomerId()) {
            $data->{'customerId'} = $object->getCustomerId();
        } else {
            $data->{'customerId'} = null;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        } else {
            $data->{'status'} = null;
        }
        if (null !== $object->getCustomerRelationId()) {
            $data->{'customerRelationId'} = $object->getCustomerRelationId();
        } else {
            $data->{'customerRelationId'} = null;
        }
        if (null !== $object->getCustomerName()) {
            $data->{'customerName'} = $object->getCustomerName();
        } else {
            $data->{'customerName'} = null;
        }
        if (null !== $object->getCustomerContactPerson()) {
            $data->{'customerContactPerson'} = $object->getCustomerContactPerson();
        } else {
            $data->{'customerContactPerson'} = null;
        }
        if (null !== $object->getCustomerEmail()) {
            $data->{'customerEmail'} = $object->getCustomerEmail();
        } else {
            $data->{'customerEmail'} = null;
        }
        if (null !== $object->getCustomerAddress()) {
            $data->{'customerAddress'} = $object->getCustomerAddress();
        } else {
            $data->{'customerAddress'} = null;
        }
        if (null !== $object->getCustomerVatNumber()) {
            $data->{'customerVatNumber'} = $object->getCustomerVatNumber();
        } else {
            $data->{'customerVatNumber'} = null;
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'date'} = null;
        }
        if (null !== $object->getDueDate()) {
            $data->{'dueDate'} = $object->getDueDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'dueDate'} = null;
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        } else {
            $data->{'reference'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        } else {
            $data->{'total'} = null;
        }
        if (null !== $object->getTotalWithoutExchangeRate()) {
            $data->{'totalWithoutExchangeRate'} = $object->getTotalWithoutExchangeRate();
        } else {
            $data->{'totalWithoutExchangeRate'} = null;
        }
        if (null !== $object->getTotalExTax()) {
            $data->{'totalExTax'} = $object->getTotalExTax();
        } else {
            $data->{'totalExTax'} = null;
        }
        if (null !== $object->getTotalExTaxWithoutExchangeRate()) {
            $data->{'totalExTaxWithoutExchangeRate'} = $object->getTotalExTaxWithoutExchangeRate();
        } else {
            $data->{'totalExTaxWithoutExchangeRate'} = null;
        }
        if (null !== $object->getAdditionalNotes()) {
            $data->{'additionalNotes'} = $object->getAdditionalNotes();
        } else {
            $data->{'additionalNotes'} = null;
        }
        if (null !== $object->getInternNotes()) {
            $data->{'internNotes'} = $object->getInternNotes();
        } else {
            $data->{'internNotes'} = null;
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        } else {
            $data->{'currency'} = null;
        }
        if (null !== $object->getLanguage()) {
            $data->{'language'} = $object->getLanguage();
        } else {
            $data->{'language'} = null;
        }
        if (null !== $object->getExchangeRate()) {
            $data->{'exchangeRate'} = $object->getExchangeRate();
        } else {
            $data->{'exchangeRate'} = null;
        }
        if (null !== $object->getCredit()) {
            $data->{'credit'} = $object->getCredit();
        } else {
            $data->{'credit'} = null;
        }
        if (null !== $object->getInvoiceRows()) {
            $values = [];
            foreach ($object->getInvoiceRows() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'invoiceRows'} = $values;
        } else {
            $data->{'invoiceRows'} = null;
        }

        return $data;
    }
}
