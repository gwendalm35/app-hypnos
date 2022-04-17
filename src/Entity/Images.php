<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;

#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $bin;

    #[ORM\ManyToMany(targetEntity: HotelRooms::class, mappedBy: 'images' )]
    private $hotelRooms;

    #[ORM\ManyToMany(targetEntity: HotelRooms::class, mappedBy: 'images' )]
    private $hotels;

    public function __construct()
    {
        $this->hotelRooms = new ArrayCollection();
        $this->hotels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {        $this->name = $name;

        return $this;
    }

    public function getBin()
    {
        return $this->bin;
    }

    public function setBin($bin): self
    {
        $this->bin = $bin;

        return $this;
    }

    /**
     * @return Collection<int, HotelRooms>
     */
    public function getHotelRooms(): ?Collection
    {
        return $this->hotelRooms;
    }

    public function addHotelRoom(HotelRooms $hotelRoom): self
    {
        if (!$this->hotelRooms->contains($hotelRoom)) {
            $this->hotelRooms[] = $hotelRoom;
            $hotelRoom->addImage($this);
        }

        return $this;
    }

    public function removeHotelRoom(HotelRooms $hotelRoom): self
    {
        if ($this->hotelRooms->removeElement($hotelRoom)) {
            $hotelRoom->removeImage($this);
        }

        return $this;
    }


    /**
     * @return Collection<int, Hotels>
     */
    public function getHotels(): ?Collection
    {
        return $this->hotels;
    }

    public function addHotel(Hotels $hotel): self
    {
        if (!$this->hotels->contains($hotel)) {
            $this->hotels[] = $hotel;
            $hotel->addImage($this);
        }

        return $this;
    }

    public function removeHotel(Hotels $hotel): self
    {
        if ($this->hotels->removeElement($hotel)) {
            $hotel->removeImage($this);
        }

        return $this;
    }


    public function __toString(): string
    {
       return $this->getName();
    }
}
