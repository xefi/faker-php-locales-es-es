<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    public function getLocale(): ?string
    {
        return 'es_ES';
    }

    public function iban(?string $countryCode = 'ES', ?string $format = null): string
    {
        if ($format === null) {
            $format = sprintf(
                '%s%s%s',
                str_repeat('{d}', 8),
                str_repeat('{d}', 2),
                str_repeat('{d}', 10)
            );
        }

        return parent::iban($countryCode, $format);
    }
}
