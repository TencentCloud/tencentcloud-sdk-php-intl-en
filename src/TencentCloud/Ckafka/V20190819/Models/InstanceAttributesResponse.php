<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned result object of instance attributes
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method array getVipList() Obtain VIP list information of access point
 * @method void setVipList(array $VipList) Set VIP list information of access point
 * @method string getVip() Obtain Virtual IP
 * @method void setVip(string $Vip) Set Virtual IP
 * @method string getVport() Obtain Virtual port
 * @method void setVport(string $Vport) Set Virtual port
 * @method integer getStatus() Obtain Instance status. 0: creating, 1: running, 2: deleting
 * @method void setStatus(integer $Status) Set Instance status. 0: creating, 1: running, 2: deleting
 * @method integer getBandwidth() Obtain Instance bandwidth in Mbps
 * @method void setBandwidth(integer $Bandwidth) Set Instance bandwidth in Mbps
 * @method integer getDiskSize() Obtain Instance storage capacity in GB
 * @method void setDiskSize(integer $DiskSize) Set Instance storage capacity in GB
 * @method integer getZoneId() Obtain AZ
 * @method void setZoneId(integer $ZoneId) Set AZ
 * @method string getVpcId() Obtain VPC ID. If this parameter is empty, it means the basic network
 * @method void setVpcId(string $VpcId) Set VPC ID. If this parameter is empty, it means the basic network
 * @method string getSubnetId() Obtain Subnet ID. If this parameter is empty, it means the basic network
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. If this parameter is empty, it means the basic network
 * @method integer getHealthy() Obtain Instance health status. 1: healthy, 2: alarmed, 3: exceptional
 * @method void setHealthy(integer $Healthy) Set Instance health status. 1: healthy, 2: alarmed, 3: exceptional
 * @method string getHealthyMessage() Obtain Instance health information. Currently, the disk utilization is displayed with a maximum length of 256
 * @method void setHealthyMessage(string $HealthyMessage) Set Instance health information. Currently, the disk utilization is displayed with a maximum length of 256
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method integer getMsgRetentionTime() Obtain Message retention period in minutes
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set Message retention period in minutes
 * @method InstanceConfigDO getConfig() Obtain Configuration for automatic topic creation. If this field is empty, it means that automatic creation is not enabled
 * @method void setConfig(InstanceConfigDO $Config) Set Configuration for automatic topic creation. If this field is empty, it means that automatic creation is not enabled
 * @method integer getRemainderPartitions() Obtain Number of remaining creatable partitions
 * @method void setRemainderPartitions(integer $RemainderPartitions) Set Number of remaining creatable partitions
 * @method integer getRemainderTopics() Obtain Number of remaining creatable topics
 * @method void setRemainderTopics(integer $RemainderTopics) Set Number of remaining creatable topics
 * @method integer getCreatedPartitions() Obtain Number of partitions already created
 * @method void setCreatedPartitions(integer $CreatedPartitions) Set Number of partitions already created
 * @method integer getCreatedTopics() Obtain Number of topics already created
 * @method void setCreatedTopics(integer $CreatedTopics) Set Number of topics already created
 * @method array getTags() Obtain Tag array
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag array
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getExpireTime() Obtain Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getZoneIds() Obtain Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIds(array $ZoneIds) Set Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxGroupNum() Obtain Maximum number of groups
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxGroupNum(integer $MaxGroupNum) Set Maximum number of groups
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCvm() Obtain Offering type. `0`: Standard Edition; `1`: Professional Edition
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setCvm(integer $Cvm) Set Offering type. `0`: Standard Edition; `1`: Professional Edition
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getInstanceType() Obtain Type.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setInstanceType(string $InstanceType) Set Type.
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getFeatures() Obtain Features supported by the instance. `FEATURE_SUBNET_ACL` indicates that the ACL policy supports setting subnets. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFeatures(array $Features) Set Features supported by the instance. `FEATURE_SUBNET_ACL` indicates that the ACL policy supports setting subnets. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DynamicRetentionTime getRetentionTimeConfig() Obtain Dynamic message retention policy
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setRetentionTimeConfig(DynamicRetentionTime $RetentionTimeConfig) Set Dynamic message retention policy
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getMaxConnection() Obtain Maximum number of connections
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxConnection(integer $MaxConnection) Set Maximum number of connections
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPublicNetwork() Obtain Public network bandwidth
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicNetwork(integer $PublicNetwork) Set Public network bandwidth
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDeleteRouteTimestamp() Obtain Time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeleteRouteTimestamp(string $DeleteRouteTimestamp) Set Time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRemainingPartitions() Obtain Number of remaining creatable partitions
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemainingPartitions(integer $RemainingPartitions) Set Number of remaining creatable partitions
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRemainingTopics() Obtain Number of remaining creatable topics
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemainingTopics(integer $RemainingTopics) Set Number of remaining creatable topics
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method DynamicDiskConfig getDynamicDiskConfig() Obtain Dynamic disk expansion policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) Set Dynamic disk expansion policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class InstanceAttributesResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var array VIP list information of access point
     */
    public $VipList;

    /**
     * @var string Virtual IP
     */
    public $Vip;

    /**
     * @var string Virtual port
     */
    public $Vport;

    /**
     * @var integer Instance status. 0: creating, 1: running, 2: deleting
     */
    public $Status;

    /**
     * @var integer Instance bandwidth in Mbps
     */
    public $Bandwidth;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $DiskSize;

    /**
     * @var integer AZ
     */
    public $ZoneId;

    /**
     * @var string VPC ID. If this parameter is empty, it means the basic network
     */
    public $VpcId;

    /**
     * @var string Subnet ID. If this parameter is empty, it means the basic network
     */
    public $SubnetId;

    /**
     * @var integer Instance health status. 1: healthy, 2: alarmed, 3: exceptional
     */
    public $Healthy;

    /**
     * @var string Instance health information. Currently, the disk utilization is displayed with a maximum length of 256
     */
    public $HealthyMessage;

    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var integer Message retention period in minutes
     */
    public $MsgRetentionTime;

    /**
     * @var InstanceConfigDO Configuration for automatic topic creation. If this field is empty, it means that automatic creation is not enabled
     */
    public $Config;

    /**
     * @var integer Number of remaining creatable partitions
     */
    public $RemainderPartitions;

    /**
     * @var integer Number of remaining creatable topics
     */
    public $RemainderTopics;

    /**
     * @var integer Number of partitions already created
     */
    public $CreatedPartitions;

    /**
     * @var integer Number of topics already created
     */
    public $CreatedTopics;

    /**
     * @var array Tag array
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var array Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIds;

    /**
     * @var string Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var integer Maximum number of groups
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxGroupNum;

    /**
     * @var integer Offering type. `0`: Standard Edition; `1`: Professional Edition
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $Cvm;

    /**
     * @var string Type.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $InstanceType;

    /**
     * @var array Features supported by the instance. `FEATURE_SUBNET_ACL` indicates that the ACL policy supports setting subnets. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Features;

    /**
     * @var DynamicRetentionTime Dynamic message retention policy
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $RetentionTimeConfig;

    /**
     * @var integer Maximum number of connections
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxConnection;

    /**
     * @var integer Public network bandwidth
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicNetwork;

    /**
     * @var string Time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeleteRouteTimestamp;

    /**
     * @var integer Number of remaining creatable partitions
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RemainingPartitions;

    /**
     * @var integer Number of remaining creatable topics
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RemainingTopics;

    /**
     * @var DynamicDiskConfig Dynamic disk expansion policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DynamicDiskConfig;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param array $VipList VIP list information of access point
     * @param string $Vip Virtual IP
     * @param string $Vport Virtual port
     * @param integer $Status Instance status. 0: creating, 1: running, 2: deleting
     * @param integer $Bandwidth Instance bandwidth in Mbps
     * @param integer $DiskSize Instance storage capacity in GB
     * @param integer $ZoneId AZ
     * @param string $VpcId VPC ID. If this parameter is empty, it means the basic network
     * @param string $SubnetId Subnet ID. If this parameter is empty, it means the basic network
     * @param integer $Healthy Instance health status. 1: healthy, 2: alarmed, 3: exceptional
     * @param string $HealthyMessage Instance health information. Currently, the disk utilization is displayed with a maximum length of 256
     * @param integer $CreateTime Creation time
     * @param integer $MsgRetentionTime Message retention period in minutes
     * @param InstanceConfigDO $Config Configuration for automatic topic creation. If this field is empty, it means that automatic creation is not enabled
     * @param integer $RemainderPartitions Number of remaining creatable partitions
     * @param integer $RemainderTopics Number of remaining creatable topics
     * @param integer $CreatedPartitions Number of partitions already created
     * @param integer $CreatedTopics Number of topics already created
     * @param array $Tags Tag array
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ExpireTime Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneIds Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Version Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxGroupNum Maximum number of groups
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Cvm Offering type. `0`: Standard Edition; `1`: Professional Edition
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $InstanceType Type.
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $Features Features supported by the instance. `FEATURE_SUBNET_ACL` indicates that the ACL policy supports setting subnets. 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DynamicRetentionTime $RetentionTimeConfig Dynamic message retention policy
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $MaxConnection Maximum number of connections
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PublicNetwork Public network bandwidth
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DeleteRouteTimestamp Time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RemainingPartitions Number of remaining creatable partitions
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RemainingTopics Number of remaining creatable topics
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param DynamicDiskConfig $DynamicDiskConfig Dynamic disk expansion policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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

        if (array_key_exists("HealthyMessage",$param) and $param["HealthyMessage"] !== null) {
            $this->HealthyMessage = $param["HealthyMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new InstanceConfigDO();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("RemainderPartitions",$param) and $param["RemainderPartitions"] !== null) {
            $this->RemainderPartitions = $param["RemainderPartitions"];
        }

        if (array_key_exists("RemainderTopics",$param) and $param["RemainderTopics"] !== null) {
            $this->RemainderTopics = $param["RemainderTopics"];
        }

        if (array_key_exists("CreatedPartitions",$param) and $param["CreatedPartitions"] !== null) {
            $this->CreatedPartitions = $param["CreatedPartitions"];
        }

        if (array_key_exists("CreatedTopics",$param) and $param["CreatedTopics"] !== null) {
            $this->CreatedTopics = $param["CreatedTopics"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("MaxGroupNum",$param) and $param["MaxGroupNum"] !== null) {
            $this->MaxGroupNum = $param["MaxGroupNum"];
        }

        if (array_key_exists("Cvm",$param) and $param["Cvm"] !== null) {
            $this->Cvm = $param["Cvm"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("RetentionTimeConfig",$param) and $param["RetentionTimeConfig"] !== null) {
            $this->RetentionTimeConfig = new DynamicRetentionTime();
            $this->RetentionTimeConfig->deserialize($param["RetentionTimeConfig"]);
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("DeleteRouteTimestamp",$param) and $param["DeleteRouteTimestamp"] !== null) {
            $this->DeleteRouteTimestamp = $param["DeleteRouteTimestamp"];
        }

        if (array_key_exists("RemainingPartitions",$param) and $param["RemainingPartitions"] !== null) {
            $this->RemainingPartitions = $param["RemainingPartitions"];
        }

        if (array_key_exists("RemainingTopics",$param) and $param["RemainingTopics"] !== null) {
            $this->RemainingTopics = $param["RemainingTopics"];
        }

        if (array_key_exists("DynamicDiskConfig",$param) and $param["DynamicDiskConfig"] !== null) {
            $this->DynamicDiskConfig = new DynamicDiskConfig();
            $this->DynamicDiskConfig->deserialize($param["DynamicDiskConfig"]);
        }
    }
}
