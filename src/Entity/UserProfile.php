<?php

namespace App\Entity;

use App\Repository\UserProfileRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserProfileRepository::class)]
class UserProfile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $user_profile_id;

    #[ORM\Column(type: 'boolean')]
    private $gender;

    #[ORM\Column(type: 'date')]
    private $date_of_birth;

    #[ORM\Column(type: 'float')]
    private $height;

    #[ORM\Column(type: 'float')]
    private $weight;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserProfileId(): ?int
    {
        return $this->user_profile_id;
    }

    public function setUserProfileId(int $user_profile_id): self
    {
        $this->user_profile_id = $user_profile_id;

        return $this;
    }

    public function isGender(): ?bool
    {
        return $this->gender;
    }

    public function setGender(bool $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
