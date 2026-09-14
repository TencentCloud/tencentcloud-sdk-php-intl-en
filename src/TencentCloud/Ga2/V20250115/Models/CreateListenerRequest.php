<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateListener request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getName() Obtain <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method void setName(string $Name) Set <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method PortRanges getPortRanges() Obtain <p>Port range.</p>
 * @method void setPortRanges(PortRanges $PortRanges) Set <p>Port range.</p>
 * @method string getDescription() Obtain <p>Description. Maximum length cannot exceed 100 characters.</p>
 * @method void setDescription(string $Description) Set <p>Description. Maximum length cannot exceed 100 characters.</p>
 * @method string getListenerType() Obtain <p>Listening type, defaults to smart routing.</p><p>Enumeration values:</p><ul><li>Standard: Smart routing.</li></ul>
 * @method void setListenerType(string $ListenerType) Set <p>Listening type, defaults to smart routing.</p><p>Enumeration values:</p><ul><li>Standard: Smart routing.</li></ul>
 * @method string getProtocol() Obtain <p>Protocol. Default value: TCP. Supports configuration of 'TCP', 'UDP', 'HTTP', and 'HTTPS'.</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol. Default value: TCP. Supports configuration of 'TCP', 'UDP', 'HTTP', and 'HTTPS'.</p>
 * @method integer getIdleTimeout() Obtain <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the default value is 15, with a supported range of 1-60.<br>2. For TCP listener, the default value is 900, with a supported range of 10-900.<br>3. For UDP listener, the default value is 20, with a supported range of 10-20.</p>
 * @method void setIdleTimeout(integer $IdleTimeout) Set <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the default value is 15, with a supported range of 1-60.<br>2. For TCP listener, the default value is 900, with a supported range of 10-900.<br>3. For UDP listener, the default value is 20, with a supported range of 10-20.</p>
 * @method string getGetRealIpType() Obtain <p>Layer-4 source IP retrieval mode. Supports 'TOA', 'ProxyProtocol', and 'ProxyProtocolV2'.</p><p>This parameter can be filled in only when the Layer-4 source IP retrieval mode is enabled.</p>
 * @method void setGetRealIpType(string $GetRealIpType) Set <p>Layer-4 source IP retrieval mode. Supports 'TOA', 'ProxyProtocol', and 'ProxyProtocolV2'.</p><p>This parameter can be filled in only when the Layer-4 source IP retrieval mode is enabled.</p>
 * @method string getClientAffinity() Obtain <p>Whether to enable session persistence. Supports configuration of 'Open' and 'Close'.</p><p>Enumeration values:</p><ul><li>Open: enable.</li><li>Close: disable.</li></ul><p>Only supported for layer-4 listeners. For layer-7 listeners, modification is not supported.</p>
 * @method void setClientAffinity(string $ClientAffinity) Set <p>Whether to enable session persistence. Supports configuration of 'Open' and 'Close'.</p><p>Enumeration values:</p><ul><li>Open: enable.</li><li>Close: disable.</li></ul><p>Only supported for layer-4 listeners. For layer-7 listeners, modification is not supported.</p>
 * @method integer getRequestTimeout() Obtain <p>Request timeout.</p><p>Value range: [1, 180]</p><p>Default value: 60</p><p>This parameter is configurable only for HTTPS listeners.</p>
 * @method void setRequestTimeout(integer $RequestTimeout) Set <p>Request timeout.</p><p>Value range: [1, 180]</p><p>Default value: 60</p><p>This parameter is configurable only for HTTPS listeners.</p>
 * @method boolean getXForwardedForRealIp() Obtain <p>Whether to enable layer-7 source IP retrieval mode.</p>
 * @method void setXForwardedForRealIp(boolean $XForwardedForRealIp) Set <p>Whether to enable layer-7 source IP retrieval mode.</p>
 * @method string getCertificationType() Obtain <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>U: one-way.</li></ul><p>For an HTTPS listener, this field is required.</p>
 * @method void setCertificationType(string $CertificationType) Set <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>U: one-way.</li></ul><p>For an HTTPS listener, this field is required.</p>
 * @method string getCipherPolicyId() Obtain <p>Encryption algorithm kit. Supports configuration of 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p>
 * @method void setCipherPolicyId(string $CipherPolicyId) Set <p>Encryption algorithm kit. Supports configuration of 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p>
 * @method array getServerCertificates() Obtain <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>This field is required for HTTPS listeners.</p>
 * @method void setServerCertificates(array $ServerCertificates) Set <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>This field is required for HTTPS listeners.</p>
 * @method array getClientCaCertificates() Obtain <p>Client certificate.</p><p>Input limit: 1. Currently only support importing one cert. To use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs. 2. The cert must be a CA certificate.</p><p>This field is required when HTTPS listener and mutual authentication are enabled.</p>
 * @method void setClientCaCertificates(array $ClientCaCertificates) Set <p>Client certificate.</p><p>Input limit: 1. Currently only support importing one cert. To use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs. 2. The cert must be a CA certificate.</p><p>This field is required when HTTPS listener and mutual authentication are enabled.</p>
 * @method string getHttpVersion() Obtain <p>HTTPS listener supports version selection</p><p>Enumeration values:</p><ul><li>HTTP/1.1: HTTP/1.1</li><li>HTTP/2: HTTP/2</li></ul>
 * @method void setHttpVersion(string $HttpVersion) Set <p>HTTPS listener supports version selection</p><p>Enumeration values:</p><ul><li>HTTP/1.1: HTTP/1.1</li><li>HTTP/2: HTTP/2</li></ul>
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     */
    public $Name;

    /**
     * @var PortRanges <p>Port range.</p>
     */
    public $PortRanges;

    /**
     * @var string <p>Description. Maximum length cannot exceed 100 characters.</p>
     */
    public $Description;

    /**
     * @var string <p>Listening type, defaults to smart routing.</p><p>Enumeration values:</p><ul><li>Standard: Smart routing.</li></ul>
     */
    public $ListenerType;

    /**
     * @var string <p>Protocol. Default value: TCP. Supports configuration of 'TCP', 'UDP', 'HTTP', and 'HTTPS'.</p>
     */
    public $Protocol;

    /**
     * @var integer <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the default value is 15, with a supported range of 1-60.<br>2. For TCP listener, the default value is 900, with a supported range of 10-900.<br>3. For UDP listener, the default value is 20, with a supported range of 10-20.</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>Layer-4 source IP retrieval mode. Supports 'TOA', 'ProxyProtocol', and 'ProxyProtocolV2'.</p><p>This parameter can be filled in only when the Layer-4 source IP retrieval mode is enabled.</p>
     */
    public $GetRealIpType;

    /**
     * @var string <p>Whether to enable session persistence. Supports configuration of 'Open' and 'Close'.</p><p>Enumeration values:</p><ul><li>Open: enable.</li><li>Close: disable.</li></ul><p>Only supported for layer-4 listeners. For layer-7 listeners, modification is not supported.</p>
     */
    public $ClientAffinity;

    /**
     * @var integer <p>Request timeout.</p><p>Value range: [1, 180]</p><p>Default value: 60</p><p>This parameter is configurable only for HTTPS listeners.</p>
     */
    public $RequestTimeout;

    /**
     * @var boolean <p>Whether to enable layer-7 source IP retrieval mode.</p>
     */
    public $XForwardedForRealIp;

    /**
     * @var string <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>U: one-way.</li></ul><p>For an HTTPS listener, this field is required.</p>
     */
    public $CertificationType;

    /**
     * @var string <p>Encryption algorithm kit. Supports configuration of 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p>
     */
    public $CipherPolicyId;

    /**
     * @var array <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>This field is required for HTTPS listeners.</p>
     */
    public $ServerCertificates;

    /**
     * @var array <p>Client certificate.</p><p>Input limit: 1. Currently only support importing one cert. To use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs. 2. The cert must be a CA certificate.</p><p>This field is required when HTTPS listener and mutual authentication are enabled.</p>
     */
    public $ClientCaCertificates;

    /**
     * @var string <p>HTTPS listener supports version selection</p><p>Enumeration values:</p><ul><li>HTTP/1.1: HTTP/1.1</li><li>HTTP/2: HTTP/2</li></ul>
     */
    public $HttpVersion;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $Name <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     * @param PortRanges $PortRanges <p>Port range.</p>
     * @param string $Description <p>Description. Maximum length cannot exceed 100 characters.</p>
     * @param string $ListenerType <p>Listening type, defaults to smart routing.</p><p>Enumeration values:</p><ul><li>Standard: Smart routing.</li></ul>
     * @param string $Protocol <p>Protocol. Default value: TCP. Supports configuration of 'TCP', 'UDP', 'HTTP', and 'HTTPS'.</p>
     * @param integer $IdleTimeout <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the default value is 15, with a supported range of 1-60.<br>2. For TCP listener, the default value is 900, with a supported range of 10-900.<br>3. For UDP listener, the default value is 20, with a supported range of 10-20.</p>
     * @param string $GetRealIpType <p>Layer-4 source IP retrieval mode. Supports 'TOA', 'ProxyProtocol', and 'ProxyProtocolV2'.</p><p>This parameter can be filled in only when the Layer-4 source IP retrieval mode is enabled.</p>
     * @param string $ClientAffinity <p>Whether to enable session persistence. Supports configuration of 'Open' and 'Close'.</p><p>Enumeration values:</p><ul><li>Open: enable.</li><li>Close: disable.</li></ul><p>Only supported for layer-4 listeners. For layer-7 listeners, modification is not supported.</p>
     * @param integer $RequestTimeout <p>Request timeout.</p><p>Value range: [1, 180]</p><p>Default value: 60</p><p>This parameter is configurable only for HTTPS listeners.</p>
     * @param boolean $XForwardedForRealIp <p>Whether to enable layer-7 source IP retrieval mode.</p>
     * @param string $CertificationType <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>U: one-way.</li></ul><p>For an HTTPS listener, this field is required.</p>
     * @param string $CipherPolicyId <p>Encryption algorithm kit. Supports configuration of 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p>
     * @param array $ServerCertificates <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>This field is required for HTTPS listeners.</p>
     * @param array $ClientCaCertificates <p>Client certificate.</p><p>Input limit: 1. Currently only support importing one cert. To use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs. 2. The cert must be a CA certificate.</p><p>This field is required when HTTPS listener and mutual authentication are enabled.</p>
     * @param string $HttpVersion <p>HTTPS listener supports version selection</p><p>Enumeration values:</p><ul><li>HTTP/1.1: HTTP/1.1</li><li>HTTP/2: HTTP/2</li></ul>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PortRanges",$param) and $param["PortRanges"] !== null) {
            $this->PortRanges = new PortRanges();
            $this->PortRanges->deserialize($param["PortRanges"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ListenerType",$param) and $param["ListenerType"] !== null) {
            $this->ListenerType = $param["ListenerType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("GetRealIpType",$param) and $param["GetRealIpType"] !== null) {
            $this->GetRealIpType = $param["GetRealIpType"];
        }

        if (array_key_exists("ClientAffinity",$param) and $param["ClientAffinity"] !== null) {
            $this->ClientAffinity = $param["ClientAffinity"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("XForwardedForRealIp",$param) and $param["XForwardedForRealIp"] !== null) {
            $this->XForwardedForRealIp = $param["XForwardedForRealIp"];
        }

        if (array_key_exists("CertificationType",$param) and $param["CertificationType"] !== null) {
            $this->CertificationType = $param["CertificationType"];
        }

        if (array_key_exists("CipherPolicyId",$param) and $param["CipherPolicyId"] !== null) {
            $this->CipherPolicyId = $param["CipherPolicyId"];
        }

        if (array_key_exists("ServerCertificates",$param) and $param["ServerCertificates"] !== null) {
            $this->ServerCertificates = $param["ServerCertificates"];
        }

        if (array_key_exists("ClientCaCertificates",$param) and $param["ClientCaCertificates"] !== null) {
            $this->ClientCaCertificates = $param["ClientCaCertificates"];
        }

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }
    }
}
