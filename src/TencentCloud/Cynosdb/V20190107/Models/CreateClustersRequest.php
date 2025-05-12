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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusters request structure.
 *
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
 * @method string getDbVersion() Obtain Database version. Valid values: 
<li> Valid values for `MYSQL`: 5.7 and 8.0 </li>
 * @method void setDbVersion(string $DbVersion) Set Database version. Valid values: 
<li> Valid values for `MYSQL`: 5.7 and 8.0 </li>
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getCpu() Obtain It is required when `DbMode` is set to `NORMAL` or left empty.
Number of CPU cores of normal instance
 * @method void setCpu(integer $Cpu) Set It is required when `DbMode` is set to `NORMAL` or left empty.
Number of CPU cores of normal instance
 * @method integer getMemory() Obtain It is required when `DbMode` is set to `NORMAL` or left empty.
Memory of a non-serverless instance in GB
 * @method void setMemory(integer $Memory) Set It is required when `DbMode` is set to `NORMAL` or left empty.
Memory of a non-serverless instance in GB
 * @method integer getInstanceCount() Obtain Instance count. valid values: a quantity range from 0 to 16. the default value is 2 (that is, one rw instance + one ro instance). the transmitted n represents 1 rw instance + (n - 1) ro instances (with identical specifications). if a more precise cluster composition collocation is required, please use InstanceInitInfos.
 * @method void setInstanceCount(integer $InstanceCount) Set Instance count. valid values: a quantity range from 0 to 16. the default value is 2 (that is, one rw instance + one ro instance). the transmitted n represents 1 rw instance + (n - 1) ro instances (with identical specifications). if a more precise cluster composition collocation is required, please use InstanceInitInfos.
 * @method integer getStorage() Obtain This parameter has been deprecated.
Storage capacity in GB
 * @method void setStorage(integer $Storage) Set This parameter has been deprecated.
Storage capacity in GB
 * @method string getClusterName() Obtain Cluster name, which can contain less than 64 letters, digits, or symbols (-_.).
 * @method void setClusterName(string $ClusterName) Set Cluster name, which can contain less than 64 letters, digits, or symbols (-_.).
 * @method string getAdminPassword() Obtain Account password, which must contain 8-64 characters in at least three of the following four types: uppercase letters, lowercase letters, digits, and symbols (~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/).
 * @method void setAdminPassword(string $AdminPassword) Set Account password, which must contain 8-64 characters in at least three of the following four types: uppercase letters, lowercase letters, digits, and symbols (~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/).
 * @method integer getPort() Obtain Port. Valid range: [0, 65535). Default value: 3306
 * @method void setPort(integer $Port) Set Port. Valid range: [0, 65535). Default value: 3306
 * @method integer getPayMode() Obtain Billing mode. `0`: pay-as-you-go; `1`: monthly subscription. Default value: `0`
 * @method void setPayMode(integer $PayMode) Set Billing mode. `0`: pay-as-you-go; `1`: monthly subscription. Default value: `0`
 * @method integer getCount() Obtain Number of purchased clusters. Valid range: [1,50]. Default value: 1
 * @method void setCount(integer $Count) Set Number of purchased clusters. Valid range: [1,50]. Default value: 1
 * @method string getRollbackStrategy() Obtain Rollback type:
noneRollback: no rollback;
snapRollback: rollback by snapshot;
timeRollback: rollback by time point
 * @method void setRollbackStrategy(string $RollbackStrategy) Set Rollback type:
noneRollback: no rollback;
snapRollback: rollback by snapshot;
timeRollback: rollback by time point
 * @method integer getRollbackId() Obtain `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
 * @method void setRollbackId(integer $RollbackId) Set `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
 * @method string getOriginalClusterId() Obtain The source cluster ID passed in during rollback to find the source `poolId`
 * @method void setOriginalClusterId(string $OriginalClusterId) Set The source cluster ID passed in during rollback to find the source `poolId`
 * @method string getExpectTime() Obtain Specified time for time point rollback or snapshot time for snapshot rollback
 * @method void setExpectTime(string $ExpectTime) Set Specified time for time point rollback or snapshot time for snapshot rollback
 * @method integer getExpectTimeThresh() Obtain This parameter has been deprecated.
