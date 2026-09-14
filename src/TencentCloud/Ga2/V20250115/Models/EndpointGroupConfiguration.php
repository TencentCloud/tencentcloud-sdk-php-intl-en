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
 * Terminal node group configuration
 *
 * @method string getName() Obtain <p>Terminal node group name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method void setName(string $Name) Set <p>Terminal node group name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method string getEndpointGroupRegion() Obtain <p>Region of the terminal node group.</p>
 * @method void setEndpointGroupRegion(string $EndpointGroupRegion) Set <p>Region of the terminal node group.</p>
 * @method array getEndpointConfigurations() Obtain <p>Terminal node configuration.</p>
 * @method void setEndpointConfigurations(array $EndpointConfigurations) Set <p>Terminal node configuration.</p>
 * @method string getCheckType() Obtain <p>Check protocol. Supports configuration of 'TCP', 'HTTP', 'PING', and 'CUSTOM'.</p><p>Enumeration values:</p><ul><li>TCP: When the CLB listener protocol where the terminal node group resides is TCP, choose TCP as the check protocol.</li><li>HTTP: When the CLB listener protocol where the terminal node group resides is HTTP or HTTPS, choose HTTP as the check protocol.</li><li>PING: When the CLB listener protocol where the terminal node group resides is UDP, choose PING as the check protocol.</li><li>CUSTOM: When the CLB listener protocol where the terminal node group resides is UDP or TCP, choose CUSTOM as the check protocol.</li></ul><p>This field is required when health check is enabled.</p>
 * @method void setCheckType(string $CheckType) Set <p>Check protocol. Supports configuration of 'TCP', 'HTTP', 'PING', and 'CUSTOM'.</p><p>Enumeration values:</p><ul><li>TCP: When the CLB listener protocol where the terminal node group resides is TCP, choose TCP as the check protocol.</li><li>HTTP: When the CLB listener protocol where the terminal node group resides is HTTP or HTTPS, choose HTTP as the check protocol.</li><li>PING: When the CLB listener protocol where the terminal node group resides is UDP, choose PING as the check protocol.</li><li>CUSTOM: When the CLB listener protocol where the terminal node group resides is UDP or TCP, choose CUSTOM as the check protocol.</li></ul><p>This field is required when health check is enabled.</p>
 * @method string getDescription() Obtain <p>Description.</p><p>Default value: empty by default, representing no configuration description.</p><p>Maximum length: 100 bytes.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p><p>Default value: empty by default, representing no configuration description.</p><p>Maximum length: 100 bytes.</p>
 * @method string getCheckPort() Obtain <p>Check port.</p><p>Input limit: range 1-65535.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method void setCheckPort(string $CheckPort) Set <p>Check port.</p><p>Input limit: range 1-65535.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method string getContextType() Obtain <p>Check content. Supports configuration 'TEXT'.</p><p>Enumeration values:</p><ul><li>TEXT: Text content.</li></ul><p>This field is required when CheckType is CUSTOM.</p>
 * @method void setContextType(string $ContextType) Set <p>Check content. Supports configuration 'TEXT'.</p><p>Enumeration values:</p><ul><li>TEXT: Text content.</li></ul><p>This field is required when CheckType is CUSTOM.</p>
 * @method string getCheckSendContext() Obtain <p>Check request.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method void setCheckSendContext(string $CheckSendContext) Set <p>Check request.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method string getCheckRecvContext() Obtain <p>Check returned results.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
 * @method void setCheckRecvContext(string $CheckRecvContext) Set <p>Check returned results.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
 * @method boolean getEnableHealthCheck() Obtain <p>Whether to enable health check.</p><p>Default value: False</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) Set <p>Whether to enable health check.</p><p>Default value: False</p>
 * @method integer getConnectTimeout() Obtain <p>Response timeout.</p><p>Value range: [1, 100]</p><p>Default value: 2</p><p>This field is required when health check is enabled.</p>
 * @method void setConnectTimeout(integer $ConnectTimeout) Set <p>Response timeout.</p><p>Value range: [1, 100]</p><p>Default value: 2</p><p>This field is required when health check is enabled.</p>
 * @method integer getHealthCheckInterval() Obtain <p>Health check interval.</p><p>Value range: [5, 300].</p><p>Default value: 30.</p><p>This field is required when health check is enabled.</p>
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) Set <p>Health check interval.</p><p>Value range: [5, 300].</p><p>Default value: 30.</p><p>This field is required when health check is enabled.</p>
 * @method integer getUnhealthyThreshold() Obtain <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
 * @method integer getHealthyThreshold() Obtain <p>Health threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set <p>Health threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
 * @method string getForwardProtocol() Obtain <p>Origin-pull protocol. HTTP and HTTPS can be configured.</p><p>Enumeration values:</p><ul><li>HTTP: HTTP origin-pull. HTTP can be configured when the listener protocol where the terminal node group resides is HTTP or HTTPS.</li><li>HTTPS: HTTPS origin-pull. HTTPS can be configured when the listener protocol where the terminal node group resides is HTTPS.</li></ul><p>This field is required when the listener protocol where the terminal node group resides is HTTP or HTTPS.</p>
 * @method void setForwardProtocol(string $ForwardProtocol) Set <p>Origin-pull protocol. HTTP and HTTPS can be configured.</p><p>Enumeration values:</p><ul><li>HTTP: HTTP origin-pull. HTTP can be configured when the listener protocol where the terminal node group resides is HTTP or HTTPS.</li><li>HTTPS: HTTPS origin-pull. HTTPS can be configured when the listener protocol where the terminal node group resides is HTTPS.</li></ul><p>This field is required when the listener protocol where the terminal node group resides is HTTP or HTTPS.</p>
 * @method string getCheckDomain() Obtain <p>Check domain name.</p><p>Input parameter limit: The byte length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
 * @method void setCheckDomain(string $CheckDomain) Set <p>Check domain name.</p><p>Input parameter limit: The byte length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
 * @method string getCheckPath() Obtain <p>Check the URL.</p><p>Parameter format: must match the regular expression: ^[a-zA-Z0-9_.\-\/]{1,80}$</p><p>This field is required when CheckType is HTTP.</p>
 * @method void setCheckPath(string $CheckPath) Set <p>Check the URL.</p><p>Parameter format: must match the regular expression: ^[a-zA-Z0-9_.\-\/]{1,80}$</p><p>This field is required when CheckType is HTTP.</p>
 * @method string getCheckMethod() Obtain <p>Request method. Supports configuration of 'GET' and 'HEAD'.</p><p>Enumeration values:</p><ul><li>GET: The request method is GET.</li><li>HEAD: The request method is HEAD.</li></ul><p>When CheckType is HTTP, this field is required.</p>
 * @method void setCheckMethod(string $CheckMethod) Set <p>Request method. Supports configuration of 'GET' and 'HEAD'.</p><p>Enumeration values:</p><ul><li>GET: The request method is GET.</li><li>HEAD: The request method is HEAD.</li></ul><p>When CheckType is HTTP, this field is required.</p>
 * @method array getStatusMask() Obtain <p>Status check code. Supports configuring 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>Enumeration values:</p><ul><li>http_2xx: HTTP codes beginning with 2.</li><li>http_3xx: HTTP codes beginning with 3.</li><li>http_4xx: HTTP codes beginning with 4.</li><li>http_5xx: HTTP codes beginning with 5.</li></ul><p>This field is required when CheckType is HTTP.</p>
 * @method void setStatusMask(array $StatusMask) Set <p>Status check code. Supports configuring 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>Enumeration values:</p><ul><li>http_2xx: HTTP codes beginning with 2.</li><li>http_3xx: HTTP codes beginning with 3.</li><li>http_4xx: HTTP codes beginning with 4.</li><li>http_5xx: HTTP codes beginning with 5.</li></ul><p>This field is required when CheckType is HTTP.</p>
 * @method array getPortOverrides() Obtain <p>Port mapping.</p><p>Input limits: Layer 7 supports 1 port mapping, and Layer 4 supports up to 30 port mappings.</p>
 * @method void setPortOverrides(array $PortOverrides) Set <p>Port mapping.</p><p>Input limits: Layer 7 supports 1 port mapping, and Layer 4 supports up to 30 port mappings.</p>
 * @method string getIspType() Obtain <p>Operator type. Supports configuration 'CMCC', 'CTCC', 'CUCC'.</p><p>Enumeration values:</p><ul><li>CMCC: China Mobile</li><li>CUCC: China Unicom</li><li>CTCC: China Telecom</li></ul><p>This field is required when the terminal node group region is a triple-network region.</p>
 * @method void setIspType(string $IspType) Set <p>Operator type. Supports configuration 'CMCC', 'CTCC', 'CUCC'.</p><p>Enumeration values:</p><ul><li>CMCC: China Mobile</li><li>CUCC: China Unicom</li><li>CTCC: China Telecom</li></ul><p>This field is required when the terminal node group region is a triple-network region.</p>
 * @method string getCipherPolicyId() Obtain <p>HPPTS encryption algorithm suite; supports configuration 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3';</p><p>Enumeration values:</p><ul><li>tls_policy_1.0-2: encryption algorithm suite.</li><li>tls_policy_1.1-2: encryption algorithm suite.</li><li>tls_policy_1.2: encryption algorithm suite.</li><li>tls_policy_1.2_strict: encryption algorithm suite.</li><li>tls_policy_1.2_strict-1.3: encryption algorithm suite.</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
 * @method void setCipherPolicyId(string $CipherPolicyId) Set <p>HPPTS encryption algorithm suite; supports configuration 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3';</p><p>Enumeration values:</p><ul><li>tls_policy_1.0-2: encryption algorithm suite.</li><li>tls_policy_1.1-2: encryption algorithm suite.</li><li>tls_policy_1.2: encryption algorithm suite.</li><li>tls_policy_1.2_strict: encryption algorithm suite.</li><li>tls_policy_1.2_strict-1.3: encryption algorithm suite.</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
 * @method string getHttpVersion() Obtain <p>Origin-pull protocol. Supports configuration of 'HTTP/1.1' and 'HTTP/2'.</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
 * @method void setHttpVersion(string $HttpVersion) Set <p>Origin-pull protocol. Supports configuration of 'HTTP/1.1' and 'HTTP/2'.</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
 */
