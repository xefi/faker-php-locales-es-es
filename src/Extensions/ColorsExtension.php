<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\ColorsExtension as BaseColorsExtension;

class ColorsExtension extends BaseColorsExtension
{
    public function getLocale(): ?string
    {
        return 'es_ES';
    }

    protected array $safeColorNames = [
        'Negro', 'Marrón', 'Verde', 'Azul marino', 'Oliva',
        'Púrpura', 'Verde azulado', 'Lima', 'Azul', 'Plata',
        'Gris', 'Amarillo', 'Fucsia', 'Aqua', 'Blanco',
    ];

    protected array $colorNames = [
        'AzulAlicia', 'BlancoAntiguo', 'Aqua', 'Aguamarina', 'AzulCielo',
        'Beis', 'Biscuit', 'Negro', 'AlmendraBlanqueada', 'Azul',
        'AzulVioleta', 'Castaño', 'MaderaEnvejecida', 'AzulCadete', 'Chartreuse',
        'Chocolate', 'Coral', 'Aciano', 'SedaDeMaíz', 'Carmesí',
        'Cian', 'AzulOscuro', 'CianOscuro', 'OroOscuro', 'GrisOscuro',
        'VerdeOscuro', 'CaquiOscuro', 'MagentaOscuro', 'OlivaOscuro', 'NaranjaOscuro',
        'OrquídeaOscura', 'RojoOscuro', 'SalmónOscuro', 'VerdeMarOscuro', 'AzulPizarraOscuro',
        'GrisPizarraOscuro', 'TurquesaOscuro', 'VioletaOscuro', 'RosaIntenso', 'AzulProfundo',
        'GrisTenue', 'GrisApagado', 'AzulBrillante', 'RojoLadrillo', 'BlancoFloral',
        'VerdeBosque', 'Fucsia', 'Gainsboro', 'BlancoFantasma', 'Oro',
        'Gris', 'Verde', 'AmarilloVerdoso', 'RocíoDeMiel', 'RosaCaliente',
        'RojoIndio', 'Índigo', 'Marfil', 'Caqui', 'Lavanda',
        'RuborLavanda', 'VerdeCésped', 'LimónCítrico', 'AzulClaro', 'CoralClaro',
        'CianClaro', 'OroPálido', 'GrisClaro', 'VerdeClaro', 'RosaClaro',
        'SalmónClaro', 'VerdeMarClaro', 'AzulCieloClaro', 'GrisPizarraClaro', 'AzulAceroClaro',
        'AmarilloClaro', 'Lima', 'LimónVerde', 'Lino', 'Magenta',
        'Marrón', 'AguamarinaMedia', 'AzulMedio', 'OrquídeaMedia', 'PúrpuraMedio',
        'VerdeMarMedio', 'AzulPizarraMedio', 'VerdePrimaveraMedio', 'TurquesaMedia', 'VioletaRojoMedio',
        'AzulMedianoche', 'CremaDeMenta', 'RosaNiebla', 'Mocasín', 'BlancoNavajo',
        'AzulMarino', 'EncajeAntiguo', 'Oliva', 'CaquiOliva', 'Naranja',
        'RojoAnaranjado', 'Orquídea', 'VerdePálido', 'TurquesaPálido', 'VioletaRojoPálido',
        'PapayaClara', 'MelocotónClaro', 'Perú', 'Rosa', 'Ciruela',
        'AzulPolvo', 'Púrpura', 'Rojo', 'MarrónRosado', 'AzulReal',
        'MarrónSilla', 'Salmón', 'MarrónArenoso', 'VerdeMar', 'ConchaMarina',
        'TierraSiena', 'Plata', 'AzulPizarra', 'GrisPizarra', 'Amarillo',
        'Nieve', 'VerdePrimavera', 'AzulAcero', 'MarrónClaro', 'VerdeAzulado',
        'Cardo', 'Tomate', 'Turquesa', 'Violeta', 'Trigo',
        'Blanco', 'BlancoHumo',
    ];
}
