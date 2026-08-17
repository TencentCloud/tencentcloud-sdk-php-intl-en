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
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method integer getAppid() Obtain <p>User AppId. AppId is an application ID with a one-to-one correspondence to the account ID. Some Tencent Cloud products use this AppId.</p>
 * @method void setAppid(integer $Appid) Set <p>User AppId. AppId is an application ID with a one-to-one correspondence to the account ID. Some Tencent Cloud products use this AppId.</p>
 * @method integer getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID.</p>
 * @method integer getRegionId() Obtain <p>Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul></p>
 * @method void setRegionId(integer $RegionId) Set <p>Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul></p>
 * @method integer getZoneId() Obtain <p>Region ID.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>Region ID.</p>
 * @method integer getVpcId() Obtain <p>vpc network ID, such as 75101.</p>
 * @method void setVpcId(integer $VpcId) Set <p>vpc network ID, such as 75101.</p>
 * @method integer getSubnetId() Obtain <p>Subnet ID under vpc, for example: 46315.</p>
 * @method void setSubnetId(integer $SubnetId) Set <p>Subnet ID under vpc, for example: 46315.</p>
 * @method integer getStatus() Obtain <p>Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul></p>
 * @method void setStatus(integer $Status) Set <p>Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul></p>
 * @method string getWanIp() Obtain <p>Instance VIP.</p>
 * @method void setWanIp(string $WanIp) Set <p>Instance VIP.</p>
 * @method integer getPort() Obtain <p>Instance port number.</p>
 * @method void setPort(integer $Port) Set <p>Instance port number.</p>
 * @method string getCreatetime() Obtain <p>Instance creation time, for example, in the format of 2020-01-15 10:20:00.</p>
 * @method void setCreatetime(string $Createtime) Set <p>Instance creation time, for example, in the format of 2020-01-15 10:20:00.</p>
 * @method float getSize() Obtain <p>Instance memory capacity. Unit: MB (1 MB = 1024 KB).</p>
 * @method void setSize(float $Size) Set <p>Instance memory capacity. Unit: MB (1 MB = 1024 KB).</p>
 * @method float getSizeUsed() Obtain <p>This field is deprecated. Please use the Tencent Cloud observability platform API interface <a href="https://www.tencentcloud.com/document/product/248/31014?from_cn_redirect=1">GetMonitorData</a> to obtain the memory capacity used by the instance.</p>
 * @method void setSizeUsed(float $SizeUsed) Set <p>This field is deprecated. Please use the Tencent Cloud observability platform API interface <a href="https://www.tencentcloud.com/document/product/248/31014?from_cn_redirect=1">GetMonitorData</a> to obtain the memory capacity used by the instance.</p>
 * @method integer getType() Obtain <p>Instance type.</p><p>Enumeration value:</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 8.0 memory edition (standard architecture).</li><li>22: Valkey 8.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
 * @method void setType(integer $Type) Set <p>Instance type.</p><p>Enumeration value:</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 8.0 memory edition (standard architecture).</li><li>22: Valkey 8.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
 * @method integer getAutoRenewFlag() Obtain <p>Whether the automatic renewal flag is set for an instance.</p><ul><li>1: set auto-renewal.</li><li>0: automatic renewal flag not set.</li></ul>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Whether the automatic renewal flag is set for an instance.</p><ul><li>1: set auto-renewal.</li><li>0: automatic renewal flag not set.</li></ul>
 * @method string getDeadlineTime() Obtain <p>Expiration time of a monthly subscription instance.</p>
 * @method void setDeadlineTime(string $DeadlineTime) Set <p>Expiration time of a monthly subscription instance.</p>
 * @method string getEngine() Obtain <p>Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.</p>
 * @method void setEngine(string $Engine) Set <p>Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.</p>
 * @method string getProductType() Obtain <p>Product type.<ul><li>standalone: standard version.</li><li>cluster: cluster version.</li></ul></p>
 * @method void setProductType(string $ProductType) Set <p>Product type.<ul><li>standalone: standard version.</li><li>cluster: cluster version.</li></ul></p>
 * @method string getUniqVpcId() Obtain <p>vpc Network id, such as vpc-fk33jsf43kgv.</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>vpc Network id, such as vpc-fk33jsf43kgv.</p>
 * @method string getUniqSubnetId() Obtain <p>subnet id under vpc, for example: subnet-fd3j6l35mm0.</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) Set <p>subnet id under vpc, for example: subnet-fd3j6l35mm0.</p>
 * @method integer getBillingMode() Obtain <p>Billing mode.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
 * @method void setBillingMode(integer $BillingMode) Set <p>Billing mode.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
 * @method string getInstanceTitle() Obtain <p>Description of instance running status: for example "instance running".</p>
 * @method void setInstanceTitle(string $InstanceTitle) Set <p>Description of instance running status: for example "instance running".</p>
 * @method string getOfflineTime() Obtain <p>Default termination time of isolated instances. Pay-as-you-go instance offline after isolation. Monthly Subscription instance offline after 7 days. In the format of: 2020-02-15 10:20:00.</p>
 * @method void setOfflineTime(string $OfflineTime) Set <p>Default termination time of isolated instances. Pay-as-you-go instance offline after isolation. Monthly Subscription instance offline after 7 days. In the format of: 2020-02-15 10:20:00.</p>
 * @method integer getSubStatus() Obtain <p>Substatus of the instance in process returned.</p><ul><li>0: Read and write status of the disk.</li><li>1: Read-only status of the disk due to exceeding limit.</li></ul>
 * @method void setSubStatus(integer $SubStatus) Set <p>Substatus of the instance in process returned.</p><ul><li>0: Read and write status of the disk.</li><li>1: Read-only status of the disk due to exceeding limit.</li></ul>
 * @method array getTags() Obtain <p>Anti-affinity tag.</p>
 * @method void setTags(array $Tags) Set <p>Anti-affinity tag.</p>
 * @method array getInstanceNode() Obtain <p>Instance node information.</p>
 * @method void setInstanceNode(array $InstanceNode) Set <p>Instance node information.</p>
 * @method integer getRedisShardSize() Obtain <p>Shard size.</p>
 * @method void setRedisShardSize(integer $RedisShardSize) Set <p>Shard size.</p>
 * @method integer getRedisShardNum() Obtain <p>Number of shards.</p>
 * @method void setRedisShardNum(integer $RedisShardNum) Set <p>Number of shards.</p>
 * @method integer getRedisReplicasNum() Obtain <p>Number of replicas.</p>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set <p>Number of replicas.</p>
 * @method integer getPriceId() Obtain <p>Billing ID.</p>
 * @method void setPriceId(integer $PriceId) Set <p>Billing ID.</p>
 * @method string getCloseTime() Obtain <p>Time when an instance starts to be isolated.</p>
 * @method void setCloseTime(string $CloseTime) Set <p>Time when an instance starts to be isolated.</p>
 * @method integer getSlaveReadWeight() Obtain <p>Read weight of the secondary node.</p><ul><li>0: means disable read-only replica.</li><li>100: means enable read-only replica.</li></ul>
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) Set <p>Read weight of the secondary node.</p><ul><li>0: means disable read-only replica.</li><li>100: means enable read-only replica.</li></ul>
 * @method array getInstanceTags() Obtain <p>Tag information associated with an instance.</p>
 * @method void setInstanceTags(array $InstanceTags) Set <p>Tag information associated with an instance.</p>
 * @method string getProjectName() Obtain <p>Project name.</p>
 * @method void setProjectName(string $ProjectName) Set <p>Project name.</p>
 * @method boolean getNoAuth() Obtain <p>Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul></p>
 * @method void setNoAuth(boolean $NoAuth) Set <p>Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul></p>
 * @method integer getClientLimit() Obtain <p>Number of client connections.</p>
 * @method void setClientLimit(integer $ClientLimit) Set <p>Number of client connections.</p>
 * @method integer getDtsStatus() Obtain <p>DTS status (internal parameter, can be ignored by users).</p>
 * @method void setDtsStatus(integer $DtsStatus) Set <p>DTS status (internal parameter, can be ignored by users).</p>
 * @method integer getNetLimit() Obtain <p>Upper limit of the shard bandwidth. Unit: MB.</p>
 * @method void setNetLimit(integer $NetLimit) Set <p>Upper limit of the shard bandwidth. Unit: MB.</p>
 * @method integer getPasswordFree() Obtain <p>Password-free instance flag (internal parameter, which can be ignored).</p>
 * @method void setPasswordFree(integer $PasswordFree) Set <p>Password-free instance flag (internal parameter, which can be ignored).</p>
 * @method string getVip6() Obtain <p>Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.</p>
 * @method void setVip6(string $Vip6) Set <p>Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.</p>
 * @method string getIPv6() Obtain <p>Internal parameter, which can be ignored.</p>
 * @method void setIPv6(string $IPv6) Set <p>Internal parameter, which can be ignored.</p>
 * @method integer getReadOnly() Obtain <p>Instance read-only flag (internal parameter, which can be ignored).</p>
 * @method void setReadOnly(integer $ReadOnly) Set <p>Instance read-only flag (internal parameter, which can be ignored).</p>
 * @method string getRemainBandwidthDuration() Obtain <p>Internal parameter, which can be ignored.</p>
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) Set <p>Internal parameter, which can be ignored.</p>
 * @method integer getDiskSize() Obtain <p>For Redis instances, ignore this parameter.</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>For Redis instances, ignore this parameter.</p>
 * @method string getMonitorVersion() Obtain <p>Monitoring version.<ul><li>1m: 1-minute granularity monitoring. This monitoring granularity is deprecated. For details, please see <a href="https://www.tencentcloud.com/document/product/239/80653?from_cn_redirect=1">TencentDB for Redis 1-minute granularity deprecation notice</a>.</li><li>5s: 5-second granularity monitoring.</li></ul></p>
 * @method void setMonitorVersion(string $MonitorVersion) Set <p>Monitoring version.<ul><li>1m: 1-minute granularity monitoring. This monitoring granularity is deprecated. For details, please see <a href="https://www.tencentcloud.com/document/product/239/80653?from_cn_redirect=1">TencentDB for Redis 1-minute granularity deprecation notice</a>.</li><li>5s: 5-second granularity monitoring.</li></ul></p>
 * @method integer getClientLimitMin() Obtain <p>Minimum value that can be set for the maximum number of client connections.</p>
 * @method void setClientLimitMin(integer $ClientLimitMin) Set <p>Minimum value that can be set for the maximum number of client connections.</p>
 * @method integer getClientLimitMax() Obtain <p>Maximum value that can be set for the maximum number of client connections.</p>
 * @method void setClientLimitMax(integer $ClientLimitMax) Set <p>Maximum value that can be set for the maximum number of client connections.</p>
 * @method array getNodeSet() Obtain <p>Detailed node information of the instance.<br>Only multi-AZ instances will be returned.</p>
 * @method void setNodeSet(array $NodeSet) Set <p>Detailed node information of the instance.<br>Only multi-AZ instances will be returned.</p>
 * @method string getRegion() Obtain <p>Region information of an instance, for example, ap-guangzhou.</p>
 * @method void setRegion(string $Region) Set <p>Region information of an instance, for example, ap-guangzhou.</p>
 * @method string getWanAddress() Obtain <p>Public network address.</p>
 * @method void setWanAddress(string $WanAddress) Set <p>Public network address.</p>
 * @method string getPolarisServer() Obtain <p>Polaris service address for internal use.</p>
 * @method void setPolarisServer(string $PolarisServer) Set <p>Polaris service address for internal use.</p>
 * @method string getRedisClusterId() Obtain <p>CDC Redis cluster ID.</p>
 * @method void setRedisClusterId(string $RedisClusterId) Set <p>CDC Redis cluster ID.</p>
 * @method string getDedicatedClusterId() Obtain <p>CDC cluster ID.</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set <p>CDC cluster ID.</p>
 * @method string getProductVersion() Obtain <p>Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster edition.</li></ul></p>
 * @method void setProductVersion(string $ProductVersion) Set <p>Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster edition.</li></ul></p>
 * @method string getCurrentProxyVersion() Obtain <p>Current Proxy version of the instance.</p>
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set <p>Current Proxy version of the instance.</p>
 * @method string getCurrentRedisVersion() Obtain <p>Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.</p>
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) Set <p>Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.</p>
 * @method string getUpgradeProxyVersion() Obtain <p>Upgradable Proxy version of an instance.</p>
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) Set <p>Upgradable Proxy version of an instance.</p>
 * @method string getUpgradeRedisVersion() Obtain <p>Upgradable Cache minor version of an instance.</p>
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) Set <p>Upgradable Cache minor version of an instance.</p>
 * @method string getBackupMode() Obtain <p>Backup mode.</p><ul><li>SecondLevelBackup: second-level backup.</li><li>NormalLevelBackup: normal backup.</li></ul>
 * @method void setBackupMode(string $BackupMode) Set <p>Backup mode.</p><ul><li>SecondLevelBackup: second-level backup.</li><li>NormalLevelBackup: normal backup.</li></ul>
 * @method integer getDeleteProtectionSwitch() Obtain <p>Instance destruction protection switch.</p><ul><li>0: disabled.</li><li>1: enabled.</li></ul>
 * @method void setDeleteProtectionSwitch(integer $DeleteProtectionSwitch) Set <p>Instance destruction protection switch.</p><ul><li>0: disabled.</li><li>1: enabled.</li></ul>
 */
