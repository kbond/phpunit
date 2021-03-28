--TEST--
https://github.com/sebastianbergmann/phpunit/issues/4632
--FILE--
<?php declare(strict_types=1);

$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--testdox';
$_SERVER['argv'][] = '--repeat';
$_SERVER['argv'][] = '3';
$_SERVER['argv'][] = __DIR__ . '/4632/Issue4632Test.php';

require __DIR__ . '/../../../bootstrap.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Issue4632 (PHPUnit\TestFixture\Issue4632)
 ✘ One
   │
   │ Failed asserting that false is true.
   │
   │ %s/Issue4632Test.php:18
   │

 ✘ One
   │
   │ Failed asserting that false is true.
   │
   │ %s/Issue4632Test.php:18
   │

 ✘ One
   │
   │ Failed asserting that false is true.
   │
   │ %s/Issue4632Test.php:18
   │

Time: %s, Memory: %s


FAILURES!
Tests: 3, Assertions: 3, Failures: 3.
