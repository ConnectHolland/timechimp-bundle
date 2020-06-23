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

class TimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Time();
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
        if (\array_key_exists('projectTaskId', $data) && $data['projectTaskId'] !== null) {
            $object->setProjectTaskId($data['projectTaskId']);
        } elseif (\array_key_exists('projectTaskId', $data) && $data['projectTaskId'] === null) {
            $object->setProjectTaskId(null);
        }
        if (\array_key_exists('taskId', $data) && $data['taskId'] !== null) {
            $object->setTaskId($data['taskId']);
        } elseif (\array_key_exists('taskId', $data) && $data['taskId'] === null) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('taskName', $data) && $data['taskName'] !== null) {
            $object->setTaskName($data['taskName']);
        } elseif (\array_key_exists('taskName', $data) && $data['taskName'] === null) {
            $object->setTaskName(null);
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
        if (\array_key_exists('userTags', $data) && $data['userTags'] !== null) {
            $values = [];
            foreach ($data['userTags'] as $value) {
                $values[] = $value;
            }
            $object->setUserTags($values);
        } elseif (\array_key_exists('userTags', $data) && $data['userTags'] === null) {
            $object->setUserTags(null);
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['date']));
        } elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('hours', $data) && $data['hours'] !== null) {
            $object->setHours($data['hours']);
        } elseif (\array_key_exists('hours', $data) && $data['hours'] === null) {
            $object->setHours(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('startEnd', $data) && $data['startEnd'] !== null) {
            $object->setStartEnd($data['startEnd']);
        } elseif (\array_key_exists('startEnd', $data) && $data['startEnd'] === null) {
            $object->setStartEnd(null);
        }
        if (\array_key_exists('start', $data) && $data['start'] !== null) {
            $object->setStart($data['start']);
        } elseif (\array_key_exists('start', $data) && $data['start'] === null) {
            $object->setStart(null);
        }
        if (\array_key_exists('end', $data) && $data['end'] !== null) {
            $object->setEnd($data['end']);
        } elseif (\array_key_exists('end', $data) && $data['end'] === null) {
            $object->setEnd(null);
        }
        if (\array_key_exists('pause', $data) && $data['pause'] !== null) {
            $object->setPause($data['pause']);
        } elseif (\array_key_exists('pause', $data) && $data['pause'] === null) {
            $object->setPause(null);
        }
        if (\array_key_exists('externalName', $data) && $data['externalName'] !== null) {
            $object->setExternalName($data['externalName']);
        } elseif (\array_key_exists('externalName', $data) && $data['externalName'] === null) {
            $object->setExternalName(null);
        }
        if (\array_key_exists('externalUrl', $data) && $data['externalUrl'] !== null) {
            $object->setExternalUrl($data['externalUrl']);
        } elseif (\array_key_exists('externalUrl', $data) && $data['externalUrl'] === null) {
            $object->setExternalUrl(null);
        }
        if (\array_key_exists('statusIntern', $data) && $data['statusIntern'] !== null) {
            $object->setStatusIntern($data['statusIntern']);
        } elseif (\array_key_exists('statusIntern', $data) && $data['statusIntern'] === null) {
            $object->setStatusIntern(null);
        }
        if (\array_key_exists('statusExtern', $data) && $data['statusExtern'] !== null) {
            $object->setStatusExtern($data['statusExtern']);
        } elseif (\array_key_exists('statusExtern', $data) && $data['statusExtern'] === null) {
            $object->setStatusExtern(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Tag', 'json', $context);
            }
            $object->setTags($values_1);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
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
        if (null !== $object->getProjectTaskId()) {
            $data['projectTaskId'] = $object->getProjectTaskId();
        }
        if (null !== $object->getTaskId()) {
            $data['taskId'] = $object->getTaskId();
        }
        if (null !== $object->getTaskName()) {
            $data['taskName'] = $object->getTaskName();
        }
        if (null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        if (null !== $object->getUserDisplayName()) {
            $data['userDisplayName'] = $object->getUserDisplayName();
        }
        if (null !== $object->getUserTags()) {
            $values = [];
            foreach ($object->getUserTags() as $value) {
                $values[] = $value;
            }
            $data['userTags'] = $values;
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getStartEnd()) {
            $data['startEnd'] = $object->getStartEnd();
        }
        if (null !== $object->getStart()) {
            $data['start'] = $object->getStart();
        }
        if (null !== $object->getEnd()) {
            $data['end'] = $object->getEnd();
        }
        if (null !== $object->getPause()) {
            $data['pause'] = $object->getPause();
        }
        if (null !== $object->getExternalName()) {
            $data['externalName'] = $object->getExternalName();
        }
        if (null !== $object->getExternalUrl()) {
            $data['externalUrl'] = $object->getExternalUrl();
        }
        if (null !== $object->getStatusIntern()) {
            $data['statusIntern'] = $object->getStatusIntern();
        }
        if (null !== $object->getStatusExtern()) {
            $data['statusExtern'] = $object->getStatusExtern();
        }
        if (null !== $object->getTags()) {
            $values_1 = [];
            foreach ($object->getTags() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['tags'] = $values_1;
        }

        return $data;
    }
}