class InstanceSet extends AbstractModel
{
    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>User AppId. AppId is an application ID with a one-to-one correspondence to the account ID. Some Tencent Cloud products use this AppId.</p>
     */
    public $Appid;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul></p>
     */
    public $RegionId;

    /**
     * @var integer <p>Region ID.</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>vpc network ID, such as 75101.</p>
     */
    public $VpcId;

    /**
     * @var integer <p>Subnet ID under vpc, for example: 46315.</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul></p>
     */
    public $Status;

    /**
     * @var string <p>Instance VIP.</p>
     */
    public $WanIp;

    /**
     * @var integer <p>Instance port number.</p>
     */
    public $Port;

    /**
     * @var string <p>Instance creation time, for example, in the format of 2020-01-15 10:20:00.</p>
     */
    public $Createtime;

    /**
     * @var float <p>Instance memory capacity. Unit: MB (1 MB = 1024 KB).</p>
     */
    public $Size;

    /**
     * @var float <p>This field is deprecated. Please use the Tencent Cloud observability platform API interface <a href="https://www.tencentcloud.com/document/product/248/31014?from_cn_redirect=1">GetMonitorData</a> to obtain the memory capacity used by the instance.</p>
     * @deprecated
     */
    public $SizeUsed;

    /**
     * @var integer <p>Instance type.</p><p>Enumeration value:</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 8.0 memory edition (standard architecture).</li><li>22: Valkey 8.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>Whether the automatic renewal flag is set for an instance.</p><ul><li>1: set auto-renewal.</li><li>0: automatic renewal flag not set.</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>Expiration time of a monthly subscription instance.</p>
     */
    public $DeadlineTime;

