<?php

namespace Xefi\Faker\EsEs;

use Xefi\Faker\EsEs\Extensions\AddressExtension;
use Xefi\Faker\EsEs\Extensions\ColorsExtension;
use Xefi\Faker\EsEs\Extensions\CompanyExtension;
use Xefi\Faker\EsEs\Extensions\FinancialExtension;
use Xefi\Faker\EsEs\Extensions\PersonExtension;
use Xefi\Faker\EsEs\Extensions\TextExtension;
use Xefi\Faker\Providers\Provider;

class FakerEsEsServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            AddressExtension::class,
            ColorsExtension::class,
            CompanyExtension::class,
            FinancialExtension::class,
            PersonExtension::class,
            TextExtension::class,
        ]);
    }
}
