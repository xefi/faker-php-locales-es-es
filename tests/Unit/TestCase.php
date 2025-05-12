<?php

namespace Xefi\Faker\EsEs\Tests\Unit;

use Xefi\Faker\Container\Container;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Container $faker;

    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new \Xefi\Faker\EsEs\FakerEsEsServiceProvider())->boot();

        $this->faker = (new Container(false))->locale('es_ES');
    }
}
