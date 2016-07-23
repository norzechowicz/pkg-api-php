<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.MapPokemon
 */
class MapPokemon extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * spawnpoint_id optional string = 1
     *
     * @var string
     */
    protected $spawnpoint_id = null;

    /**
     * encounter_id optional fixed64 = 2
     *
     * @var int
     */
    protected $encounter_id = null;

    /**
     * pokemon_id optional enum = 3
     *
     * @var \PkgClient\Protocol\Enum\PokemonId
     */
    protected $pokemon_id = null;

    /**
     * expiration_timestamp_ms optional int64 = 4
     *
     * @var int
     */
    protected $expiration_timestamp_ms = null;

    /**
     * latitude optional double = 5
     *
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude optional double = 6
     *
     * @var float
     */
    protected $longitude = null;

    /**
     * Check if 'spawnpoint_id' has a value
     *
     * @return bool
     */
    public function hasSpawnpointId()
    {
        return $this->spawnpoint_id !== null;
    }

    /**
     * Get 'spawnpoint_id' value
     *
     * @return string
     */
    public function getSpawnpointId()
    {
        return $this->spawnpoint_id;
    }

    /**
     * Set 'spawnpoint_id' value
     *
     * @param string $value
     */
    public function setSpawnpointId($value = null)
    {
        $this->spawnpoint_id = $value;
    }

    /**
     * Check if 'encounter_id' has a value
     *
     * @return bool
     */
    public function hasEncounterId()
    {
        return $this->encounter_id !== null;
    }

    /**
     * Get 'encounter_id' value
     *
     * @return int
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * Set 'encounter_id' value
     *
     * @param int $value
     */
    public function setEncounterId($value = null)
    {
        $this->encounter_id = $value;
    }

    /**
     * Check if 'pokemon_id' has a value
     *
     * @return bool
     */
    public function hasPokemonId()
    {
        return $this->pokemon_id !== null;
    }

    /**
     * Get 'pokemon_id' value
     *
     * @return \PkgClient\Protocol\Enum\PokemonId
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Set 'pokemon_id' value
     *
     * @param \PkgClient\Protocol\Enum\PokemonId $value
     */
    public function setPokemonId(\PkgClient\Protocol\Enum\PokemonId $value = null)
    {
        $this->pokemon_id = $value;
    }

    /**
     * Check if 'expiration_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasExpirationTimestampMs()
    {
        return $this->expiration_timestamp_ms !== null;
    }

    /**
     * Get 'expiration_timestamp_ms' value
     *
     * @return int
     */
    public function getExpirationTimestampMs()
    {
        return $this->expiration_timestamp_ms;
    }

    /**
     * Set 'expiration_timestamp_ms' value
     *
     * @param int $value
     */
    public function setExpirationTimestampMs($value = null)
    {
        $this->expiration_timestamp_ms = $value;
    }

    /**
     * Check if 'latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->latitude !== null;
    }

    /**
     * Get 'latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set 'latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value = null)
    {
        $this->latitude = $value;
    }

    /**
     * Check if 'longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->longitude !== null;
    }

    /**
     * Get 'longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set 'longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value = null)
    {
        $this->longitude = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'spawnpoint_id' => null,
            'encounter_id' => null,
            'pokemon_id' => null,
            'expiration_timestamp_ms' => null,
            'latitude' => null,
            'longitude' => null
        ], $values);

        $message->setSpawnpointId($values['spawnpoint_id']);
        $message->setEncounterId($values['encounter_id']);
        $message->setPokemonId($values['pokemon_id']);
        $message->setExpirationTimestampMs($values['expiration_timestamp_ms']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'MapPokemon',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'spawnpoint_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'encounter_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Enum.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'expiration_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->spawnpoint_id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->spawnpoint_id);
        }

        if ($this->encounter_id !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->encounter_id);
        }

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->pokemon_id->value());
        }

        if ($this->expiration_timestamp_ms !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->expiration_timestamp_ms);
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->longitude);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->spawnpoint_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->encounter_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->pokemon_id = \PkgClient\Protocol\Enum\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->expiration_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->longitude = $reader->readDouble($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->spawnpoint_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->spawnpoint_id);
        }

        if ($this->encounter_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->pokemon_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokemon_id->value());
        }

        if ($this->expiration_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->expiration_timestamp_ms);
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->spawnpoint_id = null;
        $this->encounter_id = null;
        $this->pokemon_id = null;
        $this->expiration_timestamp_ms = null;
        $this->latitude = null;
        $this->longitude = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\MapPokemon) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->spawnpoint_id = ($message->spawnpoint_id !== null) ? $message->spawnpoint_id : $this->spawnpoint_id;
        $this->encounter_id = ($message->encounter_id !== null) ? $message->encounter_id : $this->encounter_id;
        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->expiration_timestamp_ms = ($message->expiration_timestamp_ms !== null) ? $message->expiration_timestamp_ms : $this->expiration_timestamp_ms;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
    }


}

