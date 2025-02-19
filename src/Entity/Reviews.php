<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReviewsRepository;

#[ORM\Entity(repositoryClass: ReviewsRepository::class)]
#[ORM\Table(name: 'reviews')]
class Reviews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $reviewId = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private ?Users $user = null;    

    #[ORM\ManyToOne(targetEntity: Products::class)] // Changement pour lier à un produit
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'product_id', nullable: false, onDelete: 'CASCADE')]
    private ?Products $product = null;

    #[ORM\Column(type: 'integer')]
    private ?int $rating = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $comment = null;

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $createdAt = null;

    // Getters & Setters...

    public function getReviewId(): ?int
    {
        return $this->reviewId;
    }

    public function setReviewId(int $reviewId): self
    {
        $this->reviewId = $reviewId;
        return $this;
    }

    // autres getters et setters...



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

    // Getters pour rating
    public function getRating(): ?int
    {
        return $this->rating;
    }

    // Setters pour rating
    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    // Getters pour comment
    public function getComment(): ?string
    {
        return $this->comment;
    }

    // Setters pour comment
    public function setComment(string $comment): self
    {
        $this->comment = $comment;

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
