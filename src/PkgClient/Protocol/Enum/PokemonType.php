<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Enum.proto
 */


namespace PkgClient\Protocol\Enum;

/**
 * Protobuf enum : PkgClient.Protocol.Enum.PokemonType
 */
class PokemonType extends \Protobuf\Enum
{

    /**
     * POKEMON_TYPE_NONE = 0
     */
    const POKEMON_TYPE_NONE_VALUE = 0;

    /**
     * POKEMON_TYPE_NORMAL = 1
     */
    const POKEMON_TYPE_NORMAL_VALUE = 1;

    /**
     * POKEMON_TYPE_FIGHTING = 2
     */
    const POKEMON_TYPE_FIGHTING_VALUE = 2;

    /**
     * POKEMON_TYPE_FLYING = 3
     */
    const POKEMON_TYPE_FLYING_VALUE = 3;

    /**
     * POKEMON_TYPE_POISON = 4
     */
    const POKEMON_TYPE_POISON_VALUE = 4;

    /**
     * POKEMON_TYPE_GROUND = 5
     */
    const POKEMON_TYPE_GROUND_VALUE = 5;

    /**
     * POKEMON_TYPE_ROCK = 6
     */
    const POKEMON_TYPE_ROCK_VALUE = 6;

    /**
     * POKEMON_TYPE_BUG = 7
     */
    const POKEMON_TYPE_BUG_VALUE = 7;

    /**
     * POKEMON_TYPE_GHOST = 8
     */
    const POKEMON_TYPE_GHOST_VALUE = 8;

    /**
     * POKEMON_TYPE_STEEL = 9
     */
    const POKEMON_TYPE_STEEL_VALUE = 9;

    /**
     * POKEMON_TYPE_FIRE = 10
     */
    const POKEMON_TYPE_FIRE_VALUE = 10;

    /**
     * POKEMON_TYPE_WATER = 11
     */
    const POKEMON_TYPE_WATER_VALUE = 11;

    /**
     * POKEMON_TYPE_GRASS = 12
     */
    const POKEMON_TYPE_GRASS_VALUE = 12;

    /**
     * POKEMON_TYPE_ELECTRIC = 13
     */
    const POKEMON_TYPE_ELECTRIC_VALUE = 13;

    /**
     * POKEMON_TYPE_PSYCHIC = 14
     */
    const POKEMON_TYPE_PSYCHIC_VALUE = 14;

    /**
     * POKEMON_TYPE_ICE = 15
     */
    const POKEMON_TYPE_ICE_VALUE = 15;

    /**
     * POKEMON_TYPE_DRAGON = 16
     */
    const POKEMON_TYPE_DRAGON_VALUE = 16;

    /**
     * POKEMON_TYPE_DARK = 17
     */
    const POKEMON_TYPE_DARK_VALUE = 17;

    /**
     * POKEMON_TYPE_FAIRY = 18
     */
    const POKEMON_TYPE_FAIRY_VALUE = 18;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_NONE = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_NORMAL = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_FIGHTING = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_FLYING = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_POISON = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_GROUND = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_ROCK = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_BUG = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_GHOST = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_STEEL = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_FIRE = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_WATER = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_GRASS = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_ELECTRIC = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_PSYCHIC = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_ICE = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_DRAGON = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_DARK = null;

