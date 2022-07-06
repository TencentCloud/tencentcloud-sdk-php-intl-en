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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of instance details
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getAppid() Obtain User `Appid`
 * @method void setAppid(integer $Appid) Set User `Appid`
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getRegionId() Obtain Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
 * @method void setRegionId(integer $RegionId) Set Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
 * @method integer getZoneId() Obtain Region ID
 * @method void setZoneId(integer $ZoneId) Set Region ID
 * @method integer getVpcId() Obtain VPC ID, such as 75101
 * @method void setVpcId(integer $VpcId) Set VPC ID, such as 75101
 * @method integer getSubnetId() Obtain VPC subnet ID, such as 46315
 * @method void setSubnetId(integer $SubnetId) Set VPC subnet ID, such as 46315
 * @method integer getStatus() Obtain Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
 * @method void setStatus(integer $Status) Set Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
 * @method string getWanIp() Obtain Instance VIP
 * @method void setWanIp(string $WanIp) Set Instance VIP
 * @method integer getPort() Obtain Port number of the instance
 * @method void setPort(integer $Port) Set Port number of the instance
 * @method string getCreatetime() Obtain Instance creation time
 * @method void setCreatetime(string $Createtime) Set Instance creation time
 * @method float getSize() Obtain Instance capacity in MB
 * @method void setSize(float $Size) Set Instance capacity in MB
 * @method float getSizeUsed() Obtain This field has been disused
 * @method void setSizeUsed(float $SizeUsed) Set This field has been disused
 * @method integer getType() Obtain Instance type. Valid values: `1` (Redis 2.8 Memory Edition in cluster architecture), `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `5` (Redis 2.8 Memory Edition in standalone architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture)
 * @method void setType(integer $Type) Set Instance type. Valid values: `1` (Redis 2.8 Memory Edition in cluster architecture), `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `5` (Redis 2.8 Memory Edition in standalone architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture)
 * @method integer getAutoRenewFlag() Obtain Whether to set the auto-renewal flag for the instance. 1: yes; 0: no
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether to set the auto-renewal flag for the instance. 1: yes; 0: no
 * @method string getDeadlineTime() Obtain Instance expiration time
 * @method void setDeadlineTime(string $DeadlineTime) Set Instance expiration time
 * @method string getEngine() Obtain Engine: Redis Community Edition, Tencent Cloud CKV
 * @method void setEngine(string $Engine) Set Engine: Redis Community Edition, Tencent Cloud CKV
 * @method string getProductType() Obtain Instance type. Valid values: standalone (Standard Edition); cluster (Cluster Edition)
 * @method void setProductType(string $ProductType) Set Instance type. Valid values: standalone (Standard Edition); cluster (Cluster Edition)
 * @method string getUniqVpcId() Obtain VPC ID, such as vpc-fk33jsf43kgv
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID, such as vpc-fk33jsf43kgv
 * @method string getUniqSubnetId() Obtain VPC subnet ID, such as subnet-fd3j6l35mm0
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID, such as subnet-fd3j6l35mm0
 * @method integer getBillingMode() Obtain Billing mode. 0: pay-as-you-go; 1: monthly subscription
 * @method void setBillingMode(integer $BillingMode) Set Billing mode. 0: pay-as-you-go; 1: monthly subscription
 * @method string getInstanceTitle() Obtain Description of the instance status, such as "instance running"
 * @method void setInstanceTitle(string $InstanceTitle) Set Description of the instance status, such as "instance running"
 * @method string getOfflineTime() Obtain Planned elimination time
 * @method void setOfflineTime(string $OfflineTime) Set Planned elimination time
 * @method integer getSubStatus() Obtain Sub-status returned for the instance in process
 * @method void setSubStatus(integer $SubStatus) Set Sub-status returned for the instance in process
 * @method array getTags() Obtain Anti-affinity tag
 * @method void setTags(array $Tags) Set Anti-affinity tag
 * @method array getInstanceNode() Obtain Instance node information
 * @method void setInstanceNode(array $InstanceNode) Set Instance node information
 * @method integer getRedisShardSize() Obtain Shard size
 * @method void setRedisShardSize(integer $RedisShardSize) Set Shard size
 * @method integer getRedisShardNum() Obtain Number of shards
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of shards
 * @method integer getRedisReplicasNum() Obtain Number of replicas
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of replicas
 * @method integer getPriceId() Obtain Billing ID
 * @method void setPriceId(integer $PriceId) Set Billing ID
 * @method string getCloseTime() Obtain Isolation time
 * @method void setCloseTime(string $CloseTime) Set Isolation time
 * @method integer getSlaveReadWeight() Obtain Read weight of the replica node
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) Set Read weight of the replica node
 * @method array getInstanceTags() Obtain Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceTags(array $InstanceTags) Set Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getNoAuth() Obtain Whether the instance is password-free. true: yes; false: no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoAuth(boolean $NoAuth) Set Whether the instance is password-free. true: yes; false: no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClientLimit() Obtain Number of client connections
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientLimit(integer $ClientLimit) Set Number of client connections
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDtsStatus() Obtain DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDtsStatus(integer $DtsStatus) Set DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNetLimit() Obtain Shard bandwidth cap in MB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetLimit(integer $NetLimit) Set Shard bandwidth cap in MB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPasswordFree() Obtain Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPasswordFree(integer $PasswordFree) Set Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReadOnly() Obtain Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadOnly(integer $ReadOnly) Set Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip6() Obtain Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip6(string $Vip6) Set Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemainBandwidthDuration() Obtain Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) Set Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskSize() Obtain Disk size of the Tendis instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Disk size of the Tendis instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMonitorVersion() Obtain Monitoring version. Valid values: 1m (monitoring at 1-minute granularity); 5s (monitoring at 5-second granularity)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMonitorVersion(string $MonitorVersion) Set Monitoring version. Valid values: 1m (monitoring at 1-minute granularity); 5s (monitoring at 5-second granularity)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClientLimitMin() Obtain Minimum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientLimitMin(integer $ClientLimitMin) Set Minimum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClientLimitMax() Obtain Maximum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientLimitMax(integer $ClientLimitMax) Set Maximum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNodeSet() Obtain Instance node details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeSet(array $NodeSet) Set Instance node details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Instance region, such as ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Instance region, such as ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceSet extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer User `Appid`
     */
    public $Appid;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
     */
    public $RegionId;

    /**
     * @var integer Region ID
     */
    public $ZoneId;

    /**
     * @var integer VPC ID, such as 75101
     */
    public $VpcId;

    /**
     * @var integer VPC subnet ID, such as 46315
     */
    public $SubnetId;

    /**
     * @var integer Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
     */
    public $Status;

    /**
     * @var string Instance VIP
     */
    public $WanIp;

    /**
     * @var integer Port number of the instance
     */
    public $Port;

    /**
     * @var string Instance creation time
     */
    public $Createtime;

    /**
     * @var float Instance capacity in MB
     */
    public $Size;

    /**
     * @var float This field has been disused
     */
    public $SizeUsed;

    /**
     * @var integer Instance type. Valid values: `1` (Redis 2.8 Memory Edition in cluster architecture), `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `5` (Redis 2.8 Memory Edition in standalone architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture)
     */
    public $Type;

    /**
     * @var integer Whether to set the auto-renewal flag for the instance. 1: yes; 0: no
     */
    public $AutoRenewFlag;

    /**
     * @var string Instance expiration time
     */
    public $DeadlineTime;

    /**
     * @var string Engine: Redis Community Edition, Tencent Cloud CKV
     */
    public $Engine;

    /**
     * @var string Instance type. Valid values: standalone (Standard Edition); cluster (Cluster Edition)
     */
    public $ProductType;

    /**
     * @var string VPC ID, such as vpc-fk33jsf43kgv
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID, such as subnet-fd3j6l35mm0
     */
    public $UniqSubnetId;

    /**
     * @var integer Billing mode. 0: pay-as-you-go; 1: monthly subscription
     */
    public $BillingMode;

    /**
     * @var string Description of the instance status, such as "instance running"
     */
    public $InstanceTitle;

    /**
     * @var string Planned elimination time
     */
    public $OfflineTime;

    /**
     * @var integer Sub-status returned for the instance in process
     */
    public $SubStatus;

    /**
     * @var array Anti-affinity tag
     */
    public $Tags;

    /**
     * @var array Instance node information
     */
    public $InstanceNode;

    /**
     * @var integer Shard size
     */
    public $RedisShardSize;

    /**
     * @var integer Number of shards
     */
    public $RedisShardNum;

    /**
     * @var integer Number of replicas
     */
    public $RedisReplicasNum;

    /**
     * @var integer Billing ID
     */
    public $PriceId;

    /**
     * @var string Isolation time
     */
    public $CloseTime;

    /**
     * @var integer Read weight of the replica node
     */
    public $SlaveReadWeight;

    /**
     * @var array Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceTags;

    /**
     * @var string Project name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var boolean Whether the instance is password-free. true: yes; false: no.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoAuth;

    /**
     * @var integer Number of client connections
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientLimit;

    /**
     * @var integer DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DtsStatus;

    /**
     * @var integer Shard bandwidth cap in MB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetLimit;

    /**
     * @var integer Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PasswordFree;

    /**
     * @var integer Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadOnly;

    /**
     * @var string Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip6;

    /**
     * @var string Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer Disk size of the Tendis instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Monitoring version. Valid values: 1m (monitoring at 1-minute granularity); 5s (monitoring at 5-second granularity)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MonitorVersion;

    /**
     * @var integer Minimum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientLimitMin;

    /**
     * @var integer Maximum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientLimitMax;

    /**
     * @var array Instance node details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeSet;

    /**
     * @var string Instance region, such as ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param integer $Appid User `Appid`
     * @param integer $ProjectId Project ID
     * @param integer $RegionId Region ID. 1: Guangzhou; 4: Shanghai; 5: Hong Kong (China); 6: Toronto; 7: Shanghai Finance; 8: Beijing; 9: Singapore; 11: Shenzhen Finance; 15: West US (Silicon Valley); 16: Chengdu; 17: Germany; 18: South Korea; 19: Chongqing; 21: India; 22: East US (Virginia); 23: Thailand; 24: Russia; 25: Japan
     * @param integer $ZoneId Region ID
     * @param integer $VpcId VPC ID, such as 75101
     * @param integer $SubnetId VPC subnet ID, such as 46315
     * @param integer $Status Current instance status. 0: to be initialized; 1: instance in process; 2: instance running; -2: instance isolated; -3: instance to be deleted
     * @param string $WanIp Instance VIP
     * @param integer $Port Port number of the instance
     * @param string $Createtime Instance creation time
     * @param float $Size Instance capacity in MB
     * @param float $SizeUsed This field has been disused
     * @param integer $Type Instance type. Valid values: `1` (Redis 2.8 Memory Edition in cluster architecture), `2` (Redis 2.8 Memory Edition in standard architecture), `3` (CKV 3.2 Memory Edition in standard architecture), `4` (CKV 3.2 Memory Edition in cluster architecture), `5` (Redis 2.8 Memory Edition in standalone architecture), `6` (Redis 4.0 Memory Edition in standard architecture), `7` (Redis 4.0 Memory Edition in cluster architecture), `8` (Redis 5.0 Memory Edition in standard architecture), `9` (Redis 5.0 Memory Edition in cluster architecture)
     * @param integer $AutoRenewFlag Whether to set the auto-renewal flag for the instance. 1: yes; 0: no
     * @param string $DeadlineTime Instance expiration time
     * @param string $Engine Engine: Redis Community Edition, Tencent Cloud CKV
     * @param string $ProductType Instance type. Valid values: standalone (Standard Edition); cluster (Cluster Edition)
     * @param string $UniqVpcId VPC ID, such as vpc-fk33jsf43kgv
     * @param string $UniqSubnetId VPC subnet ID, such as subnet-fd3j6l35mm0
     * @param integer $BillingMode Billing mode. 0: pay-as-you-go; 1: monthly subscription
     * @param string $InstanceTitle Description of the instance status, such as "instance running"
     * @param string $OfflineTime Planned elimination time
     * @param integer $SubStatus Sub-status returned for the instance in process
     * @param array $Tags Anti-affinity tag
     * @param array $InstanceNode Instance node information
     * @param integer $RedisShardSize Shard size
     * @param integer $RedisShardNum Number of shards
     * @param integer $RedisReplicasNum Number of replicas
     * @param integer $PriceId Billing ID
     * @param string $CloseTime Isolation time
     * @param integer $SlaveReadWeight Read weight of the replica node
     * @param array $InstanceTags Instance tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $NoAuth Whether the instance is password-free. true: yes; false: no.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClientLimit Number of client connections
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DtsStatus DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NetLimit Shard bandwidth cap in MB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PasswordFree Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadOnly Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip6 Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RemainBandwidthDuration Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskSize Disk size of the Tendis instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MonitorVersion Monitoring version. Valid values: 1m (monitoring at 1-minute granularity); 5s (monitoring at 5-second granularity)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClientLimitMin Minimum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClientLimitMax Maximum value for the range of maximum connections to the client
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NodeSet Instance node details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Instance region, such as ap-guangzhou
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SizeUsed",$param) and $param["SizeUsed"] !== null) {
            $this->SizeUsed = $param["SizeUsed"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("InstanceTitle",$param) and $param["InstanceTitle"] !== null) {
            $this->InstanceTitle = $param["InstanceTitle"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("InstanceNode",$param) and $param["InstanceNode"] !== null) {
            $this->InstanceNode = [];
            foreach ($param["InstanceNode"] as $key => $value){
                $obj = new InstanceNode();
                $obj->deserialize($value);
                array_push($this->InstanceNode, $obj);
            }
        }

        if (array_key_exists("RedisShardSize",$param) and $param["RedisShardSize"] !== null) {
            $this->RedisShardSize = $param["RedisShardSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("PriceId",$param) and $param["PriceId"] !== null) {
            $this->PriceId = $param["PriceId"];
        }

        if (array_key_exists("CloseTime",$param) and $param["CloseTime"] !== null) {
            $this->CloseTime = $param["CloseTime"];
        }

        if (array_key_exists("SlaveReadWeight",$param) and $param["SlaveReadWeight"] !== null) {
            $this->SlaveReadWeight = $param["SlaveReadWeight"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("ClientLimit",$param) and $param["ClientLimit"] !== null) {
            $this->ClientLimit = $param["ClientLimit"];
        }

        if (array_key_exists("DtsStatus",$param) and $param["DtsStatus"] !== null) {
            $this->DtsStatus = $param["DtsStatus"];
        }

        if (array_key_exists("NetLimit",$param) and $param["NetLimit"] !== null) {
            $this->NetLimit = $param["NetLimit"];
        }

        if (array_key_exists("PasswordFree",$param) and $param["PasswordFree"] !== null) {
            $this->PasswordFree = $param["PasswordFree"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("RemainBandwidthDuration",$param) and $param["RemainBandwidthDuration"] !== null) {
            $this->RemainBandwidthDuration = $param["RemainBandwidthDuration"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MonitorVersion",$param) and $param["MonitorVersion"] !== null) {
            $this->MonitorVersion = $param["MonitorVersion"];
        }

        if (array_key_exists("ClientLimitMin",$param) and $param["ClientLimitMin"] !== null) {
            $this->ClientLimitMin = $param["ClientLimitMin"];
        }

        if (array_key_exists("ClientLimitMax",$param) and $param["ClientLimitMax"] !== null) {
            $this->ClientLimitMax = $param["ClientLimitMax"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