class EndpointGroupConfiguration extends AbstractModel
{
    /**
     * @var string <p>Terminal node group name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     */
    public $Name;

    /**
     * @var string <p>Region of the terminal node group.</p>
     */
    public $EndpointGroupRegion;

    /**
     * @var array <p>Terminal node configuration.</p>
     */
    public $EndpointConfigurations;

    /**
     * @var string <p>Check protocol. Supports configuration of 'TCP', 'HTTP', 'PING', and 'CUSTOM'.</p><p>Enumeration values:</p><ul><li>TCP: When the CLB listener protocol where the terminal node group resides is TCP, choose TCP as the check protocol.</li><li>HTTP: When the CLB listener protocol where the terminal node group resides is HTTP or HTTPS, choose HTTP as the check protocol.</li><li>PING: When the CLB listener protocol where the terminal node group resides is UDP, choose PING as the check protocol.</li><li>CUSTOM: When the CLB listener protocol where the terminal node group resides is UDP or TCP, choose CUSTOM as the check protocol.</li></ul><p>This field is required when health check is enabled.</p>
     */
    public $CheckType;

    /**
     * @var string <p>Description.</p><p>Default value: empty by default, representing no configuration description.</p><p>Maximum length: 100 bytes.</p>
     */
    public $Description;

    /**
     * @var string <p>Check port.</p><p>Input limit: range 1-65535.</p><p>This field is required when CheckType is CUSTOM.</p>
     */
    public $CheckPort;

