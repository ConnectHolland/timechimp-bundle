<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Time
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
     * Use projectTaskId if working with projects.
     *
     * @var int|null
     */
    protected $projectTaskId;
    /**
     * Use task if working not working with projects (only customers).
     *
     * @var int|null
     */
    protected $taskId;
    /**
     * @var string|null
     */
    protected $taskName;
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
     * @var string[]|null
     */
    protected $userTags;
    /**
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @var float|null
     */
    protected $hours;
    /**
     * @var string|null
     */
    protected $notes;
    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     *
     * @var int|null
     */
    protected $status;
    /**
     * DEPRECATED property for the start+end time of a time. Use {start} and {end} properties from now on.
     *
     * @var string|null
     */
    protected $startEnd;
    /**
     * The start date + time (UTC) on which the time starts.
     *
     * @var string|null
     */
    protected $start;
    /**
     * The end date + time (UTC) on which the time ends. Condition: {end} >= {start}.
     *
     * @var string|null
     */
    protected $end;
    /**
     * @var float|null
     */
    protected $pause;
    /**
     * @var string|null
     */
    protected $externalName;
    /**
     * @var string|null
     */
    protected $externalUrl;
    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     *
     * @var int|null
     */
    protected $statusIntern;
    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     *
     * @var int|null
     */
    protected $statusExtern;
    /**
     * @var Tag[]|null
     */
    protected $tags;

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

    /**
     * Use projectTaskId if working with projects.
     */
    public function getProjectTaskId(): ?int
    {
        return $this->projectTaskId;
    }

    /**
     * Use projectTaskId if working with projects.
     */
    public function setProjectTaskId(?int $projectTaskId): self
    {
        $this->projectTaskId = $projectTaskId;

        return $this;
    }

    /**
     * Use task if working not working with projects (only customers).
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * Use task if working not working with projects (only customers).
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;

        return $this;
    }

    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;

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
     * @return string[]|null
     */
    public function getUserTags(): ?array
    {
        return $this->userTags;
    }

    /**
     * @param string[]|null $userTags
     */
    public function setUserTags(?array $userTags): self
    {
        $this->userTags = $userTags;

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

    public function getHours(): ?float
    {
        return $this->hours;
    }

    public function setHours(?float $hours): self
    {
        $this->hours = $hours;

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

    /**
     * DEPRECATED property for the start+end time of a time. Use {start} and {end} properties from now on.
     */
    public function getStartEnd(): ?string
    {
        return $this->startEnd;
    }

    /**
     * DEPRECATED property for the start+end time of a time. Use {start} and {end} properties from now on.
     */
    public function setStartEnd(?string $startEnd): self
    {
        $this->startEnd = $startEnd;

        return $this;
    }

    /**
     * The start date + time (UTC) on which the time starts.
     */
    public function getStart(): ?string
    {
        return $this->start;
    }

    /**
     * The start date + time (UTC) on which the time starts.
     */
    public function setStart(?string $start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * The end date + time (UTC) on which the time ends. Condition: {end} >= {start}.
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }

    /**
     * The end date + time (UTC) on which the time ends. Condition: {end} >= {start}.
     */
    public function setEnd(?string $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getPause(): ?float
    {
        return $this->pause;
    }

    public function setPause(?float $pause): self
    {
        $this->pause = $pause;

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

    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;

        return $this;
    }

    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function getStatusIntern(): ?int
    {
        return $this->statusIntern;
    }

    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function setStatusIntern(?int $statusIntern): self
    {
        $this->statusIntern = $statusIntern;

        return $this;
    }

    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function getStatusExtern(): ?int
    {
        return $this->statusExtern;
    }

    /**
     * 0 = Open, 1 = PendingApproval, 2 = Approved, 3 = Invoiced, 4 = WrittenOff, -1 = Rejected.
     */
    public function setStatusExtern(?int $statusExtern): self
    {
        $this->statusExtern = $statusExtern;

        return $this;
    }

    /**
     * @return Tag[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param Tag[]|null $tags
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
}
