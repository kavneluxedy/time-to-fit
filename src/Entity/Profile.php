<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean')]
    private $gender;

    #[ORM\Column(type: 'date')]
    private $date_of_birth;

    #[ORM\Column(type: 'float')]
    private $height;

    #[ORM\Column(type: 'float')]
    private $weight;

    #[ORM\Column(type: 'string', length: 50)]
    private $morphology;

    #[ORM\Column(type: 'string', length: 50)]
    private $daily_habit;

    #[ORM\Column(type: 'string', length: 255)]
    private $disponibility_hours;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMorphology(): ?string
    {
        return $this->morphology;
    }

    public function setMorphology(string $morphology): self
    {
        $this->morphology = $morphology;

        return $this;
    }

    public function getDailyHabit(): ?string
    {
        return $this->daily_habit;
    }

    public function setDailyHabit(string $daily_habit): self
    {
        $this->daily_habit = $daily_habit;

        return $this;
    }

    public function getDisponibilityHours(): ?string
    {
        return $this->disponibility_hours;
    }

    public function setDisponibilityHours(string $disponibility_hours): self
    {
        $this->disponibility_hours = $disponibility_hours;

        return $this;
    }
}
