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
 * Task details
 *
 * @method integer getTaskId() Obtain Task ID.
 * @method void setTaskId(integer $TaskId) Set Task ID.
 * @method string getStartTime() Obtain Task start time.
 * @method void setStartTime(string $StartTime) Set Task start time.
 * @method string getTaskType() Obtain Task type.

- FLOW_CREATE: "001", indicating instance creation.
- FLOW_RESIZE: "002", indicating configuration modification.
- FLOW_CLOSE: "003", indicating instance disabling.
- FLOW_CLEAN: "004", indicating instance cleanup.
- FLOW_STARTUP: "005", indicating instance enabling.
- FLOW_DELETE: "006", indicating instance deletion.
- FLOW_SETPWD: "007", indicating password reset.
- FLOW_EXPORTBACKUP: "009", indicating backup file export.
- FLOW_RESTOREBACKUP: "010", indicating backup restoration.
- FLOW_BACKUPINSTANCE: "012", indicating instance backup.
- FLOW_MIGRATEINSTANCE: "013", indicating instance migration.
- FLOW_DELBACKUP: "014", indicating backup deletion.
- FLOW_EXCHANGEINSTANCE: "016", indicating instance switch.
- FLOW_AUTOBACKUP: "017", indicating automatic instance backup.
- FLOW_MIGRATECHECK: "022", indicating migration parameter verification.
- FLOW_MIGRATETASK: "023", indicating that data migration is in progress.
- FLOW_CLEANDB: "025", indicating database cleanup.
- FLOW_CLONEBACKUP: "026": indicating backup cloning.
- FLOW_CHANGEVIP: "027", indicating VIP address modification.
- FLOW_EXPORSHR: "028", indicating scaling.
- FLOW_ADDNODES: "029", indicating node addition (removal).
- FLOW_CHANGENET: "031", indicating network type modification.
- FLOW_MODIFYINSTACEREADONLY: "033": indicating read-only policy modification.
- FLOW_MODIFYINSTANCEPARAMS: "034", indicating instance parameter modification.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035", indicating password-free access settings.
- FLOW_SWITCHINSTANCEVIP: "036", indicating instance VIP address switch.
- FLOW_MODIFYINSTANCEACCOUNT: "037", indicating instance account modification.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038", indicating instance bandwidth modification.
- FLOW_ENABLEINSTANCE_REPLICATE: "039", indicating enabling of read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040", indicating disabling of read-only replica.
- FLOW_UpgradeArch: "041", indicating instance architecture upgrade from the standard architecture to the cluster architecture.
- FLOW_DowngradeArch: "042", indicating instance architecture downgrade from the cluster architecture to the standard architecture.
- FLOW_UpgradeVersion: "043", indicating version upgrade.
- FLOW_MODIFYCONNECTIONCONFIG: "044", indicating adjustment of the bandwidth and the number of connections.
- FLOW_CLEARNETWORK: "045", indicating network change.
- FLOW_REMOVE_BACKUP_FILE: "046", indicating backup deletion.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047", indicating instance upgrade to multi-AZ deployment.
- FLOW_SHUTDOWN_MASTER: "048", indicating fault simulation.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049", indicating manual promotion to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050", indicating replication group addition.
- FLOW_OPEN_WAN: "052", indicating enabling of public network access.
- FLOW_CLOSE_WAN: "053", indicating disabling of public network access.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055", indicating replication group unbinding.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056", indicating switching a replication group instance to the primary instance.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057", indicating modification of the replication group instance role.
- FLOW_MIGRATE_NODE: "058", indicating node migration.
- FLOW_SWITCH_NODE: "059", indicating node switch.
- FLOW_UPGRADE_SMALL_VERSION: "060", indicating Redis version upgrade.
- FLOW_UPGRADE_PROXY_VERSION: "061", indicating proxy version upgrade.
- FLOW_MODIFY_INSTANCE_NETWORK: "062", indicating instance network modification.
- FLOW_MIGRATE_PROXY_NODE: "063", indicating proxy node migration.
- FLOW_MIGRATION_INSTANCE_ZONE: "066", indicating that instance migration to another AZ is in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067", indicating that instance version upgrade is in progress.
- FLOW_MODIFY_PROXY_NUM: "069", indicating proxy node addition (removal).
- FLOW_MODIFYBACKUPMOD: "070", indicating instance backup mode modification.
 * @method void setTaskType(string $TaskType) Set Task type.

