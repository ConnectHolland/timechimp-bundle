<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Customer
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $active;
    /**
     * @var string|null
     */
    protected $relationId;
    /**
     * Customer name is required.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $address;
    /**
     * @var string|null
     */
    protected $postalCode;
    /**
     * @var string|null
     */
    protected $city;
    /**
     * @var string|null
     */
    protected $country;
    /**
     * @var string|null
     */
    protected $phone;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $website;
    /**
     * @var int|null
     */
    protected $paymentPeriod;
    /**
     * @var float|null
     */
    protected $tax;
    /**
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * @var float|null
     */
    protected $mileageRate;
    /**
     * @var string|null
     */
    protected $iban;
    /**
     * @var string|null
     */
    protected $bic;
    /**
     * @var string|null
     */
    protected $vatNumber;
    /**
     * @var string|null
     */
    protected $kvkNumber;
    /**
     * @var string|null
     */
    protected $invoiceAddress;
    /**
     * @var string|null
     */
    protected $invoicePostalCode;
    /**
     * @var string|null
     */
    protected $invoiceCity;
    /**
     * @var string|null
     */
    protected $invoiceCountry;
    /**
     * @var string|null
     */
    protected $notes;
    /**
     * @var string|null
     */
    protected $clientId;
    /**
     * @var int[]|null
     */
    protected $tagIds;
    /**
     * @var string[]|null
     */
    protected $tagNames;
    /**
     * @var int|null
     */
    protected $vatRateId;
    /**
     * @var float|null
     */
    protected $vatRatePercentage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getRelationId(): ?string
    {
        return $this->relationId;
    }

    public function setRelationId(?string $relationId): self
    {
        $this->relationId = $relationId;

        return $this;
    }

    /**
     * Customer name is required.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Customer name is required.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getPaymentPeriod(): ?int
    {
        return $this->paymentPeriod;
    }

    public function setPaymentPeriod(?int $paymentPeriod): self
    {
        $this->paymentPeriod = $paymentPeriod;

        return $this;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    public function getHourlyRate(): ?float
    {
        return $this->hourlyRate;
    }

    public function setHourlyRate(?float $hourlyRate): self
    {
        $this->hourlyRate = $hourlyRate;

        return $this;
    }

    public function getMileageRate(): ?float
    {
        return $this->mileageRate;
    }

    public function setMileageRate(?float $mileageRate): self
    {
        $this->mileageRate = $mileageRate;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(?string $vatNumber): self
    {
        $this->vatNumber = $vatNumber;

        return $this;
    }

    public function getKvkNumber(): ?string
    {
        return $this->kvkNumber;
    }

    public function setKvkNumber(?string $kvkNumber): self
    {
        $this->kvkNumber = $kvkNumber;

        return $this;
    }

    public function getInvoiceAddress(): ?string
    {
        return $this->invoiceAddress;
    }

    public function setInvoiceAddress(?string $invoiceAddress): self
    {
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    public function getInvoicePostalCode(): ?string
    {
        return $this->invoicePostalCode;
    }

    public function setInvoicePostalCode(?string $invoicePostalCode): self
    {
        $this->invoicePostalCode = $invoicePostalCode;

        return $this;
    }

    public function getInvoiceCity(): ?string
    {
        return $this->invoiceCity;
    }

    public function setInvoiceCity(?string $invoiceCity): self
    {
        $this->invoiceCity = $invoiceCity;

        return $this;
    }

    public function getInvoiceCountry(): ?string
    {
        return $this->invoiceCountry;
    }

    public function setInvoiceCountry(?string $invoiceCountry): self
    {
        $this->invoiceCountry = $invoiceCountry;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getTagIds(): ?array
    {
        return $this->tagIds;
    }

    /**
     * @param int[]|null $tagIds
     */
    public function setTagIds(?array $tagIds): self
    {
        $this->tagIds = $tagIds;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTagNames(): ?array
    {
        return $this->tagNames;
    }

    /**
     * @param string[]|null $tagNames
     */
    public function setTagNames(?array $tagNames): self
    {
        $this->tagNames = $tagNames;

        return $this;
    }

    public function getVatRateId(): ?int
    {
        return $this->vatRateId;
    }

    public function setVatRateId(?int $vatRateId): self
    {
        $this->vatRateId = $vatRateId;

        return $this;
    }

    public function getVatRatePercentage(): ?float
    {
        return $this->vatRatePercentage;
    }

    public function setVatRatePercentage(?float $vatRatePercentage): self
    {
        $this->vatRatePercentage = $vatRatePercentage;

        return $this;
    }
}
