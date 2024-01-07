<?php

use Phpfastcache\Drivers\Arangodb\Config as ArangodbConfig;

return (fn(ArangodbConfig $config) => $config->setItemDetailedDate(true)
    /*
     $config->setTraceFunction(\Closure::fromCallable(static function ($type, $data) use ($testHelper){
       $testHelper->printDebugText(sprintf('Trace for %s: %s', strtoupper($type), $data));
     }));
    */
    ->setCollection('phpfastcache')
    ->setAuthUser('phpfastcache')
    ->setAuthPasswd('travis')
    ->setDatabase('phpfastcache')
    ->setConnectTimeout(5)
    ->setAutoCreate(true)
)(new ArangodbConfig());
