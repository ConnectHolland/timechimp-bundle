<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Invoice
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $clientId;
    /**
     * @var string|null
     */
    protected $companyInvoicePrefix;
    /**
     * @var int|null
     */
    protected $companyInvoiceId;
    /**
     * @var int|null
     */
    protected $customerId;
    /**
     * 1 = Concept, 2 = Open, 3 = Paid.
     *
     * @var int|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $customerRelationId;
    /**
     * @var string|null
     */
    protected $customerName;
    /**
     * @var string|null
     */
    protected $customerContactPerson;
    /**
     * @var string|null
     */
    protected $customerEmail;
    /**
     * @var string|null
     */
    protected $customerAddress;
    /**
     * @var string|null
     */
    protected $customerVatNumber;
    /**
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @var \DateTime|null
     */
    protected $dueDate;
    /**
     * @var string|null
     */
    protected $reference;
    /**
     * @var string|null
     */
    protected $notes;
    /**
     * @var float|null
     */
    protected $total;
    /**
     * @var float|null
     */
    protected $totalWithoutExchangeRate;
    /**
     * @var float|null
     */
    protected $totalExTax;
    /**
     * @var float|null
     */
    protected $totalExTaxWithoutExchangeRate;
    /**
     * @var string|null
     */
    protected $additionalNotes;
    /**
     * @var string|null
     */
    protected $internNotes;
    /**
     * @var string|null
     */
    protected $currency;
    /**
     * @var string|null
     */
    protected $language;
    /**
     * @var float|null
     */
    protected $exchangeRate;
    /**
     * @var bool|null
     */
    protected $credit;
    /**
     * @var InvoiceRow[]|null
     */
    protected $invoiceRows;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getCompanyInvoicePrefix(): ?string
    {
        return $this->companyInvoicePrefix;
    }

    public function setCompanyInvoicePrefix(?string $companyInvoicePrefix): self
    {
        $this->companyInvoicePrefix = $companyInvoicePrefix;

        return $this;
    }

    public function getCompanyInvoiceId(): ?int
    {
        return $this->companyInvoiceId;
    }

    public function setCompanyInvoiceId(?int $companyInvoiceId): self
    {
        $this->companyInvoiceId = $companyInvoiceId;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * 1 = Concept, 2 = Open, 3 = Paid.
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 1 = Concept, 2 = Open, 3 = Paid.
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCustomerRelationId(): ?string
    {
        return $this->customerRelationId;
    }

    public function setCustomerRelationId(?string $customerRelationId): self
    {
        $this->customerRelationId = $customerRelationId;

        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;

        return $this;
    }

    public function getCustomerContactPerson(): ?string
    {
        return $this->customerContactPerson;
    }

    public function setCustomerContactPerson(?string $customerContactPerson): self
    {
        $this->customerContactPerson = $customerContactPerson;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    public function getCustomerAddress(): ?string
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress(?string $customerAddress): self
    {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    public function getCustomerVatNumber(): ?string
    {
        return $this->customerVatNumber;
    }

    public function setCustomerVatNumber(?string $customerVatNumber): self
    {
        $this->customerVatNumber = $customerVatNumber;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(?\DateTime $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

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

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getTotalWithoutExchangeRate(): ?float
    {
        return $this->totalWithoutExchangeRate;
    }

    public function setTotalWithoutExchangeRate(?float $totalWithoutExchangeRate): self
    {
        $this->totalWithoutExchangeRate = $totalWithoutExchangeRate;

        return $this;
    }

    public function getTotalExTax(): ?float
    {
        return $this->totalExTax;
    }

    public function setTotalExTax(?float $totalExTax): self
    {
        $this->totalExTax = $totalExTax;

        return $this;
    }

    public function getTotalExTaxWithoutExchangeRate(): ?float
    {
        return $this->totalExTaxWithoutExchangeRate;
    }

    public function setTotalExTaxWithoutExchangeRate(?float $totalExTaxWithoutExchangeRate): self
    {
        $this->totalExTaxWithoutExchangeRate = $totalExTaxWithoutExchangeRate;

        return $this;
    }

    public function getAdditionalNotes(): ?string
    {
        return $this->additionalNotes;
    }

    public function setAdditionalNotes(?string $additionalNotes): self
    {
        $this->additionalNotes = $additionalNotes;

        return $this;
    }

    public function getInternNotes(): ?string
    {
        return $this->internNotes;
    }

    public function setInternNotes(?string $internNotes): self
    {
        $this->internNotes = $internNotes;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(?float $exchangeRate): self
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    public function getCredit(): ?bool
    {
        return $this->credit;
    }

    public function setCredit(?bool $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * @return InvoiceRow[]|null
     */
    public function getInvoiceRows(): ?array
    {
        return $this->invoiceRows;
    }

    /**
     * @param InvoiceRow[]|null $invoiceRows
     */
    public function setInvoiceRows(?array $invoiceRows): self
    {
        $this->invoiceRows = $invoiceRows;

        return $this;
    }
}
