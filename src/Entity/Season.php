<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeasonRepository")
 */
class Season
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     */

    public $dateStart;

    /**
     * @ORM\Column(type="date")
     * @Assert\Expression("value >= this.dateStart")
     */
    private $dateEnd;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CategoryHasSeason", mappedBy="season",  cascade={"remove"})
     */
    private $CategoryHasSeason;


    public function __construct()
    {
        $this->CategoryHasSeason = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * @return Collection|CategoryHasSeason[]
     */
    public function getCategoryHasSeason(): Collection
    {
        return $this->CategoryHasSeason;
    }

    public function addCategoryHasSeason(CategoryHasSeason $categoryHasSeason): self
    {
        if (!$this->CategoryHasSeason->contains($categoryHasSeason)) {
            $this->CategoryHasSeason[] = $categoryHasSeason;
            $categoryHasSeason->setSeason($this);
        }

        return $this;
    }

    public function removeCategoryHasSeason(CategoryHasSeason $categoryHasSeason): self
    {
        if ($this->CategoryHasSeason->contains($categoryHasSeason)) {
            $this->CategoryHasSeason->removeElement($categoryHasSeason);
            // set the owning side to null (unless already changed)
            if ($categoryHasSeason->getSeason() === $this) {
                $categoryHasSeason->setSeason(null);
            }
        }

        return $this;
    }


}