Specified allowed time range for time point rollback
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) Set This parameter has been deprecated.
Specified allowed time range for time point rollback
 * @method integer getStorageLimit() Obtain Storage upper limit of normal instance in GB
If `DbType` is `MYSQL` and the storage billing mode is monthly subscription, the parameter value can’t exceed the maximum storage corresponding to the CPU and memory specifications.
 * @method void setStorageLimit(integer $StorageLimit) Set Storage upper limit of normal instance in GB
If `DbType` is `MYSQL` and the storage billing mode is monthly subscription, the parameter value can’t exceed the maximum storage corresponding to the CPU and memory specifications.
 * @method integer getTimeSpan() Obtain Purchase duration of monthly subscription plan
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration of monthly subscription plan
 * @method string getTimeUnit() Obtain Duration unit of monthly subscription. Valid values: `s`, `d`, `m`, `y`
 * @method void setTimeUnit(string $TimeUnit) Set Duration unit of monthly subscription. Valid values: `s`, `d`, `m`, `y`
 * @method integer getAutoRenewFlag() Obtain Specifies whether the annual/monthly subscription is auto-renewed. the default value is 0.
0 indicates the default renewal method. 1 means auto-renewal. 2 means no auto-renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Specifies whether the annual/monthly subscription is auto-renewed. the default value is 0.
0 indicates the default renewal method. 1 means auto-renewal. 2 means no auto-renewal.
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. `1`: yes; `0`: no. Default value: `0`
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. `1`: yes; `0`: no. Default value: `0`
 * @method integer getHaCount() Obtain Number of instances (this parameter has been disused and is retained only for compatibility with existing instances)
 * @method void setHaCount(integer $HaCount) Set Number of instances (this parameter has been disused and is retained only for compatibility with existing instances)
 * @method string getOrderSource() Obtain Order source
 * @method void setOrderSource(string $OrderSource) Set Order source
 * @method array getResourceTags() Obtain Array of tags to be bound to the created cluster
 * @method void setResourceTags(array $ResourceTags) Set Array of tags to be bound to the created cluster
 * @method string getDbMode() Obtain Database type
Valid values when `DbType` is `MYSQL` (default value: `NORMAL`):
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method void setDbMode(string $DbMode) Set Database type
Valid values when `DbType` is `MYSQL` (default value: `NORMAL`):
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method float getMinCpu() Obtain This parameter is required if `DbMode` is `SERVERLESS`.
Minimum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
 * @method void setMinCpu(float $MinCpu) Set This parameter is required if `DbMode` is `SERVERLESS`.
Minimum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
 * @method float getMaxCpu() Obtain This parameter is required if `DbMode` is `SERVERLESS`.
Maximum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
 * @method void setMaxCpu(float $MaxCpu) Set This parameter is required if `DbMode` is `SERVERLESS`.
Maximum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
 * @method string getAutoPause() Obtain This parameter specifies whether the cluster will be automatically paused if `DbMode` is `SERVERLESS`. Valid values:
<li>yes</li>
<li>no</li>
Default value: yes
 * @method void setAutoPause(string $AutoPause) Set This parameter specifies whether the cluster will be automatically paused if `DbMode` is `SERVERLESS`. Valid values:
<li>yes</li>
<li>no</li>
Default value: yes
 * @method integer getAutoPauseDelay() Obtain This parameter specifies the delay for automatic cluster pause in seconds if `DbMode` is `SERVERLESS`. Value range: [600,691200]
Default value: `600`
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set This parameter specifies the delay for automatic cluster pause in seconds if `DbMode` is `SERVERLESS`. Value range: [600,691200]
Default value: `600`
 * @method integer getStoragePayMode() Obtain The billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription). Default value: `0`.
If `DbType` is `MYSQL` and the billing mode of cluster compute is pay-as-you-go (or the `DbMode` is `SERVERLESS`), the billing mode of cluster storage must be pay-as-you-go.
Clusters with storage billed in monthly subscription can’t be cloned or rolled back.
 * @method void setStoragePayMode(integer $StoragePayMode) Set The billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription). Default value: `0`.
