<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proveedor extends \App\Entity\Proveedor implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Nombre', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Correo', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Telefono', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Tipo', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Estado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Creado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Editado'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Nombre', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Correo', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Telefono', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Tipo', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Estado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Creado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'Editado'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proveedor $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(string $Nombre): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$Nombre]);

        return parent::setNombre($Nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreo', []);

        return parent::getCorreo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreo(string $Correo): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreo', [$Correo]);

        return parent::setCorreo($Correo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono(string $Telefono): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$Telefono]);

        return parent::setTelefono($Telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo(string $Tipo): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$Tipo]);

        return parent::setTipo($Tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(string $Estado): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$Estado]);

        return parent::setEstado($Estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreado(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreado', []);

        return parent::getCreado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreado(\DateTimeInterface $Creado): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreado', [$Creado]);

        return parent::setCreado($Creado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditado(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditado', []);

        return parent::getEditado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditado(\DateTimeInterface $Editado): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditado', [$Editado]);

        return parent::setEditado($Editado);
    }

}
