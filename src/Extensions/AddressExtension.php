<?php

namespace Xefi\Faker\EsEs\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
{
    protected $provinces = [
        'Madrid', 'Barcelona', 'Valencia', 'Sevilla', 'Zaragoza', 'Málaga', 'Murcia', 'Palma', 'Bilbao', 'Alicante',
        'Córdoba', 'Valladolid', 'Vigo', 'Gijón', 'L\'Hospitalet de Llobregat', 'A Coruña', 'Granada', 'Vitoria-Gasteiz',
        'Elche', 'Oviedo',
    ];

    protected $regions = [
        'Andalucía', 'Aragón', 'Asturias', 'Cantabria', 'Castilla-La Mancha', 'Castilla y León', 'Cataluña',
        'Comunidad Valenciana', 'Extremadura', 'Galicia', 'Madrid', 'Murcia', 'Navarra', 'País Vasco', 'La Rioja',
        'Islas Baleares', 'Islas Canarias',
    ];

    protected $cities = [
        'Madrid', 'Barcelona', 'Valencia', 'Sevilla', 'Zaragoza', 'Málaga', 'Murcia', 'Palma', 'Bilbao', 'Alicante',
        'Córdoba', 'Valladolid', 'Vigo', 'Gijón', 'Hospitalet de Llobregat', 'A Coruña', 'Granada', 'Vitoria-Gasteiz',
        'Elche', 'Oviedo', 'Badalona', 'Cartagena', 'Terrassa', 'Jerez de la Frontera', 'Sabadell', 'Móstoles', 'Santa Cruz de Tenerife',
        'Pamplona', 'Almería', 'San Sebastián',
    ];

    protected $streetTypes = [
        'Calle', 'Avenida', 'Paseo', 'Plaza', 'Camino', 'Carretera', 'Ronda', 'Travesía', 'Glorieta', 'Pasaje',
    ];

    protected $streetNames = [
        'Gran Vía', 'Alcalá', 'Diagonal', 'Serrano', 'Velázquez', 'Castellana', 'Goya', 'Fuencarral', 'Preciados',
        'Atocha', 'Orense', 'Paseo de Gracia', 'Rambla', 'Mayor', 'Colón', 'Bailén', 'Toledo', 'Embajadores',
        'Doctor Esquerdo', 'Aragón', 'San Bernardo', 'Bravo Murillo', 'Pintor Sorolla', 'General Perón', 'Juan Bravo',
        'Conde de Peñalver', 'Clara del Rey', 'Infanta Mercedes', 'José Abascal', 'Francisco Silvela', 'Arturo Soria',
        'Menéndez Pelayo', 'María de Molina', 'Manuel Becerra', 'Antonio López', 'Sanchinarro', 'Chamartín', 'Retiro',
    ];

    public function region(): string
    {
        return $this->pickArrayRandomElement($this->regions);
    }

    public function province(): string
    {
        return $this->pickArrayRandomElement($this->provinces);
    }

    public function city(): string
    {
        return $this->pickArrayRandomElement($this->cities);
    }

    public function postcode(): int
    {
        return $this->randomizer->getInt(10000, 52999);
    }

    public function houseNumber(): int
    {
        return $this->randomizer->getInt(1, 200);
    }

    public function streetName(): string
    {
        $streetType = $this->pickArrayRandomElement($this->streetTypes);
        $name = $this->pickArrayRandomElement($this->streetNames);

        return sprintf('%s %s', $streetType, $name);
    }

    public function streetAddress(): string
    {
        $streetName = $this->streetName();
        $houseNumber = $this->houseNumber();

        return sprintf('%s %d', $streetName, $houseNumber);
    }

    public function fullAddress(): string
    {
        $streetAddress = $this->streetAddress();
        $postcode = str_pad($this->postcode(), 5, '0', STR_PAD_LEFT);
        $city = $this->city();
        return sprintf('%s, %s %s', $streetAddress, $postcode, $city);
    }
}
