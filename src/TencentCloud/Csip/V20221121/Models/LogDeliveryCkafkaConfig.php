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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log shipping information configuration.
 *
 * @method integer getVipType() Obtain <p>Access type</p>
 * @method void setVipType(integer $VipType) Set <p>Access type</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getVip() Obtain <p>Virtual IP VipType is 7, valid</p>
 * @method void setVip(string $Vip) Set <p>Virtual IP VipType is 7, valid</p>
 * @method string getVport() Obtain <p>The virtual port VipType is 7 valid</p>
 * @method void setVport(string $Vport) Set <p>The virtual port VipType is 7 valid</p>
 * @method string getDomain() Obtain <p>The domain name is valid when VipType is 1.</p>
 * @method void setDomain(string $Domain) Set <p>The domain name is valid when VipType is 1.</p>
 * @method string getDomainPort() Obtain <p>Domain port VipType is 1 and valid</p>
 * @method void setDomainPort(string $DomainPort) Set <p>Domain port VipType is 1 and valid</p>
 * @method string getRegionId() Obtain <p>Region</p>
 * @method void setRegionId(string $RegionId) Set <p>Region</p>
 * @method string getVpcId() Obtain <p>Instance vpc</p>
 * @method void setVpcId(string $VpcId) Set <p>Instance vpc</p>
 * @method string getSubnetId() Obtain <p>Instance subnet</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Instance subnet</p>
 * @method integer getHealthy() Obtain <p>Instance health status. 1: healthy, 2: warning, 3: abnormal, 4: instance does not exist</p>
 * @method void setHealthy(integer $Healthy) Set <p>Instance health status. 1: healthy, 2: warning, 3: abnormal, 4: instance does not exist</p>
 * @method integer getLogType() Obtain <p>Log type.</p>
 * @method void setLogType(integer $LogType) Set <p>Log type.</p>
 * @method string getTopicId() Obtain <p>Delivered Topic ID</p>
 * @method void setTopicId(string $TopicId) Set <p>Delivered Topic ID</p>
 * @method string getTopicName() Obtain <p>Delivered topicname</p>
 * @method void setTopicName(string $TopicName) Set <p>Delivered topicname</p>
 * @method integer getStatus() Obtain <p>Delivery status</p>
 * @method void setStatus(integer $Status) Set <p>Delivery status</p>
 * @method string getStatusMessages() Obtain <p>Status information</p>
 * @method void setStatusMessages(string $StatusMessages) Set <p>Status information</p>
 * @method integer getIsOpen() Obtain <p>Enable or disable. Delivery status: 1 for enabled and 0 for disabled. It is enabled by default, but disabled if there is no topic.</p>
 * @method void setIsOpen(integer $IsOpen) Set <p>Enable or disable. Delivery status: 1 for enabled and 0 for disabled. It is enabled by default, but disabled if there is no topic.</p>
 */
class LogDeliveryCkafkaConfig extends AbstractModel
{
    /**
     * @var integer <p>Access type</p>
     */
    public $VipType;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Virtual IP VipType is 7, valid</p>
     */
    public $Vip;

    /**
     * @var string <p>The virtual port VipType is 7 valid</p>
     */
    public $Vport;

    /**
     * @var string <p>The domain name is valid when VipType is 1.</p>
     */
    public $Domain;

    /**
     * @var string <p>Domain port VipType is 1 and valid</p>
     */
    public $DomainPort;

    /**
     * @var string <p>Region</p>
     */
    public $RegionId;

    /**
     * @var string <p>Instance vpc</p>
     */
    public $VpcId;

    /**
     * @var string <p>Instance subnet</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Instance health status. 1: healthy, 2: warning, 3: abnormal, 4: instance does not exist</p>
     */
    public $Healthy;

    /**
     * @var integer <p>Log type.</p>
     */
    public $LogType;

    /**
     * @var string <p>Delivered Topic ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>Delivered topicname</p>
     */
    public $TopicName;

    /**
     * @var integer <p>Delivery status</p>
     */
    public $Status;

    /**
     * @var string <p>Status information</p>
     */
    public $StatusMessages;

    /**
     * @var integer <p>Enable or disable. Delivery status: 1 for enabled and 0 for disabled. It is enabled by default, but disabled if there is no topic.</p>
     */
    public $IsOpen;

    /**
     * @param integer $VipType <p>Access type</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $Vip <p>Virtual IP VipType is 7, valid</p>
     * @param string $Vport <p>The virtual port VipType is 7 valid</p>
     * @param string $Domain <p>The domain name is valid when VipType is 1.</p>
     * @param string $DomainPort <p>Domain port VipType is 1 and valid</p>
     * @param string $RegionId <p>Region</p>
     * @param string $VpcId <p>Instance vpc</p>
     * @param string $SubnetId <p>Instance subnet</p>
     * @param integer $Healthy <p>Instance health status. 1: healthy, 2: warning, 3: abnormal, 4: instance does not exist</p>
     * @param integer $LogType <p>Log type.</p>
     * @param string $TopicId <p>Delivered Topic ID</p>
     * @param string $TopicName <p>Delivered topicname</p>
     * @param integer $Status <p>Delivery status</p>
     * @param string $StatusMessages <p>Status information</p>
     * @param integer $IsOpen <p>Enable or disable. Delivery status: 1 for enabled and 0 for disabled. It is enabled by default, but disabled if there is no topic.</p>
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusMessages",$param) and $param["StatusMessages"] !== null) {
            $this->StatusMessages = $param["StatusMessages"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }
    }
}
