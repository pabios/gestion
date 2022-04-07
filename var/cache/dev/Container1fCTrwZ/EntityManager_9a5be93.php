<?php

namespace Container1fCTrwZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2fd32 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc176a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbcaca = [
        
    ];

    public function getConnection()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getConnection', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getMetadataFactory', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getExpressionBuilder', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'beginTransaction', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getCache', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'transactional', array('func' => $func), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'commit', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->commit();
    }

    public function rollback()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'rollback', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getClassMetadata', array('className' => $className), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'createQuery', array('dql' => $dql), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'createNamedQuery', array('name' => $name), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'createQueryBuilder', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'flush', array('entity' => $entity), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'clear', array('entityName' => $entityName), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->clear($entityName);
    }

    public function close()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'close', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->close();
    }

    public function persist($entity)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'persist', array('entity' => $entity), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'remove', array('entity' => $entity), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'refresh', array('entity' => $entity), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'detach', array('entity' => $entity), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'merge', array('entity' => $entity), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'contains', array('entity' => $entity), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getEventManager', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getConfiguration', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'isOpen', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getUnitOfWork', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getProxyFactory', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'initializeObject', array('obj' => $obj), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'getFilters', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'isFiltersStateClean', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'hasFilters', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return $this->valueHolder2fd32->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc176a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2fd32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2fd32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2fd32->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, '__get', ['name' => $name], $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        if (isset(self::$publicPropertiesbcaca[$name])) {
            return $this->valueHolder2fd32->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fd32;

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

        $targetObject = $this->valueHolder2fd32;
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
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fd32;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2fd32;
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
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, '__isset', array('name' => $name), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fd32;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2fd32;
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
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, '__unset', array('name' => $name), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fd32;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2fd32;
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
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, '__clone', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        $this->valueHolder2fd32 = clone $this->valueHolder2fd32;
    }

    public function __sleep()
    {
        $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, '__sleep', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;

        return array('valueHolder2fd32');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc176a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc176a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc176a && ($this->initializerc176a->__invoke($valueHolder2fd32, $this, 'initializeProxy', array(), $this->initializerc176a) || 1) && $this->valueHolder2fd32 = $valueHolder2fd32;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2fd32;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2fd32;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
