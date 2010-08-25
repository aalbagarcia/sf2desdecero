<?php

require_once __DIR__.'/vendor/symfony/src/Symfony/Framework/UniversalClassLoader.php';

use Symfony\Framework\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                    => __DIR__.'/vendor/symfony/src',
    'Application'                => __DIR__,
    'Bundle'                     => __DIR__,
    'Doctrine\\ODM\\MongoDB'     => __DIR__.'/vendor/doctrine-mongodb/lib',
    'Doctrine\\Common'           => __DIR__.'/vendor/doctrine-common/lib',
    'Doctrine\\DBAL\\Migrations' => __DIR__.'/vendor/doctrine-migrations/lib',
    'Doctrine\\DBAL'             => __DIR__.'/vendor/doctrine-dbal/lib',
    'Doctrine'                   => __DIR__.'/vendor/doctrine/lib',
    'Zend'                       => __DIR__.'/vendor/zend/library',
));
$loader->registerPrefixes(array(
    'Swift_' => __DIR__.'/vendor/swiftmailer/lib/classes',
    'Twig_'  => __DIR__.'/vendor/twig/lib',
));
$loader->register();

// needed for code coverage
require_once __DIR__.'/vendor/propel/runtime/lib/Propel.php';
set_include_path(
    __DIR__.'/vendor/phing/classes'.PATH_SEPARATOR.
    __DIR__.'/vendor/propel/runtime/lib'.PATH_SEPARATOR.
    get_include_path()
);
