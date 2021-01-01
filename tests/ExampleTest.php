<?php

namespace Somespaceph\Cms\Tests;

use Orchestra\Testbench\TestCase;
use Somespaceph\Cms\CmsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CmsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
