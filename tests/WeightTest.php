<?php

namespace Quangvision\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Quangvision\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function test_it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220, $lbs);
    }
}
