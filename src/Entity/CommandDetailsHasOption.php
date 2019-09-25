<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandDetailsHasOptionRepository")
 */
class CommandDetailsHasOption
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Option", inversedBy="Option_CommandDetails_has_option", fetch="EAGER")
     * @var string
     * @param string $Options
     * @return CommandDetailsHasOption
     */
    public $Options;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommandDetails", mappedBy="commandDetailsHasOption")
     */
    private $CommandDetails;

    public function __construct()
    {
        $this->CommandDetails = new ArrayCollection();
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

    public function getOptions(): ?Option
    {
        return $this->Options;
    }

    public function setOptions(?Option $Options): self
    {
        $this->Options = $Options;

        return $this;
    }

    /**
     * @return Collection|CommandDetails[]
     */
    public function getCommandDetails(): Collection
    {
        return $this->CommandDetails;
    }

    public function addCommandDetail(CommandDetails $commandDetail): self
    {
        if (!$this->CommandDetails->contains($commandDetail)) {
            $this->CommandDetails[] = $commandDetail;
            $commandDetail->setCommandDetailsHasOption($this);
        }

        return $this;
    }

    public function removeCommandDetail(CommandDetails $commandDetail): self
    {
        if ($this->CommandDetails->contains($commandDetail)) {
            $this->CommandDetails->removeElement($commandDetail);
            // set the owning side to null (unless already changed)
            if ($commandDetail->getCommandDetailsHasOption() === $this) {
                $commandDetail->setCommandDetailsHasOption(null);
            }
        }

        return $this;
    }

    /*public function __toString(){
        // to show the name of the Category in the select
        return $this->Options;
        // to show the id of the Category in the select
        // return $this->id;
    }*/

    public function __toString(): ?string {
        return $this->Options;
    }
}
