<?php
/*
 * This file is a part of the user agent parser.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace EBT\GeoZipLocation\Translator\BR;

use EBT\GeoZipLocation\Core\TranslatorInterface;
use EBT\GeoZipLocation\Exception\ResourceNotFoundException;
use EBT\GeoZipLocation\Translator\BR\Location\Region;
use EBT\GeoZipLocation\Translator\BR\Repository\AreaRepository;
use EBT\GeoZipLocation\Translator\BR\Repository\RegionRepository;
use EBT\GeoZipLocation\Translator\BR\Repository\ZoneRepository;
use EBT\GeoZipLocation\Translator\BR\Resources\Data\DatabaseBR;

/**
 * Class Translator
 */
class Translator implements TranslatorInterface
{
    const COUNTRY_CODE = 'BR';
    const DATA_INDEX_AREA = 'area_id';
    const DATA_INDEX_ZONE = 'zone_id';
    const DATA_INDEX_REGION = 'region_id';

    /**
     * @var AreaRepository
     */
    protected $repo_area;

    /**
     * @var ZoneRepository
     */
    protected $repo_zone;

    /**
     * @var RegionRepository
     */
    protected $repo_region;

    /**
     * @var array map
     */
    protected $map;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repo_area = new AreaRepository();
        $this->repo_zone = new ZoneRepository();
        $this->repo_region = new RegionRepository();

        $this->map = DatabaseBR::$map;
    }

    /**
     * Returns current's translator country code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return self::COUNTRY_CODE;
    }

    /**
     * Returns the location for given zip code
     *
     * @param string $wantedZipCode
     *
     * @return Region
     *
     * @throws \EBT\GeoZipLocation\Exception\ResourceNotFoundException
     */
    public function getLocationForZip($wantedZipCode)
    {
        $wantedZipCode = $this->getSanitizeZipCode($wantedZipCode);

        if (false !== $wantedZipCode) {
            $intWantedZipCode = (int) $wantedZipCode;
            foreach ($this->map as $postalCodeStart => $mapping) {
                if ($intWantedZipCode >= $postalCodeStart) {
                    $area = $this->repo_area->getById($mapping[self::DATA_INDEX_AREA]);
                    $zone = $this->repo_zone->getById($mapping[self::DATA_INDEX_ZONE]);
                    $region = $this->repo_region->getById($mapping[self::DATA_INDEX_REGION]);
                } else {
                    /* Already found in last cycle so end the search */
                    break;
                }
            }

            if (!isset($area)) {
                /* this will happen when $intWantedZipCode is lower than the first valid zipcode */
                throw new ResourceNotFoundException(sprintf('Unable to find a region for %s zipcode', $wantedZipCode));
            }
            $zone->setSubLocation($area);
            $region->setSubLocation($zone);
            return $region;
        }

        throw new ResourceNotFoundException(sprintf('Unable to find a region for %s zipcode', $wantedZipCode));
    }

    /**
     * Returns current's translator country code
     *
     * @param string $zipCode
     *
     * @return string|false Valid Zip code or False if it's impossible to sanitize
     */
    public function getSanitizeZipCode($zipCode)
    {
        if (!is_string($zipCode) || strlen($zipCode) < 5) {
            return false;
        }
        $sanitizedZipCode = substr($zipCode, 0, 5);

        return $sanitizedZipCode;
    }
}
