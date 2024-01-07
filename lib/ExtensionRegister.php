<?php

declare(strict_types=1);

namespace Phpfastcache;

use Phpfastcache\Extensions\Drivers\Arangodb\{Config, Driver, Event, Item};

// Semver Compatibility until v10
class_alias(Config::class, Drivers\Arangodb\Config::class);
class_alias(Driver::class, Drivers\Arangodb\Driver::class);
class_alias(Event::class, Drivers\Arangodb\Event::class);
class_alias(Item::class, Drivers\Arangodb\Item::class);

ExtensionManager::registerExtension('Arangodb', Driver::class);
