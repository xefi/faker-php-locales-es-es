<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    private array $companies = [
        "Grupo Santander", "Telefónica SA", "Iberdrola Innovación",
        "Grupo Inditex", "Acciona Energía", "Banco Bilbao Vizcaya Argentaria",
        "Grupo Mango", "Tecnalia Research", "Energía Madrid SA",
        "Estudio Gaudí", "Cataluña Energía", "Soluciones Andalucía",
        "Tecnologías Valencia", "Startups Barcelona", "Grupo Tecnológico Sevilla",
        "Pixel Madrid", "BioAndalucía", "Sociedad General Valenciana",
        "Green Asturias", "LuxTech España", "Media Zaragoza",
        "Consejo Universidad Complutense", "Puerto de Valencia Logística", "Finanzas Salamanca",
        "Industria Bilbao", "Grupo Málaga", "Diseño Costa Brava",
        "Invest Madrid", "Turismo y Cultura España", "Construcciones Alicante"
    ];

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
