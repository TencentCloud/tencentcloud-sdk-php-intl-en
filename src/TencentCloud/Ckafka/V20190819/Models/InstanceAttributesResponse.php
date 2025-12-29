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
 * Returned result object of instance attributes
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id.</p>.
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id.</p>.
 * @method string getInstanceName() Obtain <p>Specifies the Name of the ckafka cluster instance.</p>.
 * @method void setInstanceName(string $InstanceName) Set <p>Specifies the Name of the ckafka cluster instance.</p>.
 * @method array getVipList() Obtain <p>Access point VIP list information.</p>.
 * @method void setVipList(array $VipList) Set <p>Access point VIP list information.</p>.
 * @method string getVip() Obtain <p>Virtual IP.</p>.
 * @method void setVip(string $Vip) Set <p>Virtual IP.</p>.
 * @method string getVport() Obtain <P>Virtual port.</p>.
 * @method void setVport(string $Vport) Set <P>Virtual port.</p>.
 * @method integer getStatus() Obtain <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
 * @method void setStatus(integer $Status) Set <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
 * @method integer getBandwidth() Obtain <p>Instance bandwidth (unit: Mbps).</p>.
 * @method void setBandwidth(integer $Bandwidth) Set <p>Instance bandwidth (unit: Mbps).</p>.
 * @method integer getDiskSize() Obtain <p>Specifies the instance storage size in GB.</p>.
 * @method void setDiskSize(integer $DiskSize) Set <p>Specifies the instance storage size in GB.</p>.
 * @method integer getZoneId() Obtain <P>Specifies the availability zone.</p>.
 * @method void setZoneId(integer $ZoneId) Set <P>Specifies the availability zone.</p>.
 * @method string getVpcId() Obtain <p>VPC ID. being empty indicates a basic network.</p>.
 * @method void setVpcId(string $VpcId) Set <p>VPC ID. being empty indicates a basic network.</p>.
 * @method string getSubnetId() Obtain <p>Specifies the subnet ID. being empty indicates the basic network.</p>.
 * @method void setSubnetId(string $SubnetId) Set <p>Specifies the subnet ID. being empty indicates the basic network.</p>.
 * @method integer getHealthy() Obtain <P>Specifies the instance health status. valid values: 1 (healthy), 2 (alarm), 3 (abnormal).</p>.
 * @method void setHealthy(integer $Healthy) Set <P>Specifies the instance health status. valid values: 1 (healthy), 2 (alarm), 3 (abnormal).</p>.
 * @method string getHealthyMessage() Obtain <P>Instance health information. currently shows disk utilization rate. maximum length is 256.</p>.
 * @method void setHealthyMessage(string $HealthyMessage) Set <P>Instance health information. currently shows disk utilization rate. maximum length is 256.</p>.
 * @method integer getCreateTime() Obtain <P>Creation time.</p>.
 * @method void setCreateTime(integer $CreateTime) Set <P>Creation time.</p>.
 * @method integer getMsgRetentionTime() Obtain <P>Message retention period, in minutes.</p>.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set <P>Message retention period, in minutes.</p>.
 * @method InstanceConfigDO getConfig() Obtain <p>Automatic creation Topic configuration. if this field is empty, it indicates that automatic creation is not enabled.</p>.
 * @method void setConfig(InstanceConfigDO $Config) Set <p>Automatic creation Topic configuration. if this field is empty, it indicates that automatic creation is not enabled.</p>.
 * @method integer getRemainderPartitions() Obtain <P>Number of remaining creatable partitions.</p>.
 * @method void setRemainderPartitions(integer $RemainderPartitions) Set <P>Number of remaining creatable partitions.</p>.
 * @method integer getRemainderTopics() Obtain <P>Number of remaining creatable topics.</p>.
 * @method void setRemainderTopics(integer $RemainderTopics) Set <P>Number of remaining creatable topics.</p>.
 * @method integer getCreatedPartitions() Obtain <P>Specifies the current number of partitions created.</p>.
 * @method void setCreatedPartitions(integer $CreatedPartitions) Set <P>Specifies the current number of partitions created.</p>.
 * @method integer getCreatedTopics() Obtain <P>Specifies the current number of topics created.</p>.
 * @method void setCreatedTopics(integer $CreatedTopics) Set <P>Specifies the current number of topics created.</p>.
 * @method array getTags() Obtain <P>Tag array.</p>.
 * @method void setTags(array $Tags) Set <P>Tag array.</p>.
 * @method integer getExpireTime() Obtain <P>Specifies the expiration time.</p>.
 * @method void setExpireTime(integer $ExpireTime) Set <P>Specifies the expiration time.</p>.
 * @method array getZoneIds() Obtain <P>Specifies the availability zone list.</p>.
 * @method void setZoneIds(array $ZoneIds) Set <P>Specifies the availability zone list.</p>.
 * @method string getVersion() Obtain <P>Specifies the ckafka cluster instance version.</p>.
 * @method void setVersion(string $Version) Set <P>Specifies the ckafka cluster instance version.</p>.
 * @method integer getMaxGroupNum() Obtain <P>Specifies the maximum number of groups.</p>.
 * @method void setMaxGroupNum(integer $MaxGroupNum) Set <P>Specifies the maximum number of groups.</p>.
 * @method integer getCvm() Obtain <P>Sale type. 0: standard version; 1: pro edition.</p>.
 * @method void setCvm(integer $Cvm) Set <P>Sale type. 0: standard version; 1: pro edition.</p>.
 * @method string getInstanceType() Obtain <p>Instance type. enumerates the list: profession: pro edition; standards2: standard version; premium: advanced edition; serverless: serverless edition.</p>.
 * @method void setInstanceType(string $InstanceType) Set <p>Instance type. enumerates the list: profession: pro edition; standards2: standard version; premium: advanced edition; serverless: serverless edition.</p>.
 * @method array getFeatures() Obtain <p>Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL: indicates that the ACL policy supports setting subnets.</p>.
 * @method void setFeatures(array $Features) Set <p>Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL: indicates that the ACL policy supports setting subnets.</p>.
 * @method DynamicRetentionTime getRetentionTimeConfig() Obtain <P>Dynamic message retention policy.</p>.
 * @method void setRetentionTimeConfig(DynamicRetentionTime $RetentionTimeConfig) Set <P>Dynamic message retention policy.</p>.
 * @method integer getMaxConnection() Obtain <P>Maximum number of connections.</p>.
 * @method void setMaxConnection(integer $MaxConnection) Set <P>Maximum number of connections.</p>.
 * @method integer getPublicNetwork() Obtain <P>Public network bandwidth.</p>.
 * @method void setPublicNetwork(integer $PublicNetwork) Set <P>Public network bandwidth.</p>.
 * @method string getDeleteRouteTimestamp() Obtain <P>Deprecated. no actual meaning.</p>.
 * @method void setDeleteRouteTimestamp(string $DeleteRouteTimestamp) Set <P>Deprecated. no actual meaning.</p>.
 * @method integer getRemainingPartitions() Obtain <P>Number of remaining creatable partitions.</p>.
 * @method void setRemainingPartitions(integer $RemainingPartitions) Set <P>Number of remaining creatable partitions.</p>.
 * @method integer getRemainingTopics() Obtain <P>Number of remaining creatable topics.</p>.
 * @method void setRemainingTopics(integer $RemainingTopics) Set <P>Number of remaining creatable topics.</p>.
 * @method DynamicDiskConfig getDynamicDiskConfig() Obtain <P>Dynamic disk expansion policy.</p>.
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) Set <P>Dynamic disk expansion policy.</p>.
 * @method string getSystemMaintenanceTime() Obtain <P>Specifies the system maintenance time.</p>.
 * @method void setSystemMaintenanceTime(string $SystemMaintenanceTime) Set <P>Specifies the system maintenance time.</p>.
 * @method integer getMaxMessageByte() Obtain <P>Specifies the maximum size of instance level messages.</p>.
 * @method void setMaxMessageByte(integer $MaxMessageByte) Set <P>Specifies the maximum size of instance level messages.</p>.
 * @method string getInstanceChargeType() Obtain <p>Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.</p>.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.</p>.
 * @method integer getElasticBandwidthSwitch() Obtain <p>Specifies whether to enable the elastic bandwidth allowlist. valid values: 1 (enabled), 0 (disabled).</p>.
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) Set <p>Specifies whether to enable the elastic bandwidth allowlist. valid values: 1 (enabled), 0 (disabled).</p>.
 * @method integer getElasticBandwidthOpenStatus() Obtain <P>Specifies the elastic bandwidth activation status. 1: elastic bandwidth is disabled; 16: enabling elastic bandwidth; 32: elastic bandwidth enabled successfully; 33: disabling elastic bandwidth; 34: elastic bandwidth disabled successfully; 64: failed to enable elastic bandwidth; 65: failed to disable elastic bandwidth.</p>.
 * @method void setElasticBandwidthOpenStatus(integer $ElasticBandwidthOpenStatus) Set <P>Specifies the elastic bandwidth activation status. 1: elastic bandwidth is disabled; 16: enabling elastic bandwidth; 32: elastic bandwidth enabled successfully; 33: disabling elastic bandwidth; 34: elastic bandwidth disabled successfully; 64: failed to enable elastic bandwidth; 65: failed to disable elastic bandwidth.</p>.
 * @method string getClusterType() Obtain <p>ClusterType<br />CLOUD_IDC IDC cluster<br />CLOUD_CVM_SHARE CVM shared cluster<br />CLOUD_CVM_YUNTI YUNTI CVM cluster<br />CLOUD_CVM CVM cluster<br />CLOUD_CDC CDC cluster<br />CLOUD_EKS_TSE EKS cluster</p>.
 * @method void setClusterType(string $ClusterType) Set <p>ClusterType<br />CLOUD_IDC IDC cluster<br />CLOUD_CVM_SHARE CVM shared cluster<br />CLOUD_CVM_YUNTI YUNTI CVM cluster<br />CLOUD_CVM CVM cluster<br />CLOUD_CDC CDC cluster<br />CLOUD_EKS_TSE EKS cluster</p>.
 * @method integer getFreePartitionNumber() Obtain <P>Specifies the number of free partitions.</p>.
 * @method void setFreePartitionNumber(integer $FreePartitionNumber) Set <P>Specifies the number of free partitions.</p>.
 * @method integer getElasticFloatBandwidth() Obtain <P>Specifies the elastic bandwidth upper limit.</p>.
 * @method void setElasticFloatBandwidth(integer $ElasticFloatBandwidth) Set <P>Specifies the elastic bandwidth upper limit.</p>.
 * @method string getCustomCertId() Obtain <p>ssl custom certificate id. only returned for instance clusters with custom certificates.</p>.
 * @method void setCustomCertId(string $CustomCertId) Set <p>ssl custom certificate id. only returned for instance clusters with custom certificates.</p>.
 * @method integer getUncleanLeaderElectionEnable() Obtain <P>Specifies the default unclean.leader.election.enable configuration for cluster topics. valid values: 1 (enable), 0 (disable).</p>.
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set <P>Specifies the default unclean.leader.election.enable configuration for cluster topics. valid values: 1 (enable), 0 (disable).</p>.
 * @method integer getDeleteProtectionEnable() Obtain <P>Specifies the instance deletion protection switch. valid values: 1 (enabled), 0 (disabled).</p>.
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) Set <P>Specifies the instance deletion protection switch. valid values: 1 (enabled), 0 (disabled).</p>.
 */
