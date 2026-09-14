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
 * ModifyEndpointGroup request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getListenerId() Obtain <p>Listener ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener ID.</p>
 * @method string getEndpointGroupId() Obtain <p>Terminal node group ID.</p>
 * @method void setEndpointGroupId(string $EndpointGroupId) Set <p>Terminal node group ID.</p>
 * @method array getEndpointConfigurations() Obtain <p>Terminal node configuration.</p>
 * @method void setEndpointConfigurations(array $EndpointConfigurations) Set <p>Terminal node configuration.</p>
 * @method string getName() Obtain <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method void setName(string $Name) Set <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
 * @method string getDescription() Obtain <p>Description.</p><p>Input limit: maximum length cannot exceed 100 bytes.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p><p>Input limit: maximum length cannot exceed 100 bytes.</p>
 * @method boolean getEnableHealthCheck() Obtain <p>Whether to enable health check.</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) Set <p>Whether to enable health check.</p>
 * @method integer getConnectTimeout() Obtain <p>Response timeout.</p><p>Value range: [1, 100]</p><p>This parameter is required when health check is enabled.</p>
 * @method void setConnectTimeout(integer $ConnectTimeout) Set <p>Response timeout.</p><p>Value range: [1, 100]</p><p>This parameter is required when health check is enabled.</p>
 * @method integer getHealthCheckInterval() Obtain <p>Health check interval.</p><p>Value range: [5, 300].</p><p>This parameter is required when health check is enabled.</p>
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) Set <p>Health check interval.</p><p>Value range: [5, 300].</p><p>This parameter is required when health check is enabled.</p>
 * @method integer getUnhealthyThreshold() Obtain <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
 * @method integer getHealthyThreshold() Obtain <p>Health threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set <p>Health threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
 * @method string getCheckType() Obtain <p>Select the protocol.</p><p>Input parameter limits: support filling in: 'TCP', 'HTTP', 'PING', 'CUSTOM'.</p><p>1. When the listener is TCP, you can choose CUSTOM+TCP.<br>2. When the listener is UDP, you can choose PING+CUSTOM.<br>3. When the listener is HTTP or HTTPS, you can choose HTTP.</p>
 * @method void setCheckType(string $CheckType) Set <p>Select the protocol.</p><p>Input parameter limits: support filling in: 'TCP', 'HTTP', 'PING', 'CUSTOM'.</p><p>1. When the listener is TCP, you can choose CUSTOM+TCP.<br>2. When the listener is UDP, you can choose PING+CUSTOM.<br>3. When the listener is HTTP or HTTPS, you can choose HTTP.</p>
 * @method integer getCheckPort() Obtain <p>Check port.</p><p>Value range: [1, 65535]</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method void setCheckPort(integer $CheckPort) Set <p>Check port.</p><p>Value range: [1, 65535]</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method string getContextType() Obtain <p>Check content.</p><p>Input parameter limit: Only TEXT is supported.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method void setContextType(string $ContextType) Set <p>Check content.</p><p>Input parameter limit: Only TEXT is supported.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method string getCheckSendContext() Obtain <p>Check request.</p><p>Input parameter limit: The length range is 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method void setCheckSendContext(string $CheckSendContext) Set <p>Check request.</p><p>Input parameter limit: The length range is 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
 * @method string getCheckRecvContext() Obtain <p>Check returned results.</p><p>Input parameter limit: length range is 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
 * @method void setCheckRecvContext(string $CheckRecvContext) Set <p>Check returned results.</p><p>Input parameter limit: length range is 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
 * @method string getCheckDomain() Obtain <p>Check domain name.</p><p>Input parameter limit: The length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
 * @method void setCheckDomain(string $CheckDomain) Set <p>Check domain name.</p><p>Input parameter limit: The length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
 * @method string getCheckPath() Obtain <p>Check the URL.</p><p>Input parameter limit: length range 3-80.</p><p>This field is required when CheckType is HTTP.</p>
 * @method void setCheckPath(string $CheckPath) Set <p>Check the URL.</p><p>Input parameter limit: length range 3-80.</p><p>This field is required when CheckType is HTTP.</p>
 * @method string getCheckMethod() Obtain <p>Request method.</p><p>Input parameter limit: support filling in 'GET', 'HEAD'.</p><p>This field is required when CheckType is HTTP.</p>
 * @method void setCheckMethod(string $CheckMethod) Set <p>Request method.</p><p>Input parameter limit: support filling in 'GET', 'HEAD'.</p><p>This field is required when CheckType is HTTP.</p>
 * @method array getStatusMask() Obtain <p>Status check code.</p><p>Input parameter limits: support selecting 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>This field is required when CheckType is HTTP.</p>
 * @method void setStatusMask(array $StatusMask) Set <p>Status check code.</p><p>Input parameter limits: support selecting 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>This field is required when CheckType is HTTP.</p>
 * @method string getForwardProtocol() Obtain <p>Origin-pull protocol.</p><p>Input parameter limits. Supported values: 'HTTP', 'HTTPS'.</p><p>When the CLB listener protocol is HTTP, only HTTP can be configured. When it is HTTPS, HTTP or HTTPS can be configured.</p>
 * @method void setForwardProtocol(string $ForwardProtocol) Set <p>Origin-pull protocol.</p><p>Input parameter limits. Supported values: 'HTTP', 'HTTPS'.</p><p>When the CLB listener protocol is HTTP, only HTTP can be configured. When it is HTTPS, HTTP or HTTPS can be configured.</p>
 * @method array getPortOverrides() Obtain <p>Port mapping.</p><p>When the CLB listener protocol is HTTP or HTTPS, one pair can be configured. When the CLB listener protocol is UDP or TCP, up to 30 pairs can be configured.</p>
 * @method void setPortOverrides(array $PortOverrides) Set <p>Port mapping.</p><p>When the CLB listener protocol is HTTP or HTTPS, one pair can be configured. When the CLB listener protocol is UDP or TCP, up to 30 pairs can be configured.</p>
 * @method string getCipherPolicyId() Obtain <p>HPPTS encryption algorithm kit</p><p>Input parameter limit: support selecting 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>This parameter can be modified only when the CLB listener protocol is HTTPS.</p>
 * @method void setCipherPolicyId(string $CipherPolicyId) Set <p>HPPTS encryption algorithm kit</p><p>Input parameter limit: support selecting 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>This parameter can be modified only when the CLB listener protocol is HTTPS.</p>
 * @method string getHttpVersion() Obtain <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul>
 * @method void setHttpVersion(string $HttpVersion) Set <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul>
 */
