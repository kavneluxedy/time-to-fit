<?php

namespace App\Entity;

use App\Repository\UserProfileRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use \Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints as Assert;

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
    #[Assert\NotBlank]
    #[Assert\Type(\Boolean::class)]
    private $gender;

    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank]
    #[Assert\Type(\Date::class)]
    private $date_of_birth;

    #[ORM\Column(type: 'float')]
    #[Assert\NotBlank]
    #[Assert\Type(\NumberType::class)]
    private $height;

    #[ORM\Column(type: 'float')]
    #[Assert\NotBlank]
    #[Assert\Type(\NumberType::class)]
    private $weight;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank]
    #[Assert\Type(\TextareaType::class)]
    private $morphology;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank]
    #[Assert\Type(TextareaType::class)]
    private $daily_habit;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Assert\Type(TextareaType::class)]
    private $disponibility_hours;

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
