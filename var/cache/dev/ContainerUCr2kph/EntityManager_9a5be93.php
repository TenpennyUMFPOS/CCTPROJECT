<?php

namespace ContainerUCr2kph;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere0c24 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer31411 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12d6a = [
        
    ];

    public function getConnection()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getConnection', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getMetadataFactory', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getExpressionBuilder', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'beginTransaction', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getCache', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getCache();
    }

    public function transactional($func)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'transactional', array('func' => $func), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'wrapInTransaction', array('func' => $func), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'commit', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->commit();
    }

    public function rollback()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'rollback', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getClassMetadata', array('className' => $className), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'createQuery', array('dql' => $dql), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'createNamedQuery', array('name' => $name), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'createQueryBuilder', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'flush', array('entity' => $entity), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'clear', array('entityName' => $entityName), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->clear($entityName);
    }

    public function close()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'close', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->close();
    }

    public function persist($entity)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'persist', array('entity' => $entity), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'remove', array('entity' => $entity), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'refresh', array('entity' => $entity), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'detach', array('entity' => $entity), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'merge', array('entity' => $entity), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getRepository', array('entityName' => $entityName), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'contains', array('entity' => $entity), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getEventManager', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getConfiguration', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'isOpen', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getUnitOfWork', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getProxyFactory', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'initializeObject', array('obj' => $obj), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'getFilters', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'isFiltersStateClean', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'hasFilters', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return $this->valueHoldere0c24->hasFilters();
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

        $instance->initializer31411 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere0c24) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere0c24 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere0c24->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, '__get', ['name' => $name], $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        if (isset(self::$publicProperties12d6a[$name])) {
            return $this->valueHoldere0c24->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c24;

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

        $targetObject = $this->valueHoldere0c24;
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
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c24;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere0c24;
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
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, '__isset', array('name' => $name), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c24;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere0c24;
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
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, '__unset', array('name' => $name), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0c24;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere0c24;
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
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, '__clone', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        $this->valueHoldere0c24 = clone $this->valueHoldere0c24;
    }

    public function __sleep()
    {
        $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, '__sleep', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;

        return array('valueHoldere0c24');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer31411 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer31411;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer31411 && ($this->initializer31411->__invoke($valueHoldere0c24, $this, 'initializeProxy', array(), $this->initializer31411) || 1) && $this->valueHoldere0c24 = $valueHoldere0c24;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere0c24;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere0c24;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
