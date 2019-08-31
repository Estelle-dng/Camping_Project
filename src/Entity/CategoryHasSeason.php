<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryHasSeasonRepository")
 */
class CategoryHasSeason
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Season", inversedBy="CategoryHasSeason")
     */
    private $season;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="CategorySeason")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommandDetails", mappedBy="Category_has_season")
     */
    private $commandDetails;

    public function __construct()
    {
        $this->commandDetails = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getCommandDetails(): ?CommandDetails
    {
        return $this->commandDetails;
    }

    public function setCommandDetails(?CommandDetails $commandDetails): self
    {
        $this->commandDetails = $commandDetails;

        return $this;
    }

    public function addCommandDetail(CommandDetails $commandDetail): self
    {
        if (!$this->commandDetails->contains($commandDetail)) {
            $this->commandDetails[] = $commandDetail;
            $commandDetail->setCategoryHasSeason($this);
        }

        return $this;
    }

    public function removeCommandDetail(CommandDetails $commandDetail): self
    {
        if ($this->commandDetails->contains($commandDetail)) {
            $this->commandDetails->removeElement($commandDetail);
            // set the owning side to null (unless already changed)
            if ($commandDetail->getCategoryHasSeason() === $this) {
                $commandDetail->setCategoryHasSeason(null);
            }
        }

        return $this;
    }
}