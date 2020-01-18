<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Baul\TestBundle\Tests;

use Baul\TestBundle\BaulTestBundle;
use PHPUnit\Framework\TestCase;

class BaulTestBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new BaulTestBundle();

        $this->assertInstanceOf('Baul\TestBundle\BaulTestBundle', $bundle);
    }
}
