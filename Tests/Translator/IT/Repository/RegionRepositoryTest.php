<?php
/*
 * This file is a part of the user agent parser.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\GeoZipLocation\Tests\Translator\IT\Repository;

use EBT\GeoZipLocation\Core\TranslatorFactory;
use EBT\GeoZipLocation\Translator\IT\Repository\RegionRepository;
use PHPUnit_Framework_TestCase;

/**
 * Class TranslatorFactoryTest
 */
class RegionRepositoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * testGetType
     */
    public function testGetType()
    {
        $r = new RegionRepository();
        $this->assertEquals('region', $r->getType());
    }

    /**
     * testGetAll
     */
    public function testGetAll()
    {
        $r = new RegionRepository();
        $this->assertContainsOnlyInstancesOf('EBT\GeoZipLocation\Translator\IT\Location\Region', $r->getAll());
    }
}
