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
 * Task details
 *
 * @method integer getTaskId() Obtain Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() Obtain Task type.

- FLOW_CREATE: "001" - Create an instance.
- FLOW_RESIZE: "002" - Change the configuration.
- FLOW_CLOSE: "003" - Close an instance.
- FLOW_CLEAN: "004" - Clear an instance.
- FLOW_STARTUP: "005" - Enable an instance.
- FLOW_DELETE: "006" - Delete an instance.
- FLOW_SETPWD: "007" - Reset the password.
- FLOW_EXPORTBACKUP: "009" - Export the backup file.
- FLOW_RESTOREBACKUP: "010" - Restore the backup.
- FLOW_BACKUPINSTANCE: "012" - Back up an instance.
- FLOW_MIGRATEINSTANCE: "013" - Migrate an instance.
- FLOW_DELBACKUP: "014" - Delete the backup.
- FLOW_EXCHANGEINSTANCE: "016" - Switch an instance.
- FLOW_AUTOBACKUP: "017" - Automatically backup an instance.
- FLOW_MIGRATECHECK: "022" - Verify migration parameters.
- FLOW_MIGRATETASK: "023" - Migrating data is in progress.
- FLOW_CLEANDB: "025" - Clear a database.
- FLOW_CLONEBACKUP: "026" - Clone the backup.
- FLOW_CHANGEVIP: "027" - Change the VIP.
- FLOW_EXPORSHR: "028" - Perform scaling.
- FLOW_ADDNODES: "029" - Add or remove a node.
- FLOW_CHANGENET: "031" - Change the network type.
- FLOW_MODIFYINSTACEREADONLY: "033" - Modify the read-only policy.
- FLOW_MODIFYINSTANCEPARAMS: "034" - Modify instance parameters.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035" - Set password-free access.
- FLOW_SWITCHINSTANCEVIP: "036" - Switch the instance VIP.
- FLOW_MODIFYINSTANCEACCOUNT: "037" - Modify the instance account.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038" - Modify the instance bandwidth.
- FLOW_ENABLEINSTANCE_REPLICATE: "039" - Enable read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040" - Disable read-only replica.
- FLOW_UpgradeArch: "041" - Upgrade the instance architecture from primary-secondary to cluster.
- FLOW_DowngradeArch: "042" - Downgrade the instance architecture from cluster to primary-secondary.
- FLOW_UpgradeVersion: "043" - Upgrade the version.
- FLOW_MODIFYCONNECTIONCONFIG: "044" - Modify the number of bandwidth connections.
- FLOW_CLEARNETWORK: "045" - Change the network.
- FLOW_REMOVE_BACKUP_FILE: "046" - Delete the backup.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047" - Upgrade an instance to support multiple AZs.
- FLOW_SHUTDOWN_MASTER: "048" - Simulate a fault.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049" - Manually promote the replica node to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050" - Add a replication group.
- FLOW_OPEN_WAN: "052" - Enable the public network.
- FLOW_CLOSE_WAN: "053" - Disable the public network. - FLOW_UPDATE_WAN: "054" - Update the public network.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055" - Unbind the replication group.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056" - Switch to the primary instance in the replication group.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057" - Change the roles of instances in the replication group.
- FLOW_MIGRATE_NODE: "058" - Migrate a node.
- FLOW_SWITCH_NODE: "059" - Switch a node.
- FLOW_UPGRADE_SMALL_VERSION: "060" - Upgrade the Redis version.
- FLOW_UPGRADE_PROXY_VERSION: "061" - Upgrade the Proxy version.
- FLOW_MODIFY_INSTANCE_NETWORK: "062" - Modify the instance network.
- FLOW_MIGRATE_PROXY_NODE: "063" - Migrate the Proxy node.
- FLOW_MIGRATION_INSTANCE_ZONE: "066" - Migrate the instance AZ in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067" - Upgrading the instance version is in progress.
- FLOW_MODIFY_PROXY_NUM: "069" - Add or remove a Proxy node.
- FLOW_MODIFYBACKUPMOD: "070" - Change the instance backup mode.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskType(string $TaskType) Set Task type.

