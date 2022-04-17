<?php

namespace Container0LmovZS;


class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4eb6e = null;
    private $initializer490b8 = null;
    private static $publicPropertiese08ac = [
        
    ];
    public function getConnection()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getConnection', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getMetadataFactory', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getExpressionBuilder', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'beginTransaction', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getCache', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getCache();
    }
    public function transactional($func)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'transactional', array('func' => $func), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'commit', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->commit();
    }
    public function rollback()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'rollback', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getClassMetadata', array('className' => $className), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'createQuery', array('dql' => $dql), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'createNamedQuery', array('name' => $name), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'createQueryBuilder', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'flush', array('entity' => $entity), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'clear', array('entityName' => $entityName), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->clear($entityName);
    }
    public function close()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'close', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->close();
    }
    public function persist($entity)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'persist', array('entity' => $entity), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'remove', array('entity' => $entity), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'refresh', array('entity' => $entity), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'detach', array('entity' => $entity), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'merge', array('entity' => $entity), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'contains', array('entity' => $entity), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getEventManager', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getConfiguration', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'isOpen', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getUnitOfWork', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getProxyFactory', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'initializeObject', array('obj' => $obj), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'getFilters', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'isFiltersStateClean', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'hasFilters', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return $this->valueHolder4eb6e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer490b8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder4eb6e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4eb6e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder4eb6e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, '__get', ['name' => $name], $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        if (isset(self::$publicPropertiese08ac[$name])) {
            return $this->valueHolder4eb6e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eb6e;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4eb6e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eb6e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4eb6e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, '__isset', array('name' => $name), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eb6e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder4eb6e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, '__unset', array('name' => $name), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eb6e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder4eb6e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, '__clone', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        $this->valueHolder4eb6e = clone $this->valueHolder4eb6e;
    }
    public function __sleep()
    {
        $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, '__sleep', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
        return array('valueHolder4eb6e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer490b8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer490b8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer490b8 && ($this->initializer490b8->__invoke($valueHolder4eb6e, $this, 'initializeProxy', array(), $this->initializer490b8) || 1) && $this->valueHolder4eb6e = $valueHolder4eb6e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4eb6e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4eb6e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
