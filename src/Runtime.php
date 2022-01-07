<?php

namespace parallel;

use Closure;

/**
 *  When a new runtime is created, it does not share code with the
 * thread (or process) that created it. This means it doesn't have
 * the same classes and functions loaded, nor the same autoloader
 * set. In some cases, a very lightweight runtime is desirable
 * because the tasks that will be scheduled do not need access to
 * the code in the parent thread. In those cases where the tasks
 * do need to access the same code, it is enough to set an
 * autoloader as the bootstrap.
 *
 * @link https://www.php.net/manual/en/class.parallel-runtime.php
 * @package parallel
 */
final class Runtime
{
    /**
     * Runtime constructor.
     * @link https://www.php.net/manual/en/parallel-runtime.construct.php
     * @param string|null $bootstrap
     */
    public function __construct(?string $bootstrap = null)
    {
    }

    /**
     * @link https://www.php.net/manual/en/parallel-runtime.run.php
     * @param Closure $task
     * @param array|null $argv
     * @return Future|null
     */
    public function run(Closure $task, ?array $argv = null): ?Future
    {
    }

    /**
     * @link https://www.php.net/manual/en/parallel-runtime.close.php
     */
    public function close(): void
    {
    }

    /**
     * @link https://www.php.net/manual/en/parallel-runtime.kill.php
     */
    public function kill(): void
    {
    }
}
