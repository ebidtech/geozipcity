<?php
/*
 * This file is a part of the user agent parser.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace EBT\GeoZipLocation\Translator\ES\Resources\Data;

/**
 * Class DatabasePT
 */
abstract class DatabaseES
{
    public static $map = array(
        '01' => array('area_id' => 0, 'zone_id' => 1, 'region_id' => 5),
        '02' => array('area_id' => 0, 'zone_id' => 2, 'region_id' => 9),
        '03' => array('area_id' => 0, 'zone_id' => 3, 'region_id' => 17),
        '04' => array('area_id' => 0, 'zone_id' => 4, 'region_id' => 1),
        '33' => array('area_id' => 0, 'zone_id' => 33, 'region_id' => 3),
        '05' => array('area_id' => 0, 'zone_id' => 5, 'region_id' => 10),
        '06' => array('area_id' => 0, 'zone_id' => 6, 'region_id' => 11),
        '07' => array('area_id' => 0, 'zone_id' => 7, 'region_id' => 4),
        '08' => array('area_id' => 0, 'zone_id' => 8, 'region_id' => 8),
        '09' => array('area_id' => 0, 'zone_id' => 9, 'region_id' => 10),
        '10' => array('area_id' => 0, 'zone_id' => 10, 'region_id' => 11),
        '11' => array('area_id' => 0, 'zone_id' => 11, 'region_id' => 1),
        '39' => array('area_id' => 0, 'zone_id' => 39, 'region_id' => 7),
        '12' => array('area_id' => 0, 'zone_id' => 12, 'region_id' => 17),
        '51' => array('area_id' => 0, 'zone_id' => 51, 'region_id' => 18),
        '13' => array('area_id' => 0, 'zone_id' => 13, 'region_id' => 9),
        '14' => array('area_id' => 0, 'zone_id' => 14, 'region_id' => 1),
        '15' => array('area_id' => 0, 'zone_id' => 15, 'region_id' => 12),
        '16' => array('area_id' => 0, 'zone_id' => 16, 'region_id' => 9),
        '17' => array('area_id' => 0, 'zone_id' => 17, 'region_id' => 8),
        '18' => array('area_id' => 0, 'zone_id' => 18, 'region_id' => 1),
        '19' => array('area_id' => 0, 'zone_id' => 19, 'region_id' => 9),
        '20' => array('area_id' => 0, 'zone_id' => 20, 'region_id' => 5),
        '21' => array('area_id' => 0, 'zone_id' => 21, 'region_id' => 1),
        '22' => array('area_id' => 0, 'zone_id' => 22, 'region_id' => 2),
        '23' => array('area_id' => 0, 'zone_id' => 23, 'region_id' => 1),
        '24' => array('area_id' => 0, 'zone_id' => 24, 'region_id' => 10),
        '25' => array('area_id' => 0, 'zone_id' => 25, 'region_id' => 8),
        '27' => array('area_id' => 0, 'zone_id' => 27, 'region_id' => 12),
        '28' => array('area_id' => 0, 'zone_id' => 28, 'region_id' => 14),
        '29' => array('area_id' => 0, 'zone_id' => 29, 'region_id' => 1),
        '52' => array('area_id' => 0, 'zone_id' => 52, 'region_id' => 18),
        '30' => array('area_id' => 0, 'zone_id' => 30, 'region_id' => 15),
        '31' => array('area_id' => 0, 'zone_id' => 31, 'region_id' => 16),
        '32' => array('area_id' => 0, 'zone_id' => 32, 'region_id' => 12),
        '34' => array('area_id' => 0, 'zone_id' => 34, 'region_id' => 10),
        '35' => array('area_id' => 0, 'zone_id' => 35, 'region_id' => 6),
        '36' => array('area_id' => 0, 'zone_id' => 36, 'region_id' => 12),
        '26' => array('area_id' => 0, 'zone_id' => 26, 'region_id' => 13),
        '37' => array('area_id' => 0, 'zone_id' => 37, 'region_id' => 10),
        '38' => array('area_id' => 0, 'zone_id' => 38, 'region_id' => 6),
        '40' => array('area_id' => 0, 'zone_id' => 40, 'region_id' => 10),
        '41' => array('area_id' => 0, 'zone_id' => 41, 'region_id' => 1),
        '42' => array('area_id' => 0, 'zone_id' => 42, 'region_id' => 10),
        '43' => array('area_id' => 0, 'zone_id' => 43, 'region_id' => 8),
        '44' => array('area_id' => 0, 'zone_id' => 44, 'region_id' => 2),
        '45' => array('area_id' => 0, 'zone_id' => 45, 'region_id' => 9),
        '46' => array('area_id' => 0, 'zone_id' => 46, 'region_id' => 17),
        '47' => array('area_id' => 0, 'zone_id' => 47, 'region_id' => 10),
        '48' => array('area_id' => 0, 'zone_id' => 48, 'region_id' => 5),
        '49' => array('area_id' => 0, 'zone_id' => 49, 'region_id' => 10),
        '50' => array('area_id' => 0, 'zone_id' => 50, 'region_id' => 2),
    );

    public static $areas = array(
        0 => 'NA',
    );

    public static $zones = array(
        1 => 'Alava',
        2 => 'Albacete',
        3 => 'Alicante',
        4 => 'Almería',
        33 => 'Asturias',
        5 => 'Ávila',
        6 => 'Badajoz',
        7 => 'Baleares',
        8 => 'Barcelona',
        9 => 'Burco',
        10 => 'Cáceres',
        11 => 'Cádiz',
        39 => 'Cantabria',
        12 => 'Castellón',
        51 => 'Ceuta',
        13 => 'Ciudad Real',
        14 => 'Córdoba',
        15 => 'La Coruña',
        16 => 'Cuenca',
        17 => 'Gerona',
        18 => 'Granada',
        19 => 'Guadalajara',
        20 => 'Guipuzcoa',
        21 => 'Huelva',
        22 => 'Huesca',
        23 => 'Jaen',
        24 => 'León',
        25 => 'Lérida',
        27 => 'Lugo',
        28 => 'Madrid',
        29 => 'Málaga',
        52 => 'Melilla',
        30 => 'Murcia ',
        31 => 'Navarra',
        32 => 'Orense',
        34 => 'Palencia',
        35 => 'Las Palmas',
        36 => 'Pontevedra',
        26 => 'La Rioja',
        37 => 'Salamanca',
        38 => 'S.C. Tenerife',
        40 => 'Segovia',
        41 => 'Sevilla',
        42 => 'Soria',
        43 => 'Tarragona',
        44 => 'Teruel',
        45 => 'Toledo',
        46 => 'Valencia',
        47 => 'Valladolid',
        48 => 'Vizcaya',
        49 => 'Zamora',
        50 => 'Zaragoza',
    );

    public static $regions = array(
        1 => 'Andalucia',
        2 => 'Aragón',
        3 => 'Principado de Asturias',
        4 => 'Baleares',
        5 => 'País Vasco',
        6 => 'Islas Canarias',
        7 => 'Cantabria',
        8 => 'Cataluña',
        9 => 'Castilla-La Mancha',
        10 => 'Castilla y León',
        11 => 'Extremadura',
        12 => 'Galícia',
        13 => 'La Rioja',
        14 => 'Madrid',
        15 => 'Murcia',
        16 => 'Navarra',
        17 => 'Comunidad Valenciana',
        18 => 'Ceuta y Melilla',
    );
}