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
 * @method string getInstanceId() Obtain The ckafka cluster instance Id.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id.
 * @method string getInstanceName() Obtain Specifies the Name of the ckafka cluster instance.
 * @method void setInstanceName(string $InstanceName) Set Specifies the Name of the ckafka cluster instance.
 * @method array getVipList() Obtain VIP list information of access point
 * @method void setVipList(array $VipList) Set VIP list information of access point
 * @method string getVip() Obtain Virtual IP
 * @method void setVip(string $Vip) Set Virtual IP
 * @method string getVport() Obtain Virtual port
 * @method void setVport(string $Vport) Set Virtual port
 * @method integer getStatus() Obtain Instance status. 0: creating, 1: running, 2: deleting, 3: deleted, 5: isolated, 7: upgrading, -1: creation failed.
 * @method void setStatus(integer $Status) Set Instance status. 0: creating, 1: running, 2: deleting, 3: deleted, 5: isolated, 7: upgrading, -1: creation failed.
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
 * @method void setTags(array $Tags) Set Tag array
 * @method integer getExpireTime() Obtain Expiration time
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time
 * @method array getZoneIds() Obtain Availability Zone List
 * @method void setZoneIds(array $ZoneIds) Set Availability Zone List
 * @method string getVersion() Obtain Specifies the ckafka cluster instance version.
 * @method void setVersion(string $Version) Set Specifies the ckafka cluster instance version.
 * @method integer getMaxGroupNum() Obtain Maximum number of groups.
 * @method void setMaxGroupNum(integer $MaxGroupNum) Set Maximum number of groups.
 * @method integer getCvm() Obtain Sale type. valid values: 0 (standard version), 1 (pro edition).
 * @method void setCvm(integer $Cvm) Set Sale type. valid values: 0 (standard version), 1 (pro edition).
 * @method string getInstanceType() Obtain Instance type. valid values:. 
Specifies the pro edition.    
Standard version.
premium. specifies the advanced edition.
Specifies the serverless version.
 * @method void setInstanceType(string $InstanceType) Set Instance type. valid values:. 
Specifies the pro edition.    
Standard version.
premium. specifies the advanced edition.
Specifies the serverless version.
 * @method array getFeatures() Obtain Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL means the policy support for configuring subnets.
 * @method void setFeatures(array $Features) Set Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL means the policy support for configuring subnets.
 * @method DynamicRetentionTime getRetentionTimeConfig() Obtain Dynamic message retention policy.
 * @method void setRetentionTimeConfig(DynamicRetentionTime $RetentionTimeConfig) Set Dynamic message retention policy.
 * @method integer getMaxConnection() Obtain Maximum number of connections.
 * @method void setMaxConnection(integer $MaxConnection) Set Maximum number of connections.
 * @method integer getPublicNetwork() Obtain Public network bandwidth
 * @method void setPublicNetwork(integer $PublicNetwork) Set Public network bandwidth
 * @method string getDeleteRouteTimestamp() Obtain Specifies the deprecated field with no actual meaning.
 * @method void setDeleteRouteTimestamp(string $DeleteRouteTimestamp) Set Specifies the deprecated field with no actual meaning.
 * @method integer getRemainingPartitions() Obtain Number of remaining creatable partitions.
 * @method void setRemainingPartitions(integer $RemainingPartitions) Set Number of remaining creatable partitions.
 * @method integer getRemainingTopics() Obtain Number of remaining creatable topics.
 * @method void setRemainingTopics(integer $RemainingTopics) Set Number of remaining creatable topics.
 * @method DynamicDiskConfig getDynamicDiskConfig() Obtain Scaling policy for dynamic disk.
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) Set Scaling policy for dynamic disk.
 * @method string getSystemMaintenanceTime() Obtain Specifies the system maintenance time.
 * @method void setSystemMaintenanceTime(string $SystemMaintenanceTime) Set Specifies the system maintenance time.
 * @method integer getMaxMessageByte() Obtain Specifies the maximum size of messages at the instance level.
 * @method void setMaxMessageByte(integer $MaxMessageByte) Set Specifies the maximum size of messages at the instance level.
 * @method string getInstanceChargeType() Obtain Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.
 * @method integer getElasticBandwidthSwitch() Obtain Whether to enable the elastic bandwidth allowlist.   
Indicates the allowlist feature with elastic bandwidth enabled.
0: elastic bandwidth allowlist feature is disabled.
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) Set Whether to enable the elastic bandwidth allowlist.   
Indicates the allowlist feature with elastic bandwidth enabled.
0: elastic bandwidth allowlist feature is disabled.
 * @method integer getElasticBandwidthOpenStatus() Obtain Indicates the elastic bandwidth activation status.
