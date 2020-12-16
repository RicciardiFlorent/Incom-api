<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Contracts
 * @ApiResource()
 * @ORM\Table(name="contracts")
 * @ORM\Entity
 */
class Contracts
{
    /**
     * @var int
     *
     * @ORM\Column(name="contract_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contractId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    public function getContractId(): ?string
    {
        return $this->contractId;
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
