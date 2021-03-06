<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.InventoryDelta
 */
class InventoryDelta extends \Protobuf\AbstractMessage
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
     * original_timestamp_ms optional int64 = 1
     *
     * @var int
     */
    protected $original_timestamp_ms = null;

    /**
     * new_timestamp_ms optional int64 = 2
     *
     * @var int
     */
    protected $new_timestamp_ms = null;

    /**
     * inventory_items repeated message = 3
     *
     * @var \Protobuf\Collection<\PkgClient\Protocol\Message\InventoryItem>
     */
    protected $inventory_items = null;

    /**
     * Check if 'original_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasOriginalTimestampMs()
    {
        return $this->original_timestamp_ms !== null;
    }

    /**
     * Get 'original_timestamp_ms' value
     *
     * @return int
     */
    public function getOriginalTimestampMs()
    {
        return $this->original_timestamp_ms;
    }

    /**
     * Set 'original_timestamp_ms' value
     *
     * @param int $value
     */
    public function setOriginalTimestampMs($value = null)
    {
        $this->original_timestamp_ms = $value;
    }

    /**
     * Check if 'new_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasNewTimestampMs()
    {
        return $this->new_timestamp_ms !== null;
    }

    /**
     * Get 'new_timestamp_ms' value
     *
     * @return int
     */
    public function getNewTimestampMs()
    {
        return $this->new_timestamp_ms;
    }

    /**
     * Set 'new_timestamp_ms' value
     *
     * @param int $value
     */
    public function setNewTimestampMs($value = null)
    {
        $this->new_timestamp_ms = $value;
    }

    /**
     * Check if 'inventory_items' has a value
     *
     * @return bool
     */
    public function hasInventoryItemsList()
    {
        return $this->inventory_items !== null;
    }

    /**
     * Get 'inventory_items' value
     *
     * @return \Protobuf\Collection<\PkgClient\Protocol\Message\InventoryItem>
     */
    public function getInventoryItemsList()
    {
        return $this->inventory_items;
    }

    /**
     * Set 'inventory_items' value
     *
     * @param \Protobuf\Collection<\PkgClient\Protocol\Message\InventoryItem> $value
     */
    public function setInventoryItemsList(\Protobuf\Collection $value = null)
    {
        $this->inventory_items = $value;
    }

    /**
     * Add a new element to 'inventory_items'
     *
     * @param \PkgClient\Protocol\Message\InventoryItem $value
     */
    public function addInventoryItems(\PkgClient\Protocol\Message\InventoryItem $value)
    {
        if ($this->inventory_items === null) {
            $this->inventory_items = new \Protobuf\MessageCollection();
        }

        $this->inventory_items->add($value);
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
            'original_timestamp_ms' => null,
            'new_timestamp_ms' => null,
            'inventory_items' => []
        ], $values);

        $message->setOriginalTimestampMs($values['original_timestamp_ms']);
        $message->setNewTimestampMs($values['new_timestamp_ms']);

        foreach ($values['inventory_items'] as $item) {
            $message->addInventoryItems($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InventoryDelta',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'original_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'new_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'inventory_items',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.PkgClient.Protocol.Message.InventoryItem'
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

        if ($this->original_timestamp_ms !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->original_timestamp_ms);
        }

        if ($this->new_timestamp_ms !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->new_timestamp_ms);
        }

        if ($this->inventory_items !== null) {
            foreach ($this->inventory_items as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->original_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->new_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \PkgClient\Protocol\Message\InventoryItem();

                if ($this->inventory_items === null) {
                    $this->inventory_items = new \Protobuf\MessageCollection();
                }

                $this->inventory_items->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->original_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->original_timestamp_ms);
        }

        if ($this->new_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->new_timestamp_ms);
        }

        if ($this->inventory_items !== null) {
            foreach ($this->inventory_items as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->original_timestamp_ms = null;
        $this->new_timestamp_ms = null;
        $this->inventory_items = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\InventoryDelta) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->original_timestamp_ms = ($message->original_timestamp_ms !== null) ? $message->original_timestamp_ms : $this->original_timestamp_ms;
        $this->new_timestamp_ms = ($message->new_timestamp_ms !== null) ? $message->new_timestamp_ms : $this->new_timestamp_ms;
        $this->inventory_items = ($message->inventory_items !== null) ? $message->inventory_items : $this->inventory_items;
    }


}

