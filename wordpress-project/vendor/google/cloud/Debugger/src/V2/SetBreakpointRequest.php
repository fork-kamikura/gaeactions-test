<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to set a breakpoint
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.SetBreakpointRequest</code>
 */
class SetBreakpointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. ID of the debuggee where the breakpoint is to be set.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $debuggee_id = '';
    /**
     * Required. Breakpoint specification to set.
     * The field `location` of the breakpoint must be set.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $breakpoint = null;
    /**
     * Required. The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $client_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $debuggee_id
     *           Required. ID of the debuggee where the breakpoint is to be set.
     *     @type \Google\Cloud\Debugger\V2\Breakpoint $breakpoint
     *           Required. Breakpoint specification to set.
     *           The field `location` of the breakpoint must be set.
     *     @type string $client_version
     *           Required. The client version making the call.
     *           Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Debugger::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. ID of the debuggee where the breakpoint is to be set.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDebuggeeId()
    {
        return $this->debuggee_id;
    }

    /**
     * Required. ID of the debuggee where the breakpoint is to be set.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDebuggeeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->debuggee_id = $var;

        return $this;
    }

    /**
     * Required. Breakpoint specification to set.
     * The field `location` of the breakpoint must be set.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Debugger\V2\Breakpoint
     */
    public function getBreakpoint()
    {
        return isset($this->breakpoint) ? $this->breakpoint : null;
    }

    public function hasBreakpoint()
    {
        return isset($this->breakpoint);
    }

    public function clearBreakpoint()
    {
        unset($this->breakpoint);
    }

    /**
     * Required. Breakpoint specification to set.
     * The field `location` of the breakpoint must be set.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Debugger\V2\Breakpoint $var
     * @return $this
     */
    public function setBreakpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\Breakpoint::class);
        $this->breakpoint = $var;

        return $this;
    }

    /**
     * Required. The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * Required. The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClientVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_version = $var;

        return $this;
    }

}
