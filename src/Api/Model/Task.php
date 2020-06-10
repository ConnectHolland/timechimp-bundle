<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Task
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
     * Task name is required.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $code;
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
    protected $common;
    /**
     * @var bool|null
     */
    protected $unspecified;

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
     * Task name is required.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Task name is required.
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

    public function getCommon(): ?bool
    {
        return $this->common;
    }

    public function setCommon(?bool $common): self
    {
        $this->common = $common;

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
}
