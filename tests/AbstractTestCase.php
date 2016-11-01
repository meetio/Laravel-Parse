<?php

/*
 * This file is part of Laravel Parse.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meetio\Tests\Parse;

use Meetio\TestBench\AbstractLaravelTestCase as TestCase;

/**
 * This is the abstract test case class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
abstract class AbstractTestCase extends TestCase
{
    /**
     * Get the service provider class.
     *
     * @return string
     */
    protected function getServiceProviderClass()
    {
        return 'Meetio\Parse\ParseServiceProvider';
    }
}
