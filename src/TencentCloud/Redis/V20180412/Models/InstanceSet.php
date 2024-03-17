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
 * @method integer getAppid() Obtain User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.

 * @method void setAppid(integer $Appid) Set User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.

 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getRegionId() Obtain Region IDs. <ul><li>1: Guangzhou. </li><li>4: Shanghai. </li><li>5: Hong Kong, China. </li><li>6: Toronto. </li><li>8: Beijing. </li><li>9: Singapore. </li><li>15: West US (Silicon Valley). </li><li>16: Chengdu. </li><li>17: Frankfurt. </li><li>18: Seoul. </li><li>19: Chongqing. </li><li>21: Mumbai. </li><li>22: East US (Virginia). </li><li>23: Bangkok. </li><li>25: Tokyo. </li></ul>
 * @method void setRegionId(integer $RegionId) Set Region IDs. <ul><li>1: Guangzhou. </li><li>4: Shanghai. </li><li>5: Hong Kong, China. </li><li>6: Toronto. </li><li>8: Beijing. </li><li>9: Singapore. </li><li>15: West US (Silicon Valley). </li><li>16: Chengdu. </li><li>17: Frankfurt. </li><li>18: Seoul. </li><li>19: Chongqing. </li><li>21: Mumbai. </li><li>22: East US (Virginia). </li><li>23: Bangkok. </li><li>25: Tokyo. </li></ul>
 * @method integer getZoneId() Obtain Region ID
 * @method void setZoneId(integer $ZoneId) Set Region ID
 * @method integer getVpcId() Obtain VPC ID, such as `75101`.
 * @method void setVpcId(integer $VpcId) Set VPC ID, such as `75101`.
 * @method integer getSubnetId() Obtain Subnet ID, such as `46315`.
 * @method void setSubnetId(integer $SubnetId) Set Subnet ID, such as `46315`.
 * @method integer getStatus() Obtain Current instance status. <ul><li>`0`: To be initialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
 * @method void setStatus(integer $Status) Set Current instance status. <ul><li>`0`: To be initialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
 * @method string getWanIp() Obtain Instance VIP
 * @method void setWanIp(string $WanIp) Set Instance VIP
 * @method integer getPort() Obtain Port number of an instance
 * @method void setPort(integer $Port) Set Port number of an instance
 * @method string getCreatetime() Obtain Instance creation time in the format of "2020-01-15 10:20:00"
 * @method void setCreatetime(string $Createtime) Set Instance creation time in the format of "2020-01-15 10:20:00"
 * @method float getSize() Obtain Instance memory capacity in MB (1 MB = 1024 KB)
 * @method void setSize(float $Size) Set Instance memory capacity in MB (1 MB = 1024 KB)
 * @method float getSizeUsed() Obtain This field has been disused. You can use the TCOP [GetMonitorData](https://www.tencentcloud.com/zh/document/product/248/33881) API to query the capacity used by the instance.
 * @method void setSizeUsed(float $SizeUsed) Set This field has been disused. You can use the TCOP [GetMonitorData](https://www.tencentcloud.com/zh/document/product/248/33881) API to query the capacity used by the instance.
 * @method integer getType() Obtain Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
 * @method void setType(integer $Type) Set Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
 * @method integer getAutoRenewFlag() Obtain Whether to set the auto-renewal flag for an instance. <ul><li>`1`: Auto-renewal set. </li><li>`0`: Auto-renewal not set.</li></ul>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether to set the auto-renewal flag for an instance. <ul><li>`1`: Auto-renewal set. </li><li>`0`: Auto-renewal not set.</li></ul>
 * @method string getDeadlineTime() Obtain The time when a monthly subscribed instance expires
 * @method void setDeadlineTime(string $DeadlineTime) Set The time when a monthly subscribed instance expires
 * @method string getEngine() Obtain Engine: Redis community edition, Tencent Cloud CKV
 * @method void setEngine(string $Engine) Set Engine: Redis community edition, Tencent Cloud CKV
 * @method string getProductType() Obtain Product type. <ul><li>`standalone`: Standard edition. </li><li>`cluster`: Cluster edition. </li></ul>
 * @method void setProductType(string $ProductType) Set Product type. <ul><li>`standalone`: Standard edition. </li><li>`cluster`: Cluster edition. </li></ul>
 * @method string getUniqVpcId() Obtain VPC ID, such as vpc-fk33jsf43kgv.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID, such as vpc-fk33jsf43kgv.
 * @method string getUniqSubnetId() Obtain VPC subnet ID, such as subnet-fd3j6l35mm0.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID, such as subnet-fd3j6l35mm0.
 * @method integer getBillingMode() Obtain Billing mode. Only pay-as-you-go billing is supported.
 * @method void setBillingMode(integer $BillingMode) Set Billing mode. Only pay-as-you-go billing is supported.
 * @method string getInstanceTitle() Obtain Description of an instance status, such as "Running".
 * @method void setInstanceTitle(string $InstanceTitle) Set Description of an instance status, such as "Running".
 * @method string getOfflineTime() Obtain The default termination time for isolated instances in the format of "2020-02-15 10:20:00". By default, a pay-as-you-go instance will be terminated after two hours of isolation, and a monthly subscribed instance will be terminated after seven days by default.
 * @method void setOfflineTime(string $OfflineTime) Set The default termination time for isolated instances in the format of "2020-02-15 10:20:00". By default, a pay-as-you-go instance will be terminated after two hours of isolation, and a monthly subscribed instance will be terminated after seven days by default.
 * @method integer getSubStatus() Obtain Sub-status returned for an instance in process
 * @method void setSubStatus(integer $SubStatus) Set Sub-status returned for an instance in process
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
 * @method string getCloseTime() Obtain The time when an instance start to be isolated
 * @method void setCloseTime(string $CloseTime) Set The time when an instance start to be isolated
 * @method integer getSlaveReadWeight() Obtain Read weight of a replica node
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) Set Read weight of a replica node
 * @method array getInstanceTags() Obtain Instance tag information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceTags(array $InstanceTags) Set Instance tag information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getNoAuth() Obtain Whether an instance is password-free. <ul><li>`true`: Yes. </li><li>`false`: No. </li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNoAuth(boolean $NoAuth) Set Whether an instance is password-free. <ul><li>`true`: Yes. </li><li>`false`: No. </li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getClientLimit() Obtain Number of client connections
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClientLimit(integer $ClientLimit) Set Number of client connections
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDtsStatus() Obtain DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDtsStatus(integer $DtsStatus) Set DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getNetLimit() Obtain Upper shard bandwidth limit in MB
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNetLimit(integer $NetLimit) Set Upper shard bandwidth limit in MB
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPasswordFree() Obtain Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPasswordFree(integer $PasswordFree) Set Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getVip6() Obtain Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip6(string $Vip6) Set Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIPv6() Obtain Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIPv6(string $IPv6) Set Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReadOnly() Obtain Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReadOnly(integer $ReadOnly) Set Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemainBandwidthDuration() Obtain Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) Set Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDiskSize() Obtain This parameter can be ignored for Redis instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set This parameter can be ignored for Redis instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMonitorVersion() Obtain Monitoring granularity. <ul><li>`1m`: Monitoring at one-minute granularity. This granularity has been disused. For more information, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li><li>`5s`: Monitoring at five-second granularity.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMonitorVersion(string $MonitorVersion) Set Monitoring granularity. <ul><li>`1m`: Monitoring at one-minute granularity. This granularity has been disused. For more information, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li><li>`5s`: Monitoring at five-second granularity.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClientLimitMin() Obtain The minimum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClientLimitMin(integer $ClientLimitMin) Set The minimum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getClientLimitMax() Obtain The maximum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClientLimitMax(integer $ClientLimitMax) Set The maximum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getNodeSet() Obtain Instance node details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeSet(array $NodeSet) Set Instance node details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain Information of the region where the instance is deployed, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Information of the region where the instance is deployed, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWanAddress() Obtain Public IP
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWanAddress(string $WanAddress) Set Public IP
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPolarisServer() Obtain Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolarisServer(string $PolarisServer) Set Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurrentProxyVersion() Obtain The current proxy version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set The current proxy version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurrentRedisVersion() Obtain The current cache minor version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) Set The current cache minor version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpgradeProxyVersion() Obtain Proxy version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) Set Proxy version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpgradeRedisVersion() Obtain Cache minor version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) Set Cache minor version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
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
     * @var integer User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.

     */
    public $Appid;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Region IDs. <ul><li>1: Guangzhou. </li><li>4: Shanghai. </li><li>5: Hong Kong, China. </li><li>6: Toronto. </li><li>8: Beijing. </li><li>9: Singapore. </li><li>15: West US (Silicon Valley). </li><li>16: Chengdu. </li><li>17: Frankfurt. </li><li>18: Seoul. </li><li>19: Chongqing. </li><li>21: Mumbai. </li><li>22: East US (Virginia). </li><li>23: Bangkok. </li><li>25: Tokyo. </li></ul>
     */
    public $RegionId;

    /**
     * @var integer Region ID
     */
    public $ZoneId;

    /**
     * @var integer VPC ID, such as `75101`.
     */
    public $VpcId;

    /**
     * @var integer Subnet ID, such as `46315`.
     */
    public $SubnetId;

    /**
     * @var integer Current instance status. <ul><li>`0`: To be initialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
     */
    public $Status;

    /**
     * @var string Instance VIP
     */
    public $WanIp;

    /**
     * @var integer Port number of an instance
     */
    public $Port;

    /**
     * @var string Instance creation time in the format of "2020-01-15 10:20:00"
     */
    public $Createtime;

    /**
     * @var float Instance memory capacity in MB (1 MB = 1024 KB)
     */
    public $Size;

    /**
     * @var float This field has been disused. You can use the TCOP [GetMonitorData](https://www.tencentcloud.com/zh/document/product/248/33881) API to query the capacity used by the instance.
     */
    public $SizeUsed;

    /**
     * @var integer Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
     */
    public $Type;

    /**
     * @var integer Whether to set the auto-renewal flag for an instance. <ul><li>`1`: Auto-renewal set. </li><li>`0`: Auto-renewal not set.</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @var string The time when a monthly subscribed instance expires
     */
    public $DeadlineTime;

    /**
     * @var string Engine: Redis community edition, Tencent Cloud CKV
     */
    public $Engine;

    /**
     * @var string Product type. <ul><li>`standalone`: Standard edition. </li><li>`cluster`: Cluster edition. </li></ul>
     */
    public $ProductType;

    /**
     * @var string VPC ID, such as vpc-fk33jsf43kgv.
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID, such as subnet-fd3j6l35mm0.
     */
    public $UniqSubnetId;

    /**
     * @var integer Billing mode. Only pay-as-you-go billing is supported.
     */
    public $BillingMode;

    /**
     * @var string Description of an instance status, such as "Running".
     */
    public $InstanceTitle;

    /**
     * @var string The default termination time for isolated instances in the format of "2020-02-15 10:20:00". By default, a pay-as-you-go instance will be terminated after two hours of isolation, and a monthly subscribed instance will be terminated after seven days by default.
     */
    public $OfflineTime;

    /**
     * @var integer Sub-status returned for an instance in process
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
     * @var string The time when an instance start to be isolated
     */
    public $CloseTime;

    /**
     * @var integer Read weight of a replica node
     */
    public $SlaveReadWeight;

    /**
     * @var array Instance tag information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceTags;

    /**
     * @var string Project name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var boolean Whether an instance is password-free. <ul><li>`true`: Yes. </li><li>`false`: No. </li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NoAuth;

    /**
     * @var integer Number of client connections
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClientLimit;

    /**
     * @var integer DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DtsStatus;

    /**
     * @var integer Upper shard bandwidth limit in MB
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NetLimit;

    /**
     * @var integer Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PasswordFree;

    /**
     * @var string Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip6;

    /**
     * @var string Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IPv6;

    /**
     * @var integer Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReadOnly;

    /**
     * @var string Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer This parameter can be ignored for Redis instance.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Monitoring granularity. <ul><li>`1m`: Monitoring at one-minute granularity. This granularity has been disused. For more information, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li><li>`5s`: Monitoring at five-second granularity.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MonitorVersion;

    /**
     * @var integer The minimum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClientLimitMin;

    /**
     * @var integer The maximum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClientLimitMax;

    /**
     * @var array Instance node details
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeSet;

    /**
     * @var string Information of the region where the instance is deployed, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var string Public IP
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WanAddress;

    /**
     * @var string Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolarisServer;

    /**
     * @var string The current proxy version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurrentProxyVersion;

    /**
     * @var string The current cache minor version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurrentRedisVersion;

    /**
     * @var string Proxy version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpgradeProxyVersion;

    /**
     * @var string Cache minor version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpgradeRedisVersion;

    /**
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param integer $Appid User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.

     * @param integer $ProjectId Project ID
     * @param integer $RegionId Region IDs. <ul><li>1: Guangzhou. </li><li>4: Shanghai. </li><li>5: Hong Kong, China. </li><li>6: Toronto. </li><li>8: Beijing. </li><li>9: Singapore. </li><li>15: West US (Silicon Valley). </li><li>16: Chengdu. </li><li>17: Frankfurt. </li><li>18: Seoul. </li><li>19: Chongqing. </li><li>21: Mumbai. </li><li>22: East US (Virginia). </li><li>23: Bangkok. </li><li>25: Tokyo. </li></ul>
     * @param integer $ZoneId Region ID
     * @param integer $VpcId VPC ID, such as `75101`.
     * @param integer $SubnetId Subnet ID, such as `46315`.
     * @param integer $Status Current instance status. <ul><li>`0`: To be initialized. </li><li>`1`: In the process. </li><li>`2`: Running. </li><li>`-2`: Isolated. </li><li>`-3`: To be deleted. </li></ul>
     * @param string $WanIp Instance VIP
     * @param integer $Port Port number of an instance
     * @param string $Createtime Instance creation time in the format of "2020-01-15 10:20:00"
     * @param float $Size Instance memory capacity in MB (1 MB = 1024 KB)
     * @param float $SizeUsed This field has been disused. You can use the TCOP [GetMonitorData](https://www.tencentcloud.com/zh/document/product/248/33881) API to query the capacity used by the instance.
     * @param integer $Type Instance type
- `2`: Redis 2.8 Memory Edition (Standard Architecture).
- `3`: CKV 3.2 Memory Edition (Standard Architecture).
- `4`: CKV 3.2 Memory Edition (Cluster Architecture).
- `5`: Redis 2.8 Memory Edition (Standalone).
- `6`: Redis 4.0 Memory Edition (Standard Architecture).
- `7`: Redis 4.0 Memory Edition (Cluster Architecture).
- `8`: Redis 5.0 Memory Edition (Standard Architecture).
- `9`: Redis 5.0 Memory Edition (Cluster Architecture).
- `15`: Redis 6.2 Memory Edition (Standard Architecture).
- `16`: Redis 6.2 Memory Edition (Cluster Architecture).
     * @param integer $AutoRenewFlag Whether to set the auto-renewal flag for an instance. <ul><li>`1`: Auto-renewal set. </li><li>`0`: Auto-renewal not set.</li></ul>
     * @param string $DeadlineTime The time when a monthly subscribed instance expires
     * @param string $Engine Engine: Redis community edition, Tencent Cloud CKV
     * @param string $ProductType Product type. <ul><li>`standalone`: Standard edition. </li><li>`cluster`: Cluster edition. </li></ul>
     * @param string $UniqVpcId VPC ID, such as vpc-fk33jsf43kgv.
     * @param string $UniqSubnetId VPC subnet ID, such as subnet-fd3j6l35mm0.
     * @param integer $BillingMode Billing mode. Only pay-as-you-go billing is supported.
     * @param string $InstanceTitle Description of an instance status, such as "Running".
     * @param string $OfflineTime The default termination time for isolated instances in the format of "2020-02-15 10:20:00". By default, a pay-as-you-go instance will be terminated after two hours of isolation, and a monthly subscribed instance will be terminated after seven days by default.
     * @param integer $SubStatus Sub-status returned for an instance in process
     * @param array $Tags Anti-affinity tag
     * @param array $InstanceNode Instance node information
     * @param integer $RedisShardSize Shard size
     * @param integer $RedisShardNum Number of shards
     * @param integer $RedisReplicasNum Number of replicas
     * @param integer $PriceId Billing ID
     * @param string $CloseTime The time when an instance start to be isolated
     * @param integer $SlaveReadWeight Read weight of a replica node
     * @param array $InstanceTags Instance tag information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $NoAuth Whether an instance is password-free. <ul><li>`true`: Yes. </li><li>`false`: No. </li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ClientLimit Number of client connections
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DtsStatus DTS status (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $NetLimit Upper shard bandwidth limit in MB
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PasswordFree Password-free instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Vip6 Due to the naming irregularity of this parameter, it is recommended to use the parameter IPv6 instead. Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IPv6 Internal parameters, which can be ignored by users.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadOnly Read-only instance flag (internal parameter, which can be ignored)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RemainBandwidthDuration Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DiskSize This parameter can be ignored for Redis instance.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MonitorVersion Monitoring granularity. <ul><li>`1m`: Monitoring at one-minute granularity. This granularity has been disused. For more information, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li><li>`5s`: Monitoring at five-second granularity.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClientLimitMin The minimum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ClientLimitMax The maximum number of max client connections
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $NodeSet Instance node details
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region Information of the region where the instance is deployed, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WanAddress Public IP
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PolarisServer Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurrentProxyVersion The current proxy version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurrentRedisVersion The current cache minor version of an instance
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpgradeProxyVersion Proxy version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpgradeRedisVersion Cache minor version, which can be upgraded for the instance
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = $param["IPv6"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
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

        if (array_key_exists("WanAddress",$param) and $param["WanAddress"] !== null) {
            $this->WanAddress = $param["WanAddress"];
        }

        if (array_key_exists("PolarisServer",$param) and $param["PolarisServer"] !== null) {
            $this->PolarisServer = $param["PolarisServer"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("CurrentRedisVersion",$param) and $param["CurrentRedisVersion"] !== null) {
            $this->CurrentRedisVersion = $param["CurrentRedisVersion"];
        }

        if (array_key_exists("UpgradeProxyVersion",$param) and $param["UpgradeProxyVersion"] !== null) {
            $this->UpgradeProxyVersion = $param["UpgradeProxyVersion"];
        }

        if (array_key_exists("UpgradeRedisVersion",$param) and $param["UpgradeRedisVersion"] !== null) {
            $this->UpgradeRedisVersion = $param["UpgradeRedisVersion"];
        }
    }
}
