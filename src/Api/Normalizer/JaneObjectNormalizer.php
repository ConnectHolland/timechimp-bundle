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

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    protected $normalizers      = ['ConnectHolland\\TimechimpBundle\\Api\\Model\\Customer' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\CustomerNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Expense' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\ExpenseNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Invoice' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\InvoiceNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\InvoiceRow' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\InvoiceRowNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Mileage' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\MileageNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectNote' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\ProjectNoteNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Project' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\ProjectNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectTask' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\ProjectTaskNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectUser' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\ProjectUserNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectSubscription' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\ProjectSubscriptionNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\ProjectInsights' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\ProjectInsightsNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Tag' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\TagNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Task' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\TaskNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Time' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\TimeNormalizer', 'ConnectHolland\\TimechimpBundle\\Api\\Model\\User' => 'ConnectHolland\\TimechimpBundle\\Api\\Normalizer\\UserNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer      = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer      = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