If `DbType` is `MYSQL` and the billing mode of cluster compute is pay-as-you-go (or the `DbMode` is `SERVERLESS`), the billing mode of cluster storage must be pay-as-you-go.
Clusters with storage billed in monthly subscription can’t be cloned or rolled back.
 * @method array getSecurityGroupIds() Obtain Array of security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Array of security group IDs
 * @method array getAlarmPolicyIds() Obtain Array of alarm policy IDs
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set Array of alarm policy IDs
 * @method array getClusterParams() Obtain Array of parameters. Valid values: `character_set_server` (utf8｜latin1｜gbk｜utf8mb4), `lower_case_table_names`. 0: case-sensitive; 1: case-insensitive).
 * @method void setClusterParams(array $ClusterParams) Set Array of parameters. Valid values: `character_set_server` (utf8｜latin1｜gbk｜utf8mb4), `lower_case_table_names`. 0: case-sensitive; 1: case-insensitive).
 * @method integer getDealMode() Obtain Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
 * @method void setDealMode(integer $DealMode) Set Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
 * @method integer getParamTemplateId() Obtain Parameter template ID, which can be obtained by querying parameter template information “DescribeParamTemplates”
 * @method void setParamTemplateId(integer $ParamTemplateId) Set Parameter template ID, which can be obtained by querying parameter template information “DescribeParamTemplates”
 * @method string getSlaveZone() Obtain Multi-AZ address
 * @method void setSlaveZone(string $SlaveZone) Set Multi-AZ address
 * @method array getInstanceInitInfos() Obtain Instance initialization configuration information, which is used to select instances with different specifications when purchasing a cluster.
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set Instance initialization configuration information, which is used to select instances with different specifications when purchasing a cluster.
 */
class CreateClustersRequest extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var string Database version. Valid values: 
<li> Valid values for `MYSQL`: 5.7 and 8.0 </li>
     */
    public $DbVersion;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer It is required when `DbMode` is set to `NORMAL` or left empty.
