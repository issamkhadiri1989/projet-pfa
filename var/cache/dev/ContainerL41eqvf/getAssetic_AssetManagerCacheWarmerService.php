<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.asset_manager_cache_warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\assetic-bundle\\CacheWarmer\\AssetManagerCacheWarmer.php';

return $this->services['assetic.asset_manager_cache_warmer'] = new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this);