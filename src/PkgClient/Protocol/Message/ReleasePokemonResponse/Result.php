<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message\ReleasePokemonResponse;

/**
 * Protobuf enum : PkgClient.Protocol.Message.ReleasePokemonResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * UNSET = 0
     */
    const UNSET_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * POKEMON_DEPLOYED = 2
     */
    const POKEMON_DEPLOYED_VALUE = 2;

    /**
     * FAILED = 3
     */
    const FAILED_VALUE = 3;

    /**
     * ERROR_POKEMON_IS_EGG = 4
     */
    const ERROR_POKEMON_IS_EGG_VALUE = 4;

    /**
     * @var \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    protected static $POKEMON_DEPLOYED = null;

    /**
     * @var \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    protected static $FAILED = null;

    /**
     * @var \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    protected static $ERROR_POKEMON_IS_EGG = null;

    /**
     * @return \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    public static function POKEMON_DEPLOYED()
    {
        if (self::$POKEMON_DEPLOYED !== null) {
            return self::$POKEMON_DEPLOYED;
        }

        return self::$POKEMON_DEPLOYED = new self('POKEMON_DEPLOYED', self::POKEMON_DEPLOYED_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    public static function FAILED()
    {
        if (self::$FAILED !== null) {
            return self::$FAILED;
        }

        return self::$FAILED = new self('FAILED', self::FAILED_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    public static function ERROR_POKEMON_IS_EGG()
    {
        if (self::$ERROR_POKEMON_IS_EGG !== null) {
            return self::$ERROR_POKEMON_IS_EGG;
        }

        return self::$ERROR_POKEMON_IS_EGG = new self('ERROR_POKEMON_IS_EGG', self::ERROR_POKEMON_IS_EGG_VALUE);
    }

    /**
     * @param int $value
     * @return \PkgClient\Protocol\Message\ReleasePokemonResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::POKEMON_DEPLOYED();
            case 3: return self::FAILED();
            case 4: return self::ERROR_POKEMON_IS_EGG();
            default: return null;
        }
    }


}