Number of CPU cores of normal instance
     */
    public $Cpu;

    /**
     * @var integer It is required when `DbMode` is set to `NORMAL` or left empty.
Memory of a non-serverless instance in GB
     */
    public $Memory;

    /**
     * @var integer Instance count. valid values: a quantity range from 0 to 16. the default value is 2 (that is, one rw instance + one ro instance). the transmitted n represents 1 rw instance + (n - 1) ro instances (with identical specifications). if a more precise cluster composition collocation is required, please use InstanceInitInfos.
     */
    public $InstanceCount;

    /**
     * @var integer This parameter has been deprecated.
Storage capacity in GB
     */
    public $Storage;

    /**
     * @var string Cluster name, which can contain less than 64 letters, digits, or symbols (-_.).
     */
    public $ClusterName;

    /**
     * @var string Account password, which must contain 8-64 characters in at least three of the following four types: uppercase letters, lowercase letters, digits, and symbols (~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/).
     */
    public $AdminPassword;

    /**
     * @var integer Port. Valid range: [0, 65535). Default value: 3306
     */
    public $Port;

    /**
     * @var integer Billing mode. `0`: pay-as-you-go; `1`: monthly subscription. Default value: `0`
     */
    public $PayMode;

    /**
     * @var integer Number of purchased clusters. Valid range: [1,50]. Default value: 1
     */
    public $Count;

    /**
     * @var string Rollback type:
noneRollback: no rollback;
snapRollback: rollback by snapshot;
timeRollback: rollback by time point
     */
    public $RollbackStrategy;

    /**
     * @var integer `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
     */
    public $RollbackId;

    /**
     * @var string The source cluster ID passed in during rollback to find the source `poolId`
     */
    public $OriginalClusterId;

    /**
     * @var string Specified time for time point rollback or snapshot time for snapshot rollback
     */
    public $ExpectTime;

    /**
     * @var integer This parameter has been deprecated.
Specified allowed time range for time point rollback
     */
    public $ExpectTimeThresh;

    /**
     * @var integer Storage upper limit of normal instance in GB
If `DbType` is `MYSQL` and the storage billing mode is monthly subscription, the parameter value can’t exceed the maximum storage corresponding to the CPU and memory specifications.
     */
    public $StorageLimit;

    /**
     * @var integer Purchase duration of monthly subscription plan
     */
    public $TimeSpan;

    /**
     * @var string Duration unit of monthly subscription. Valid values: `s`, `d`, `m`, `y`
     */
    public $TimeUnit;

    /**
     * @var integer Specifies whether the annual/monthly subscription is auto-renewed. the default value is 0.
0 indicates the default renewal method. 1 means auto-renewal. 2 means no auto-renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to automatically select a voucher. `1`: yes; `0`: no. Default value: `0`
     */
    public $AutoVoucher;

    /**
     * @var integer Number of instances (this parameter has been disused and is retained only for compatibility with existing instances)
     */
    public $HaCount;

    /**
     * @var string Order source
     */
    public $OrderSource;

    /**
     * @var array Array of tags to be bound to the created cluster
     */
    public $ResourceTags;

    /**
     * @var string Database type
Valid values when `DbType` is `MYSQL` (default value: `NORMAL`):
<li>NORMAL</li>
<li>SERVERLESS</li>
     */
    public $DbMode;

    /**
     * @var float This parameter is required if `DbMode` is `SERVERLESS`.
Minimum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
     */
    public $MinCpu;

    /**
     * @var float This parameter is required if `DbMode` is `SERVERLESS`.
Maximum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
     */
    public $MaxCpu;

    /**
     * @var string This parameter specifies whether the cluster will be automatically paused if `DbMode` is `SERVERLESS`. Valid values:
<li>yes</li>
<li>no</li>
Default value: yes
     */
    public $AutoPause;

    /**
     * @var integer This parameter specifies the delay for automatic cluster pause in seconds if `DbMode` is `SERVERLESS`. Value range: [600,691200]
Default value: `600`
     */
    public $AutoPauseDelay;

    /**
     * @var integer The billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription). Default value: `0`.
If `DbType` is `MYSQL` and the billing mode of cluster compute is pay-as-you-go (or the `DbMode` is `SERVERLESS`), the billing mode of cluster storage must be pay-as-you-go.
Clusters with storage billed in monthly subscription can’t be cloned or rolled back.
     */
    public $StoragePayMode;

    /**
     * @var array Array of security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @var array Array of alarm policy IDs
     */
    public $AlarmPolicyIds;

    /**
     * @var array Array of parameters. Valid values: `character_set_server` (utf8｜latin1｜gbk｜utf8mb4), `lower_case_table_names`. 0: case-sensitive; 1: case-insensitive).
     */
    public $ClusterParams;

    /**
     * @var integer Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
     */
    public $DealMode;

    /**
     * @var integer Parameter template ID, which can be obtained by querying parameter template information “DescribeParamTemplates”
     */
    public $ParamTemplateId;

    /**
     * @var string Multi-AZ address
     */
    public $SlaveZone;

    /**
     * @var array Instance initialization configuration information, which is used to select instances with different specifications when purchasing a cluster.
     */
    public $InstanceInitInfos;

    /**
     * @param string $Zone AZ
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
     * @param string $DbVersion Database version. Valid values: 
<li> Valid values for `MYSQL`: 5.7 and 8.0 </li>
     * @param integer $ProjectId Project ID.
     * @param integer $Cpu It is required when `DbMode` is set to `NORMAL` or left empty.
Number of CPU cores of normal instance
     * @param integer $Memory It is required when `DbMode` is set to `NORMAL` or left empty.
Memory of a non-serverless instance in GB
     * @param integer $InstanceCount Instance count. valid values: a quantity range from 0 to 16. the default value is 2 (that is, one rw instance + one ro instance). the transmitted n represents 1 rw instance + (n - 1) ro instances (with identical specifications). if a more precise cluster composition collocation is required, please use InstanceInitInfos.
     * @param integer $Storage This parameter has been deprecated.
Storage capacity in GB
     * @param string $ClusterName Cluster name, which can contain less than 64 letters, digits, or symbols (-_.).
     * @param string $AdminPassword Account password, which must contain 8-64 characters in at least three of the following four types: uppercase letters, lowercase letters, digits, and symbols (~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/).
     * @param integer $Port Port. Valid range: [0, 65535). Default value: 3306
     * @param integer $PayMode Billing mode. `0`: pay-as-you-go; `1`: monthly subscription. Default value: `0`
     * @param integer $Count Number of purchased clusters. Valid range: [1,50]. Default value: 1
     * @param string $RollbackStrategy Rollback type:
noneRollback: no rollback;
snapRollback: rollback by snapshot;
timeRollback: rollback by time point
     * @param integer $RollbackId `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
     * @param string $OriginalClusterId The source cluster ID passed in during rollback to find the source `poolId`
     * @param string $ExpectTime Specified time for time point rollback or snapshot time for snapshot rollback
     * @param integer $ExpectTimeThresh This parameter has been deprecated.
Specified allowed time range for time point rollback
     * @param integer $StorageLimit Storage upper limit of normal instance in GB
If `DbType` is `MYSQL` and the storage billing mode is monthly subscription, the parameter value can’t exceed the maximum storage corresponding to the CPU and memory specifications.
     * @param integer $TimeSpan Purchase duration of monthly subscription plan
     * @param string $TimeUnit Duration unit of monthly subscription. Valid values: `s`, `d`, `m`, `y`
     * @param integer $AutoRenewFlag Specifies whether the annual/monthly subscription is auto-renewed. the default value is 0.
0 indicates the default renewal method. 1 means auto-renewal. 2 means no auto-renewal.
     * @param integer $AutoVoucher Whether to automatically select a voucher. `1`: yes; `0`: no. Default value: `0`
     * @param integer $HaCount Number of instances (this parameter has been disused and is retained only for compatibility with existing instances)
     * @param string $OrderSource Order source
     * @param array $ResourceTags Array of tags to be bound to the created cluster
     * @param string $DbMode Database type
Valid values when `DbType` is `MYSQL` (default value: `NORMAL`):
<li>NORMAL</li>
<li>SERVERLESS</li>
     * @param float $MinCpu This parameter is required if `DbMode` is `SERVERLESS`.
Minimum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
     * @param float $MaxCpu This parameter is required if `DbMode` is `SERVERLESS`.
Maximum number of CPU cores. For the value range, see the returned result of `DescribeServerlessInstanceSpecs`.
     * @param string $AutoPause This parameter specifies whether the cluster will be automatically paused if `DbMode` is `SERVERLESS`. Valid values:
<li>yes</li>
<li>no</li>
Default value: yes
     * @param integer $AutoPauseDelay This parameter specifies the delay for automatic cluster pause in seconds if `DbMode` is `SERVERLESS`. Value range: [600,691200]
Default value: `600`
     * @param integer $StoragePayMode The billing mode of cluster storage. Valid values: `0` (pay-as-you-go), `1` (monthly subscription). Default value: `0`.
If `DbType` is `MYSQL` and the billing mode of cluster compute is pay-as-you-go (or the `DbMode` is `SERVERLESS`), the billing mode of cluster storage must be pay-as-you-go.
Clusters with storage billed in monthly subscription can’t be cloned or rolled back.
     * @param array $SecurityGroupIds Array of security group IDs
     * @param array $AlarmPolicyIds Array of alarm policy IDs
     * @param array $ClusterParams Array of parameters. Valid values: `character_set_server` (utf8｜latin1｜gbk｜utf8mb4), `lower_case_table_names`. 0: case-sensitive; 1: case-insensitive).
     * @param integer $DealMode Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
     * @param integer $ParamTemplateId Parameter template ID, which can be obtained by querying parameter template information “DescribeParamTemplates”
     * @param string $SlaveZone Multi-AZ address
     * @param array $InstanceInitInfos Instance initialization configuration information, which is used to select instances with different specifications when purchasing a cluster.
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
    }
}
