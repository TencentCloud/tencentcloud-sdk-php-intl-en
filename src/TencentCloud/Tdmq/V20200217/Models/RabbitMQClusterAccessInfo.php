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
 * @method string getPublicAccessEndpoint() Obtain <p>Cluster public network access address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) Set <p>Cluster public network access address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWebConsoleEndpoint() Obtain <p>Public network access URL of the cluster Web console</p>
 * @method void setWebConsoleEndpoint(string $WebConsoleEndpoint) Set <p>Public network access URL of the cluster Web console</p>
 * @method string getWebConsoleUsername() Obtain <p>Cluster Web console login username</p>
 * @method void setWebConsoleUsername(string $WebConsoleUsername) Set <p>Cluster Web console login username</p>
 * @method string getWebConsolePassword() Obtain <p>Cluster Web console login password</p>
 * @method void setWebConsolePassword(string $WebConsolePassword) Set <p>Cluster Web console login password</p>
 * @method boolean getPublicAccessEndpointStatus() Obtain <p>Abandoned</p>
 * @method void setPublicAccessEndpointStatus(boolean $PublicAccessEndpointStatus) Set <p>Abandoned</p>
 * @method boolean getPublicControlConsoleSwitchStatus() Obtain <p>Deprecated</p>
 * @method void setPublicControlConsoleSwitchStatus(boolean $PublicControlConsoleSwitchStatus) Set <p>Deprecated</p>
 * @method boolean getVpcControlConsoleSwitchStatus() Obtain <p>Abandoned</p>
 * @method void setVpcControlConsoleSwitchStatus(boolean $VpcControlConsoleSwitchStatus) Set <p>Abandoned</p>
 * @method string getVpcWebConsoleEndpoint() Obtain <p>VPC access URL of the Web console</p>
 * @method void setVpcWebConsoleEndpoint(string $VpcWebConsoleEndpoint) Set <p>VPC access URL of the Web console</p>
 * @method string getPublicWebConsoleSwitchStatus() Obtain <p>Status of the public network access switch in the Web console</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: ON</li><li>CREATING: CREATING</li><li>DELETING: DELETING</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
 * @method void setPublicWebConsoleSwitchStatus(string $PublicWebConsoleSwitchStatus) Set <p>Status of the public network access switch in the Web console</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: ON</li><li>CREATING: CREATING</li><li>DELETING: DELETING</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
 * @method string getVpcWebConsoleSwitchStatus() Obtain <p>Web console VPC access switch status</p><p>Enumeration values:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
 * @method void setVpcWebConsoleSwitchStatus(string $VpcWebConsoleSwitchStatus) Set <p>Web console VPC access switch status</p><p>Enumeration values:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
 * @method string getPublicDataStreamStatus() Obtain <p>Public network access point switch state</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failure</li><li>DELETE_FAILURE: Deletion failure</li></ul>
 * @method void setPublicDataStreamStatus(string $PublicDataStreamStatus) Set <p>Public network access point switch state</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failure</li><li>DELETE_FAILURE: Deletion failure</li></ul>
 * @method PrometheusEndpointInfo getPrometheusEndpointInfo() Obtain <p>Prometheus info</p>
 * @method void setPrometheusEndpointInfo(PrometheusEndpointInfo $PrometheusEndpointInfo) Set <p>Prometheus info</p>
 * @method string getWebConsoleDomainEndpoint() Obtain <p>public domain name access point</p>
 * @method void setWebConsoleDomainEndpoint(string $WebConsoleDomainEndpoint) Set <p>public domain name access point</p>
 * @method VpcEndpointInfo getControlPlaneEndpointInfo() Obtain <p>VPC information used by the control plane</p>
 * @method void setControlPlaneEndpointInfo(VpcEndpointInfo $ControlPlaneEndpointInfo) Set <p>VPC information used by the control plane</p>
 * @method string getPublicTlsAccessEndpoint() Obtain <p>TLS encrypted data stream public network access point</p>
 * @method void setPublicTlsAccessEndpoint(string $PublicTlsAccessEndpoint) Set <p>TLS encrypted data stream public network access point</p>
 * @method boolean getPublicIpReused() Obtain <p>Whether to reuse the public IP address</p>
 * @method void setPublicIpReused(boolean $PublicIpReused) Set <p>Whether to reuse the public IP address</p>
 * @method string getPublicWebConsoleErrorMessage() Obtain <p>Error information of public network access operations for the Web console</p>
 * @method void setPublicWebConsoleErrorMessage(string $PublicWebConsoleErrorMessage) Set <p>Error information of public network access operations for the Web console</p>
 * @method string getVpcWebConsoleErrorMessage() Obtain <p>Error information of VPC access operations in the Web console</p>
 * @method void setVpcWebConsoleErrorMessage(string $VpcWebConsoleErrorMessage) Set <p>Error information of VPC access operations in the Web console</p>
 * @method string getPublicDataStreamErrorMessage() Obtain <p>Error information of public network access point operations</p>
 * @method void setPublicDataStreamErrorMessage(string $PublicDataStreamErrorMessage) Set <p>Error information of public network access point operations</p>
 * @method string getPublicStreamAccessEndpoint() Obtain <p>Public network Stream access point</p>
 * @method void setPublicStreamAccessEndpoint(string $PublicStreamAccessEndpoint) Set <p>Public network Stream access point</p>
 */
class RabbitMQClusterAccessInfo extends AbstractModel
{
    /**
     * @var string <p>Cluster public network access address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicAccessEndpoint;

    /**
     * @var string <p>Public network access URL of the cluster Web console</p>
     */
    public $WebConsoleEndpoint;

