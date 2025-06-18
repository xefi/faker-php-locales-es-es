<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\PersonExtension as BasePersonExtension;

class PersonExtension extends BasePersonExtension
{
    public function getLocale(): ?string
    {
        return 'es_ES';
    }

    protected $firstNameMale = [
        'Antonio', 'José', 'Manuel', 'Francisco', 'David', 'Juan', 'Javier', 'José Antonio', 'Daniel', 'Francisco-Javier',
        'Luis', 'Carlos', 'Jesús', 'Alejandro', 'Miguel', 'Ángel', 'José-Luis', 'Sergio', 'Pablo', 'Pedro',
    ];

    protected $firstNameFemale = [
        'María-Carmen', 'María', 'Carmen', 'Josefa', 'Ana-María', 'Isabel', 'María-Dolores', 'Laura', 'María-Pilar', 'Cristina',
        'María-Teresa', 'Ana', 'Lucía', 'Marta', 'Elena', 'Pilar', 'María-José', 'Mercedes', 'Raquel', 'Sara',
    ];

    protected $lastName = [
        'García', 'Martínez', 'López', 'Sánchez', 'Pérez', 'Gómez', 'Martín', 'Jiménez', 'Ruiz', 'Hernández',
        'Díaz', 'Moreno', 'Muñoz', 'Álvarez', 'Romero', 'Alonso', 'Gutiérrez', 'Navarro', 'Torres', 'Domínguez',
        'Vázquez', 'Ramos', 'Gil', 'Ramírez', 'Serrano', 'Blanco', 'Molina', 'Morales', 'Suárez', 'Ortega',
        'Delgado', 'Castro', 'Ortiz', 'Rubio', 'Marín', 'Sanz', 'Iglesias', 'Medina', 'Garrido', 'Cortés',
    ];

    protected $titleMale = ['Sr.', 'D.'];

    protected $titleFemale = ['Sra.', 'Dª.'];

    public function dni(): string
    {
        $number = $this->randomizer->getInt(10000000, 99999999);
        $letter = $this->calculateDniLetter($number);

        return $number . $letter;
    }

    public function nie(): string
    {
        $initialLetter = $this->pickArrayRandomElement(['X', 'Y', 'Z']);
        $number = $this->randomizer->getInt(1000000, 9999999);
        $prefix = ['X' => 0, 'Y' => 1, 'Z' => 2][$initialLetter];
        $fullNumber = (int) ($prefix . str_pad((string) $number, 7, '0', STR_PAD_LEFT));
        $controlLetter = $this->calculateDniLetter($fullNumber);

        return $initialLetter . $number . $controlLetter;
    }

    private function calculateDniLetter(int $number): string
    {
        $letters = 'TRWAGMYFPDXBNJZSQVHLCKE';
        return $letters[$number % 23];
    }
}