    /**
     * @var string <p>Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.</p>
     */
    public $Engine;

    /**
     * @var string <p>Product type.<ul><li>standalone: standard version.</li><li>cluster: cluster version.</li></ul></p>
     */
    public $ProductType;

    /**
     * @var string <p>vpc Network id, such as vpc-fk33jsf43kgv.</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>subnet id under vpc, for example: subnet-fd3j6l35mm0.</p>
     */
    public $UniqSubnetId;

    /**
     * @var integer <p>Billing mode.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
     */
    public $BillingMode;

    /**
     * @var string <p>Description of instance running status: for example "instance running".</p>
     */
    public $InstanceTitle;

    /**
     * @var string <p>Default termination time of isolated instances. Pay-as-you-go instance offline after isolation. Monthly Subscription instance offline after 7 days. In the format of: 2020-02-15 10:20:00.</p>
     */
    public $OfflineTime;

    /**
     * @var integer <p>Substatus of the instance in process returned.</p><ul><li>0: Read and write status of the disk.</li><li>1: Read-only status of the disk due to exceeding limit.</li></ul>
     */
    public $SubStatus;

    /**
     * @var array <p>Anti-affinity tag.</p>
     */
    public $Tags;

    /**
     * @var array <p>Instance node information.</p>
     */
    public $InstanceNode;

