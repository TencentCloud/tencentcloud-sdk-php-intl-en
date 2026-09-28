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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityPolicyAttributes request structure.
 *
 * @method string getSecurityPolicyId() Obtain <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
 * @method void setSecurityPolicyId(string $SecurityPolicyId) Set <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
 * @method array getCiphers() Obtain <p>Modified encryption suite list. The encryption suite is used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>As long as an encryption suite is supported by any one of the selected TLS versions, it can be added to the list.</li><li>If TLSVersions contains TLSv1.3: TLSv1.3 exclusive encryption suites can be unspecified (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p><p><strong>Note:</strong> If this parameter is not specified, the original configuration remains unchanged.</p>
 * @method void setCiphers(array $Ciphers) Set <p>Modified encryption suite list. The encryption suite is used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>As long as an encryption suite is supported by any one of the selected TLS versions, it can be added to the list.</li><li>If TLSVersions contains TLSv1.3: TLSv1.3 exclusive encryption suites can be unspecified (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p><p><strong>Note:</strong> If this parameter is not specified, the original configuration remains unchanged.</p>
 * @method boolean getDryRun() Obtain <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without actually modifying resources. The preflight request will verify parameter format, permission, and configuration validity, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After passing the preflight, the security policy will be directly modified.</li></ul>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without actually modifying resources. The preflight request will verify parameter format, permission, and configuration validity, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After passing the preflight, the security policy will be directly modified.</li></ul>
 * @method string getSecurityPolicyName() Obtain <p>Modified security policy name, used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>Length: 2–128 characters.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Note:</strong> If this parameter is not specified, the original name remains unchanged.</p>
 * @method void setSecurityPolicyName(string $SecurityPolicyName) Set <p>Modified security policy name, used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>Length: 2–128 characters.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Note:</strong> If this parameter is not specified, the original name remains unchanged.</p>
 * @method array getTLSVersions() Obtain <p>List of TLS protocol versions after modification. TLS (Transport Layer Security) is used to guarantee the security of communication between clients and the load balancer.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version, highest security and better performance. Recommended to prioritize.</li></ul><p><strong>Note:</strong> </p><ul><li>If this parameter is not specified, the original configuration remains unchanged.</li><li>When modifying the TLS version, check whether the Ciphers parameter configuration is compatible.</li></ul>
 * @method void setTLSVersions(array $TLSVersions) Set <p>List of TLS protocol versions after modification. TLS (Transport Layer Security) is used to guarantee the security of communication between clients and the load balancer.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version, highest security and better performance. Recommended to prioritize.</li></ul><p><strong>Note:</strong> </p><ul><li>If this parameter is not specified, the original configuration remains unchanged.</li><li>When modifying the TLS version, check whether the Ciphers parameter configuration is compatible.</li></ul>
 */
class ModifySecurityPolicyAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
     */
    public $SecurityPolicyId;

    /**
     * @var array <p>Modified encryption suite list. The encryption suite is used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>As long as an encryption suite is supported by any one of the selected TLS versions, it can be added to the list.</li><li>If TLSVersions contains TLSv1.3: TLSv1.3 exclusive encryption suites can be unspecified (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p><p><strong>Note:</strong> If this parameter is not specified, the original configuration remains unchanged.</p>
     */
    public $Ciphers;

    /**
     * @var boolean <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without actually modifying resources. The preflight request will verify parameter format, permission, and configuration validity, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After passing the preflight, the security policy will be directly modified.</li></ul>
     */
    public $DryRun;

    /**
     * @var string <p>Modified security policy name, used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>Length: 2–128 characters.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Note:</strong> If this parameter is not specified, the original name remains unchanged.</p>
     */
    public $SecurityPolicyName;

    /**
     * @var array <p>List of TLS protocol versions after modification. TLS (Transport Layer Security) is used to guarantee the security of communication between clients and the load balancer.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version, highest security and better performance. Recommended to prioritize.</li></ul><p><strong>Note:</strong> </p><ul><li>If this parameter is not specified, the original configuration remains unchanged.</li><li>When modifying the TLS version, check whether the Ciphers parameter configuration is compatible.</li></ul>
     */
    public $TLSVersions;

    /**
     * @param string $SecurityPolicyId <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
     * @param array $Ciphers <p>Modified encryption suite list. The encryption suite is used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>As long as an encryption suite is supported by any one of the selected TLS versions, it can be added to the list.</li><li>If TLSVersions contains TLSv1.3: TLSv1.3 exclusive encryption suites can be unspecified (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p><p><strong>Note:</strong> If this parameter is not specified, the original configuration remains unchanged.</p>
     * @param boolean $DryRun <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without actually modifying resources. The preflight request will verify parameter format, permission, and configuration validity, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After passing the preflight, the security policy will be directly modified.</li></ul>
     * @param string $SecurityPolicyName <p>Modified security policy name, used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>Length: 2–128 characters.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Note:</strong> If this parameter is not specified, the original name remains unchanged.</p>
     * @param array $TLSVersions <p>List of TLS protocol versions after modification. TLS (Transport Layer Security) is used to guarantee the security of communication between clients and the load balancer.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version, highest security and better performance. Recommended to prioritize.</li></ul><p><strong>Note:</strong> </p><ul><li>If this parameter is not specified, the original configuration remains unchanged.</li><li>When modifying the TLS version, check whether the Ciphers parameter configuration is compatible.</li></ul>
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
        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("SecurityPolicyName",$param) and $param["SecurityPolicyName"] !== null) {
            $this->SecurityPolicyName = $param["SecurityPolicyName"];
        }

        if (array_key_exists("TLSVersions",$param) and $param["TLSVersions"] !== null) {
            $this->TLSVersions = $param["TLSVersions"];
        }
    }
}
