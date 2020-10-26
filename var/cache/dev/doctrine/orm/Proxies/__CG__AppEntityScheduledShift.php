<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ScheduledShift extends \App\Entity\ScheduledShift implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'start', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'end', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'onDuty', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'ShiftStatus', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'isApproved'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'start', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'end', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'onDuty', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'ShiftStatus', '' . "\0" . 'App\\Entity\\ScheduledShift' . "\0" . 'isApproved'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ScheduledShift $proxy) {
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
    public function getId(): \Ramsey\Uuid\Lazy\LazyUuidFromString
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getStart(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStart', []);

        return parent::getStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setStart(\DateTimeInterface $start): \App\Entity\ScheduledShift
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStart', [$start]);

        return parent::setStart($start);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnd(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnd', []);

        return parent::getEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnd(\DateTimeInterface $end): \App\Entity\ScheduledShift
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnd', [$end]);

        return parent::setEnd($end);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnDuty(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnDuty', []);

        return parent::getOnDuty();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnDuty(?\App\Entity\User $onDuty): \App\Entity\ScheduledShift
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnDuty', [$onDuty]);

        return parent::setOnDuty($onDuty);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\App\Entity\ShiftComments $comment): \App\Entity\ScheduledShift
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\App\Entity\ShiftComments $comment): \App\Entity\ScheduledShift
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getShiftStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShiftStatus', []);

        return parent::getShiftStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setShiftStatus($ShiftStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShiftStatus', [$ShiftStatus]);

        return parent::setShiftStatus($ShiftStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsApproved(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsApproved', []);

        return parent::getIsApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsApproved(bool $isApproved): \App\Entity\ScheduledShift
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsApproved', [$isApproved]);

        return parent::setIsApproved($isApproved);
    }

}