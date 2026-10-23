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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusters request structure.
 *
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getVpcId() Obtain <p>VPC network ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC network ID</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getDbType() Obtain <p>Database type</p><p>Enumeration values:</p><ul><li>MYSQL: MYSQL</li></ul>
 * @method void setDbType(string $DbType) Set <p>Database type</p><p>Enumeration values:</p><ul><li>MYSQL: MYSQL</li></ul>
 * @method string getDbVersion() Obtain <p>Database version</p><p>Enumeration values:</p><ul><li>5.7: MySQL 5.7 version</li><li>8.0: MySQL 8.0 version</li></ul>
 * @method void setDbVersion(string $DbVersion) Set <p>Database version</p><p>Enumeration values:</p><ul><li>5.7: MySQL 5.7 version</li><li>8.0: MySQL 8.0 version</li></ul>
 * @method integer getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID.</p>
 * @method integer getCpu() Obtain <p>Required when DbMode is NORMAL or left empty<br>Number of Cpu cores of a NORMAL instance</p>
 * @method void setCpu(integer $Cpu) Set <p>Required when DbMode is NORMAL or left empty<br>Number of Cpu cores of a NORMAL instance</p>
 * @method integer getMemory() Obtain <p>Required when DbMode is NORMAL or not specified<br>Normal instance memory in GB</p>
 * @method void setMemory(integer $Memory) Set <p>Required when DbMode is NORMAL or not specified<br>Normal instance memory in GB</p>
 * @method integer getInstanceCount() Obtain <p>Instance count</p><p>Value range: [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n means 1 rw instance + n-1 ro instances (identical specifications).</li><li>If you need a more precise cluster composition, please use InstanceInitInfos.</li><li>The value set by this parameter is applicable to provisioned resource clusters. To set the specifications and quantity of instances in a Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Instance count</p><p>Value range: [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n means 1 rw instance + n-1 ro instances (identical specifications).</li><li>If you need a more precise cluster composition, please use InstanceInitInfos.</li><li>The value set by this parameter is applicable to provisioned resource clusters. To set the specifications and quantity of instances in a Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
 * @method integer getStorage() Obtain <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
 * @method void setStorage(integer $Storage) Set <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
 * @method string getClusterName() Obtain <p>Cluster name, length less than 64 characters. Each character can be an uppercase/lowercase letter, digit, or special symbol ('-', '_', '.')</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name, length less than 64 characters. Each character can be an uppercase/lowercase letter, digit, or special symbol ('-', '_', '.')</p>
 * @method string getAdminPassword() Obtain <p>Account password (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/)</p>
 * @method void setAdminPassword(string $AdminPassword) Set <p>Account password (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/)</p>
 * @method integer getPort() Obtain <p>Port. Default value: 3306. Value range: [0, 65535)</p>
 * @method void setPort(integer $Port) Set <p>Port. Default value: 3306. Value range: [0, 65535)</p>
 * @method integer getPayMode() Obtain <p>Billing mode</p><p>Enumeration values:</p><ul><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li></ul><p>Default value: 0</p>
 * @method void setPayMode(integer $PayMode) Set <p>Billing mode</p><p>Enumeration values:</p><ul><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li></ul><p>Default value: 0</p>
 * @method integer getCount() Obtain <p>Number of clusters to purchase. Optional value range: [1,50]. Default value: 1</p>
 * @method void setCount(integer $Count) Set <p>Number of clusters to purchase. Optional value range: [1,50]. Default value: 1</p>
 * @method string getRollbackStrategy() Obtain <p>Rollback type</p><p>Enumeration values:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
 * @method void setRollbackStrategy(string $RollbackStrategy) Set <p>Rollback type</p><p>Enumeration values:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
 * @method integer getRollbackId() Obtain <p>Snapshot rollback refers to snapshotId; point-in-time rollback refers to queryId. If it is 0, you need to determine whether the time point is valid.</p>
 * @method void setRollbackId(integer $RollbackId) Set <p>Snapshot rollback refers to snapshotId; point-in-time rollback refers to queryId. If it is 0, you need to determine whether the time point is valid.</p>
 * @method string getOriginalClusterId() Obtain <p>During rollback, import the source cluster ID to search for the source poolId</p>
 * @method void setOriginalClusterId(string $OriginalClusterId) Set <p>During rollback, import the source cluster ID to search for the source poolId</p>
 * @method string getExpectTime() Obtain <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
 * @method void setExpectTime(string $ExpectTime) Set <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
 * @method integer getExpectTimeThresh() Obtain <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of the specified time</p>
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) Set <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of the specified time</p>
 * @method integer getStorageLimit() Obtain <p>Storage limit of a regular instance, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory</p>
 * @method void setStorageLimit(integer $StorageLimit) Set <p>Storage limit of a regular instance, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory</p>
 * @method integer getTimeSpan() Obtain <p>Annual and monthly subscription duration</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Annual and monthly subscription duration</p>
 * @method string getTimeUnit() Obtain <p>Annual and monthly subscription duration measurement unit, [&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Annual and monthly subscription duration measurement unit, [&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
 * @method integer getAutoRenewFlag() Obtain <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration values:</p><ul><li>0: default renewal method</li><li>1: auto-renewal</li><li>2: no auto-renewal</li></ul><p>Default value: 0</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration values:</p><ul><li>0: default renewal method</li><li>1: auto-renewal</li><li>2: no auto-renewal</li></ul><p>Default value: 0</p>
 * @method integer getAutoVoucher() Obtain <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p><p>Enumeration values:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p><p>Enumeration values:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
 * @method integer getHaCount() Obtain <p>Instance count (this parameter is deprecated and only accommodative for existing use)</p>
 * @method void setHaCount(integer $HaCount) Set <p>Instance count (this parameter is deprecated and only accommodative for existing use)</p>
 * @method string getOrderSource() Obtain <p>Order Source</p>
 * @method void setOrderSource(string $OrderSource) Set <p>Order Source</p>
 * @method array getResourceTags() Obtain <p>tag array information that needs to be bound for cluster creation</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>tag array information that needs to be bound for cluster creation</p>
 * @method string getDbMode() Obtain <p>DB type</p><p>Enumeration values:</p><ul><li>NORMAL: normal instance</li><li>SERVERLESS: serverless instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default: NORMAL)</p>
 * @method void setDbMode(string $DbMode) Set <p>DB type</p><p>Enumeration values:</p><ul><li>NORMAL: normal instance</li><li>SERVERLESS: serverless instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default: NORMAL)</p>
 * @method float getMinCpu() Obtain <p>Required when DbMode is SERVERLESS<br>Minimum cpu value. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
 * @method void setMinCpu(float $MinCpu) Set <p>Required when DbMode is SERVERLESS<br>Minimum cpu value. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
 * @method float getMaxCpu() Obtain <p>Required when DbMode is SERVERLESS:<br>maximum value of cpu. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>Required when DbMode is SERVERLESS:<br>maximum value of cpu. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
 * @method string getAutoPause() Obtain <p>Whether to auto pause</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Takes effect when DbMode is SERVERLESS</p>
 * @method void setAutoPause(string $AutoPause) Set <p>Whether to auto pause</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Takes effect when DbMode is SERVERLESS</p>
 * @method integer getAutoPauseDelay() Obtain <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
 * @method integer getStoragePayMode() Obtain <p>Cluster storage billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default is pay-as-you-go.<br>When DbType is MYSQL and the cluster compute billing mode is postpaid (including when DbMode is SERVERLESS), the storage billing mode can only be pay-as-you-go.<br>Rollback and clone do not support monthly subscription storage.</p>
 * @method void setStoragePayMode(integer $StoragePayMode) Set <p>Cluster storage billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default is pay-as-you-go.<br>When DbType is MYSQL and the cluster compute billing mode is postpaid (including when DbMode is SERVERLESS), the storage billing mode can only be pay-as-you-go.<br>Rollback and clone do not support monthly subscription storage.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group id array</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group id array</p>
 * @method array getAlarmPolicyIds() Obtain <p>Alarm policy Id array</p>
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set <p>Alarm policy Id array</p>
 * @method array getClusterParams() Obtain <p>Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.</p>
 * @method void setClusterParams(array $ClusterParams) Set <p>Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.</p>
 * @method integer getDealMode() Obtain <p>Transaction mode</p><p>Enumeration values:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
 * @method void setDealMode(integer $DealMode) Set <p>Transaction mode</p><p>Enumeration values:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
 * @method integer getParamTemplateId() Obtain <p>Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) Set <p>Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.</p>
 * @method string getSlaveZone() Obtain <p>Multi-AZ address</p>
 * @method void setSlaveZone(string $SlaveZone) Set <p>Multi-AZ address</p>
 * @method array getInstanceInitInfos() Obtain <p>Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.</p>
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set <p>Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.</p>
 * @method string getGdnId() Obtain <p>Global database unique ID</p>
 * @method void setGdnId(string $GdnId) Set <p>Global database unique ID</p>
 * @method ProxyConfig getProxyConfig() Obtain <p>Database proxy configuration</p>
 * @method void setProxyConfig(ProxyConfig $ProxyConfig) Set <p>Database proxy configuration</p>
 * @method string getAutoArchive() Obtain <p>Whether to automatically archive</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
 * @method void setAutoArchive(string $AutoArchive) Set <p>Whether to automatically archive</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
 * @method integer getAutoArchiveDelayHours() Obtain <p>Archiving processing time after pausing</p><p>Unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
 * @method void setAutoArchiveDelayHours(integer $AutoArchiveDelayHours) Set <p>Archiving processing time after pausing</p><p>Unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
 * @method string getClusterLevel() Obtain <p>Cluster level, nullable. For example, P0, P1. (This field can be ignored.)</p>
 * @method void setClusterLevel(string $ClusterLevel) Set <p>Cluster level, nullable. For example, P0, P1. (This field can be ignored.)</p>
 * @method string getCynosVersion() Obtain <p>Kernel minor version number.</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>Kernel minor version number.</p>
 * @method string getSyncWay() Obtain <p>Synchronization method. Available values: async, semisync, sync.</p>
 * @method void setSyncWay(string $SyncWay) Set <p>Synchronization method. Available values: async, semisync, sync.</p>
 * @method integer getSemiSyncTimeout() Obtain <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the standby availability zone cluster to confirm a transaction, if the timeout period is exceeded, the replication method will degrade to asynchronous replication.</p><p>Value range: [1000, 4294967295]</p><p>Unit: ms</p><p>Default value: 10000</p>
 * @method void setSemiSyncTimeout(integer $SemiSyncTimeout) Set <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the standby availability zone cluster to confirm a transaction, if the timeout period is exceeded, the replication method will degrade to asynchronous replication.</p><p>Value range: [1000, 4294967295]</p><p>Unit: ms</p><p>Default value: 10000</p>
 */
