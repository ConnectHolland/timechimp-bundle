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

class TimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Time';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Time';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Time();
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
        if (property_exists($data, 'projectTaskId') && $data->{'projectTaskId'} !== null) {
            $object->setProjectTaskId($data->{'projectTaskId'});
        } elseif (property_exists($data, 'projectTaskId') && $data->{'projectTaskId'} === null) {
            $object->setProjectTaskId(null);
        }
        if (property_exists($data, 'taskId') && $data->{'taskId'} !== null) {
            $object->setTaskId($data->{'taskId'});
        } elseif (property_exists($data, 'taskId') && $data->{'taskId'} === null) {
            $object->setTaskId(null);
        }
        if (property_exists($data, 'taskName') && $data->{'taskName'} !== null) {
            $object->setTaskName($data->{'taskName'});
        } elseif (property_exists($data, 'taskName') && $data->{'taskName'} === null) {
            $object->setTaskName(null);
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
        if (property_exists($data, 'userTags') && $data->{'userTags'} !== null) {
            $values = [];
            foreach ($data->{'userTags'} as $value) {
                $values[] = $value;
            }
            $object->setUserTags($values);
        } elseif (property_exists($data, 'userTags') && $data->{'userTags'} === null) {
            $object->setUserTags(null);
        }
        if (property_exists($data, 'date') && $data->{'date'} !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'date'}));
        } elseif (property_exists($data, 'date') && $data->{'date'} === null) {
            $object->setDate(null);
        }
        if (property_exists($data, 'hours') && $data->{'hours'} !== null) {
            $object->setHours($data->{'hours'});
        } elseif (property_exists($data, 'hours') && $data->{'hours'} === null) {
            $object->setHours(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        } elseif (property_exists($data, 'status') && $data->{'status'} === null) {
            $object->setStatus(null);
        }
        if (property_exists($data, 'startEnd') && $data->{'startEnd'} !== null) {
            $object->setStartEnd($data->{'startEnd'});
        } elseif (property_exists($data, 'startEnd') && $data->{'startEnd'} === null) {
            $object->setStartEnd(null);
        }
        if (property_exists($data, 'start') && $data->{'start'} !== null) {
            $object->setStart($data->{'start'});
        } elseif (property_exists($data, 'start') && $data->{'start'} === null) {
            $object->setStart(null);
        }
        if (property_exists($data, 'end') && $data->{'end'} !== null) {
            $object->setEnd($data->{'end'});
        } elseif (property_exists($data, 'end') && $data->{'end'} === null) {
            $object->setEnd(null);
        }
        if (property_exists($data, 'pause') && $data->{'pause'} !== null) {
            $object->setPause($data->{'pause'});
        } elseif (property_exists($data, 'pause') && $data->{'pause'} === null) {
            $object->setPause(null);
        }
        if (property_exists($data, 'externalName') && $data->{'externalName'} !== null) {
            $object->setExternalName($data->{'externalName'});
        } elseif (property_exists($data, 'externalName') && $data->{'externalName'} === null) {
            $object->setExternalName(null);
        }
        if (property_exists($data, 'externalUrl') && $data->{'externalUrl'} !== null) {
            $object->setExternalUrl($data->{'externalUrl'});
        } elseif (property_exists($data, 'externalUrl') && $data->{'externalUrl'} === null) {
            $object->setExternalUrl(null);
        }
        if (property_exists($data, 'statusIntern') && $data->{'statusIntern'} !== null) {
            $object->setStatusIntern($data->{'statusIntern'});
        } elseif (property_exists($data, 'statusIntern') && $data->{'statusIntern'} === null) {
            $object->setStatusIntern(null);
        }
        if (property_exists($data, 'statusExtern') && $data->{'statusExtern'} !== null) {
            $object->setStatusExtern($data->{'statusExtern'});
        } elseif (property_exists($data, 'statusExtern') && $data->{'statusExtern'} === null) {
            $object->setStatusExtern(null);
        }
        if (property_exists($data, 'tags') && $data->{'tags'} !== null) {
            $values_1 = [];
            foreach ($data->{'tags'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Tag', 'json', $context);
            }
            $object->setTags($values_1);
        } elseif (property_exists($data, 'tags') && $data->{'tags'} === null) {
            $object->setTags(null);
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
        if (null !== $object->getProjectTaskId()) {
            $data->{'projectTaskId'} = $object->getProjectTaskId();
        } else {
            $data->{'projectTaskId'} = null;
        }
        if (null !== $object->getTaskId()) {
            $data->{'taskId'} = $object->getTaskId();
        } else {
            $data->{'taskId'} = null;
        }
        if (null !== $object->getTaskName()) {
            $data->{'taskName'} = $object->getTaskName();
        } else {
            $data->{'taskName'} = null;
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
        if (null !== $object->getUserTags()) {
            $values = [];
            foreach ($object->getUserTags() as $value) {
                $values[] = $value;
            }
            $data->{'userTags'} = $values;
        } else {
            $data->{'userTags'} = null;
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'date'} = null;
        }
        if (null !== $object->getHours()) {
            $data->{'hours'} = $object->getHours();
        } else {
            $data->{'hours'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        } else {
            $data->{'status'} = null;
        }
        if (null !== $object->getStartEnd()) {
            $data->{'startEnd'} = $object->getStartEnd();
        } else {
            $data->{'startEnd'} = null;
        }
        if (null !== $object->getStart()) {
            $data->{'start'} = $object->getStart();
        } else {
            $data->{'start'} = null;
        }
        if (null !== $object->getEnd()) {
            $data->{'end'} = $object->getEnd();
        } else {
            $data->{'end'} = null;
        }
        if (null !== $object->getPause()) {
            $data->{'pause'} = $object->getPause();
        } else {
            $data->{'pause'} = null;
        }
        if (null !== $object->getExternalName()) {
            $data->{'externalName'} = $object->getExternalName();
        } else {
            $data->{'externalName'} = null;
        }
        if (null !== $object->getExternalUrl()) {
            $data->{'externalUrl'} = $object->getExternalUrl();
        } else {
            $data->{'externalUrl'} = null;
        }
        if (null !== $object->getStatusIntern()) {
            $data->{'statusIntern'} = $object->getStatusIntern();
        } else {
            $data->{'statusIntern'} = null;
        }
        if (null !== $object->getStatusExtern()) {
            $data->{'statusExtern'} = $object->getStatusExtern();
        } else {
            $data->{'statusExtern'} = null;
        }
        if (null !== $object->getTags()) {
            $values_1 = [];
            foreach ($object->getTags() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'tags'} = $values_1;
        } else {
            $data->{'tags'} = null;
        }

        return $data;
    }
}
