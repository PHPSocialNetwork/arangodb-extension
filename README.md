## Contributing [![PHP Tests](https://github.com/PHPSocialNetwork/arangodb-extension/actions/workflows/php.yml/badge.svg)](https://github.com/PHPSocialNetwork/arangodb-extension/actions/workflows/php.yml)
Merge requests are welcome but will require the tests plus the quality tools to pass:

_(Commands must be run from the repository root)_
### PHPCS, PHPMD, PHPSTAN (Level 6), unit tests:

```bash
composer run-script quality
composer run-script tests

# In case you want to fix the code style automatically: 
composer run-script phpcbf
```

## Support & Security

Support for this extension must be posted to the main [Phpfastcache repository](https://github.com/PHPSocialNetwork/phpfastcache/issues).

## Composer installation:

```php
composer install phpfastcache/arangodb-extension
```

#### ⚠️ This extension requires:
1️ The composer `triagens/arangodb` library 3.8 at least.

## Events
This driver is emitting [customs events](https://github.com/PHPSocialNetwork/phpfastcache/blob/master/docs/EVENTS.md):
- onArangodbConnection(*Callable* **$callback**)
    - **Callback arguments**
        - *ExtendedCacheItemPoolInterface* **$itemPool**
        - *EventReferenceParameter($connectionOptions)* **$connectionOptions** _via EventReferenceParameter object_ **(type modification forbidden)**
    - **Scope**
        - Arangodb Driver
    - **Description**
        - Allow you to alter the parameters built used to connect to Arangodb server
    - **Risky Circular Methods**: None

- onArangodbCollectionParams(*Callable* **$callback**)
    - **Callback arguments**
        - *ExtendedCacheItemPoolInterface* **$itemPool**
        - *EventReferenceParameter($params)* **$params** _via EventReferenceParameter object_ **(type modification forbidden)**
    - **Scope**
        - Arangodb Driver
    - **Description**
        - Allow you to alter the parameters built used to create the collection
    - **Risky Circular Methods**: None
