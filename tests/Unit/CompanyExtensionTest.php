<?php

namespace Unit;

use Random\Randomizer;
use Xefi\Faker\EsEs\Extensions\CompanyExtension;
use Xefi\Faker\EsEs\Tests\Unit\TestCase;

final class CompanyExtensionTest extends TestCase
{
    protected array $companies = [];

    protected function setUp(): void
    {
        parent::setUp();

        $companyExtension = new CompanyExtension(new Randomizer());
        $this->companies = (new \ReflectionClass($companyExtension))->getProperty('companies')->getValue($companyExtension);
    }

    public function testCompany()
    {
        $results = [];
        for ($i = 0; $i < count($this->companies); $i++) {
            $results[] = $this->faker->unique()->company();
        }

        $this->assertEqualsCanonicalizing(
            $this->companies,
            $results
        );
    }

    public function testCompanyNumber()
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->companyNumber();

            $this->assertIsString($result);
            $this->assertEquals(0, substr($result, 0, 1));
        }
    }

    public function testVat()
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->vat();

            $this->assertIsString($result);
            $this->assertEquals("ES0", substr($result, 0, 3));
            $this->assertEquals(12, strlen($result));
        }
    }

    public function testCifFormatAndControl(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $cif = $this->faker->cif();

            $this->assertMatchesRegularExpression('/^[ABCDEFGHJKLMNPQRSUVW]\d{7}[A-Z0-9]$/', $cif);

            $prefix = $cif[0];
            $digits = substr($cif, 1, 7);
            $control = $cif[8];

            $sumEven = 0;
            $sumOdd = 0;

            for ($j = 0; $j < 7; $j++) {
                $digit = (int) $digits[$j];

                if (($j + 1) % 2 === 0) {
                    $sumEven += $digit;
                } else {
                    $double = $digit * 2;
                    $sumOdd += $double > 9 ? $double - 9 : $double;
                }
            }

            $total = $sumEven + $sumOdd;
            $unit = $total % 10;
            $checkDigit = $unit === 0 ? 0 : 10 - $unit;
            $controlLetters = 'JABCDEFGHI';
            $expectedLetter = $controlLetters[$checkDigit];

            if (in_array($prefix, ['K', 'P', 'Q', 'S', 'N', 'W'])) {
                $this->assertSame($expectedLetter, $control);
            } elseif (in_array($prefix, ['A', 'B', 'E', 'H'])) {
                $this->assertSame((string) $checkDigit, $control);
            } else {
                $this->assertContains($control, [$expectedLetter, (string) $checkDigit]);
            }
        }
    }
}
