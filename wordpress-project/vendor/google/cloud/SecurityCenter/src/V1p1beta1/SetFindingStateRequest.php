<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a finding's state.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.SetFindingStateRequest</code>
 */
class SetFindingStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the finding. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/sources/{source_id}/finding/{finding_id}".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The desired State of the finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.Finding.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $state = 0;
    /**
     * Required. The time at which the updated state takes effect.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The relative resource name of the finding. See:
     *           https://cloud.google.com/apis/design/resource_names#relative_resource_name
     *           Example:
     *           "organizations/{organization_id}/sources/{source_id}/finding/{finding_id}".
     *     @type int $state
     *           Required. The desired State of the finding.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Required. The time at which the updated state takes effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the finding. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/sources/{source_id}/finding/{finding_id}".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The relative resource name of the finding. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/sources/{source_id}/finding/{finding_id}".
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
     * Required. The desired State of the finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.Finding.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Required. The desired State of the finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.Finding.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1p1beta1\Finding\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. The time at which the updated state takes effect.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Required. The time at which the updated state takes effect.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

}

