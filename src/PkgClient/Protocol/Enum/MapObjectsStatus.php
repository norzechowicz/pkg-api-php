<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Enum.proto
 */


namespace PkgClient\Protocol\Enum;

/**
 * Protobuf enum : PkgClient.Protocol.Enum.MapObjectsStatus
 */
class MapObjectsStatus extends \Protobuf\Enum
{

    /**
     * UNSET_STATUS = 0
     */
    const UNSET_STATUS_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * LOCATION_UNSET = 2
     */
    const LOCATION_UNSET_VALUE = 2;

    /**
     * @var \PkgClient\Protocol\Enum\MapObjectsStatus
     */
    protected static $UNSET_STATUS = null;

    /**
     * @var \PkgClient\Protocol\Enum\MapObjectsStatus
     */
    protected static $SUCCESS = null;

    /**
     * @var \PkgClient\Protocol\Enum\MapObjectsStatus
     */
    protected static $LOCATION_UNSET = null;

    /**
     * @return \PkgClient\Protocol\Enum\MapObjectsStatus
     */
    public static function UNSET_STATUS()
    {
        if (self::$UNSET_STATUS !== null) {
            return self::$UNSET_STATUS;
        }

        return self::$UNSET_STATUS = new self('UNSET_STATUS', self::UNSET_STATUS_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\MapObjectsStatus
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\MapObjectsStatus
     */
    public static function LOCATION_UNSET()
    {
        if (self::$LOCATION_UNSET !== null) {
            return self::$LOCATION_UNSET;
        }

        return self::$LOCATION_UNSET = new self('LOCATION_UNSET', self::LOCATION_UNSET_VALUE);
    }

    /**
     * @param int $value
     * @return \PkgClient\Protocol\Enum\MapObjectsStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET_STATUS();
            case 1: return self::SUCCESS();
            case 2: return self::LOCATION_UNSET();
            default: return null;
        }
    }


}

