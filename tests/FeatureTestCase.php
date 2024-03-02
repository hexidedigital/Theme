<?php

namespace Tests;

use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase;

abstract class FeatureTestCase extends TestCase
{
    use WithWorkbench;
}
