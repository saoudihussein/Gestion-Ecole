<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.

$this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_default_8d2f5fe92b199027ba8bb3530847a67aa8c9bae667ead7888c7d2d3119bd639d');

return $instance;
