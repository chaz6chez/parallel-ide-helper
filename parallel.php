<?php

use parallel\Future;

/**
 * @link https://www.php.net/manual/zh/parallel.bootstrap.php
 * @param string $file Path to the file to bootstrap all runtimes.
 */
function bootstrap(string $file): void
{
}

/**
 * @link https://www.php.net/manual/zh/parallel.run.php
 * @param Closure $task
 * @param array|null $argv
 * @return Future|null
 */
function run(Closure $task, ?array $argv = null): ?Future
{
}