    /**
     * @var string <p>Check content. Supports configuration 'TEXT'.</p><p>Enumeration values:</p><ul><li>TEXT: Text content.</li></ul><p>This field is required when CheckType is CUSTOM.</p>
     */
    public $ContextType;

    /**
     * @var string <p>Check request.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
     */
    public $CheckSendContext;

    /**
     * @var string <p>Check returned results.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
     */
    public $CheckRecvContext;

    /**
     * @var boolean <p>Whether to enable health check.</p><p>Default value: False</p>
     */
    public $EnableHealthCheck;

    /**
     * @var integer <p>Response timeout.</p><p>Value range: [1, 100]</p><p>Default value: 2</p><p>This field is required when health check is enabled.</p>
     */
    public $ConnectTimeout;

    /**
     * @var integer <p>Health check interval.</p><p>Value range: [5, 300].</p><p>Default value: 30.</p><p>This field is required when health check is enabled.</p>
     */
    public $HealthCheckInterval;

    /**
     * @var integer <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
     */
    public $UnhealthyThreshold;

    /**
     * @var integer <p>Health threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
     */
    public $HealthyThreshold;

    /**
     * @var string <p>Origin-pull protocol. HTTP and HTTPS can be configured.</p><p>Enumeration values:</p><ul><li>HTTP: HTTP origin-pull. HTTP can be configured when the listener protocol where the terminal node group resides is HTTP or HTTPS.</li><li>HTTPS: HTTPS origin-pull. HTTPS can be configured when the listener protocol where the terminal node group resides is HTTPS.</li></ul><p>This field is required when the listener protocol where the terminal node group resides is HTTP or HTTPS.</p>
     */
    public $ForwardProtocol;

