--TEST--
phpunit ../../_files/BankAccountTest.php:35
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--testdox';
$_SERVER['argv'][3] = __DIR__ . '/../_files/BankAccountTest.php:40';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.


Time: %s, Memory: %s

No tests executed!