1: indicates elastic bandwidth is disabled.
Enable elastic bandwidth.
Enable elastic bandwidth successfully.
33: disabling elastic bandwidth.
Indicates that the elastic bandwidth is successfully disabled.
Enable elastic bandwidth failed.
Bandwidth failure.
 * @method void setElasticBandwidthOpenStatus(integer $ElasticBandwidthOpenStatus) Set Indicates the elastic bandwidth activation status.
1: indicates elastic bandwidth is disabled.
Enable elastic bandwidth.
Enable elastic bandwidth successfully.
33: disabling elastic bandwidth.
Indicates that the elastic bandwidth is successfully disabled.
Enable elastic bandwidth failed.
Bandwidth failure.
 * @method string getClusterType() Obtain Cluster type.  
CLOUD_IDC idc cluster.
CLOUD_CVM_SHARE shared cluster.
CLOUD_CVM_YUNTI yunti cvm cluster.
CLOUD_CVM. specifies the cvm cluster.
CLOUD_CDC cdc cluster.
CLOUD_EKS_TSE eks cluster.
 * @method void setClusterType(string $ClusterType) Set Cluster type.  
CLOUD_IDC idc cluster.
CLOUD_CVM_SHARE shared cluster.
CLOUD_CVM_YUNTI yunti cvm cluster.
CLOUD_CVM. specifies the cvm cluster.
CLOUD_CDC cdc cluster.
CLOUD_EKS_TSE eks cluster.
 * @method integer getFreePartitionNumber() Obtain Number of free partitions.
 * @method void setFreePartitionNumber(integer $FreePartitionNumber) Set Number of free partitions.
 * @method integer getElasticFloatBandwidth() Obtain Specifies the elastic bandwidth upper limit.
 * @method void setElasticFloatBandwidth(integer $ElasticFloatBandwidth) Set Specifies the elastic bandwidth upper limit.
 * @method string getCustomCertId() Obtain ssl custom certificate id. only returned for instance clusters with custom certificates.
 * @method void setCustomCertId(string $CustomCertId) Set ssl custom certificate id. only returned for instance clusters with custom certificates.
 * @method integer getUncleanLeaderElectionEnable() Obtain Default unclean.leader.election.enable configuration for cluster topic: 1 enable 0 disable.
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set Default unclean.leader.election.enable configuration for cluster topic: 1 enable 0 disable.
 * @method integer getDeleteProtectionEnable() Obtain Instance deletion protection switch. 1: enabled; 0: disabled.
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) Set Instance deletion protection switch. 1: enabled; 0: disabled.
 */
