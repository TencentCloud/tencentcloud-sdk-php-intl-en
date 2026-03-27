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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Read-Only Replica Instance
 *
 * @method string getInstanceId() Obtain Read-Only Replica ID, in the format of: mssqlro-3l3fgqn7
 * @method void setInstanceId(string $InstanceId) Set Read-Only Replica ID, in the format of: mssqlro-3l3fgqn7
 * @method string getName() Obtain Read-Only Replica Name
 * @method void setName(string $Name) Set Read-Only Replica Name
 * @method string getUid() Obtain Read-Only Replica Unique UID
 * @method void setUid(string $Uid) Set Read-Only Replica Unique UID
 * @method integer getProjectId() Obtain Read-Only Replica Project ID
 * @method void setProjectId(integer $ProjectId) Set Read-Only Replica Project ID
 * @method integer getStatus() Obtain Read-Only Replica Status: 1: Creating, 2: Running, 3: Delayed Removal, 4: Isolated, 5: Recycling, 6: Recycled, 7: Task Executing, 8: Offline, 9: Instance Scaling, 10: Instance Migrating, 12: Restarting
 * @method void setStatus(integer $Status) Set Read-Only Replica Status: 1: Creating, 2: Running, 3: Delayed Removal, 4: Isolated, 5: Recycling, 6: Recycled, 7: Task Executing, 8: Offline, 9: Instance Scaling, 10: Instance Migrating, 12: Restarting
 * @method string getCreateTime() Obtain Read-Only Replica Creation Time
 * @method void setCreateTime(string $CreateTime) Set Read-Only Replica Creation Time
 * @method string getUpdateTime() Obtain Read-Only Replica Update Time
 * @method void setUpdateTime(string $UpdateTime) Set Read-Only Replica Update Time
 * @method integer getMemory() Obtain Read-Only Replica Memory Size (Unit: GB)
 * @method void setMemory(integer $Memory) Set Read-Only Replica Memory Size (Unit: GB)
 * @method integer getStorage() Obtain Read-Only Replica Storage Space Size (Unit: GB)
 * @method void setStorage(integer $Storage) Set Read-Only Replica Storage Space Size (Unit: GB)
 * @method integer getCpu() Obtain Read-Only Replica cpu Core Count
 * @method void setCpu(integer $Cpu) Set Read-Only Replica cpu Core Count
 * @method string getVersion() Obtain Read-Only Replica Codenames
 * @method void setVersion(string $Version) Set Read-Only Replica Codenames
 * @method string getType() Obtain Host Machine Code
 * @method void setType(string $Type) Set Host Machine Code
 * @method integer getModel() Obtain Read-Only Replica Mode, 2-Standalone
 * @method void setModel(integer $Model) Set Read-Only Replica Mode, 2-Standalone
 * @method integer getPayMode() Obtain Read-Only Replica Billing Mode, 1-yearly/monthly subscription, 0-pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Read-Only Replica Billing Mode, 1-yearly/monthly subscription, 0-pay-as-you-go
 * @method integer getWeight() Obtain Read-Only Replica Weight
 * @method void setWeight(integer $Weight) Set Read-Only Replica Weight
 * @method string getDelayTime() Obtain Read-Only Replica Latency Time (Unit: seconds)
 * @method void setDelayTime(string $DelayTime) Set Read-Only Replica Latency Time (Unit: seconds)
 * @method string getSynStatus() Obtain Synchronization status between the read-only replica and the primary instance.

Init: Initializing

DeployReadOnlyInPorgress: Deploying replica in progress

DeployReadOnlySuccess: Replica deployment succeeded

DeployReadOnlyFail: Replica deployment failed

DeployMasterDBInPorgress: Adding replica database to primary node in progress

DeployMasterDBSuccess: Successfully added replica database to primary node

DeployMasterDBFail: Failed to add replica database to primary node

DeployReadOnlyDBInPorgress: Replica restoration and database joining started

DeployReadOnlyDBSuccess: Replica restoration and database joining succeeded

DeployReadOnlyDBFail: Replica restoration and database joining failed

SyncDelay: Synchronization delayed

SyncFail: Synchronization failed

SyncExcluded: Removed from read-only group

SyncNormal: Normal
 * @method void setSynStatus(string $SynStatus) Set Synchronization status between the read-only replica and the primary instance.

