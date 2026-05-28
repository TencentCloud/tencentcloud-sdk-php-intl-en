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
 * @method string getSubnetId() Obtain <p>Subnet ID</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID</p>
 * @method string getDbType() Obtain <p>Database type</p><p>Enumeration value:</p><ul><li>MYSQL: MYSQL</li></ul>
 * @method void setDbType(string $DbType) Set <p>Database type</p><p>Enumeration value:</p><ul><li>MYSQL: MYSQL</li></ul>
 * @method string getDbVersion() Obtain <p>Database version</p><p>Enumeration value:</p><ul><li>5.7: MySQL 5.7 edition</li><li>8.0: MySQL 8.0 edition</li></ul>
 * @method void setDbVersion(string $DbVersion) Set <p>Database version</p><p>Enumeration value:</p><ul><li>5.7: MySQL 5.7 edition</li><li>8.0: MySQL 8.0 edition</li></ul>
 * @method integer getProjectId() Obtain <p>project-ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>project-ID</p>
 * @method integer getCpu() Obtain <p>Required when DbMode is NORMAL or left blank<br>Cpu cores of the regular instance</p>
 * @method void setCpu(integer $Cpu) Set <p>Required when DbMode is NORMAL or left blank<br>Cpu cores of the regular instance</p>
 * @method integer getMemory() Obtain <p>Required when DbMode is NORMAL or left blank<br>Ordinary instance memory in GB</p>
 * @method void setMemory(integer $Memory) Set <p>Required when DbMode is NORMAL or left blank<br>Ordinary instance memory in GB</p>
 * @method integer getInstanceCount() Obtain <p>Instance count</p><p>Value ranges from [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n refers to one rw instance + n-1 ro instances (identical specifications).</li><li>For a more precise cluster composition collocation, please use InstanceInitInfos.</li><li>The value set by this parameter is suitable for provisioned resource cluster. If needed to set the specifications and quantity of Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Instance count</p><p>Value ranges from [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n refers to one rw instance + n-1 ro instances (identical specifications).</li><li>For a more precise cluster composition collocation, please use InstanceInitInfos.</li><li>The value set by this parameter is suitable for provisioned resource cluster. If needed to set the specifications and quantity of Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
 * @method integer getStorage() Obtain <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
 * @method void setStorage(integer $Storage) Set <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
 * @method string getClusterName() Obtain <p>Cluster name, length less than 64 characters, each character value ranges from uppercase/lowercase letters, digits, special symbols ('-', '_', '.')</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name, length less than 64 characters, each character value ranges from uppercase/lowercase letters, digits, special symbols ('-', '_', '.')</p>
 * @method string getAdminPassword() Obtain <p>Account (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/ with any three types required)</p>
 * @method void setAdminPassword(string $AdminPassword) Set <p>Account (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/ with any three types required)</p>
 * @method integer getPort() Obtain <p>Port, default 3306, in the range of [0, 65535)</p>
 * @method void setPort(integer $Port) Set <p>Port, default 3306, in the range of [0, 65535)</p>
 * @method integer getPayMode() Obtain <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Pay-as-you-go billing</li><li>1: Monthly Subscription</li></ul><p>Default value: 0</p>
 * @method void setPayMode(integer $PayMode) Set <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Pay-as-you-go billing</li><li>1: Monthly Subscription</li></ul><p>Default value: 0</p>
 * @method integer getCount() Obtain <p>Number of clusters to purchase. Optional value range: [1,50]. Default is 1.</p>
 * @method void setCount(integer $Count) Set <p>Number of clusters to purchase. Optional value range: [1,50]. Default is 1.</p>
 * @method string getRollbackStrategy() Obtain <p>Rollback type</p><p>Enumeration value:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
 * @method void setRollbackStrategy(string $RollbackStrategy) Set <p>Rollback type</p><p>Enumeration value:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
 * @method integer getRollbackId() Obtain <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
 * @method void setRollbackId(integer $RollbackId) Set <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
 * @method string getOriginalClusterId() Obtain <p>During rollback, input the source cluster ID to search for the source poolId</p>
 * @method void setOriginalClusterId(string $OriginalClusterId) Set <p>During rollback, input the source cluster ID to search for the source poolId</p>
 * @method string getExpectTime() Obtain <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
 * @method void setExpectTime(string $ExpectTime) Set <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
 * @method integer getExpectTimeThresh() Obtain <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of specified time.</p>
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) Set <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of specified time.</p>
 * @method integer getStorageLimit() Obtain <p>Ordinary instance storage cap, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.</p>
 * @method void setStorageLimit(integer $StorageLimit) Set <p>Ordinary instance storage cap, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.</p>
 * @method integer getTimeSpan() Obtain <p>Annual and monthly subscription duration</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Annual and monthly subscription duration</p>
 * @method string getTimeUnit() Obtain <p>Annual and monthly subscription duration unit, ['s', 'd', 'm', 'y']</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Annual and monthly subscription duration unit, ['s', 'd', 'm', 'y']</p>
 * @method integer getAutoRenewFlag() Obtain <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration value:</p><ul><li>0: Default renewal method</li><li>1: Auto-renewal</li><li>2: No auto-renewal</li></ul><p>Default value: 0</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration value:</p><ul><li>0: Default renewal method</li><li>1: Auto-renewal</li><li>2: No auto-renewal</li></ul><p>Default value: 0</p>
 * @method integer getAutoVoucher() Obtain <p>Whether to automatically select voucher 1 Yes 0 No Default value: 0</p><p>Enumeration value:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Whether to automatically select voucher 1 Yes 0 No Default value: 0</p><p>Enumeration value:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
 * @method integer getHaCount() Obtain <p>Instance count (this parameter is deprecated and only for existing accommodative)</p>
 * @method void setHaCount(integer $HaCount) Set <p>Instance count (this parameter is deprecated and only for existing accommodative)</p>
 * @method string getOrderSource() Obtain <p>Order source</p>
 * @method void setOrderSource(string $OrderSource) Set <p>Order source</p>
 * @method array getResourceTags() Obtain <p>tag Array info that should be bound for cluster creation</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>tag Array info that should be bound for cluster creation</p>
 * @method string getDbMode() Obtain <p>Db type</p><p>Enumeration value:</p><ul><li>NORMAL: NORMAL instance</li><li>SERVERLESS: SERVERLESS instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default NORMAL)</p>
 * @method void setDbMode(string $DbMode) Set <p>Db type</p><p>Enumeration value:</p><ul><li>NORMAL: NORMAL instance</li><li>SERVERLESS: SERVERLESS instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default NORMAL)</p>
 * @method float getMinCpu() Obtain <p>Required when DbMode is SERVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
 * @method void setMinCpu(float $MinCpu) Set <p>Required when DbMode is SERVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
 * @method float getMaxCpu() Obtain <p>Required when DbMode is SERVERLESS:<br>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>Required when DbMode is SERVERLESS:<br>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
 * @method string getAutoPause() Obtain <p>No auto pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Take effect when DbMode is SERVERLESS</p>
 * @method void setAutoPause(string $AutoPause) Set <p>No auto pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Take effect when DbMode is SERVERLESS</p>
 * @method integer getAutoPauseDelay() Obtain <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
 * @method integer getStoragePayMode() Obtain <p>The storage billing mode of the cluster. Pay-As-You-Go: 0, Monthly Subscription: 1. Default is Pay-As-You-Go.<br>When DbType is MYSQL and the compute billing mode of the cluster is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be Pay-As-You-Go.<br>Rollback and clone do not support Monthly Subscription storage.</p>
 * @method void setStoragePayMode(integer $StoragePayMode) Set <p>The storage billing mode of the cluster. Pay-As-You-Go: 0, Monthly Subscription: 1. Default is Pay-As-You-Go.<br>When DbType is MYSQL and the compute billing mode of the cluster is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be Pay-As-You-Go.<br>Rollback and clone do not support Monthly Subscription storage.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group id array</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group id array</p>
 * @method array getAlarmPolicyIds() Obtain <p>Alarm policy Id array</p>
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set <p>Alarm policy Id array</p>
 * @method array getClusterParams() Obtain <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive</p>
 * @method void setClusterParams(array $ClusterParams) Set <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive</p>
 * @method integer getDealMode() Obtain <p>Transaction mode</p><p>Enumeration value:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
 * @method void setDealMode(integer $DealMode) Set <p>Transaction mode</p><p>Enumeration value:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
 * @method integer getParamTemplateId() Obtain <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) Set <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
 * @method string getSlaveZone() Obtain <p>Multi-AZ address</p>
 * @method void setSlaveZone(string $SlaveZone) Set <p>Multi-AZ address</p>
 * @method array getInstanceInitInfos() Obtain <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
 * @method string getGdnId() Obtain <p>Global database unique ID</p>
 * @method void setGdnId(string $GdnId) Set <p>Global database unique ID</p>
 * @method ProxyConfig getProxyConfig() Obtain <p>Database proxy configuration</p>
 * @method void setProxyConfig(ProxyConfig $ProxyConfig) Set <p>Database proxy configuration</p>
 * @method string getAutoArchive() Obtain <p>Auto archive or not</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
 * @method void setAutoArchive(string $AutoArchive) Set <p>Auto archive or not</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
 * @method integer getAutoArchiveDelayHours() Obtain <p>Archiving processing time after pausing</p><p>Measurement unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS.</p>
 * @method void setAutoArchiveDelayHours(integer $AutoArchiveDelayHours) Set <p>Archiving processing time after pausing</p><p>Measurement unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS.</p>
 * @method string getClusterLevel() Obtain <p>Cluster level, optional. Example: P0, P1. (This field can be ignored)</p>
 * @method void setClusterLevel(string $ClusterLevel) Set <p>Cluster level, optional. Example: P0, P1. (This field can be ignored)</p>
 * @method string getCynosVersion() Obtain <p>Kernel minor version</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>Kernel minor version</p>
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
     * @var string <p>Subnet ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Database type</p><p>Enumeration value:</p><ul><li>MYSQL: MYSQL</li></ul>
     */
    public $DbType;

    /**
     * @var string <p>Database version</p><p>Enumeration value:</p><ul><li>5.7: MySQL 5.7 edition</li><li>8.0: MySQL 8.0 edition</li></ul>
     */
    public $DbVersion;

    /**
     * @var integer <p>project-ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Required when DbMode is NORMAL or left blank<br>Cpu cores of the regular instance</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Required when DbMode is NORMAL or left blank<br>Ordinary instance memory in GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>Instance count</p><p>Value ranges from [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n refers to one rw instance + n-1 ro instances (identical specifications).</li><li>For a more precise cluster composition collocation, please use InstanceInitInfos.</li><li>The value set by this parameter is suitable for provisioned resource cluster. If needed to set the specifications and quantity of Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
     */
    public $InstanceCount;

    /**
     * @var integer <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
     */
    public $Storage;

    /**
     * @var string <p>Cluster name, length less than 64 characters, each character value ranges from uppercase/lowercase letters, digits, special symbols ('-', '_', '.')</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Account (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/ with any three types required)</p>
     */
    public $AdminPassword;

    /**
     * @var integer <p>Port, default 3306, in the range of [0, 65535)</p>
     */
    public $Port;

    /**
     * @var integer <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Pay-as-you-go billing</li><li>1: Monthly Subscription</li></ul><p>Default value: 0</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Number of clusters to purchase. Optional value range: [1,50]. Default is 1.</p>
     */
    public $Count;

    /**
     * @var string <p>Rollback type</p><p>Enumeration value:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
     */
    public $RollbackStrategy;

    /**
     * @var integer <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
     */
    public $RollbackId;

    /**
     * @var string <p>During rollback, input the source cluster ID to search for the source poolId</p>
     */
    public $OriginalClusterId;

    /**
     * @var string <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
     */
    public $ExpectTime;

    /**
     * @var integer <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of specified time.</p>
     */
    public $ExpectTimeThresh;

    /**
     * @var integer <p>Ordinary instance storage cap, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>Annual and monthly subscription duration</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>Annual and monthly subscription duration unit, ['s', 'd', 'm', 'y']</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration value:</p><ul><li>0: Default renewal method</li><li>1: Auto-renewal</li><li>2: No auto-renewal</li></ul><p>Default value: 0</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Whether to automatically select voucher 1 Yes 0 No Default value: 0</p><p>Enumeration value:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>Instance count (this parameter is deprecated and only for existing accommodative)</p>
     */
    public $HaCount;

    /**
     * @var string <p>Order source</p>
     */
    public $OrderSource;

    /**
     * @var array <p>tag Array info that should be bound for cluster creation</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Db type</p><p>Enumeration value:</p><ul><li>NORMAL: NORMAL instance</li><li>SERVERLESS: SERVERLESS instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default NORMAL)</p>
     */
    public $DbMode;

    /**
     * @var float <p>Required when DbMode is SERVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
     */
    public $MinCpu;

    /**
     * @var float <p>Required when DbMode is SERVERLESS:<br>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>No auto pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Take effect when DbMode is SERVERLESS</p>
     */
    public $AutoPause;

    /**
     * @var integer <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
     */
    public $AutoPauseDelay;

    /**
     * @var integer <p>The storage billing mode of the cluster. Pay-As-You-Go: 0, Monthly Subscription: 1. Default is Pay-As-You-Go.<br>When DbType is MYSQL and the compute billing mode of the cluster is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be Pay-As-You-Go.<br>Rollback and clone do not support Monthly Subscription storage.</p>
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
     * @var array <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive</p>
     */
    public $ClusterParams;

    /**
     * @var integer <p>Transaction mode</p><p>Enumeration value:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
     */
    public $DealMode;

    /**
     * @var integer <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
     */
    public $ParamTemplateId;

    /**
     * @var string <p>Multi-AZ address</p>
     */
    public $SlaveZone;

    /**
     * @var array <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
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
     * @var string <p>Auto archive or not</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
     */
    public $AutoArchive;

    /**
     * @var integer <p>Archiving processing time after pausing</p><p>Measurement unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS.</p>
     */
    public $AutoArchiveDelayHours;

    /**
     * @var string <p>Cluster level, optional. Example: P0, P1. (This field can be ignored)</p>
     */
    public $ClusterLevel;

    /**
     * @var string <p>Kernel minor version</p>
     */
    public $CynosVersion;

    /**
     * @param string $Zone <p>AZ.</p>
     * @param string $VpcId <p>VPC network ID</p>
     * @param string $SubnetId <p>Subnet ID</p>
     * @param string $DbType <p>Database type</p><p>Enumeration value:</p><ul><li>MYSQL: MYSQL</li></ul>
     * @param string $DbVersion <p>Database version</p><p>Enumeration value:</p><ul><li>5.7: MySQL 5.7 edition</li><li>8.0: MySQL 8.0 edition</li></ul>
     * @param integer $ProjectId <p>project-ID</p>
     * @param integer $Cpu <p>Required when DbMode is NORMAL or left blank<br>Cpu cores of the regular instance</p>
     * @param integer $Memory <p>Required when DbMode is NORMAL or left blank<br>Ordinary instance memory in GB</p>
     * @param integer $InstanceCount <p>Instance count</p><p>Value ranges from [1, 16]</p><p>Default value: 2</p><ul><li>A value of 2 means one rw instance + one ro instance.</li><li>The transmitted n refers to one rw instance + n-1 ro instances (identical specifications).</li><li>For a more precise cluster composition collocation, please use InstanceInitInfos.</li><li>The value set by this parameter is suitable for provisioned resource cluster. If needed to set the specifications and quantity of Serverless cluster, please use the InstanceInitInfo structure in InstanceInitInfos.n.</li></ul>
     * @param integer $Storage <p>This parameter is meaningless and abandoned.<br>Storage size, in GB.</p>
     * @param string $ClusterName <p>Cluster name, length less than 64 characters, each character value ranges from uppercase/lowercase letters, digits, special symbols ('-', '_', '.')</p>
     * @param string $AdminPassword <p>Account (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&amp;*_-+=`|(){}[]:;&#39;&lt;&gt;,.?/ with any three types required)</p>
     * @param integer $Port <p>Port, default 3306, in the range of [0, 65535)</p>
     * @param integer $PayMode <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Pay-as-you-go billing</li><li>1: Monthly Subscription</li></ul><p>Default value: 0</p>
     * @param integer $Count <p>Number of clusters to purchase. Optional value range: [1,50]. Default is 1.</p>
     * @param string $RollbackStrategy <p>Rollback type</p><p>Enumeration value:</p><ul><li>noneRollback: No rollback</li><li>snapRollback: Snapshot rollback</li><li>timeRollback: Point-in-time rollback</li></ul>
     * @param integer $RollbackId <p>Snapshot rollback means snapshotId; point-in-time rollback means queryId. A value of 0 indicates requirement to judge whether the time point is valid.</p>
     * @param string $OriginalClusterId <p>During rollback, input the source cluster ID to search for the source poolId</p>
     * @param string $ExpectTime <p>Point-in-time rollback, specified time; snapshot rollback, snapshot time</p>
     * @param integer $ExpectTimeThresh <p>This parameter is meaningless and abandoned.<br>Point-in-time rollback, allowed range of specified time.</p>
     * @param integer $StorageLimit <p>Ordinary instance storage cap, in GB<br>When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.</p>
     * @param integer $TimeSpan <p>Annual and monthly subscription duration</p>
     * @param string $TimeUnit <p>Annual and monthly subscription duration unit, ['s', 'd', 'm', 'y']</p>
     * @param integer $AutoRenewFlag <p>Whether Annual/Monthly Subscription is auto-renewed</p><p>Enumeration value:</p><ul><li>0: Default renewal method</li><li>1: Auto-renewal</li><li>2: No auto-renewal</li></ul><p>Default value: 0</p>
     * @param integer $AutoVoucher <p>Whether to automatically select voucher 1 Yes 0 No Default value: 0</p><p>Enumeration value:</p><ul><li>1: Yes</li><li>0: No</li></ul><p>Default value: 0</p>
     * @param integer $HaCount <p>Instance count (this parameter is deprecated and only for existing accommodative)</p>
     * @param string $OrderSource <p>Order source</p>
     * @param array $ResourceTags <p>tag Array info that should be bound for cluster creation</p>
     * @param string $DbMode <p>Db type</p><p>Enumeration value:</p><ul><li>NORMAL: NORMAL instance</li><li>SERVERLESS: SERVERLESS instance</li></ul><p>Default value: NORMAL</p><p>Selectable when DbType is MYSQL (default NORMAL)</p>
     * @param float $MinCpu <p>Required when DbMode is SERVERLESS<br>Minimum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs</p>
     * @param float $MaxCpu <p>Required when DbMode is SERVERLESS:<br>Maximum value of cpu. For optional range, see API response of DescribeServerlessInstanceSpecs.</p>
     * @param string $AutoPause <p>No auto pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: yes</p><p>Take effect when DbMode is SERVERLESS</p>
     * @param integer $AutoPauseDelay <p>When DbMode is SERVERLESS, specify the delay for Cluster Auto-Pause in seconds. Optional range: [600,691200]<br>Default value: 600</p>
     * @param integer $StoragePayMode <p>The storage billing mode of the cluster. Pay-As-You-Go: 0, Monthly Subscription: 1. Default is Pay-As-You-Go.<br>When DbType is MYSQL and the compute billing mode of the cluster is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be Pay-As-You-Go.<br>Rollback and clone do not support Monthly Subscription storage.</p>
     * @param array $SecurityGroupIds <p>Security group id array</p>
     * @param array $AlarmPolicyIds <p>Alarm policy Id array</p>
     * @param array $ClusterParams <p>Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names, 1-case-insensitive, 0-case-sensitive</p>
     * @param integer $DealMode <p>Transaction mode</p><p>Enumeration value:</p><ul><li>0: Place order and pay</li><li>1: Place order</li></ul><p>Default value: 0</p>
     * @param integer $ParamTemplateId <p>Parameter template ID. The parameter template ID can be obtained through querying parameter template information DescribeParamTemplates.</p>
     * @param string $SlaveZone <p>Multi-AZ address</p>
     * @param array $InstanceInitInfos <p>Instance initialization configuration information is mainly used to select different specification instances during cluster purchase.</p>
     * @param string $GdnId <p>Global database unique ID</p>
     * @param ProxyConfig $ProxyConfig <p>Database proxy configuration</p>
     * @param string $AutoArchive <p>Auto archive or not</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul><p>Default value: no</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS</p>
     * @param integer $AutoArchiveDelayHours <p>Archiving processing time after pausing</p><p>Measurement unit: hour</p><p>Default value: 12</p><p>This parameter takes effect only when the primary instance of the current cluster is SERVERLESS.</p>
     * @param string $ClusterLevel <p>Cluster level, optional. Example: P0, P1. (This field can be ignored)</p>
     * @param string $CynosVersion <p>Kernel minor version</p>
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
    }
}