- FLOW_CREATE: "001", indicating instance creation.
- FLOW_RESIZE: "002", indicating configuration modification.
- FLOW_CLOSE: "003", indicating instance disabling.
- FLOW_CLEAN: "004", indicating instance cleanup.
- FLOW_STARTUP: "005", indicating instance enabling.
- FLOW_DELETE: "006", indicating instance deletion.
- FLOW_SETPWD: "007", indicating password reset.
- FLOW_EXPORTBACKUP: "009", indicating backup file export.
- FLOW_RESTOREBACKUP: "010", indicating backup restoration.
- FLOW_BACKUPINSTANCE: "012", indicating instance backup.
- FLOW_MIGRATEINSTANCE: "013", indicating instance migration.
- FLOW_DELBACKUP: "014", indicating backup deletion.
- FLOW_EXCHANGEINSTANCE: "016", indicating instance switch.
- FLOW_AUTOBACKUP: "017", indicating automatic instance backup.
- FLOW_MIGRATECHECK: "022", indicating migration parameter verification.
- FLOW_MIGRATETASK: "023", indicating that data migration is in progress.
- FLOW_CLEANDB: "025", indicating database cleanup.
- FLOW_CLONEBACKUP: "026": indicating backup cloning.
- FLOW_CHANGEVIP: "027", indicating VIP address modification.
- FLOW_EXPORSHR: "028", indicating scaling.
- FLOW_ADDNODES: "029", indicating node addition (removal).
- FLOW_CHANGENET: "031", indicating network type modification.
- FLOW_MODIFYINSTACEREADONLY: "033": indicating read-only policy modification.
- FLOW_MODIFYINSTANCEPARAMS: "034", indicating instance parameter modification.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035", indicating password-free access settings.
- FLOW_SWITCHINSTANCEVIP: "036", indicating instance VIP address switch.
- FLOW_MODIFYINSTANCEACCOUNT: "037", indicating instance account modification.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038", indicating instance bandwidth modification.
- FLOW_ENABLEINSTANCE_REPLICATE: "039", indicating enabling of read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040", indicating disabling of read-only replica.
- FLOW_UpgradeArch: "041", indicating instance architecture upgrade from the standard architecture to the cluster architecture.
- FLOW_DowngradeArch: "042", indicating instance architecture downgrade from the cluster architecture to the standard architecture.
- FLOW_UpgradeVersion: "043", indicating version upgrade.
- FLOW_MODIFYCONNECTIONCONFIG: "044", indicating adjustment of the bandwidth and the number of connections.
- FLOW_CLEARNETWORK: "045", indicating network change.
- FLOW_REMOVE_BACKUP_FILE: "046", indicating backup deletion.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047", indicating instance upgrade to multi-AZ deployment.
- FLOW_SHUTDOWN_MASTER: "048", indicating fault simulation.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049", indicating manual promotion to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050", indicating replication group addition.
- FLOW_OPEN_WAN: "052", indicating enabling of public network access.
- FLOW_CLOSE_WAN: "053", indicating disabling of public network access.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055", indicating replication group unbinding.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056", indicating switching a replication group instance to the primary instance.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057", indicating modification of the replication group instance role.
- FLOW_MIGRATE_NODE: "058", indicating node migration.
- FLOW_SWITCH_NODE: "059", indicating node switch.
- FLOW_UPGRADE_SMALL_VERSION: "060", indicating Redis version upgrade.
- FLOW_UPGRADE_PROXY_VERSION: "061", indicating proxy version upgrade.
- FLOW_MODIFY_INSTANCE_NETWORK: "062", indicating instance network modification.
- FLOW_MIGRATE_PROXY_NODE: "063", indicating proxy node migration.
- FLOW_MIGRATION_INSTANCE_ZONE: "066", indicating that instance migration to another AZ is in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067", indicating that instance version upgrade is in progress.
- FLOW_MODIFY_PROXY_NUM: "069", indicating proxy node addition (removal).
- FLOW_MODIFYBACKUPMOD: "070", indicating instance backup mode modification.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method float getProgress() Obtain Task progress.
 * @method void setProgress(float $Progress) Set Task progress.
 * @method string getEndTime() Obtain Task execution end time.
 * @method void setEndTime(string $EndTime) Set Task execution end time.
 * @method integer getResult() Obtain Task execution status.



0: initializing the task.
1: executing.
2. completed.
4: failed.
 * @method void setResult(integer $Result) Set Task execution status.



0: initializing the task.
1: executing.
2. completed.
4: failed.
 */
class TaskInfoDetail extends AbstractModel
{
    /**
     * @var integer Task ID.
     */
    public $TaskId;

    /**
     * @var string Task start time.
     */
    public $StartTime;

