<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Endpoint;

class UpdateMileage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    public function __construct(\ConnectHolland\TimechimpBundle\Api\Model\Mileage $mileage)
    {
        $this->body = $mileage;
    }

    use \Jane\OpenApiRuntime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/v1/mileage';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return \ConnectHolland\TimechimpBundle\Api\Model\Mileage|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ConnectHolland\\TimechimpBundle\\Api\\Model\\Mileage', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Access token'];
    }
}
