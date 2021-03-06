<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.FortLureInfo
 */
class FortLureInfo extends \Protobuf\AbstractMessage
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
     * fort_id optional string = 1
     *
     * @var string
     */
    protected $fort_id = null;

    /**
     * unknown2 optional double = 2
     *
     * @var float
     */
    protected $unknown2 = null;

    /**
     * active_pokemon_id optional enum = 3
     *
     * @var \PkgClient\Protocol\Enum\PokemonId
     */
    protected $active_pokemon_id = null;

    /**
     * lure_expires_timestamp_ms optional int64 = 4
     *
     * @var int
     */
    protected $lure_expires_timestamp_ms = null;

    /**
     * Check if 'fort_id' has a value
     *
     * @return bool
     */
    public function hasFortId()
    {
        return $this->fort_id !== null;
    }

    /**
     * Get 'fort_id' value
     *
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Set 'fort_id' value
     *
     * @param string $value
     */
    public function setFortId($value = null)
    {
        $this->fort_id = $value;
    }

    /**
     * Check if 'unknown2' has a value
     *
     * @return bool
     */
    public function hasUnknown2()
    {
        return $this->unknown2 !== null;
    }

    /**
     * Get 'unknown2' value
     *
     * @return float
     */
    public function getUnknown2()
    {
        return $this->unknown2;
    }

    /**
     * Set 'unknown2' value
     *
     * @param float $value
     */
    public function setUnknown2($value = null)
    {
        $this->unknown2 = $value;
    }

    /**
     * Check if 'active_pokemon_id' has a value
     *
     * @return bool
     */
    public function hasActivePokemonId()
    {
        return $this->active_pokemon_id !== null;
    }

    /**
     * Get 'active_pokemon_id' value
     *
     * @return \PkgClient\Protocol\Enum\PokemonId
     */
    public function getActivePokemonId()
    {
        return $this->active_pokemon_id;
    }

    /**
     * Set 'active_pokemon_id' value
     *
     * @param \PkgClient\Protocol\Enum\PokemonId $value
     */
    public function setActivePokemonId(\PkgClient\Protocol\Enum\PokemonId $value = null)
    {
        $this->active_pokemon_id = $value;
    }

    /**
     * Check if 'lure_expires_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasLureExpiresTimestampMs()
    {
        return $this->lure_expires_timestamp_ms !== null;
    }

    /**
     * Get 'lure_expires_timestamp_ms' value
     *
     * @return int
     */
    public function getLureExpiresTimestampMs()
    {
        return $this->lure_expires_timestamp_ms;
    }

    /**
     * Set 'lure_expires_timestamp_ms' value
     *
     * @param int $value
     */
    public function setLureExpiresTimestampMs($value = null)
    {
        $this->lure_expires_timestamp_ms = $value;
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
            'fort_id' => null,
            'unknown2' => null,
            'active_pokemon_id' => null,
            'lure_expires_timestamp_ms' => null
        ], $values);

        $message->setFortId($values['fort_id']);
        $message->setUnknown2($values['unknown2']);
        $message->setActivePokemonId($values['active_pokemon_id']);
        $message->setLureExpiresTimestampMs($values['lure_expires_timestamp_ms']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'FortLureInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'fort_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'unknown2',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'active_pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Enum.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'lure_expires_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
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

        if ($this->fort_id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->fort_id);
        }

        if ($this->unknown2 !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeDouble($stream, $this->unknown2);
        }

        if ($this->active_pokemon_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->active_pokemon_id->value());
        }

        if ($this->lure_expires_timestamp_ms !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->lure_expires_timestamp_ms);
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

                $this->fort_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->unknown2 = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->active_pokemon_id = \PkgClient\Protocol\Enum\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->lure_expires_timestamp_ms = $reader->readVarint($stream);

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

        if ($this->fort_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->fort_id);
        }

        if ($this->unknown2 !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->active_pokemon_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->active_pokemon_id->value());
        }

        if ($this->lure_expires_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->lure_expires_timestamp_ms);
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
        $this->fort_id = null;
        $this->unknown2 = null;
        $this->active_pokemon_id = null;
        $this->lure_expires_timestamp_ms = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\FortLureInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->fort_id = ($message->fort_id !== null) ? $message->fort_id : $this->fort_id;
        $this->unknown2 = ($message->unknown2 !== null) ? $message->unknown2 : $this->unknown2;
        $this->active_pokemon_id = ($message->active_pokemon_id !== null) ? $message->active_pokemon_id : $this->active_pokemon_id;
        $this->lure_expires_timestamp_ms = ($message->lure_expires_timestamp_ms !== null) ? $message->lure_expires_timestamp_ms : $this->lure_expires_timestamp_ms;
    }


}

