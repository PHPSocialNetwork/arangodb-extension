<?php

use Phpfastcache\Drivers\Arangodb\Config as ArangodbConfig;

return (new ArangodbConfig())
    /*
     $config->setTraceFunction(\Closure::fromCallable(static function ($type, $data) use ($testHelper){
       $testHelper->printDebugText(sprintf('Trace for %s: %s', strtoupper($type), $data));
     }));
    */
    ->setItemDetailedDate(true)
    ->setCollection('phpfastcache')
    ->setAuthUser('phpfastcache')
    ->setAuthPasswd('travis')
    ->setDatabase('phpfastcache')
    ->setConnectTimeout(5)
    ->setAutoCreate(true);
