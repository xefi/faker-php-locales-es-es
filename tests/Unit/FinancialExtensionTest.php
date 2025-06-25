<?php

namespace Unit;

use Xefi\Faker\Calculators\Iban;
use Xefi\Faker\EsEs\Tests\Unit\TestCase;

final class FinancialExtensionTest extends TestCase
{
    public function testIban()
    {
        $iban = $this->faker->iban();

        $this->assertEquals(24, strlen($iban));
        $this->assertStringStartsWith('ES', $iban);
        $this->assertTrue(Iban::isValid($iban));
    }
}
