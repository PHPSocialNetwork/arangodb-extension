Contributing to PhpFastCache
========================

Please note that this project is released with a
[Contributor Code of Conduct](https://www.contributor-covenant.org/version/1/4/code-of-conduct/).
By participating in this project you agree to abide by its terms.

Reporting Issues
----------------

When reporting issues, please try to be as descriptive as possible, and include
as much relevant information as you can. A step-by-step guide on how to
reproduce the issue will greatly increase the chances of your issue being
resolved in a timely manner.

⚠️ Support for this extension must be posted to the main [Phpfastcache repository](https://github.com/PHPSocialNetwork/phpfastcache/issues).

Contributing policy
-------------------

Our contributing policy is described in our [Coding Guideline (Phpfastcache Repository)](https://github.com/PHPSocialNetwork/phpfastcache/blob/master/CODING_GUIDELINE.md)

Developer notes
-------------------
If you want to contribute to the repository you will need to install/configure some things first.

To run tests follow the steps:
1) Run `composer install` *(Do not ignore platform reqs)*
2) Run `./vendor/bin/phpcs lib/  --report=summary`
3) Run `./vendor/bin/phpmd lib/ ansi phpmd.xml`
4) Run `./vendor/bin/phpstan analyse lib/ -c phpstan_lite.neon 2>&1`

*If you are on Windows environment simply run the file `quality.bat` located at the root of the project to run the step 2, 3 and 4 in once.*

The last command will run all the unit tests of the project.
If an error appears, fix it then you can submit your pull request.

⚠️ **All tests and quality tools MUST pass or the merge request will be automatically closed.**
