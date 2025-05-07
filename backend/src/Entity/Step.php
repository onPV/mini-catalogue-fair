<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity]
#[ApiResource]
class Step
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    /*#[ORM\Column(type: 'integer')]
    private int $order;
    */

    #[ORM\Column(name: 'step_order', type: 'integer')]
    private int $stepOrder;


    #[ORM\Column(type: 'text')]
    private string $description;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $duration = null;

    #[ORM\ManyToOne(targetEntity: Protocol::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Protocol $protocol;

    public function getId(): ?int { return $this->id; }

    /*public function getOrder(): int { return $this->order; }
    public function setOrder(int $order): self { $this->order = $order; return $this; }*/

    public function getStepOrder(): int { return $this->stepOrder; }
    public function setStepOrder(int $order): self { $this->stepOrder = $order; return $this; }


    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): self { $this->description = $description; return $this; }

    public function getDuration(): ?int { return $this->duration; }
    public function setDuration(?int $duration): self { $this->duration = $duration; return $this; }

    public function getProtocol(): Protocol { return $this->protocol; }
    public function setProtocol(Protocol $protocol): self { $this->protocol = $protocol; return $this; }
}