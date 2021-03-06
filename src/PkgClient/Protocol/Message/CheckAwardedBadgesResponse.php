<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.CheckAwardedBadgesResponse
 */
class CheckAwardedBadgesResponse extends \Protobuf\AbstractMessage
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
     * success optional bool = 1
     *
     * @var bool
     */
    protected $success = null;

    /**
     * awarded_badges repeated enum = 2
     *
     * @var \Protobuf\Collection<\PkgClient\Protocol\Enum\BadgeType>
     */
    protected $awarded_badges = null;

    /**
     * awarded_badge_levels repeated int32 = 3
     *
     * @var \Protobuf\Collection
     */
    protected $awarded_badge_levels = null;

    /**
     * Check if 'success' has a value
     *
     * @return bool
     */
    public function hasSuccess()
    {
        return $this->success !== null;
    }

    /**
     * Get 'success' value
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set 'success' value
     *
     * @param bool $value
     */
    public function setSuccess($value = null)
    {
        $this->success = $value;
    }

    /**
     * Check if 'awarded_badges' has a value
     *
     * @return bool
     */
    public function hasAwardedBadgesList()
    {
        return $this->awarded_badges !== null;
    }

    /**
     * Get 'awarded_badges' value
     *
     * @return \Protobuf\Collection<\PkgClient\Protocol\Enum\BadgeType>
     */
    public function getAwardedBadgesList()
    {
        return $this->awarded_badges;
    }

    /**
     * Set 'awarded_badges' value
     *
     * @param \Protobuf\Collection<\PkgClient\Protocol\Enum\BadgeType> $value
     */
    public function setAwardedBadgesList(\Protobuf\Collection $value = null)
    {
        $this->awarded_badges = $value;
    }

    /**
     * Add a new element to 'awarded_badges'
     *
     * @param \PkgClient\Protocol\Enum\BadgeType $value
     */
    public function addAwardedBadges(\PkgClient\Protocol\Enum\BadgeType $value)
    {
        if ($this->awarded_badges === null) {
            $this->awarded_badges = new \Protobuf\EnumCollection();
        }

        $this->awarded_badges->add($value);
    }

    /**
     * Check if 'awarded_badge_levels' has a value
     *
     * @return bool
     */
    public function hasAwardedBadgeLevelsList()
    {
        return $this->awarded_badge_levels !== null;
    }

    /**
     * Get 'awarded_badge_levels' value
     *
     * @return \Protobuf\Collection
     */
    public function getAwardedBadgeLevelsList()
    {
        return $this->awarded_badge_levels;
    }

    /**
     * Set 'awarded_badge_levels' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAwardedBadgeLevelsList(\Protobuf\Collection $value = null)
    {
        $this->awarded_badge_levels = $value;
    }

    /**
     * Add a new element to 'awarded_badge_levels'
     *
     * @param int $value
     */
    public function addAwardedBadgeLevels($value)
    {
        if ($this->awarded_badge_levels === null) {
            $this->awarded_badge_levels = new \Protobuf\ScalarCollection();
        }

        $this->awarded_badge_levels->add($value);
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
            'success' => null,
            'awarded_badges' => [],
            'awarded_badge_levels' => []
        ], $values);

        $message->setSuccess($values['success']);

        foreach ($values['awarded_badges'] as $item) {
            $message->addAwardedBadges($item);
        }

        foreach ($values['awarded_badge_levels'] as $item) {
            $message->addAwardedBadgeLevels($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CheckAwardedBadgesResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'success',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'awarded_badges',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.PkgClient.Protocol.Enum.BadgeType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'awarded_badge_levels',
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

        if ($this->success !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->success);
        }

        if ($this->awarded_badges !== null) {
            foreach ($this->awarded_badges as $val) {
                $writer->writeVarint($stream, 16);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->awarded_badge_levels !== null) {
            foreach ($this->awarded_badge_levels as $val) {
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->success = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                if ($this->awarded_badges === null) {
                    $this->awarded_badges = new \Protobuf\EnumCollection();
                }

                $this->awarded_badges->add(\PkgClient\Protocol\Enum\BadgeType::valueOf($reader->readVarint($stream)));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                if ($this->awarded_badge_levels === null) {
                    $this->awarded_badge_levels = new \Protobuf\ScalarCollection();
                }

                $this->awarded_badge_levels->add($reader->readVarint($stream));

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

        if ($this->success !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->awarded_badges !== null) {
            foreach ($this->awarded_badges as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->awarded_badge_levels !== null) {
            foreach ($this->awarded_badge_levels as $val) {
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
        $this->success = null;
        $this->awarded_badges = null;
        $this->awarded_badge_levels = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\CheckAwardedBadgesResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->success = ($message->success !== null) ? $message->success : $this->success;
        $this->awarded_badges = ($message->awarded_badges !== null) ? $message->awarded_badges : $this->awarded_badges;
        $this->awarded_badge_levels = ($message->awarded_badge_levels !== null) ? $message->awarded_badge_levels : $this->awarded_badge_levels;
    }


}

