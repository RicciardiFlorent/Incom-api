<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CurrentSituations
 * @ApiResource
 * @ORM\Table(name="current_situations")
 * @ORM\Entity
 */
class CurrentSituations
{
    /**
     * @var int
     *
     * @ORM\Column(name="current_situation_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $currentSituationId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getCurrentSituationId(): ?string
    {
        return $this->currentSituationId;
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
