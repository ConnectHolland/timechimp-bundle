<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Project
{
    /**
     * @var float|null
     */
    protected $remainingBudgetHours;
    /**
     * @var int[]|null
     */
    protected $tagIds;
    /**
     * @var string[]|null
     */
    protected $tagNames;
    /**
     * @var bool|null
     */
    protected $unspecified;
    /**
     * @var \DateTime|null
     */
    protected $invoiceDate;
    /**
     * @var bool|null
     */
    protected $invoiceInInstallments;
    /**
     * @var float|null
     */
    protected $budgetNotificationPercentage;
    /**
     * @var bool|null
     */
    protected $budgetNotificationHasBeenSent;
    /**
     * @var string|null
     */
    protected $clientId;
    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     *
     * @var int|null
     */
    protected $invoiceStatus;
    /**
     * @var int|null
     */
    protected $invoiceId;
    /**
     * @var string|null
     */
    protected $color;
    /**
     * @var bool|null
     */
    protected $visibleOnSchedule;
    /**
     * @var string|null
     */
    protected $externalUrl;
    /**
     * @var string|null
     */
    protected $externalName;
    /**
     * @var string|null
     */
    protected $invoiceReference;
    /**
     * @var ProjectTask[]|null
     */
    protected $projectTasks;
    /**
     * @var ProjectUser[]|null
     */
    protected $projectUsers;
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $active;
    /**
     * Customer id is required.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * @var string|null
     */
    protected $customerName;
    /**
     * Customer name is required.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $notes;
    /**
     * 1 = NoInvoicing, 2 = TaskHourlyRate, 3 = UserHourlyRate, 4 = ProjectHourlyRate, 5 = CustomerHourlyRate, 6 = ProjectRate, 7 = TaskRate, 8 = MilestoneRate, 9 = Subscription.
     *
     * @var int|null
     */
    protected $invoiceMethod;
    /**
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * @var float|null
     */
    protected $rate;
    /**
     * 1 = NoBudget, 2 = TotalHours, 3 = TaskHours, 4 = UserHours, 5 = TotalRate, 6 = TaskRate, 7 = Invoiced.
     *
     * @var int|null
     */
    protected $budgetMethod;
    /**
     * @var float|null
     */
    protected $budgetRate;
    /**
     * @var float|null
     */
    protected $budgetHours;
    /**
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * @var ProjectSubscription|null
     */
    protected $projectSubscription;

    public function getRemainingBudgetHours(): ?float
    {
        return $this->remainingBudgetHours;
    }

    public function setRemainingBudgetHours(?float $remainingBudgetHours): self
    {
        $this->remainingBudgetHours = $remainingBudgetHours;

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

    public function getUnspecified(): ?bool
    {
        return $this->unspecified;
    }

    public function setUnspecified(?bool $unspecified): self
    {
        $this->unspecified = $unspecified;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTime
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(?\DateTime $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getInvoiceInInstallments(): ?bool
    {
        return $this->invoiceInInstallments;
    }

    public function setInvoiceInInstallments(?bool $invoiceInInstallments): self
    {
        $this->invoiceInInstallments = $invoiceInInstallments;

        return $this;
    }

    public function getBudgetNotificationPercentage(): ?float
    {
        return $this->budgetNotificationPercentage;
    }

    public function setBudgetNotificationPercentage(?float $budgetNotificationPercentage): self
    {
        $this->budgetNotificationPercentage = $budgetNotificationPercentage;

        return $this;
    }

    public function getBudgetNotificationHasBeenSent(): ?bool
    {
        return $this->budgetNotificationHasBeenSent;
    }

    public function setBudgetNotificationHasBeenSent(?bool $budgetNotificationHasBeenSent): self
    {
        $this->budgetNotificationHasBeenSent = $budgetNotificationHasBeenSent;

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
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function getInvoiceStatus(): ?int
    {
        return $this->invoiceStatus;
    }

    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function setInvoiceStatus(?int $invoiceStatus): self
    {
        $this->invoiceStatus = $invoiceStatus;

        return $this;
    }

    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(?int $invoiceId): self
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getVisibleOnSchedule(): ?bool
    {
        return $this->visibleOnSchedule;
    }

    public function setVisibleOnSchedule(?bool $visibleOnSchedule): self
    {
        $this->visibleOnSchedule = $visibleOnSchedule;

        return $this;
    }

    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;

        return $this;
    }

    public function getExternalName(): ?string
    {
        return $this->externalName;
    }

    public function setExternalName(?string $externalName): self
    {
        $this->externalName = $externalName;

        return $this;
    }

    public function getInvoiceReference(): ?string
    {
        return $this->invoiceReference;
    }

    public function setInvoiceReference(?string $invoiceReference): self
    {
        $this->invoiceReference = $invoiceReference;

        return $this;
    }

    /**
     * @return ProjectTask[]|null
     */
    public function getProjectTasks(): ?array
    {
        return $this->projectTasks;
    }

    /**
     * @param ProjectTask[]|null $projectTasks
     */
    public function setProjectTasks(?array $projectTasks): self
    {
        $this->projectTasks = $projectTasks;

        return $this;
    }

    /**
     * @return ProjectUser[]|null
     */
    public function getProjectUsers(): ?array
    {
        return $this->projectUsers;
    }

    /**
     * @param ProjectUser[]|null $projectUsers
     */
    public function setProjectUsers(?array $projectUsers): self
    {
        $this->projectUsers = $projectUsers;

        return $this;
    }

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

    /**
     * Customer id is required.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Customer id is required.
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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
     * 1 = NoInvoicing, 2 = TaskHourlyRate, 3 = UserHourlyRate, 4 = ProjectHourlyRate, 5 = CustomerHourlyRate, 6 = ProjectRate, 7 = TaskRate, 8 = MilestoneRate, 9 = Subscription.
     */
    public function getInvoiceMethod(): ?int
    {
        return $this->invoiceMethod;
    }

    /**
     * 1 = NoInvoicing, 2 = TaskHourlyRate, 3 = UserHourlyRate, 4 = ProjectHourlyRate, 5 = CustomerHourlyRate, 6 = ProjectRate, 7 = TaskRate, 8 = MilestoneRate, 9 = Subscription.
     */
    public function setInvoiceMethod(?int $invoiceMethod): self
    {
        $this->invoiceMethod = $invoiceMethod;

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

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * 1 = NoBudget, 2 = TotalHours, 3 = TaskHours, 4 = UserHours, 5 = TotalRate, 6 = TaskRate, 7 = Invoiced.
     */
    public function getBudgetMethod(): ?int
    {
        return $this->budgetMethod;
    }

    /**
     * 1 = NoBudget, 2 = TotalHours, 3 = TaskHours, 4 = UserHours, 5 = TotalRate, 6 = TaskRate, 7 = Invoiced.
     */
    public function setBudgetMethod(?int $budgetMethod): self
    {
        $this->budgetMethod = $budgetMethod;

        return $this;
    }

    public function getBudgetRate(): ?float
    {
        return $this->budgetRate;
    }

    public function setBudgetRate(?float $budgetRate): self
    {
        $this->budgetRate = $budgetRate;

        return $this;
    }

    public function getBudgetHours(): ?float
    {
        return $this->budgetHours;
    }

    public function setBudgetHours(?float $budgetHours): self
    {
        $this->budgetHours = $budgetHours;

        return $this;
    }

    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getProjectSubscription(): ?ProjectSubscription
    {
        return $this->projectSubscription;
    }

    public function setProjectSubscription(?ProjectSubscription $projectSubscription): self
    {
        $this->projectSubscription = $projectSubscription;

        return $this;
    }
}
