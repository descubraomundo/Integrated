<?php

namespace DMI\Integrated\Extensions;

use DMI\Integrated\Extensions\Traits\LaravelTestCase;
use Illuminate\Foundation\Testing\TestCase;
use DMI\Integrated\Emulator;

abstract class Laravel extends TestCase implements Emulator
{
    use LaravelTestCase;
}
