<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [CertificateConfig][google.cloud.security.privateca.v1beta1.CertificateConfig] describes an X.509 certificate or CSR that is to be
 * created, as an alternative to using ASN.1.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateConfig</code>
 */
class CertificateConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Specifies some of the values in a certificate that are related to the
     * subject.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateConfig.SubjectConfig subject_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $subject_config = null;
    /**
     * Required. Describes how some of the technical fields in a certificate should be
     * populated.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigWrapper reusable_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $reusable_config = null;
    /**
     * Optional. The public key that corresponds to this config. This is, for example, used
     * when issuing [Certificates][google.cloud.security.privateca.v1beta1.Certificate], but not when creating a
     * self-signed [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] or [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] CSR.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.PublicKey public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $public_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig\SubjectConfig $subject_config
     *           Required. Specifies some of the values in a certificate that are related to the
     *           subject.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper $reusable_config
     *           Required. Describes how some of the technical fields in a certificate should be
     *           populated.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\PublicKey $public_key
     *           Optional. The public key that corresponds to this config. This is, for example, used
     *           when issuing [Certificates][google.cloud.security.privateca.v1beta1.Certificate], but not when creating a
     *           self-signed [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] or [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] CSR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Specifies some of the values in a certificate that are related to the
     * subject.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateConfig.SubjectConfig subject_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig\SubjectConfig
     */
    public function getSubjectConfig()
    {
        return isset($this->subject_config) ? $this->subject_config : null;
    }

    public function hasSubjectConfig()
    {
        return isset($this->subject_config);
    }

    public function clearSubjectConfig()
    {
        unset($this->subject_config);
    }

    /**
     * Required. Specifies some of the values in a certificate that are related to the
     * subject.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateConfig.SubjectConfig subject_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig\SubjectConfig $var
     * @return $this
     */
    public function setSubjectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig\SubjectConfig::class);
        $this->subject_config = $var;

        return $this;
    }

    /**
     * Required. Describes how some of the technical fields in a certificate should be
     * populated.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigWrapper reusable_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper
     */
    public function getReusableConfig()
    {
        return isset($this->reusable_config) ? $this->reusable_config : null;
    }

    public function hasReusableConfig()
    {
        return isset($this->reusable_config);
    }

    public function clearReusableConfig()
    {
        unset($this->reusable_config);
    }

    /**
     * Required. Describes how some of the technical fields in a certificate should be
     * populated.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigWrapper reusable_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper $var
     * @return $this
     */
    public function setReusableConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper::class);
        $this->reusable_config = $var;

        return $this;
    }

    /**
     * Optional. The public key that corresponds to this config. This is, for example, used
     * when issuing [Certificates][google.cloud.security.privateca.v1beta1.Certificate], but not when creating a
     * self-signed [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] or [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] CSR.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.PublicKey public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\PublicKey
     */
    public function getPublicKey()
    {
        return isset($this->public_key) ? $this->public_key : null;
    }

    public function hasPublicKey()
    {
        return isset($this->public_key);
    }

    public function clearPublicKey()
    {
        unset($this->public_key);
    }

    /**
     * Optional. The public key that corresponds to this config. This is, for example, used
     * when issuing [Certificates][google.cloud.security.privateca.v1beta1.Certificate], but not when creating a
     * self-signed [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] or [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] CSR.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.PublicKey public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\PublicKey $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\PublicKey::class);
        $this->public_key = $var;

        return $this;
    }

}