class CreateClustersRequest extends AbstractModel
{
    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>VPC network ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Database type</p><p>Enumeration values:</p><ul><li>MYSQL: MYSQL</li></ul>
     */
    public $DbType;

    /**
     * @var string <p>Database version</p><p>Enumeration values:</p><ul><li>5.7: MySQL 5.7 version</li><li>8.0: MySQL 8.0 version</li></ul>
     */
    public $DbVersion;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Required when DbMode is NORMAL or left empty<br>Number of Cpu cores of a NORMAL instance</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Required when DbMode is NORMAL or not specified<br>Normal instance memory in GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>Instance count</p><p>Value range: [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n means 1 rw instance + n-1 ro instances (identical specifications).</li><li>If you need a more precise cluster composition, please use InstanceInitInfos.</li><li>The value set by this parameter is applicable to provisioned resource clusters. To set the specifications and quantity of instances in a Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
     */
    public $InstanceCount;

    /**
     * @var integer <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
     */
    public $Storage;

    /**
     * @var string <p>Cluster name, length less than 64 characters. Each character can be an uppercase/lowercase letter, digit, or special symbol ('-', '_', '.')</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Account password (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/)</p>
     */
    public $AdminPassword;

    /**
     * @var integer <p>Port. Default value: 3306. Value range: [0, 65535)</p>
     */
    public $Port;

    /**
     * @var integer <p>Billing mode</p><p>Enumeration values:</p><ul><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li></ul><p>Default value: 0</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Number of clusters to purchase. Optional value range: [1,50]. Default value: 1</p>
     */
    public $Count;

    /**
     * @var string <p>Rollback type</p><p>Enumeration values:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
     */
    public $RollbackStrategy;

    /**
     * @var integer <p>Snapshot rollback refers to snapshotId; point-in-time rollback refers to queryId. If it is 0, you need to determine whether the time point is valid.</p>
     */
    public $RollbackId;

    /**
     * @var string <p>During rollback, import the source cluster ID to search for the source poolId</p>
     */
    public $OriginalClusterId;

    /**
     * @var string <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
     */
    public $ExpectTime;

    /**
     * @var integer <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of the specified time</p>
     */
    public $ExpectTimeThresh;

    /**
     * @var integer <p>Storage limit of a regular instance, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>Annual and monthly subscription duration</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>Annual and monthly subscription duration measurement unit, [&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration values:</p><ul><li>0: default renewal method</li><li>1: auto-renewal</li><li>2: no auto-renewal</li></ul><p>Default value: 0</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p><p>Enumeration values:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>Instance count (this parameter is deprecated and only accommodative for existing use)</p>
     */
    public $HaCount;

    /**
     * @var string <p>Order Source</p>
     */
    public $OrderSource;

    /**
     * @var array <p>tag array information that needs to be bound for cluster creation</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>DB type</p><p>Enumeration values:</p><ul><li>NORMAL: normal instance</li><li>SERVERLESS: serverless instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default: NORMAL)</p>
     */
    public $DbMode;

    /**
     * @var float <p>Required when DbMode is SERVERLESS<br>Minimum cpu value. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
     */
    public $MinCpu;

    /**
     * @var float <p>Required when DbMode is SERVERLESS:<br>maximum value of cpu. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>Whether to auto pause</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Takes effect when DbMode is SERVERLESS</p>
     */
    public $AutoPause;

    /**
     * @var integer <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
     */
    public $AutoPauseDelay;

    /**
     * @var integer <p>Cluster storage billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default is pay-as-you-go.<br>When DbType is MYSQL and the cluster compute billing mode is postpaid (including when DbMode is SERVERLESS), the storage billing mode can only be pay-as-you-go.<br>Rollback and clone do not support monthly subscription storage.</p>
     */
    public $StoragePayMode;

    /**
     * @var array <p>Security group id array</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>Alarm policy Id array</p>
     */
    public $AlarmPolicyIds;

    /**
     * @var array <p>Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.</p>
     */
    public $ClusterParams;

    /**
     * @var integer <p>Transaction mode</p><p>Enumeration values:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
     */
    public $DealMode;

    /**
     * @var integer <p>Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.</p>
     */
    public $ParamTemplateId;

    /**
     * @var string <p>Multi-AZ address</p>
     */
    public $SlaveZone;

    /**
     * @var array <p>Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.</p>
     */
    public $InstanceInitInfos;

    /**
     * @var string <p>Global database unique ID</p>
     */
    public $GdnId;

    /**
     * @var ProxyConfig <p>Database proxy configuration</p>
     */
    public $ProxyConfig;

    /**
     * @var string <p>Whether to automatically archive</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
     */
    public $AutoArchive;

    /**
     * @var integer <p>Archiving processing time after pausing</p><p>Unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
     */
    public $AutoArchiveDelayHours;

    /**
     * @var string <p>Cluster level, nullable. For example, P0, P1. (This field can be ignored.)</p>
     */
    public $ClusterLevel;

    /**
     * @var string <p>Kernel minor version number.</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>Synchronization method. Available values: async, semisync, sync.</p>
     */
    public $SyncWay;

    /**
     * @var integer <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the standby availability zone cluster to confirm a transaction, if the timeout period is exceeded, the replication method will degrade to asynchronous replication.</p><p>Value range: [1000, 4294967295]</p><p>Unit: ms</p><p>Default value: 10000</p>
     */
    public $SemiSyncTimeout;

    /**
     * @param string $Zone <p>AZ.</p>
     * @param string $VpcId <p>VPC network ID</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $DbType <p>Database type</p><p>Enumeration values:</p><ul><li>MYSQL: MYSQL</li></ul>
     * @param string $DbVersion <p>Database version</p><p>Enumeration values:</p><ul><li>5.7: MySQL 5.7 version</li><li>8.0: MySQL 8.0 version</li></ul>
     * @param integer $ProjectId <p>Project ID.</p>
     * @param integer $Cpu <p>Required when DbMode is NORMAL or left empty<br>Number of Cpu cores of a NORMAL instance</p>
     * @param integer $Memory <p>Required when DbMode is NORMAL or not specified<br>Normal instance memory in GB</p>
     * @param integer $InstanceCount <p>Instance count</p><p>Value range: [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n means 1 rw instance + n-1 ro instances (identical specifications).</li><li>If you need a more precise cluster composition, please use InstanceInitInfos.</li><li>The value set by this parameter is applicable to provisioned resource clusters. To set the specifications and quantity of instances in a Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
     * @param integer $Storage <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
     * @param string $ClusterName <p>Cluster name, length less than 64 characters. Each character can be an uppercase/lowercase letter, digit, or special symbol ('-', '_', '.')</p>
     * @param string $AdminPassword <p>Account password (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/)</p>
     * @param integer $Port <p>Port. Default value: 3306. Value range: [0, 65535)</p>
     * @param integer $PayMode <p>Billing mode</p><p>Enumeration values:</p><ul><li>0: pay-as-you-go</li><li>1: yearly/monthly subscription</li></ul><p>Default value: 0</p>
     * @param integer $Count <p>Number of clusters to purchase. Optional value range: [1,50]. Default value: 1</p>
     * @param string $RollbackStrategy <p>Rollback type</p><p>Enumeration values:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
     * @param integer $RollbackId <p>Snapshot rollback refers to snapshotId; point-in-time rollback refers to queryId. If it is 0, you need to determine whether the time point is valid.</p>
     * @param string $OriginalClusterId <p>During rollback, import the source cluster ID to search for the source poolId</p>
     * @param string $ExpectTime <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
     * @param integer $ExpectTimeThresh <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of the specified time</p>
     * @param integer $StorageLimit <p>Storage limit of a regular instance, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory</p>
     * @param integer $TimeSpan <p>Annual and monthly subscription duration</p>
     * @param string $TimeUnit <p>Annual and monthly subscription duration measurement unit, [&#39;s&#39;,&#39;d&#39;,&#39;m&#39;,&#39;y&#39;]</p>
     * @param integer $AutoRenewFlag <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration values:</p><ul><li>0: default renewal method</li><li>1: auto-renewal</li><li>2: no auto-renewal</li></ul><p>Default value: 0</p>
     * @param integer $AutoVoucher <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p><p>Enumeration values:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
     * @param integer $HaCount <p>Instance count (this parameter is deprecated and only accommodative for existing use)</p>
     * @param string $OrderSource <p>Order Source</p>
     * @param array $ResourceTags <p>tag array information that needs to be bound for cluster creation</p>
     * @param string $DbMode <p>DB type</p><p>Enumeration values:</p><ul><li>NORMAL: normal instance</li><li>SERVERLESS: serverless instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default: NORMAL)</p>
     * @param float $MinCpu <p>Required when DbMode is SERVERLESS<br>Minimum cpu value. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
     * @param float $MaxCpu <p>Required when DbMode is SERVERLESS:<br>maximum value of cpu. For the optional range, see the API return of DescribeServerlessInstanceSpecs</p>
     * @param string $AutoPause <p>Whether to auto pause</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Takes effect when DbMode is SERVERLESS</p>
     * @param integer $AutoPauseDelay <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
     * @param integer $StoragePayMode <p>Cluster storage billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default is pay-as-you-go.<br>When DbType is MYSQL and the cluster compute billing mode is postpaid (including when DbMode is SERVERLESS), the storage billing mode can only be pay-as-you-go.<br>Rollback and clone do not support monthly subscription storage.</p>
     * @param array $SecurityGroupIds <p>Security group id array</p>
     * @param array $AlarmPolicyIds <p>Alarm policy Id array</p>
     * @param array $ClusterParams <p>Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.</p>
     * @param integer $DealMode <p>Transaction mode</p><p>Enumeration values:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
     * @param integer $ParamTemplateId <p>Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.</p>
     * @param string $SlaveZone <p>Multi-AZ address</p>
     * @param array $InstanceInitInfos <p>Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.</p>
     * @param string $GdnId <p>Global database unique ID</p>
     * @param ProxyConfig $ProxyConfig <p>Database proxy configuration</p>
     * @param string $AutoArchive <p>Whether to automatically archive</p><p>Enumeration values:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
     * @param integer $AutoArchiveDelayHours <p>Archiving processing time after pausing</p><p>Unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
     * @param string $ClusterLevel <p>Cluster level, nullable. For example, P0, P1. (This field can be ignored.)</p>
     * @param string $CynosVersion <p>Kernel minor version number.</p>
     * @param string $SyncWay <p>Synchronization method. Available values: async, semisync, sync.</p>
     * @param integer $SemiSyncTimeout <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the standby availability zone cluster to confirm a transaction, if the timeout period is exceeded, the replication method will degrade to asynchronous replication.</p><p>Value range: [1000, 4294967295]</p><p>Unit: ms</p><p>Default value: 10000</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("OriginalClusterId",$param) and $param["OriginalClusterId"] !== null) {
            $this->OriginalClusterId = $param["OriginalClusterId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("ExpectTimeThresh",$param) and $param["ExpectTimeThresh"] !== null) {
            $this->ExpectTimeThresh = $param["ExpectTimeThresh"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("HaCount",$param) and $param["HaCount"] !== null) {
            $this->HaCount = $param["HaCount"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AlarmPolicyIds",$param) and $param["AlarmPolicyIds"] !== null) {
            $this->AlarmPolicyIds = $param["AlarmPolicyIds"];
        }

        if (array_key_exists("ClusterParams",$param) and $param["ClusterParams"] !== null) {
            $this->ClusterParams = [];
            foreach ($param["ClusterParams"] as $key => $value){
                $obj = new ParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParams, $obj);
            }
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("InstanceInitInfos",$param) and $param["InstanceInitInfos"] !== null) {
            $this->InstanceInitInfos = [];
            foreach ($param["InstanceInitInfos"] as $key => $value){
                $obj = new InstanceInitInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("ProxyConfig",$param) and $param["ProxyConfig"] !== null) {
            $this->ProxyConfig = new ProxyConfig();
            $this->ProxyConfig->deserialize($param["ProxyConfig"]);
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("AutoArchiveDelayHours",$param) and $param["AutoArchiveDelayHours"] !== null) {
            $this->AutoArchiveDelayHours = $param["AutoArchiveDelayHours"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("SyncWay",$param) and $param["SyncWay"] !== null) {
            $this->SyncWay = $param["SyncWay"];
        }

        if (array_key_exists("SemiSyncTimeout",$param) and $param["SemiSyncTimeout"] !== null) {
            $this->SemiSyncTimeout = $param["SemiSyncTimeout"];
        }
    }
}
