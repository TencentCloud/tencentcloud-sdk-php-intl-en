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
 * Listener information
 *
 * @method string getGlobalAcceleratorId() Obtain Global acceleration instance ID.
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set Global acceleration instance ID.
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method string getName() Obtain Listener name.
 * @method void setName(string $Name) Set Listener name.
 * @method string getDescription() Obtain Listener description.
 * @method void setDescription(string $Description) Set Listener description.
 * @method string getProtocol() Obtain Protocol.
 * @method void setProtocol(string $Protocol) Set Protocol.
 * @method PortRanges getPortRanges() Obtain Port range.
 * @method void setPortRanges(PortRanges $PortRanges) Set Port range.
 * @method boolean getXForwardedForRealIp() Obtain Whether to enable layer-7 access to source IP mode.
 * @method void setXForwardedForRealIp(boolean $XForwardedForRealIp) Set Whether to enable layer-7 access to source IP mode.
 * @method string getClientAffinity() Obtain Enable session persistence.
 * @method void setClientAffinity(string $ClientAffinity) Set Enable session persistence.
 * @method integer getClientAffinityTime() Obtain Session persistence time.
 * @method void setClientAffinityTime(integer $ClientAffinityTime) Set Session persistence time.
 * @method string getCertificationType() Obtain SSL decryption method.
 * @method void setCertificationType(string $CertificationType) Set SSL decryption method.
 * @method array getServerCertificates() Obtain Server certificate.
 * @method void setServerCertificates(array $ServerCertificates) Set Server certificate.
 * @method array getClientCaCertificates() Obtain Client certificate.
 * @method void setClientCaCertificates(array $ClientCaCertificates) Set Client certificate.
 * @method string getCipherPolicyId() Obtain TLS password suite package.
 * @method void setCipherPolicyId(string $CipherPolicyId) Set TLS password suite package.
 * @method string getHttpVersion() Obtain HTTP version.
 * @method void setHttpVersion(string $HttpVersion) Set HTTP version.
 * @method integer getRequestTimeout() Obtain Request timeout.
 * @method void setRequestTimeout(integer $RequestTimeout) Set Request timeout.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getListenerType() Obtain Listener routing type.
 * @method void setListenerType(string $ListenerType) Set Listener routing type.
 * @method string getStatus() Obtain Listener status.
 * @method void setStatus(string $Status) Set Listener status.
 * @method integer getEndpointGroupCounts() Obtain Number of terminal node groups belonging to the listener.
 * @method void setEndpointGroupCounts(integer $EndpointGroupCounts) Set Number of terminal node groups belonging to the listener.
 * @method string getGetRealIpType() Obtain Method for obtaining the source IP at Layer 4.
 * @method void setGetRealIpType(string $GetRealIpType) Set Method for obtaining the source IP at Layer 4.
 * @method integer getIdleTimeout() Obtain Connection timeout.
 * @method void setIdleTimeout(integer $IdleTimeout) Set Connection timeout.
 */
class ListenerSet extends AbstractModel
{
    /**
     * @var string Global acceleration instance ID.
     */
    public $GlobalAcceleratorId;

    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var string Listener name.
     */
    public $Name;

    /**
     * @var string Listener description.
     */
    public $Description;

    /**
     * @var string Protocol.
     */
    public $Protocol;

    /**
     * @var PortRanges Port range.
     */
    public $PortRanges;

    /**
     * @var boolean Whether to enable layer-7 access to source IP mode.
     */
    public $XForwardedForRealIp;

    /**
     * @var string Enable session persistence.
     */
    public $ClientAffinity;

    /**
     * @var integer Session persistence time.
     */
    public $ClientAffinityTime;

    /**
     * @var string SSL decryption method.
     */
    public $CertificationType;

    /**
     * @var array Server certificate.
     */
    public $ServerCertificates;

    /**
     * @var array Client certificate.
     */
    public $ClientCaCertificates;

    /**
     * @var string TLS password suite package.
     */
    public $CipherPolicyId;

    /**
     * @var string HTTP version.
     */
    public $HttpVersion;

    /**
     * @var integer Request timeout.
     */
    public $RequestTimeout;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Listener routing type.
     */
    public $ListenerType;

    /**
     * @var string Listener status.
     */
    public $Status;

    /**
     * @var integer Number of terminal node groups belonging to the listener.
     */
    public $EndpointGroupCounts;

    /**
     * @var string Method for obtaining the source IP at Layer 4.
     */
    public $GetRealIpType;

    /**
     * @var integer Connection timeout.
     */
    public $IdleTimeout;

    /**
     * @param string $GlobalAcceleratorId Global acceleration instance ID.
     * @param string $ListenerId Listener ID.
     * @param string $Name Listener name.
     * @param string $Description Listener description.
     * @param string $Protocol Protocol.
     * @param PortRanges $PortRanges Port range.
     * @param boolean $XForwardedForRealIp Whether to enable layer-7 access to source IP mode.
     * @param string $ClientAffinity Enable session persistence.
     * @param integer $ClientAffinityTime Session persistence time.
     * @param string $CertificationType SSL decryption method.
     * @param array $ServerCertificates Server certificate.
     * @param array $ClientCaCertificates Client certificate.
     * @param string $CipherPolicyId TLS password suite package.
     * @param string $HttpVersion HTTP version.
     * @param integer $RequestTimeout Request timeout.
     * @param string $CreateTime Creation time.
     * @param string $ListenerType Listener routing type.
     * @param string $Status Listener status.
     * @param integer $EndpointGroupCounts Number of terminal node groups belonging to the listener.
     * @param string $GetRealIpType Method for obtaining the source IP at Layer 4.
     * @param integer $IdleTimeout Connection timeout.
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PortRanges",$param) and $param["PortRanges"] !== null) {
            $this->PortRanges = new PortRanges();
            $this->PortRanges->deserialize($param["PortRanges"]);
        }

        if (array_key_exists("XForwardedForRealIp",$param) and $param["XForwardedForRealIp"] !== null) {
            $this->XForwardedForRealIp = $param["XForwardedForRealIp"];
        }

        if (array_key_exists("ClientAffinity",$param) and $param["ClientAffinity"] !== null) {
            $this->ClientAffinity = $param["ClientAffinity"];
        }

        if (array_key_exists("ClientAffinityTime",$param) and $param["ClientAffinityTime"] !== null) {
            $this->ClientAffinityTime = $param["ClientAffinityTime"];
        }

        if (array_key_exists("CertificationType",$param) and $param["CertificationType"] !== null) {
            $this->CertificationType = $param["CertificationType"];
        }

        if (array_key_exists("ServerCertificates",$param) and $param["ServerCertificates"] !== null) {
            $this->ServerCertificates = $param["ServerCertificates"];
        }

        if (array_key_exists("ClientCaCertificates",$param) and $param["ClientCaCertificates"] !== null) {
            $this->ClientCaCertificates = $param["ClientCaCertificates"];
        }

        if (array_key_exists("CipherPolicyId",$param) and $param["CipherPolicyId"] !== null) {
            $this->CipherPolicyId = $param["CipherPolicyId"];
        }

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ListenerType",$param) and $param["ListenerType"] !== null) {
            $this->ListenerType = $param["ListenerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndpointGroupCounts",$param) and $param["EndpointGroupCounts"] !== null) {
            $this->EndpointGroupCounts = $param["EndpointGroupCounts"];
        }

        if (array_key_exists("GetRealIpType",$param) and $param["GetRealIpType"] !== null) {
            $this->GetRealIpType = $param["GetRealIpType"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
