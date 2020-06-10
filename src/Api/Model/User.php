<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class User
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $userName;
    /**
     * @var string|null
     */
    protected $displayName;
    /**
     * 0 = Onbekend, 1 = Gebruiker, 2 = Beheerder, 4 = Projectmanager.
     *
     * @var int|null
     */
    protected $accountType;
    /**
     * @var bool|null
     */
    protected $isLocked;
    /**
     * @var string|null
     */
    protected $picture;
    /**
     * @var string[]|null
     */
    protected $tagNames;
    /**
     * @var string|null
     */
    protected $language;
    /**
     * @var float|null
     */
    protected $contractHours;
    /**
     * @var float|null
     */
    protected $contractHourlyRate;
    /**
     * @var float|null
     */
    protected $contractCostHourlyRate;
    /**
     * @var \DateTime|null
     */
    protected $contractStartDate;
    /**
     * @var \DateTime|null
     */
    protected $contractEndDate;
    /**
     * @var \DateTime|null
     */
    protected $created;
    /**
     * @var string|null
     */
    protected $teamName;
    /**
     * @var string|null
     */
    protected $employeeNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * 0 = Onbekend, 1 = Gebruiker, 2 = Beheerder, 4 = Projectmanager.
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * 0 = Onbekend, 1 = Gebruiker, 2 = Beheerder, 4 = Projectmanager.
     */
    public function setAccountType(?int $accountType): self
    {
        $this->accountType = $accountType;

        return $this;
    }

    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(?bool $isLocked): self
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getContractHours(): ?float
    {
        return $this->contractHours;
    }

    public function setContractHours(?float $contractHours): self
    {
        $this->contractHours = $contractHours;

        return $this;
    }

    public function getContractHourlyRate(): ?float
    {
        return $this->contractHourlyRate;
    }

    public function setContractHourlyRate(?float $contractHourlyRate): self
    {
        $this->contractHourlyRate = $contractHourlyRate;

        return $this;
    }

    public function getContractCostHourlyRate(): ?float
    {
        return $this->contractCostHourlyRate;
    }

    public function setContractCostHourlyRate(?float $contractCostHourlyRate): self
    {
        $this->contractCostHourlyRate = $contractCostHourlyRate;

        return $this;
    }

    public function getContractStartDate(): ?\DateTime
    {
        return $this->contractStartDate;
    }

    public function setContractStartDate(?\DateTime $contractStartDate): self
    {
        $this->contractStartDate = $contractStartDate;

        return $this;
    }

    public function getContractEndDate(): ?\DateTime
    {
        return $this->contractEndDate;
    }

    public function setContractEndDate(?\DateTime $contractEndDate): self
    {
        $this->contractEndDate = $contractEndDate;

        return $this;
    }

    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    public function setCreated(?\DateTime $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getTeamName(): ?string
    {
        return $this->teamName;
    }

    public function setTeamName(?string $teamName): self
    {
        $this->teamName = $teamName;

        return $this;
    }

    public function getEmployeeNumber(): ?string
    {
        return $this->employeeNumber;
    }

    public function setEmployeeNumber(?string $employeeNumber): self
    {
        $this->employeeNumber = $employeeNumber;

        return $this;
    }
}
