<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.BadgeSettings
 */
class BadgeSettings extends \Protobuf\AbstractMessage
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
     * badge_type optional enum = 1
     *
     * @var \PkgClient\Protocol\Enum\BadgeType
     */
    protected $badge_type = null;

    /**
     * badge_rank optional int32 = 2
     *
     * @var int
     */
    protected $badge_rank = null;

    /**
     * targets repeated int32 = 3
     *
     * @var \Protobuf\Collection
     */
    protected $targets = null;

    /**
     * Check if 'badge_type' has a value
     *
     * @return bool
     */
    public function hasBadgeType()
    {
        return $this->badge_type !== null;
    }

    /**
     * Get 'badge_type' value
     *
     * @return \PkgClient\Protocol\Enum\BadgeType
     */
    public function getBadgeType()
    {
        return $this->badge_type;
    }

    /**
     * Set 'badge_type' value
     *
     * @param \PkgClient\Protocol\Enum\BadgeType $value
     */
    public function setBadgeType(\PkgClient\Protocol\Enum\BadgeType $value = null)
    {
        $this->badge_type = $value;
    }

    /**
     * Check if 'badge_rank' has a value
     *
     * @return bool
     */
    public function hasBadgeRank()
    {
        return $this->badge_rank !== null;
    }

    /**
     * Get 'badge_rank' value
     *
     * @return int
     */
    public function getBadgeRank()
    {
        return $this->badge_rank;
    }

    /**
     * Set 'badge_rank' value
     *
     * @param int $value
     */
    public function setBadgeRank($value = null)
    {
        $this->badge_rank = $value;
    }

    /**
     * Check if 'targets' has a value
     *
     * @return bool
     */
    public function hasTargetsList()
    {
        return $this->targets !== null;
    }

    /**
     * Get 'targets' value
     *
     * @return \Protobuf\Collection
     */
    public function getTargetsList()
    {
        return $this->targets;
    }

    /**
     * Set 'targets' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setTargetsList(\Protobuf\Collection $value = null)
    {
        $this->targets = $value;
    }

    /**
     * Add a new element to 'targets'
     *
     * @param int $value
     */
    public function addTargets($value)
    {
        if ($this->targets === null) {
            $this->targets = new \Protobuf\ScalarCollection();
        }

        $this->targets->add($value);
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
            'badge_type' => null,
            'badge_rank' => null,
            'targets' => []
        ], $values);

        $message->setBadgeType($values['badge_type']);
        $message->setBadgeRank($values['badge_rank']);

        foreach ($values['targets'] as $item) {
            $message->addTargets($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BadgeSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'badge_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Enum.BadgeType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'badge_rank',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'targets',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->badge_type !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->badge_type->value());
        }

        if ($this->badge_rank !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->badge_rank);
        }

        if ($this->targets !== null) {
            foreach ($this->targets as $val) {
                $writer->writeVarint($stream, 24);
                $writer->writeVarint($stream, $val);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->badge_type = \PkgClient\Protocol\Enum\BadgeType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->badge_rank = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                if ($this->targets === null) {
                    $this->targets = new \Protobuf\ScalarCollection();
                }

                $this->targets->add($reader->readVarint($stream));

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

        if ($this->badge_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->badge_type->value());
        }

        if ($this->badge_rank !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->badge_rank);
        }

        if ($this->targets !== null) {
            foreach ($this->targets as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
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
        $this->badge_type = null;
        $this->badge_rank = null;
        $this->targets = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\BadgeSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->badge_type = ($message->badge_type !== null) ? $message->badge_type : $this->badge_type;
        $this->badge_rank = ($message->badge_rank !== null) ? $message->badge_rank : $this->badge_rank;
        $this->targets = ($message->targets !== null) ? $message->targets : $this->targets;
    }


}

