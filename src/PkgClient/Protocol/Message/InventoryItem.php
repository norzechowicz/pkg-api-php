<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.InventoryItem
 */
class InventoryItem extends \Protobuf\AbstractMessage
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
     * modified_timestamp_ms optional int64 = 1
     *
     * @var int
     */
    protected $modified_timestamp_ms = null;

    /**
     * deleted_item_key optional int64 = 2
     *
     * @var int
     */
    protected $deleted_item_key = null;

    /**
     * inventory_item_data optional message = 3
     *
     * @var \PkgClient\Protocol\Message\InventoryItemData
     */
    protected $inventory_item_data = null;

    /**
     * Check if 'modified_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasModifiedTimestampMs()
    {
        return $this->modified_timestamp_ms !== null;
    }

    /**
     * Get 'modified_timestamp_ms' value
     *
     * @return int
     */
    public function getModifiedTimestampMs()
    {
        return $this->modified_timestamp_ms;
    }

    /**
     * Set 'modified_timestamp_ms' value
     *
     * @param int $value
     */
    public function setModifiedTimestampMs($value = null)
    {
        $this->modified_timestamp_ms = $value;
    }

    /**
     * Check if 'deleted_item_key' has a value
     *
     * @return bool
     */
    public function hasDeletedItemKey()
    {
        return $this->deleted_item_key !== null;
    }

    /**
     * Get 'deleted_item_key' value
     *
     * @return int
     */
    public function getDeletedItemKey()
    {
        return $this->deleted_item_key;
    }

    /**
     * Set 'deleted_item_key' value
     *
     * @param int $value
     */
    public function setDeletedItemKey($value = null)
    {
        $this->deleted_item_key = $value;
    }

    /**
     * Check if 'inventory_item_data' has a value
     *
     * @return bool
     */
    public function hasInventoryItemData()
    {
        return $this->inventory_item_data !== null;
    }

    /**
     * Get 'inventory_item_data' value
     *
     * @return \PkgClient\Protocol\Message\InventoryItemData
     */
    public function getInventoryItemData()
    {
        return $this->inventory_item_data;
    }

    /**
     * Set 'inventory_item_data' value
     *
     * @param \PkgClient\Protocol\Message\InventoryItemData $value
     */
    public function setInventoryItemData(\PkgClient\Protocol\Message\InventoryItemData $value = null)
    {
        $this->inventory_item_data = $value;
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
            'modified_timestamp_ms' => null,
            'deleted_item_key' => null,
            'inventory_item_data' => null
        ], $values);

        $message->setModifiedTimestampMs($values['modified_timestamp_ms']);
        $message->setDeletedItemKey($values['deleted_item_key']);
        $message->setInventoryItemData($values['inventory_item_data']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InventoryItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'modified_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'deleted_item_key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'inventory_item_data',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Message.InventoryItemData'
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

        if ($this->modified_timestamp_ms !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->modified_timestamp_ms);
        }

        if ($this->deleted_item_key !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->deleted_item_key);
        }

        if ($this->inventory_item_data !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->inventory_item_data->serializedSize($sizeContext));
            $this->inventory_item_data->writeTo($context);
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

                $this->modified_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->deleted_item_key = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \PkgClient\Protocol\Message\InventoryItemData();

                $this->inventory_item_data = $innerMessage;

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

        if ($this->modified_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->modified_timestamp_ms);
        }

        if ($this->deleted_item_key !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->deleted_item_key);
        }

        if ($this->inventory_item_data !== null) {
            $innerSize = $this->inventory_item_data->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->modified_timestamp_ms = null;
        $this->deleted_item_key = null;
        $this->inventory_item_data = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\InventoryItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->modified_timestamp_ms = ($message->modified_timestamp_ms !== null) ? $message->modified_timestamp_ms : $this->modified_timestamp_ms;
        $this->deleted_item_key = ($message->deleted_item_key !== null) ? $message->deleted_item_key : $this->deleted_item_key;
        $this->inventory_item_data = ($message->inventory_item_data !== null) ? $message->inventory_item_data : $this->inventory_item_data;
    }


}

