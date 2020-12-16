<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * BusinessSectors
 * @ApiResource
 * @ORM\Table(name="business_sectors")
 * @ORM\Entity
 */
class BusinessSectors
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \Companies
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Companies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="business_sector_id", referencedColumnName="business_sector_id")
     * })
     */
    private $businessSector;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBusinessSector(): ?Companies
    {
        return $this->businessSector;
    }

    public function setBusinessSector(?Companies $businessSector): self
    {
        $this->businessSector = $businessSector;

        return $this;
    }


}
