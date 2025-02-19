<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProductsRepository;

#[ORM\Entity(repositoryClass: ProductsRepository::class)]
#[ORM\Table(name: 'products')]
class Products
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $productId = null;

    #[ORM\Column(length: 255)]
    private ?string $albumId = null;

    #[ORM\Column(length: 255)]
    private ?string $albumTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $artistName = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $releaseDate = null;

    #[ORM\Column(length: 500)]
    private ?string $imageUrl = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $spotifyUrl = null;

    #[ORM\Column(length: 50)]
    private ?string $format = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private ?float $price = null;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $stockQuantity = 0;

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $createdAt = null;

    // Getters & Setters...
    // Getters pour productId
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    // Setters pour productId
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

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

    // Getters pour releaseDate
    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    // Setters pour releaseDate
    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    // Getters pour imageUrl
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    // Setters pour imageUrl
    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    // Getters pour spotifyUrl
    public function getSpotifyUrl(): ?string
    {
        return $this->spotifyUrl;
    }

    // Setters pour spotifyUrl
    public function setSpotifyUrl(string $spotifyUrl): self
    {
        $this->spotifyUrl = $spotifyUrl;

        return $this;
    }

    // Getters pour format
    public function getFormat(): ?string
    {
        return $this->format;
    }

    // Setters pour format
    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    // Getters pour price
    public function getPrice(): ?float
    {
        return $this->price;
    }

    // Setters pour price
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    // Getters pour stockQuantity
    public function getStockQuantity(): ?int
    {
        return $this->stockQuantity;
    }

    // Setters pour stockQuantity
    public function setStockQuantity(int $stockQuantity): self
    {
        $this->stockQuantity = $stockQuantity;

        return $this;
    }

    // Getters pour createdAt
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    // Setters pour createdAt
    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    
}
