<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Companies
 * @ApiResource
 * @ORM\Table(name="companies", indexes={@ORM\Index(name="business_sector_id", columns={"business_sector_id"})})
 * @ORM\Entity
 */
class Companies
{
    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $companyId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="referent_lastname", type="string", length=255, nullable=false)
     */
    private $referentLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="referent_firstname", type="string", length=255, nullable=false)
     */
    private $referentFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="referent_email", type="string", length=255, nullable=false)
     */
    private $referentEmail;

    /**
     * @var int
     *
     * @ORM\Column(name="referent_phone", type="integer", nullable=false)
     */
    private $referentPhone;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="business_sector_id", type="bigint", nullable=false)
     */
    private $businessSectorId;

    public function getCompanyId(): ?string
    {
        return $this->companyId;
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

    public function getReferentLastname(): ?string
    {
        return $this->referentLastname;
    }

    public function setReferentLastname(string $referentLastname): self
    {
        $this->referentLastname = $referentLastname;

        return $this;
    }

    public function getReferentFirstname(): ?string
    {
        return $this->referentFirstname;
    }

    public function setReferentFirstname(string $referentFirstname): self
    {
        $this->referentFirstname = $referentFirstname;

        return $this;
    }

    public function getReferentEmail(): ?string
    {
        return $this->referentEmail;
    }

    public function setReferentEmail(string $referentEmail): self
    {
        $this->referentEmail = $referentEmail;

        return $this;
    }

    public function getReferentPhone(): ?int
    {
        return $this->referentPhone;
    }

    public function setReferentPhone(int $referentPhone): self
    {
        $this->referentPhone = $referentPhone;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getBusinessSectorId(): ?string
    {
        return $this->businessSectorId;
    }

    public function setBusinessSectorId(string $businessSectorId): self
    {
        $this->businessSectorId = $businessSectorId;

        return $this;
    }


}