Init: Initializing

DeployReadOnlyInPorgress: Deploying replica in progress

DeployReadOnlySuccess: Replica deployment succeeded

DeployReadOnlyFail: Replica deployment failed

DeployMasterDBInPorgress: Adding replica database to primary node in progress

DeployMasterDBSuccess: Successfully added replica database to primary node

DeployMasterDBFail: Failed to add replica database to primary node

DeployReadOnlyDBInPorgress: Replica restoration and database joining started

DeployReadOnlyDBSuccess: Replica restoration and database joining succeeded

DeployReadOnlyDBFail: Replica restoration and database joining failed

SyncDelay: Synchronization delayed

SyncFail: Synchronization failed

SyncExcluded: Removed from read-only group

SyncNormal: Normal
 * @method string getDatabaseDifference() Obtain Databases not synchronized between the read-only replica and the primary instance
 * @method void setDatabaseDifference(string $DatabaseDifference) Set Databases not synchronized between the read-only replica and the primary instance
 * @method string getAccountDifference() Obtain Accounts not synchronized between the read-only replica and the primary instance
 * @method void setAccountDifference(string $AccountDifference) Set Accounts not synchronized between the read-only replica and the primary instance
 * @method string getStartTime() Obtain Read-Only Replica Billing Start Time
 * @method void setStartTime(string $StartTime) Set Read-Only Replica Billing Start Time
 * @method string getEndTime() Obtain Read-Only Replica Billing End Time
 * @method void setEndTime(string $EndTime) Set Read-Only Replica Billing End Time
 * @method string getIsolateTime() Obtain Read-Only Replica Isolation Time
 * @method void setIsolateTime(string $IsolateTime) Set Read-Only Replica Isolation Time
 * @method string getRegionId() Obtain Read-Only Replica Region Location
 * @method void setRegionId(string $RegionId) Set Read-Only Replica Region Location
 * @method string getZoneId() Obtain Read-Only Replica AZ Location
 * @method void setZoneId(string $ZoneId) Set Read-Only Replica AZ Location
 */
class ReadOnlyInstance extends AbstractModel
{
    /**
     * @var string Read-Only Replica ID, in the format of: mssqlro-3l3fgqn7
     */
    public $InstanceId;

    /**
     * @var string Read-Only Replica Name
     */
    public $Name;

    /**
     * @var string Read-Only Replica Unique UID
     */
    public $Uid;

    /**
     * @var integer Read-Only Replica Project ID
     */
    public $ProjectId;

    /**
     * @var integer Read-Only Replica Status: 1: Creating, 2: Running, 3: Delayed Removal, 4: Isolated, 5: Recycling, 6: Recycled, 7: Task Executing, 8: Offline, 9: Instance Scaling, 10: Instance Migrating, 12: Restarting
     */
    public $Status;

    /**
     * @var string Read-Only Replica Creation Time
     */
    public $CreateTime;

    /**
     * @var string Read-Only Replica Update Time
     */
    public $UpdateTime;

    /**
     * @var integer Read-Only Replica Memory Size (Unit: GB)
     */
    public $Memory;

    /**
     * @var integer Read-Only Replica Storage Space Size (Unit: GB)
     */
    public $Storage;

    /**
     * @var integer Read-Only Replica cpu Core Count
     */
    public $Cpu;

    /**
     * @var string Read-Only Replica Codenames
     */
    public $Version;

    /**
     * @var string Host Machine Code
     */
    public $Type;

    /**
     * @var integer Read-Only Replica Mode, 2-Standalone
     */
    public $Model;

    /**
     * @var integer Read-Only Replica Billing Mode, 1-yearly/monthly subscription, 0-pay-as-you-go
     */
    public $PayMode;

    /**
     * @var integer Read-Only Replica Weight
     */
    public $Weight;

    /**
     * @var string Read-Only Replica Latency Time (Unit: seconds)
     */
    public $DelayTime;

