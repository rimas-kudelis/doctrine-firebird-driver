<?php
namespace IST\DoctrineFirebirdDriver\Test\Integration;

use Doctrine\ORM\EntityManager;

class AbstractIntegrationTest extends \PHPUnit_Framework_TestCase
{
    protected static $entityManager;

    public static function startup(EntityManager $entityManager)
    {
        self::$entityManager = $entityManager;
    }
}