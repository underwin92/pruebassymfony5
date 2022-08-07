<?php

namespace ContainerVoHjhfr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2172a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer03fa8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbcadb = [
        
    ];

    public function getConnection()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getConnection', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getMetadataFactory', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getExpressionBuilder', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'beginTransaction', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getCache', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'transactional', array('func' => $func), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'commit', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->commit();
    }

    public function rollback()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'rollback', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getClassMetadata', array('className' => $className), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'createQuery', array('dql' => $dql), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'createNamedQuery', array('name' => $name), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'createQueryBuilder', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'flush', array('entity' => $entity), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'clear', array('entityName' => $entityName), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->clear($entityName);
    }

    public function close()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'close', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->close();
    }

    public function persist($entity)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'persist', array('entity' => $entity), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'remove', array('entity' => $entity), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'refresh', array('entity' => $entity), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'detach', array('entity' => $entity), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'merge', array('entity' => $entity), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'contains', array('entity' => $entity), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getEventManager', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getConfiguration', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'isOpen', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getUnitOfWork', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getProxyFactory', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'initializeObject', array('obj' => $obj), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'getFilters', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'isFiltersStateClean', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'hasFilters', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return $this->valueHolder2172a->hasFilters();
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

        $instance->initializer03fa8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2172a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2172a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2172a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, '__get', ['name' => $name], $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        if (isset(self::$publicPropertiesbcadb[$name])) {
            return $this->valueHolder2172a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2172a;

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

        $targetObject = $this->valueHolder2172a;
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
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2172a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2172a;
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
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, '__isset', array('name' => $name), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2172a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2172a;
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
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, '__unset', array('name' => $name), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2172a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2172a;
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
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, '__clone', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        $this->valueHolder2172a = clone $this->valueHolder2172a;
    }

    public function __sleep()
    {
        $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, '__sleep', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;

        return array('valueHolder2172a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer03fa8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer03fa8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer03fa8 && ($this->initializer03fa8->__invoke($valueHolder2172a, $this, 'initializeProxy', array(), $this->initializer03fa8) || 1) && $this->valueHolder2172a = $valueHolder2172a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2172a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2172a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