    /**
     * @var string Synchronization status between the read-only replica and the primary instance.

Init: Initializing

DeployReadOnlyInPorgress: Deploying replica in progress

DeployReadOnlySuccess: Replica deployment succeeded

DeployReadOnlyFail: Replica deployment failed

DeployMasterDBInPorgress: Adding replica database to primary node in progress

DeployMasterDBSuccess: Successfully added replica database to primary node

DeployMasterDBFail: Failed to add replica database to primary node

DeployReadOnlyDBInPorgress: Replica restoration and database joining started

DeployReadOnlyDBSuccess: Replica restoration and database joining succeeded

DeployReadOnlyDBFail: Replica restoration and database joining failed

SyncDelay: Synchronization delayed

SyncFail: Synchronization failed

SyncExcluded: Removed from read-only group

SyncNormal: Normal
     */
    public $SynStatus;

    /**
     * @var string Databases not synchronized between the read-only replica and the primary instance
     */
    public $DatabaseDifference;

    /**
     * @var string Accounts not synchronized between the read-only replica and the primary instance
     */
    public $AccountDifference;

    /**
     * @var string Read-Only Replica Billing Start Time
     */
    public $StartTime;

    /**
     * @var string Read-Only Replica Billing End Time
     */
    public $EndTime;

    /**
     * @var string Read-Only Replica Isolation Time
     */
    public $IsolateTime;

    /**
     * @var string Read-Only Replica Region Location
     */
    public $RegionId;

    /**
     * @var string Read-Only Replica AZ Location
     */
    public $ZoneId;

    /**
     * @param string $InstanceId Read-Only Replica ID, in the format of: mssqlro-3l3fgqn7
     * @param string $Name Read-Only Replica Name
     * @param string $Uid Read-Only Replica Unique UID
     * @param integer $ProjectId Read-Only Replica Project ID
     * @param integer $Status Read-Only Replica Status: 1: Creating, 2: Running, 3: Delayed Removal, 4: Isolated, 5: Recycling, 6: Recycled, 7: Task Executing, 8: Offline, 9: Instance Scaling, 10: Instance Migrating, 12: Restarting
     * @param string $CreateTime Read-Only Replica Creation Time
     * @param string $UpdateTime Read-Only Replica Update Time
     * @param integer $Memory Read-Only Replica Memory Size (Unit: GB)
     * @param integer $Storage Read-Only Replica Storage Space Size (Unit: GB)
     * @param integer $Cpu Read-Only Replica cpu Core Count
     * @param string $Version Read-Only Replica Codenames
     * @param string $Type Host Machine Code
     * @param integer $Model Read-Only Replica Mode, 2-Standalone
     * @param integer $PayMode Read-Only Replica Billing Mode, 1-yearly/monthly subscription, 0-pay-as-you-go
     * @param integer $Weight Read-Only Replica Weight
     * @param string $DelayTime Read-Only Replica Latency Time (Unit: seconds)
     * @param string $SynStatus Synchronization status between the read-only replica and the primary instance.

Init: Initializing

DeployReadOnlyInPorgress: Deploying replica in progress

DeployReadOnlySuccess: Replica deployment succeeded

DeployReadOnlyFail: Replica deployment failed

DeployMasterDBInPorgress: Adding replica database to primary node in progress

DeployMasterDBSuccess: Successfully added replica database to primary node

DeployMasterDBFail: Failed to add replica database to primary node

DeployReadOnlyDBInPorgress: Replica restoration and database joining started

DeployReadOnlyDBSuccess: Replica restoration and database joining succeeded

DeployReadOnlyDBFail: Replica restoration and database joining failed

SyncDelay: Synchronization delayed

SyncFail: Synchronization failed

SyncExcluded: Removed from read-only group

SyncNormal: Normal
     * @param string $DatabaseDifference Databases not synchronized between the read-only replica and the primary instance
     * @param string $AccountDifference Accounts not synchronized between the read-only replica and the primary instance
     * @param string $StartTime Read-Only Replica Billing Start Time
     * @param string $EndTime Read-Only Replica Billing End Time
     * @param string $IsolateTime Read-Only Replica Isolation Time
     * @param string $RegionId Read-Only Replica Region Location
     * @param string $ZoneId Read-Only Replica AZ Location
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("SynStatus",$param) and $param["SynStatus"] !== null) {
            $this->SynStatus = $param["SynStatus"];
        }

        if (array_key_exists("DatabaseDifference",$param) and $param["DatabaseDifference"] !== null) {
            $this->DatabaseDifference = $param["DatabaseDifference"];
        }

        if (array_key_exists("AccountDifference",$param) and $param["AccountDifference"] !== null) {
            $this->AccountDifference = $param["AccountDifference"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
