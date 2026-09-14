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
 * Terminal node group information
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getListenerId() Obtain <p>Listener instance ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener instance ID.</p>
 * @method string getEndpointGroupId() Obtain <p>Terminal node group ID.</p>
 * @method void setEndpointGroupId(string $EndpointGroupId) Set <p>Terminal node group ID.</p>
 * @method string getName() Obtain <p>Name.</p>
 * @method void setName(string $Name) Set <p>Name.</p>
 * @method string getEndpointGroupRegion() Obtain <p>Region.</p>
 * @method void setEndpointGroupRegion(string $EndpointGroupRegion) Set <p>Region.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method array getEndpointConfigurations() Obtain <p>Endpoint information.</p>
 * @method void setEndpointConfigurations(array $EndpointConfigurations) Set <p>Endpoint information.</p>
 * @method boolean getEnableHealthCheck() Obtain <p>Whether to enable health check.</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) Set <p>Whether to enable health check.</p>
 * @method integer getConnectTimeout() Obtain <p>Response timeout.</p>
 * @method void setConnectTimeout(integer $ConnectTimeout) Set <p>Response timeout.</p>
 * @method integer getHealthCheckInterval() Obtain <p>Health check interval.</p>
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) Set <p>Health check interval.</p>
 * @method integer getUnhealthyThreshold() Obtain <p>Unhealthy threshold.</p>
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set <p>Unhealthy threshold.</p>
 * @method integer getHealthyThreshold() Obtain <p>Health threshold.</p>
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set <p>Health threshold.</p>
 * @method string getCheckType() Obtain <p>Select the protocol.</p>
 * @method void setCheckType(string $CheckType) Set <p>Select the protocol.</p>
 * @method integer getCheckPort() Obtain <p>Check port.</p>
 * @method void setCheckPort(integer $CheckPort) Set <p>Check port.</p>
 * @method string getContextType() Obtain <p>Check content.</p>
 * @method void setContextType(string $ContextType) Set <p>Check content.</p>
 * @method string getCheckSendContext() Obtain <p>Check request.</p>
 * @method void setCheckSendContext(string $CheckSendContext) Set <p>Check request.</p>
 * @method string getCheckRecvContext() Obtain <p>Check returned results.</p>
 * @method void setCheckRecvContext(string $CheckRecvContext) Set <p>Check returned results.</p>
 * @method string getCheckDomain() Obtain <p>Check domain name.</p>
 * @method void setCheckDomain(string $CheckDomain) Set <p>Check domain name.</p>
 * @method string getCheckPath() Obtain <p>Check the URL.</p>
 * @method void setCheckPath(string $CheckPath) Set <p>Check the URL.</p>
 * @method string getCheckMethod() Obtain <p>Request method.</p>
 * @method void setCheckMethod(string $CheckMethod) Set <p>Request method.</p>
 * @method array getStatusMask() Obtain <p>Status check code.</p>
 * @method void setStatusMask(array $StatusMask) Set <p>Status check code.</p>
 * @method string getEndpointGroupType() Obtain <p>Terminal node group type.</p>
 * @method void setEndpointGroupType(string $EndpointGroupType) Set <p>Terminal node group type.</p>
 * @method string getForwardProtocol() Obtain <p>Origin-pull protocol.</p>
 * @method void setForwardProtocol(string $ForwardProtocol) Set <p>Origin-pull protocol.</p>
 * @method array getPortOverrides() Obtain <p>Port mapping info.</p>
 * @method void setPortOverrides(array $PortOverrides) Set <p>Port mapping info.</p>
 * @method boolean getVirtualExistForwardingRuleFlag() Obtain <p>Whether the custom endpoint group is bound to a Layer 7 forwarding rule.</p>
 * @method void setVirtualExistForwardingRuleFlag(boolean $VirtualExistForwardingRuleFlag) Set <p>Whether the custom endpoint group is bound to a Layer 7 forwarding rule.</p>
 * @method array getOriginPublicIps() Obtain <p>Public IP address of the egress terminal node group.</p>
 * @method void setOriginPublicIps(array $OriginPublicIps) Set <p>Public IP address of the egress terminal node group.</p>
 * @method string getIspType() Obtain <p>Operator type. China Mobile (CMCC), China Unicom (CUCC), China Telecom (CTCC).</p>
 * @method void setIspType(string $IspType) Set <p>Operator type. China Mobile (CMCC), China Unicom (CUCC), China Telecom (CTCC).</p>
 * @method string getCipherPolicyId() Obtain <p>HPPTS encryption algorithm kit</p>
 * @method void setCipherPolicyId(string $CipherPolicyId) Set <p>HPPTS encryption algorithm kit</p>
 * @method string getHttpVersion() Obtain <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: Version HTTP/1.1</li><li>HTTP/2: Version HTTP/2</li></ul>
 * @method void setHttpVersion(string $HttpVersion) Set <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: Version HTTP/1.1</li><li>HTTP/2: Version HTTP/2</li></ul>
 */