    /**
     * @var integer <p>Shard size.</p>
     */
    public $RedisShardSize;

    /**
     * @var integer <p>Number of shards.</p>
     */
    public $RedisShardNum;

    /**
     * @var integer <p>Number of replicas.</p>
     */
    public $RedisReplicasNum;

    /**
     * @var integer <p>Billing ID.</p>
     */
    public $PriceId;

    /**
     * @var string <p>Time when an instance starts to be isolated.</p>
     */
    public $CloseTime;

    /**
     * @var integer <p>Read weight of the secondary node.</p><ul><li>0: means disable read-only replica.</li><li>100: means enable read-only replica.</li></ul>
     */
    public $SlaveReadWeight;

    /**
     * @var array <p>Tag information associated with an instance.</p>
     */
    public $InstanceTags;

    /**
     * @var string <p>Project name.</p>
     */
    public $ProjectName;

    /**
     * @var boolean <p>Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul></p>
     */
    public $NoAuth;

    /**
     * @var integer <p>Number of client connections.</p>
     */
    public $ClientLimit;

    /**
     * @var integer <p>DTS status (internal parameter, can be ignored by users).</p>
     */
    public $DtsStatus;

    /**
     * @var integer <p>Upper limit of the shard bandwidth. Unit: MB.</p>
     */
    public $NetLimit;