class InstanceAttributesResponse extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id.
     */
    public $InstanceId;

    /**
     * @var string Specifies the Name of the ckafka cluster instance.
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
     * @var integer Instance status. 0: creating, 1: running, 2: deleting, 3: deleted, 5: isolated, 7: upgrading, -1: creation failed.
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
     */
    public $Tags;

    /**
     * @var integer Expiration time
     */
    public $ExpireTime;

    /**
     * @var array Availability Zone List
     */
    public $ZoneIds;

    /**
     * @var string Specifies the ckafka cluster instance version.
     */
    public $Version;

    /**
     * @var integer Maximum number of groups.
     */
    public $MaxGroupNum;

    /**
     * @var integer Sale type. valid values: 0 (standard version), 1 (pro edition).
     */
    public $Cvm;

    /**
     * @var string Instance type. valid values:. 
Specifies the pro edition.    
Standard version.
premium. specifies the advanced edition.
Specifies the serverless version.
     */
    public $InstanceType;

    /**
     * @var array Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL means the policy support for configuring subnets.
     */
    public $Features;

    /**
     * @var DynamicRetentionTime Dynamic message retention policy.
     */
    public $RetentionTimeConfig;

    /**
     * @var integer Maximum number of connections.
     */
    public $MaxConnection;

    /**
     * @var integer Public network bandwidth
     */
    public $PublicNetwork;

    /**
     * @var string Specifies the deprecated field with no actual meaning.
     */
    public $DeleteRouteTimestamp;

    /**
     * @var integer Number of remaining creatable partitions.
     */
    public $RemainingPartitions;

    /**
     * @var integer Number of remaining creatable topics.
     */
    public $RemainingTopics;

    /**
     * @var DynamicDiskConfig Scaling policy for dynamic disk.
     */
    public $DynamicDiskConfig;

    /**
     * @var string Specifies the system maintenance time.
     */
    public $SystemMaintenanceTime;

    /**
     * @var integer Specifies the maximum size of messages at the instance level.
     */
    public $MaxMessageByte;

    /**
     * @var string Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.
     */
    public $InstanceChargeType;

    /**
     * @var integer Whether to enable the elastic bandwidth allowlist.   
Indicates the allowlist feature with elastic bandwidth enabled.
0: elastic bandwidth allowlist feature is disabled.
     */
    public $ElasticBandwidthSwitch;

    /**
     * @var integer Indicates the elastic bandwidth activation status.
1: indicates elastic bandwidth is disabled.
Enable elastic bandwidth.
Enable elastic bandwidth successfully.
33: disabling elastic bandwidth.
Indicates that the elastic bandwidth is successfully disabled.
Enable elastic bandwidth failed.
Bandwidth failure.
     */
    public $ElasticBandwidthOpenStatus;

    /**
     * @var string Cluster type.  
CLOUD_IDC idc cluster.
CLOUD_CVM_SHARE shared cluster.
CLOUD_CVM_YUNTI yunti cvm cluster.
CLOUD_CVM. specifies the cvm cluster.
CLOUD_CDC cdc cluster.
CLOUD_EKS_TSE eks cluster.
     */
    public $ClusterType;

    /**
     * @var integer Number of free partitions.
     */
    public $FreePartitionNumber;

    /**
     * @var integer Specifies the elastic bandwidth upper limit.
     */
    public $ElasticFloatBandwidth;

    /**
     * @var string ssl custom certificate id. only returned for instance clusters with custom certificates.
     */
    public $CustomCertId;

    /**
     * @var integer Default unclean.leader.election.enable configuration for cluster topic: 1 enable 0 disable.
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Instance deletion protection switch. 1: enabled; 0: disabled.
     */
    public $DeleteProtectionEnable;

    /**
     * @param string $InstanceId The ckafka cluster instance Id.
     * @param string $InstanceName Specifies the Name of the ckafka cluster instance.
     * @param array $VipList VIP list information of access point
     * @param string $Vip Virtual IP
     * @param string $Vport Virtual port
     * @param integer $Status Instance status. 0: creating, 1: running, 2: deleting, 3: deleted, 5: isolated, 7: upgrading, -1: creation failed.
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
     * @param integer $ExpireTime Expiration time
     * @param array $ZoneIds Availability Zone List
     * @param string $Version Specifies the ckafka cluster instance version.
     * @param integer $MaxGroupNum Maximum number of groups.
     * @param integer $Cvm Sale type. valid values: 0 (standard version), 1 (pro edition).
     * @param string $InstanceType Instance type. valid values:. 
Specifies the pro edition.    
Standard version.
premium. specifies the advanced edition.
Specifies the serverless version.
     * @param array $Features Indicates the characteristics supported by the instance. FEATURE_SUBNET_ACL means the policy support for configuring subnets.
     * @param DynamicRetentionTime $RetentionTimeConfig Dynamic message retention policy.
     * @param integer $MaxConnection Maximum number of connections.
     * @param integer $PublicNetwork Public network bandwidth
     * @param string $DeleteRouteTimestamp Specifies the deprecated field with no actual meaning.
     * @param integer $RemainingPartitions Number of remaining creatable partitions.
     * @param integer $RemainingTopics Number of remaining creatable topics.
     * @param DynamicDiskConfig $DynamicDiskConfig Scaling policy for dynamic disk.
     * @param string $SystemMaintenanceTime Specifies the system maintenance time.
     * @param integer $MaxMessageByte Specifies the maximum size of messages at the instance level.
     * @param string $InstanceChargeType Specifies the instance billing type. POSTPAID_BY_HOUR: hourly billing; PREPAID: annual/monthly package.
     * @param integer $ElasticBandwidthSwitch Whether to enable the elastic bandwidth allowlist.   
Indicates the allowlist feature with elastic bandwidth enabled.
0: elastic bandwidth allowlist feature is disabled.
     * @param integer $ElasticBandwidthOpenStatus Indicates the elastic bandwidth activation status.
1: indicates elastic bandwidth is disabled.
Enable elastic bandwidth.
Enable elastic bandwidth successfully.
33: disabling elastic bandwidth.
Indicates that the elastic bandwidth is successfully disabled.
Enable elastic bandwidth failed.
Bandwidth failure.
     * @param string $ClusterType Cluster type.  
CLOUD_IDC idc cluster.
CLOUD_CVM_SHARE shared cluster.
CLOUD_CVM_YUNTI yunti cvm cluster.
CLOUD_CVM. specifies the cvm cluster.
CLOUD_CDC cdc cluster.
CLOUD_EKS_TSE eks cluster.
     * @param integer $FreePartitionNumber Number of free partitions.
     * @param integer $ElasticFloatBandwidth Specifies the elastic bandwidth upper limit.
     * @param string $CustomCertId ssl custom certificate id. only returned for instance clusters with custom certificates.
     * @param integer $UncleanLeaderElectionEnable Default unclean.leader.election.enable configuration for cluster topic: 1 enable 0 disable.
     * @param integer $DeleteProtectionEnable Instance deletion protection switch. 1: enabled; 0: disabled.
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
