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

class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\User';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\User';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\User();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('userName', $data) && $data['userName'] !== null) {
            $object->setUserName($data['userName']);
        } elseif (\array_key_exists('userName', $data) && $data['userName'] === null) {
            $object->setUserName(null);
        }
        if (\array_key_exists('displayName', $data) && $data['displayName'] !== null) {
            $object->setDisplayName($data['displayName']);
        } elseif (\array_key_exists('displayName', $data) && $data['displayName'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('accountType', $data) && $data['accountType'] !== null) {
            $object->setAccountType($data['accountType']);
        } elseif (\array_key_exists('accountType', $data) && $data['accountType'] === null) {
            $object->setAccountType(null);
        }
        if (\array_key_exists('isLocked', $data) && $data['isLocked'] !== null) {
            $object->setIsLocked($data['isLocked']);
        } elseif (\array_key_exists('isLocked', $data) && $data['isLocked'] === null) {
            $object->setIsLocked(null);
        }
        if (\array_key_exists('picture', $data) && $data['picture'] !== null) {
            $object->setPicture($data['picture']);
        } elseif (\array_key_exists('picture', $data) && $data['picture'] === null) {
            $object->setPicture(null);
        }
        if (\array_key_exists('tagNames', $data) && $data['tagNames'] !== null) {
            $values = [];
            foreach ($data['tagNames'] as $value) {
                $values[] = $value;
            }
            $object->setTagNames($values);
        } elseif (\array_key_exists('tagNames', $data) && $data['tagNames'] === null) {
            $object->setTagNames(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        } elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('contractHours', $data) && $data['contractHours'] !== null) {
            $object->setContractHours($data['contractHours']);
        } elseif (\array_key_exists('contractHours', $data) && $data['contractHours'] === null) {
            $object->setContractHours(null);
        }
        if (\array_key_exists('contractHourlyRate', $data) && $data['contractHourlyRate'] !== null) {
            $object->setContractHourlyRate($data['contractHourlyRate']);
        } elseif (\array_key_exists('contractHourlyRate', $data) && $data['contractHourlyRate'] === null) {
            $object->setContractHourlyRate(null);
        }
        if (\array_key_exists('contractCostHourlyRate', $data) && $data['contractCostHourlyRate'] !== null) {
            $object->setContractCostHourlyRate($data['contractCostHourlyRate']);
        } elseif (\array_key_exists('contractCostHourlyRate', $data) && $data['contractCostHourlyRate'] === null) {
            $object->setContractCostHourlyRate(null);
        }
        if (\array_key_exists('contractStartDate', $data) && $data['contractStartDate'] !== null) {
            $object->setContractStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['contractStartDate']));
        } elseif (\array_key_exists('contractStartDate', $data) && $data['contractStartDate'] === null) {
            $object->setContractStartDate(null);
        }
        if (\array_key_exists('contractEndDate', $data) && $data['contractEndDate'] !== null) {
            $object->setContractEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['contractEndDate']));
        } elseif (\array_key_exists('contractEndDate', $data) && $data['contractEndDate'] === null) {
            $object->setContractEndDate(null);
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['created']));
        } elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('teamName', $data) && $data['teamName'] !== null) {
            $object->setTeamName($data['teamName']);
        } elseif (\array_key_exists('teamName', $data) && $data['teamName'] === null) {
            $object->setTeamName(null);
        }
        if (\array_key_exists('employeeNumber', $data) && $data['employeeNumber'] !== null) {
            $object->setEmployeeNumber($data['employeeNumber']);
        } elseif (\array_key_exists('employeeNumber', $data) && $data['employeeNumber'] === null) {
            $object->setEmployeeNumber(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getUserName()) {
            $data['userName'] = $object->getUserName();
        }
        if (null !== $object->getDisplayName()) {
            $data['displayName'] = $object->getDisplayName();
        }
        if (null !== $object->getAccountType()) {
            $data['accountType'] = $object->getAccountType();
        }
        if (null !== $object->getIsLocked()) {
            $data['isLocked'] = $object->getIsLocked();
        }
        if (null !== $object->getPicture()) {
            $data['picture'] = $object->getPicture();
        }
        if (null !== $object->getTagNames()) {
            $values = [];
            foreach ($object->getTagNames() as $value) {
                $values[] = $value;
            }
            $data['tagNames'] = $values;
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getContractHours()) {
            $data['contractHours'] = $object->getContractHours();
        }
        if (null !== $object->getContractHourlyRate()) {
            $data['contractHourlyRate'] = $object->getContractHourlyRate();
        }
        if (null !== $object->getContractCostHourlyRate()) {
            $data['contractCostHourlyRate'] = $object->getContractCostHourlyRate();
        }
        if (null !== $object->getContractStartDate()) {
            $data['contractStartDate'] = $object->getContractStartDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getContractEndDate()) {
            $data['contractEndDate'] = $object->getContractEndDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getTeamName()) {
            $data['teamName'] = $object->getTeamName();
        }
        if (null !== $object->getEmployeeNumber()) {
            $data['employeeNumber'] = $object->getEmployeeNumber();
        }

        return $data;
    }
}
