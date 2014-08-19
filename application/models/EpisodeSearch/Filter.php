<?php
namespace EpisodeSearch;

use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;

/**
 * Class Filter
 * @package EpisodeSearch
 *
 * Configures a URI with parameters to make an ION request
 */
class Filter
{
    const FEED = 'searchextended';

    protected $params = array(
        'search_availability' => ION::DISCOVERABLE,
        'service_type' => ION::RADIO,
        'format' => ION::XML,
        'perpage' => 10,
        'q' => '',
    );

    /**
     * @param $q
     */
    public function setQuery($q)
    {
        $this->params['q'] = urlencode(urlencode($q));
    }

    /**
     * @param $availability
     * @throws \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
     */
    public function setSearchAvailability($availability)
    {
        if (!in_array($availability, ION::allowedAvailabilities())) {
            throw new InvalidArgumentException("$availability is not a valid search availability");
        }
        $this->params['search_availability'] = $availability;
    }

    /**
     * @param $serviceType
     * @throws \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
     */
    public function setServiceType($serviceType)
    {
        if (!in_array($serviceType, ION::allowedServiceTypes())) {
            throw new InvalidArgumentException("$serviceType is not a valid service type");
        }
        $this->params['service_type'] = $serviceType;
    }

    /**
     * @param $count
     * @throws \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
     */
    public function setPerPage($count)
    {
        if ($count < ION::MIN_PERPAGE) {
            throw new InvalidArgumentException("per page must be greater than " . ION::MIN_PERPAGE);
        }
        $this->params['perpage'] = $count;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        $config = new \Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);

        $args = '';
        foreach ($this->params as $key => $value) {
            if (!empty($value)) {
                $args .= "/$key/$value";
            }
        }
        return $config->api->ION . self::FEED . $args;
    }
}