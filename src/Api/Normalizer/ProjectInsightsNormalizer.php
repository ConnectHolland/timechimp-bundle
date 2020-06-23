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

class ProjectInsightsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectInsights';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectInsights';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectInsights();
        if (\array_key_exists('totalHours', $data) && $data['totalHours'] !== null) {
            $object->setTotalHours($data['totalHours']);
        } elseif (\array_key_exists('totalHours', $data) && $data['totalHours'] === null) {
            $object->setTotalHours(null);
        }
        if (\array_key_exists('totalHoursBillable', $data) && $data['totalHoursBillable'] !== null) {
            $object->setTotalHoursBillable($data['totalHoursBillable']);
        } elseif (\array_key_exists('totalHoursBillable', $data) && $data['totalHoursBillable'] === null) {
            $object->setTotalHoursBillable(null);
        }
        if (\array_key_exists('totalHoursNonBillable', $data) && $data['totalHoursNonBillable'] !== null) {
            $object->setTotalHoursNonBillable($data['totalHoursNonBillable']);
        } elseif (\array_key_exists('totalHoursNonBillable', $data) && $data['totalHoursNonBillable'] === null) {
            $object->setTotalHoursNonBillable(null);
        }
        if (\array_key_exists('totalUninvoiced', $data) && $data['totalUninvoiced'] !== null) {
            $object->setTotalUninvoiced($data['totalUninvoiced']);
        } elseif (\array_key_exists('totalUninvoiced', $data) && $data['totalUninvoiced'] === null) {
            $object->setTotalUninvoiced(null);
        }
        if (\array_key_exists('totalInvoiced', $data) && $data['totalInvoiced'] !== null) {
            $object->setTotalInvoiced($data['totalInvoiced']);
        } elseif (\array_key_exists('totalInvoiced', $data) && $data['totalInvoiced'] === null) {
            $object->setTotalInvoiced(null);
        }
        if (\array_key_exists('totalWrittenOff', $data) && $data['totalWrittenOff'] !== null) {
            $object->setTotalWrittenOff($data['totalWrittenOff']);
        } elseif (\array_key_exists('totalWrittenOff', $data) && $data['totalWrittenOff'] === null) {
            $object->setTotalWrittenOff(null);
        }
        if (\array_key_exists('totalScheduled', $data) && $data['totalScheduled'] !== null) {
            $object->setTotalScheduled($data['totalScheduled']);
        } elseif (\array_key_exists('totalScheduled', $data) && $data['totalScheduled'] === null) {
            $object->setTotalScheduled(null);
        }
        if (\array_key_exists('budgetPercentage', $data) && $data['budgetPercentage'] !== null) {
            $object->setBudgetPercentage($data['budgetPercentage']);
        } elseif (\array_key_exists('budgetPercentage', $data) && $data['budgetPercentage'] === null) {
            $object->setBudgetPercentage(null);
        }
        if (\array_key_exists('budget', $data) && $data['budget'] !== null) {
            $object->setBudget($data['budget']);
        } elseif (\array_key_exists('budget', $data) && $data['budget'] === null) {
            $object->setBudget(null);
        }
        if (\array_key_exists('spend', $data) && $data['spend'] !== null) {
            $object->setSpend($data['spend']);
        } elseif (\array_key_exists('spend', $data) && $data['spend'] === null) {
            $object->setSpend(null);
        }
        if (\array_key_exists('remainingBudget', $data) && $data['remainingBudget'] !== null) {
            $object->setRemainingBudget($data['remainingBudget']);
        } elseif (\array_key_exists('remainingBudget', $data) && $data['remainingBudget'] === null) {
            $object->setRemainingBudget(null);
        }
        if (\array_key_exists('costs', $data) && $data['costs'] !== null) {
            $object->setCosts($data['costs']);
        } elseif (\array_key_exists('costs', $data) && $data['costs'] === null) {
            $object->setCosts(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getTotalHours()) {
            $data['totalHours'] = $object->getTotalHours();
        }
        if (null !== $object->getTotalHoursBillable()) {
            $data['totalHoursBillable'] = $object->getTotalHoursBillable();
        }
        if (null !== $object->getTotalHoursNonBillable()) {
            $data['totalHoursNonBillable'] = $object->getTotalHoursNonBillable();
        }
        if (null !== $object->getTotalUninvoiced()) {
            $data['totalUninvoiced'] = $object->getTotalUninvoiced();
        }
        if (null !== $object->getTotalInvoiced()) {
            $data['totalInvoiced'] = $object->getTotalInvoiced();
        }
        if (null !== $object->getTotalWrittenOff()) {
            $data['totalWrittenOff'] = $object->getTotalWrittenOff();
        }
        if (null !== $object->getTotalScheduled()) {
            $data['totalScheduled'] = $object->getTotalScheduled();
        }
        if (null !== $object->getBudgetPercentage()) {
            $data['budgetPercentage'] = $object->getBudgetPercentage();
        }
        if (null !== $object->getBudget()) {
            $data['budget'] = $object->getBudget();
        }
        if (null !== $object->getSpend()) {
            $data['spend'] = $object->getSpend();
        }
        if (null !== $object->getRemainingBudget()) {
            $data['remainingBudget'] = $object->getRemainingBudget();
        }
        if (null !== $object->getCosts()) {
            $data['costs'] = $object->getCosts();
        }

        return $data;
    }
}
