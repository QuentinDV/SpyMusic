<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\OrdersRepository;

#[ORM\Entity(repositoryClass: OrdersRepository::class)]
#[ORM\Table(name: 'orders')]
class Orders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $orderId = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private ?Users $user = null;

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $orderDate = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private ?float $totalAmount = null;

    #[ORM\Column(length: 20, options: ['default' => 'En attente'])]
    private string $status = 'En attente';

    // Getters & Setters...

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    // Setters pour orderId
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    // Getters pour user
    public function getUser(): ?Users
    {
        return $this->user;
    }

    // Setters pour user
    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    // Getters pour orderDate
    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->orderDate;
    }

    // Setters pour orderDate
    public function setOrderDate(\DateTimeInterface $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    // Getters pour totalAmount
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    // Setters pour totalAmount
    public function setTotalAmount(float $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    // Getters pour status
    public function getStatus(): ?string
    {
        return $this->status;
    }

    // Setters pour status
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    
}
