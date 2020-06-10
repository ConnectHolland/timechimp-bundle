<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class ProjectTask
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * Task id is required.
     *
     * @var int|null
     */
    protected $taskId;
    /**
     * Name of task. Only get, no set.
     *
     * @var string|null
     */
    protected $taskName;
    /**
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * @var bool|null
     */
    protected $billable;
    /**
     * @var bool|null
     */
    protected $unspecified;
    /**
     * @var float|null
     */
    protected $budgetHours;

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
     * Task id is required.
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * Task id is required.
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * Name of task. Only get, no set.
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * Name of task. Only get, no set.
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;

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

    public function getBillable(): ?bool
    {
        return $this->billable;
    }

    public function setBillable(?bool $billable): self
    {
        $this->billable = $billable;

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

    public function getBudgetHours(): ?float
    {
        return $this->budgetHours;
    }

    public function setBudgetHours(?float $budgetHours): self
    {
        $this->budgetHours = $budgetHours;

        return $this;
    }
}
