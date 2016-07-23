<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message\EncounterResponse;

/**
 * Protobuf enum : PkgClient.Protocol.Message.EncounterResponse.Background
 */
class Background extends \Protobuf\Enum
{

    /**
     * PARK = 0
     */
    const PARK_VALUE = 0;

    /**
     * DESERT = 1
     */
    const DESERT_VALUE = 1;

    /**
     * @var \PkgClient\Protocol\Message\EncounterResponse\Background
     */
    protected static $PARK = null;

    /**
     * @var \PkgClient\Protocol\Message\EncounterResponse\Background
     */
    protected static $DESERT = null;

    /**
     * @return \PkgClient\Protocol\Message\EncounterResponse\Background
     */
    public static function PARK()
    {
        if (self::$PARK !== null) {
            return self::$PARK;
        }

        return self::$PARK = new self('PARK', self::PARK_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Message\EncounterResponse\Background
     */
    public static function DESERT()
    {
        if (self::$DESERT !== null) {
            return self::$DESERT;
        }

        return self::$DESERT = new self('DESERT', self::DESERT_VALUE);
    }

    /**
     * @param int $value
     * @return \PkgClient\Protocol\Message\EncounterResponse\Background
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::PARK();
            case 1: return self::DESERT();
            default: return null;
        }
    }


}
