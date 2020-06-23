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

class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ConnectHolland\TimechimpBundle\Api\Model\Project();
        if (\array_key_exists('remainingBudgetHours', $data) && $data['remainingBudgetHours'] !== null) {
            $object->setRemainingBudgetHours($data['remainingBudgetHours']);
        } elseif (\array_key_exists('remainingBudgetHours', $data) && $data['remainingBudgetHours'] === null) {
            $object->setRemainingBudgetHours(null);
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
        if (\array_key_exists('unspecified', $data) && $data['unspecified'] !== null) {
            $object->setUnspecified($data['unspecified']);
        } elseif (\array_key_exists('unspecified', $data) && $data['unspecified'] === null) {
            $object->setUnspecified(null);
        }
        if (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] !== null) {
            $object->setInvoiceDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['invoiceDate']));
        } elseif (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] === null) {
            $object->setInvoiceDate(null);
        }
        if (\array_key_exists('invoiceInInstallments', $data) && $data['invoiceInInstallments'] !== null) {
            $object->setInvoiceInInstallments($data['invoiceInInstallments']);
        } elseif (\array_key_exists('invoiceInInstallments', $data) && $data['invoiceInInstallments'] === null) {
            $object->setInvoiceInInstallments(null);
        }
        if (\array_key_exists('budgetNotificationPercentage', $data) && $data['budgetNotificationPercentage'] !== null) {
            $object->setBudgetNotificationPercentage($data['budgetNotificationPercentage']);
        } elseif (\array_key_exists('budgetNotificationPercentage', $data) && $data['budgetNotificationPercentage'] === null) {
            $object->setBudgetNotificationPercentage(null);
        }
        if (\array_key_exists('budgetNotificationHasBeenSent', $data) && $data['budgetNotificationHasBeenSent'] !== null) {
            $object->setBudgetNotificationHasBeenSent($data['budgetNotificationHasBeenSent']);
        } elseif (\array_key_exists('budgetNotificationHasBeenSent', $data) && $data['budgetNotificationHasBeenSent'] === null) {
            $object->setBudgetNotificationHasBeenSent(null);
        }
        if (\array_key_exists('clientId', $data) && $data['clientId'] !== null) {
            $object->setClientId($data['clientId']);
        } elseif (\array_key_exists('clientId', $data) && $data['clientId'] === null) {
            $object->setClientId(null);
        }
        if (\array_key_exists('invoiceStatus', $data) && $data['invoiceStatus'] !== null) {
            $object->setInvoiceStatus($data['invoiceStatus']);
        } elseif (\array_key_exists('invoiceStatus', $data) && $data['invoiceStatus'] === null) {
            $object->setInvoiceStatus(null);
        }
        if (\array_key_exists('invoiceId', $data) && $data['invoiceId'] !== null) {
            $object->setInvoiceId($data['invoiceId']);
        } elseif (\array_key_exists('invoiceId', $data) && $data['invoiceId'] === null) {
            $object->setInvoiceId(null);
        }
        if (\array_key_exists('color', $data) && $data['color'] !== null) {
            $object->setColor($data['color']);
        } elseif (\array_key_exists('color', $data) && $data['color'] === null) {
            $object->setColor(null);
        }
        if (\array_key_exists('visibleOnSchedule', $data) && $data['visibleOnSchedule'] !== null) {
            $object->setVisibleOnSchedule($data['visibleOnSchedule']);
        } elseif (\array_key_exists('visibleOnSchedule', $data) && $data['visibleOnSchedule'] === null) {
            $object->setVisibleOnSchedule(null);
        }
        if (\array_key_exists('externalUrl', $data) && $data['externalUrl'] !== null) {
            $object->setExternalUrl($data['externalUrl']);
        } elseif (\array_key_exists('externalUrl', $data) && $data['externalUrl'] === null) {
            $object->setExternalUrl(null);
        }
        if (\array_key_exists('externalName', $data) && $data['externalName'] !== null) {
            $object->setExternalName($data['externalName']);
        } elseif (\array_key_exists('externalName', $data) && $data['externalName'] === null) {
            $object->setExternalName(null);
        }
        if (\array_key_exists('invoiceReference', $data) && $data['invoiceReference'] !== null) {
            $object->setInvoiceReference($data['invoiceReference']);
        } elseif (\array_key_exists('invoiceReference', $data) && $data['invoiceReference'] === null) {
            $object->setInvoiceReference(null);
        }
        if (\array_key_exists('projectTasks', $data) && $data['projectTasks'] !== null) {
            $values_2 = [];
            foreach ($data['projectTasks'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectTask', 'json', $context);
            }
            $object->setProjectTasks($values_2);
        } elseif (\array_key_exists('projectTasks', $data) && $data['projectTasks'] === null) {
            $object->setProjectTasks(null);
        }
        if (\array_key_exists('projectUsers', $data) && $data['projectUsers'] !== null) {
            $values_3 = [];
            foreach ($data['projectUsers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectUser', 'json', $context);
            }
            $object->setProjectUsers($values_3);
        } elseif (\array_key_exists('projectUsers', $data) && $data['projectUsers'] === null) {
            $object->setProjectUsers(null);
        }
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
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('invoiceMethod', $data) && $data['invoiceMethod'] !== null) {
            $object->setInvoiceMethod($data['invoiceMethod']);
        } elseif (\array_key_exists('invoiceMethod', $data) && $data['invoiceMethod'] === null) {
            $object->setInvoiceMethod(null);
        }
        if (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] !== null) {
            $object->setHourlyRate($data['hourlyRate']);
        } elseif (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] === null) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('rate', $data) && $data['rate'] !== null) {
            $object->setRate($data['rate']);
        } elseif (\array_key_exists('rate', $data) && $data['rate'] === null) {
            $object->setRate(null);
        }
        if (\array_key_exists('budgetMethod', $data) && $data['budgetMethod'] !== null) {
            $object->setBudgetMethod($data['budgetMethod']);
        } elseif (\array_key_exists('budgetMethod', $data) && $data['budgetMethod'] === null) {
            $object->setBudgetMethod(null);
        }
        if (\array_key_exists('budgetRate', $data) && $data['budgetRate'] !== null) {
            $object->setBudgetRate($data['budgetRate']);
        } elseif (\array_key_exists('budgetRate', $data) && $data['budgetRate'] === null) {
            $object->setBudgetRate(null);
        }
        if (\array_key_exists('budgetHours', $data) && $data['budgetHours'] !== null) {
            $object->setBudgetHours($data['budgetHours']);
        } elseif (\array_key_exists('budgetHours', $data) && $data['budgetHours'] === null) {
            $object->setBudgetHours(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['startDate']));
        } elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['endDate']));
        } elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('projectSubscription', $data) && $data['projectSubscription'] !== null) {
            $object->setProjectSubscription($this->denormalizer->denormalize($data['projectSubscription'], 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectSubscription', 'json', $context));
        } elseif (\array_key_exists('projectSubscription', $data) && $data['projectSubscription'] === null) {
            $object->setProjectSubscription(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getRemainingBudgetHours()) {
            $data['remainingBudgetHours'] = $object->getRemainingBudgetHours();
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
        if (null !== $object->getUnspecified()) {
            $data['unspecified'] = $object->getUnspecified();
        }
        if (null !== $object->getInvoiceDate()) {
            $data['invoiceDate'] = $object->getInvoiceDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getInvoiceInInstallments()) {
            $data['invoiceInInstallments'] = $object->getInvoiceInInstallments();
        }
        if (null !== $object->getBudgetNotificationPercentage()) {
            $data['budgetNotificationPercentage'] = $object->getBudgetNotificationPercentage();
        }
        if (null !== $object->getBudgetNotificationHasBeenSent()) {
            $data['budgetNotificationHasBeenSent'] = $object->getBudgetNotificationHasBeenSent();
        }
        if (null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if (null !== $object->getInvoiceStatus()) {
            $data['invoiceStatus'] = $object->getInvoiceStatus();
        }
        if (null !== $object->getInvoiceId()) {
            $data['invoiceId'] = $object->getInvoiceId();
        }
        if (null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if (null !== $object->getVisibleOnSchedule()) {
            $data['visibleOnSchedule'] = $object->getVisibleOnSchedule();
        }
        if (null !== $object->getExternalUrl()) {
            $data['externalUrl'] = $object->getExternalUrl();
        }
        if (null !== $object->getExternalName()) {
            $data['externalName'] = $object->getExternalName();
        }
        if (null !== $object->getInvoiceReference()) {
            $data['invoiceReference'] = $object->getInvoiceReference();
        }
        if (null !== $object->getProjectTasks()) {
            $values_2 = [];
            foreach ($object->getProjectTasks() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['projectTasks'] = $values_2;
        }
        if (null !== $object->getProjectUsers()) {
            $values_3 = [];
            foreach ($object->getProjectUsers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['projectUsers'] = $values_3;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getCustomerId()) {
            $data['customerId'] = $object->getCustomerId();
        }
        if (null !== $object->getCustomerName()) {
            $data['customerName'] = $object->getCustomerName();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getInvoiceMethod()) {
            $data['invoiceMethod'] = $object->getInvoiceMethod();
        }
        if (null !== $object->getHourlyRate()) {
            $data['hourlyRate'] = $object->getHourlyRate();
        }
        if (null !== $object->getRate()) {
            $data['rate'] = $object->getRate();
        }
        if (null !== $object->getBudgetMethod()) {
            $data['budgetMethod'] = $object->getBudgetMethod();
        }
        if (null !== $object->getBudgetRate()) {
            $data['budgetRate'] = $object->getBudgetRate();
        }
        if (null !== $object->getBudgetHours()) {
            $data['budgetHours'] = $object->getBudgetHours();
        }
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getProjectSubscription()) {
            $data['projectSubscription'] = $this->normalizer->normalize($object->getProjectSubscription(), 'json', $context);
        }

        return $data;
    }
}