class ModifyEndpointGroupRequest extends AbstractModel
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
     * @var string <p>Terminal node group ID.</p>
     */
    public $EndpointGroupId;

    /**
     * @var array <p>Terminal node configuration.</p>
     */
    public $EndpointConfigurations;

    /**
     * @var string <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     */
    public $Name;

    /**
     * @var string <p>Description.</p><p>Input limit: maximum length cannot exceed 100 bytes.</p>
     */
    public $Description;

    /**
     * @var boolean <p>Whether to enable health check.</p>
     */
    public $EnableHealthCheck;

    /**
     * @var integer <p>Response timeout.</p><p>Value range: [1, 100]</p><p>This parameter is required when health check is enabled.</p>
     */
    public $ConnectTimeout;

    /**
     * @var integer <p>Health check interval.</p><p>Value range: [5, 300].</p><p>This parameter is required when health check is enabled.</p>
     */
    public $HealthCheckInterval;

    /**
     * @var integer <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
     */
    public $UnhealthyThreshold;

    /**
     * @var integer <p>Health threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
     */
    public $HealthyThreshold;

    /**
     * @var string <p>Select the protocol.</p><p>Input parameter limits: support filling in: 'TCP', 'HTTP', 'PING', 'CUSTOM'.</p><p>1. When the listener is TCP, you can choose CUSTOM+TCP.<br>2. When the listener is UDP, you can choose PING+CUSTOM.<br>3. When the listener is HTTP or HTTPS, you can choose HTTP.</p>
     */
    public $CheckType;

    /**
     * @var integer <p>Check port.</p><p>Value range: [1, 65535]</p><p>This field is required when CheckType is CUSTOM.</p>
     */
    public $CheckPort;

    /**
     * @var string <p>Check content.</p><p>Input parameter limit: Only TEXT is supported.</p><p>This field is required when CheckType is CUSTOM.</p>
     */
    public $ContextType;

    /**
     * @var string <p>Check request.</p><p>Input parameter limit: The length range is 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
     */
    public $CheckSendContext;

    /**
     * @var string <p>Check returned results.</p><p>Input parameter limit: length range is 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
     */
    public $CheckRecvContext;

    /**
     * @var string <p>Check domain name.</p><p>Input parameter limit: The length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
     */
    public $CheckDomain;

    /**
     * @var string <p>Check the URL.</p><p>Input parameter limit: length range 3-80.</p><p>This field is required when CheckType is HTTP.</p>
     */
    public $CheckPath;

    /**
     * @var string <p>Request method.</p><p>Input parameter limit: support filling in 'GET', 'HEAD'.</p><p>This field is required when CheckType is HTTP.</p>
     */
    public $CheckMethod;

    /**
     * @var array <p>Status check code.</p><p>Input parameter limits: support selecting 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>This field is required when CheckType is HTTP.</p>
     */
    public $StatusMask;

    /**
     * @var string <p>Origin-pull protocol.</p><p>Input parameter limits. Supported values: 'HTTP', 'HTTPS'.</p><p>When the CLB listener protocol is HTTP, only HTTP can be configured. When it is HTTPS, HTTP or HTTPS can be configured.</p>
     */
    public $ForwardProtocol;

    /**
     * @var array <p>Port mapping.</p><p>When the CLB listener protocol is HTTP or HTTPS, one pair can be configured. When the CLB listener protocol is UDP or TCP, up to 30 pairs can be configured.</p>
     */
    public $PortOverrides;

    /**
     * @var string <p>HPPTS encryption algorithm kit</p><p>Input parameter limit: support selecting 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>This parameter can be modified only when the CLB listener protocol is HTTPS.</p>
     */
    public $CipherPolicyId;

    /**
     * @var string <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul>
     */
    public $HttpVersion;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $ListenerId <p>Listener ID.</p>
     * @param string $EndpointGroupId <p>Terminal node group ID.</p>
     * @param array $EndpointConfigurations <p>Terminal node configuration.</p>
     * @param string $Name <p>Name.</p><p>Parameter format: starting with a letter or Chinese characters, 2–128 characters in length, supporting letters, digits, Chinese characters, . - _</p>
     * @param string $Description <p>Description.</p><p>Input limit: maximum length cannot exceed 100 bytes.</p>
     * @param boolean $EnableHealthCheck <p>Whether to enable health check.</p>
     * @param integer $ConnectTimeout <p>Response timeout.</p><p>Value range: [1, 100]</p><p>This parameter is required when health check is enabled.</p>
     * @param integer $HealthCheckInterval <p>Health check interval.</p><p>Value range: [5, 300].</p><p>This parameter is required when health check is enabled.</p>
     * @param integer $UnhealthyThreshold <p>Unhealthy threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
     * @param integer $HealthyThreshold <p>Health threshold.</p><p>Value range: [1, 10]</p><p>This field is required when health check is enabled.</p>
     * @param string $CheckType <p>Select the protocol.</p><p>Input parameter limits: support filling in: 'TCP', 'HTTP', 'PING', 'CUSTOM'.</p><p>1. When the listener is TCP, you can choose CUSTOM+TCP.<br>2. When the listener is UDP, you can choose PING+CUSTOM.<br>3. When the listener is HTTP or HTTPS, you can choose HTTP.</p>
     * @param integer $CheckPort <p>Check port.</p><p>Value range: [1, 65535]</p><p>This field is required when CheckType is CUSTOM.</p>
     * @param string $ContextType <p>Check content.</p><p>Input parameter limit: Only TEXT is supported.</p><p>This field is required when CheckType is CUSTOM.</p>
     * @param string $CheckSendContext <p>Check request.</p><p>Input parameter limit: The length range is 1-500.</p><p>This field is required when CheckType is CUSTOM.</p>
     * @param string $CheckRecvContext <p>Check returned results.</p><p>Input parameter limit: length range is 1-500.</p><p>When CheckType is CUSTOM, this field is required.</p>
     * @param string $CheckDomain <p>Check domain name.</p><p>Input parameter limit: The length range is 3-80.</p><p>This field is required when CheckType is HTTP.</p>
     * @param string $CheckPath <p>Check the URL.</p><p>Input parameter limit: length range 3-80.</p><p>This field is required when CheckType is HTTP.</p>
     * @param string $CheckMethod <p>Request method.</p><p>Input parameter limit: support filling in 'GET', 'HEAD'.</p><p>This field is required when CheckType is HTTP.</p>
     * @param array $StatusMask <p>Status check code.</p><p>Input parameter limits: support selecting 'http_2xx', 'http_3xx', 'http_4xx', 'http_5xx'.</p><p>This field is required when CheckType is HTTP.</p>
     * @param string $ForwardProtocol <p>Origin-pull protocol.</p><p>Input parameter limits. Supported values: 'HTTP', 'HTTPS'.</p><p>When the CLB listener protocol is HTTP, only HTTP can be configured. When it is HTTPS, HTTP or HTTPS can be configured.</p>
     * @param array $PortOverrides <p>Port mapping.</p><p>When the CLB listener protocol is HTTP or HTTPS, one pair can be configured. When the CLB listener protocol is UDP or TCP, up to 30 pairs can be configured.</p>
     * @param string $CipherPolicyId <p>HPPTS encryption algorithm kit</p><p>Input parameter limit: support selecting 'tls_policy_1.0-2', 'tls_policy_1.1-2', 'tls_policy_1.2', 'tls_policy_1.2_strict', 'tls_policy_1.2_strict-1.3'.</p><p>This parameter can be modified only when the CLB listener protocol is HTTPS.</p>
     * @param string $HttpVersion <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: version HTTP/1.1</li><li>HTTP/2: version HTTP/2</li></ul>
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

        if (array_key_exists("EndpointGroupId",$param) and $param["EndpointGroupId"] !== null) {
            $this->EndpointGroupId = $param["EndpointGroupId"];
        }

        if (array_key_exists("EndpointConfigurations",$param) and $param["EndpointConfigurations"] !== null) {
            $this->EndpointConfigurations = [];
            foreach ($param["EndpointConfigurations"] as $key => $value){
                $obj = new EndpointConfigurations();
                $obj->deserialize($value);
                array_push($this->EndpointConfigurations, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
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

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("PortOverrides",$param) and $param["PortOverrides"] !== null) {
            $this->PortOverrides = [];
            foreach ($param["PortOverrides"] as $key => $value){
                $obj = new PortOverride();
                $obj->deserialize($value);
                array_push($this->PortOverrides, $obj);
            }
        }

        if (array_key_exists("CipherPolicyId",$param) and $param["CipherPolicyId"] !== null) {
            $this->CipherPolicyId = $param["CipherPolicyId"];
        }

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }
    }
}
