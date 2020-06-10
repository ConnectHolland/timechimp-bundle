<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class ProjectInsights
{
    /**
     * @var float|null
     */
    protected $totalHours;
    /**
     * @var float|null
     */
    protected $totalHoursBillable;
    /**
     * @var float|null
     */
    protected $totalHoursNonBillable;
    /**
     * @var float|null
     */
    protected $totalUninvoiced;
    /**
     * @var float|null
     */
    protected $totalInvoiced;
    /**
     * @var float|null
     */
    protected $totalWrittenOff;
    /**
     * @var float|null
     */
    protected $totalScheduled;
    /**
     * @var int|null
     */
    protected $budgetPercentage;
    /**
     * @var float|null
     */
    protected $budget;
    /**
     * @var float|null
     */
    protected $spend;
    /**
     * @var float|null
     */
    protected $remainingBudget;
    /**
     * @var float|null
     */
    protected $costs;

    public function getTotalHours(): ?float
    {
        return $this->totalHours;
    }

    public function setTotalHours(?float $totalHours): self
    {
        $this->totalHours = $totalHours;

        return $this;
    }

    public function getTotalHoursBillable(): ?float
    {
        return $this->totalHoursBillable;
    }

    public function setTotalHoursBillable(?float $totalHoursBillable): self
    {
        $this->totalHoursBillable = $totalHoursBillable;

        return $this;
    }

    public function getTotalHoursNonBillable(): ?float
    {
        return $this->totalHoursNonBillable;
    }

    public function setTotalHoursNonBillable(?float $totalHoursNonBillable): self
    {
        $this->totalHoursNonBillable = $totalHoursNonBillable;

        return $this;
    }

    public function getTotalUninvoiced(): ?float
    {
        return $this->totalUninvoiced;
    }

    public function setTotalUninvoiced(?float $totalUninvoiced): self
    {
        $this->totalUninvoiced = $totalUninvoiced;

        return $this;
    }

    public function getTotalInvoiced(): ?float
    {
        return $this->totalInvoiced;
    }

    public function setTotalInvoiced(?float $totalInvoiced): self
    {
        $this->totalInvoiced = $totalInvoiced;

        return $this;
    }

    public function getTotalWrittenOff(): ?float
    {
        return $this->totalWrittenOff;
    }

    public function setTotalWrittenOff(?float $totalWrittenOff): self
    {
        $this->totalWrittenOff = $totalWrittenOff;

        return $this;
    }

    public function getTotalScheduled(): ?float
    {
        return $this->totalScheduled;
    }

    public function setTotalScheduled(?float $totalScheduled): self
    {
        $this->totalScheduled = $totalScheduled;

        return $this;
    }

    public function getBudgetPercentage(): ?int
    {
        return $this->budgetPercentage;
    }

    public function setBudgetPercentage(?int $budgetPercentage): self
    {
        $this->budgetPercentage = $budgetPercentage;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getSpend(): ?float
    {
        return $this->spend;
    }

    public function setSpend(?float $spend): self
    {
        $this->spend = $spend;

        return $this;
    }

    public function getRemainingBudget(): ?float
    {
        return $this->remainingBudget;
    }

    public function setRemainingBudget(?float $remainingBudget): self
    {
        $this->remainingBudget = $remainingBudget;

        return $this;
    }

    public function getCosts(): ?float
    {
        return $this->costs;
    }

    public function setCosts(?float $costs): self
    {
        $this->costs = $costs;

        return $this;
    }
}