    /**
     * @var integer <p>Password-free instance flag (internal parameter, which can be ignored).</p>
     */
    public $PasswordFree;

    /**
     * @var string <p>Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.</p>
     */
    public $Vip6;

    /**
     * @var string <p>Internal parameter, which can be ignored.</p>
     */
    public $IPv6;

    /**
     * @var integer <p>Instance read-only flag (internal parameter, which can be ignored).</p>
     */
    public $ReadOnly;

    /**
     * @var string <p>Internal parameter, which can be ignored.</p>
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer <p>For Redis instances, ignore this parameter.</p>
     */
    public $DiskSize;

    /**
     * @var string <p>Monitoring version.<ul><li>1m: 1-minute granularity monitoring. This monitoring granularity is deprecated. For details, please see <a href="https://www.tencentcloud.com/document/product/239/80653?from_cn_redirect=1">TencentDB for Redis 1-minute granularity deprecation notice</a>.</li><li>5s: 5-second granularity monitoring.</li></ul></p>
     */
    public $MonitorVersion;

    /**
     * @var integer <p>Minimum value that can be set for the maximum number of client connections.</p>
     */
    public $ClientLimitMin;

    /**
     * @var integer <p>Maximum value that can be set for the maximum number of client connections.</p>
     */
    public $ClientLimitMax;

    /**
     * @var array <p>Detailed node information of the instance.<br>Only multi-AZ instances will be returned.</p>
     */
    public $NodeSet;

    /**
     * @var string <p>Region information of an instance, for example, ap-guangzhou.</p>
     */
    public $Region;

    /**
     * @var string <p>Public network address.</p>
     */
    public $WanAddress;

    /**
     * @var string <p>Polaris service address for internal use.</p>
     */
    public $PolarisServer;

    /**
     * @var string <p>CDC Redis cluster ID.</p>
     */
    public $RedisClusterId;

    /**
     * @var string <p>CDC cluster ID.</p>
     */
    public $DedicatedClusterId;

    /**
     * @var string <p>Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster edition.</li></ul></p>
     */
    public $ProductVersion;

    /**
     * @var string <p>Current Proxy version of the instance.</p>
     */
    public $CurrentProxyVersion;

    /**
     * @var string <p>Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.</p>
     */
    public $CurrentRedisVersion;

