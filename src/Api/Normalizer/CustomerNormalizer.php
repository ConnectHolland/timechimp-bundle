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

class CustomerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Customer();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('relationId', $data) && $data['relationId'] !== null) {
            $object->setRelationId($data['relationId']);
        } elseif (\array_key_exists('relationId', $data) && $data['relationId'] === null) {
            $object->setRelationId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
        } elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('postalCode', $data) && $data['postalCode'] !== null) {
            $object->setPostalCode($data['postalCode']);
        } elseif (\array_key_exists('postalCode', $data) && $data['postalCode'] === null) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
        } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('website', $data) && $data['website'] !== null) {
            $object->setWebsite($data['website']);
        } elseif (\array_key_exists('website', $data) && $data['website'] === null) {
            $object->setWebsite(null);
        }
        if (\array_key_exists('paymentPeriod', $data) && $data['paymentPeriod'] !== null) {
            $object->setPaymentPeriod($data['paymentPeriod']);
        } elseif (\array_key_exists('paymentPeriod', $data) && $data['paymentPeriod'] === null) {
            $object->setPaymentPeriod(null);
        }
        if (\array_key_exists('tax', $data) && $data['tax'] !== null) {
            $object->setTax($data['tax']);
        } elseif (\array_key_exists('tax', $data) && $data['tax'] === null) {
            $object->setTax(null);
        }
        if (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] !== null) {
            $object->setHourlyRate($data['hourlyRate']);
        } elseif (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] === null) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('mileageRate', $data) && $data['mileageRate'] !== null) {
            $object->setMileageRate($data['mileageRate']);
        } elseif (\array_key_exists('mileageRate', $data) && $data['mileageRate'] === null) {
            $object->setMileageRate(null);
        }
        if (\array_key_exists('iban', $data) && $data['iban'] !== null) {
            $object->setIban($data['iban']);
        } elseif (\array_key_exists('iban', $data) && $data['iban'] === null) {
            $object->setIban(null);
        }
        if (\array_key_exists('bic', $data) && $data['bic'] !== null) {
            $object->setBic($data['bic']);
        } elseif (\array_key_exists('bic', $data) && $data['bic'] === null) {
            $object->setBic(null);
        }
        if (\array_key_exists('vatNumber', $data) && $data['vatNumber'] !== null) {
            $object->setVatNumber($data['vatNumber']);
        } elseif (\array_key_exists('vatNumber', $data) && $data['vatNumber'] === null) {
            $object->setVatNumber(null);
        }
        if (\array_key_exists('kvkNumber', $data) && $data['kvkNumber'] !== null) {
            $object->setKvkNumber($data['kvkNumber']);
        } elseif (\array_key_exists('kvkNumber', $data) && $data['kvkNumber'] === null) {
            $object->setKvkNumber(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($data['invoiceAddress']);
        } elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('invoicePostalCode', $data) && $data['invoicePostalCode'] !== null) {
            $object->setInvoicePostalCode($data['invoicePostalCode']);
        } elseif (\array_key_exists('invoicePostalCode', $data) && $data['invoicePostalCode'] === null) {
            $object->setInvoicePostalCode(null);
        }
        if (\array_key_exists('invoiceCity', $data) && $data['invoiceCity'] !== null) {
            $object->setInvoiceCity($data['invoiceCity']);
        } elseif (\array_key_exists('invoiceCity', $data) && $data['invoiceCity'] === null) {
            $object->setInvoiceCity(null);
        }
        if (\array_key_exists('invoiceCountry', $data) && $data['invoiceCountry'] !== null) {
            $object->setInvoiceCountry($data['invoiceCountry']);
        } elseif (\array_key_exists('invoiceCountry', $data) && $data['invoiceCountry'] === null) {
            $object->setInvoiceCountry(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('clientId', $data) && $data['clientId'] !== null) {
            $object->setClientId($data['clientId']);
        } elseif (\array_key_exists('clientId', $data) && $data['clientId'] === null) {
            $object->setClientId(null);
        }
        if (\array_key_exists('tagIds', $data) && $data['tagIds'] !== null) {
            $values = [];
            foreach ($data['tagIds'] as $value) {
                $values[] = $value;
            }
            $object->setTagIds($values);
        } elseif (\array_key_exists('tagIds', $data) && $data['tagIds'] === null) {
            $object->setTagIds(null);
        }
        if (\array_key_exists('tagNames', $data) && $data['tagNames'] !== null) {
            $values_1 = [];
            foreach ($data['tagNames'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTagNames($values_1);
        } elseif (\array_key_exists('tagNames', $data) && $data['tagNames'] === null) {
            $object->setTagNames(null);
        }
        if (\array_key_exists('vatRateId', $data) && $data['vatRateId'] !== null) {
            $object->setVatRateId($data['vatRateId']);
        } elseif (\array_key_exists('vatRateId', $data) && $data['vatRateId'] === null) {
            $object->setVatRateId(null);
        }
        if (\array_key_exists('vatRatePercentage', $data) && $data['vatRatePercentage'] !== null) {
            $object->setVatRatePercentage($data['vatRatePercentage']);
        } elseif (\array_key_exists('vatRatePercentage', $data) && $data['vatRatePercentage'] === null) {
            $object->setVatRatePercentage(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getRelationId()) {
            $data['relationId'] = $object->getRelationId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getPostalCode()) {
            $data['postalCode'] = $object->getPostalCode();
        }
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getWebsite()) {
            $data['website'] = $object->getWebsite();
        }
        if (null !== $object->getPaymentPeriod()) {
            $data['paymentPeriod'] = $object->getPaymentPeriod();
        }
        if (null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if (null !== $object->getHourlyRate()) {
            $data['hourlyRate'] = $object->getHourlyRate();
        }
        if (null !== $object->getMileageRate()) {
            $data['mileageRate'] = $object->getMileageRate();
        }
        if (null !== $object->getIban()) {
            $data['iban'] = $object->getIban();
        }
        if (null !== $object->getBic()) {
            $data['bic'] = $object->getBic();
        }
        if (null !== $object->getVatNumber()) {
            $data['vatNumber'] = $object->getVatNumber();
        }
        if (null !== $object->getKvkNumber()) {
            $data['kvkNumber'] = $object->getKvkNumber();
        }
        if (null !== $object->getInvoiceAddress()) {
            $data['invoiceAddress'] = $object->getInvoiceAddress();
        }
        if (null !== $object->getInvoicePostalCode()) {
            $data['invoicePostalCode'] = $object->getInvoicePostalCode();
        }
        if (null !== $object->getInvoiceCity()) {
            $data['invoiceCity'] = $object->getInvoiceCity();
        }
        if (null !== $object->getInvoiceCountry()) {
            $data['invoiceCountry'] = $object->getInvoiceCountry();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if (null !== $object->getTagIds()) {
            $values = [];
            foreach ($object->getTagIds() as $value) {
                $values[] = $value;
            }
            $data['tagIds'] = $values;
        }
        if (null !== $object->getTagNames()) {
            $values_1 = [];
            foreach ($object->getTagNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['tagNames'] = $values_1;
        }
        if (null !== $object->getVatRateId()) {
            $data['vatRateId'] = $object->getVatRateId();
        }
        if (null !== $object->getVatRatePercentage()) {
            $data['vatRatePercentage'] = $object->getVatRatePercentage();
        }

        return $data;
    }
}
