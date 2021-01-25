<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `ListBillingAccounts`.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.ListBillingAccountsRequest</code>
 */
class ListBillingAccountsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Requested page size. The maximum page size is 100; this is also the
     * default.
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying a page of results to return. This should be a
     * `next_page_token` value returned from a previous `ListBillingAccounts`
     * call. If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Options for how to filter the returned billing accounts.
     * Currently this only supports filtering for
     * [subaccounts](https://cloud.google.com/billing/docs/concepts) under a
     * single provided reseller billing account.
     * (e.g. "master_billing_account=billingAccounts/012345-678901-ABCDEF").
     * Boolean algebra and other fields are not currently supported.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_size
     *           Requested page size. The maximum page size is 100; this is also the
     *           default.
     *     @type string $page_token
     *           A token identifying a page of results to return. This should be a
     *           `next_page_token` value returned from a previous `ListBillingAccounts`
     *           call. If unspecified, the first page of results is returned.
     *     @type string $filter
     *           Options for how to filter the returned billing accounts.
     *           Currently this only supports filtering for
     *           [subaccounts](https://cloud.google.com/billing/docs/concepts) under a
     *           single provided reseller billing account.
     *           (e.g. "master_billing_account=billingAccounts/012345-678901-ABCDEF").
     *           Boolean algebra and other fields are not currently supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct($data);
    }

    /**
     * Requested page size. The maximum page size is 100; this is also the
     * default.
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size. The maximum page size is 100; this is also the
     * default.
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token identifying a page of results to return. This should be a
     * `next_page_token` value returned from a previous `ListBillingAccounts`
     * call. If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results to return. This should be a
     * `next_page_token` value returned from a previous `ListBillingAccounts`
     * call. If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Options for how to filter the returned billing accounts.
     * Currently this only supports filtering for
     * [subaccounts](https://cloud.google.com/billing/docs/concepts) under a
     * single provided reseller billing account.
     * (e.g. "master_billing_account=billingAccounts/012345-678901-ABCDEF").
     * Boolean algebra and other fields are not currently supported.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Options for how to filter the returned billing accounts.
     * Currently this only supports filtering for
     * [subaccounts](https://cloud.google.com/billing/docs/concepts) under a
     * single provided reseller billing account.
     * (e.g. "master_billing_account=billingAccounts/012345-678901-ABCDEF").
     * Boolean algebra and other fields are not currently supported.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

