<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Hotels extends \App\Entity\Hotels implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'fileHotel', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'reservation_rooms', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'hotel_rooms', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'imageFiles'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'fileHotel', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'reservation_rooms', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'hotel_rooms', '' . "\0" . 'App\\Entity\\Hotels' . "\0" . 'imageFiles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Hotels $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getImageFiles(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFiles', []);

        return parent::getImageFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFiles(\Symfony\Component\HttpFoundation\File\File $fileHotel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFiles', [$fileHotel]);

        return parent::setImageFiles($fileHotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileHotel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileHotel', []);

        return parent::getFileHotel();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileHotel(string $fileHotel = NULL): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileHotel', [$fileHotel]);

        return parent::setFileHotel($fileHotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(string $address): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\App\Entity\Users $user): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\App\Entity\Users $user): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservationRooms(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservationRooms', []);

        return parent::getReservationRooms();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservationRoom(\App\Entity\ReservationRooms $reservationRoom): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservationRoom', [$reservationRoom]);

        return parent::addReservationRoom($reservationRoom);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservationRoom(\App\Entity\ReservationRooms $reservationRoom): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservationRoom', [$reservationRoom]);

        return parent::removeReservationRoom($reservationRoom);
    }

    /**
     * {@inheritDoc}
     */
    public function getHotelRooms(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHotelRooms', []);

        return parent::getHotelRooms();
    }

    /**
     * {@inheritDoc}
     */
    public function addHotelRoom(\App\Entity\HotelRooms $hotelRoom): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHotelRoom', [$hotelRoom]);

        return parent::addHotelRoom($hotelRoom);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHotelRoom(\App\Entity\HotelRooms $hotelRoom): \App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHotelRoom', [$hotelRoom]);

        return parent::removeHotelRoom($hotelRoom);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}