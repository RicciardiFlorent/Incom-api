<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CandidateOffer
 * @ApiResource
 * @ORM\Table(name="candidate_offer", indexes={@ORM\Index(name="offer_id", columns={"offer_id"}), @ORM\Index(name="candidate_id", columns={"candidate_id"})})
 * @ORM\Entity
 */
class CandidateOffer
{
    /**
     * @var int
     *
     * @ORM\Column(name="candidate_offer_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $candidateOfferId;

    /**
     * @var int
     *
     * @ORM\Column(name="candidate_id", type="bigint", nullable=false)
     */
    private $candidateId;

    /**
     * @var int
     *
     * @ORM\Column(name="offer_id", type="bigint", nullable=false)
     */
    private $offerId;

    public function getCandidateOfferId(): ?string
    {
        return $this->candidateOfferId;
    }

    public function getCandidateId(): ?string
    {
        return $this->candidateId;
    }

    public function setCandidateId(string $candidateId): self
    {
        $this->candidateId = $candidateId;

        return $this;
    }

    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    public function setOfferId(string $offerId): self
    {
        $this->offerId = $offerId;

        return $this;
    }


}
