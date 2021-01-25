<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [UpdateInstance][google.cloud.redis.v1beta1.CloudRedis.UpdateInstance].
 *
 * Generated from protobuf message <code>google.cloud.redis.v1beta1.UpdateInstanceRequest</code>
 */
class UpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [Instance][google.cloud.redis.v1beta1.Instance]:
     *  *   `displayName`
     *  *   `labels`
     *  *   `memorySizeGb`
     *  *   `redisConfig`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. Update description.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1beta1.Instance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field. The elements of the repeated paths field may only include these
     *           fields from [Instance][google.cloud.redis.v1beta1.Instance]:
     *            *   `displayName`
     *            *   `labels`
     *            *   `memorySizeGb`
     *            *   `redisConfig`
     *     @type \Google\Cloud\Redis\V1beta1\Instance $instance
     *           Required. Update description.
     *           Only fields specified in update_mask are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1Beta1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [Instance][google.cloud.redis.v1beta1.Instance]:
     *  *   `displayName`
     *  *   `labels`
     *  *   `memorySizeGb`
     *  *   `redisConfig`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [Instance][google.cloud.redis.v1beta1.Instance]:
     *  *   `displayName`
     *  *   `labels`
     *  *   `memorySizeGb`
     *  *   `redisConfig`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. Update description.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1beta1.Instance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Redis\V1beta1\Instance
     */
    public function getInstance()
    {
        return isset($this->instance) ? $this->instance : null;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. Update description.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1beta1.Instance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Redis\V1beta1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\V1beta1\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

