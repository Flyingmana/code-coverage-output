<?php

$phpSrcPath = realpath(__DIR__ . '/../../php-src');
$versionIdentifier = 'PHP_HEAD';
$phpBuildPath = realpath(__DIR__ . '/../../php-build');
$reportPath = realpath(__DIR__ . "/../docs/php/$versionIdentifier");

chdir($phpSrcPath);
//passthru("./configure  --enable-gcov --prefix=$phpBuildPath");
//passthru("make -4j");
//passthru('NO_INTERACTION=1 TEST_PHP_EXECUTABLE=./sapi/cli/php ./run-tests.php -j4'); // TEST_PHP_ARGS=-j4
//passthru('lcov -directory ./ -c -o tests.info');
$cmd = "genhtml tests.info --ignore-errors=source  -o $reportPath";
echo $cmd.PHP_EOL;
passthru($cmd); // --no-source