- FLOW_CREATE: "001" - Create an instance.
- FLOW_RESIZE: "002" - Change the configuration.
- FLOW_CLOSE: "003" - Close an instance.
- FLOW_CLEAN: "004" - Clear an instance.
- FLOW_STARTUP: "005" - Enable an instance.
- FLOW_DELETE: "006" - Delete an instance.
- FLOW_SETPWD: "007" - Reset the password.
- FLOW_EXPORTBACKUP: "009" - Export the backup file.
- FLOW_RESTOREBACKUP: "010" - Restore the backup.
- FLOW_BACKUPINSTANCE: "012" - Back up an instance.
- FLOW_MIGRATEINSTANCE: "013" - Migrate an instance.
- FLOW_DELBACKUP: "014" - Delete the backup.
- FLOW_EXCHANGEINSTANCE: "016" - Switch an instance.
- FLOW_AUTOBACKUP: "017" - Automatically backup an instance.
- FLOW_MIGRATECHECK: "022" - Verify migration parameters.
- FLOW_MIGRATETASK: "023" - Migrating data is in progress.
- FLOW_CLEANDB: "025" - Clear a database.
- FLOW_CLONEBACKUP: "026" - Clone the backup.
- FLOW_CHANGEVIP: "027" - Change the VIP.
- FLOW_EXPORSHR: "028" - Perform scaling.
- FLOW_ADDNODES: "029" - Add or remove a node.
- FLOW_CHANGENET: "031" - Change the network type.
- FLOW_MODIFYINSTACEREADONLY: "033" - Modify the read-only policy.
- FLOW_MODIFYINSTANCEPARAMS: "034" - Modify instance parameters.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035" - Set password-free access.
- FLOW_SWITCHINSTANCEVIP: "036" - Switch the instance VIP.
- FLOW_MODIFYINSTANCEACCOUNT: "037" - Modify the instance account.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038" - Modify the instance bandwidth.
- FLOW_ENABLEINSTANCE_REPLICATE: "039" - Enable read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040" - Disable read-only replica.
- FLOW_UpgradeArch: "041" - Upgrade the instance architecture from primary-secondary to cluster.
- FLOW_DowngradeArch: "042" - Downgrade the instance architecture from cluster to primary-secondary.
- FLOW_UpgradeVersion: "043" - Upgrade the version.
- FLOW_MODIFYCONNECTIONCONFIG: "044" - Modify the number of bandwidth connections.
- FLOW_CLEARNETWORK: "045" - Change the network.
- FLOW_REMOVE_BACKUP_FILE: "046" - Delete the backup.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047" - Upgrade an instance to support multiple AZs.
- FLOW_SHUTDOWN_MASTER: "048" - Simulate a fault.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049" - Manually promote the replica node to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050" - Add a replication group.
- FLOW_OPEN_WAN: "052" - Enable the public network.
- FLOW_CLOSE_WAN: "053" - Disable the public network. - FLOW_UPDATE_WAN: "054" - Update the public network.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055" - Unbind the replication group.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056" - Switch to the primary instance in the replication group.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057" - Change the roles of instances in the replication group.
- FLOW_MIGRATE_NODE: "058" - Migrate a node.
- FLOW_SWITCH_NODE: "059" - Switch a node.
- FLOW_UPGRADE_SMALL_VERSION: "060" - Upgrade the Redis version.
- FLOW_UPGRADE_PROXY_VERSION: "061" - Upgrade the Proxy version.
- FLOW_MODIFY_INSTANCE_NETWORK: "062" - Modify the instance network.
- FLOW_MIGRATE_PROXY_NODE: "063" - Migrate the Proxy node.
- FLOW_MIGRATION_INSTANCE_ZONE: "066" - Migrate the instance AZ in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067" - Upgrading the instance version is in progress.
- FLOW_MODIFY_PROXY_NUM: "069" - Add or remove a Proxy node.
- FLOW_MODIFYBACKUPMOD: "070" - Change the instance backup mode.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceName() Obtain Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method float getProgress() Obtain Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(float $Progress) Set Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method integer getResult() Obtain Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(integer $Result) Set Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
 */
