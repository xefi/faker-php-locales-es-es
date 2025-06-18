<?php

namespace Xefi\Faker\EsEs\Tests\Unit;

use Random\Randomizer;
use ReflectionClass;
use Xefi\Faker\EsEs\Extensions\AddressExtension;

final class AddressExtensionTest extends TestCase
{
    protected AddressExtension $extension;
    protected array $provinces = [];
    protected array $provincesNames = [];
    protected array $autonomousCommunities = [];
    protected array $cities = [];
    protected array $streetTypes = [];
    protected array $streetNames = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->extension = new AddressExtension(new Randomizer());
        $reflection = new ReflectionClass($this->extension);

        $this->autonomousCommunities = $reflection->getProperty('autonomousCommunities')->getValue($this->extension);
        $this->provinces = $reflection->getProperty('provinces')->getValue($this->extension);
        $this->provincesNames = array_merge(...array_map('array_values', $this->provinces));
        $this->cities = $reflection->getProperty('cities')->getValue($this->extension);
        $this->streetTypes = $reflection->getProperty('streetTypes')->getValue($this->extension);
        $this->streetNames = $reflection->getProperty('streetNames')->getValue($this->extension);
    }

    public function testRegion(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->autonomousCommunities); $i++) {
            $results[] = $this->faker->unique()->region();
        }

        $this->assertEqualsCanonicalizing(
            $this->autonomousCommunities,
            $results
        );
    }

    public function testDepartment(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->provinces); $i++) {
            $results[] = $this->faker->unique()->department();
        }

        $this->assertEquals(
            sort($this->provinces),
            sort($results)
        );
    }

    public function testCity(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->cities); $i++) {
            $results[] = $this->faker->unique()->city();
        }

        $this->assertEqualsCanonicalizing(
            $this->cities,
            $results
        );
    }

    public function testPostcode(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->postcode();

            $this->assertMatchesRegularExpression('/^((0[1-9])|([1-4][0-9])|5[0-2])\d{3}$/', $result);
        }
    }

    public function testHouseNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->houseNumber();

            $this->assertMatchesRegularExpression('/^\d{1,4}[a-zA-Z]?$/', $result);
        }
    }

    public function testStreetName(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->streetName();

            $this->assertStringContainsString(' ', $result);
            [$type, $name] = explode(' ', $result, 2);
            $this->assertContains($type, $this->streetTypes);
            $this->assertContains($name, $this->streetNames);
        }
    }

    public function testStreetAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->streetAddress();

            $this->assertMatchesRegularExpression('/^[\w\s\-\'áéíóúñÁÉÍÓÚÑ]+ \d{1,4}[a-zA-Z]?$/u', $result);
        }
    }

    public function testFullAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->fullAddress();

            $this->assertMatchesRegularExpression('/^[\w\s\-\'áéíóúñÁÉÍÓÚÑ]+ \d{1,4}[a-zA-Z]?, \d{5} [\w\s\-\'áéíóúñÁÉÍÓÚÑ]+$/u', $result);
        }
    }
}
