<?php

namespace ContainerOoqVlZx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6baaf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer399d9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties64ee5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getConnection', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getMetadataFactory', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getExpressionBuilder', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'beginTransaction', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getCache', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'transactional', array('func' => $func), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'commit', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->commit();
    }

    public function rollback()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'rollback', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getClassMetadata', array('className' => $className), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'createQuery', array('dql' => $dql), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'createNamedQuery', array('name' => $name), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'createQueryBuilder', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'flush', array('entity' => $entity), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'clear', array('entityName' => $entityName), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->clear($entityName);
    }

    public function close()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'close', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->close();
    }

    public function persist($entity)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'persist', array('entity' => $entity), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'remove', array('entity' => $entity), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'refresh', array('entity' => $entity), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'detach', array('entity' => $entity), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'merge', array('entity' => $entity), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'contains', array('entity' => $entity), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getEventManager', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getConfiguration', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'isOpen', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getUnitOfWork', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getProxyFactory', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'initializeObject', array('obj' => $obj), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'getFilters', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'isFiltersStateClean', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'hasFilters', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return $this->valueHolder6baaf->hasFilters();
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

        $instance->initializer399d9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6baaf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6baaf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6baaf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, '__get', ['name' => $name], $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        if (isset(self::$publicProperties64ee5[$name])) {
            return $this->valueHolder6baaf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6baaf;

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

        $targetObject = $this->valueHolder6baaf;
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
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6baaf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6baaf;
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
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, '__isset', array('name' => $name), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6baaf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6baaf;
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
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, '__unset', array('name' => $name), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6baaf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6baaf;
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
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, '__clone', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        $this->valueHolder6baaf = clone $this->valueHolder6baaf;
    }

    public function __sleep()
    {
        $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, '__sleep', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;

        return array('valueHolder6baaf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer399d9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer399d9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer399d9 && ($this->initializer399d9->__invoke($valueHolder6baaf, $this, 'initializeProxy', array(), $this->initializer399d9) || 1) && $this->valueHolder6baaf = $valueHolder6baaf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6baaf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6baaf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
