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

    #[ORM\Column(length: 255)]
    private ?string $albumId = null;

    #[ORM\Column(length: 255)]
    private ?string $albumImage = null;

    #[ORM\Column(length: 255)]
    private ?string $albumTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $artistName = null;

    #[ORM\Column(length: 20)]
    private ?string $type = null;

    #[ORM\Column(type: 'integer', options: ['default' => 1])]
    private int $quantity = 1;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $totalPrice = 0;

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

    // Getters pour albumId
    public function getAlbumId(): ?string
    {
        return $this->albumId;
    }

    // Setters pour albumId
    public function setAlbumId(string $albumId): self
    {
        $this->albumId = $albumId;

        return $this;
    }

    // Getters pour albumImage
    public function getAlbumImage(): ?string
    {
        return $this->albumImage;
    }

    // Setters pour albumImage
    public function setAlbumImage(string $albumImage): self
    {
        $this->albumImage = $albumImage;

        return $this;
    }

    // Getters pour albumTitle
    public function getAlbumTitle(): ?string
    {
        return $this->albumTitle;
    }

    // Setters pour albumTitle
    public function setAlbumTitle(string $albumTitle): self
    {
        $this->albumTitle = $albumTitle;

        return $this;
    }

    // Getters pour artistName
    public function getArtistName(): ?string
    {
        return $this->artistName;
    }

    // Setters pour artistName
    public function setArtistName(string $artistName): self
    {
        $this->artistName = $artistName;

        return $this;
    }

    // Getters pour type
    public function getType(): ?string
    {
        return $this->type;
    }

    // Setters pour type
    public function setType(string $type): self
    {
        $this->type = $type;

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

    // Getters pour totalPrice
    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    // Setters pour totalPrice
    public function setTotalPrice(int $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

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
