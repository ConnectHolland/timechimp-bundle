<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\TimechimpBundle\Api\Model;

class Tag
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var bool|null
     */
    protected $active;
    /**
     * Time = 1, Expense = 2, Mileage = 3, Project = 4, Customer = 5, User = 6.
     *
     * @var int|null
     */
    protected $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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
     * Time = 1, Expense = 2, Mileage = 3, Project = 4, Customer = 5, User = 6.
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * Time = 1, Expense = 2, Mileage = 3, Project = 4, Customer = 5, User = 6.
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
