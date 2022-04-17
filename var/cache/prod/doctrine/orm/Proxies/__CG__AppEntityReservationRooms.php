<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ReservationRooms extends \App\Entity\ReservationRooms implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'start_date', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'end_date', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'users', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'hotels', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'hotelRooms', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'totalPrice'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'start_date', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'end_date', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'users', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'hotels', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'hotelRooms', '' . "\0" . 'App\\Entity\\ReservationRooms' . "\0" . 'totalPrice'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ReservationRooms $proxy) {
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
    public function getStartDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', []);

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate(\DateTimeInterface $start_date): \App\Entity\ReservationRooms
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', [$start_date]);

        return parent::setStartDate($start_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDate', []);

        return parent::getEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndDate(\DateTimeInterface $end_date): \App\Entity\ReservationRooms
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndDate', [$end_date]);

        return parent::setEndDate($end_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): ?\App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsers(?\App\Entity\Users $users): \App\Entity\ReservationRooms
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsers', [$users]);

        return parent::setUsers($users);
    }

    /**
     * {@inheritDoc}
     */
    public function getHotels(): ?\App\Entity\Hotels
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHotels', []);

        return parent::getHotels();
    }

    /**
     * {@inheritDoc}
     */
    public function setHotels(?\App\Entity\Hotels $hotels): \App\Entity\ReservationRooms
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHotels', [$hotels]);

        return parent::setHotels($hotels);
    }

    /**
     * {@inheritDoc}
     */
    public function getHotelRooms(): ?\App\Entity\HotelRooms
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHotelRooms', []);

        return parent::getHotelRooms();
    }

    /**
     * {@inheritDoc}
     */
    public function setHotelRooms(?\App\Entity\HotelRooms $hotelRooms): \App\Entity\ReservationRooms
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHotelRooms', [$hotelRooms]);

        return parent::setHotelRooms($hotelRooms);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalPrice(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalPrice', []);

        return parent::getTotalPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalPrice(string $totalPrice): \App\Entity\ReservationRooms
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalPrice', [$totalPrice]);

        return parent::setTotalPrice($totalPrice);
    }

}
