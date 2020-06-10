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

class ProjectInsightsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\ProjectInsights();
        if (property_exists($data, 'totalHours') && $data->{'totalHours'} !== null) {
            $object->setTotalHours($data->{'totalHours'});
        } elseif (property_exists($data, 'totalHours') && $data->{'totalHours'} === null) {
            $object->setTotalHours(null);
        }
        if (property_exists($data, 'totalHoursBillable') && $data->{'totalHoursBillable'} !== null) {
            $object->setTotalHoursBillable($data->{'totalHoursBillable'});
        } elseif (property_exists($data, 'totalHoursBillable') && $data->{'totalHoursBillable'} === null) {
            $object->setTotalHoursBillable(null);
        }
        if (property_exists($data, 'totalHoursNonBillable') && $data->{'totalHoursNonBillable'} !== null) {
            $object->setTotalHoursNonBillable($data->{'totalHoursNonBillable'});
        } elseif (property_exists($data, 'totalHoursNonBillable') && $data->{'totalHoursNonBillable'} === null) {
            $object->setTotalHoursNonBillable(null);
        }
        if (property_exists($data, 'totalUninvoiced') && $data->{'totalUninvoiced'} !== null) {
            $object->setTotalUninvoiced($data->{'totalUninvoiced'});
        } elseif (property_exists($data, 'totalUninvoiced') && $data->{'totalUninvoiced'} === null) {
            $object->setTotalUninvoiced(null);
        }
        if (property_exists($data, 'totalInvoiced') && $data->{'totalInvoiced'} !== null) {
            $object->setTotalInvoiced($data->{'totalInvoiced'});
        } elseif (property_exists($data, 'totalInvoiced') && $data->{'totalInvoiced'} === null) {
            $object->setTotalInvoiced(null);
        }
        if (property_exists($data, 'totalWrittenOff') && $data->{'totalWrittenOff'} !== null) {
            $object->setTotalWrittenOff($data->{'totalWrittenOff'});
        } elseif (property_exists($data, 'totalWrittenOff') && $data->{'totalWrittenOff'} === null) {
            $object->setTotalWrittenOff(null);
        }
        if (property_exists($data, 'totalScheduled') && $data->{'totalScheduled'} !== null) {
            $object->setTotalScheduled($data->{'totalScheduled'});
        } elseif (property_exists($data, 'totalScheduled') && $data->{'totalScheduled'} === null) {
            $object->setTotalScheduled(null);
        }
        if (property_exists($data, 'budgetPercentage') && $data->{'budgetPercentage'} !== null) {
            $object->setBudgetPercentage($data->{'budgetPercentage'});
        } elseif (property_exists($data, 'budgetPercentage') && $data->{'budgetPercentage'} === null) {
            $object->setBudgetPercentage(null);
        }
        if (property_exists($data, 'budget') && $data->{'budget'} !== null) {
            $object->setBudget($data->{'budget'});
        } elseif (property_exists($data, 'budget') && $data->{'budget'} === null) {
            $object->setBudget(null);
        }
        if (property_exists($data, 'spend') && $data->{'spend'} !== null) {
            $object->setSpend($data->{'spend'});
        } elseif (property_exists($data, 'spend') && $data->{'spend'} === null) {
            $object->setSpend(null);
        }
        if (property_exists($data, 'remainingBudget') && $data->{'remainingBudget'} !== null) {
            $object->setRemainingBudget($data->{'remainingBudget'});
        } elseif (property_exists($data, 'remainingBudget') && $data->{'remainingBudget'} === null) {
            $object->setRemainingBudget(null);
        }
        if (property_exists($data, 'costs') && $data->{'costs'} !== null) {
            $object->setCosts($data->{'costs'});
        } elseif (property_exists($data, 'costs') && $data->{'costs'} === null) {
            $object->setCosts(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTotalHours()) {
            $data->{'totalHours'} = $object->getTotalHours();
        } else {
            $data->{'totalHours'} = null;
        }
        if (null !== $object->getTotalHoursBillable()) {
            $data->{'totalHoursBillable'} = $object->getTotalHoursBillable();
        } else {
            $data->{'totalHoursBillable'} = null;
        }
        if (null !== $object->getTotalHoursNonBillable()) {
            $data->{'totalHoursNonBillable'} = $object->getTotalHoursNonBillable();
        } else {
            $data->{'totalHoursNonBillable'} = null;
        }
        if (null !== $object->getTotalUninvoiced()) {
            $data->{'totalUninvoiced'} = $object->getTotalUninvoiced();
        } else {
            $data->{'totalUninvoiced'} = null;
        }
        if (null !== $object->getTotalInvoiced()) {
            $data->{'totalInvoiced'} = $object->getTotalInvoiced();
        } else {
            $data->{'totalInvoiced'} = null;
        }
        if (null !== $object->getTotalWrittenOff()) {
            $data->{'totalWrittenOff'} = $object->getTotalWrittenOff();
        } else {
            $data->{'totalWrittenOff'} = null;
        }
        if (null !== $object->getTotalScheduled()) {
            $data->{'totalScheduled'} = $object->getTotalScheduled();
        } else {
            $data->{'totalScheduled'} = null;
        }
        if (null !== $object->getBudgetPercentage()) {
            $data->{'budgetPercentage'} = $object->getBudgetPercentage();
        } else {
            $data->{'budgetPercentage'} = null;
        }
        if (null !== $object->getBudget()) {
            $data->{'budget'} = $object->getBudget();
        } else {
            $data->{'budget'} = null;
        }
        if (null !== $object->getSpend()) {
            $data->{'spend'} = $object->getSpend();
        } else {
            $data->{'spend'} = null;
        }
        if (null !== $object->getRemainingBudget()) {
            $data->{'remainingBudget'} = $object->getRemainingBudget();
        } else {
            $data->{'remainingBudget'} = null;
        }
        if (null !== $object->getCosts()) {
            $data->{'costs'} = $object->getCosts();
        } else {
            $data->{'costs'} = null;
        }

        return $data;
    }
}
