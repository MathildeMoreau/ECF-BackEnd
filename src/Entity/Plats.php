<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\BooleanFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\Post;
use App\Repository\PlatsRepository;
use App\State\PlatPersister;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatsRepository::class)]
#[Post(processor: PlatPersister::class)]
#[
    ApiResource(),
    ApiFilter(SearchFilter::class, properties: ['categorie' => 'exact']),
    ApiFilter(BooleanFilter::class, properties: ['isMenu1', 'isMenu2', 'isMenu3'])
]
class Plats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $titre_photo = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $add_date = null;

    #[ORM\ManyToOne(inversedBy: 'plats')]
    private ?Categorie $categorie = null;

    #[ORM\Column]
    private ?bool $isSpecialite = null;

    #[ORM\Column]
    private ?bool $isVegan = null;

    #[ORM\Column]
    private ?bool $isMenu1 = null;

    #[ORM\Column]
    private ?bool $isMenu2 = null;

    #[ORM\Column]
    private ?bool $isMenu3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getTitrePhoto(): ?string
    {
        return $this->titre_photo;
    }

    public function setTitrePhoto(?string $titre_photo): self
    {
        $this->titre_photo = $titre_photo;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAddDate(): ?\DateTimeInterface
    {
        return $this->add_date;
    }

    public function setAddDate(\DateTimeInterface $add_date): self
    {
        $this->add_date = $add_date;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function isIsSpecialite(): ?bool
    {
        return $this->isSpecialite;
    }

    public function setIsSpecialite(bool $isSpecialite): self
    {
        $this->isSpecialite = $isSpecialite;

        return $this;
    }

    public function isIsVegan(): ?bool
    {
        return $this->isVegan;
    }

    public function setIsVegan(bool $isVegan): self
    {
        $this->isVegan = $isVegan;

        return $this;
    }

    public function isIsMenu1(): ?bool
    {
        return $this->isMenu1;
    }

    public function setIsMenu1(bool $isMenu1): self
    {
        $this->isMenu1 = $isMenu1;

        return $this;
    }

    public function isIsMenu2(): ?bool
    {
        return $this->isMenu2;
    }

    public function setIsMenu2(bool $isMenu2): self
    {
        $this->isMenu2 = $isMenu2;

        return $this;
    }

    public function isIsMenu3(): ?bool
    {
        return $this->isMenu3;
    }

    public function setIsMenu3(bool $isMenu3): self
    {
        $this->isMenu3 = $isMenu3;

        return $this;
    }
}
