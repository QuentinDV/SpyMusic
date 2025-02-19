<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`users`')]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_USERNAME', fields: ['username'])]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $userId = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $username = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $passwordHash = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $accessToken = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $refreshToken = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $role = 'client';  // Valeur par défaut 'client'


    // Getter et setter pour userId
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    // Getter et setter pour username
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;
        return $this;
    }

    // Getter et setter pour email
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    // Méthode obligatoire pour UserInterface
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    // Getter et setter pour passwordHash
    public function getPassword(): ?string
    {
        return $this->passwordHash;
    }

    public function setPassword(string $passwordHash): static
    {
        $this->passwordHash = $passwordHash;
        return $this;
    }

    // Méthode obligatoire pour PasswordAuthenticatedUserInterface
    public function eraseCredentials(): void
    {
        // Ici, on n'a rien à effacer d'autre que le mot de passe
    }

    // Getter et setter pour accessToken
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): static
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    // Getter et setter pour refreshToken
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(?string $refreshToken): static
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    // Getter et setter pour role
    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;
        return $this;
    }

    // Implémentation des rôles (méthode exigée par UserInterface)
    public function getRoles(): array
    {
        return [$this->role];  // Le rôle est soit 'client' soit 'admin'
    }
}
