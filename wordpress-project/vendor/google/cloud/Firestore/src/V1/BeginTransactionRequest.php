<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.BeginTransaction][google.firestore.v1.Firestore.BeginTransaction].
 *
 * Generated from protobuf message <code>google.firestore.v1.BeginTransactionRequest</code>
 */
class BeginTransactionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database = '';
    /**
     * The options for the transaction.
     * Defaults to a read-write transaction.
     *
     * Generated from protobuf field <code>.google.firestore.v1.TransactionOptions options = 2;</code>
     */
    private $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required. The database name. In the format:
     *           `projects/{project_id}/databases/{database_id}`.
     *     @type \Google\Cloud\Firestore\V1\TransactionOptions $options
     *           The options for the transaction.
     *           Defaults to a read-write transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * The options for the transaction.
     * Defaults to a read-write transaction.
     *
     * Generated from protobuf field <code>.google.firestore.v1.TransactionOptions options = 2;</code>
     * @return \Google\Cloud\Firestore\V1\TransactionOptions
     */
    public function getOptions()
    {
        return isset($this->options) ? $this->options : null;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * The options for the transaction.
     * Defaults to a read-write transaction.
     *
     * Generated from protobuf field <code>.google.firestore.v1.TransactionOptions options = 2;</code>
     * @param \Google\Cloud\Firestore\V1\TransactionOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\TransactionOptions::class);
        $this->options = $var;

        return $this;
    }

}

