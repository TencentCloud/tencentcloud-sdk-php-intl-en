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
<li> Valid values for `MYSQL`: 5.7 </li>
 * @method void setDbVersion(string $DbVersion) Set Database version. Valid values: 
<li> Valid values for `MYSQL`: 5.7 </li>
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getCpu() Obtain Number of CPU cores of normal instance
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of normal instance
 * @method integer getMemory() Obtain Memory of normal instance
 * @method void setMemory(integer $Memory) Set Memory of normal instance
 * @method integer getStorage() Obtain Storage
 * @method void setStorage(integer $Storage) Set Storage
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getAdminPassword() Obtain Account password, which can contain 8–64 characters and must contain at least two of the following types of characters: letters, digits, and special symbols (_+-&=!@#$%^*()~)
 * @method void setAdminPassword(string $AdminPassword) Set Account password, which can contain 8–64 characters and must contain at least two of the following types of characters: letters, digits, and special symbols (_+-&=!@#$%^*()~)
 * @method integer getPort() Obtain Port. Default value: 5432
 * @method void setPort(integer $Port) Set Port. Default value: 5432
 * @method integer getPayMode() Obtain Billing mode. 0: pay-as-you-go; 1: monthly subscription. Default value: 0
 * @method void setPayMode(integer $PayMode) Set Billing mode. 0: pay-as-you-go; 1: monthly subscription. Default value: 0
 * @method integer getCount() Obtain Number of purchased items. Currently, only 1 can be passed in. If this parameter is left empty, 1 will be used by default.
 * @method void setCount(integer $Count) Set Number of purchased items. Currently, only 1 can be passed in. If this parameter is left empty, 1 will be used by default.
 * @method string getRollbackStrategy() Obtain Rollback type:
noneRollback: no rollback
snapRollback: rollback by snapshot
timeRollback: rollback by time point
 * @method void setRollbackStrategy(string $RollbackStrategy) Set Rollback type:
noneRollback: no rollback
snapRollback: rollback by snapshot
timeRollback: rollback by time point
 * @method integer getRollbackId() Obtain `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
 * @method void setRollbackId(integer $RollbackId) Set `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
 * @method string getOriginalClusterId() Obtain Pass in the source cluster ID during rollback to find the source `poolId`
 * @method void setOriginalClusterId(string $OriginalClusterId) Set Pass in the source cluster ID during rollback to find the source `poolId`
 * @method string getExpectTime() Obtain Specified time for time point rollback or snapshot time for snapshot rollback
 * @method void setExpectTime(string $ExpectTime) Set Specified time for time point rollback or snapshot time for snapshot rollback
 * @method integer getExpectTimeThresh() Obtain Specified allowed time range for time point rollback
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) Set Specified allowed time range for time point rollback
 * @method integer getStorageLimit() Obtain Storage upper limit of normal instance in GB
 * @method void setStorageLimit(integer $StorageLimit) Set Storage upper limit of normal instance in GB
 * @method integer getInstanceCount() Obtain Number of instances
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances
 * @method integer getTimeSpan() Obtain Purchase duration of monthly subscription plan
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration of monthly subscription plan
 * @method string getTimeUnit() Obtain Purchase duration unit of monthly subscription plan
 * @method void setTimeUnit(string $TimeUnit) Set Purchase duration unit of monthly subscription plan
 * @method integer getAutoRenewFlag() Obtain Whether auto-renewal is enabled for monthly subscription plan
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether auto-renewal is enabled for monthly subscription plan
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
 * @method integer getHaCount() Obtain Number of instances (this parameter has been disused and is retained only for compatibility with existing instances)
 * @method void setHaCount(integer $HaCount) Set Number of instances (this parameter has been disused and is retained only for compatibility with existing instances)
 * @method string getOrderSource() Obtain Order source
 * @method void setOrderSource(string $OrderSource) Set Order source
 * @method array getResourceTags() Obtain Array of tags to be bound to the created cluster
 * @method void setResourceTags(array $ResourceTags) Set Array of tags to be bound to the created cluster
 * @method string getDbMode() Obtain Database type
Valid values when `DbType` is `MYSQL` (default value: NORMAL):
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method void setDbMode(string $DbMode) Set Database type
Valid values when `DbType` is `MYSQL` (default value: NORMAL):
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method float getMinCpu() Obtain This parameter is required if `DbMode` is `SERVERLESS`
Minimum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
 * @method void setMinCpu(float $MinCpu) Set This parameter is required if `DbMode` is `SERVERLESS`
Minimum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
 * @method float getMaxCpu() Obtain This parameter is required if `DbMode` is `SERVERLESS`:
Maximum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
 * @method void setMaxCpu(float $MaxCpu) Set This parameter is required if `DbMode` is `SERVERLESS`:
Maximum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
 * @method string getAutoPause() Obtain This parameter specifies whether the cluster will be automatically paused if `DbMode` is `SERVERLESS`. Valid values:
<li>yes</li>
<li>no</li>
Default value: yes
 * @method void setAutoPause(string $AutoPause) Set This parameter specifies whether the cluster will be automatically paused if `DbMode` is `SERVERLESS`. Valid values:
<li>yes</li>
<li>no</li>
Default value: yes
 * @method integer getAutoPauseDelay() Obtain This parameter specifies the delay for automatic cluster pause in seconds if `DbMode` is `SERVERLESS`. Value range: [600,691200]
Default value: 600
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set This parameter specifies the delay for automatic cluster pause in seconds if `DbMode` is `SERVERLESS`. Value range: [600,691200]
Default value: 600
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
<li> Valid values for `MYSQL`: 5.7 </li>
     */
    public $DbVersion;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Number of CPU cores of normal instance
     */
    public $Cpu;

    /**
     * @var integer Memory of normal instance
     */
    public $Memory;

    /**
     * @var integer Storage
     */
    public $Storage;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Account password, which can contain 8–64 characters and must contain at least two of the following types of characters: letters, digits, and special symbols (_+-&=!@#$%^*()~)
     */
    public $AdminPassword;

    /**
     * @var integer Port. Default value: 5432
     */
    public $Port;

    /**
     * @var integer Billing mode. 0: pay-as-you-go; 1: monthly subscription. Default value: 0
     */
    public $PayMode;

    /**
     * @var integer Number of purchased items. Currently, only 1 can be passed in. If this parameter is left empty, 1 will be used by default.
     */
    public $Count;

    /**
     * @var string Rollback type:
noneRollback: no rollback
snapRollback: rollback by snapshot
timeRollback: rollback by time point
     */
    public $RollbackStrategy;

    /**
     * @var integer `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
     */
    public $RollbackId;

    /**
     * @var string Pass in the source cluster ID during rollback to find the source `poolId`
     */
    public $OriginalClusterId;

    /**
     * @var string Specified time for time point rollback or snapshot time for snapshot rollback
     */
    public $ExpectTime;

    /**
     * @var integer Specified allowed time range for time point rollback
     */
    public $ExpectTimeThresh;

    /**
     * @var integer Storage upper limit of normal instance in GB
     */
    public $StorageLimit;

    /**
     * @var integer Number of instances
     */
    public $InstanceCount;

    /**
     * @var integer Purchase duration of monthly subscription plan
     */
    public $TimeSpan;

    /**
     * @var string Purchase duration unit of monthly subscription plan
     */
    public $TimeUnit;

    /**
     * @var integer Whether auto-renewal is enabled for monthly subscription plan
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
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
Valid values when `DbType` is `MYSQL` (default value: NORMAL):
<li>NORMAL</li>
<li>SERVERLESS</li>
     */
    public $DbMode;

    /**
     * @var float This parameter is required if `DbMode` is `SERVERLESS`
Minimum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
     */
    public $MinCpu;

    /**
     * @var float This parameter is required if `DbMode` is `SERVERLESS`:
Maximum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
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
Default value: 600
     */
    public $AutoPauseDelay;

    /**
     * @param string $Zone AZ
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
     * @param string $DbVersion Database version. Valid values: 
<li> Valid values for `MYSQL`: 5.7 </li>
     * @param integer $ProjectId Project ID
     * @param integer $Cpu Number of CPU cores of normal instance
     * @param integer $Memory Memory of normal instance
     * @param integer $Storage Storage
     * @param string $ClusterName Cluster name
     * @param string $AdminPassword Account password, which can contain 8–64 characters and must contain at least two of the following types of characters: letters, digits, and special symbols (_+-&=!@#$%^*()~)
     * @param integer $Port Port. Default value: 5432
     * @param integer $PayMode Billing mode. 0: pay-as-you-go; 1: monthly subscription. Default value: 0
     * @param integer $Count Number of purchased items. Currently, only 1 can be passed in. If this parameter is left empty, 1 will be used by default.
     * @param string $RollbackStrategy Rollback type:
noneRollback: no rollback
snapRollback: rollback by snapshot
timeRollback: rollback by time point
     * @param integer $RollbackId `snapshotId` for snapshot rollback or `queryId` for time point rollback. 0 indicates to determine whether the time point is valid
     * @param string $OriginalClusterId Pass in the source cluster ID during rollback to find the source `poolId`
     * @param string $ExpectTime Specified time for time point rollback or snapshot time for snapshot rollback
     * @param integer $ExpectTimeThresh Specified allowed time range for time point rollback
     * @param integer $StorageLimit Storage upper limit of normal instance in GB
     * @param integer $InstanceCount Number of instances
     * @param integer $TimeSpan Purchase duration of monthly subscription plan
     * @param string $TimeUnit Purchase duration unit of monthly subscription plan
     * @param integer $AutoRenewFlag Whether auto-renewal is enabled for monthly subscription plan
     * @param integer $AutoVoucher Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
     * @param integer $HaCount Number of instances (this parameter has been disused and is retained only for compatibility with existing instances)
     * @param string $OrderSource Order source
     * @param array $ResourceTags Array of tags to be bound to the created cluster
     * @param string $DbMode Database type
Valid values when `DbType` is `MYSQL` (default value: NORMAL):
<li>NORMAL</li>
<li>SERVERLESS</li>
     * @param float $MinCpu This parameter is required if `DbMode` is `SERVERLESS`
Minimum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
     * @param float $MaxCpu This parameter is required if `DbMode` is `SERVERLESS`:
Maximum number of CPU cores. For the value range, please see the returned result of `DescribeServerlessInstanceSpecs`
     * @param string $AutoPause This parameter specifies whether the cluster will be automatically paused if `DbMode` is `SERVERLESS`. Valid values:
<li>yes</li>
<li>no</li>
Default value: yes
     * @param integer $AutoPauseDelay This parameter specifies the delay for automatic cluster pause in seconds if `DbMode` is `SERVERLESS`. Value range: [600,691200]
Default value: 600
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

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
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
    }
}
