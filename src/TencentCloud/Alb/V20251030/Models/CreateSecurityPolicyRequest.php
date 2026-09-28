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
 * CreateSecurityPolicy request structure.
 *
 * @method array getCiphers() Obtain <p>List of encryption suites supported by the security policy. Encryption suites are used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>An encryption suite can be added to the list as long as it is supported by any one of the selected TLS versions.</li><li>If TLSVersions includes TLSv1.3: you can add TLSv1.3 exclusive encryption suites without specifying them (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part of them is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p>
 * @method void setCiphers(array $Ciphers) Set <p>List of encryption suites supported by the security policy. Encryption suites are used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>An encryption suite can be added to the list as long as it is supported by any one of the selected TLS versions.</li><li>If TLSVersions includes TLSv1.3: you can add TLSv1.3 exclusive encryption suites without specifying them (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part of them is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p>
 * @method array getTLSVersions() Obtain <p>List of TLS protocol versions supported by the security policy. TLS (Transport Layer Security) is used to ensure communication security between clients and load balancing.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version with the highest security and better performance. Recommended for priority use.</li></ul><p><strong>Recommendation:</strong> For production environment, at least select TLSv1.2. If client support is available, preferentially enable TLSv1.3.</p>
 * @method void setTLSVersions(array $TLSVersions) Set <p>List of TLS protocol versions supported by the security policy. TLS (Transport Layer Security) is used to ensure communication security between clients and load balancing.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version with the highest security and better performance. Recommended for priority use.</li></ul><p><strong>Recommendation:</strong> For production environment, at least select TLSv1.2. If client support is available, preferentially enable TLSv1.3.</p>
 * @method string getClientToken() Obtain <p>Client idempotency token.</p><p>Used for ensuring request idempotency and preventing duplicate creation caused by network timeout or client retry. We recommend using a UUID as the token value. When the same ClientToken is used for repeated requests within its validity period, the server will return the same result.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Client idempotency token.</p><p>Used for ensuring request idempotency and preventing duplicate creation caused by network timeout or client retry. We recommend using a UUID as the token value. When the same ClientToken is used for repeated requests within its validity period, the server will return the same result.</p>
 * @method boolean getDryRun() Obtain <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without creating resources. The preflight request will verify parameter format, permission, and resource quota, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After the preflight passes, a security policy will be created directly.</li></ul>
 * @method void setDryRun(boolean $DryRun) Set <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without creating resources. The preflight request will verify parameter format, permission, and resource quota, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After the preflight passes, a security policy will be created directly.</li></ul>
 * @method string getSecurityPolicyName() Obtain <p>security policy name. Used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>2–128 characters in length.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Recommendation:</strong> Use a name with business meaning, such as "prod-high-security" or "test environment policy".</p>
 * @method void setSecurityPolicyName(string $SecurityPolicyName) Set <p>security policy name. Used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>2–128 characters in length.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Recommendation:</strong> Use a name with business meaning, such as "prod-high-security" or "test environment policy".</p>
 * @method array getTags() Obtain <p>Tag list of the security policy. Tags are used for resource classification and management, making it easy to filter and organize resources by business, environment, department, and other dimensions.</p><p>Each tag consists of a Key-Value pair, and tag keys cannot be repeated under the same resource.</p>
 * @method void setTags(array $Tags) Set <p>Tag list of the security policy. Tags are used for resource classification and management, making it easy to filter and organize resources by business, environment, department, and other dimensions.</p><p>Each tag consists of a Key-Value pair, and tag keys cannot be repeated under the same resource.</p>
 */
class CreateSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var array <p>List of encryption suites supported by the security policy. Encryption suites are used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>An encryption suite can be added to the list as long as it is supported by any one of the selected TLS versions.</li><li>If TLSVersions includes TLSv1.3: you can add TLSv1.3 exclusive encryption suites without specifying them (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part of them is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p>
     */
    public $Ciphers;

    /**
     * @var array <p>List of TLS protocol versions supported by the security policy. TLS (Transport Layer Security) is used to ensure communication security between clients and load balancing.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version with the highest security and better performance. Recommended for priority use.</li></ul><p><strong>Recommendation:</strong> For production environment, at least select TLSv1.2. If client support is available, preferentially enable TLSv1.3.</p>
     */
    public $TLSVersions;

    /**
     * @var string <p>Client idempotency token.</p><p>Used for ensuring request idempotency and preventing duplicate creation caused by network timeout or client retry. We recommend using a UUID as the token value. When the same ClientToken is used for repeated requests within its validity period, the server will return the same result.</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without creating resources. The preflight request will verify parameter format, permission, and resource quota, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After the preflight passes, a security policy will be created directly.</li></ul>
     */
    public $DryRun;

    /**
     * @var string <p>security policy name. Used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>2–128 characters in length.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Recommendation:</strong> Use a name with business meaning, such as "prod-high-security" or "test environment policy".</p>
     */
    public $SecurityPolicyName;

    /**
     * @var array <p>Tag list of the security policy. Tags are used for resource classification and management, making it easy to filter and organize resources by business, environment, department, and other dimensions.</p><p>Each tag consists of a Key-Value pair, and tag keys cannot be repeated under the same resource.</p>
     */
    public $Tags;

    /**
     * @param array $Ciphers <p>List of encryption suites supported by the security policy. Encryption suites are used to negotiate the encryption algorithm between client and server.</p><p><strong>Configuration instructions:</strong></p><ul><li>The optional range of encryption suites depends on the selected TLS protocol version (TLSVersions parameter).</li><li>An encryption suite can be added to the list as long as it is supported by any one of the selected TLS versions.</li><li>If TLSVersions includes TLSv1.3: you can add TLSv1.3 exclusive encryption suites without specifying them (the system will auto-complete all TLSv1.3 suites); if specified, all TLSv1.3 exclusive encryption suites must be included. Specifying only part of them is not supported.</li></ul><p><strong>Get available encryption suites:</strong><br>Call the <a href="https://www.tencentcloud.com/document/api/1822/133718?from_cn_redirect=1">DescribeSecurityPolicyCapabilities</a> API to query the encryption suite list supported by each TLS version.</p>
     * @param array $TLSVersions <p>List of TLS protocol versions supported by the security policy. TLS (Transport Layer Security) is used to ensure communication security between clients and load balancing.</p><p><strong>Available values:</strong></p><ul><li><strong>TLSv1.0</strong>: Best compatibility, but low security level. Not recommended for production environment.</li><li><strong>TLSv1.1</strong>: Slightly better security than TLSv1.0, but still not recommended.</li><li><strong>TLSv1.2</strong>: Current mainstream security protocol version, balancing security and compatibility.</li><li><strong>TLSv1.3</strong>: Latest version with the highest security and better performance. Recommended for priority use.</li></ul><p><strong>Recommendation:</strong> For production environment, at least select TLSv1.2. If client support is available, preferentially enable TLSv1.3.</p>
     * @param string $ClientToken <p>Client idempotency token.</p><p>Used for ensuring request idempotency and preventing duplicate creation caused by network timeout or client retry. We recommend using a UUID as the token value. When the same ClientToken is used for repeated requests within its validity period, the server will return the same result.</p>
     * @param boolean $DryRun <p>Whether to only execute a preflight request. Values:</p><ul><li><strong>true</strong>: Only execute a preflight request without creating resources. The preflight request will verify parameter format, permission, and resource quota, helping you identify potential issues before proceeding with any operations.</li><li><strong>false</strong> (default): Execute a normal request. After the preflight passes, a security policy will be created directly.</li></ul>
     * @param string $SecurityPolicyName <p>security policy name. Used to identify and distinguish different security policies.</p><p><strong>Naming rule:</strong></p><ul><li>2–128 characters in length.</li><li>Must start with English letters or Chinese characters.</li><li>Can contain English letters, Chinese characters, digits, half-width periods (.), underscores (_), and dashes (-).</li></ul><p><strong>Recommendation:</strong> Use a name with business meaning, such as "prod-high-security" or "test environment policy".</p>
     * @param array $Tags <p>Tag list of the security policy. Tags are used for resource classification and management, making it easy to filter and organize resources by business, environment, department, and other dimensions.</p><p>Each tag consists of a Key-Value pair, and tag keys cannot be repeated under the same resource.</p>
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
        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("TLSVersions",$param) and $param["TLSVersions"] !== null) {
            $this->TLSVersions = $param["TLSVersions"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("SecurityPolicyName",$param) and $param["SecurityPolicyName"] !== null) {
            $this->SecurityPolicyName = $param["SecurityPolicyName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
