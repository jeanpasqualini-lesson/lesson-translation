<?php

require "../vendor/autoload.php";

$tests = array(
    new \Test\ArrayTest(),
    new \Test\IniTest(),
    new \Test\PhpTest(),
    new \Test\YamlTest(),
    new \Test\JsonTest(),
    new \Test\CsvTest(),
    new \Test\CustomTest()
);

foreach ($tests as $test) {
    echo "===".get_class($test)."===".PHP_EOL;

    $test->runTest();
}
