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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getPublicAccessEndpoint() Obtain 
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) Set 
 * @method string getWebConsoleEndpoint() Obtain 
 * @method void setWebConsoleEndpoint(string $WebConsoleEndpoint) Set 
 * @method string getWebConsoleUsername() Obtain 
 * @method void setWebConsoleUsername(string $WebConsoleUsername) Set 
 * @method string getWebConsolePassword() Obtain 
 * @method void setWebConsolePassword(string $WebConsolePassword) Set 
 * @method boolean getPublicAccessEndpointStatus() Obtain 
 * @method void setPublicAccessEndpointStatus(boolean $PublicAccessEndpointStatus) Set 
 * @method boolean getPublicControlConsoleSwitchStatus() Obtain 
 * @method void setPublicControlConsoleSwitchStatus(boolean $PublicControlConsoleSwitchStatus) Set 
 * @method boolean getVpcControlConsoleSwitchStatus() Obtain 
 * @method void setVpcControlConsoleSwitchStatus(boolean $VpcControlConsoleSwitchStatus) Set 
 * @method string getVpcWebConsoleEndpoint() Obtain 
 * @method void setVpcWebConsoleEndpoint(string $VpcWebConsoleEndpoint) Set 
 * @method string getPublicWebConsoleSwitchStatus() Obtain Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
 * @method void setPublicWebConsoleSwitchStatus(string $PublicWebConsoleSwitchStatus) Set Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
 * @method string getVpcWebConsoleSwitchStatus() Obtain Vpc console switch state. example value.
OFF/ON/CREATING/DELETING
 * @method void setVpcWebConsoleSwitchStatus(string $VpcWebConsoleSwitchStatus) Set Vpc console switch state. example value.
OFF/ON/CREATING/DELETING
 * @method string getPublicDataStreamStatus() Obtain Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
 * @method void setPublicDataStreamStatus(string $PublicDataStreamStatus) Set Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
 * @method PrometheusEndpointInfo getPrometheusEndpointInfo() Obtain Prometheus information.
 * @method void setPrometheusEndpointInfo(PrometheusEndpointInfo $PrometheusEndpointInfo) Set Prometheus information.
 * @method string getWebConsoleDomainEndpoint() Obtain Public domain name access point.
 * @method void setWebConsoleDomainEndpoint(string $WebConsoleDomainEndpoint) Set Public domain name access point.
 * @method VpcEndpointInfo getControlPlaneEndpointInfo() Obtain VPC information used by the control plane.
 * @method void setControlPlaneEndpointInfo(VpcEndpointInfo $ControlPlaneEndpointInfo) Set VPC information used by the control plane.
 * @method string getPublicTlsAccessEndpoint() Obtain Encrypted TLS data stream public network access point.
 * @method void setPublicTlsAccessEndpoint(string $PublicTlsAccessEndpoint) Set Encrypted TLS data stream public network access point.
 * @method boolean getPublicIpReused() Obtain Specifies whether to reuse the public IP address.
 * @method void setPublicIpReused(boolean $PublicIpReused) Set Specifies whether to reuse the public IP address.
 */
class RabbitMQClusterAccessInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $PublicAccessEndpoint;

    /**
     * @var string 
     */
    public $WebConsoleEndpoint;

    /**
     * @var string 
     */
    public $WebConsoleUsername;

    /**
     * @var string 
     */
    public $WebConsolePassword;

    /**
     * @var boolean 
     */
    public $PublicAccessEndpointStatus;

    /**
     * @var boolean 
     */
    public $PublicControlConsoleSwitchStatus;

    /**
     * @var boolean 
     */
    public $VpcControlConsoleSwitchStatus;

    /**
     * @var string 
     */
    public $VpcWebConsoleEndpoint;

    /**
     * @var string Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
     */
    public $PublicWebConsoleSwitchStatus;

    /**
     * @var string Vpc console switch state. example value.
OFF/ON/CREATING/DELETING
     */
    public $VpcWebConsoleSwitchStatus;

    /**
     * @var string Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
     */
    public $PublicDataStreamStatus;

    /**
     * @var PrometheusEndpointInfo Prometheus information.
     */
    public $PrometheusEndpointInfo;

    /**
     * @var string Public domain name access point.
     */
    public $WebConsoleDomainEndpoint;

    /**
     * @var VpcEndpointInfo VPC information used by the control plane.
     */
    public $ControlPlaneEndpointInfo;

    /**
     * @var string Encrypted TLS data stream public network access point.
     */
    public $PublicTlsAccessEndpoint;

    /**
     * @var boolean Specifies whether to reuse the public IP address.
     */
    public $PublicIpReused;

    /**
     * @param string $PublicAccessEndpoint 
     * @param string $WebConsoleEndpoint 
     * @param string $WebConsoleUsername 
     * @param string $WebConsolePassword 
     * @param boolean $PublicAccessEndpointStatus 
     * @param boolean $PublicControlConsoleSwitchStatus 
     * @param boolean $VpcControlConsoleSwitchStatus 
     * @param string $VpcWebConsoleEndpoint 
     * @param string $PublicWebConsoleSwitchStatus Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
     * @param string $VpcWebConsoleSwitchStatus Vpc console switch state. example value.
OFF/ON/CREATING/DELETING
     * @param string $PublicDataStreamStatus Status of the public network access point in the console. Valid values: OFF, ON, CREATING, and DELETING.
     * @param PrometheusEndpointInfo $PrometheusEndpointInfo Prometheus information.
     * @param string $WebConsoleDomainEndpoint Public domain name access point.
     * @param VpcEndpointInfo $ControlPlaneEndpointInfo VPC information used by the control plane.
     * @param string $PublicTlsAccessEndpoint Encrypted TLS data stream public network access point.
     * @param boolean $PublicIpReused Specifies whether to reuse the public IP address.
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
        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("WebConsoleEndpoint",$param) and $param["WebConsoleEndpoint"] !== null) {
            $this->WebConsoleEndpoint = $param["WebConsoleEndpoint"];
        }

        if (array_key_exists("WebConsoleUsername",$param) and $param["WebConsoleUsername"] !== null) {
            $this->WebConsoleUsername = $param["WebConsoleUsername"];
        }

        if (array_key_exists("WebConsolePassword",$param) and $param["WebConsolePassword"] !== null) {
            $this->WebConsolePassword = $param["WebConsolePassword"];
        }

        if (array_key_exists("PublicAccessEndpointStatus",$param) and $param["PublicAccessEndpointStatus"] !== null) {
            $this->PublicAccessEndpointStatus = $param["PublicAccessEndpointStatus"];
        }

        if (array_key_exists("PublicControlConsoleSwitchStatus",$param) and $param["PublicControlConsoleSwitchStatus"] !== null) {
            $this->PublicControlConsoleSwitchStatus = $param["PublicControlConsoleSwitchStatus"];
        }

        if (array_key_exists("VpcControlConsoleSwitchStatus",$param) and $param["VpcControlConsoleSwitchStatus"] !== null) {
            $this->VpcControlConsoleSwitchStatus = $param["VpcControlConsoleSwitchStatus"];
        }

        if (array_key_exists("VpcWebConsoleEndpoint",$param) and $param["VpcWebConsoleEndpoint"] !== null) {
            $this->VpcWebConsoleEndpoint = $param["VpcWebConsoleEndpoint"];
        }

        if (array_key_exists("PublicWebConsoleSwitchStatus",$param) and $param["PublicWebConsoleSwitchStatus"] !== null) {
            $this->PublicWebConsoleSwitchStatus = $param["PublicWebConsoleSwitchStatus"];
        }

        if (array_key_exists("VpcWebConsoleSwitchStatus",$param) and $param["VpcWebConsoleSwitchStatus"] !== null) {
            $this->VpcWebConsoleSwitchStatus = $param["VpcWebConsoleSwitchStatus"];
        }

        if (array_key_exists("PublicDataStreamStatus",$param) and $param["PublicDataStreamStatus"] !== null) {
            $this->PublicDataStreamStatus = $param["PublicDataStreamStatus"];
        }

        if (array_key_exists("PrometheusEndpointInfo",$param) and $param["PrometheusEndpointInfo"] !== null) {
            $this->PrometheusEndpointInfo = new PrometheusEndpointInfo();
            $this->PrometheusEndpointInfo->deserialize($param["PrometheusEndpointInfo"]);
        }

        if (array_key_exists("WebConsoleDomainEndpoint",$param) and $param["WebConsoleDomainEndpoint"] !== null) {
            $this->WebConsoleDomainEndpoint = $param["WebConsoleDomainEndpoint"];
        }

        if (array_key_exists("ControlPlaneEndpointInfo",$param) and $param["ControlPlaneEndpointInfo"] !== null) {
            $this->ControlPlaneEndpointInfo = new VpcEndpointInfo();
            $this->ControlPlaneEndpointInfo->deserialize($param["ControlPlaneEndpointInfo"]);
        }

        if (array_key_exists("PublicTlsAccessEndpoint",$param) and $param["PublicTlsAccessEndpoint"] !== null) {
            $this->PublicTlsAccessEndpoint = $param["PublicTlsAccessEndpoint"];
        }

        if (array_key_exists("PublicIpReused",$param) and $param["PublicIpReused"] !== null) {
            $this->PublicIpReused = $param["PublicIpReused"];
        }
    }
}