    /**
     * @var string Task type.

- FLOW_CREATE: "001", indicating instance creation.
- FLOW_RESIZE: "002", indicating configuration modification.
- FLOW_CLOSE: "003", indicating instance disabling.
- FLOW_CLEAN: "004", indicating instance cleanup.
- FLOW_STARTUP: "005", indicating instance enabling.
- FLOW_DELETE: "006", indicating instance deletion.
- FLOW_SETPWD: "007", indicating password reset.
- FLOW_EXPORTBACKUP: "009", indicating backup file export.
- FLOW_RESTOREBACKUP: "010", indicating backup restoration.
- FLOW_BACKUPINSTANCE: "012", indicating instance backup.
- FLOW_MIGRATEINSTANCE: "013", indicating instance migration.
- FLOW_DELBACKUP: "014", indicating backup deletion.
- FLOW_EXCHANGEINSTANCE: "016", indicating instance switch.
- FLOW_AUTOBACKUP: "017", indicating automatic instance backup.
- FLOW_MIGRATECHECK: "022", indicating migration parameter verification.
- FLOW_MIGRATETASK: "023", indicating that data migration is in progress.
- FLOW_CLEANDB: "025", indicating database cleanup.
- FLOW_CLONEBACKUP: "026": indicating backup cloning.
- FLOW_CHANGEVIP: "027", indicating VIP address modification.
- FLOW_EXPORSHR: "028", indicating scaling.
- FLOW_ADDNODES: "029", indicating node addition (removal).
- FLOW_CHANGENET: "031", indicating network type modification.
- FLOW_MODIFYINSTACEREADONLY: "033": indicating read-only policy modification.
- FLOW_MODIFYINSTANCEPARAMS: "034", indicating instance parameter modification.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035", indicating password-free access settings.
- FLOW_SWITCHINSTANCEVIP: "036", indicating instance VIP address switch.
- FLOW_MODIFYINSTANCEACCOUNT: "037", indicating instance account modification.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038", indicating instance bandwidth modification.
- FLOW_ENABLEINSTANCE_REPLICATE: "039", indicating enabling of read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040", indicating disabling of read-only replica.
- FLOW_UpgradeArch: "041", indicating instance architecture upgrade from the standard architecture to the cluster architecture.
- FLOW_DowngradeArch: "042", indicating instance architecture downgrade from the cluster architecture to the standard architecture.
- FLOW_UpgradeVersion: "043", indicating version upgrade.
- FLOW_MODIFYCONNECTIONCONFIG: "044", indicating adjustment of the bandwidth and the number of connections.
- FLOW_CLEARNETWORK: "045", indicating network change.
- FLOW_REMOVE_BACKUP_FILE: "046", indicating backup deletion.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047", indicating instance upgrade to multi-AZ deployment.
- FLOW_SHUTDOWN_MASTER: "048", indicating fault simulation.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049", indicating manual promotion to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050", indicating replication group addition.
- FLOW_OPEN_WAN: "052", indicating enabling of public network access.
- FLOW_CLOSE_WAN: "053", indicating disabling of public network access.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055", indicating replication group unbinding.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056", indicating switching a replication group instance to the primary instance.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057", indicating modification of the replication group instance role.
- FLOW_MIGRATE_NODE: "058", indicating node migration.
- FLOW_SWITCH_NODE: "059", indicating node switch.
- FLOW_UPGRADE_SMALL_VERSION: "060", indicating Redis version upgrade.
- FLOW_UPGRADE_PROXY_VERSION: "061", indicating proxy version upgrade.
- FLOW_MODIFY_INSTANCE_NETWORK: "062", indicating instance network modification.
- FLOW_MIGRATE_PROXY_NODE: "063", indicating proxy node migration.
- FLOW_MIGRATION_INSTANCE_ZONE: "066", indicating that instance migration to another AZ is in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067", indicating that instance version upgrade is in progress.
- FLOW_MODIFY_PROXY_NUM: "069", indicating proxy node addition (removal).
- FLOW_MODIFYBACKUPMOD: "070", indicating instance backup mode modification.
     */
    public $TaskType;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var float Task progress.
     */
    public $Progress;

    /**
     * @var string Task execution end time.
     */
    public $EndTime;

    /**
     * @var integer Task execution status.



0: initializing the task.
1: executing.
2. completed.
4: failed.
     */
    public $Result;

