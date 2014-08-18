<?php
namespace ProgrammeFinder;

/**
 * Class ION
 * @package ProgrammeFinder
 *
 * Stores constants relating to ION search
 */
class ION
{
    const IPLAYER = 'iplayer';
    const ANY = 'any';
    const DISCOVERABLE = 'discoverable';
    const ONDEMAND = 'ondemand';
    const SIMULCAST = 'simulcast';
    const COMINGUP = 'comingup';

    const XML = 'xml';

    const TV = 'tv';
    const RADIO = 'radio';

    const MIN_PERPAGE = 1;

    public static function allowedAvailabilities()
    {
        return array(self::IPLAYER, self::ANY, self::DISCOVERABLE, self::ONDEMAND, self::SIMULCAST, self::COMINGUP);
    }

    public static function allowedServiceTypes()
    {
        return array(self::TV, self::RADIO);
    }
}