<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\OrderDetailsRepository;

#[ORM\Entity(repositoryClass: OrderDetailsRepository::class)]
#[ORM\Table(name: 'order_details')]
class OrderDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $orderDetailId = null;

    #[ORM\ManyToOne(targetEntity: Orders::class)]
    #[ORM\JoinColumn(name: 'order_id', referencedColumnName: 'order_id', nullable: false, onDelete: 'CASCADE')]
    private ?Orders $order = null;

    #[ORM\Column(length: 255)]
    private ?string $albumId = null;

    #[ORM\Column(length: 20)]
    private ?string $type = null;

    #[ORM\Column(type: 'integer')]
    private ?int $quantity = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private ?float $price = null;

    // Getters & Setters...
    // Getters pour orderDetailId
    public function getOrderDetailId(): ?int
    {
        return $this->orderDetailId;
    }

    // Setters pour orderDetailId
    public function setOrderDetailId(int $orderDetailId): self
    {
        $this->orderDetailId = $orderDetailId;

        return $this;
    }

    // Getters pour order
    public function getOrder(): ?Orders
    {
        return $this->order;
    }

    // Setters pour order
    public function setOrder(?Orders $order): self
    {
        $this->order = $order;

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

    // Getters pour unitPrice
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    // Setters pour unitPrice
    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    // Getters pour totalAmount
    public function getTotalAmount(): ?float
    {
        return $this->quantity * $this->unitPrice;
    }

    // Setters pour totalAmount
    public function setTotalAmount(float $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    
}