    /**
     * @var \PkgClient\Protocol\Enum\PokemonType
     */
    protected static $POKEMON_TYPE_FAIRY = null;

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_NONE()
    {
        if (self::$POKEMON_TYPE_NONE !== null) {
            return self::$POKEMON_TYPE_NONE;
        }

        return self::$POKEMON_TYPE_NONE = new self('POKEMON_TYPE_NONE', self::POKEMON_TYPE_NONE_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_NORMAL()
    {
        if (self::$POKEMON_TYPE_NORMAL !== null) {
            return self::$POKEMON_TYPE_NORMAL;
        }

        return self::$POKEMON_TYPE_NORMAL = new self('POKEMON_TYPE_NORMAL', self::POKEMON_TYPE_NORMAL_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_FIGHTING()
    {
        if (self::$POKEMON_TYPE_FIGHTING !== null) {
            return self::$POKEMON_TYPE_FIGHTING;
        }

        return self::$POKEMON_TYPE_FIGHTING = new self('POKEMON_TYPE_FIGHTING', self::POKEMON_TYPE_FIGHTING_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_FLYING()
    {
        if (self::$POKEMON_TYPE_FLYING !== null) {
            return self::$POKEMON_TYPE_FLYING;
        }

        return self::$POKEMON_TYPE_FLYING = new self('POKEMON_TYPE_FLYING', self::POKEMON_TYPE_FLYING_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_POISON()
    {
        if (self::$POKEMON_TYPE_POISON !== null) {
            return self::$POKEMON_TYPE_POISON;
        }

        return self::$POKEMON_TYPE_POISON = new self('POKEMON_TYPE_POISON', self::POKEMON_TYPE_POISON_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_GROUND()
    {
        if (self::$POKEMON_TYPE_GROUND !== null) {
            return self::$POKEMON_TYPE_GROUND;
        }

        return self::$POKEMON_TYPE_GROUND = new self('POKEMON_TYPE_GROUND', self::POKEMON_TYPE_GROUND_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_ROCK()
    {
        if (self::$POKEMON_TYPE_ROCK !== null) {
            return self::$POKEMON_TYPE_ROCK;
        }

        return self::$POKEMON_TYPE_ROCK = new self('POKEMON_TYPE_ROCK', self::POKEMON_TYPE_ROCK_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_BUG()
    {
        if (self::$POKEMON_TYPE_BUG !== null) {
            return self::$POKEMON_TYPE_BUG;
        }

        return self::$POKEMON_TYPE_BUG = new self('POKEMON_TYPE_BUG', self::POKEMON_TYPE_BUG_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_GHOST()
    {
        if (self::$POKEMON_TYPE_GHOST !== null) {
            return self::$POKEMON_TYPE_GHOST;
        }

        return self::$POKEMON_TYPE_GHOST = new self('POKEMON_TYPE_GHOST', self::POKEMON_TYPE_GHOST_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_STEEL()
    {
        if (self::$POKEMON_TYPE_STEEL !== null) {
            return self::$POKEMON_TYPE_STEEL;
        }

        return self::$POKEMON_TYPE_STEEL = new self('POKEMON_TYPE_STEEL', self::POKEMON_TYPE_STEEL_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_FIRE()
    {
        if (self::$POKEMON_TYPE_FIRE !== null) {
            return self::$POKEMON_TYPE_FIRE;
        }

        return self::$POKEMON_TYPE_FIRE = new self('POKEMON_TYPE_FIRE', self::POKEMON_TYPE_FIRE_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_WATER()
    {
        if (self::$POKEMON_TYPE_WATER !== null) {
            return self::$POKEMON_TYPE_WATER;
        }

        return self::$POKEMON_TYPE_WATER = new self('POKEMON_TYPE_WATER', self::POKEMON_TYPE_WATER_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_GRASS()
    {
        if (self::$POKEMON_TYPE_GRASS !== null) {
            return self::$POKEMON_TYPE_GRASS;
        }

        return self::$POKEMON_TYPE_GRASS = new self('POKEMON_TYPE_GRASS', self::POKEMON_TYPE_GRASS_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_ELECTRIC()
    {
        if (self::$POKEMON_TYPE_ELECTRIC !== null) {
            return self::$POKEMON_TYPE_ELECTRIC;
        }

        return self::$POKEMON_TYPE_ELECTRIC = new self('POKEMON_TYPE_ELECTRIC', self::POKEMON_TYPE_ELECTRIC_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_PSYCHIC()
    {
        if (self::$POKEMON_TYPE_PSYCHIC !== null) {
            return self::$POKEMON_TYPE_PSYCHIC;
        }

        return self::$POKEMON_TYPE_PSYCHIC = new self('POKEMON_TYPE_PSYCHIC', self::POKEMON_TYPE_PSYCHIC_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_ICE()
    {
        if (self::$POKEMON_TYPE_ICE !== null) {
            return self::$POKEMON_TYPE_ICE;
        }

        return self::$POKEMON_TYPE_ICE = new self('POKEMON_TYPE_ICE', self::POKEMON_TYPE_ICE_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_DRAGON()
    {
        if (self::$POKEMON_TYPE_DRAGON !== null) {
            return self::$POKEMON_TYPE_DRAGON;
        }

        return self::$POKEMON_TYPE_DRAGON = new self('POKEMON_TYPE_DRAGON', self::POKEMON_TYPE_DRAGON_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_DARK()
    {
        if (self::$POKEMON_TYPE_DARK !== null) {
            return self::$POKEMON_TYPE_DARK;
        }

        return self::$POKEMON_TYPE_DARK = new self('POKEMON_TYPE_DARK', self::POKEMON_TYPE_DARK_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function POKEMON_TYPE_FAIRY()
    {
        if (self::$POKEMON_TYPE_FAIRY !== null) {
            return self::$POKEMON_TYPE_FAIRY;
        }

        return self::$POKEMON_TYPE_FAIRY = new self('POKEMON_TYPE_FAIRY', self::POKEMON_TYPE_FAIRY_VALUE);
    }

    /**
     * @param int $value
     * @return \PkgClient\Protocol\Enum\PokemonType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::POKEMON_TYPE_NONE();
            case 1: return self::POKEMON_TYPE_NORMAL();
            case 2: return self::POKEMON_TYPE_FIGHTING();
            case 3: return self::POKEMON_TYPE_FLYING();
            case 4: return self::POKEMON_TYPE_POISON();
            case 5: return self::POKEMON_TYPE_GROUND();
            case 6: return self::POKEMON_TYPE_ROCK();
            case 7: return self::POKEMON_TYPE_BUG();
            case 8: return self::POKEMON_TYPE_GHOST();
            case 9: return self::POKEMON_TYPE_STEEL();
            case 10: return self::POKEMON_TYPE_FIRE();
            case 11: return self::POKEMON_TYPE_WATER();
            case 12: return self::POKEMON_TYPE_GRASS();
            case 13: return self::POKEMON_TYPE_ELECTRIC();
            case 14: return self::POKEMON_TYPE_PSYCHIC();
            case 15: return self::POKEMON_TYPE_ICE();
            case 16: return self::POKEMON_TYPE_DRAGON();
            case 17: return self::POKEMON_TYPE_DARK();
            case 18: return self::POKEMON_TYPE_FAIRY();
            default: return null;
        }
    }


}

