<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public string $defaultPrefix = '';

    public string $indicator = '+34';

    /**
     * Get the locale handled by this extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'es_ES';
    }

    protected array $landlineFormats = [
        '91{separator}{d}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '93{separator}{d}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '94{separator}{d}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '96{separator}{d}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '954{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '976{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '983{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '985{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
    ];

    protected array $cellFormats = [
        '6{d}{d}{separator}{d}{d}{d}{separator}{d}{d}{d}',
        '71{d}{separator}{d}{d}{d}{separator}{d}{d}{d}',
        '72{d}{separator}{d}{d}{d}{separator}{d}{d}{d}',
        '73{d}{separator}{d}{d}{d}{separator}{d}{d}{d}',
        '74{d}{separator}{d}{d}{d}{separator}{d}{d}{d}',
    ];

    /**
     * Generate a phone number, keeping a separator between the indicator and the number.
     *
     * @param string|null $format
     * @param string      $separator
     * @param string|null $prefix
     *
     * @return string
     */
    public function phoneNumber(?string $format = null, string $separator = '', ?string $prefix = null): string
    {
        if ($prefix === $this->indicator) {
            $prefix .= $separator;
        }

        return parent::phoneNumber($format, $separator, $prefix);
    }
}
