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

class CustomerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Customer';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Customer';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Customer();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'active') && $data->{'active'} !== null) {
            $object->setActive($data->{'active'});
        } elseif (property_exists($data, 'active') && $data->{'active'} === null) {
            $object->setActive(null);
        }
        if (property_exists($data, 'relationId') && $data->{'relationId'} !== null) {
            $object->setRelationId($data->{'relationId'});
        } elseif (property_exists($data, 'relationId') && $data->{'relationId'} === null) {
            $object->setRelationId(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'address') && $data->{'address'} !== null) {
            $object->setAddress($data->{'address'});
        } elseif (property_exists($data, 'address') && $data->{'address'} === null) {
            $object->setAddress(null);
        }
        if (property_exists($data, 'postalCode') && $data->{'postalCode'} !== null) {
            $object->setPostalCode($data->{'postalCode'});
        } elseif (property_exists($data, 'postalCode') && $data->{'postalCode'} === null) {
            $object->setPostalCode(null);
        }
        if (property_exists($data, 'city') && $data->{'city'} !== null) {
            $object->setCity($data->{'city'});
        } elseif (property_exists($data, 'city') && $data->{'city'} === null) {
            $object->setCity(null);
        }
        if (property_exists($data, 'country') && $data->{'country'} !== null) {
            $object->setCountry($data->{'country'});
        } elseif (property_exists($data, 'country') && $data->{'country'} === null) {
            $object->setCountry(null);
        }
        if (property_exists($data, 'phone') && $data->{'phone'} !== null) {
            $object->setPhone($data->{'phone'});
        } elseif (property_exists($data, 'phone') && $data->{'phone'} === null) {
            $object->setPhone(null);
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        } elseif (property_exists($data, 'email') && $data->{'email'} === null) {
            $object->setEmail(null);
        }
        if (property_exists($data, 'website') && $data->{'website'} !== null) {
            $object->setWebsite($data->{'website'});
        } elseif (property_exists($data, 'website') && $data->{'website'} === null) {
            $object->setWebsite(null);
        }
        if (property_exists($data, 'paymentPeriod') && $data->{'paymentPeriod'} !== null) {
            $object->setPaymentPeriod($data->{'paymentPeriod'});
        } elseif (property_exists($data, 'paymentPeriod') && $data->{'paymentPeriod'} === null) {
            $object->setPaymentPeriod(null);
        }
        if (property_exists($data, 'tax') && $data->{'tax'} !== null) {
            $object->setTax($data->{'tax'});
        } elseif (property_exists($data, 'tax') && $data->{'tax'} === null) {
            $object->setTax(null);
        }
        if (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} !== null) {
            $object->setHourlyRate($data->{'hourlyRate'});
        } elseif (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} === null) {
            $object->setHourlyRate(null);
        }
        if (property_exists($data, 'mileageRate') && $data->{'mileageRate'} !== null) {
            $object->setMileageRate($data->{'mileageRate'});
        } elseif (property_exists($data, 'mileageRate') && $data->{'mileageRate'} === null) {
            $object->setMileageRate(null);
        }
        if (property_exists($data, 'iban') && $data->{'iban'} !== null) {
            $object->setIban($data->{'iban'});
        } elseif (property_exists($data, 'iban') && $data->{'iban'} === null) {
            $object->setIban(null);
        }
        if (property_exists($data, 'bic') && $data->{'bic'} !== null) {
            $object->setBic($data->{'bic'});
        } elseif (property_exists($data, 'bic') && $data->{'bic'} === null) {
            $object->setBic(null);
        }
        if (property_exists($data, 'vatNumber') && $data->{'vatNumber'} !== null) {
            $object->setVatNumber($data->{'vatNumber'});
        } elseif (property_exists($data, 'vatNumber') && $data->{'vatNumber'} === null) {
            $object->setVatNumber(null);
        }
        if (property_exists($data, 'kvkNumber') && $data->{'kvkNumber'} !== null) {
            $object->setKvkNumber($data->{'kvkNumber'});
        } elseif (property_exists($data, 'kvkNumber') && $data->{'kvkNumber'} === null) {
            $object->setKvkNumber(null);
        }
        if (property_exists($data, 'invoiceAddress') && $data->{'invoiceAddress'} !== null) {
            $object->setInvoiceAddress($data->{'invoiceAddress'});
        } elseif (property_exists($data, 'invoiceAddress') && $data->{'invoiceAddress'} === null) {
            $object->setInvoiceAddress(null);
        }
        if (property_exists($data, 'invoicePostalCode') && $data->{'invoicePostalCode'} !== null) {
            $object->setInvoicePostalCode($data->{'invoicePostalCode'});
        } elseif (property_exists($data, 'invoicePostalCode') && $data->{'invoicePostalCode'} === null) {
            $object->setInvoicePostalCode(null);
        }
        if (property_exists($data, 'invoiceCity') && $data->{'invoiceCity'} !== null) {
            $object->setInvoiceCity($data->{'invoiceCity'});
        } elseif (property_exists($data, 'invoiceCity') && $data->{'invoiceCity'} === null) {
            $object->setInvoiceCity(null);
        }
        if (property_exists($data, 'invoiceCountry') && $data->{'invoiceCountry'} !== null) {
            $object->setInvoiceCountry($data->{'invoiceCountry'});
        } elseif (property_exists($data, 'invoiceCountry') && $data->{'invoiceCountry'} === null) {
            $object->setInvoiceCountry(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'clientId') && $data->{'clientId'} !== null) {
            $object->setClientId($data->{'clientId'});
        } elseif (property_exists($data, 'clientId') && $data->{'clientId'} === null) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'tagIds') && $data->{'tagIds'} !== null) {
            $values = [];
            foreach ($data->{'tagIds'} as $value) {
                $values[] = $value;
            }
            $object->setTagIds($values);
        } elseif (property_exists($data, 'tagIds') && $data->{'tagIds'} === null) {
            $object->setTagIds(null);
        }
        if (property_exists($data, 'tagNames') && $data->{'tagNames'} !== null) {
            $values_1 = [];
            foreach ($data->{'tagNames'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTagNames($values_1);
        } elseif (property_exists($data, 'tagNames') && $data->{'tagNames'} === null) {
            $object->setTagNames(null);
        }
        if (property_exists($data, 'vatRateId') && $data->{'vatRateId'} !== null) {
            $object->setVatRateId($data->{'vatRateId'});
        } elseif (property_exists($data, 'vatRateId') && $data->{'vatRateId'} === null) {
            $object->setVatRateId(null);
        }
        if (property_exists($data, 'vatRatePercentage') && $data->{'vatRatePercentage'} !== null) {
            $object->setVatRatePercentage($data->{'vatRatePercentage'});
        } elseif (property_exists($data, 'vatRatePercentage') && $data->{'vatRatePercentage'} === null) {
            $object->setVatRatePercentage(null);
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
        if (null !== $object->getActive()) {
            $data->{'active'} = $object->getActive();
        } else {
            $data->{'active'} = null;
        }
        if (null !== $object->getRelationId()) {
            $data->{'relationId'} = $object->getRelationId();
        } else {
            $data->{'relationId'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $object->getAddress();
        } else {
            $data->{'address'} = null;
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postalCode'} = $object->getPostalCode();
        } else {
            $data->{'postalCode'} = null;
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        } else {
            $data->{'city'} = null;
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        } else {
            $data->{'country'} = null;
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        } else {
            $data->{'phone'} = null;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        } else {
            $data->{'email'} = null;
        }
        if (null !== $object->getWebsite()) {
            $data->{'website'} = $object->getWebsite();
        } else {
            $data->{'website'} = null;
        }
        if (null !== $object->getPaymentPeriod()) {
            $data->{'paymentPeriod'} = $object->getPaymentPeriod();
        } else {
            $data->{'paymentPeriod'} = null;
        }
        if (null !== $object->getTax()) {
            $data->{'tax'} = $object->getTax();
        } else {
            $data->{'tax'} = null;
        }
        if (null !== $object->getHourlyRate()) {
            $data->{'hourlyRate'} = $object->getHourlyRate();
        } else {
            $data->{'hourlyRate'} = null;
        }
        if (null !== $object->getMileageRate()) {
            $data->{'mileageRate'} = $object->getMileageRate();
        } else {
            $data->{'mileageRate'} = null;
        }
        if (null !== $object->getIban()) {
            $data->{'iban'} = $object->getIban();
        } else {
            $data->{'iban'} = null;
        }
        if (null !== $object->getBic()) {
            $data->{'bic'} = $object->getBic();
        } else {
            $data->{'bic'} = null;
        }
        if (null !== $object->getVatNumber()) {
            $data->{'vatNumber'} = $object->getVatNumber();
        } else {
            $data->{'vatNumber'} = null;
        }
        if (null !== $object->getKvkNumber()) {
            $data->{'kvkNumber'} = $object->getKvkNumber();
        } else {
            $data->{'kvkNumber'} = null;
        }
        if (null !== $object->getInvoiceAddress()) {
            $data->{'invoiceAddress'} = $object->getInvoiceAddress();
        } else {
            $data->{'invoiceAddress'} = null;
        }
        if (null !== $object->getInvoicePostalCode()) {
            $data->{'invoicePostalCode'} = $object->getInvoicePostalCode();
        } else {
            $data->{'invoicePostalCode'} = null;
        }
        if (null !== $object->getInvoiceCity()) {
            $data->{'invoiceCity'} = $object->getInvoiceCity();
        } else {
            $data->{'invoiceCity'} = null;
        }
        if (null !== $object->getInvoiceCountry()) {
            $data->{'invoiceCountry'} = $object->getInvoiceCountry();
        } else {
            $data->{'invoiceCountry'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getClientId()) {
            $data->{'clientId'} = $object->getClientId();
        } else {
            $data->{'clientId'} = null;
        }
        if (null !== $object->getTagIds()) {
            $values = [];
            foreach ($object->getTagIds() as $value) {
                $values[] = $value;
            }
            $data->{'tagIds'} = $values;
        } else {
            $data->{'tagIds'} = null;
        }
        if (null !== $object->getTagNames()) {
            $values_1 = [];
            foreach ($object->getTagNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'tagNames'} = $values_1;
        } else {
            $data->{'tagNames'} = null;
        }
        if (null !== $object->getVatRateId()) {
            $data->{'vatRateId'} = $object->getVatRateId();
        } else {
            $data->{'vatRateId'} = null;
        }
        if (null !== $object->getVatRatePercentage()) {
            $data->{'vatRatePercentage'} = $object->getVatRatePercentage();
        } else {
            $data->{'vatRatePercentage'} = null;
        }

        return $data;
    }
}
