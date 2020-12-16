<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * OfferSectors
 * @ApiResource
 * @ORM\Table(name="offer_sectors")
 * @ORM\Entity
 */
class OfferSectors
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \Offers
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Offers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offer_sector_id", referencedColumnName="offer_sector_id")
     * })
     */
    private $offerSector;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOfferSector(): ?Offers
    {
        return $this->offerSector;
    }

    public function setOfferSector(?Offers $offerSector): self
    {
        $this->offerSector = $offerSector;

        return $this;
    }


}
