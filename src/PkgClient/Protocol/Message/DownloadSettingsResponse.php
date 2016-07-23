<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Message.proto
 */


namespace PkgClient\Protocol\Message;

/**
 * Protobuf message : PkgClient.Protocol.Message.DownloadSettingsResponse
 */
class DownloadSettingsResponse extends \Protobuf\AbstractMessage
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
     * error optional string = 1
     *
     * @var string
     */
    protected $error = null;

    /**
     * hash optional string = 2
     *
     * @var string
     */
    protected $hash = null;

    /**
     * settings optional message = 3
     *
     * @var \PkgClient\Protocol\Message\GlobalSettings
     */
    protected $settings = null;

    /**
     * Check if 'error' has a value
     *
     * @return bool
     */
    public function hasError()
    {
        return $this->error !== null;
    }

    /**
     * Get 'error' value
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set 'error' value
     *
     * @param string $value
     */
    public function setError($value = null)
    {
        $this->error = $value;
    }

    /**
     * Check if 'hash' has a value
     *
     * @return bool
     */
    public function hasHash()
    {
        return $this->hash !== null;
    }

    /**
     * Get 'hash' value
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set 'hash' value
     *
     * @param string $value
     */
    public function setHash($value = null)
    {
        $this->hash = $value;
    }

    /**
     * Check if 'settings' has a value
     *
     * @return bool
     */
    public function hasSettings()
    {
        return $this->settings !== null;
    }

    /**
     * Get 'settings' value
     *
     * @return \PkgClient\Protocol\Message\GlobalSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set 'settings' value
     *
     * @param \PkgClient\Protocol\Message\GlobalSettings $value
     */
    public function setSettings(\PkgClient\Protocol\Message\GlobalSettings $value = null)
    {
        $this->settings = $value;
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
            'error' => null,
            'hash' => null,
            'settings' => null
        ], $values);

        $message->setError($values['error']);
        $message->setHash($values['hash']);
        $message->setSettings($values['settings']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DownloadSettingsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'error',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'hash',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'settings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.PkgClient.Protocol.Message.GlobalSettings'
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

        if ($this->error !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->error);
        }

        if ($this->hash !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->hash);
        }

        if ($this->settings !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->settings->serializedSize($sizeContext));
            $this->settings->writeTo($context);
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

                $this->error = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->hash = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \PkgClient\Protocol\Message\GlobalSettings();

                $this->settings = $innerMessage;

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

        if ($this->error !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->error);
        }

        if ($this->hash !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->hash);
        }

        if ($this->settings !== null) {
            $innerSize = $this->settings->serializedSize($context);

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
        $this->error = null;
        $this->hash = null;
        $this->settings = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \PkgClient\Protocol\Message\DownloadSettingsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->error = ($message->error !== null) ? $message->error : $this->error;
        $this->hash = ($message->hash !== null) ? $message->hash : $this->hash;
        $this->settings = ($message->settings !== null) ? $message->settings : $this->settings;
    }


}

