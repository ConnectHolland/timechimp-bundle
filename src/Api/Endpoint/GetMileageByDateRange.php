<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Endpoint;

class GetMileageByDateRange extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $startDate;
    protected $endDate;

    /**
     * @param string $startDate Start date as string in format: YYYY-MM-DD
     * @param string $endDate   End date as string in format: YYYY-MM-DD
     */
    public function __construct(string $startDate, string $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate   = $endDate;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{startDate}', '{endDate}'], [$this->startDate, $this->endDate], '/v1/mileage/daterange/{startDate}/{endDate}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Mileage[]', 'json');
        }
    }
}
