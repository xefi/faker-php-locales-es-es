<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    public function getLocale(): ?string
    {
        return 'es_ES';
    }

    private array $companies = [
        'García y Hermanos S.L.', 'Innovaciones del Sur', 'Tecnologías Castillo',
        'Luz y Futuro S.A.', 'Ríos Asociados', 'EstrellaAzul Industrias',
        'Prestigio Madrid', 'Ingeniería Lacruz', 'Forja de Plata S.A.',
        'OlaNueva Soluciones', 'Logística Andalucía', 'Claramonte Médica',
        'Huerto & Compañía', 'AltaSierra Energía', 'Sistemas Toledo',
        'Automatización Delacruz', 'Informática Pirineos', 'Industria Fénix',
        'Sol Naciente Ventures', 'Cielo Azul Farma', 'Pabellón Blanco S.A.',
        'Mistral Digital', 'Náutica Valencia', 'Construcciones Robles',
        'Rojo y Oro Diseño', 'ViñedoTech S.A.', 'Grupo Galicia',
        'Soluciones Costa', 'LaForja Metalurgia', 'Aureliano & Co.',
    ];

    public function cif(): string
    {
        $letters = 'ABCDEFGHJKLMNPQRSUVW';
        $prefix = $this->randomizer->getBytesFromString($letters, 1);
        $number = $this->randomizer->getBytesFromString(implode(range(0, 9)), 7);

        $sumEven = 0;
        $sumOdd = 0;

        // Control number
        for ($i = 0; $i < 7; $i++) {
            $digit = (int) $number[$i];

            if (($i + 1) % 2 === 0) {
                $sumEven += $digit;
            } else {
                $double = $digit * 2;
                $sumOdd += $double > 9 ? ($double - 9) : $double;
            }
        }

        $total = $sumEven + $sumOdd;
        $unit = $total % 10;
        $controlDigit = ($unit === 0) ? 0 : 10 - $unit;

        // Control letter if needed
        $controlLetters = 'JABCDEFGHI';
        $letterControl = $controlLetters[$controlDigit];

        // Control letter or control number
        if (in_array($prefix, ['K', 'P', 'Q', 'S', 'N', 'W'])) {
            $control = $letterControl; // lettre obligatoire
        } elseif (in_array($prefix, ['A', 'B', 'E', 'H'])) {
            $control = (string) $controlDigit;
        } else {
            $control = $this->randomizer->getInt(0, 1) === 0
                ? (string) $controlDigit
                : $letterControl;
        }

        return $prefix . $number . $control;
    }


    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }
}
