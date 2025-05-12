<?php

namespace Unit;

use Random\Randomizer;
use ReflectionClass;
use Xefi\Faker\EsEs\Extensions\AddressExtension;
use Xefi\Faker\EsEs\Tests\Unit\TestCase;

final class AddressExtensionTest extends TestCase
{
    protected AddressExtension $extension;
    protected array $provinces = [];
    protected array $regions = [];
    protected array $cities = [];
    protected array $streetTypes = [];
    protected array $streetNames = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->extension = new AddressExtension(new Randomizer());
        $reflection = new ReflectionClass($this->extension);

        $this->provinces = $reflection->getProperty('provinces')->getValue($this->extension);
        $this->regions = $reflection->getProperty('regions')->getValue($this->extension);
        $this->cities = $reflection->getProperty('cities')->getValue($this->extension);
        $this->streetTypes = $reflection->getProperty('streetTypes')->getValue($this->extension);
        $this->streetNames = $reflection->getProperty('streetNames')->getValue($this->extension);
    }

    public function testRegion(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->regions); $i++) {
            $results[] = $this->faker->unique()->region();
        }

        $this->assertEqualsCanonicalizing(
            $this->regions,
            $results
        );
    }

    public function testProvince(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->provinces); $i++) {
            $results[] = $this->faker->unique()->province();
        }

        $this->assertEqualsCanonicalizing(
            $this->provinces,
            $results
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

            $this->assertIsInt($result);
            $this->assertEquals(5, strlen($result));
            $this->assertLessThanOrEqual(99909, $result);
            $this->assertGreaterThanOrEqual(10000, $result);
        }
    }

    public function testHouseNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->houseNumber();

            $this->assertIsInt($result);
            $this->assertLessThanOrEqual(4, strlen($result));
            $this->assertLessThanOrEqual(2000, $result);
            $this->assertGreaterThanOrEqual(1, $result);
        }
    }

    public function testStreetName(): void
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->unique()->streetName();
        }

        foreach ($results as $result) {
            [$type, $name] = explode(' ', $result, 2);
            $this->assertContains($type, $this->streetTypes);
            $this->assertContains($name, $this->streetNames);
        }
    }

    public function testStreetAddress(): void
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->unique()->streetAddress();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression("/^[\wáéíñó ]* \d{1,3}$/", $result);
        }
    }

    public function testFullAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->fullAddress();

            $this->assertMatchesRegularExpression("/^[\wáéíñó ]* \d{1,3}, \d{5} [\wáéíñó\- ]*$/", $result);
        }
    }
}
