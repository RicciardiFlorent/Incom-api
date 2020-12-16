<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Cv
 * @ApiResource
 * @ORM\Table(name="cv")
 * @ORM\Entity
 */
class Cv
{
    /**
     * @var int
     *
     * @ORM\Column(name="cv_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cvId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upload_date", type="date", nullable=false)
     */
    private $uploadDate;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    public function getCvId(): ?string
    {
        return $this->cvId;
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

    public function getUploadDate(): ?\DateTimeInterface
    {
        return $this->uploadDate;
    }

    public function setUploadDate(\DateTimeInterface $uploadDate): self
    {
        $this->uploadDate = $uploadDate;

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


}