    /**
     * @var string <p>Upgradable Proxy version of an instance.</p>
     */
    public $UpgradeProxyVersion;

    /**
     * @var string <p>Upgradable Cache minor version of an instance.</p>
     */
    public $UpgradeRedisVersion;

    /**
     * @var string <p>Backup mode.</p><ul><li>SecondLevelBackup: second-level backup.</li><li>NormalLevelBackup: normal backup.</li></ul>
     */
    public $BackupMode;

    /**
     * @var integer <p>Instance destruction protection switch.</p><ul><li>0: disabled.</li><li>1: enabled.</li></ul>
     */
    public $DeleteProtectionSwitch;

    /**
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param integer $Appid <p>User AppId. AppId is an application ID with a one-to-one correspondence to the account ID. Some Tencent Cloud products use this AppId.</p>
     * @param integer $ProjectId <p>Project ID.</p>
     * @param integer $RegionId <p>Region ID.<ul><li>1: Guangzhou.</li><li>4: Shanghai.</li><li>5: Hong Kong (China).</li><li>7: Shanghai Finance.</li><li>8: Beijing.</li><li>9: Singapore.</li><li>11: Shenzhen Finance.</li><li>15: Western US (Silicon Valley).</li><li>16: Chengdu.</li><li>17: Frankfurt.</li><li>18: Seoul.</li><li>19: Chongqing.</li><li>22: Eastern US (Virginia).</li><li>23: Bangkok.</li><li>25: Tokyo.</li></ul></p>
     * @param integer $ZoneId <p>Region ID.</p>
     * @param integer $VpcId <p>vpc network ID, such as 75101.</p>
     * @param integer $SubnetId <p>Subnet ID under vpc, for example: 46315.</p>
     * @param integer $Status <p>Current instance status. <ul><li>0: to be initialized;</li> <li>1: in process;</li> <li>2: running;</li> <li>-2: isolated;</li> <li>-3: to be deleted.</li></ul></p>
     * @param string $WanIp <p>Instance VIP.</p>
     * @param integer $Port <p>Instance port number.</p>
     * @param string $Createtime <p>Instance creation time, for example, in the format of 2020-01-15 10:20:00.</p>
     * @param float $Size <p>Instance memory capacity. Unit: MB (1 MB = 1024 KB).</p>
     * @param float $SizeUsed <p>This field is deprecated. Please use the Tencent Cloud observability platform API interface <a href="https://www.tencentcloud.com/document/product/248/31014?from_cn_redirect=1">GetMonitorData</a> to obtain the memory capacity used by the instance.</p>
     * @param integer $Type <p>Instance type.</p><p>Enumeration value:</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>5: Redis 2.8 memory edition (standalone).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 8.0 memory edition (standard architecture).</li><li>22: Valkey 8.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).</li></ul>
     * @param integer $AutoRenewFlag <p>Whether the automatic renewal flag is set for an instance.</p><ul><li>1: set auto-renewal.</li><li>0: automatic renewal flag not set.</li></ul>
     * @param string $DeadlineTime <p>Expiration time of a monthly subscription instance.</p>
     * @param string $Engine <p>Engine. Valid values: Redis Community Edition and Tencent Cloud CKV.</p>
     * @param string $ProductType <p>Product type.<ul><li>standalone: standard version.</li><li>cluster: cluster version.</li></ul></p>
     * @param string $UniqVpcId <p>vpc Network id, such as vpc-fk33jsf43kgv.</p>
     * @param string $UniqSubnetId <p>subnet id under vpc, for example: subnet-fd3j6l35mm0.</p>
     * @param integer $BillingMode <p>Billing mode.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
     * @param string $InstanceTitle <p>Description of instance running status: for example "instance running".</p>
     * @param string $OfflineTime <p>Default termination time of isolated instances. Pay-as-you-go instance offline after isolation. Monthly Subscription instance offline after 7 days. In the format of: 2020-02-15 10:20:00.</p>
     * @param integer $SubStatus <p>Substatus of the instance in process returned.</p><ul><li>0: Read and write status of the disk.</li><li>1: Read-only status of the disk due to exceeding limit.</li></ul>
     * @param array $Tags <p>Anti-affinity tag.</p>
     * @param array $InstanceNode <p>Instance node information.</p>
     * @param integer $RedisShardSize <p>Shard size.</p>
     * @param integer $RedisShardNum <p>Number of shards.</p>
     * @param integer $RedisReplicasNum <p>Number of replicas.</p>
     * @param integer $PriceId <p>Billing ID.</p>
     * @param string $CloseTime <p>Time when an instance starts to be isolated.</p>
     * @param integer $SlaveReadWeight <p>Read weight of the secondary node.</p><ul><li>0: means disable read-only replica.</li><li>100: means enable read-only replica.</li></ul>
     * @param array $InstanceTags <p>Tag information associated with an instance.</p>
     * @param string $ProjectName <p>Project name.</p>
     * @param boolean $NoAuth <p>Whether an instance is a password-free instance. <ul><li>true: yes;</li> <li>false: no.</li></ul></p>
     * @param integer $ClientLimit <p>Number of client connections.</p>
     * @param integer $DtsStatus <p>DTS status (internal parameter, can be ignored by users).</p>
     * @param integer $NetLimit <p>Upper limit of the shard bandwidth. Unit: MB.</p>
     * @param integer $PasswordFree <p>Password-free instance flag (internal parameter, which can be ignored).</p>
     * @param string $Vip6 <p>Internal parameter, which can be ignored. This parameter is not properly named. It is recommended to use the IPv6 parameter to replace it.</p>
     * @param string $IPv6 <p>Internal parameter, which can be ignored.</p>
     * @param integer $ReadOnly <p>Instance read-only flag (internal parameter, which can be ignored).</p>
     * @param string $RemainBandwidthDuration <p>Internal parameter, which can be ignored.</p>
     * @param integer $DiskSize <p>For Redis instances, ignore this parameter.</p>
     * @param string $MonitorVersion <p>Monitoring version.<ul><li>1m: 1-minute granularity monitoring. This monitoring granularity is deprecated. For details, please see <a href="https://www.tencentcloud.com/document/product/239/80653?from_cn_redirect=1">TencentDB for Redis 1-minute granularity deprecation notice</a>.</li><li>5s: 5-second granularity monitoring.</li></ul></p>
     * @param integer $ClientLimitMin <p>Minimum value that can be set for the maximum number of client connections.</p>
     * @param integer $ClientLimitMax <p>Maximum value that can be set for the maximum number of client connections.</p>
     * @param array $NodeSet <p>Detailed node information of the instance.<br>Only multi-AZ instances will be returned.</p>
     * @param string $Region <p>Region information of an instance, for example, ap-guangzhou.</p>
     * @param string $WanAddress <p>Public network address.</p>
     * @param string $PolarisServer <p>Polaris service address for internal use.</p>
     * @param string $RedisClusterId <p>CDC Redis cluster ID.</p>
     * @param string $DedicatedClusterId <p>CDC cluster ID.</p>
     * @param string $ProductVersion <p>Product edition. <ul><li>local: local disk;</li> <li>cloud: cloud disk;</li> <li>cdc: CDC cluster edition.</li></ul></p>
     * @param string $CurrentProxyVersion <p>Current Proxy version of the instance.</p>
     * @param string $CurrentRedisVersion <p>Current Cache minor version of an instance. If the instance joins a global replication group, the kernel version of the global replication group will be displayed.</p>
     * @param string $UpgradeProxyVersion <p>Upgradable Proxy version of an instance.</p>
     * @param string $UpgradeRedisVersion <p>Upgradable Cache minor version of an instance.</p>
     * @param string $BackupMode <p>Backup mode.</p><ul><li>SecondLevelBackup: second-level backup.</li><li>NormalLevelBackup: normal backup.</li></ul>
     * @param integer $DeleteProtectionSwitch <p>Instance destruction protection switch.</p><ul><li>0: disabled.</li><li>1: enabled.</li></ul>
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
