<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.PokedexEntry
 */
class PokedexEntry extends \Protobuf\AbstractMessage
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
     * pokedex_entry_number optional int32 = 1
     *
     * @var int
     */
    protected $pokedex_entry_number = null;

    /**
     * times_encountered optional int32 = 2
     *
     * @var int
     */
    protected $times_encountered = null;

    /**
     * times_captured optional int32 = 3
     *
     * @var int
     */
    protected $times_captured = null;

    /**
     * evolution_stone_pieces optional int32 = 4
     *
     * @var int
     */
    protected $evolution_stone_pieces = null;

    /**
     * evolution_stones optional int32 = 5
     *
     * @var int
     */
    protected $evolution_stones = null;

    /**
     * Check if 'pokedex_entry_number' has a value
     *
     * @return bool
     */
    public function hasPokedexEntryNumber()
    {
        return $this->pokedex_entry_number !== null;
    }

    /**
     * Get 'pokedex_entry_number' value
     *
     * @return int
     */
    public function getPokedexEntryNumber()
    {
        return $this->pokedex_entry_number;
    }

    /**
     * Set 'pokedex_entry_number' value
     *
     * @param int $value
     */
    public function setPokedexEntryNumber($value = null)
    {
        $this->pokedex_entry_number = $value;
    }

    /**
     * Check if 'times_encountered' has a value
     *
     * @return bool
     */
    public function hasTimesEncountered()
    {
        return $this->times_encountered !== null;
    }

    /**
     * Get 'times_encountered' value
     *
     * @return int
     */
    public function getTimesEncountered()
    {
        return $this->times_encountered;
    }

    /**
     * Set 'times_encountered' value
     *
     * @param int $value
     */
    public function setTimesEncountered($value = null)
    {
        $this->times_encountered = $value;
    }

    /**
     * Check if 'times_captured' has a value
     *
     * @return bool
     */
    public function hasTimesCaptured()
    {
        return $this->times_captured !== null;
    }

    /**
     * Get 'times_captured' value
     *
     * @return int
     */
    public function getTimesCaptured()
    {
        return $this->times_captured;
    }

    /**
     * Set 'times_captured' value
     *
     * @param int $value
     */
    public function setTimesCaptured($value = null)
    {
        $this->times_captured = $value;
    }

    /**
     * Check if 'evolution_stone_pieces' has a value
     *
     * @return bool
     */
    public function hasEvolutionStonePieces()
    {
        return $this->evolution_stone_pieces !== null;
    }

    /**
     * Get 'evolution_stone_pieces' value
     *
     * @return int
     */
    public function getEvolutionStonePieces()
    {
        return $this->evolution_stone_pieces;
    }

    /**
     * Set 'evolution_stone_pieces' value
     *
     * @param int $value
     */
    public function setEvolutionStonePieces($value = null)
    {
        $this->evolution_stone_pieces = $value;
    }

    /**
     * Check if 'evolution_stones' has a value
     *
     * @return bool
     */
    public function hasEvolutionStones()
    {
        return $this->evolution_stones !== null;
    }

    /**
     * Get 'evolution_stones' value
     *
     * @return int
     */
    public function getEvolutionStones()
    {
        return $this->evolution_stones;
    }

    /**
     * Set 'evolution_stones' value
     *
     * @param int $value
     */
    public function setEvolutionStones($value = null)
    {
        $this->evolution_stones = $value;
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
            'pokedex_entry_number' => null,
            'times_encountered' => null,
            'times_captured' => null,
            'evolution_stone_pieces' => null,
            'evolution_stones' => null
        ], $values);

        $message->setPokedexEntryNumber($values['pokedex_entry_number']);
        $message->setTimesEncountered($values['times_encountered']);
        $message->setTimesCaptured($values['times_captured']);
        $message->setEvolutionStonePieces($values['evolution_stone_pieces']);
        $message->setEvolutionStones($values['evolution_stones']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PokedexEntry',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokedex_entry_number',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'times_encountered',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'times_captured',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'evolution_stone_pieces',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'evolution_stones',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->pokedex_entry_number !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->pokedex_entry_number);
        }

        if ($this->times_encountered !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->times_encountered);
        }

        if ($this->times_captured !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->times_captured);
        }

        if ($this->evolution_stone_pieces !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->evolution_stone_pieces);
        }

        if ($this->evolution_stones !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->evolution_stones);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->pokedex_entry_number = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->times_encountered = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->times_captured = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->evolution_stone_pieces = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->evolution_stones = $reader->readVarint($stream);

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

        if ($this->pokedex_entry_number !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokedex_entry_number);
        }

        if ($this->times_encountered !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->times_encountered);
        }

        if ($this->times_captured !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->times_captured);
        }

        if ($this->evolution_stone_pieces !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->evolution_stone_pieces);
        }

        if ($this->evolution_stones !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->evolution_stones);
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
        $this->pokedex_entry_number = null;
        $this->times_encountered = null;
        $this->times_captured = null;
        $this->evolution_stone_pieces = null;
        $this->evolution_stones = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\PokedexEntry) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokedex_entry_number = ($message->pokedex_entry_number !== null) ? $message->pokedex_entry_number : $this->pokedex_entry_number;
        $this->times_encountered = ($message->times_encountered !== null) ? $message->times_encountered : $this->times_encountered;
        $this->times_captured = ($message->times_captured !== null) ? $message->times_captured : $this->times_captured;
        $this->evolution_stone_pieces = ($message->evolution_stone_pieces !== null) ? $message->evolution_stone_pieces : $this->evolution_stone_pieces;
        $this->evolution_stones = ($message->evolution_stones !== null) ? $message->evolution_stones : $this->evolution_stones;
    }


}

