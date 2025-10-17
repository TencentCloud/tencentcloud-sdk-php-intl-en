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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of instance details
 *
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getAppid() Obtain App ID of a user, which is an application ID that uniquely corresponds to the account ID. Certain Tencent Cloud products use this app ID.

 * @method void setAppid(integer $Appid) Set App ID of a user, which is an application ID that uniquely corresponds to the account ID. Certain Tencent Cloud products use this app ID.

 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getRegionId() Obtain Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul>
 * @method void setRegionId(integer $RegionId) Set Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul>
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

- 2: Redis 2.8 memory edition (standard architecture).
- 3: CKV 3.2 memory edition (standard architecture).
- 4: CKV 3.2 memory edition (cluster architecture).
- 5: Redis 2.8 memory edition (standalone).
- 6: Redis 4.0 memory edition (standard architecture).
- 7: Redis 4.0 memory edition (cluster architecture).
- 8: Redis 5.0 memory edition (standard architecture).
- 9: Redis 5.0 memory edition (cluster architecture).
- 15: Redis 6.2 memory edition (standard architecture).
- 16: Redis 6.2 memory edition (cluster architecture).
- 17: Redis 7.0 memory edition (standard architecture).
- 18: Redis 7.0 memory edition (cluster architecture).
- 200: Memcached 1.6 memory edition (cluster architecture).
 * @method void setType(integer $Type) Set Instance type.

