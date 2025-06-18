<?php

namespace Xefi\Faker\EsEs\Tests\Unit;

class CompanyExtensionTest extends TestCase
{
    public function testCompany(): void
    {
        $company = $this->faker->company();
        $this->assertIsString($company);
        $this->assertNotEmpty($company);
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