    /**
     * @param integer $TaskId Task ID.
     * @param string $StartTime Task start time.
     * @param string $TaskType Task type.

- FLOW_CREATE: "001", indicating instance creation.
- FLOW_RESIZE: "002", indicating configuration modification.
- FLOW_CLOSE: "003", indicating instance disabling.
- FLOW_CLEAN: "004", indicating instance cleanup.
- FLOW_STARTUP: "005", indicating instance enabling.
- FLOW_DELETE: "006", indicating instance deletion.
- FLOW_SETPWD: "007", indicating password reset.
- FLOW_EXPORTBACKUP: "009", indicating backup file export.
- FLOW_RESTOREBACKUP: "010", indicating backup restoration.
- FLOW_BACKUPINSTANCE: "012", indicating instance backup.
- FLOW_MIGRATEINSTANCE: "013", indicating instance migration.
- FLOW_DELBACKUP: "014", indicating backup deletion.
- FLOW_EXCHANGEINSTANCE: "016", indicating instance switch.
- FLOW_AUTOBACKUP: "017", indicating automatic instance backup.
- FLOW_MIGRATECHECK: "022", indicating migration parameter verification.
- FLOW_MIGRATETASK: "023", indicating that data migration is in progress.
- FLOW_CLEANDB: "025", indicating database cleanup.
- FLOW_CLONEBACKUP: "026": indicating backup cloning.
- FLOW_CHANGEVIP: "027", indicating VIP address modification.
- FLOW_EXPORSHR: "028", indicating scaling.
- FLOW_ADDNODES: "029", indicating node addition (removal).
- FLOW_CHANGENET: "031", indicating network type modification.
- FLOW_MODIFYINSTACEREADONLY: "033": indicating read-only policy modification.
- FLOW_MODIFYINSTANCEPARAMS: "034", indicating instance parameter modification.
- FLOW_MODIFYINSTANCEPASSWORDFREE: "035", indicating password-free access settings.
- FLOW_SWITCHINSTANCEVIP: "036", indicating instance VIP address switch.
- FLOW_MODIFYINSTANCEACCOUNT: "037", indicating instance account modification.
- FLOW_MODIFYINSTANCEBANDWIDTH: "038", indicating instance bandwidth modification.
- FLOW_ENABLEINSTANCE_REPLICATE: "039", indicating enabling of read-only replica.
- FLOW_DISABLEINSTANCE_REPLICATE: "040", indicating disabling of read-only replica.
- FLOW_UpgradeArch: "041", indicating instance architecture upgrade from the standard architecture to the cluster architecture.
- FLOW_DowngradeArch: "042", indicating instance architecture downgrade from the cluster architecture to the standard architecture.
- FLOW_UpgradeVersion: "043", indicating version upgrade.
- FLOW_MODIFYCONNECTIONCONFIG: "044", indicating adjustment of the bandwidth and the number of connections.
- FLOW_CLEARNETWORK: "045", indicating network change.
- FLOW_REMOVE_BACKUP_FILE: "046", indicating backup deletion.
- FLOW_UPGRADE_SUPPORT_MULTI_AZ: "047", indicating instance upgrade to multi-AZ deployment.
- FLOW_SHUTDOWN_MASTER: "048", indicating fault simulation.
- FLOW_CHANGE_REPLICA_TO_MASTER: "049", indicating manual promotion to the primary node.
- FLOW_CODE_ADD_REPLICATION_INSTANCE: "050", indicating replication group addition.
- FLOW_OPEN_WAN: "052", indicating enabling of public network access.
- FLOW_CLOSE_WAN: "053", indicating disabling of public network access.
- FLOW_CODE_DELETE_REPLICATION_INSTANCE: "055", indicating replication group unbinding.
- FLOW_CODE_CHANGE_MASTER_INSTANCE: "056", indicating switching a replication group instance to the primary instance.
- FLOW_CODE_CHANGE_INSTANCE_ROLE: "057", indicating modification of the replication group instance role.
- FLOW_MIGRATE_NODE: "058", indicating node migration.
- FLOW_SWITCH_NODE: "059", indicating node switch.
- FLOW_UPGRADE_SMALL_VERSION: "060", indicating Redis version upgrade.
- FLOW_UPGRADE_PROXY_VERSION: "061", indicating proxy version upgrade.
- FLOW_MODIFY_INSTANCE_NETWORK: "062", indicating instance network modification.
- FLOW_MIGRATE_PROXY_NODE: "063", indicating proxy node migration.
- FLOW_MIGRATION_INSTANCE_ZONE: "066", indicating that instance migration to another AZ is in progress.
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY: "067", indicating that instance version upgrade is in progress.
- FLOW_MODIFY_PROXY_NUM: "069", indicating proxy node addition (removal).
- FLOW_MODIFYBACKUPMOD: "070", indicating instance backup mode modification.
     * @param string $InstanceName Instance name.
     * @param string $InstanceId Instance ID.
     * @param integer $ProjectId Project ID.
     * @param float $Progress Task progress.
     * @param string $EndTime Task execution end time.
     * @param integer $Result Task execution status.



0: initializing the task.
1: executing.
2. completed.
4: failed.
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
