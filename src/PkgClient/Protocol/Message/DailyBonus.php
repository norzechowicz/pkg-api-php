<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.DailyBonus
 */
class DailyBonus extends \Protobuf\AbstractMessage
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
     * NextCollectTimestampMs optional int64 = 1
     *
     * @var int
     */
    protected $NextCollectTimestampMs = null;

    /**
     * NextDefenderBonusCollectTimestampMs optional int64 = 2
     *
     * @var int
     */
    protected $NextDefenderBonusCollectTimestampMs = null;

    /**
     * Check if 'NextCollectTimestampMs' has a value
     *
     * @return bool
     */
    public function hasNextCollectTimestampMs()
    {
        return $this->NextCollectTimestampMs !== null;
    }

    /**
     * Get 'NextCollectTimestampMs' value
     *
     * @return int
     */
    public function getNextCollectTimestampMs()
    {
        return $this->NextCollectTimestampMs;
    }

    /**
     * Set 'NextCollectTimestampMs' value
     *
     * @param int $value
     */
    public function setNextCollectTimestampMs($value = null)
    {
        $this->NextCollectTimestampMs = $value;
    }

    /**
     * Check if 'NextDefenderBonusCollectTimestampMs' has a value
     *
     * @return bool
     */
    public function hasNextDefenderBonusCollectTimestampMs()
    {
        return $this->NextDefenderBonusCollectTimestampMs !== null;
    }

    /**
     * Get 'NextDefenderBonusCollectTimestampMs' value
     *
     * @return int
     */
    public function getNextDefenderBonusCollectTimestampMs()
    {
        return $this->NextDefenderBonusCollectTimestampMs;
    }

    /**
     * Set 'NextDefenderBonusCollectTimestampMs' value
     *
     * @param int $value
     */
    public function setNextDefenderBonusCollectTimestampMs($value = null)
    {
        $this->NextDefenderBonusCollectTimestampMs = $value;
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
            'NextCollectTimestampMs' => null,
            'NextDefenderBonusCollectTimestampMs' => null
        ], $values);

        $message->setNextCollectTimestampMs($values['NextCollectTimestampMs']);
        $message->setNextDefenderBonusCollectTimestampMs($values['NextDefenderBonusCollectTimestampMs']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DailyBonus',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'NextCollectTimestampMs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'NextDefenderBonusCollectTimestampMs',
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

        if ($this->NextCollectTimestampMs !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->NextCollectTimestampMs);
        }

        if ($this->NextDefenderBonusCollectTimestampMs !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->NextDefenderBonusCollectTimestampMs);
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

                $this->NextCollectTimestampMs = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->NextDefenderBonusCollectTimestampMs = $reader->readVarint($stream);

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

        if ($this->NextCollectTimestampMs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->NextCollectTimestampMs);
        }

        if ($this->NextDefenderBonusCollectTimestampMs !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->NextDefenderBonusCollectTimestampMs);
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
        $this->NextCollectTimestampMs = null;
        $this->NextDefenderBonusCollectTimestampMs = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\DailyBonus) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->NextCollectTimestampMs = ($message->NextCollectTimestampMs !== null) ? $message->NextCollectTimestampMs : $this->NextCollectTimestampMs;
        $this->NextDefenderBonusCollectTimestampMs = ($message->NextDefenderBonusCollectTimestampMs !== null) ? $message->NextDefenderBonusCollectTimestampMs : $this->NextDefenderBonusCollectTimestampMs;
    }


}