class InstanceAttributesResponse extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id.</p>.
     */
    public $InstanceId;

    /**
     * @var string <p>Specifies the Name of the ckafka cluster instance.</p>.
     */
    public $InstanceName;

    /**
     * @var array <p>Access point VIP list information.</p>.
     */
    public $VipList;

    /**
     * @var string <p>Virtual IP.</p>.
     */
    public $Vip;

    /**
     * @var string <P>Virtual port.</p>.
     */
    public $Vport;

    /**
     * @var integer <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
     */
    public $Status;

    /**
     * @var integer <p>Instance bandwidth (unit: Mbps).</p>.
     */
    public $Bandwidth;

    /**
     * @var integer <p>Specifies the instance storage size in GB.</p>.
     */
    public $DiskSize;

    /**
     * @var integer <P>Specifies the availability zone.</p>.
     */
    public $ZoneId;

    /**
     * @var string <p>VPC ID. being empty indicates a basic network.</p>.
     */
    public $VpcId;

    /**
     * @var string <p>Specifies the subnet ID. being empty indicates the basic network.</p>.
     */
    public $SubnetId;

    /**
     * @var integer <P>Specifies the instance health status. valid values: 1 (healthy), 2 (alarm), 3 (abnormal).</p>.
     */
    public $Healthy;

    /**
     * @var string <P>Instance health information. currently shows disk utilization rate. maximum length is 256.</p>.
     */
    public $HealthyMessage;

    /**
     * @var integer <P>Creation time.</p>.
     */
    public $CreateTime;

    /**
     * @var integer <P>Message retention period, in minutes.</p>.
     */
    public $MsgRetentionTime;

    /**
     * @var InstanceConfigDO <p>Automatic creation Topic configuration. if this field is empty, it indicates that automatic creation is not enabled.</p>.
     */
    public $Config;

    /**
     * @var integer <P>Number of remaining creatable partitions.</p>.
     */
    public $RemainderPartitions;

    /**
     * @var integer <P>Number of remaining creatable topics.</p>.
     */
    public $RemainderTopics;

    /**
     * @var integer <P>Specifies the current number of partitions created.</p>.
     */
    public $CreatedPartitions;

    /**
     * @var integer <P>Specifies the current number of topics created.</p>.
     */
    public $CreatedTopics;

    /**
     * @var array <P>Tag array.</p>.
     */
    public $Tags;

    /**
     * @var integer <P>Specifies the expiration time.</p>.
     */
    public $ExpireTime;

    /**
     * @var array <P>Specifies the availability zone list.</p>.
     */
    public $ZoneIds;

    /**
     * @var string <P>Specifies the ckafka cluster instance version.</p>.
     */
    public $Version;

    /**
     * @var integer <P>Specifies the maximum number of groups.</p>.
     */
    public $MaxGroupNum;

    /**
     * @var integer <P>Sale type. 0: standard version; 1: pro edition.</p>.
     */
    public $Cvm;

    /**
     * @var string <p>Instance type. enumerates the list: profession: pro edition; standards2: standard version; premium: advanced edition; serverless: serverless edition.</p>.
     */
    public $InstanceType;

    /**
     * @var array <p>Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL: indicates that the ACL policy supports setting subnets.</p>.
     */
    public $Features;

    /**
     * @var DynamicRetentionTime <P>Dynamic message retention policy.</p>.
     */
    public $RetentionTimeConfig;

    /**
     * @var integer <P>Maximum number of connections.</p>.
     */
    public $MaxConnection;

    /**
     * @var integer <P>Public network bandwidth.</p>.
     */
    public $PublicNetwork;

    /**
     * @var string <P>Deprecated. no actual meaning.</p>.
     */
    public $DeleteRouteTimestamp;

    /**
     * @var integer <P>Number of remaining creatable partitions.</p>.
     */
    public $RemainingPartitions;

    /**
     * @var integer <P>Number of remaining creatable topics.</p>.
     */
    public $RemainingTopics;

    /**
     * @var DynamicDiskConfig <P>Dynamic disk expansion policy.</p>.
     */
    public $DynamicDiskConfig;

    /**
     * @var string <P>Specifies the system maintenance time.</p>.
     */
    public $SystemMaintenanceTime;

    /**
     * @var integer <P>Specifies the maximum size of instance level messages.</p>.
     */
    public $MaxMessageByte;

    /**
     * @var string <p>Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.</p>.
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>Specifies whether to enable the elastic bandwidth allowlist. valid values: 1 (enabled), 0 (disabled).</p>.
     */
    public $ElasticBandwidthSwitch;

    /**
     * @var integer <P>Specifies the elastic bandwidth activation status. 1: elastic bandwidth is disabled; 16: enabling elastic bandwidth; 32: elastic bandwidth enabled successfully; 33: disabling elastic bandwidth; 34: elastic bandwidth disabled successfully; 64: failed to enable elastic bandwidth; 65: failed to disable elastic bandwidth.</p>.
     */
    public $ElasticBandwidthOpenStatus;

    /**
     * @var string <p>ClusterType<br />CLOUD_IDC IDC cluster<br />CLOUD_CVM_SHARE CVM shared cluster<br />CLOUD_CVM_YUNTI YUNTI CVM cluster<br />CLOUD_CVM CVM cluster<br />CLOUD_CDC CDC cluster<br />CLOUD_EKS_TSE EKS cluster</p>.
     */
    public $ClusterType;

    /**
     * @var integer <P>Specifies the number of free partitions.</p>.
     */
    public $FreePartitionNumber;

    /**
     * @var integer <P>Specifies the elastic bandwidth upper limit.</p>.
     */
    public $ElasticFloatBandwidth;

    /**
     * @var string <p>ssl custom certificate id. only returned for instance clusters with custom certificates.</p>.
     */
    public $CustomCertId;

    /**
     * @var integer <P>Specifies the default unclean.leader.election.enable configuration for cluster topics. valid values: 1 (enable), 0 (disable).</p>.
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <P>Specifies the instance deletion protection switch. valid values: 1 (enabled), 0 (disabled).</p>.
     */
    public $DeleteProtectionEnable;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id.</p>.
     * @param string $InstanceName <p>Specifies the Name of the ckafka cluster instance.</p>.
     * @param array $VipList <p>Access point VIP list information.</p>.
     * @param string $Vip <p>Virtual IP.</p>.
     * @param string $Vport <P>Virtual port.</p>.
     * @param integer $Status <P>Specifies the instance status. valid values: 0 (creating), 1 (running), 2 (deleting), 3 (deleted), 5 (isolated), 7 (upgrading), -1 (creation failed).</p>.
     * @param integer $Bandwidth <p>Instance bandwidth (unit: Mbps).</p>.
     * @param integer $DiskSize <p>Specifies the instance storage size in GB.</p>.
     * @param integer $ZoneId <P>Specifies the availability zone.</p>.
     * @param string $VpcId <p>VPC ID. being empty indicates a basic network.</p>.
     * @param string $SubnetId <p>Specifies the subnet ID. being empty indicates the basic network.</p>.
     * @param integer $Healthy <P>Specifies the instance health status. valid values: 1 (healthy), 2 (alarm), 3 (abnormal).</p>.
     * @param string $HealthyMessage <P>Instance health information. currently shows disk utilization rate. maximum length is 256.</p>.
     * @param integer $CreateTime <P>Creation time.</p>.
     * @param integer $MsgRetentionTime <P>Message retention period, in minutes.</p>.
     * @param InstanceConfigDO $Config <p>Automatic creation Topic configuration. if this field is empty, it indicates that automatic creation is not enabled.</p>.
     * @param integer $RemainderPartitions <P>Number of remaining creatable partitions.</p>.
     * @param integer $RemainderTopics <P>Number of remaining creatable topics.</p>.
     * @param integer $CreatedPartitions <P>Specifies the current number of partitions created.</p>.
     * @param integer $CreatedTopics <P>Specifies the current number of topics created.</p>.
     * @param array $Tags <P>Tag array.</p>.
     * @param integer $ExpireTime <P>Specifies the expiration time.</p>.
     * @param array $ZoneIds <P>Specifies the availability zone list.</p>.
     * @param string $Version <P>Specifies the ckafka cluster instance version.</p>.
     * @param integer $MaxGroupNum <P>Specifies the maximum number of groups.</p>.
     * @param integer $Cvm <P>Sale type. 0: standard version; 1: pro edition.</p>.
     * @param string $InstanceType <p>Instance type. enumerates the list: profession: pro edition; standards2: standard version; premium: advanced edition; serverless: serverless edition.</p>.
     * @param array $Features <p>Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL: indicates that the ACL policy supports setting subnets.</p>.
     * @param DynamicRetentionTime $RetentionTimeConfig <P>Dynamic message retention policy.</p>.
     * @param integer $MaxConnection <P>Maximum number of connections.</p>.
     * @param integer $PublicNetwork <P>Public network bandwidth.</p>.
     * @param string $DeleteRouteTimestamp <P>Deprecated. no actual meaning.</p>.
     * @param integer $RemainingPartitions <P>Number of remaining creatable partitions.</p>.
     * @param integer $RemainingTopics <P>Number of remaining creatable topics.</p>.
     * @param DynamicDiskConfig $DynamicDiskConfig <P>Dynamic disk expansion policy.</p>.
     * @param string $SystemMaintenanceTime <P>Specifies the system maintenance time.</p>.
     * @param integer $MaxMessageByte <P>Specifies the maximum size of instance level messages.</p>.
     * @param string $InstanceChargeType <p>Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.</p>.
     * @param integer $ElasticBandwidthSwitch <p>Specifies whether to enable the elastic bandwidth allowlist. valid values: 1 (enabled), 0 (disabled).</p>.
     * @param integer $ElasticBandwidthOpenStatus <P>Specifies the elastic bandwidth activation status. 1: elastic bandwidth is disabled; 16: enabling elastic bandwidth; 32: elastic bandwidth enabled successfully; 33: disabling elastic bandwidth; 34: elastic bandwidth disabled successfully; 64: failed to enable elastic bandwidth; 65: failed to disable elastic bandwidth.</p>.
     * @param string $ClusterType <p>ClusterType<br />CLOUD_IDC IDC cluster<br />CLOUD_CVM_SHARE CVM shared cluster<br />CLOUD_CVM_YUNTI YUNTI CVM cluster<br />CLOUD_CVM CVM cluster<br />CLOUD_CDC CDC cluster<br />CLOUD_EKS_TSE EKS cluster</p>.
     * @param integer $FreePartitionNumber <P>Specifies the number of free partitions.</p>.
     * @param integer $ElasticFloatBandwidth <P>Specifies the elastic bandwidth upper limit.</p>.
     * @param string $CustomCertId <p>ssl custom certificate id. only returned for instance clusters with custom certificates.</p>.
     * @param integer $UncleanLeaderElectionEnable <P>Specifies the default unclean.leader.election.enable configuration for cluster topics. valid values: 1 (enable), 0 (disable).</p>.
     * @param integer $DeleteProtectionEnable <P>Specifies the instance deletion protection switch. valid values: 1 (enabled), 0 (disabled).</p>.
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

        if (array_key_exists("SystemMaintenanceTime",$param) and $param["SystemMaintenanceTime"] !== null) {
            $this->SystemMaintenanceTime = $param["SystemMaintenanceTime"];
        }

        if (array_key_exists("MaxMessageByte",$param) and $param["MaxMessageByte"] !== null) {
            $this->MaxMessageByte = $param["MaxMessageByte"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ElasticBandwidthSwitch",$param) and $param["ElasticBandwidthSwitch"] !== null) {
            $this->ElasticBandwidthSwitch = $param["ElasticBandwidthSwitch"];
        }

        if (array_key_exists("ElasticBandwidthOpenStatus",$param) and $param["ElasticBandwidthOpenStatus"] !== null) {
            $this->ElasticBandwidthOpenStatus = $param["ElasticBandwidthOpenStatus"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("FreePartitionNumber",$param) and $param["FreePartitionNumber"] !== null) {
            $this->FreePartitionNumber = $param["FreePartitionNumber"];
        }

        if (array_key_exists("ElasticFloatBandwidth",$param) and $param["ElasticFloatBandwidth"] !== null) {
            $this->ElasticFloatBandwidth = $param["ElasticFloatBandwidth"];
        }

        if (array_key_exists("CustomCertId",$param) and $param["CustomCertId"] !== null) {
            $this->CustomCertId = $param["CustomCertId"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("DeleteProtectionEnable",$param) and $param["DeleteProtectionEnable"] !== null) {
            $this->DeleteProtectionEnable = $param["DeleteProtectionEnable"];
        }
    }
}
