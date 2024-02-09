<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ApiResource]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: VehicleAd::class, mappedBy: 'category')]
    private Collection $vehicleAds;

    public function __construct()
    {
        $this->vehicleAds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, VehicleAd>
     */
    public function getVehicleAds(): Collection
    {
        return $this->vehicleAds;
    }

    public function addVehicleAd(VehicleAd $vehicleAd): static
    {
        if (!$this->vehicleAds->contains($vehicleAd)) {
            $this->vehicleAds->add($vehicleAd);
            $vehicleAd->setCategory($this);
        }

        return $this;
    }

    public function removeVehicleAd(VehicleAd $vehicleAd): static
    {
        if ($this->vehicleAds->removeElement($vehicleAd)) {
            // set the owning side to null (unless already changed)
            if ($vehicleAd->getCategory() === $this) {
                $vehicleAd->setCategory(null);
            }
        }

        return $this;
    }
}
