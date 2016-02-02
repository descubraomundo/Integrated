<?php

namespace DMI\Integrated\Extensions;

use DMI\Integrated\Extensions\Traits\LaravelTestCase;
use Laravel\Lumen\Testing\TestCase;
use DMI\Integrated\Emulator;

abstract class Lumen extends TestCase implements Emulator
{
    use LaravelTestCase;
}
