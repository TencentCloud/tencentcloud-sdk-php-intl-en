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
 * RabbitMQ Cluster Access Information
 *
 * @method string getPublicAccessEndpoint() Obtain Cluster Public Network Access Address
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) Set Cluster Public Network Access Address
 * @method string getWebConsoleEndpoint() Obtain Cluster Console Access Address
 * @method void setWebConsoleEndpoint(string $WebConsoleEndpoint) Set Cluster Console Access Address
 * @method string getWebConsoleUsername() Obtain Cluster Console Login Username
 * @method void setWebConsoleUsername(string $WebConsoleUsername) Set Cluster Console Login Username
 * @method string getWebConsolePassword() Obtain Cluster Console Login Password
 * @method void setWebConsolePassword(string $WebConsolePassword) Set Cluster Console Login Password
 * @method boolean getPublicAccessEndpointStatus() Obtain Deprecated
 * @method void setPublicAccessEndpointStatus(boolean $PublicAccessEndpointStatus) Set Deprecated
 * @method boolean getPublicControlConsoleSwitchStatus() Obtain Deprecated
 * @method void setPublicControlConsoleSwitchStatus(boolean $PublicControlConsoleSwitchStatus) Set Deprecated
 * @method boolean getVpcControlConsoleSwitchStatus() Obtain Deprecated
 * @method void setVpcControlConsoleSwitchStatus(boolean $VpcControlConsoleSwitchStatus) Set Deprecated
 * @method string getVpcWebConsoleEndpoint() Obtain Vpc management console access address, example value: http://1.1.1.1:15672
 * @method void setVpcWebConsoleEndpoint(string $VpcWebConsoleEndpoint) Set Vpc management console access address, example value: http://1.1.1.1:15672
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
     * @var string Cluster Public Network Access Address
     */
    public $PublicAccessEndpoint;

    /**
     * @var string Cluster Console Access Address
     */
    public $WebConsoleEndpoint;

    /**
     * @var string Cluster Console Login Username
     */
    public $WebConsoleUsername;

    /**
     * @var string Cluster Console Login Password
     */
    public $WebConsolePassword;

    /**
     * @var boolean Deprecated
     */
    public $PublicAccessEndpointStatus;

    /**
     * @var boolean Deprecated
     */
    public $PublicControlConsoleSwitchStatus;

    /**
     * @var boolean Deprecated
     */
    public $VpcControlConsoleSwitchStatus;

    /**
     * @var string Vpc management console access address, example value: http://1.1.1.1:15672
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
     * @param string $PublicAccessEndpoint Cluster Public Network Access Address
     * @param string $WebConsoleEndpoint Cluster Console Access Address
     * @param string $WebConsoleUsername Cluster Console Login Username
     * @param string $WebConsolePassword Cluster Console Login Password
     * @param boolean $PublicAccessEndpointStatus Deprecated
     * @param boolean $PublicControlConsoleSwitchStatus Deprecated
     * @param boolean $VpcControlConsoleSwitchStatus Deprecated
     * @param string $VpcWebConsoleEndpoint Vpc management console access address, example value: http://1.1.1.1:15672
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
