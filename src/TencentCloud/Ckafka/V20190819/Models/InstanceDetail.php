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
 * Instance details
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getVip() Obtain Instance VIP information
 * @method void setVip(string $Vip) Set Instance VIP information
 * @method string getVport() Obtain Instance port information
 * @method void setVport(string $Vport) Set Instance port information
 * @method array getVipList() Obtain Virtual IP list
 * @method void setVipList(array $VipList) Set Virtual IP list
 * @method integer getStatus() Obtain Instance status. 0: creating, 1: running, 2: deleting, 5: isolated, -1: creation failed
 * @method void setStatus(integer $Status) Set Instance status. 0: creating, 1: running, 2: deleting, 5: isolated, -1: creation failed
 * @method integer getBandwidth() Obtain Instance bandwidth in Mbps
 * @method void setBandwidth(integer $Bandwidth) Set Instance bandwidth in Mbps
 * @method integer getDiskSize() Obtain Instance storage capacity in GB
 * @method void setDiskSize(integer $DiskSize) Set Instance storage capacity in GB
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method string getVpcId() Obtain vpcId. If this parameter is empty, it means the basic network
 * @method void setVpcId(string $VpcId) Set vpcId. If this parameter is empty, it means the basic network
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getRenewFlag() Obtain Whether to renew the instance automatically, which is an int-type enumerated value. 1: yes, 2: no
 * @method void setRenewFlag(integer $RenewFlag) Set Whether to renew the instance automatically, which is an int-type enumerated value. 1: yes, 2: no
 * @method integer getHealthy() Obtain Instance status. An int-type value will be returned. `0`: Healthy, `1`: Alarmed, `2`: Exceptional
 * @method void setHealthy(integer $Healthy) Set Instance status. An int-type value will be returned. `0`: Healthy, `1`: Alarmed, `2`: Exceptional
 * @method string getHealthyMessage() Obtain Instance status information
 * @method void setHealthyMessage(string $HealthyMessage) Set Instance status information
 * @method integer getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(integer $CreateTime) Set Instance creation time
 * @method integer getExpireTime() Obtain Instance expiration time
 * @method void setExpireTime(integer $ExpireTime) Set Instance expiration time
 * @method integer getIsInternal() Obtain Whether it is an internal customer. 1: yes
 * @method void setIsInternal(integer $IsInternal) Set Whether it is an internal customer. 1: yes
 * @method integer getTopicNum() Obtain Number of topics
 * @method void setTopicNum(integer $TopicNum) Set Number of topics
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 * @method string getVersion() Obtain Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getZoneIds() Obtain Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIds(array $ZoneIds) Set Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCvm() Obtain CKafka sale type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCvm(integer $Cvm) Set CKafka sale type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain CKafka instance type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set CKafka instance type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain Disk type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getMaxTopicNumber() Obtain Maximum number of topics for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setMaxTopicNumber(integer $MaxTopicNumber) Set Maximum number of topics for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getMaxPartitionNumber() Obtain Maximum number of partitions for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setMaxPartitionNumber(integer $MaxPartitionNumber) Set Maximum number of partitions for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getRebalanceTime() Obtain Time of scheduled upgrade
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setRebalanceTime(string $RebalanceTime) Set Time of scheduled upgrade
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getPartitionNumber() Obtain Number of partitions in the current instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPartitionNumber(integer $PartitionNumber) Set Number of partitions in the current instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPublicNetworkChargeType() Obtain Public network bandwidth type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublicNetworkChargeType(string $PublicNetworkChargeType) Set Public network bandwidth type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPublicNetwork() Obtain Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublicNetwork(integer $PublicNetwork) Set Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getClusterType() Obtain Instance type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterType(string $ClusterType) Set Instance type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFeatures() Obtain Instance feature list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFeatures(array $Features) Set Instance feature list.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceDetail extends AbstractModel
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
     * @var string Instance VIP information
     */
    public $Vip;

    /**
     * @var string Instance port information
     */
    public $Vport;

    /**
     * @var array Virtual IP list
     */
    public $VipList;

    /**
     * @var integer Instance status. 0: creating, 1: running, 2: deleting, 5: isolated, -1: creation failed
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
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var string vpcId. If this parameter is empty, it means the basic network
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Whether to renew the instance automatically, which is an int-type enumerated value. 1: yes, 2: no
     */
    public $RenewFlag;

    /**
     * @var integer Instance status. An int-type value will be returned. `0`: Healthy, `1`: Alarmed, `2`: Exceptional
     */
    public $Healthy;

    /**
     * @var string Instance status information
     */
    public $HealthyMessage;

    /**
     * @var integer Instance creation time
     */
    public $CreateTime;

    /**
     * @var integer Instance expiration time
     */
    public $ExpireTime;

    /**
     * @var integer Whether it is an internal customer. 1: yes
     */
    public $IsInternal;

    /**
     * @var integer Number of topics
     */
    public $TopicNum;

    /**
     * @var array Tag
     */
    public $Tags;

    /**
     * @var string Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var array Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIds;

    /**
     * @var integer CKafka sale type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cvm;

    /**
     * @var string CKafka instance type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Disk type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var integer Maximum number of topics for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $MaxTopicNumber;

    /**
     * @var integer Maximum number of partitions for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $MaxPartitionNumber;

    /**
     * @var string Time of scheduled upgrade
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $RebalanceTime;

    /**
     * @var integer Number of partitions in the current instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PartitionNumber;

    /**
     * @var string Public network bandwidth type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublicNetworkChargeType;

    /**
     * @var integer Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublicNetwork;

    /**
     * @var string Instance type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterType;

    /**
     * @var array Instance feature list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Features;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Vip Instance VIP information
     * @param string $Vport Instance port information
     * @param array $VipList Virtual IP list
     * @param integer $Status Instance status. 0: creating, 1: running, 2: deleting, 5: isolated, -1: creation failed
     * @param integer $Bandwidth Instance bandwidth in Mbps
     * @param integer $DiskSize Instance storage capacity in GB
     * @param integer $ZoneId AZ ID
     * @param string $VpcId vpcId. If this parameter is empty, it means the basic network
     * @param string $SubnetId Subnet ID
     * @param integer $RenewFlag Whether to renew the instance automatically, which is an int-type enumerated value. 1: yes, 2: no
     * @param integer $Healthy Instance status. An int-type value will be returned. `0`: Healthy, `1`: Alarmed, `2`: Exceptional
     * @param string $HealthyMessage Instance status information
     * @param integer $CreateTime Instance creation time
     * @param integer $ExpireTime Instance expiration time
     * @param integer $IsInternal Whether it is an internal customer. 1: yes
     * @param integer $TopicNum Number of topics
     * @param array $Tags Tag
     * @param string $Version Kafka version information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneIds Cross-AZ
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Cvm CKafka sale type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType CKafka instance type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $DiskType Disk type
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $MaxTopicNumber Maximum number of topics for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $MaxPartitionNumber Maximum number of partitions for the current instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $RebalanceTime Time of scheduled upgrade
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $PartitionNumber Number of partitions in the current instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PublicNetworkChargeType Public network bandwidth type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $PublicNetwork Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClusterType Instance type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Features Instance feature list.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Cvm",$param) and $param["Cvm"] !== null) {
            $this->Cvm = $param["Cvm"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("MaxTopicNumber",$param) and $param["MaxTopicNumber"] !== null) {
            $this->MaxTopicNumber = $param["MaxTopicNumber"];
        }

        if (array_key_exists("MaxPartitionNumber",$param) and $param["MaxPartitionNumber"] !== null) {
            $this->MaxPartitionNumber = $param["MaxPartitionNumber"];
        }

        if (array_key_exists("RebalanceTime",$param) and $param["RebalanceTime"] !== null) {
            $this->RebalanceTime = $param["RebalanceTime"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }

        if (array_key_exists("PublicNetworkChargeType",$param) and $param["PublicNetworkChargeType"] !== null) {
            $this->PublicNetworkChargeType = $param["PublicNetworkChargeType"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }
    }
}
