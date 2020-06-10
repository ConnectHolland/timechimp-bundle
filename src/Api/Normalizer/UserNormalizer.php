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

class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\User();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'userName') && $data->{'userName'} !== null) {
            $object->setUserName($data->{'userName'});
        } elseif (property_exists($data, 'userName') && $data->{'userName'} === null) {
            $object->setUserName(null);
        }
        if (property_exists($data, 'displayName') && $data->{'displayName'} !== null) {
            $object->setDisplayName($data->{'displayName'});
        } elseif (property_exists($data, 'displayName') && $data->{'displayName'} === null) {
            $object->setDisplayName(null);
        }
        if (property_exists($data, 'accountType') && $data->{'accountType'} !== null) {
            $object->setAccountType($data->{'accountType'});
        } elseif (property_exists($data, 'accountType') && $data->{'accountType'} === null) {
            $object->setAccountType(null);
        }
        if (property_exists($data, 'isLocked') && $data->{'isLocked'} !== null) {
            $object->setIsLocked($data->{'isLocked'});
        } elseif (property_exists($data, 'isLocked') && $data->{'isLocked'} === null) {
            $object->setIsLocked(null);
        }
        if (property_exists($data, 'picture') && $data->{'picture'} !== null) {
            $object->setPicture($data->{'picture'});
        } elseif (property_exists($data, 'picture') && $data->{'picture'} === null) {
            $object->setPicture(null);
        }
        if (property_exists($data, 'tagNames') && $data->{'tagNames'} !== null) {
            $values = [];
            foreach ($data->{'tagNames'} as $value) {
                $values[] = $value;
            }
            $object->setTagNames($values);
        } elseif (property_exists($data, 'tagNames') && $data->{'tagNames'} === null) {
            $object->setTagNames(null);
        }
        if (property_exists($data, 'language') && $data->{'language'} !== null) {
            $object->setLanguage($data->{'language'});
        } elseif (property_exists($data, 'language') && $data->{'language'} === null) {
            $object->setLanguage(null);
        }
        if (property_exists($data, 'contractHours') && $data->{'contractHours'} !== null) {
            $object->setContractHours($data->{'contractHours'});
        } elseif (property_exists($data, 'contractHours') && $data->{'contractHours'} === null) {
            $object->setContractHours(null);
        }
        if (property_exists($data, 'contractHourlyRate') && $data->{'contractHourlyRate'} !== null) {
            $object->setContractHourlyRate($data->{'contractHourlyRate'});
        } elseif (property_exists($data, 'contractHourlyRate') && $data->{'contractHourlyRate'} === null) {
            $object->setContractHourlyRate(null);
        }
        if (property_exists($data, 'contractCostHourlyRate') && $data->{'contractCostHourlyRate'} !== null) {
            $object->setContractCostHourlyRate($data->{'contractCostHourlyRate'});
        } elseif (property_exists($data, 'contractCostHourlyRate') && $data->{'contractCostHourlyRate'} === null) {
            $object->setContractCostHourlyRate(null);
        }
        if (property_exists($data, 'contractStartDate') && $data->{'contractStartDate'} !== null) {
            $object->setContractStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'contractStartDate'}));
        } elseif (property_exists($data, 'contractStartDate') && $data->{'contractStartDate'} === null) {
            $object->setContractStartDate(null);
        }
        if (property_exists($data, 'contractEndDate') && $data->{'contractEndDate'} !== null) {
            $object->setContractEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'contractEndDate'}));
        } elseif (property_exists($data, 'contractEndDate') && $data->{'contractEndDate'} === null) {
            $object->setContractEndDate(null);
        }
        if (property_exists($data, 'created') && $data->{'created'} !== null) {
            $object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v', $data->{'created'}));
        } elseif (property_exists($data, 'created') && $data->{'created'} === null) {
            $object->setCreated(null);
        }
        if (property_exists($data, 'teamName') && $data->{'teamName'} !== null) {
            $object->setTeamName($data->{'teamName'});
        } elseif (property_exists($data, 'teamName') && $data->{'teamName'} === null) {
            $object->setTeamName(null);
        }
        if (property_exists($data, 'employeeNumber') && $data->{'employeeNumber'} !== null) {
            $object->setEmployeeNumber($data->{'employeeNumber'});
        } elseif (property_exists($data, 'employeeNumber') && $data->{'employeeNumber'} === null) {
            $object->setEmployeeNumber(null);
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
        if (null !== $object->getUserName()) {
            $data->{'userName'} = $object->getUserName();
        } else {
            $data->{'userName'} = null;
        }
        if (null !== $object->getDisplayName()) {
            $data->{'displayName'} = $object->getDisplayName();
        } else {
            $data->{'displayName'} = null;
        }
        if (null !== $object->getAccountType()) {
            $data->{'accountType'} = $object->getAccountType();
        } else {
            $data->{'accountType'} = null;
        }
        if (null !== $object->getIsLocked()) {
            $data->{'isLocked'} = $object->getIsLocked();
        } else {
            $data->{'isLocked'} = null;
        }
        if (null !== $object->getPicture()) {
            $data->{'picture'} = $object->getPicture();
        } else {
            $data->{'picture'} = null;
        }
        if (null !== $object->getTagNames()) {
            $values = [];
            foreach ($object->getTagNames() as $value) {
                $values[] = $value;
            }
            $data->{'tagNames'} = $values;
        } else {
            $data->{'tagNames'} = null;
        }
        if (null !== $object->getLanguage()) {
            $data->{'language'} = $object->getLanguage();
        } else {
            $data->{'language'} = null;
        }
        if (null !== $object->getContractHours()) {
            $data->{'contractHours'} = $object->getContractHours();
        } else {
            $data->{'contractHours'} = null;
        }
        if (null !== $object->getContractHourlyRate()) {
            $data->{'contractHourlyRate'} = $object->getContractHourlyRate();
        } else {
            $data->{'contractHourlyRate'} = null;
        }
        if (null !== $object->getContractCostHourlyRate()) {
            $data->{'contractCostHourlyRate'} = $object->getContractCostHourlyRate();
        } else {
            $data->{'contractCostHourlyRate'} = null;
        }
        if (null !== $object->getContractStartDate()) {
            $data->{'contractStartDate'} = $object->getContractStartDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'contractStartDate'} = null;
        }
        if (null !== $object->getContractEndDate()) {
            $data->{'contractEndDate'} = $object->getContractEndDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'contractEndDate'} = null;
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'created'} = null;
        }
        if (null !== $object->getTeamName()) {
            $data->{'teamName'} = $object->getTeamName();
        } else {
            $data->{'teamName'} = null;
        }
        if (null !== $object->getEmployeeNumber()) {
            $data->{'employeeNumber'} = $object->getEmployeeNumber();
        } else {
            $data->{'employeeNumber'} = null;
        }

        return $data;
    }
}
