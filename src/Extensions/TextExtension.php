<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
{
    public function getLocale(): ?string
    {
        return 'es_ES';
    }

    protected array $paragraphs = [
        [
            ['La', 'calidad', 'de', 'los', 'servicios', 'es', 'un', 'objetivo', 'clave', 'en', 'el', 'ámbito', 'profesional.'],
            ['Cada', 'proyecto', 'requiere', 'atención', 'especial', 'para', 'garantizar', 'su', 'éxito.'],
            ['Los', 'equipos', 'trabajan', 'en', 'colaboración', 'para', 'alcanzar', 'metas', 'comunes.'],
            ['La', 'comunicación', 'efectiva', 'entre', 'miembros', 'fomenta', 'una', 'mayor', 'productividad.'],
        ],
        [
            ['La', 'gestión', 'de', 'recursos', 'es', 'fundamental', 'para', 'el', 'rendimiento', 'global.'],
            ['Los', 'métodos', 'de', 'trabajo', 'evolucionan', 'con', 'las', 'necesidades', 'y', 'las', 'tecnologías.'],
            ['La', 'adaptabilidad', 'permite', 'a', 'las', 'empresas', 'seguir', 'siendo', 'competitivas', 'e', 'innovadoras.'],
            ['Los', 'procesos', 'se', 'revisan', 'para', 'optimizar', 'los', 'resultados', 'y', 'responder', 'a', 'las', 'exigencias', 'del', 'mercado.'],
        ],
        [
            ['La', 'satisfacción', 'del', 'cliente', 'depende', 'de', 'la', 'calidad', 'del', 'servicio', 'y', 'la', 'respuesta', 'rápida.'],
            ['Se', 'utilizan', 'indicadores', 'para', 'medir', 'el', 'desempeño', 'y', 'tomar', 'decisiones', 'estratégicas.'],
            ['Los', 'desafíos', 'diarios', 'se', 'superan', 'gracias', 'a', 'una', 'gestión', 'eficiente', 'y', 'habilidades', 'adecuadas.'],
            ['La', 'evaluación', 'continua', 'de', 'las', 'prácticas', 'ayuda', 'a', 'identificar', 'mejoras', 'potenciales.'],
        ],
        [
            ['La', 'formación', 'y', 'el', 'desarrollo', 'de', 'habilidades', 'son', 'prioritarios', 'para', 'las', 'empresas.'],
            ['Se', 'anima', 'a', 'los', 'colaboradores', 'a', 'aprender', 'nuevas', 'competencias', 'e', 'innovar.'],
            ['Se', 'implementan', 'estrategias', 'de', 'mejora', 'continua', 'para', 'optimizar', 'el', 'rendimiento', 'y', 'reducir', 'riesgos.'],
            ['Se', 'ofrecen', 'programas', 'de', 'formación', 'personalizada', 'para', 'apoyar', 'el', 'desarrollo', 'individual', 'y', 'colectivo.'],
        ],
        [
            ['El', 'análisis', 'de', 'datos', 'ayuda', 'a', 'identificar', 'áreas', 'de', 'crecimiento', 'y', 'mejora.'],
            ['Los', 'objetivos', 'se', 'ajustan', 'según', 'los', 'cambios', 'del', 'mercado', 'y', 'las', 'expectativas', 'del', 'cliente.'],
            ['El', 'seguimiento', 'constante', 'de', 'los', 'progresos', 'favorece', 'la', 'adaptación', 'rápida', 'a', 'los', 'cambios.'],
            ['Las', 'decisiones', 'se', 'basan', 'en', 'datos', 'fiables', 'y', 'análisis', 'precisos.'],
            ['Las', 'revisiones', 'periódicas', 'permiten', 'replantear', 'estrategias', 'y', 'aplicar', 'acciones', 'correctivas.'],
        ],
    ];
}
