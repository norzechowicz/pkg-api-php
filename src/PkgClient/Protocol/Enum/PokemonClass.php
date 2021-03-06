<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Enum.proto
 */


namespace PkgClient\Protocol\Enum;

/**
 * Protobuf enum : PkgClient.Protocol.Enum.PokemonClass
 */
class PokemonClass extends \Protobuf\Enum
{

    /**
     * NORMAL = 0
     */
    const NORMAL_VALUE = 0;

    /**
     * LEGENDARY = 1
     */
    const LEGENDARY_VALUE = 1;

    /**
     * MYTHIC = 2
     */
    const MYTHIC_VALUE = 2;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonClass
     */
    protected static $NORMAL = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonClass
     */
    protected static $LEGENDARY = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonClass
     */
    protected static $MYTHIC = null;

    /**
     * @return \PkgClient\Protocol\Enum\PokemonClass
     */
    public static function NORMAL()
    {
        if (self::$NORMAL !== null) {
            return self::$NORMAL;
        }

        return self::$NORMAL = new self('NORMAL', self::NORMAL_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonClass
     */
    public static function LEGENDARY()
    {
        if (self::$LEGENDARY !== null) {
            return self::$LEGENDARY;
        }

        return self::$LEGENDARY = new self('LEGENDARY', self::LEGENDARY_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonClass
     */
    public static function MYTHIC()
    {
        if (self::$MYTHIC !== null) {
            return self::$MYTHIC;
        }

        return self::$MYTHIC = new self('MYTHIC', self::MYTHIC_VALUE);
    }

    /**
     * @param int $value
     * @return \PkgClient\Protocol\Enum\PokemonClass
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::NORMAL();
            case 1: return self::LEGENDARY();
            case 2: return self::MYTHIC();
            default: return null;
        }
    }


}

