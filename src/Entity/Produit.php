<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
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
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $unite;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantiteMin;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbcheque;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreDeDistribution;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreDeLivraisonsRestantes;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $periodeDebut;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $periodeFin;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $actif;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $periodicite;                                                     

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $categorieid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="produits")
     */
    private $Categorie;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Distribution", mappedBy="produits")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Distribution", mappedBy="produits")
     */
    private $distributions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Contrats", mappedBy="produits")
     */
    private $contrats;

    public function __construct()
    {
        $this->date = new ArrayCollection();
        $this->distributions = new ArrayCollection();
        $this->contrats = new ArrayCollection();
    }


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

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(?string $unite): self
    {
        $this->unite = $unite;

        return $this;
    }

    public function getQuantiteMin(): ?int
    {
        return $this->quantiteMin;
    }

    public function setQuantiteMin(int $quantiteMin): self
    {
        $this->quantiteMin = $quantiteMin;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbcheque(): ?int
    {
        return $this->nbcheque;
    }

    public function setNbcheque(int $nbcheque): self
    {
        $this->nbcheque = $nbcheque;

        return $this;
    }

    public function getNombreDeDistribution(): ?int
    {
        return $this->nombreDeDistribution;
    }

    public function setNombreDeDistribution(?int $nombreDeDistribution): self
    {
        $this->nombreDeDistribution = $nombreDeDistribution;

        return $this;
    }

    public function getNombreDeLivraisonsRestantes(): ?int
    {
        return $this->nombreDeLivraisonsRestantes;
    }

    public function setNombreDeLivraisonsRestantes(int $nombreDeLivraisonsRestantes): self
    {
        $this->nombreDeLivraisonsRestantes = $nombreDeLivraisonsRestantes;

        return $this;
    }

    public function getPeriodeDebut(): ?string
    {
        return $this->periodeDebut;
    }

    public function setPeriodeDebut(?string $periodeDebut): self
    {
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    public function getPeriodeFin(): ?string
    {
        return $this->periodeFin;
    }

    public function setPeriodeFin(?string $periodeFin): self
    {
        $this->periodeFin = $periodeFin;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(?bool $actif): self
    {
        $this->actif = $actif;

        return $this;
    }

    public function getPeriodicite(): ?string
    {
        return $this->periodicite;
    }

    public function setPeriodicite(?string $periodicite): self
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    public function getCategorieid(): ?int
    {
        return $this->categorieid;
    }

    public function setCategorieid(?int $categorieid): self
    {
        $this->categorieid = $categorieid;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->Categorie;
    }

    public function setCategorie(?Categorie $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    /**
     * @return Collection|Distribution[]
     */
    public function getDate(): Collection
    {
        return $this->date;
    }

    public function addDate(Distribution $date): self
    {
        if (!$this->date->contains($date)) {
            $this->date[] = $date;
            $date->addProduit($this);
        }

        return $this;
    }

    public function removeDate(Distribution $date): self
    {
        if ($this->date->contains($date)) {
            $this->date->removeElement($date);
            $date->removeProduit($this);
        }

        return $this;
    }

    /**
     * @return Collection|Distribution[]
     */
    public function getDistributions(): Collection
    {
        return $this->distributions;
    }

    public function addDistribution(Distribution $distribution): self
    {
        if (!$this->distributions->contains($distribution)) {
            $this->distributions[] = $distribution;
            $distribution->addProduit($this);
        }

        return $this;
    }

    public function removeDistribution(Distribution $distribution): self
    {
        if ($this->distributions->contains($distribution)) {
            $this->distributions->removeElement($distribution);
            $distribution->removeProduit($this);
        }

        return $this;
    }

    /**
     * @return Collection|Contrats[]
     */
    public function getContrats(): Collection
    {
        return $this->contrats;
    }

    public function addContrat(Contrats $contrat): self
    {
        if (!$this->contrats->contains($contrat)) {
            $this->contrats[] = $contrat;
            $contrat->addProduit($this);
        }

        return $this;
    }

    public function removeContrat(Contrats $contrat): self
    {
        if ($this->contrats->contains($contrat)) {
            $this->contrats->removeElement($contrat);
            $contrat->removeProduit($this);
        }

        return $this;
    }

}
