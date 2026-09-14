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
 * ModifyListener request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getListenerId() Obtain <p>Listener ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener ID.</p>
 * @method string getName() Obtain <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method void setName(string $Name) Set <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method string getDescription() Obtain <p>Description. Maximum length cannot exceed 100 bytes.</p>
 * @method void setDescription(string $Description) Set <p>Description. Maximum length cannot exceed 100 bytes.</p>
 * @method integer getIdleTimeout() Obtain <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the supported range is 1-60. 2. For TCP listener, the supported range is 10-900. 3. For UDP listener, the supported range is 10-20.</p>
 * @method void setIdleTimeout(integer $IdleTimeout) Set <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the supported range is 1-60. 2. For TCP listener, the supported range is 10-900. 3. For UDP listener, the supported range is 10-20.</p>
 * @method string getClientAffinity() Obtain <p>Whether to enable session persistence.</p><p>Enumeration values:</p><ul><li>Open: on.</li><li>Close: off.</li></ul><p>TCP/UDP listeners support modification of this parameter.</p>
 * @method void setClientAffinity(string $ClientAffinity) Set <p>Whether to enable session persistence.</p><p>Enumeration values:</p><ul><li>Open: on.</li><li>Close: off.</li></ul><p>TCP/UDP listeners support modification of this parameter.</p>
 * @method integer getClientAffinityTime() Obtain <p>Session persistence duration.</p><p>Value range: [60, 3600]</p>
 * @method void setClientAffinityTime(integer $ClientAffinityTime) Set <p>Session persistence duration.</p><p>Value range: [60, 3600]</p>
 * @method integer getRequestTimeout() Obtain <p>Request timeout.</p><p>Value range: [1, 180]</p><p>This parameter can be modified only for HTTPS listeners.</p>
 * @method void setRequestTimeout(integer $RequestTimeout) Set <p>Request timeout.</p><p>Value range: [1, 180]</p><p>This parameter can be modified only for HTTPS listeners.</p>
 * @method boolean getXForwardedForRealIp() Obtain <p>Whether to enable the layer 7 method of obtaining the client IP.</p><p>This parameter modification is supported only for HTTPS/HTTP listeners.</p>
 * @method void setXForwardedForRealIp(boolean $XForwardedForRealIp) Set <p>Whether to enable the layer 7 method of obtaining the client IP.</p><p>This parameter modification is supported only for HTTPS/HTTP listeners.</p>
 * @method string getCertificationType() Obtain <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>MUTUAL: one-way.</li></ul><p>Only HTTPS/HTTP listeners support modifying this parameter.</p>
 * @method void setCertificationType(string $CertificationType) Set <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>MUTUAL: one-way.</li></ul><p>Only HTTPS/HTTP listeners support modifying this parameter.</p>
 * @method string getCipherPolicyId() Obtain <p>Encryption algorithm kit.</p><p>Input limits: support selecting tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>Only HTTPS listeners support modifying this parameter.</p>
 * @method void setCipherPolicyId(string $CipherPolicyId) Set <p>Encryption algorithm kit.</p><p>Input limits: support selecting tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>Only HTTPS listeners support modifying this parameter.</p>
 * @method array getServerCertificates() Obtain <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>Only HTTPS listeners support modification of this parameter.</p>
 * @method void setServerCertificates(array $ServerCertificates) Set <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>Only HTTPS listeners support modification of this parameter.</p>
 * @method array getClientCaCertificates() Obtain <p>Client certificate.</p><p>Input limitations: 1. Currently only support importing one certificate; to use multiple certificates, use the certificate api CreateListenerAdditionalCert to add other certificates. 2. The certificate must be a CA certificate.</p><p>Only HTTPS listeners support modification of this parameter, and mutual authentication must be enabled.</p>
 * @method void setClientCaCertificates(array $ClientCaCertificates) Set <p>Client certificate.</p><p>Input limitations: 1. Currently only support importing one certificate; to use multiple certificates, use the certificate api CreateListenerAdditionalCert to add other certificates. 2. The certificate must be a CA certificate.</p><p>Only HTTPS listeners support modification of this parameter, and mutual authentication must be enabled.</p>
 * @method string getGetRealIpType() Obtain <p>Method of obtaining the source IP.</p><p>Input parameter limits: support selecting 'ProxyProtocol', 'Close', 'ProxyProtocolV2', 'TOA'.</p><p>Only TCP listeners support modification of this parameter.</p>
 * @method void setGetRealIpType(string $GetRealIpType) Set <p>Method of obtaining the source IP.</p><p>Input parameter limits: support selecting 'ProxyProtocol', 'Close', 'ProxyProtocolV2', 'TOA'.</p><p>Only TCP listeners support modification of this parameter.</p>
 */
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Listener ID.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     */
    public $Name;

    /**
     * @var string <p>Description. Maximum length cannot exceed 100 bytes.</p>
     */
    public $Description;

    /**
     * @var integer <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the supported range is 1-60. 2. For TCP listener, the supported range is 10-900. 3. For UDP listener, the supported range is 10-20.</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>Whether to enable session persistence.</p><p>Enumeration values:</p><ul><li>Open: on.</li><li>Close: off.</li></ul><p>TCP/UDP listeners support modification of this parameter.</p>
     */
    public $ClientAffinity;

    /**
     * @var integer <p>Session persistence duration.</p><p>Value range: [60, 3600]</p>
     */
    public $ClientAffinityTime;

    /**
     * @var integer <p>Request timeout.</p><p>Value range: [1, 180]</p><p>This parameter can be modified only for HTTPS listeners.</p>
     */
    public $RequestTimeout;

    /**
     * @var boolean <p>Whether to enable the layer 7 method of obtaining the client IP.</p><p>This parameter modification is supported only for HTTPS/HTTP listeners.</p>
     */
    public $XForwardedForRealIp;

    /**
     * @var string <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>MUTUAL: one-way.</li></ul><p>Only HTTPS/HTTP listeners support modifying this parameter.</p>
     */
    public $CertificationType;

    /**
     * @var string <p>Encryption algorithm kit.</p><p>Input limits: support selecting tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>Only HTTPS listeners support modifying this parameter.</p>
     */
    public $CipherPolicyId;

    /**
     * @var array <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>Only HTTPS listeners support modification of this parameter.</p>
     */
    public $ServerCertificates;

    /**
     * @var array <p>Client certificate.</p><p>Input limitations: 1. Currently only support importing one certificate; to use multiple certificates, use the certificate api CreateListenerAdditionalCert to add other certificates. 2. The certificate must be a CA certificate.</p><p>Only HTTPS listeners support modification of this parameter, and mutual authentication must be enabled.</p>
     */
    public $ClientCaCertificates;

    /**
     * @var string <p>Method of obtaining the source IP.</p><p>Input parameter limits: support selecting 'ProxyProtocol', 'Close', 'ProxyProtocolV2', 'TOA'.</p><p>Only TCP listeners support modification of this parameter.</p>
     */
    public $GetRealIpType;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $ListenerId <p>Listener ID.</p>
     * @param string $Name <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     * @param string $Description <p>Description. Maximum length cannot exceed 100 bytes.</p>
     * @param integer $IdleTimeout <p>Connection idle wait time.</p><p>1. For HTTP/HTTPS listener, the supported range is 1-60. 2. For TCP listener, the supported range is 10-900. 3. For UDP listener, the supported range is 10-20.</p>
     * @param string $ClientAffinity <p>Whether to enable session persistence.</p><p>Enumeration values:</p><ul><li>Open: on.</li><li>Close: off.</li></ul><p>TCP/UDP listeners support modification of this parameter.</p>
     * @param integer $ClientAffinityTime <p>Session persistence duration.</p><p>Value range: [60, 3600]</p>
     * @param integer $RequestTimeout <p>Request timeout.</p><p>Value range: [1, 180]</p><p>This parameter can be modified only for HTTPS listeners.</p>
     * @param boolean $XForwardedForRealIp <p>Whether to enable the layer 7 method of obtaining the client IP.</p><p>This parameter modification is supported only for HTTPS/HTTP listeners.</p>
     * @param string $CertificationType <p>Parsing method.</p><p>Enumeration values:</p><ul><li>UNIDIRECTIONAL: two-way.</li><li>MUTUAL: one-way.</li></ul><p>Only HTTPS/HTTP listeners support modifying this parameter.</p>
     * @param string $CipherPolicyId <p>Encryption algorithm kit.</p><p>Input limits: support selecting tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>Only HTTPS listeners support modifying this parameter.</p>
     * @param array $ServerCertificates <p>Server certificate.</p><p>Input limit: currently only support importing one cert; to use multiple certs, use the cert api CreateListenerAdditionalCert to add other certs.</p><p>Only HTTPS listeners support modification of this parameter.</p>
     * @param array $ClientCaCertificates <p>Client certificate.</p><p>Input limitations: 1. Currently only support importing one certificate; to use multiple certificates, use the certificate api CreateListenerAdditionalCert to add other certificates. 2. The certificate must be a CA certificate.</p><p>Only HTTPS listeners support modification of this parameter, and mutual authentication must be enabled.</p>
     * @param string $GetRealIpType <p>Method of obtaining the source IP.</p><p>Input parameter limits: support selecting 'ProxyProtocol', 'Close', 'ProxyProtocolV2', 'TOA'.</p><p>Only TCP listeners support modification of this parameter.</p>
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("ClientAffinity",$param) and $param["ClientAffinity"] !== null) {
            $this->ClientAffinity = $param["ClientAffinity"];
        }

        if (array_key_exists("ClientAffinityTime",$param) and $param["ClientAffinityTime"] !== null) {
            $this->ClientAffinityTime = $param["ClientAffinityTime"];
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

        if (array_key_exists("GetRealIpType",$param) and $param["GetRealIpType"] !== null) {
            $this->GetRealIpType = $param["GetRealIpType"];
        }
    }
}