- 2: Redis 2.8 memory edition (standard architecture).
- 3: CKV 3.2 memory edition (standard architecture).
- 4: CKV 3.2 memory edition (cluster architecture).
- 5: Redis 2.8 memory edition (standalone).
- 6: Redis 4.0 memory edition (standard architecture).
- 7: Redis 4.0 memory edition (cluster architecture).
- 8: Redis 5.0 memory edition (standard architecture).
- 9: Redis 5.0 memory edition (cluster architecture).
- 15: Redis 6.2 memory edition (standard architecture).
- 16: Redis 6.2 memory edition (cluster architecture).
- 17: Redis 7.0 memory edition (standard architecture).
- 18: Redis 7.0 memory edition (cluster architecture).
- 200: Memcached 1.6 memory edition (cluster architecture).
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
 * @method integer getSubStatus() Obtain Sub-status returned for the instance in the process.
 - 0: disk read-write status.
 - 1: disk read-only status because the upper limit is exceeded.
 * @method void setSubStatus(integer $SubStatus) Set Sub-status returned for the instance in the process.
 - 0: disk read-write status.
 - 1: disk read-only status because the upper limit is exceeded.
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
- 0: disable read-only replicas.
- 100: enable read-only replicas.
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) Set Read weight of a secondary node.
- 0: disable read-only replicas.
- 100: enable read-only replicas.
 * @method array getInstanceTags() Obtain Information on tags associated with the instance.
 * @method void setInstanceTags(array $InstanceTags) Set Information on tags associated with the instance.
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method boolean getNoAuth() Obtain Whether the instance is password-free.<ul><li>true: password-free instance.</li><li>false: password required by the instance.</li></ul>
 * @method void setNoAuth(boolean $NoAuth) Set Whether the instance is password-free.<ul><li>true: password-free instance.</li><li>false: password required by the instance.</li></ul>
 * @method integer getClientLimit() Obtain Number of client connections.
 * @method void setClientLimit(integer $ClientLimit) Set Number of client connections.
 * @method integer getDtsStatus() Obtain DTS status. (Internal parameter, which can be ignored.)
 * @method void setDtsStatus(integer $DtsStatus) Set DTS status. (Internal parameter, which can be ignored.)
 * @method integer getNetLimit() Obtain Shard bandwidth limit. Unit: MB.
 * @method void setNetLimit(integer $NetLimit) Set Shard bandwidth limit. Unit: MB.
 * @method integer getPasswordFree() Obtain Password-free instance flag. (Internal parameter, which can be ignored.)
 * @method void setPasswordFree(integer $PasswordFree) Set Password-free instance flag. (Internal parameter, which can be ignored.)
 * @method string getVip6() Obtain This parameter encounters a naming issue. It is recommended to use the parameter IPv6 instead. It is an internal parameter and can be ignored.
 * @method void setVip6(string $Vip6) Set This parameter encounters a naming issue. It is recommended to use the parameter IPv6 instead. It is an internal parameter and can be ignored.
 * @method string getIPv6() Obtain Internal parameter, which can be ignored.
 * @method void setIPv6(string $IPv6) Set Internal parameter, which can be ignored.
 * @method integer getReadOnly() Obtain Instance read-only flag. (Internal parameter, which can be ignored.)
 * @method void setReadOnly(integer $ReadOnly) Set Instance read-only flag. (Internal parameter, which can be ignored.)
 * @method string getRemainBandwidthDuration() Obtain Internal parameter, which can be ignored.
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) Set Internal parameter, which can be ignored.
 * @method integer getDiskSize() Obtain For TencentDB for Redis® instances, ignore this parameter.
 * @method void setDiskSize(integer $DiskSize) Set For TencentDB for Redis® instances, ignore this parameter.
 * @method string getMonitorVersion() Obtain Monitoring version.<ul><li>1m: monitoring with the 1-minute granularity. Currently, this monitoring granularity is unavailable. For details, see [1-Minute Granularity Will Be Disused](https://intl.cloud.tencent.com/document/product/239/80653?from_cn_redirect=1).</li><li>5s: monitoring with the 5-second granularity.</li></ul>
 * @method void setMonitorVersion(string $MonitorVersion) Set Monitoring version.<ul><li>1m: monitoring with the 1-minute granularity. Currently, this monitoring granularity is unavailable. For details, see [1-Minute Granularity Will Be Disused](https://intl.cloud.tencent.com/document/product/239/80653?from_cn_redirect=1).</li><li>5s: monitoring with the 5-second granularity.</li></ul>
 * @method integer getClientLimitMin() Obtain Minimum value that can be set for the maximum number of client connections.
 * @method void setClientLimitMin(integer $ClientLimitMin) Set Minimum value that can be set for the maximum number of client connections.
 * @method integer getClientLimitMax() Obtain Maximum value that can be set for the maximum number of client connections.
 * @method void setClientLimitMax(integer $ClientLimitMax) Set Maximum value that can be set for the maximum number of client connections.
 * @method array getNodeSet() Obtain Node details of the instance.

It is returned only for multi-AZ instances.
 * @method void setNodeSet(array $NodeSet) Set Node details of the instance.

It is returned only for multi-AZ instances.
 * @method string getRegion() Obtain Region information on the instance. For example, ap-guangzhou.
 * @method void setRegion(string $Region) Set Region information on the instance. For example, ap-guangzhou.
 * @method string getWanAddress() Obtain Public network address.
 * @method void setWanAddress(string $WanAddress) Set Public network address.
 * @method string getPolarisServer() Obtain Polaris service address for internal use.
 * @method void setPolarisServer(string $PolarisServer) Set Polaris service address for internal use.
 * @method string getRedisClusterId() Obtain CDC cluster ID of TencentDB for Redis®.
 * @method void setRedisClusterId(string $RedisClusterId) Set CDC cluster ID of TencentDB for Redis®.
 * @method string getDedicatedClusterId() Obtain CDC cluster ID.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC cluster ID.
 * @method string getProductVersion() Obtain Product edition.<ul><li>local: local disk.</li><li>cloud: cloud disk edition.</li><li>cdc: CDC cluster edition.</li></ul>
 * @method void setProductVersion(string $ProductVersion) Set Product edition.<ul><li>local: local disk.</li><li>cloud: cloud disk edition.</li><li>cdc: CDC cluster edition.</li></ul>
 * @method string getCurrentProxyVersion() Obtain Current proxy version of the instance.
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set Current proxy version of the instance.
 * @method string getCurrentRedisVersion() Obtain Current cache minor version of the instance. If the instance is added to a global replication group, the global replication kernel version is displayed.
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) Set Current cache minor version of the instance. If the instance is added to a global replication group, the global replication kernel version is displayed.
 * @method string getUpgradeProxyVersion() Obtain Upgradable proxy version for the instance.
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) Set Upgradable proxy version for the instance.
 * @method string getUpgradeRedisVersion() Obtain Upgradable cache minor version for the instance.
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) Set Upgradable cache minor version for the instance.
 * @method string getBackupMode() Obtain Backup mode. - SecondLevelBackup: second-level backup. - NormalLevelBackup: ordinary backup.
 * @method void setBackupMode(string $BackupMode) Set Backup mode. - SecondLevelBackup: second-level backup. - NormalLevelBackup: ordinary backup.
 * @method integer getDeleteProtectionSwitch() Obtain Deletion protection switch. 0: disabled; 1: enabled.
 * @method void setDeleteProtectionSwitch(integer $DeleteProtectionSwitch) Set Deletion protection switch. 0: disabled; 1: enabled.
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
     * @var integer App ID of a user, which is an application ID that uniquely corresponds to the account ID. Certain Tencent Cloud products use this app ID.

     */
    public $Appid;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul>
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
     * @deprecated
     */
    public $SizeUsed;

    /**
     * @var integer Instance type.

- 2: Redis 2.8 memory edition (standard architecture).
- 3: CKV 3.2 memory edition (standard architecture).
- 4: CKV 3.2 memory edition (cluster architecture).
- 5: Redis 2.8 memory edition (standalone).
- 6: Redis 4.0 memory edition (standard architecture).
- 7: Redis 4.0 memory edition (cluster architecture).
- 8: Redis 5.0 memory edition (standard architecture).
- 9: Redis 5.0 memory edition (cluster architecture).
- 15: Redis 6.2 memory edition (standard architecture).
- 16: Redis 6.2 memory edition (cluster architecture).
- 17: Redis 7.0 memory edition (standard architecture).
- 18: Redis 7.0 memory edition (cluster architecture).
- 200: Memcached 1.6 memory edition (cluster architecture).
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
     * @var integer Sub-status returned for the instance in the process.
 - 0: disk read-write status.
 - 1: disk read-only status because the upper limit is exceeded.
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
- 0: disable read-only replicas.
- 100: enable read-only replicas.
     */
    public $SlaveReadWeight;

    /**
     * @var array Information on tags associated with the instance.
     */
    public $InstanceTags;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var boolean Whether the instance is password-free.<ul><li>true: password-free instance.</li><li>false: password required by the instance.</li></ul>
     */
    public $NoAuth;

    /**
     * @var integer Number of client connections.
     */
    public $ClientLimit;

    /**
     * @var integer DTS status. (Internal parameter, which can be ignored.)
     */
    public $DtsStatus;

    /**
     * @var integer Shard bandwidth limit. Unit: MB.
     */
    public $NetLimit;

    /**
     * @var integer Password-free instance flag. (Internal parameter, which can be ignored.)
     */
    public $PasswordFree;

    /**
     * @var string This parameter encounters a naming issue. It is recommended to use the parameter IPv6 instead. It is an internal parameter and can be ignored.
     */
    public $Vip6;

    /**
     * @var string Internal parameter, which can be ignored.
     */
    public $IPv6;

    /**
     * @var integer Instance read-only flag. (Internal parameter, which can be ignored.)
     */
    public $ReadOnly;

    /**
     * @var string Internal parameter, which can be ignored.
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer For TencentDB for Redis® instances, ignore this parameter.
     */
    public $DiskSize;

    /**
     * @var string Monitoring version.<ul><li>1m: monitoring with the 1-minute granularity. Currently, this monitoring granularity is unavailable. For details, see [1-Minute Granularity Will Be Disused](https://intl.cloud.tencent.com/document/product/239/80653?from_cn_redirect=1).</li><li>5s: monitoring with the 5-second granularity.</li></ul>
     */
    public $MonitorVersion;

    /**
     * @var integer Minimum value that can be set for the maximum number of client connections.
     */
    public $ClientLimitMin;

    /**
     * @var integer Maximum value that can be set for the maximum number of client connections.
     */
    public $ClientLimitMax;

    /**
     * @var array Node details of the instance.

It is returned only for multi-AZ instances.
     */
    public $NodeSet;

    /**
     * @var string Region information on the instance. For example, ap-guangzhou.
     */
    public $Region;

    /**
     * @var string Public network address.
     */
    public $WanAddress;

    /**
     * @var string Polaris service address for internal use.
     */
    public $PolarisServer;

    /**
     * @var string CDC cluster ID of TencentDB for Redis®.
     */
    public $RedisClusterId;

    /**
     * @var string CDC cluster ID.
     */
    public $DedicatedClusterId;

    /**
     * @var string Product edition.<ul><li>local: local disk.</li><li>cloud: cloud disk edition.</li><li>cdc: CDC cluster edition.</li></ul>
     */
    public $ProductVersion;

    /**
     * @var string Current proxy version of the instance.
     */
    public $CurrentProxyVersion;

    /**
     * @var string Current cache minor version of the instance. If the instance is added to a global replication group, the global replication kernel version is displayed.
     */
    public $CurrentRedisVersion;

    /**
     * @var string Upgradable proxy version for the instance.
     */
    public $UpgradeProxyVersion;

    /**
     * @var string Upgradable cache minor version for the instance.
     */
    public $UpgradeRedisVersion;

    /**
     * @var string Backup mode. - SecondLevelBackup: second-level backup. - NormalLevelBackup: ordinary backup.
     */
    public $BackupMode;

    /**
     * @var integer Deletion protection switch. 0: disabled; 1: enabled.
     */
    public $DeleteProtectionSwitch;

    /**
     * @param string $InstanceName Instance name.
     * @param string $InstanceId Instance ID.
     * @param integer $Appid App ID of a user, which is an application ID that uniquely corresponds to the account ID. Certain Tencent Cloud products use this app ID.

     * @param integer $ProjectId Project ID.
     * @param integer $RegionId Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul>
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

- 2: Redis 2.8 memory edition (standard architecture).
- 3: CKV 3.2 memory edition (standard architecture).
- 4: CKV 3.2 memory edition (cluster architecture).
- 5: Redis 2.8 memory edition (standalone).
- 6: Redis 4.0 memory edition (standard architecture).
- 7: Redis 4.0 memory edition (cluster architecture).
- 8: Redis 5.0 memory edition (standard architecture).
- 9: Redis 5.0 memory edition (cluster architecture).
- 15: Redis 6.2 memory edition (standard architecture).
- 16: Redis 6.2 memory edition (cluster architecture).
- 17: Redis 7.0 memory edition (standard architecture).
- 18: Redis 7.0 memory edition (cluster architecture).
- 200: Memcached 1.6 memory edition (cluster architecture).
     * @param integer $AutoRenewFlag Whether the automatic renewal flag is set for an instance. <ul><li>1: set;</li> <li>0: not set.</li></ul>
     * @param string $DeadlineTime Expiration time of a monthly subscription instance.
     * @param string $Engine Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.
     * @param string $ProductType Product type. <ul><li>standalone: Standard Edition;</li> <li>cluster: Cluster Edition.</li></ul>
     * @param string $UniqVpcId VPC ID, for example, vpc-fk33jsf43kgv.
     * @param string $UniqSubnetId ID of the subnet under VPC, for example, subnet-fd3j6l35mm0.
     * @param integer $BillingMode Billing mode. Only pay-as-you-go billing is supported.
     * @param string $InstanceTitle Description of the instance running status, for example, running.
     * @param string $OfflineTime Default termination time of isolated instances, for example, in the format of 2020-02-15 10:20:00. By default, a pay-as-you-go instance will be terminated after 2 hours of isolation, and a monthly subscription instance will be terminated after 7 days.
     * @param integer $SubStatus Sub-status returned for the instance in the process.
 - 0: disk read-write status.
 - 1: disk read-only status because the upper limit is exceeded.
     * @param array $Tags Anti-affinity tag.
     * @param array $InstanceNode Instance node information.
     * @param integer $RedisShardSize Shard size.
     * @param integer $RedisShardNum Number of shards.
     * @param integer $RedisReplicasNum Number of replicas.
     * @param integer $PriceId Billing ID.
     * @param string $CloseTime Time when an instance starts to be isolated.
     * @param integer $SlaveReadWeight Read weight of a secondary node.
- 0: disable read-only replicas.
- 100: enable read-only replicas.
     * @param array $InstanceTags Information on tags associated with the instance.
     * @param string $ProjectName Project name
     * @param boolean $NoAuth Whether the instance is password-free.<ul><li>true: password-free instance.</li><li>false: password required by the instance.</li></ul>
     * @param integer $ClientLimit Number of client connections.
     * @param integer $DtsStatus DTS status. (Internal parameter, which can be ignored.)
     * @param integer $NetLimit Shard bandwidth limit. Unit: MB.
     * @param integer $PasswordFree Password-free instance flag. (Internal parameter, which can be ignored.)
     * @param string $Vip6 This parameter encounters a naming issue. It is recommended to use the parameter IPv6 instead. It is an internal parameter and can be ignored.
     * @param string $IPv6 Internal parameter, which can be ignored.
     * @param integer $ReadOnly Instance read-only flag. (Internal parameter, which can be ignored.)
     * @param string $RemainBandwidthDuration Internal parameter, which can be ignored.
     * @param integer $DiskSize For TencentDB for Redis® instances, ignore this parameter.
     * @param string $MonitorVersion Monitoring version.<ul><li>1m: monitoring with the 1-minute granularity. Currently, this monitoring granularity is unavailable. For details, see [1-Minute Granularity Will Be Disused](https://intl.cloud.tencent.com/document/product/239/80653?from_cn_redirect=1).</li><li>5s: monitoring with the 5-second granularity.</li></ul>
     * @param integer $ClientLimitMin Minimum value that can be set for the maximum number of client connections.
     * @param integer $ClientLimitMax Maximum value that can be set for the maximum number of client connections.
     * @param array $NodeSet Node details of the instance.

It is returned only for multi-AZ instances.
     * @param string $Region Region information on the instance. For example, ap-guangzhou.
     * @param string $WanAddress Public network address.
     * @param string $PolarisServer Polaris service address for internal use.
     * @param string $RedisClusterId CDC cluster ID of TencentDB for Redis®.
     * @param string $DedicatedClusterId CDC cluster ID.
     * @param string $ProductVersion Product edition.<ul><li>local: local disk.</li><li>cloud: cloud disk edition.</li><li>cdc: CDC cluster edition.</li></ul>
     * @param string $CurrentProxyVersion Current proxy version of the instance.
     * @param string $CurrentRedisVersion Current cache minor version of the instance. If the instance is added to a global replication group, the global replication kernel version is displayed.
     * @param string $UpgradeProxyVersion Upgradable proxy version for the instance.
     * @param string $UpgradeRedisVersion Upgradable cache minor version for the instance.
     * @param string $BackupMode Backup mode. - SecondLevelBackup: second-level backup. - NormalLevelBackup: ordinary backup.
     * @param integer $DeleteProtectionSwitch Deletion protection switch. 0: disabled; 1: enabled.
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

        if (array_key_exists("DeleteProtectionSwitch",$param) and $param["DeleteProtectionSwitch"] !== null) {
            $this->DeleteProtectionSwitch = $param["DeleteProtectionSwitch"];
        }
    }
}
