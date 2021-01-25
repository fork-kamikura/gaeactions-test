<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for `GetDevice`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.GetDeviceRequest</code>
 */
class GetDeviceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The fields of the `Device` resource to be returned in the response. If the
     * field mask is unset or empty, all fields are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     */
    private $field_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the device. For example,
     *           `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     *           `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           The fields of the `Device` resource to be returned in the response. If the
     *           field mask is unset or empty, all fields are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The fields of the `Device` resource to be returned in the response. If the
     * field mask is unset or empty, all fields are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getFieldMask()
    {
        return isset($this->field_mask) ? $this->field_mask : null;
    }

    public function hasFieldMask()
    {
        return isset($this->field_mask);
    }

    public function clearFieldMask()
    {
        unset($this->field_mask);
    }

    /**
     * The fields of the `Device` resource to be returned in the response. If the
     * field mask is unset or empty, all fields are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

}

