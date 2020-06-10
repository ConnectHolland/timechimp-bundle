<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Mileage
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $customerId;
    /**
     * @var string|null
     */
    protected $customerName;
    /**
     * When ProjectId is filled, CustomerId can be empty.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * @var string|null
     */
    protected $projectName;
    /**
     * @var int|null
     */
    protected $vehicleId;
    /**
     * @var string|null
     */
    protected $vehicleName;
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
    protected $fromAddress;
    /**
     * @var string|null
     */
    protected $toAddress;
    /**
     * @var string|null
     */
    protected $notes;
    /**
     * Distance is required.
     *
     * @var float|null
     */
    protected $distance;
    /**
     * @var bool|null
     */
    protected $billable;
    /**
     * Type is required1 = Private, 2 = Business, 3 = HomeWork.
     *
     * @var int|null
     */
    protected $type;
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

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

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
     * When ProjectId is filled, CustomerId can be empty.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * When ProjectId is filled, CustomerId can be empty.
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

    public function getVehicleId(): ?int
    {
        return $this->vehicleId;
    }

    public function setVehicleId(?int $vehicleId): self
    {
        $this->vehicleId = $vehicleId;

        return $this;
    }

    public function getVehicleName(): ?string
    {
        return $this->vehicleName;
    }

    public function setVehicleName(?string $vehicleName): self
    {
        $this->vehicleName = $vehicleName;

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

    public function getFromAddress(): ?string
    {
        return $this->fromAddress;
    }

    public function setFromAddress(?string $fromAddress): self
    {
        $this->fromAddress = $fromAddress;

        return $this;
    }

    public function getToAddress(): ?string
    {
        return $this->toAddress;
    }

    public function setToAddress(?string $toAddress): self
    {
        $this->toAddress = $toAddress;

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

    /**
     * Distance is required.
     */
    public function getDistance(): ?float
    {
        return $this->distance;
    }

    /**
     * Distance is required.
     */
    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

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
     * Type is required1 = Private, 2 = Business, 3 = HomeWork.
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * Type is required1 = Private, 2 = Business, 3 = HomeWork.
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

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
