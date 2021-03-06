<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.GlobalSettings
 */
class GlobalSettings extends \Protobuf\AbstractMessage
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
     * fort_settings optional message = 2
     *
     * @var \PkgClient\Protocol\Message\FortSettings
     */
    protected $fort_settings = null;

    /**
     * map_settings optional message = 3
     *
     * @var \PkgClient\Protocol\Message\MapSettings
     */
    protected $map_settings = null;

    /**
     * level_settings optional message = 4
     *
     * @var \PkgClient\Protocol\Message\LevelSettings
     */
    protected $level_settings = null;

    /**
     * inventory_settings optional message = 5
     *
     * @var \PkgClient\Protocol\Message\InventorySettings
     */
    protected $inventory_settings = null;

    /**
     * minimum_client_version optional string = 6
     *
     * @var string
     */
    protected $minimum_client_version = null;

    /**
     * Check if 'fort_settings' has a value
     *
     * @return bool
     */
    public function hasFortSettings()
    {
        return $this->fort_settings !== null;
    }

    /**
     * Get 'fort_settings' value
     *
     * @return \PkgClient\Protocol\Message\FortSettings
     */
    public function getFortSettings()
    {
        return $this->fort_settings;
    }

    /**
     * Set 'fort_settings' value
     *
     * @param \PkgClient\Protocol\Message\FortSettings $value
     */
    public function setFortSettings(\PkgClient\Protocol\Message\FortSettings $value = null)
    {
        $this->fort_settings = $value;
    }

    /**
     * Check if 'map_settings' has a value
     *
     * @return bool
     */
    public function hasMapSettings()
    {
        return $this->map_settings !== null;
    }

    /**
     * Get 'map_settings' value
     *
     * @return \PkgClient\Protocol\Message\MapSettings
     */
    public function getMapSettings()
    {
        return $this->map_settings;
    }

    /**
     * Set 'map_settings' value
     *
     * @param \PkgClient\Protocol\Message\MapSettings $value
     */
    public function setMapSettings(\PkgClient\Protocol\Message\MapSettings $value = null)
    {
        $this->map_settings = $value;
    }

    /**
     * Check if 'level_settings' has a value
     *
     * @return bool
     */
    public function hasLevelSettings()
    {
        return $this->level_settings !== null;
    }

    /**
     * Get 'level_settings' value
     *
     * @return \PkgClient\Protocol\Message\LevelSettings
     */
    public function getLevelSettings()
    {
        return $this->level_settings;
    }

    /**
     * Set 'level_settings' value
     *
     * @param \PkgClient\Protocol\Message\LevelSettings $value
     */
    public function setLevelSettings(\PkgClient\Protocol\Message\LevelSettings $value = null)
    {
        $this->level_settings = $value;
    }

    /**
     * Check if 'inventory_settings' has a value
     *
     * @return bool
     */
    public function hasInventorySettings()
    {
        return $this->inventory_settings !== null;
    }

    /**
     * Get 'inventory_settings' value
     *
     * @return \PkgClient\Protocol\Message\InventorySettings
     */
    public function getInventorySettings()
    {
        return $this->inventory_settings;
    }

    /**
     * Set 'inventory_settings' value
     *
     * @param \PkgClient\Protocol\Message\InventorySettings $value
     */
    public function setInventorySettings(\PkgClient\Protocol\Message\InventorySettings $value = null)
    {
        $this->inventory_settings = $value;
    }

    /**
     * Check if 'minimum_client_version' has a value
     *
     * @return bool
     */
    public function hasMinimumClientVersion()
    {
        return $this->minimum_client_version !== null;
    }

    /**
     * Get 'minimum_client_version' value
     *
     * @return string
     */
    public function getMinimumClientVersion()
    {
        return $this->minimum_client_version;
    }

    /**
     * Set 'minimum_client_version' value
     *
     * @param string $value
     */
    public function setMinimumClientVersion($value = null)
    {
        $this->minimum_client_version = $value;
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
            'fort_settings' => null,
            'map_settings' => null,
            'level_settings' => null,
            'inventory_settings' => null,
            'minimum_client_version' => null
        ], $values);

        $message->setFortSettings($values['fort_settings']);
        $message->setMapSettings($values['map_settings']);
        $message->setLevelSettings($values['level_settings']);
        $message->setInventorySettings($values['inventory_settings']);
        $message->setMinimumClientVersion($values['minimum_client_version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GlobalSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'fort_settings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Message.FortSettings'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'map_settings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Message.MapSettings'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'level_settings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Message.LevelSettings'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'inventory_settings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Message.InventorySettings'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'minimum_client_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->fort_settings !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->fort_settings->serializedSize($sizeContext));
            $this->fort_settings->writeTo($context);
        }

        if ($this->map_settings !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->map_settings->serializedSize($sizeContext));
            $this->map_settings->writeTo($context);
        }

        if ($this->level_settings !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->level_settings->serializedSize($sizeContext));
            $this->level_settings->writeTo($context);
        }

        if ($this->inventory_settings !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->inventory_settings->serializedSize($sizeContext));
            $this->inventory_settings->writeTo($context);
        }

        if ($this->minimum_client_version !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->minimum_client_version);
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

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \PkgClient\Protocol\Message\FortSettings();

                $this->fort_settings = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \PkgClient\Protocol\Message\MapSettings();

                $this->map_settings = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \PkgClient\Protocol\Message\LevelSettings();

                $this->level_settings = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \PkgClient\Protocol\Message\InventorySettings();

                $this->inventory_settings = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->minimum_client_version = $reader->readString($stream);

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

        if ($this->fort_settings !== null) {
            $innerSize = $this->fort_settings->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->map_settings !== null) {
            $innerSize = $this->map_settings->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->level_settings !== null) {
            $innerSize = $this->level_settings->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->inventory_settings !== null) {
            $innerSize = $this->inventory_settings->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->minimum_client_version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->minimum_client_version);
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
        $this->fort_settings = null;
        $this->map_settings = null;
        $this->level_settings = null;
        $this->inventory_settings = null;
        $this->minimum_client_version = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\GlobalSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->fort_settings = ($message->fort_settings !== null) ? $message->fort_settings : $this->fort_settings;
        $this->map_settings = ($message->map_settings !== null) ? $message->map_settings : $this->map_settings;
        $this->level_settings = ($message->level_settings !== null) ? $message->level_settings : $this->level_settings;
        $this->inventory_settings = ($message->inventory_settings !== null) ? $message->inventory_settings : $this->inventory_settings;
        $this->minimum_client_version = ($message->minimum_client_version !== null) ? $message->minimum_client_version : $this->minimum_client_version;
    }


}

