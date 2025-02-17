--TEST--
PHPT runner supports XFAIL section
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--verbose';
$_SERVER['argv'][] = \realpath(__DIR__ . '/../../_files/phpt-unsupported-section.phpt');

require_once __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime: %s

E                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 error:

1) %stests%e_files%ephpt-unsupported-section.phpt
PHPUnit\Runner\Exception: PHPUnit does not support PHPT GET sections in %s
%a
ERRORS!
Tests: 1, Assertions: 1, Errors: 1.
