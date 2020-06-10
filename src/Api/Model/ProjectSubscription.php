<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class ProjectSubscription
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * 1 = Week, 2 = Month, 3 = Quarter, 4 = Year.
     *
     * @var int|null
     */
    protected $frequency;
    /**
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var float|null
     */
    protected $amount;
    /**
     * @var float|null
     */
    protected $rate;

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
     * 1 = Week, 2 = Month, 3 = Quarter, 4 = Year.
     */
    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    /**
     * 1 = Week, 2 = Month, 3 = Quarter, 4 = Year.
     */
    public function setFrequency(?int $frequency): self
    {
        $this->frequency = $frequency;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

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
}