class EndpointGroupConfigurationSet extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Listener instance ID.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Terminal node group ID.</p>
     */
    public $EndpointGroupId;

    /**
     * @var string <p>Name.</p>
     */
    public $Name;

    /**
     * @var string <p>Region.</p>
     */
    public $EndpointGroupRegion;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var array <p>Endpoint information.</p>
     */
    public $EndpointConfigurations;

    /**
     * @var boolean <p>Whether to enable health check.</p>
     */
    public $EnableHealthCheck;

    /**
     * @var integer <p>Response timeout.</p>
     */
    public $ConnectTimeout;

    /**
     * @var integer <p>Health check interval.</p>
     */
    public $HealthCheckInterval;

    /**
     * @var integer <p>Unhealthy threshold.</p>
     */
    public $UnhealthyThreshold;

    /**
     * @var integer <p>Health threshold.</p>
     */
    public $HealthyThreshold;

    /**
     * @var string <p>Select the protocol.</p>
     */
    public $CheckType;

    /**
     * @var integer <p>Check port.</p>
     */
    public $CheckPort;

    /**
     * @var string <p>Check content.</p>
     */
    public $ContextType;

    /**
     * @var string <p>Check request.</p>
     */
    public $CheckSendContext;

    /**
     * @var string <p>Check returned results.</p>
     */
    public $CheckRecvContext;

    /**
     * @var string <p>Check domain name.</p>
     */
    public $CheckDomain;

    /**
     * @var string <p>Check the URL.</p>
     */
    public $CheckPath;

    /**
     * @var string <p>Request method.</p>
     */
    public $CheckMethod;

    /**
     * @var array <p>Status check code.</p>
     */
    public $StatusMask;

    /**
     * @var string <p>Terminal node group type.</p>
     */
    public $EndpointGroupType;

    /**
     * @var string <p>Origin-pull protocol.</p>
     */
    public $ForwardProtocol;

    /**
     * @var array <p>Port mapping info.</p>
     */
    public $PortOverrides;

    /**
     * @var boolean <p>Whether the custom endpoint group is bound to a Layer 7 forwarding rule.</p>
     */
    public $VirtualExistForwardingRuleFlag;

    /**
     * @var array <p>Public IP address of the egress terminal node group.</p>
     */
    public $OriginPublicIps;

    /**
     * @var string <p>Operator type. China Mobile (CMCC), China Unicom (CUCC), China Telecom (CTCC).</p>
     */
    public $IspType;

    /**
     * @var string <p>HPPTS encryption algorithm kit</p>
     */
    public $CipherPolicyId;

    /**
     * @var string <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: Version HTTP/1.1</li><li>HTTP/2: Version HTTP/2</li></ul>
     */
    public $HttpVersion;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $ListenerId <p>Listener instance ID.</p>
     * @param string $EndpointGroupId <p>Terminal node group ID.</p>
     * @param string $Name <p>Name.</p>
     * @param string $EndpointGroupRegion <p>Region.</p>
     * @param string $Description <p>Description.</p>
     * @param array $EndpointConfigurations <p>Endpoint information.</p>
     * @param boolean $EnableHealthCheck <p>Whether to enable health check.</p>
     * @param integer $ConnectTimeout <p>Response timeout.</p>
     * @param integer $HealthCheckInterval <p>Health check interval.</p>
     * @param integer $UnhealthyThreshold <p>Unhealthy threshold.</p>
     * @param integer $HealthyThreshold <p>Health threshold.</p>
     * @param string $CheckType <p>Select the protocol.</p>
     * @param integer $CheckPort <p>Check port.</p>
     * @param string $ContextType <p>Check content.</p>
     * @param string $CheckSendContext <p>Check request.</p>
     * @param string $CheckRecvContext <p>Check returned results.</p>
     * @param string $CheckDomain <p>Check domain name.</p>
     * @param string $CheckPath <p>Check the URL.</p>
     * @param string $CheckMethod <p>Request method.</p>
     * @param array $StatusMask <p>Status check code.</p>
     * @param string $EndpointGroupType <p>Terminal node group type.</p>
     * @param string $ForwardProtocol <p>Origin-pull protocol.</p>
     * @param array $PortOverrides <p>Port mapping info.</p>
     * @param boolean $VirtualExistForwardingRuleFlag <p>Whether the custom endpoint group is bound to a Layer 7 forwarding rule.</p>
     * @param array $OriginPublicIps <p>Public IP address of the egress terminal node group.</p>
     * @param string $IspType <p>Operator type. China Mobile (CMCC), China Unicom (CUCC), China Telecom (CTCC).</p>
     * @param string $CipherPolicyId <p>HPPTS encryption algorithm kit</p>
     * @param string $HttpVersion <p>Only the HTTPS back-to-source protocol supports selecting ['HTTP/1.1', 'HTTP/2']</p><p>Enumeration values:</p><ul><li>HTTP/1.1: Version HTTP/1.1</li><li>HTTP/2: Version HTTP/2</li></ul>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EndpointGroupRegion",$param) and $param["EndpointGroupRegion"] !== null) {
            $this->EndpointGroupRegion = $param["EndpointGroupRegion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EndpointConfigurations",$param) and $param["EndpointConfigurations"] !== null) {
            $this->EndpointConfigurations = [];
            foreach ($param["EndpointConfigurations"] as $key => $value){
                $obj = new EndpointConfigurations();
                $obj->deserialize($value);
                array_push($this->EndpointConfigurations, $obj);
            }
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

        if (array_key_exists("EndpointGroupType",$param) and $param["EndpointGroupType"] !== null) {
            $this->EndpointGroupType = $param["EndpointGroupType"];
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

        if (array_key_exists("VirtualExistForwardingRuleFlag",$param) and $param["VirtualExistForwardingRuleFlag"] !== null) {
            $this->VirtualExistForwardingRuleFlag = $param["VirtualExistForwardingRuleFlag"];
        }

        if (array_key_exists("OriginPublicIps",$param) and $param["OriginPublicIps"] !== null) {
            $this->OriginPublicIps = $param["OriginPublicIps"];
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