class TaskInfoDetail extends AbstractModel
{
    /**
     * @var integer Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task type.

- FLOW_CREATE: "001" - Create an instance.
- FLOW_RESIZE: "002" - Change the configuration.
- FLOW_CLOSE: "003" - Close an instance.
- FLOW_CLEAN: "004" - Clear an instance.
- FLOW_STARTUP: "005" - Enable an instance.
- FLOW_DELETE: "006" - Delete an instance.
- FLOW_SETPWD: "007" - Reset the password.
- FLOW_EXPORTBACKUP: "009" - Export the backup file.
- FLOW_RESTOREBACKUP: "010" - Restore the backup.
- FLOW_BACKUPINSTANCE: "012" - Back up an instance.
- FLOW_MIGRATEINSTANCE: "013" - Migrate an instance.
- FLOW_DELBACKUP: "014" - Delete the backup.
- FLOW_EXCHANGEINSTANCE: "016" - Switch an instance.
- FLOW_AUTOBACKUP: "017" - Automatically backup an instance.
- FLOW_MIGRATECHECK: "022" - Verify migration parameters.
- FLOW_MIGRATETASK: "023" - Migrating data is in progress.
- FLOW_CLEANDB: "025" - Clear a database.
- FLOW_CLONEBACKUP: "026" - Clone the backup.
- FLOW_CHANGEVIP: "027" - Change the VIP.
- FLOW_EXPORSHR: "028" - Perform scaling.
- FLOW_ADDNODES: "029" - Add or remove a node.
- FLOW_CHANGENET: "031" - Change the network type.
- FLOW_MODIFYINSTACEREADONLY: "033" - Modify the read-only policy.
- FLOW_MODIFYINSTANCEPARAMS: "034" - Modify instance parameters.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035" - Set password-free access.
- FLOW_SWITCHINSTANCEVIP: "036" - Switch the instance VIP.
- FLOW_MODIFYINSTANCEACCOUNT: "037" - Modify the instance account.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038" - Modify the instance bandwidth.
- FLOW_ENABLEINSTANCE_REPLICATE: "039" - Enable read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040" - Disable read-only replica.
- FLOW_UpgradeArch: "041" - Upgrade the instance architecture from primary-secondary to cluster.
- FLOW_DowngradeArch: "042" - Downgrade the instance architecture from cluster to primary-secondary.
- FLOW_UpgradeVersion: "043" - Upgrade the version.
- FLOW_MODIFYCONNECTIONCONFIG: "044" - Modify the number of bandwidth connections.
- FLOW_CLEARNETWORK: "045" - Change the network.
- FLOW_REMOVE_BACKUP_FILE: "046" - Delete the backup.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047" - Upgrade an instance to support multiple AZs.
- FLOW_SHUTDOWN_MASTER: "048" - Simulate a fault.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049" - Manually promote the replica node to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050" - Add a replication group.
- FLOW_OPEN_WAN: "052" - Enable the public network.
- FLOW_CLOSE_WAN: "053" - Disable the public network. - FLOW_UPDATE_WAN: "054" - Update the public network.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055" - Unbind the replication group.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056" - Switch to the primary instance in the replication group.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057" - Change the roles of instances in the replication group.
- FLOW_MIGRATE_NODE: "058" - Migrate a node.
- FLOW_SWITCH_NODE: "059" - Switch a node.
- FLOW_UPGRADE_SMALL_VERSION: "060" - Upgrade the Redis version.
- FLOW_UPGRADE_PROXY_VERSION: "061" - Upgrade the Proxy version.
- FLOW_MODIFY_INSTANCE_NETWORK: "062" - Modify the instance network.
- FLOW_MIGRATE_PROXY_NODE: "063" - Migrate the Proxy node.
- FLOW_MIGRATION_INSTANCE_ZONE: "066" - Migrate the instance AZ in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067" - Upgrading the instance version is in progress.
- FLOW_MODIFY_PROXY_NUM: "069" - Add or remove a Proxy node.
- FLOW_MODIFYBACKUPMOD: "070" - Change the instance backup mode.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskType;

    /**
     * @var string Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var float Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var string Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @param integer $TaskId Task ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Task start time 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type.

- FLOW_CREATE: "001" - Create an instance.
- FLOW_RESIZE: "002" - Change the configuration.
- FLOW_CLOSE: "003" - Close an instance.
- FLOW_CLEAN: "004" - Clear an instance.
- FLOW_STARTUP: "005" - Enable an instance.
- FLOW_DELETE: "006" - Delete an instance.
- FLOW_SETPWD: "007" - Reset the password.
- FLOW_EXPORTBACKUP: "009" - Export the backup file.
- FLOW_RESTOREBACKUP: "010" - Restore the backup.
- FLOW_BACKUPINSTANCE: "012" - Back up an instance.
- FLOW_MIGRATEINSTANCE: "013" - Migrate an instance.
- FLOW_DELBACKUP: "014" - Delete the backup.
- FLOW_EXCHANGEINSTANCE: "016" - Switch an instance.
- FLOW_AUTOBACKUP: "017" - Automatically backup an instance.
- FLOW_MIGRATECHECK: "022" - Verify migration parameters.
- FLOW_MIGRATETASK: "023" - Migrating data is in progress.
- FLOW_CLEANDB: "025" - Clear a database.
- FLOW_CLONEBACKUP: "026" - Clone the backup.
- FLOW_CHANGEVIP: "027" - Change the VIP.
- FLOW_EXPORSHR: "028" - Perform scaling.
- FLOW_ADDNODES: "029" - Add or remove a node.
- FLOW_CHANGENET: "031" - Change the network type.
- FLOW_MODIFYINSTACEREADONLY: "033" - Modify the read-only policy.
- FLOW_MODIFYINSTANCEPARAMS: "034" - Modify instance parameters.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035" - Set password-free access.
- FLOW_SWITCHINSTANCEVIP: "036" - Switch the instance VIP.
- FLOW_MODIFYINSTANCEACCOUNT: "037" - Modify the instance account.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038" - Modify the instance bandwidth.
- FLOW_ENABLEINSTANCE_REPLICATE: "039" - Enable read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040" - Disable read-only replica.
- FLOW_UpgradeArch: "041" - Upgrade the instance architecture from primary-secondary to cluster.
- FLOW_DowngradeArch: "042" - Downgrade the instance architecture from cluster to primary-secondary.
- FLOW_UpgradeVersion: "043" - Upgrade the version.
- FLOW_MODIFYCONNECTIONCONFIG: "044" - Modify the number of bandwidth connections.
- FLOW_CLEARNETWORK: "045" - Change the network.
- FLOW_REMOVE_BACKUP_FILE: "046" - Delete the backup.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047" - Upgrade an instance to support multiple AZs.
- FLOW_SHUTDOWN_MASTER: "048" - Simulate a fault.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049" - Manually promote the replica node to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050" - Add a replication group.
- FLOW_OPEN_WAN: "052" - Enable the public network.
- FLOW_CLOSE_WAN: "053" - Disable the public network. - FLOW_UPDATE_WAN: "054" - Update the public network.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055" - Unbind the replication group.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056" - Switch to the primary instance in the replication group.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057" - Change the roles of instances in the replication group.
- FLOW_MIGRATE_NODE: "058" - Migrate a node.
- FLOW_SWITCH_NODE: "059" - Switch a node.
- FLOW_UPGRADE_SMALL_VERSION: "060" - Upgrade the Redis version.
- FLOW_UPGRADE_PROXY_VERSION: "061" - Upgrade the Proxy version.
- FLOW_MODIFY_INSTANCE_NETWORK: "062" - Modify the instance network.
- FLOW_MIGRATE_PROXY_NODE: "063" - Migrate the Proxy node.
- FLOW_MIGRATION_INSTANCE_ZONE: "066" - Migrate the instance AZ in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067" - Upgrading the instance version is in progress.
- FLOW_MODIFY_PROXY_NUM: "069" - Add or remove a Proxy node.
- FLOW_MODIFYBACKUPMOD: "070" - Change the instance backup mode.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceName Instance name 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param float $Progress Task progress 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Task end time 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param integer $Result Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed) 
Note:  This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
