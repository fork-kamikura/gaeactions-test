<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\TransformationErrorHandling;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Throw an error and fail the request when a transformation error occurs.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.TransformationErrorHandling.ThrowError</code>
 */
class ThrowError extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThrowError::class, \Google\Cloud\Dlp\V2\TransformationErrorHandling_ThrowError::class);
