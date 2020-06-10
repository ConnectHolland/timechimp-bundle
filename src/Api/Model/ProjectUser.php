<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class ProjectUser
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * User id is required.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * Name of user. Only get, no set.
     *
     * @var string|null
     */
    protected $userDisplayName;
    /**
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * @var float|null
     */
    protected $budgetHours;
    /**
     * @var bool|null
     */
    protected $projectManager;

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
     * User id is required.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * User id is required.
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Name of user. Only get, no set.
     */
    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    /**
     * Name of user. Only get, no set.
     */
    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;

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

    public function getBudgetHours(): ?float
    {
        return $this->budgetHours;
    }

    public function setBudgetHours(?float $budgetHours): self
    {
        $this->budgetHours = $budgetHours;

        return $this;
    }

    public function getProjectManager(): ?bool
    {
        return $this->projectManager;
    }

    public function setProjectManager(?bool $projectManager): self
    {
        $this->projectManager = $projectManager;

        return $this;
    }
}
