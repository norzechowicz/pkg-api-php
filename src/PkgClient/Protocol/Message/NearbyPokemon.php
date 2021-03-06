<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.NearbyPokemon
 */
class NearbyPokemon extends \Protobuf\AbstractMessage
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
     * pokemon_id optional enum = 1
     *
     * @var \PkgClient\Protocol\Enum\PokemonId
     */
    protected $pokemon_id = null;

    /**
     * distance_in_meters optional float = 2
     *
     * @var float
     */
    protected $distance_in_meters = null;

    /**
     * encounter_id optional fixed64 = 3
     *
     * @var int
     */
    protected $encounter_id = null;

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
     * Check if 'distance_in_meters' has a value
     *
     * @return bool
     */
    public function hasDistanceInMeters()
    {
        return $this->distance_in_meters !== null;
    }

    /**
     * Get 'distance_in_meters' value
     *
     * @return float
     */
    public function getDistanceInMeters()
    {
        return $this->distance_in_meters;
    }

    /**
     * Set 'distance_in_meters' value
     *
     * @param float $value
     */
    public function setDistanceInMeters($value = null)
    {
        $this->distance_in_meters = $value;
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
            'pokemon_id' => null,
            'distance_in_meters' => null,
            'encounter_id' => null
        ], $values);

        $message->setPokemonId($values['pokemon_id']);
        $message->setDistanceInMeters($values['distance_in_meters']);
        $message->setEncounterId($values['encounter_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'NearbyPokemon',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Enum.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'distance_in_meters',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'encounter_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
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

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->pokemon_id->value());
        }

        if ($this->distance_in_meters !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFloat($stream, $this->distance_in_meters);
        }

        if ($this->encounter_id !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeFixed64($stream, $this->encounter_id);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->pokemon_id = \PkgClient\Protocol\Enum\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->distance_in_meters = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->encounter_id = $reader->readFixed64($stream);

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

        if ($this->pokemon_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokemon_id->value());
        }

        if ($this->distance_in_meters !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->encounter_id !== null) {
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
        $this->pokemon_id = null;
        $this->distance_in_meters = null;
        $this->encounter_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\NearbyPokemon) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->distance_in_meters = ($message->distance_in_meters !== null) ? $message->distance_in_meters : $this->distance_in_meters;
        $this->encounter_id = ($message->encounter_id !== null) ? $message->encounter_id : $this->encounter_id;
    }


}

