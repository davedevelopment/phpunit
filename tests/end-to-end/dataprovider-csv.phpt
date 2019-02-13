--TEST--
phpunit ../../_files/DataProviderCsvTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = __DIR__ . '/../_files/DataProviderCsvTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.....                                                               5 / 5 (100%)

Time: %s, Memory: %s

OK (5 tests, 5 assertions)
