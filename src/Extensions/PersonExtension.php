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
        'Antonio', 'José', 'Manuel', 'Francisco', 'David', 'Juan', 'Javier', 'José Antonio', 'Daniel', 'José Luis',
        'Francisco Javier', 'Carlos', 'Jesús', 'Alejandro', 'Miguel', 'Ángel', 'José Manuel', 'Rafael', 'Miguel Ángel', 'Pedro',
        'Pablo', 'Sergio', 'Fernando', 'Jorge', 'Alberto', 'Juan Carlos', 'Álvaro', 'Adrián', 'Diego', 'Raúl', 'Iván',
        'Rubén', 'Óscar', 'Enrique', 'Ramón', 'Andrés', 'Luis', 'Santiago', 'Víctor', 'Eduardo', 'Mario',
    ];

    protected $firstNameFemale = [
        'María Carmen', 'María', 'Carmen', 'Ana María', 'Josefa', 'Isabel', 'María Dolores', 'María Pilar', 'Laura', 'María Teresa',
        'Ana', 'Cristina', 'Marta', 'María Ángeles', 'Lucía', 'Francisca', 'Sara', 'Paula', 'Elena', 'Pilar',
        'Concepción', 'Manuela', 'Mercedes', 'María Isabel', 'Rosa María', 'María José', 'Raquel', 'Beatriz', 'Silvia', 'Patricia',
        'Nuria', 'Claudia', 'Julia', 'Antonia', 'Irene', 'Marina', 'Andrea', 'Rocío', 'Eva', 'Natalia',
    ];

    protected $lastName = [
        'García', 'González', 'Rodríguez', 'Fernández', 'López', 'Martínez', 'Sánchez', 'Pérez', 'Gómez', 'Martín',
        'Jiménez', 'Ruiz', 'Hernández', 'Díaz', 'Moreno', 'Muñoz', 'Álvarez', 'Romero', 'Alonso', 'Gutiérrez',
        'Navarro', 'Torres', 'Domínguez', 'Vázquez', 'Ramos', 'Gil', 'Ramírez', 'Serrano', 'Blanco', 'Molina',
        'Morales', 'Suárez', 'Ortega', 'Delgado', 'Castro', 'Ortiz', 'Rubio', 'Marín', 'Sanz', 'Iglesias',
    ];

    protected $titleMale = ['Sr.', 'Dr.', 'Prof.', 'D.'];
    protected $titleFemale = ['Sra.', 'Srta.', 'Dra.', 'Prof.', 'Dña.'];

    public function dni(bool $formatted = false): string
    {
        $dniNumber = $this->randomizer->getInt(10000000, 99999999);
        $dniLetters = 'TRWAGMYFPDXBNJZSQVHLCKE';
        $letter = $dniLetters[$dniNumber % 23];
        $dni = $dniNumber . $letter;

        if ($formatted) {
            $dni = sprintf(
                '%s.%s.%s-%s',
                substr((string) $dniNumber, 0, 2),
                substr((string) $dniNumber, 2, 3),
                substr((string) $dniNumber, 5, 3),
                $letter
            );
        }

        return $dni;
    }
}
