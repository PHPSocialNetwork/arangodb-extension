#!/bin/bash

./vendor/bin/phpcbf lib/ --report=summary
./vendor/bin/phpcs lib/ --report=summary
./vendor/bin/phpmd lib/ ansi phpmd.xml
./vendor/bin/phpstan analyse lib/ -l 6 -c phpstan.neon 2>&1
