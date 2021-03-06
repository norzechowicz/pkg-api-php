<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.InventorySettings
 */
class InventorySettings extends \Protobuf\AbstractMessage
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
     * max_pokemon optional int32 = 1
     *
     * @var int
     */
    protected $max_pokemon = null;

    /**
     * max_bag_items optional int32 = 2
     *
     * @var int
     */
    protected $max_bag_items = null;

    /**
     * base_pokemon optional int32 = 3
     *
     * @var int
     */
    protected $base_pokemon = null;

    /**
     * base_bag_items optional int32 = 4
     *
     * @var int
     */
    protected $base_bag_items = null;

    /**
     * base_eggs optional int32 = 5
     *
     * @var int
     */
    protected $base_eggs = null;

    /**
     * Check if 'max_pokemon' has a value
     *
     * @return bool
     */
    public function hasMaxPokemon()
    {
        return $this->max_pokemon !== null;
    }

    /**
     * Get 'max_pokemon' value
     *
     * @return int
     */
    public function getMaxPokemon()
    {
        return $this->max_pokemon;
    }

    /**
     * Set 'max_pokemon' value
     *
     * @param int $value
     */
    public function setMaxPokemon($value = null)
    {
        $this->max_pokemon = $value;
    }

    /**
     * Check if 'max_bag_items' has a value
     *
     * @return bool
     */
    public function hasMaxBagItems()
    {
        return $this->max_bag_items !== null;
    }

    /**
     * Get 'max_bag_items' value
     *
     * @return int
     */
    public function getMaxBagItems()
    {
        return $this->max_bag_items;
    }

    /**
     * Set 'max_bag_items' value
     *
     * @param int $value
     */
    public function setMaxBagItems($value = null)
    {
        $this->max_bag_items = $value;
    }

    /**
     * Check if 'base_pokemon' has a value
     *
     * @return bool
     */
    public function hasBasePokemon()
    {
        return $this->base_pokemon !== null;
    }

    /**
     * Get 'base_pokemon' value
     *
     * @return int
     */
    public function getBasePokemon()
    {
        return $this->base_pokemon;
    }

    /**
     * Set 'base_pokemon' value
     *
     * @param int $value
     */
    public function setBasePokemon($value = null)
    {
        $this->base_pokemon = $value;
    }

    /**
     * Check if 'base_bag_items' has a value
     *
     * @return bool
     */
    public function hasBaseBagItems()
    {
        return $this->base_bag_items !== null;
    }

    /**
     * Get 'base_bag_items' value
     *
     * @return int
     */
    public function getBaseBagItems()
    {
        return $this->base_bag_items;
    }

    /**
     * Set 'base_bag_items' value
     *
     * @param int $value
     */
    public function setBaseBagItems($value = null)
    {
        $this->base_bag_items = $value;
    }

    /**
     * Check if 'base_eggs' has a value
     *
     * @return bool
     */
    public function hasBaseEggs()
    {
        return $this->base_eggs !== null;
    }

    /**
     * Get 'base_eggs' value
     *
     * @return int
     */
    public function getBaseEggs()
    {
        return $this->base_eggs;
    }

    /**
     * Set 'base_eggs' value
     *
     * @param int $value
     */
    public function setBaseEggs($value = null)
    {
        $this->base_eggs = $value;
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
            'max_pokemon' => null,
            'max_bag_items' => null,
            'base_pokemon' => null,
            'base_bag_items' => null,
            'base_eggs' => null
        ], $values);

        $message->setMaxPokemon($values['max_pokemon']);
        $message->setMaxBagItems($values['max_bag_items']);
        $message->setBasePokemon($values['base_pokemon']);
        $message->setBaseBagItems($values['base_bag_items']);
        $message->setBaseEggs($values['base_eggs']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InventorySettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'max_pokemon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'max_bag_items',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'base_pokemon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'base_bag_items',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'base_eggs',
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

        if ($this->max_pokemon !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->max_pokemon);
        }

        if ($this->max_bag_items !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->max_bag_items);
        }

        if ($this->base_pokemon !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->base_pokemon);
        }

        if ($this->base_bag_items !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->base_bag_items);
        }

        if ($this->base_eggs !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->base_eggs);
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

                $this->max_pokemon = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->max_bag_items = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->base_pokemon = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->base_bag_items = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->base_eggs = $reader->readVarint($stream);

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

        if ($this->max_pokemon !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->max_pokemon);
        }

        if ($this->max_bag_items !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->max_bag_items);
        }

        if ($this->base_pokemon !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->base_pokemon);
        }

        if ($this->base_bag_items !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->base_bag_items);
        }

        if ($this->base_eggs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->base_eggs);
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
        $this->max_pokemon = null;
        $this->max_bag_items = null;
        $this->base_pokemon = null;
        $this->base_bag_items = null;
        $this->base_eggs = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\InventorySettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->max_pokemon = ($message->max_pokemon !== null) ? $message->max_pokemon : $this->max_pokemon;
        $this->max_bag_items = ($message->max_bag_items !== null) ? $message->max_bag_items : $this->max_bag_items;
        $this->base_pokemon = ($message->base_pokemon !== null) ? $message->base_pokemon : $this->base_pokemon;
        $this->base_bag_items = ($message->base_bag_items !== null) ? $message->base_bag_items : $this->base_bag_items;
        $this->base_eggs = ($message->base_eggs !== null) ? $message->base_eggs : $this->base_eggs;
    }


}

