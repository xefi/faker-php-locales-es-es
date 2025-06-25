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

    public function nif(): string
    {
        $prefix = $this->pickArrayRandomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'N', 'P', 'Q', 'R', 'S', 'U', 'V', 'W']);
        $number = $this->randomizer->getInt(1000000, 9999999);
        $suffix = $this->pickArrayRandomElement(range('A', 'Z'));

        return $prefix . $number . strtoupper($suffix);
    }

    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }

    public function companyNumber(): string
    {
        return sprintf('%010d', $this->randomizer->getBytesFromString(implode(range(0, 9)), 9));
    }

    public function vat(): string
    {
        return 'ES' . $this->companyNumber();
    }
}
