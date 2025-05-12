<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    public function getLocale(): string|null
    {
        return 'es_ES';
    }

    public function iban(?string $countryCode = null, ?string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'ES';
        }

        if ($format === null) {
            $format = str_repeat('{d}', 20);
        }

        return parent::iban($countryCode, $format);
    }
}
