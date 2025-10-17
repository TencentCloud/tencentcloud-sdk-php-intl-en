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
 * DescribeTaskList request structure.
 *
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method string getInstanceName() Obtain Instance name. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
 * @method void setInstanceName(string $InstanceName) Set Instance name. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
 * @method integer getLimit() Obtain Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
 * @method integer getOffset() Obtain Pagination offset, which is an integer multiple of Limit. Offset = Limit x (Page number – 1). The default value is 0.
 * @method void setOffset(integer $Offset) Set Pagination offset, which is an integer multiple of Limit. Offset = Limit x (Page number – 1). The default value is 0.
 * @method array getProjectIds() Obtain Project ID. This field has been deprecated. Please ignore it.
 * @method void setProjectIds(array $ProjectIds) Set Project ID. This field has been deprecated. Please ignore it.
 * @method array getTaskTypes() Obtain Task type.



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
 - FLOW_UPDATE_WAN: "054", indicating update of the public network access configuration.
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
 * @method void setTaskTypes(array $TaskTypes) Set Task type.



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
 - FLOW_UPDATE_WAN: "054", indicating update of the public network access configuration.
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
 * @method string getBeginTime() Obtain Start time of the task, for example, in the format of 2021-12-30 00:00:00. Data in the last 30 days can be queried.
 * @method void setBeginTime(string $BeginTime) Set Start time of the task, for example, in the format of 2021-12-30 00:00:00. Data in the last 30 days can be queried.
 * @method string getEndTime() Obtain End time of the task, for example, in the format of 2021-12-30 20:59:35. Data in the last 30 days can be queried.
 * @method void setEndTime(string $EndTime) Set End time of the task, for example, in the format of 2021-12-30 20:59:35. Data in the last 30 days can be queried.
 * @method array getTaskStatus() Obtain This parameter is only for internal use and can be ignored.
 * @method void setTaskStatus(array $TaskStatus) Set This parameter is only for internal use and can be ignored.
 * @method array getResult() Obtain Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
 * @method void setResult(array $Result) Set Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
 * @method array getOperatorUin() Obtain The field `OperatorUin` has been disused and replaced by `OperateUin`.
 * @method void setOperatorUin(array $OperatorUin) Set The field `OperatorUin` has been disused and replaced by `OperateUin`.
 * @method array getOperateUin() Obtain Operator account ID or UIN
 * @method void setOperateUin(array $OperateUin) Set Operator account ID or UIN
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Instance name. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
     */
    public $InstanceName;

    /**
     * @var integer Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, which is an integer multiple of Limit. Offset = Limit x (Page number – 1). The default value is 0.
     */
    public $Offset;

    /**
     * @var array Project ID. This field has been deprecated. Please ignore it.
     * @deprecated
     */
    public $ProjectIds;

    /**
     * @var array Task type.



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
 - FLOW_UPDATE_WAN: "054", indicating update of the public network access configuration.
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
    public $TaskTypes;

    /**
     * @var string Start time of the task, for example, in the format of 2021-12-30 00:00:00. Data in the last 30 days can be queried.
     */
    public $BeginTime;

    /**
     * @var string End time of the task, for example, in the format of 2021-12-30 20:59:35. Data in the last 30 days can be queried.
     */
    public $EndTime;

    /**
     * @var array This parameter is only for internal use and can be ignored.
     */
    public $TaskStatus;

    /**
     * @var array Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
     */
    public $Result;

    /**
     * @var array The field `OperatorUin` has been disused and replaced by `OperateUin`.
     * @deprecated
     */
    public $OperatorUin;

    /**
     * @var array Operator account ID or UIN
     */
    public $OperateUin;

    /**
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param string $InstanceName Instance name. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
     * @param integer $Limit Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
     * @param integer $Offset Pagination offset, which is an integer multiple of Limit. Offset = Limit x (Page number – 1). The default value is 0.
     * @param array $ProjectIds Project ID. This field has been deprecated. Please ignore it.
     * @param array $TaskTypes Task type.



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
 - FLOW_UPDATE_WAN: "054", indicating update of the public network access configuration.
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
     * @param string $BeginTime Start time of the task, for example, in the format of 2021-12-30 00:00:00. Data in the last 30 days can be queried.
     * @param string $EndTime End time of the task, for example, in the format of 2021-12-30 20:59:35. Data in the last 30 days can be queried.
     * @param array $TaskStatus This parameter is only for internal use and can be ignored.
     * @param array $Result Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
     * @param array $OperatorUin The field `OperatorUin` has been disused and replaced by `OperateUin`.
     * @param array $OperateUin Operator account ID or UIN
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }
    }
}
