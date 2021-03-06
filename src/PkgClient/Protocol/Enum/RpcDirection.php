<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Enum.proto
 */


namespace PkgClient\Protocol\Enum;

/**
 * Protobuf enum : PkgClient.Protocol.Enum.RpcDirection
 */
class RpcDirection extends \Protobuf\Enum
{

    /**
     * UNKNOWN = 0
     */
    const UNKNOWN_VALUE = 0;

    /**
     * RESPONSE = 1
     */
    const RESPONSE_VALUE = 1;

    /**
     * REQUEST = 2
     */
    const REQUEST_VALUE = 2;

    /**
     * @var \PkgClient\Protocol\Enum\RpcDirection
     */
    protected static $UNKNOWN = null;

    /**
     * @var \PkgClient\Protocol\Enum\RpcDirection
     */
    protected static $RESPONSE = null;

    /**
     * @var \PkgClient\Protocol\Enum\RpcDirection
     */
    protected static $REQUEST = null;

    /**
     * @return \PkgClient\Protocol\Enum\RpcDirection
     */
    public static function UNKNOWN()
    {
        if (self::$UNKNOWN !== null) {
            return self::$UNKNOWN;
        }

        return self::$UNKNOWN = new self('UNKNOWN', self::UNKNOWN_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\RpcDirection
     */
    public static function RESPONSE()
    {
        if (self::$RESPONSE !== null) {
            return self::$RESPONSE;
        }

        return self::$RESPONSE = new self('RESPONSE', self::RESPONSE_VALUE);
    }

    /**
     * @return \PkgClient\Protocol\Enum\RpcDirection
     */
    public static function REQUEST()
    {
        if (self::$REQUEST !== null) {
            return self::$REQUEST;
        }

        return self::$REQUEST = new self('REQUEST', self::REQUEST_VALUE);
    }

    /**
     * @param int $value
     * @return \PkgClient\Protocol\Enum\RpcDirection
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNKNOWN();
            case 1: return self::RESPONSE();
            case 2: return self::REQUEST();
            default: return null;
        }
    }


}

