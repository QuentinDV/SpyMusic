<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CartRepository;

#[ORM\Entity(repositoryClass: CartRepository::class)]
#[ORM\Table(name: 'cart')]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $cartId = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private ?Users $user = null;    

    #[ORM\ManyToOne(targetEntity: Products::class)]
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'product_id', nullable: false, onDelete: 'CASCADE')]
    private ?Products $product = null;

    #[ORM\Column(type: 'integer', options: ['default' => 1])]
    private int $quantity = 1;

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $addedAt = null;

    // Getters & Setters...
    // Getters pour cartId
    public function getCartId(): ?int
    {
        return $this->cartId;
    }

    // Setters pour cartId
    public function setCartId(int $cartId): self
    {
        $this->cartId = $cartId;

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

    // Getters pour product
    public function getProduct(): ?Products
    {
        return $this->product;
    }

    // Setters pour product
    public function setProduct(?Products $product): self
    {
        $this->product = $product;

        return $this;
    }

    // Getters pour quantity
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    // Setters pour quantity
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    // Getters pour addedAt
    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->addedAt;
    }

    // Setters pour addedAt
    public function setAddedAt(\DateTimeInterface $addedAt): self
    {
        $this->addedAt = $addedAt;

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

}