    /**
     * @var string <p>Check domain name.</p><p>Input parameter limit: The byte length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
     */
    public $CheckDomain;

    /**
     * @var string <p>Check the URL.</p><p>Parameter format: must match the regular expression: ^[a-zA-Z0-9_.\-\/]{1,80}$</p><p>This field is required when CheckType is HTTP.</p>
     */
    public $CheckPath;

    /**
     * @var string <p>Request method. Supports configuration of 'GET' and 'HEAD'.</p><p>Enumeration values:</p><ul><li>GET: The request method is GET.</li><li>HEAD: The request method is HEAD.</li></ul><p>When CheckType is HTTP, this field is required.</p>
     */
    public $CheckMethod;

    /**
     * @var array <p>Status check code. Supports configuring 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>Enumeration values:</p><ul><li>http_2xx: HTTP codes beginning with 2.</li><li>http_3xx: HTTP codes beginning with 3.</li><li>http_4xx: HTTP codes beginning with 4.</li><li>http_5xx: HTTP codes beginning with 5.</li></ul><p>This field is required when CheckType is HTTP.</p>
     */
    public $StatusMask;

    /**
     * @var array <p>Port mapping.</p><p>Input limits: Layer 7 supports 1 port mapping, and Layer 4 supports up to 30 port mappings.</p>
     */
    public $PortOverrides;

    /**
     * @var string <p>Operator type. Supports configuration 'CMCC', 'CTCC', 'CUCC'.</p><p>Enumeration values:</p><ul><li>CMCC: China Mobile</li><li>CUCC: China Unicom</li><li>CTCC: China Telecom</li></ul><p>This field is required when the terminal node group region is a triple-network region.</p>
     */
    public $IspType;

    /**
     * @var string <p>HPPTS encryption algorithm suite; supports configuration 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3';</p><p>Enumeration values:</p><ul><li>tls_policy_1.0-2: encryption algorithm suite.</li><li>tls_policy_1.1-2: encryption algorithm suite.</li><li>tls_policy_1.2: encryption algorithm suite.</li><li>tls_policy_1.2_strict: encryption algorithm suite.</li><li>tls_policy_1.2_strict-1.3: encryption algorithm suite.</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
     */
    public $CipherPolicyId;

