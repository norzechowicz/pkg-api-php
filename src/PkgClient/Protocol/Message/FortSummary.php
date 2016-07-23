<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.FortSummary
 */
class FortSummary extends \Protobuf\AbstractMessage
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
     * fort_summary_id optional int32 = 1
     *
     * @var int
     */
    protected $fort_summary_id = null;

    /**
     * last_modified_timestamp_ms optional int32 = 2
     *
     * @var int
     */
    protected $last_modified_timestamp_ms = null;

    /**
     * latitude optional int32 = 3
     *
     * @var int
     */
    protected $latitude = null;

    /**
     * longitude optional int32 = 4
     *
     * @var int
     */
    protected $longitude = null;

    /**
     * Check if 'fort_summary_id' has a value
     *
     * @return bool
     */
    public function hasFortSummaryId()
    {
        return $this->fort_summary_id !== null;
    }

    /**
     * Get 'fort_summary_id' value
     *
     * @return int
     */
    public function getFortSummaryId()
    {
        return $this->fort_summary_id;
    }

    /**
     * Set 'fort_summary_id' value
     *
     * @param int $value
     */
    public function setFortSummaryId($value = null)
    {
        $this->fort_summary_id = $value;
    }

    /**
     * Check if 'last_modified_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasLastModifiedTimestampMs()
    {
        return $this->last_modified_timestamp_ms !== null;
    }

    /**
     * Get 'last_modified_timestamp_ms' value
     *
     * @return int
     */
    public function getLastModifiedTimestampMs()
    {
        return $this->last_modified_timestamp_ms;
    }

    /**
     * Set 'last_modified_timestamp_ms' value
     *
     * @param int $value
     */
    public function setLastModifiedTimestampMs($value = null)
    {
        $this->last_modified_timestamp_ms = $value;
    }

    /**
     * Check if 'latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->latitude !== null;
    }

    /**
     * Get 'latitude' value
     *
     * @return int
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set 'latitude' value
     *
     * @param int $value
     */
    public function setLatitude($value = null)
    {
        $this->latitude = $value;
    }

    /**
     * Check if 'longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->longitude !== null;
    }

    /**
     * Get 'longitude' value
     *
     * @return int
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set 'longitude' value
     *
     * @param int $value
     */
    public function setLongitude($value = null)
    {
        $this->longitude = $value;
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
            'fort_summary_id' => null,
            'last_modified_timestamp_ms' => null,
            'latitude' => null,
            'longitude' => null
        ], $values);

        $message->setFortSummaryId($values['fort_summary_id']);
        $message->setLastModifiedTimestampMs($values['last_modified_timestamp_ms']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'FortSummary',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'fort_summary_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'last_modified_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'longitude',
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

        if ($this->fort_summary_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->fort_summary_id);
        }

        if ($this->last_modified_timestamp_ms !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->last_modified_timestamp_ms);
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->longitude);
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

                $this->fort_summary_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->last_modified_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->latitude = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->longitude = $reader->readVarint($stream);

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

        if ($this->fort_summary_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->fort_summary_id);
        }

        if ($this->last_modified_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_modified_timestamp_ms);
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->latitude);
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->longitude);
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
        $this->fort_summary_id = null;
        $this->last_modified_timestamp_ms = null;
        $this->latitude = null;
        $this->longitude = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\FortSummary) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->fort_summary_id = ($message->fort_summary_id !== null) ? $message->fort_summary_id : $this->fort_summary_id;
        $this->last_modified_timestamp_ms = ($message->last_modified_timestamp_ms !== null) ? $message->last_modified_timestamp_ms : $this->last_modified_timestamp_ms;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
    }


}