    /**
     * @var string <p>Cluster Web console login username</p>
     */
    public $WebConsoleUsername;

    /**
     * @var string <p>Cluster Web console login password</p>
     */
    public $WebConsolePassword;

    /**
     * @var boolean <p>Abandoned</p>
     */
    public $PublicAccessEndpointStatus;

    /**
     * @var boolean <p>Deprecated</p>
     */
    public $PublicControlConsoleSwitchStatus;

    /**
     * @var boolean <p>Abandoned</p>
     */
    public $VpcControlConsoleSwitchStatus;

    /**
     * @var string <p>VPC access URL of the Web console</p>
     */
    public $VpcWebConsoleEndpoint;

    /**
     * @var string <p>Status of the public network access switch in the Web console</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: ON</li><li>CREATING: CREATING</li><li>DELETING: DELETING</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
     */
    public $PublicWebConsoleSwitchStatus;

    /**
     * @var string <p>Web console VPC access switch status</p><p>Enumeration values:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
     */
    public $VpcWebConsoleSwitchStatus;

    /**
     * @var string <p>Public network access point switch state</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failure</li><li>DELETE_FAILURE: Deletion failure</li></ul>
     */
    public $PublicDataStreamStatus;

    /**
     * @var PrometheusEndpointInfo <p>Prometheus info</p>
     */
    public $PrometheusEndpointInfo;

    /**
     * @var string <p>public domain name access point</p>
     */
    public $WebConsoleDomainEndpoint;

    /**
     * @var VpcEndpointInfo <p>VPC information used by the control plane</p>
     */
    public $ControlPlaneEndpointInfo;

    /**
     * @var string <p>TLS encrypted data stream public network access point</p>
     */
    public $PublicTlsAccessEndpoint;

    /**
     * @var boolean <p>Whether to reuse the public IP address</p>
     */
    public $PublicIpReused;

    /**
     * @var string <p>Error information of public network access operations for the Web console</p>
     */
    public $PublicWebConsoleErrorMessage;

    /**
     * @var string <p>Error information of VPC access operations in the Web console</p>
     */
    public $VpcWebConsoleErrorMessage;

    /**
     * @var string <p>Error information of public network access point operations</p>
     */
    public $PublicDataStreamErrorMessage;

    /**
     * @var string <p>Public network Stream access point</p>
     */
    public $PublicStreamAccessEndpoint;

    /**
     * @param string $PublicAccessEndpoint <p>Cluster public network access address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WebConsoleEndpoint <p>Public network access URL of the cluster Web console</p>
     * @param string $WebConsoleUsername <p>Cluster Web console login username</p>
     * @param string $WebConsolePassword <p>Cluster Web console login password</p>
     * @param boolean $PublicAccessEndpointStatus <p>Abandoned</p>
     * @param boolean $PublicControlConsoleSwitchStatus <p>Deprecated</p>
     * @param boolean $VpcControlConsoleSwitchStatus <p>Abandoned</p>
     * @param string $VpcWebConsoleEndpoint <p>VPC access URL of the Web console</p>
     * @param string $PublicWebConsoleSwitchStatus <p>Status of the public network access switch in the Web console</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: ON</li><li>CREATING: CREATING</li><li>DELETING: DELETING</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
     * @param string $VpcWebConsoleSwitchStatus <p>Web console VPC access switch status</p><p>Enumeration values:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failed</li><li>DELETE_FAILURE: Deletion failed</li></ul>
     * @param string $PublicDataStreamStatus <p>Public network access point switch state</p><p>Enumeration value:</p><ul><li>OFF: Closed</li><li>ON: Enabled</li><li>CREATING: Creating</li><li>DELETING: Deleting</li><li>CREATE_FAILURE: Creation failure</li><li>DELETE_FAILURE: Deletion failure</li></ul>
     * @param PrometheusEndpointInfo $PrometheusEndpointInfo <p>Prometheus info</p>
     * @param string $WebConsoleDomainEndpoint <p>public domain name access point</p>
     * @param VpcEndpointInfo $ControlPlaneEndpointInfo <p>VPC information used by the control plane</p>
     * @param string $PublicTlsAccessEndpoint <p>TLS encrypted data stream public network access point</p>
     * @param boolean $PublicIpReused <p>Whether to reuse the public IP address</p>
     * @param string $PublicWebConsoleErrorMessage <p>Error information of public network access operations for the Web console</p>
     * @param string $VpcWebConsoleErrorMessage <p>Error information of VPC access operations in the Web console</p>
     * @param string $PublicDataStreamErrorMessage <p>Error information of public network access point operations</p>
     * @param string $PublicStreamAccessEndpoint <p>Public network Stream access point</p>
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

        if (array_key_exists("PublicWebConsoleErrorMessage",$param) and $param["PublicWebConsoleErrorMessage"] !== null) {
            $this->PublicWebConsoleErrorMessage = $param["PublicWebConsoleErrorMessage"];
        }

        if (array_key_exists("VpcWebConsoleErrorMessage",$param) and $param["VpcWebConsoleErrorMessage"] !== null) {
            $this->VpcWebConsoleErrorMessage = $param["VpcWebConsoleErrorMessage"];
        }

        if (array_key_exists("PublicDataStreamErrorMessage",$param) and $param["PublicDataStreamErrorMessage"] !== null) {
            $this->PublicDataStreamErrorMessage = $param["PublicDataStreamErrorMessage"];
        }

        if (array_key_exists("PublicStreamAccessEndpoint",$param) and $param["PublicStreamAccessEndpoint"] !== null) {
            $this->PublicStreamAccessEndpoint = $param["PublicStreamAccessEndpoint"];
        }
    }
}
