<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/tenant_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Request of the CreateTenant method.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CreateTenantRequest</code>
 */
class CreateTenantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the project under which the tenant is created.
     * The format is "projects/{project_id}", for example,
     * "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The tenant to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Tenant tenant = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tenant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the project under which the tenant is created.
     *           The format is "projects/{project_id}", for example,
     *           "projects/foo".
     *     @type \Google\Cloud\Talent\V4beta1\Tenant $tenant
     *           Required. The tenant to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\TenantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the project under which the tenant is created.
     * The format is "projects/{project_id}", for example,
     * "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the project under which the tenant is created.
     * The format is "projects/{project_id}", for example,
     * "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The tenant to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Tenant tenant = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Talent\V4beta1\Tenant
     */
    public function getTenant()
    {
        return isset($this->tenant) ? $this->tenant : null;
    }

    public function hasTenant()
    {
        return isset($this->tenant);
    }

    public function clearTenant()
    {
        unset($this->tenant);
    }

    /**
     * Required. The tenant to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Tenant tenant = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Talent\V4beta1\Tenant $var
     * @return $this
     */
    public function setTenant($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Tenant::class);
        $this->tenant = $var;

        return $this;
    }

}

