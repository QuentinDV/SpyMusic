<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AddressRepository;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
#[ORM\Table(name: 'address')]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $addressId = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private ?Users $user = null;

    #[ORM\Column(length: 255)]
    private ?string $street = null;

    #[ORM\Column(length: 100)]
    private ?string $city = null;

    #[ORM\Column(length: 20)]
    private ?string $postalCode = null;

    #[ORM\Column(length: 100)]
    private ?string $country = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $addressType = null;  // Nouveau champ pour spécifier le type d'adresse

    // Getters & Setters...

    public function getAddressId(): ?int
    {
        return $this->addressId;
    }

    // autres getters et setters...



    // Setters pour addressId
    public function setAddressId(int $addressId): self
    {
        $this->addressId = $addressId;

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

    // Getters pour street
    public function getStreet(): ?string
    {
        return $this->street;
    }

    // Setters pour street
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    // Get
    public function getCity(): ?string
    {
        return $this->city;
    }

    // Set
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    // Get
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    // Set
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    // Get
    public function getCountry(): ?string
    {
        return $this->country;
    }

    // Set
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    
}
