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
     * @var int
     *
     * @ORM\Column(name="business_sector_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $businessSectorId;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getPostId(): ?string
    {
        return $this->postId;
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




}
