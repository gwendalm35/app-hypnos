<?php

namespace App\Entity;

use App\Repository\HotelRoomsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\VichUploaderBundle;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: HotelRoomsRepository::class)]
//**
 //* @property \DateTime $createdAt
 //*
 //*/
//@Vich\Uploadable()

class HotelRooms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $title;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2)]
    private $price;

    #[ORM\Column(type: 'string', length: 255)]
    private $booking_link;

    #[ORM\Column(type: 'string', length: 255)]
    private $file;

    #[ORM\ManyToMany(targetEntity: Images::class, inversedBy: 'hotelRooms')]
    private $images;

    #[ORM\OneToMany(mappedBy: 'hotelRooms', targetEntity: ReservationRooms::class, cascade: ['remove'])]
    private $reservation_rooms;

    #[ORM\ManyToOne(targetEntity: Hotels::class, inversedBy: 'hotel_rooms'  )]
    #[ORM\JoinColumn(nullable: false)]
    private $hotels;

    //**
     //* NOTE: This is not a mapped field of entity metadata, just a simple property.
     //* @Vich\UploadableField(mapping="images_directory", fileNameProperty="file")
     //* @var File|null
     //*/
    private $imageFile;

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile(File $file = null)
    {
        $this->imageFile = $file;

        if ($file){

            $this->createdAt = new \DateTime('now');
        }
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(String $file = null): self
    {
        $this->file = $file;

        return $this;
    }


    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->reservation_rooms = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getBookingLink(): ?string
    {
        return $this->booking_link;
    }

    public function setBookingLink(string $booking_link): self
    {
        $this->booking_link = $booking_link;

        return $this;
    }

    /**
     * @return Collection<int, Images>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        $this->images->removeElement($image);

        return $this;
    }

    /**
     * @return Collection<int, ReservationRooms>
     */
    public function getReservationRooms(): Collection
    {
        return $this->reservation_rooms;
    }

    public function addReservationRoom(ReservationRooms $reservationRoom): self
    {
        if (!$this->reservation_rooms->contains($reservationRoom)) {
            $this->reservation_rooms[] = $reservationRoom;
            $reservationRoom->setHotelRooms($this);
        }

        return $this;
    }

    public function removeReservationRoom(ReservationRooms $reservationRoom): self
    {
        if ($this->reservation_rooms->removeElement($reservationRoom)) {
            // set the owning side to null (unless already changed)
            if ($reservationRoom->getHotelRooms() === $this) {
                $reservationRoom->setHotelRooms(null);
            }
        }

        return $this;
    }

    public function getHotels(): ?Hotels
    {
        return $this->hotels;
    }

    public function setHotels(?Hotels $hotels): self
    {
        $this->hotels = $hotels;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getTitle();
    }

}
