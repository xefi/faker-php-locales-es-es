<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\ColorsExtension as BaseColorsExtension;

class ColorsExtension extends BaseColorsExtension
{
    public function getLocale(): string|null
    {
        return 'es_ES';
    }

    protected array $safeColorNames = [
        'Negro', 'Marrón', 'Verde', 'Marino', 'Oliva',
        'Púrpura', 'VerdeAzulado', 'Lima', 'Azul', 'Plata',
        'Gris', 'Amarillo', 'Fucsia', 'Aqua', 'Blanco',
    ];

    protected array $colorNames = [
        'AzulAlicia', 'BlancoAntiguo', 'Aqua', 'Aguamarina', 'AzulCeleste',
        'Beige', 'Biscocho', 'Negro', 'AlmendraBlanqueada', 'Azul',
        'AzulVioleta', 'Marrón', 'MaderaEnvejecida', 'AzulCadete', 'Chartreuse',
        'Chocolate', 'Coral', 'Aciano', 'SedaDeMaíz', 'Carmesí',
        'Cian', 'AzulOscuro', 'CianOscuro', 'OroOscuro', 'GrisOscuro',
        'VerdeOscuro', 'CaquiOscuro', 'MagentaOscuro', 'OlivaOscuro', 'NaranjaOscuro',
        'OrquídeaOscura', 'RojoOscuro', 'SalmónOscuro', 'VerdeMarOscuro', 'AzulPizarraOscuro',
        'GrisPizarraOscuro', 'TurquesaOscuro', 'VioletaOscuro', 'RosaProfundo', 'AzulCieloProfundo',
        'GrisApagado', 'GrisOpaco', 'AzulBrillante', 'RojoLadrillo', 'BlancoFloral',
        'VerdeBosque', 'Fucsia', 'Gainsboro', 'BlancoFantasma', 'Oro',
        'Gris', 'Verde', 'AmarilloVerde', 'Melón', 'RosaIntenso',
        'RojoIndio', 'Índigo', 'Marfil', 'Caqui', 'Lavanda',
        'RuborLavanda', 'VerdeCésped', 'MousseDeLimón', 'AzulClaro', 'CoralClaro',
        'CianClaro', 'AmarilloOroPálido', 'GrisClaro', 'VerdeClaro', 'RosaClaro',
        'SalmónClaro', 'VerdeMarClaro', 'AzulCieloClaro', 'GrisPizarraClaro', 'AzulAceroClaro',
        'AmarilloClaro', 'Lima', 'VerdeLima', 'Lino', 'Magenta',
        'AguamarinaMedia', 'AzulMedio', 'OrquídeaMedia', 'PúrpuraMedio', 'Amarillo',
        'VerdeMarMedio', 'AzulPizarraMedio', 'VerdePrimaveraMedio', 'TurquesaMedia', 'VioletaRojoMedio',
        'AzulMedianoche', 'MentaCremosa', 'RosaNiebla', 'Mocasín', 'BlancoNavajo',
        'Marino', 'EncajeAntiguo', 'Oliva', 'CaquiOliva', 'Naranja',
        'RojoNaranja', 'Orquídea', 'VerdePálido', 'TurquesaPálido', 'VioletaRojoPálido',
        'BlancoPapaya', 'MelocotónClaro', 'Perú', 'Rosa', 'Ciruela',
        'AzulPolvo', 'Púrpura', 'Rojo', 'MarrónRosado', 'AzulReal',
        'MarrónSilla', 'Salmón', 'MarrónArenoso', 'VerdeMar', 'ConchaMarina',
        'TierraDeSiena', 'Plata', 'AzulCielo', 'AzulPizarra', 'GrisPizarra',
        'Nieve', 'VerdePrimavera', 'AzulAcero', 'MarrónClaro', 'VerdeAzulado',
        'Cardo', 'Tomate', 'Turquesa', 'Violeta', 'Trigo',
        'Blanco', 'BlancoHumo',
    ];
}
