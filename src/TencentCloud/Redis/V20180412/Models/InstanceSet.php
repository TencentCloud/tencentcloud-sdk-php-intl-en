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
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getAppid() Obtain App ID of a user, which is an application ID that uniquely corresponds to the account ID. Some Tencent Cloud products use this app ID.

 * @method void setAppid(integer $Appid) Set App ID of a user, which is an application ID that uniquely corresponds to the account ID. Some Tencent Cloud products use this app ID.

 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getRegionId() Obtain Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley);</li> <li>16: Chengdu;</li> <li>17: Frankfurt;</li> <li>18: Seoul;</li> <li>19: Chongqing;</li> <li>21: Mumbai;</li> <li>22: Eastern United States (Virginia);</li> <li>23: Bangkok;</li> <li>25: Tokyo.</li></ul>
 * @method void setRegionId(integer $RegionId) Set Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley);</li> <li>16: Chengdu;</li> <li>17: Frankfurt;</li> <li>18: Seoul;</li> <li>19: Chongqing;</li> <li>21: Mumbai;</li> <li>22: Eastern United States (Virginia);</li> <li>23: Bangkok;</li> <li>25: Tokyo.</li></ul>
 * @method integer getZoneId() Obtain Zone ID.
 * @method void setZoneId(integer $ZoneId) Set Zone ID.
 * @method integer getVpcId() Obtain VPC ID, for example, 75101.
 * @method void setVpcId(integer $VpcId) Set VPC ID, for example, 75101.
 * @method integer getSubnetId() Obtain ID of the subnet under VPC, for example, 46315.
 * @method void setSubnetId(integer $SubnetId) Set ID of the subnet under VPC, for example, 46315.
 * @method integer getStatus() Obtain Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul>
 * @method void setStatus(integer $Status) Set Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul>
 * @method string getWanIp() Obtain Instance VIP.
 * @method void setWanIp(string $WanIp) Set Instance VIP.
 * @method integer getPort() Obtain Instance port number.
 * @method void setPort(integer $Port) Set Instance port number.
 * @method string getCreatetime() Obtain Instance creation time, for example, in the format of 2020-01-15 10:20:00.
 * @method void setCreatetime(string $Createtime) Set Instance creation time, for example, in the format of 2020-01-15 10:20:00.
 * @method float getSize() Obtain Instance memory capacity. Unit: MB (1 MB = 1024 KB).
 * @method void setSize(float $Size) Set Instance memory capacity. Unit: MB (1 MB = 1024 KB).
 * @method float getSizeUsed() Obtain This parameter has been deprecated. Obtain the memory capacity used by the instance through the TCOP API [GetMonitorData](https://intl.cloud.tencent.com/document/product/248/31014?from_cn_redirect=1).
 * @method void setSizeUsed(float $SizeUsed) Set This parameter has been deprecated. Obtain the memory capacity used by the instance through the TCOP API [GetMonitorData](https://intl.cloud.tencent.com/document/product/248/31014?from_cn_redirect=1).
 * @method integer getType() Obtain Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method void setType(integer $Type) Set Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method integer getAutoRenewFlag() Obtain Whether the automatic renewal flag is set for an instance. <ul><li>1: set;</li> <li>0: not set.</li></ul>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether the automatic renewal flag is set for an instance. <ul><li>1: set;</li> <li>0: not set.</li></ul>
 * @method string getDeadlineTime() Obtain Expiration time of a monthly subscription instance.
 * @method void setDeadlineTime(string $DeadlineTime) Set Expiration time of a monthly subscription instance.
 * @method string getEngine() Obtain Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.
 * @method void setEngine(string $Engine) Set Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.
 * @method string getProductType() Obtain Product type. <ul><li>standalone: Standard Edition;</li> <li>cluster: Cluster Edition.</li></ul>
 * @method void setProductType(string $ProductType) Set Product type. <ul><li>standalone: Standard Edition;</li> <li>cluster: Cluster Edition.</li></ul>
 * @method string getUniqVpcId() Obtain VPC ID, for example, vpc-fk33jsf43kgv.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID, for example, vpc-fk33jsf43kgv.
 * @method string getUniqSubnetId() Obtain ID of the subnet under VPC, for example, subnet-fd3j6l35mm0.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set ID of the subnet under VPC, for example, subnet-fd3j6l35mm0.
 * @method integer getBillingMode() Obtain Billing mode. Only pay-as-you-go billing is supported.
 * @method void setBillingMode(integer $BillingMode) Set Billing mode. Only pay-as-you-go billing is supported.
 * @method string getInstanceTitle() Obtain Description of the instance running status, for example, running.
 * @method void setInstanceTitle(string $InstanceTitle) Set Description of the instance running status, for example, running.
 * @method string getOfflineTime() Obtain Default termination time of isolated instances, for example, in the format of 2020-02-15 10:20:00. By default, a pay-as-you-go instance will be terminated after 2 hours of isolation, and a monthly subscription instance will be terminated after 7 days.
 * @method void setOfflineTime(string $OfflineTime) Set Default termination time of isolated instances, for example, in the format of 2020-02-15 10:20:00. By default, a pay-as-you-go instance will be terminated after 2 hours of isolation, and a monthly subscription instance will be terminated after 7 days.
 * @method integer getSubStatus() Obtain Sub-status returned for an instance in process.
 * @method void setSubStatus(integer $SubStatus) Set Sub-status returned for an instance in process.
 * @method array getTags() Obtain Anti-affinity tag.
 * @method void setTags(array $Tags) Set Anti-affinity tag.
 * @method array getInstanceNode() Obtain Instance node information.
 * @method void setInstanceNode(array $InstanceNode) Set Instance node information.
 * @method integer getRedisShardSize() Obtain Shard size.
 * @method void setRedisShardSize(integer $RedisShardSize) Set Shard size.
 * @method integer getRedisShardNum() Obtain Number of shards.
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of shards.
 * @method integer getRedisReplicasNum() Obtain Number of replicas.
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of replicas.
 * @method integer getPriceId() Obtain Billing ID.
 * @method void setPriceId(integer $PriceId) Set Billing ID.
 * @method string getCloseTime() Obtain Time when an instance starts to be isolated.
 * @method void setCloseTime(string $CloseTime) Set Time when an instance starts to be isolated.
 * @method integer getSlaveReadWeight() Obtain Read weight of a secondary node.
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) Set Read weight of a secondary node.
 * @method array getInstanceTags() Obtain Tag information associated with an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceTags(array $InstanceTags) Set Tag information associated with an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project name

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name

Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getNoAuth() Obtain Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNoAuth(boolean $NoAuth) Set Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getClientLimit() Obtain Number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClientLimit(integer $ClientLimit) Set Number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDtsStatus() Obtain DTS status (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDtsStatus(integer $DtsStatus) Set DTS status (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getNetLimit() Obtain Upper limit of the shard bandwidth. Unit: MB.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNetLimit(integer $NetLimit) Set Upper limit of the shard bandwidth. Unit: MB.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPasswordFree() Obtain Password-free instance flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPasswordFree(integer $PasswordFree) Set Password-free instance flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getVip6() Obtain Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVip6(string $Vip6) Set Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getIPv6() Obtain Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIPv6(string $IPv6) Set Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getReadOnly() Obtain Instance read-only flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReadOnly(integer $ReadOnly) Set Instance read-only flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemainBandwidthDuration() Obtain Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) Set Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDiskSize() Obtain For Redis instances, ignore this parameter.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set For Redis instances, ignore this parameter.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMonitorVersion() Obtain Monitoring version. <ul><li>1m: 1-minute granularity monitoring. This monitoring granularity has been deprecated. For details, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li> <li>5s: 5-second granularity monitoring.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorVersion(string $MonitorVersion) Set Monitoring version. <ul><li>1m: 1-minute granularity monitoring. This monitoring granularity has been deprecated. For details, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li> <li>5s: 5-second granularity monitoring.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getClientLimitMin() Obtain Minimum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClientLimitMin(integer $ClientLimitMin) Set Minimum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getClientLimitMax() Obtain Maximum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClientLimitMax(integer $ClientLimitMax) Set Maximum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getNodeSet() Obtain Detailed node information of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeSet(array $NodeSet) Set Detailed node information of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain Region information of an instance, for example, ap-guangzhou.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Region information of an instance, for example, ap-guangzhou.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWanAddress() Obtain Public network address.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWanAddress(string $WanAddress) Set Public network address.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPolarisServer() Obtain Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPolarisServer(string $PolarisServer) Set Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRedisClusterId() Obtain CDC Redis cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRedisClusterId(string $RedisClusterId) Set CDC Redis cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDedicatedClusterId() Obtain CDC cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProductVersion() Obtain Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProductVersion(string $ProductVersion) Set Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurrentProxyVersion() Obtain Current Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set Current Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurrentRedisVersion() Obtain Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) Set Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpgradeProxyVersion() Obtain Upgradable Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) Set Upgradable Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpgradeRedisVersion() Obtain Upgradable Cache minor version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) Set Upgradable Cache minor version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBackupMode() Obtain Backup mode. SecondLevelBackup: second-level backup; NormalLevelBackup: normal backup.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBackupMode(string $BackupMode) Set Backup mode. SecondLevelBackup: second-level backup; NormalLevelBackup: normal backup.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceSet extends AbstractModel
{
    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer App ID of a user, which is an application ID that uniquely corresponds to the account ID. Some Tencent Cloud products use this app ID.

     */
    public $Appid;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley);</li> <li>16: Chengdu;</li> <li>17: Frankfurt;</li> <li>18: Seoul;</li> <li>19: Chongqing;</li> <li>21: Mumbai;</li> <li>22: Eastern United States (Virginia);</li> <li>23: Bangkok;</li> <li>25: Tokyo.</li></ul>
     */
    public $RegionId;

    /**
     * @var integer Zone ID.
     */
    public $ZoneId;

    /**
     * @var integer VPC ID, for example, 75101.
     */
    public $VpcId;

    /**
     * @var integer ID of the subnet under VPC, for example, 46315.
     */
    public $SubnetId;

    /**
     * @var integer Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul>
     */
    public $Status;

    /**
     * @var string Instance VIP.
     */
    public $WanIp;

    /**
     * @var integer Instance port number.
     */
    public $Port;

    /**
     * @var string Instance creation time, for example, in the format of 2020-01-15 10:20:00.
     */
    public $Createtime;

    /**
     * @var float Instance memory capacity. Unit: MB (1 MB = 1024 KB).
     */
    public $Size;

    /**
     * @var float This parameter has been deprecated. Obtain the memory capacity used by the instance through the TCOP API [GetMonitorData](https://intl.cloud.tencent.com/document/product/248/31014?from_cn_redirect=1).
     */
    public $SizeUsed;

    /**
     * @var integer Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     */
    public $Type;

    /**
     * @var integer Whether the automatic renewal flag is set for an instance. <ul><li>1: set;</li> <li>0: not set.</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @var string Expiration time of a monthly subscription instance.
     */
    public $DeadlineTime;

    /**
     * @var string Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.
     */
    public $Engine;

    /**
     * @var string Product type. <ul><li>standalone: Standard Edition;</li> <li>cluster: Cluster Edition.</li></ul>
     */
    public $ProductType;

    /**
     * @var string VPC ID, for example, vpc-fk33jsf43kgv.
     */
    public $UniqVpcId;

    /**
     * @var string ID of the subnet under VPC, for example, subnet-fd3j6l35mm0.
     */
    public $UniqSubnetId;

    /**
     * @var integer Billing mode. Only pay-as-you-go billing is supported.
     */
    public $BillingMode;

    /**
     * @var string Description of the instance running status, for example, running.
     */
    public $InstanceTitle;

    /**
     * @var string Default termination time of isolated instances, for example, in the format of 2020-02-15 10:20:00. By default, a pay-as-you-go instance will be terminated after 2 hours of isolation, and a monthly subscription instance will be terminated after 7 days.
     */
    public $OfflineTime;

    /**
     * @var integer Sub-status returned for an instance in process.
     */
    public $SubStatus;

    /**
     * @var array Anti-affinity tag.
     */
    public $Tags;

    /**
     * @var array Instance node information.
     */
    public $InstanceNode;

    /**
     * @var integer Shard size.
     */
    public $RedisShardSize;

    /**
     * @var integer Number of shards.
     */
    public $RedisShardNum;

    /**
     * @var integer Number of replicas.
     */
    public $RedisReplicasNum;

    /**
     * @var integer Billing ID.
     */
    public $PriceId;

    /**
     * @var string Time when an instance starts to be isolated.
     */
    public $CloseTime;

    /**
     * @var integer Read weight of a secondary node.
     */
    public $SlaveReadWeight;

    /**
     * @var array Tag information associated with an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceTags;

    /**
     * @var string Project name

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var boolean Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NoAuth;

    /**
     * @var integer Number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClientLimit;

    /**
     * @var integer DTS status (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DtsStatus;

    /**
     * @var integer Upper limit of the shard bandwidth. Unit: MB.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NetLimit;

    /**
     * @var integer Password-free instance flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PasswordFree;

    /**
     * @var string Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Vip6;

    /**
     * @var string Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IPv6;

    /**
     * @var integer Instance read-only flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReadOnly;

    /**
     * @var string Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer For Redis instances, ignore this parameter.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Monitoring version. <ul><li>1m: 1-minute granularity monitoring. This monitoring granularity has been deprecated. For details, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li> <li>5s: 5-second granularity monitoring.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorVersion;

    /**
     * @var integer Minimum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClientLimitMin;

    /**
     * @var integer Maximum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClientLimitMax;

    /**
     * @var array Detailed node information of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeSet;

    /**
     * @var string Region information of an instance, for example, ap-guangzhou.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var string Public network address.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WanAddress;

    /**
     * @var string Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PolarisServer;

    /**
     * @var string CDC Redis cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RedisClusterId;

    /**
     * @var string CDC cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DedicatedClusterId;

    /**
     * @var string Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProductVersion;

    /**
     * @var string Current Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurrentProxyVersion;

    /**
     * @var string Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurrentRedisVersion;

    /**
     * @var string Upgradable Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpgradeProxyVersion;

    /**
     * @var string Upgradable Cache minor version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpgradeRedisVersion;

    /**
     * @var string Backup mode. SecondLevelBackup: second-level backup; NormalLevelBackup: normal backup.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BackupMode;

    /**
     * @param string $InstanceName Instance name.
     * @param string $InstanceId Instance ID.
     * @param integer $Appid App ID of a user, which is an application ID that uniquely corresponds to the account ID. Some Tencent Cloud products use this app ID.

     * @param integer $ProjectId Project ID.
     * @param integer $RegionId Region ID. <ul><li>1: Guangzhou;</li> <li>4: Shanghai;</li> <li>5: Hong Kong (China);</li> <li>7: Shanghai Finance;</li> <li>8: Beijing;</li> <li>9: Singapore;</li> <li>11: Shenzhen Finance;</li> <li>15: Western United States (Silicon Valley);</li> <li>16: Chengdu;</li> <li>17: Frankfurt;</li> <li>18: Seoul;</li> <li>19: Chongqing;</li> <li>21: Mumbai;</li> <li>22: Eastern United States (Virginia);</li> <li>23: Bangkok;</li> <li>25: Tokyo.</li></ul>
     * @param integer $ZoneId Zone ID.
     * @param integer $VpcId VPC ID, for example, 75101.
     * @param integer $SubnetId ID of the subnet under VPC, for example, 46315.
     * @param integer $Status Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul>
     * @param string $WanIp Instance VIP.
     * @param integer $Port Instance port number.
     * @param string $Createtime Instance creation time, for example, in the format of 2020-01-15 10:20:00.
     * @param float $Size Instance memory capacity. Unit: MB (1 MB = 1024 KB).
     * @param float $SizeUsed This parameter has been deprecated. Obtain the memory capacity used by the instance through the TCOP API [GetMonitorData](https://intl.cloud.tencent.com/document/product/248/31014?from_cn_redirect=1).
     * @param integer $Type Instance type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 3: CKV 3.2 Memory Edition (standard architecture).
- 4: CKV 3.2 Memory Edition (cluster architecture).
- 5: Redis 2.8 Memory Edition (stand-alone).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     * @param integer $AutoRenewFlag Whether the automatic renewal flag is set for an instance. <ul><li>1: set;</li> <li>0: not set.</li></ul>
     * @param string $DeadlineTime Expiration time of a monthly subscription instance.
     * @param string $Engine Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.
     * @param string $ProductType Product type. <ul><li>standalone: Standard Edition;</li> <li>cluster: Cluster Edition.</li></ul>
     * @param string $UniqVpcId VPC ID, for example, vpc-fk33jsf43kgv.
     * @param string $UniqSubnetId ID of the subnet under VPC, for example, subnet-fd3j6l35mm0.
     * @param integer $BillingMode Billing mode. Only pay-as-you-go billing is supported.
     * @param string $InstanceTitle Description of the instance running status, for example, running.
     * @param string $OfflineTime Default termination time of isolated instances, for example, in the format of 2020-02-15 10:20:00. By default, a pay-as-you-go instance will be terminated after 2 hours of isolation, and a monthly subscription instance will be terminated after 7 days.
     * @param integer $SubStatus Sub-status returned for an instance in process.
     * @param array $Tags Anti-affinity tag.
     * @param array $InstanceNode Instance node information.
     * @param integer $RedisShardSize Shard size.
     * @param integer $RedisShardNum Number of shards.
     * @param integer $RedisReplicasNum Number of replicas.
     * @param integer $PriceId Billing ID.
     * @param string $CloseTime Time when an instance starts to be isolated.
     * @param integer $SlaveReadWeight Read weight of a secondary node.
     * @param array $InstanceTags Tag information associated with an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project name

Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $NoAuth Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ClientLimit Number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DtsStatus DTS status (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $NetLimit Upper limit of the shard bandwidth. Unit: MB.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PasswordFree Password-free instance flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Vip6 Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $IPv6 Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ReadOnly Instance read-only flag (internal parameter, which can be ignored).
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RemainBandwidthDuration Internal parameter, which can be ignored.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DiskSize For Redis instances, ignore this parameter.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MonitorVersion Monitoring version. <ul><li>1m: 1-minute granularity monitoring. This monitoring granularity has been deprecated. For details, see [1-Minute Granularity Will Be Disused](https://www.tencentcloud.com/document/product/239/50440).</li> <li>5s: 5-second granularity monitoring.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ClientLimitMin Minimum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ClientLimitMax Maximum value that can be set for the maximum number of client connections.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $NodeSet Detailed node information of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region Region information of an instance, for example, ap-guangzhou.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WanAddress Public network address.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PolarisServer Polaris service address, which is for internal use.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RedisClusterId CDC Redis cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DedicatedClusterId CDC cluster ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProductVersion Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster.</li></ul>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurrentProxyVersion Current Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurrentRedisVersion Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpgradeProxyVersion Upgradable Proxy version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpgradeRedisVersion Upgradable Cache minor version of an instance.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $BackupMode Backup mode. SecondLevelBackup: second-level backup; NormalLevelBackup: normal backup.
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

        if (array_key_exists("RedisClusterId",$param) and $param["RedisClusterId"] !== null) {
            $this->RedisClusterId = $param["RedisClusterId"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
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

        if (array_key_exists("BackupMode",$param) and $param["BackupMode"] !== null) {
            $this->BackupMode = $param["BackupMode"];
        }
    }
}
