<?php
namespace parallel;

use parallel\Future;
use Closure;

if(!function_exists('parallel\bootstrap')){
    /**
     * @link https://www.php.net/manual/zh/parallel.bootstrap.php
     * @param string $file Path to the file to bootstrap all runtimes.
     */
    function bootstrap(string $file): void
    {
    }
}

if(!function_exists('parallel\run')){
    /**
     * @link https://www.php.net/manual/zh/parallel.run.php
     * @param Closure $task
     * @param array|null $argv
     * @return Future|null
     */
    function run(Closure $task, ?array $argv = null): ?Future
    {
    }
}