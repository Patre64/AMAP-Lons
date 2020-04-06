<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $groupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CP;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $telFixe;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $telPort1;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $telPort2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $actif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $identifiant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $charteAcceptee;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrats", mappedBy="User")
     */
    private $contrats;

    public function __construct()
    {
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCP(): ?int
    {
        return $this->CP;
    }

    public function setCP(?int $CP): self
    {
        $this->CP = $CP;

        return $this;
    }

    public function getTelFixe(): ?string
    {
        return $this->telFixe;
    }

    public function setTelFixe(?string $telFixe): self
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    public function getTelPort1(): ?string
    {
        return $this->telPort1;
    }

    public function setTelPort1(?string $telPort1): self
    {
        $this->telPort1 = $telPort1;

        return $this;
    }

    public function getTelPort2(): ?string
    {
        return $this->telPort2;
    }

    public function setTelPort2(?string $telPort2): self
    {
        $this->telPort2 = $telPort2;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): self
    {
        $this->actif = $actif;

        return $this;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCharteAcceptee(): ?bool
    {
        return $this->charteAcceptee;
    }

    public function setCharteAcceptee(bool $charteAcceptee): self
    {
        $this->charteAcceptee = $charteAcceptee;

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
            $contrat->addUser($this);
        }

        return $this;
    }

    public function removeContrat(Contrats $contrat): self
    {
        if ($this->contrats->contains($contrat)) {
            $this->contrats->removeElement($contrat);
            $contrat->removeUser($this);
        }

        return $this;
    }
}
