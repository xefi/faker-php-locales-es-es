<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
{
    public function getLocale(): ?string
    {
        return 'es_ES';
    }

    protected $provinces = [
        ['01' => 'Álava'], ['02' => 'Albacete'], ['03' => 'Alicante'], ['04' => 'Almería'], ['05' => 'Ávila'],
        ['06' => 'Badajoz'], ['07' => 'Islas Baleares'], ['08' => 'Barcelona'], ['09' => 'Burgos'], ['10' => 'Cáceres'],
        ['11' => 'Cádiz'], ['12' => 'Castellón'], ['13' => 'Ciudad Real'], ['14' => 'Córdoba'], ['15' => 'A Coruña'],
        ['16' => 'Cuenca'], ['17' => 'Girona'], ['18' => 'Granada'], ['19' => 'Guadalajara'], ['20' => 'Guipúzcoa'],
        ['21' => 'Huelva'], ['22' => 'Huesca'], ['23' => 'Jaén'], ['24' => 'León'], ['25' => 'Lleida'],
        ['26' => 'La Rioja'], ['27' => 'Lugo'], ['28' => 'Madrid'], ['29' => 'Málaga'], ['30' => 'Murcia'],
        ['31' => 'Navarra'], ['32' => 'Ourense'], ['33' => 'Asturias'], ['34' => 'Palencia'], ['35' => 'Las Palmas'],
        ['36' => 'Pontevedra'], ['37' => 'Salamanca'], ['38' => 'Santa Cruz de Tenerife'], ['39' => 'Cantabria'],
        ['40' => 'Segovia'], ['41' => 'Sevilla'], ['42' => 'Soria'], ['43' => 'Tarragona'], ['44' => 'Teruel'],
        ['45' => 'Toledo'], ['46' => 'Valencia'], ['47' => 'Valladolid'], ['48' => 'Vizcaya'], ['49' => 'Zamora'],
        ['50' => 'Zaragoza'], ['51' => 'Ceuta'], ['52' => 'Melilla'],
    ];

    protected $autonomousCommunities = [
        'Andalucía', 'Aragón', 'Asturias', 'Islas Baleares', 'Canarias', 'Cantabria', 'Castilla-La Mancha',
        'Castilla y León', 'Cataluña', 'Comunidad Valenciana', 'Extremadura', 'Galicia', 'Madrid', 'Murcia',
        'Navarra', 'La Rioja', 'País Vasco', 'Ceuta', 'Melilla',
    ];

    protected $cities = [
        'Madrid', 'Barcelona', 'Valencia', 'Sevilla', 'Zaragoza', 'Málaga', 'Murcia', 'Palma', 'Las Palmas',
        'Bilbao', 'Alicante', 'Córdoba', 'Valladolid', 'Vigo', 'Gijón', 'L\'Hospitalet', 'A Coruña', 'Vitoria',
        'Granada', 'Elche', 'Oviedo', 'Santa Cruz de Tenerife', 'Badalona', 'Cartagena', 'Terrassa', 'Jerez',
        'Sabadell', 'Móstoles', 'Alcalá de Henares', 'Pamplona',
    ];

    protected $streetTypes = ['Calle', 'Avenida', 'Plaza', 'Paseo', 'Camino', 'Carretera', 'Ronda', 'Travesía', 'Glorieta', 'Pasaje'];

    protected $streetNames = [
        'Gran Vía', 'Alcalá', 'Diagonal', 'Castellana', 'Mayor', 'Serrano', 'Velázquez', 'Goya', 'Hortaleza',
        'Atocha', 'Embajadores', 'Princesa', 'Fuencarral', 'Montera', 'Toledo', 'Recoletos', 'Bailén', 'Preciados',
        'Argüelles', 'Orense', 'Bravo Murillo', 'Juan Bravo', 'San Bernardo', 'Sagasta', 'Ferraz', 'Doctor Esquerdo',
        'Conde de Peñalver', 'Francisco Silvela', 'Arturo Soria', 'Ayala', 'O\'Donnell', 'Hermosilla', 'Narváez',
    ];

    public function region(): string
    {
        return $this->pickArrayRandomElement($this->autonomousCommunities);
    }

    public function department(): array
    {
        return $this->pickArrayRandomElement($this->provinces);
    }

    public function city(): string
    {
        return $this->pickArrayRandomElement($this->cities);
    }

    public function postcode(): string
    {
        $province = array_keys($this->department())[0];
        $rest = sprintf('%03d', $this->randomizer->getInt(0, 999));
        return sprintf('%s%s', $province, $rest);
    }

    public function houseNumber(): string
    {
        $houseNumber = $this->randomizer->getInt(1, 100);
        if ($this->randomizer->getInt(0, 1)) {
            $houseNumber .= chr($this->randomizer->getInt(65, 90)); // A-Z
        }

        return $houseNumber;
    }

    public function streetName(): string
    {
        $type = $this->pickArrayRandomElement($this->streetTypes);
        $name = $this->pickArrayRandomElement($this->streetNames);
        return sprintf('%s %s', $type, $name);
    }

    public function streetAddress(): string
    {
        return sprintf('%s %s', $this->streetName(), $this->houseNumber());
    }

    public function fullAddress(): string
    {
        $street = $this->streetAddress();
        $postcode = $this->postcode();
        $city = $this->city();
        return sprintf('%s, %s %s', $street, $postcode, $city);
    }
}
