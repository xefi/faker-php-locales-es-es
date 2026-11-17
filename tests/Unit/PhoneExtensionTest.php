<?php

namespace Xefi\Faker\EsEs\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^(9[1346]\d{7}|9(54|76|83|85)\d{6}|(6\d|7[1-4])\d{7})$/', $this->faker->phoneNumber());
        }
    }

    public function testLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^(9[1346]-\d{3}-\d{2}-\d{2}|9(54|76|83|85)-\d{2}-\d{2}-\d{2})$/', $this->faker->dashedLandlinePhoneNumber());
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^(6\d|7[1-4])\d \d{3} \d{3}$/', $this->faker->spacedCellPhoneNumber());
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+34(9[1346]\d{7}|9(54|76|83|85)\d{6}|(6\d|7[1-4])\d{7})$/', $this->faker->indicatoredPhoneNumber());
        }
    }
}
