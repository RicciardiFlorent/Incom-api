<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Offers
 * @ApiResource
 * @ORM\Table(name="offers", indexes={@ORM\Index(name="offer_sector_id", columns={"offer_sector_id"}), @ORM\Index(name="employee_id", columns={"employee_id"}), @ORM\Index(name="contract_id", columns={"contract_id"})})
 * @ORM\Entity
 */
class Offers
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="posted_at", type="date", nullable=false)
     */
    private $postedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="fast_apply", type="integer", nullable=false)
     */
    private $fastApply;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="salary", type="string", length=255, nullable=false)
     */
    private $salary;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255, nullable=false)
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var int
     *
     * @ORM\Column(name="offer_sector_id", type="bigint", nullable=false)
     */
    private $offerSectorId;

    /**
     * @var \Contracts
     *
     * @ORM\ManyToOne(targetEntity="Contracts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contract_id", referencedColumnName="contract_id")
     * })
     */
    private $contract;

    /**
     * @var \CandidateOffer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CandidateOffer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offer_id", referencedColumnName="offer_id")
     * })
     */
    private $offer;

    /**
     * @var \Employees
     *
     * @ORM\ManyToOne(targetEntity="Employees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="employee_id")
     * })
     */
    private $employee;

    public function getPostedAt(): ?\DateTimeInterface
    {
        return $this->postedAt;
    }

    public function setPostedAt(\DateTimeInterface $postedAt): self
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFastApply(): ?int
    {
        return $this->fastApply;
    }

    public function setFastApply(int $fastApply): self
    {
        $this->fastApply = $fastApply;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(string $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getOfferSectorId(): ?string
    {
        return $this->offerSectorId;
    }

    public function setOfferSectorId(string $offerSectorId): self
    {
        $this->offerSectorId = $offerSectorId;

        return $this;
    }

    public function getContract(): ?Contracts
    {
        return $this->contract;
    }

    public function setContract(?Contracts $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getOffer(): ?CandidateOffer
    {
        return $this->offer;
    }

    public function setOffer(?CandidateOffer $offer): self
    {
        $this->offer = $offer;

        return $this;
    }

    public function getEmployee(): ?Employees
    {
        return $this->employee;
    }

    public function setEmployee(?Employees $employee): self
    {
        $this->employee = $employee;

        return $this;
    }


}
