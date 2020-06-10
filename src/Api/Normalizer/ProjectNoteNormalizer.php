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

class ProjectNoteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectNote';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectNote';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectNote();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        } elseif (property_exists($data, 'description') && $data->{'description'} === null) {
            $object->setDescription(null);
        }
        if (property_exists($data, 'date') && $data->{'date'} !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'date'}));
        } elseif (property_exists($data, 'date') && $data->{'date'} === null) {
            $object->setDate(null);
        }
        if (property_exists($data, 'projectId') && $data->{'projectId'} !== null) {
            $object->setProjectId($data->{'projectId'});
        } elseif (property_exists($data, 'projectId') && $data->{'projectId'} === null) {
            $object->setProjectId(null);
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
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        } else {
            $data->{'description'} = null;
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'date'} = null;
        }
        if (null !== $object->getProjectId()) {
            $data->{'projectId'} = $object->getProjectId();
        } else {
            $data->{'projectId'} = null;
        }

        return $data;
    }
}
