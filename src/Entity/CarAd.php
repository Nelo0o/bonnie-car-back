<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CarAdRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarAdRepository::class)]
#[ApiResource]
class CarAd
{
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column]
  private ?int $id = null;

  #[ORM\Column(length: 255)]
  private ?string $location = null;

  #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
  private ?string $price = null;

  #[ORM\Column]
  private ?int $kilometers = null;

  #[ORM\Column(length: 255)]
  private ?string $model = null;

  #[ORM\Column]
  private ?int $horsepower = null;

  #[ORM\Column]
  private ?int $year = null;

  #[ORM\Column]
  private ?int $engine_capacity = null;

  #[ORM\Column(length: 255)]
  private ?string $engine_type = null;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getLocation(): ?string
  {
    return $this->location;
  }

  public function setLocation(string $location): static
  {
    $this->location = $location;

    return $this;
  }

  public function getPrice(): ?string
  {
    return $this->price;
  }

  public function setPrice(string $price): static
  {
    $this->price = $price;

    return $this;
  }

  public function getKilometers(): ?int
  {
    return $this->kilometers;
  }

  public function setKilometers(int $kilometers): static
  {
    $this->kilometers = $kilometers;

    return $this;
  }

  public function getModel(): ?string
  {
    return $this->model;
  }

  public function setModel(string $model): static
  {
    $this->model = $model;

    return $this;
  }

  public function getHorsepower(): ?int
  {
    return $this->horsepower;
  }

  public function setHorsepower(int $horsepower): static
  {
    $this->horsepower = $horsepower;

    return $this;
  }

  public function getYear(): ?int
  {
    return $this->year;
  }

  public function setYear(int $year): static
  {
    $this->year = $year;

    return $this;
  }

  public function getEngineCapacity(): ?int
  {
    return $this->engine_capacity;
  }

  public function setEngineCapacity(int $engine_capacity): static
  {
    $this->engine_capacity = $engine_capacity;

    return $this;
  }

  public function getEngineType(): ?string
  {
    return $this->engine_type;
  }

  public function setEngineType(string $engine_type): static
  {
    $this->engine_type = $engine_type;

    return $this;
  }
}
