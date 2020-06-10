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

class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Project';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Project';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Project();
        if (property_exists($data, 'remainingBudgetHours') && $data->{'remainingBudgetHours'} !== null) {
            $object->setRemainingBudgetHours($data->{'remainingBudgetHours'});
        } elseif (property_exists($data, 'remainingBudgetHours') && $data->{'remainingBudgetHours'} === null) {
            $object->setRemainingBudgetHours(null);
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
        if (property_exists($data, 'unspecified') && $data->{'unspecified'} !== null) {
            $object->setUnspecified($data->{'unspecified'});
        } elseif (property_exists($data, 'unspecified') && $data->{'unspecified'} === null) {
            $object->setUnspecified(null);
        }
        if (property_exists($data, 'invoiceDate') && $data->{'invoiceDate'} !== null) {
            $object->setInvoiceDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'invoiceDate'}));
        } elseif (property_exists($data, 'invoiceDate') && $data->{'invoiceDate'} === null) {
            $object->setInvoiceDate(null);
        }
        if (property_exists($data, 'invoiceInInstallments') && $data->{'invoiceInInstallments'} !== null) {
            $object->setInvoiceInInstallments($data->{'invoiceInInstallments'});
        } elseif (property_exists($data, 'invoiceInInstallments') && $data->{'invoiceInInstallments'} === null) {
            $object->setInvoiceInInstallments(null);
        }
        if (property_exists($data, 'budgetNotificationPercentage') && $data->{'budgetNotificationPercentage'} !== null) {
            $object->setBudgetNotificationPercentage($data->{'budgetNotificationPercentage'});
        } elseif (property_exists($data, 'budgetNotificationPercentage') && $data->{'budgetNotificationPercentage'} === null) {
            $object->setBudgetNotificationPercentage(null);
        }
        if (property_exists($data, 'budgetNotificationHasBeenSent') && $data->{'budgetNotificationHasBeenSent'} !== null) {
            $object->setBudgetNotificationHasBeenSent($data->{'budgetNotificationHasBeenSent'});
        } elseif (property_exists($data, 'budgetNotificationHasBeenSent') && $data->{'budgetNotificationHasBeenSent'} === null) {
            $object->setBudgetNotificationHasBeenSent(null);
        }
        if (property_exists($data, 'clientId') && $data->{'clientId'} !== null) {
            $object->setClientId($data->{'clientId'});
        } elseif (property_exists($data, 'clientId') && $data->{'clientId'} === null) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'invoiceStatus') && $data->{'invoiceStatus'} !== null) {
            $object->setInvoiceStatus($data->{'invoiceStatus'});
        } elseif (property_exists($data, 'invoiceStatus') && $data->{'invoiceStatus'} === null) {
            $object->setInvoiceStatus(null);
        }
        if (property_exists($data, 'invoiceId') && $data->{'invoiceId'} !== null) {
            $object->setInvoiceId($data->{'invoiceId'});
        } elseif (property_exists($data, 'invoiceId') && $data->{'invoiceId'} === null) {
            $object->setInvoiceId(null);
        }
        if (property_exists($data, 'color') && $data->{'color'} !== null) {
            $object->setColor($data->{'color'});
        } elseif (property_exists($data, 'color') && $data->{'color'} === null) {
            $object->setColor(null);
        }
        if (property_exists($data, 'visibleOnSchedule') && $data->{'visibleOnSchedule'} !== null) {
            $object->setVisibleOnSchedule($data->{'visibleOnSchedule'});
        } elseif (property_exists($data, 'visibleOnSchedule') && $data->{'visibleOnSchedule'} === null) {
            $object->setVisibleOnSchedule(null);
        }
        if (property_exists($data, 'externalUrl') && $data->{'externalUrl'} !== null) {
            $object->setExternalUrl($data->{'externalUrl'});
        } elseif (property_exists($data, 'externalUrl') && $data->{'externalUrl'} === null) {
            $object->setExternalUrl(null);
        }
        if (property_exists($data, 'externalName') && $data->{'externalName'} !== null) {
            $object->setExternalName($data->{'externalName'});
        } elseif (property_exists($data, 'externalName') && $data->{'externalName'} === null) {
            $object->setExternalName(null);
        }
        if (property_exists($data, 'invoiceReference') && $data->{'invoiceReference'} !== null) {
            $object->setInvoiceReference($data->{'invoiceReference'});
        } elseif (property_exists($data, 'invoiceReference') && $data->{'invoiceReference'} === null) {
            $object->setInvoiceReference(null);
        }
        if (property_exists($data, 'projectTasks') && $data->{'projectTasks'} !== null) {
            $values_2 = [];
            foreach ($data->{'projectTasks'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectTask', 'json', $context);
            }
            $object->setProjectTasks($values_2);
        } elseif (property_exists($data, 'projectTasks') && $data->{'projectTasks'} === null) {
            $object->setProjectTasks(null);
        }
        if (property_exists($data, 'projectUsers') && $data->{'projectUsers'} !== null) {
            $values_3 = [];
            foreach ($data->{'projectUsers'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectUser', 'json', $context);
            }
            $object->setProjectUsers($values_3);
        } elseif (property_exists($data, 'projectUsers') && $data->{'projectUsers'} === null) {
            $object->setProjectUsers(null);
        }
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
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'code') && $data->{'code'} !== null) {
            $object->setCode($data->{'code'});
        } elseif (property_exists($data, 'code') && $data->{'code'} === null) {
            $object->setCode(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'invoiceMethod') && $data->{'invoiceMethod'} !== null) {
            $object->setInvoiceMethod($data->{'invoiceMethod'});
        } elseif (property_exists($data, 'invoiceMethod') && $data->{'invoiceMethod'} === null) {
            $object->setInvoiceMethod(null);
        }
        if (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} !== null) {
            $object->setHourlyRate($data->{'hourlyRate'});
        } elseif (property_exists($data, 'hourlyRate') && $data->{'hourlyRate'} === null) {
            $object->setHourlyRate(null);
        }
        if (property_exists($data, 'rate') && $data->{'rate'} !== null) {
            $object->setRate($data->{'rate'});
        } elseif (property_exists($data, 'rate') && $data->{'rate'} === null) {
            $object->setRate(null);
        }
        if (property_exists($data, 'budgetMethod') && $data->{'budgetMethod'} !== null) {
            $object->setBudgetMethod($data->{'budgetMethod'});
        } elseif (property_exists($data, 'budgetMethod') && $data->{'budgetMethod'} === null) {
            $object->setBudgetMethod(null);
        }
        if (property_exists($data, 'budgetRate') && $data->{'budgetRate'} !== null) {
            $object->setBudgetRate($data->{'budgetRate'});
        } elseif (property_exists($data, 'budgetRate') && $data->{'budgetRate'} === null) {
            $object->setBudgetRate(null);
        }
        if (property_exists($data, 'budgetHours') && $data->{'budgetHours'} !== null) {
            $object->setBudgetHours($data->{'budgetHours'});
        } elseif (property_exists($data, 'budgetHours') && $data->{'budgetHours'} === null) {
            $object->setBudgetHours(null);
        }
        if (property_exists($data, 'startDate') && $data->{'startDate'} !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'startDate'}));
        } elseif (property_exists($data, 'startDate') && $data->{'startDate'} === null) {
            $object->setStartDate(null);
        }
        if (property_exists($data, 'endDate') && $data->{'endDate'} !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'endDate'}));
        } elseif (property_exists($data, 'endDate') && $data->{'endDate'} === null) {
            $object->setEndDate(null);
        }
        if (property_exists($data, 'projectSubscription') && $data->{'projectSubscription'} !== null) {
            $object->setProjectSubscription($this->denormalizer->denormalize($data->{'projectSubscription'}, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectSubscription', 'json', $context));
        } elseif (property_exists($data, 'projectSubscription') && $data->{'projectSubscription'} === null) {
            $object->setProjectSubscription(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRemainingBudgetHours()) {
            $data->{'remainingBudgetHours'} = $object->getRemainingBudgetHours();
        } else {
            $data->{'remainingBudgetHours'} = null;
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
        if (null !== $object->getUnspecified()) {
            $data->{'unspecified'} = $object->getUnspecified();
        } else {
            $data->{'unspecified'} = null;
        }
        if (null !== $object->getInvoiceDate()) {
            $data->{'invoiceDate'} = $object->getInvoiceDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'invoiceDate'} = null;
        }
        if (null !== $object->getInvoiceInInstallments()) {
            $data->{'invoiceInInstallments'} = $object->getInvoiceInInstallments();
        } else {
            $data->{'invoiceInInstallments'} = null;
        }
        if (null !== $object->getBudgetNotificationPercentage()) {
            $data->{'budgetNotificationPercentage'} = $object->getBudgetNotificationPercentage();
        } else {
            $data->{'budgetNotificationPercentage'} = null;
        }
        if (null !== $object->getBudgetNotificationHasBeenSent()) {
            $data->{'budgetNotificationHasBeenSent'} = $object->getBudgetNotificationHasBeenSent();
        } else {
            $data->{'budgetNotificationHasBeenSent'} = null;
        }
        if (null !== $object->getClientId()) {
            $data->{'clientId'} = $object->getClientId();
        } else {
            $data->{'clientId'} = null;
        }
        if (null !== $object->getInvoiceStatus()) {
            $data->{'invoiceStatus'} = $object->getInvoiceStatus();
        } else {
            $data->{'invoiceStatus'} = null;
        }
        if (null !== $object->getInvoiceId()) {
            $data->{'invoiceId'} = $object->getInvoiceId();
        } else {
            $data->{'invoiceId'} = null;
        }
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        } else {
            $data->{'color'} = null;
        }
        if (null !== $object->getVisibleOnSchedule()) {
            $data->{'visibleOnSchedule'} = $object->getVisibleOnSchedule();
        } else {
            $data->{'visibleOnSchedule'} = null;
        }
        if (null !== $object->getExternalUrl()) {
            $data->{'externalUrl'} = $object->getExternalUrl();
        } else {
            $data->{'externalUrl'} = null;
        }
        if (null !== $object->getExternalName()) {
            $data->{'externalName'} = $object->getExternalName();
        } else {
            $data->{'externalName'} = null;
        }
        if (null !== $object->getInvoiceReference()) {
            $data->{'invoiceReference'} = $object->getInvoiceReference();
        } else {
            $data->{'invoiceReference'} = null;
        }
        if (null !== $object->getProjectTasks()) {
            $values_2 = [];
            foreach ($object->getProjectTasks() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'projectTasks'} = $values_2;
        } else {
            $data->{'projectTasks'} = null;
        }
        if (null !== $object->getProjectUsers()) {
            $values_3 = [];
            foreach ($object->getProjectUsers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'projectUsers'} = $values_3;
        } else {
            $data->{'projectUsers'} = null;
        }
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
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        } else {
            $data->{'code'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getInvoiceMethod()) {
            $data->{'invoiceMethod'} = $object->getInvoiceMethod();
        } else {
            $data->{'invoiceMethod'} = null;
        }
        if (null !== $object->getHourlyRate()) {
            $data->{'hourlyRate'} = $object->getHourlyRate();
        } else {
            $data->{'hourlyRate'} = null;
        }
        if (null !== $object->getRate()) {
            $data->{'rate'} = $object->getRate();
        } else {
            $data->{'rate'} = null;
        }
        if (null !== $object->getBudgetMethod()) {
            $data->{'budgetMethod'} = $object->getBudgetMethod();
        } else {
            $data->{'budgetMethod'} = null;
        }
        if (null !== $object->getBudgetRate()) {
            $data->{'budgetRate'} = $object->getBudgetRate();
        } else {
            $data->{'budgetRate'} = null;
        }
        if (null !== $object->getBudgetHours()) {
            $data->{'budgetHours'} = $object->getBudgetHours();
        } else {
            $data->{'budgetHours'} = null;
        }
        if (null !== $object->getStartDate()) {
            $data->{'startDate'} = $object->getStartDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'startDate'} = null;
        }
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate()->format('Y-m-d\\TH:i:s');
        } else {
            $data->{'endDate'} = null;
        }
        if (null !== $object->getProjectSubscription()) {
            $data->{'projectSubscription'} = $this->normalizer->normalize($object->getProjectSubscription(), 'json', $context);
        } else {
            $data->{'projectSubscription'} = null;
        }

        return $data;
    }
}
