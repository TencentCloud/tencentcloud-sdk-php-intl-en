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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id.</p>.
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id.</p>.
 * @method string getInstanceName() Obtain <P>Specifies the name of the ckafka cluster instance.</p>.
 * @method void setInstanceName(string $InstanceName) Set <P>Specifies the name of the ckafka cluster instance.</p>.
 * @method string getVip() Obtain <P>Specifies the vip information for accessing the instance.</p>.
 * @method void setVip(string $Vip) Set <P>Specifies the vip information for accessing the instance.</p>.
 * @method string getVport() Obtain <P>Specifies the port information to access the instance.</p>.
 * @method void setVport(string $Vport) Set <P>Specifies the port information to access the instance.</p>.
 * @method array getVipList() Obtain <p>Specifies the virtual IP list.</p>.
 * @method void setVipList(array $VipList) Set <p>Specifies the virtual IP list.</p>.
 * @method integer getStatus() Obtain <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
 * @method void setStatus(integer $Status) Set <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
 * @method integer getBandwidth() Obtain <p>Specifies the instance bandwidth in Mbps.</p>.
 * @method void setBandwidth(integer $Bandwidth) Set <p>Specifies the instance bandwidth in Mbps.</p>.
 * @method integer getDiskSize() Obtain <p>Specifies the disk size of the ckafka cluster instance, in gb.</p>.
 * @method void setDiskSize(integer $DiskSize) Set <p>Specifies the disk size of the ckafka cluster instance, in gb.</p>.
 * @method integer getZoneId() Obtain <p>Specifies the available zone ID.</p>.
 * @method void setZoneId(integer $ZoneId) Set <p>Specifies the available zone ID.</p>.
 * @method string getVpcId() Obtain <p>vpcId. if empty, indicates a basic network.</p>.
 * @method void setVpcId(string $VpcId) Set <p>vpcId. if empty, indicates a basic network.</p>.
 * @method string getSubnetId() Obtain <P>Subnet id.</p>.
 * @method void setSubnetId(string $SubnetId) Set <P>Subnet id.</p>.
 * @method integer getRenewFlag() Obtain <P>Specifies whether to renew the instance. int enumeration value: 1 means auto-renew, 2 means explicitly no auto-renew.</p>.
 * @method void setRenewFlag(integer $RenewFlag) Set <P>Specifies whether to renew the instance. int enumeration value: 1 means auto-renew, 2 means explicitly no auto-renew.</p>.
 * @method integer getHealthy() Obtain <p>Specifies the instance status. valid values: 1 (healthy), 2 (alarm), 3 (instance status exception).</p>.
 * @method void setHealthy(integer $Healthy) Set <p>Specifies the instance status. valid values: 1 (healthy), 2 (alarm), 3 (instance status exception).</p>.
 * @method string getHealthyMessage() Obtain <P>Specifies the instance status information.</p>.
 * @method void setHealthyMessage(string $HealthyMessage) Set <P>Specifies the instance status information.</p>.
 * @method integer getCreateTime() Obtain <P>Specifies the instance creation time.</p>.
 * @method void setCreateTime(integer $CreateTime) Set <P>Specifies the instance creation time.</p>.
 * @method integer getExpireTime() Obtain <P>Specifies the instance expiration time.</p>.
 * @method void setExpireTime(integer $ExpireTime) Set <P>Specifies the instance expiration time.</p>.
 * @method integer getIsInternal() Obtain <P>Specifies whether it is an internal customer. a value of 1 indicates an internal customer.</p>.
 * @method void setIsInternal(integer $IsInternal) Set <P>Specifies whether it is an internal customer. a value of 1 indicates an internal customer.</p>.
 * @method integer getTopicNum() Obtain <p>Specifies the number of topics.</p>.
 * @method void setTopicNum(integer $TopicNum) Set <p>Specifies the number of topics.</p>.
 * @method array getTags() Obtain <P>Specifies the identifier tag.</p>.
 * @method void setTags(array $Tags) Set <P>Specifies the identifier tag.</p>.
 * @method string getVersion() Obtain <p>kafka version information.</p>.
 * @method void setVersion(string $Version) Set <p>kafka version information.</p>.
 * @method array getZoneIds() Obtain <P>Specifies the cross-availability zone.</p>.
 * @method void setZoneIds(array $ZoneIds) Set <P>Specifies the cross-availability zone.</p>.
 * @method integer getCvm() Obtain <P>Specifies the ckafka sales type.</p>.
 * @method void setCvm(integer $Cvm) Set <P>Specifies the ckafka sales type.</p>.
 * @method string getInstanceType() Obtain <P>Specifies the ckafka cluster instance type.</p>.
 * @method void setInstanceType(string $InstanceType) Set <P>Specifies the ckafka cluster instance type.</p>.
 * @method string getDiskType() Obtain <P>Specifies the disk type of the ckafka cluster instance.</p>.
 * @method void setDiskType(string $DiskType) Set <P>Specifies the disk type of the ckafka cluster instance.</p>.
 * @method integer getMaxTopicNumber() Obtain <p>Maximum number of topics for current specifications.</p>.
 * @method void setMaxTopicNumber(integer $MaxTopicNumber) Set <p>Maximum number of topics for current specifications.</p>.
 * @method integer getMaxPartitionNumber() Obtain <p>Specifies the maximum number of partitions for current specifications.</p>.
 * @method void setMaxPartitionNumber(integer $MaxPartitionNumber) Set <p>Specifies the maximum number of partitions for current specifications.</p>.
 * @method string getRebalanceTime() Obtain <P>Specifies the planned configuration upgrade time.</p>.
 * @method void setRebalanceTime(string $RebalanceTime) Set <P>Specifies the planned configuration upgrade time.</p>.
 * @method integer getPartitionNumber() Obtain <P>Current number of partitions of the instance.</p>.
 * @method void setPartitionNumber(integer $PartitionNumber) Set <P>Current number of partitions of the instance.</p>.
 * @method string getPublicNetworkChargeType() Obtain <P>Specifies the public network bandwidth type of the ckafka cluster instance.</p>.
 * @method void setPublicNetworkChargeType(string $PublicNetworkChargeType) Set <P>Specifies the public network bandwidth type of the ckafka cluster instance.</p>.
 * @method integer getPublicNetwork() Obtain <p>Specifies the public network bandwidth. value range: 3Mbps to 999Mbps. only supported in pro edition.</p>.
 * @method void setPublicNetwork(integer $PublicNetwork) Set <p>Specifies the public network bandwidth. value range: 3Mbps to 999Mbps. only supported in pro edition.</p>.
 * @method string getClusterType() Obtain <P>Specifies the underlying cluster type of the ckafka cluster instance.</p>.
 * @method void setClusterType(string $ClusterType) Set <P>Specifies the underlying cluster type of the ckafka cluster instance.</p>.
 * @method array getFeatures() Obtain <P>Specifies the instance feature list.</p>.
 * @method void setFeatures(array $Features) Set <P>Specifies the instance feature list.</p>.
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id.</p>.
     */
    public $InstanceId;

    /**
     * @var string <P>Specifies the name of the ckafka cluster instance.</p>.
     */
    public $InstanceName;

    /**
     * @var string <P>Specifies the vip information for accessing the instance.</p>.
     */
    public $Vip;

    /**
     * @var string <P>Specifies the port information to access the instance.</p>.
     */
    public $Vport;

    /**
     * @var array <p>Specifies the virtual IP list.</p>.
     */
    public $VipList;

    /**
     * @var integer <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
     */
    public $Status;

    /**
     * @var integer <p>Specifies the instance bandwidth in Mbps.</p>.
     */
    public $Bandwidth;

    /**
     * @var integer <p>Specifies the disk size of the ckafka cluster instance, in gb.</p>.
     */
    public $DiskSize;

    /**
     * @var integer <p>Specifies the available zone ID.</p>.
     */
    public $ZoneId;

    /**
     * @var string <p>vpcId. if empty, indicates a basic network.</p>.
     */
    public $VpcId;

    /**
     * @var string <P>Subnet id.</p>.
     */
    public $SubnetId;

    /**
     * @var integer <P>Specifies whether to renew the instance. int enumeration value: 1 means auto-renew, 2 means explicitly no auto-renew.</p>.
     */
    public $RenewFlag;

    /**
     * @var integer <p>Specifies the instance status. valid values: 1 (healthy), 2 (alarm), 3 (instance status exception).</p>.
     */
    public $Healthy;

    /**
     * @var string <P>Specifies the instance status information.</p>.
     */
    public $HealthyMessage;

    /**
     * @var integer <P>Specifies the instance creation time.</p>.
     */
    public $CreateTime;

    /**
     * @var integer <P>Specifies the instance expiration time.</p>.
     */
    public $ExpireTime;

    /**
     * @var integer <P>Specifies whether it is an internal customer. a value of 1 indicates an internal customer.</p>.
     */
    public $IsInternal;

    /**
     * @var integer <p>Specifies the number of topics.</p>.
     */
    public $TopicNum;

    /**
     * @var array <P>Specifies the identifier tag.</p>.
     */
    public $Tags;

    /**
     * @var string <p>kafka version information.</p>.
     */
    public $Version;

    /**
     * @var array <P>Specifies the cross-availability zone.</p>.
     */
    public $ZoneIds;

    /**
     * @var integer <P>Specifies the ckafka sales type.</p>.
     */
    public $Cvm;

    /**
     * @var string <P>Specifies the ckafka cluster instance type.</p>.
     */
    public $InstanceType;

    /**
     * @var string <P>Specifies the disk type of the ckafka cluster instance.</p>.
     */
    public $DiskType;

    /**
     * @var integer <p>Maximum number of topics for current specifications.</p>.
     */
    public $MaxTopicNumber;

    /**
     * @var integer <p>Specifies the maximum number of partitions for current specifications.</p>.
     */
    public $MaxPartitionNumber;

    /**
     * @var string <P>Specifies the planned configuration upgrade time.</p>.
     */
    public $RebalanceTime;

    /**
     * @var integer <P>Current number of partitions of the instance.</p>.
     */
    public $PartitionNumber;

    /**
     * @var string <P>Specifies the public network bandwidth type of the ckafka cluster instance.</p>.
     */
    public $PublicNetworkChargeType;

    /**
     * @var integer <p>Specifies the public network bandwidth. value range: 3Mbps to 999Mbps. only supported in pro edition.</p>.
     */
    public $PublicNetwork;

    /**
     * @var string <P>Specifies the underlying cluster type of the ckafka cluster instance.</p>.
     */
    public $ClusterType;

    /**
     * @var array <P>Specifies the instance feature list.</p>.
     */
    public $Features;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id.</p>.
     * @param string $InstanceName <P>Specifies the name of the ckafka cluster instance.</p>.
     * @param string $Vip <P>Specifies the vip information for accessing the instance.</p>.
     * @param string $Vport <P>Specifies the port information to access the instance.</p>.
     * @param array $VipList <p>Specifies the virtual IP list.</p>.
     * @param integer $Status <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
     * @param integer $Bandwidth <p>Specifies the instance bandwidth in Mbps.</p>.
     * @param integer $DiskSize <p>Specifies the disk size of the ckafka cluster instance, in gb.</p>.
     * @param integer $ZoneId <p>Specifies the available zone ID.</p>.
     * @param string $VpcId <p>vpcId. if empty, indicates a basic network.</p>.
     * @param string $SubnetId <P>Subnet id.</p>.
     * @param integer $RenewFlag <P>Specifies whether to renew the instance. int enumeration value: 1 means auto-renew, 2 means explicitly no auto-renew.</p>.
     * @param integer $Healthy <p>Specifies the instance status. valid values: 1 (healthy), 2 (alarm), 3 (instance status exception).</p>.
     * @param string $HealthyMessage <P>Specifies the instance status information.</p>.
     * @param integer $CreateTime <P>Specifies the instance creation time.</p>.
     * @param integer $ExpireTime <P>Specifies the instance expiration time.</p>.
     * @param integer $IsInternal <P>Specifies whether it is an internal customer. a value of 1 indicates an internal customer.</p>.
     * @param integer $TopicNum <p>Specifies the number of topics.</p>.
     * @param array $Tags <P>Specifies the identifier tag.</p>.
     * @param string $Version <p>kafka version information.</p>.
     * @param array $ZoneIds <P>Specifies the cross-availability zone.</p>.
     * @param integer $Cvm <P>Specifies the ckafka sales type.</p>.
     * @param string $InstanceType <P>Specifies the ckafka cluster instance type.</p>.
     * @param string $DiskType <P>Specifies the disk type of the ckafka cluster instance.</p>.
     * @param integer $MaxTopicNumber <p>Maximum number of topics for current specifications.</p>.
     * @param integer $MaxPartitionNumber <p>Specifies the maximum number of partitions for current specifications.</p>.
     * @param string $RebalanceTime <P>Specifies the planned configuration upgrade time.</p>.
     * @param integer $PartitionNumber <P>Current number of partitions of the instance.</p>.
     * @param string $PublicNetworkChargeType <P>Specifies the public network bandwidth type of the ckafka cluster instance.</p>.
     * @param integer $PublicNetwork <p>Specifies the public network bandwidth. value range: 3Mbps to 999Mbps. only supported in pro edition.</p>.
     * @param string $ClusterType <P>Specifies the underlying cluster type of the ckafka cluster instance.</p>.
     * @param array $Features <P>Specifies the instance feature list.</p>.
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