    /**
     * @var string <p>Origin-pull protocol. Supports configuration of 'HTTP/1.1' and 'HTTP/2'.</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
     */
    public $HttpVersion;

    /**
     * @param string $Name <p>Terminal node group name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     * @param string $EndpointGroupRegion <p>Region of the terminal node group.</p>
     * @param array $EndpointConfigurations <p>Terminal node configuration.</p>
     * @param string $CheckType <p>Check protocol. Supports configuration of 'TCP', 'HTTP', 'PING', and 'CUSTOM'.</p><p>Enumeration values:</p><ul><li>TCP: When the CLB listener protocol where the terminal node group resides is TCP, choose TCP as the check protocol.</li><li>HTTP: When the CLB listener protocol where the terminal node group resides is HTTP or HTTPS, choose HTTP as the check protocol.</li><li>PING: When the CLB listener protocol where the terminal node group resides is UDP, choose PING as the check protocol.</li><li>CUSTOM: When the CLB listener protocol where the terminal node group resides is UDP or TCP, choose CUSTOM as the check protocol.</li></ul><p>This field is required when health check is enabled.</p>
     * @param string $Description <p>Description.</p><p>Default value: empty by default, representing no configuration description.</p><p>Maximum length: 100 bytes.</p>
     * @param string $CheckPort <p>Check port.</p><p>Input limit: range 1-65535.</p><p>This field is required when CheckType is CUSTOM.</p>
     * @param string $ContextType <p>Check content. Supports configuration 'TEXT'.</p><p>Enumeration values:</p><ul><li>TEXT: Text content.</li></ul><p>This field is required when CheckType is CUSTOM.</p>
     * @param string $CheckSendContext <p>Check request.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
     * @param string $CheckRecvContext <p>Check returned results.</p><p>Input parameter limit: The byte length must be within 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
     * @param boolean $EnableHealthCheck <p>Whether to enable health check.</p><p>Default value: False</p>
     * @param integer $ConnectTimeout <p>Response timeout.</p><p>Value range: [1, 100]</p><p>Default value: 2</p><p>This field is required when health check is enabled.</p>
     * @param integer $HealthCheckInterval <p>Health check interval.</p><p>Value range: [5, 300].</p><p>Default value: 30.</p><p>This field is required when health check is enabled.</p>
     * @param integer $UnhealthyThreshold <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
     * @param integer $HealthyThreshold <p>Health threshold.</p><p>Value range: [1, 10]</p><p>Default value: 3</p><p>This field is required when health check is enabled.</p>
     * @param string $ForwardProtocol <p>Origin-pull protocol. HTTP and HTTPS can be configured.</p><p>Enumeration values:</p><ul><li>HTTP: HTTP origin-pull. HTTP can be configured when the listener protocol where the terminal node group resides is HTTP or HTTPS.</li><li>HTTPS: HTTPS origin-pull. HTTPS can be configured when the listener protocol where the terminal node group resides is HTTPS.</li></ul><p>This field is required when the listener protocol where the terminal node group resides is HTTP or HTTPS.</p>
     * @param string $CheckDomain <p>Check domain name.</p><p>Input parameter limit: The byte length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
     * @param string $CheckPath <p>Check the URL.</p><p>Parameter format: must match the regular expression: ^[a-zA-Z0-9_.\-\/]{1,80}$</p><p>This field is required when CheckType is HTTP.</p>
     * @param string $CheckMethod <p>Request method. Supports configuration of 'GET' and 'HEAD'.</p><p>Enumeration values:</p><ul><li>GET: The request method is GET.</li><li>HEAD: The request method is HEAD.</li></ul><p>When CheckType is HTTP, this field is required.</p>
     * @param array $StatusMask <p>Status check code. Supports configuring 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>Enumeration values:</p><ul><li>http_2xx: HTTP codes beginning with 2.</li><li>http_3xx: HTTP codes beginning with 3.</li><li>http_4xx: HTTP codes beginning with 4.</li><li>http_5xx: HTTP codes beginning with 5.</li></ul><p>This field is required when CheckType is HTTP.</p>
     * @param array $PortOverrides <p>Port mapping.</p><p>Input limits: Layer 7 supports 1 port mapping, and Layer 4 supports up to 30 port mappings.</p>
     * @param string $IspType <p>Operator type. Supports configuration 'CMCC', 'CTCC', 'CUCC'.</p><p>Enumeration values:</p><ul><li>CMCC: China Mobile</li><li>CUCC: China Unicom</li><li>CTCC: China Telecom</li></ul><p>This field is required when the terminal node group region is a triple-network region.</p>
     * @param string $CipherPolicyId <p>HPPTS encryption algorithm suite; supports configuration 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3';</p><p>Enumeration values:</p><ul><li>tls_policy_1.0-2: encryption algorithm suite.</li><li>tls_policy_1.1-2: encryption algorithm suite.</li><li>tls_policy_1.2: encryption algorithm suite.</li><li>tls_policy_1.2_strict: encryption algorithm suite.</li><li>tls_policy_1.2_strict-1.3: encryption algorithm suite.</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
     * @param string $HttpVersion <p>Origin-pull protocol. Supports configuration of 'HTTP/1.1' and 'HTTP/2'.</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul><p>This field is required when the origin-pull protocol is HTTPS.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EndpointGroupRegion",$param) and $param["EndpointGroupRegion"] !== null) {
            $this->EndpointGroupRegion = $param["EndpointGroupRegion"];
        }

        if (array_key_exists("EndpointConfigurations",$param) and $param["EndpointConfigurations"] !== null) {
            $this->EndpointConfigurations = [];
            foreach ($param["EndpointConfigurations"] as $key => $value){
                $obj = new EndpointConfigurations();
                $obj->deserialize($value);
                array_push($this->EndpointConfigurations, $obj);
            }
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CheckPort",$param) and $param["CheckPort"] !== null) {
            $this->CheckPort = $param["CheckPort"];
        }

        if (array_key_exists("ContextType",$param) and $param["ContextType"] !== null) {
            $this->ContextType = $param["ContextType"];
        }

        if (array_key_exists("CheckSendContext",$param) and $param["CheckSendContext"] !== null) {
            $this->CheckSendContext = $param["CheckSendContext"];
        }

        if (array_key_exists("CheckRecvContext",$param) and $param["CheckRecvContext"] !== null) {
            $this->CheckRecvContext = $param["CheckRecvContext"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("HealthCheckInterval",$param) and $param["HealthCheckInterval"] !== null) {
            $this->HealthCheckInterval = $param["HealthCheckInterval"];
        }

        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            $this->UnhealthyThreshold = $param["UnhealthyThreshold"];
        }

        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            $this->HealthyThreshold = $param["HealthyThreshold"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("CheckDomain",$param) and $param["CheckDomain"] !== null) {
            $this->CheckDomain = $param["CheckDomain"];
        }

        if (array_key_exists("CheckPath",$param) and $param["CheckPath"] !== null) {
            $this->CheckPath = $param["CheckPath"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("StatusMask",$param) and $param["StatusMask"] !== null) {
            $this->StatusMask = $param["StatusMask"];
        }

        if (array_key_exists("PortOverrides",$param) and $param["PortOverrides"] !== null) {
            $this->PortOverrides = [];
            foreach ($param["PortOverrides"] as $key => $value){
                $obj = new PortOverride();
                $obj->deserialize($value);
                array_push($this->PortOverrides, $obj);
            }
        }

        if (array_key_exists("IspType",$param) and $param["IspType"] !== null) {
            $this->IspType = $param["IspType"];
        }

        if (array_key_exists("CipherPolicyId",$param) and $param["CipherPolicyId"] !== null) {
            $this->CipherPolicyId = $param["CipherPolicyId"];
        }

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }
    }
}
