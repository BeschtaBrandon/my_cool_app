<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taskName;

    /**
     * @ORM\Column(type="boolean")
     */
    private $taskComplete;

    /**
     * @ORM\ManyToOne(targetEntity=Person::class, inversedBy="tasks")
     */
    private $assignee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    public function setTaskName(string $taskName): self
    {
        $this->taskName = $taskName;

        return $this;
    }

    public function getTaskComplete(): ?bool
    {
        return $this->taskComplete;
    }

    public function setTaskComplete(bool $taskComplete): self
    {
        $this->taskComplete = $taskComplete;

        return $this;
    }

    public function getAssignee(): ?Person
    {
        return $this->assignee;
    }

    public function setAssignee(?Person $assignee): self
    {
        $this->assignee = $assignee;

        return $this;
    }
}
