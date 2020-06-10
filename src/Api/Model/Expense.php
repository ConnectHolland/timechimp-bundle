<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Expense
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * CustomerId or ProjectId is required.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * @var string|null
     */
    protected $customerName;
    /**
     * CustomerId or ProjectId is required. When ProjectId is filled, CustomerId can be empty.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * @var string|null
     */
    protected $projectName;
    /**
     * @var string|null
     */
    protected $categoryName;
    /**
     * @var int|null
     */
    protected $categoryId;
    /**
     * If UserId is empty, current user will be linked.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * @var string|null
     */
    protected $userDisplayName;
    /**
     * Date is required.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @var string|null
     */
    protected $notes;
    /**
     * @var string|null
     */
    protected $attachment;
    /**
     * Default is 1.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * Rate is required.
     *
     * @var float|null
     */
    protected $rate;
    /**
     * Tax is required. 21% = 21.00, 6% = 6.00, 0% = 0.0.
     *
     * @var float|null
     */
    protected $tax;
    /**
     * @var bool|null
     */
    protected $billable;
    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     *
     * @var int|null
     */
    protected $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * CustomerId or ProjectId is required.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * CustomerId or ProjectId is required.
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;

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

    /**
     * CustomerId or ProjectId is required. When ProjectId is filled, CustomerId can be empty.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * CustomerId or ProjectId is required. When ProjectId is filled, CustomerId can be empty.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;

        return $this;
    }

    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    public function setCategoryName(?string $categoryName): self
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * If UserId is empty, current user will be linked.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * If UserId is empty, current user will be linked.
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;

        return $this;
    }

    /**
     * Date is required.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Date is required.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

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

    public function getAttachment(): ?string
    {
        return $this->attachment;
    }

    public function setAttachment(?string $attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Default is 1.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Default is 1.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Rate is required.
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * Rate is required.
     */
    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Tax is required. 21% = 21.00, 6% = 6.00, 0% = 0.0.
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }

    /**
     * Tax is required. 21% = 21.00, 6% = 6.00, 0% = 0.0.
     */
    public function setTax(?float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    public function getBillable(): ?bool
    {
        return $this->billable;
    }

    public function setBillable(?bool $billable): self
    {
        $this->billable = $billable;

        return $this;
    }

    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
