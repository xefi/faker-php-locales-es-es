<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
{
    public function getLocale(): string|null
    {
        return 'es_ES';
    }

    /**
     * Text in format => Paragraphs => Sentences => Words.
     *
     * @var string[][]
     */
    protected array $paragraphs = [
        [
            ['La', 'calidad', 'de', 'los', 'servicios', 'sigue', 'siendo', 'un', 'objetivo', 'central', 'en', 'el', 'sector', 'profesional.'],
            ['Cada', 'proyecto', 'requiere', 'una', 'atención', 'especial', 'para', 'garantizar', 'su', 'éxito.'],
            ['Los', 'equipos', 'trabajan', 'en', 'colaboración', 'para', 'alcanzar', 'los', 'objetivos', 'comunes.'],
            ['La', 'comunicación', 'eficaz', 'entre', 'los', 'miembros', 'fomenta', 'una', 'mejor', 'productividad.'],
        ],
        [
            ['La', 'gestión', 'de', 'los', 'recursos', 'es', 'un', 'elemento', 'clave', 'para', 'el', 'rendimiento', 'global.'],
            ['Los', 'métodos', 'de', 'trabajo', 'evolucionan', 'según', 'las', 'necesidades', 'y', 'las', 'tecnologías.'],
            ['La', 'adaptabilidad', 'permite', 'a', 'las', 'estructuras', 'mantenerse', 'competitivas', 'e', 'innovadoras.'],
            ['Los', 'procesos', 'se', 'revisan', 'para', 'optimizar', 'los', 'resultados', 'y', 'responder', 'a', 'las', 'exigencias', 'del', 'mercado.'],
        ],
        [
            ['La', 'satisfacción', 'del', 'cliente', 'depende', 'de', 'la', 'calidad', 'del', 'servicio', 'prestado', 'y', 'de', 'la', 'capacidad', 'de', 'respuesta.'],
            ['Se', 'utilizan', 'indicadores', 'para', 'medir', 'el', 'rendimiento', 'y', 'orientar', 'las', 'decisiones', 'estratégicas.'],
            ['Los', 'desafíos', 'diarios', 'se', 'superan', 'gracias', 'a', 'una', 'gestión', 'eficaz', 'y', 'competencias', 'adaptadas.'],
            ['La', 'evaluación', 'periódica', 'de', 'las', 'prácticas', 'permite', 'identificar', 'mejoras', 'potenciales.'],
        ],
        [
            ['La', 'formación', 'y', 'el', 'desarrollo', 'de', 'competencias', 'son', 'prioritarios', 'para', 'las', 'empresas.'],
            ['Se', 'anima', 'a', 'los', 'colaboradores', 'a', 'desarrollar', 'nuevas', 'competencias', 'y', 'a', 'innovar.'],
            ['Se', 'implementan', 'estrategias', 'de', 'mejora', 'continua', 'para', 'optimizar', 'el', 'rendimiento', 'y', 'reducir', 'los', 'riesgos.'],
            ['Se', 'ofrecen', 'programas', 'de', 'formación', 'personalizados', 'para', 'apoyar', 'el', 'desarrollo', 'individual', 'y', 'colectivo.'],
        ],
        [
            ['El', 'análisis', 'de', 'datos', 'ayuda', 'a', 'identificar', 'áreas', 'de', 'crecimiento', 'y', 'mejora.'],
            ['Los', 'objetivos', 'se', 'ajustan', 'según', 'la', 'evolución', 'del', 'mercado', 'y', 'las', 'expectativas', 'de', 'los', 'clientes.'],
            ['Un', 'seguimiento', 'regular', 'de', 'los', 'progresos', 'favorece', 'una', 'adaptación', 'rápida', 'a', 'los', 'cambios.'],
            ['La', 'toma', 'de', 'decisiones', 'se', 'basa', 'en', 'datos', 'fiables', 'y', 'análisis', 'precisos.'],
            ['Las', 'revisiones', 'periódicas', 'permiten', 'revaluar', 'las', 'estrategias', 'y', 'aplicar', 'acciones', 'correctivas.'],
        ],
    ];
}
