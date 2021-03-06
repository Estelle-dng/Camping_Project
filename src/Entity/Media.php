<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @ORM\Table(name="media")
 * @Vich\Uploadable()
 * @UniqueEntity("filename")
 * @UniqueEntity("nom")
 */

class Media {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     * @var File|null
     * @Assert\Image(
     *     mimeTypes={"image/jpeg", "image/png"}
     * )
     * @Vich\UploadableField(mapping="slider_image", fileNameProperty="filename")
     */
    private $imageFile;

    /**
     * @Assert\NotBlank(message="model.media.error.empty",groups={"all"})
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * @var User $user
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Slider", mappedBy="media", cascade={"remove"})
     */
    private $sliders;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="media", cascade={"remove"})
     */
    private $categories;

    public function __toString()
    {
        return $this->filename;
    }
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;
    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * @param string|null $filename
     * @return Media
     */
    public function setFilename(?string $filename): Media
    {
        $this->filename = $filename;
        return $this;
    }
    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
    /**
     * @param File|null $imageFile
     * @return Media
     */
    public function setImageFile(?File $imageFile): Media
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile){
            $this->updatedAt = new \DateTime('now');
        }
        return $this;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }
    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }
    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }
    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getSliders()
    {
        return $this->sliders;
    }
    /**
     * @param mixed $sliders
     * @return Media
     */
    public function setSliders($sliders)
    {
        $this->sliders = $sliders;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @param mixed $category
     * @return Media
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     * @return Media
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }


}

