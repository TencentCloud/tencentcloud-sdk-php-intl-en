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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
 * @method integer getMemory() Obtain <p>Memory size after upgrade, unit: MB. To ensure the validity of the imported Memory value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable memory specifications.<br>Note: If you perform business migration, fill in the instance specification (CPU, memory), otherwise the system will use the minimum allowed specification by default.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory size after upgrade, unit: MB. To ensure the validity of the imported Memory value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable memory specifications.<br>Note: If you perform business migration, fill in the instance specification (CPU, memory), otherwise the system will use the minimum allowed specification by default.</p>
 * @method integer getVolume() Obtain <p>Disk size after upgrade, unit: GB. To ensure the validity of the imported Volume value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable disk range.</p>
 * @method void setVolume(integer $Volume) Set <p>Disk size after upgrade, unit: GB. To ensure the validity of the imported Volume value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable disk range.</p>
 * @method integer getProtectMode() Obtain <p>Data replication method. Supported values include: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication. Specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
 * @method void setProtectMode(integer $ProtectMode) Set <p>Data replication method. Supported values include: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication. Specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
 * @method integer getDeployMode() Obtain <p>Deployment mode, defaults to 0. Supported values include: 0 - single-AZ deployment, 1 - multi-AZ deployment. You can specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
 * @method void setDeployMode(integer $DeployMode) Set <p>Deployment mode, defaults to 0. Supported values include: 0 - single-AZ deployment, 1 - multi-AZ deployment. You can specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
 * @method string getSlaveZone() Obtain <p>The availability zone information of standby database 1 matches the Zone parameter of the instance by default. You can specify this parameter when upgrading the primary instance to multi-AZ deployment. This parameter is invalid when upgrading a read-only instance or disaster recovery instance. You can query the supported availability zones via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.</p>
 * @method void setSlaveZone(string $SlaveZone) Set <p>The availability zone information of standby database 1 matches the Zone parameter of the instance by default. You can specify this parameter when upgrading the primary instance to multi-AZ deployment. This parameter is invalid when upgrading a read-only instance or disaster recovery instance. You can query the supported availability zones via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.</p>
 * @method string getEngineVersion() Obtain <p>Database engine version of the primary instance. Supported values include 5.5, 5.6, 5.7, and 8.0.<br>Note: Please use the <a href="https://www.tencentcloud.com/document/api/236/15870?from_cn_redirect=1">UpgradeDBInstanceEngineVersion</a> API to upgrade the database version.</p>
 * @method void setEngineVersion(string $EngineVersion) Set <p>Database engine version of the primary instance. Supported values include 5.5, 5.6, 5.7, and 8.0.<br>Note: Please use the <a href="https://www.tencentcloud.com/document/api/236/15870?from_cn_redirect=1">UpgradeDBInstanceEngineVersion</a> API to upgrade the database version.</p>
 * @method integer getWaitSwitch() Obtain <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch within a time window. When the value is 1, during the upgrade, the process to switch to a new instance will be performed within the time window, or the user can actively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">Switch to a New Instance</a> to trigger the process.</p>
 * @method void setWaitSwitch(integer $WaitSwitch) Set <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch within a time window. When the value is 1, during the upgrade, the process to switch to a new instance will be performed within the time window, or the user can actively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">Switch to a New Instance</a> to trigger the process.</p>
 * @method string getBackupZone() Obtain <p>The availability zone information of standby 2 is empty by default. You can specify this parameter when upgrading the primary instance, but it is invalid when upgrading a read-only instance or disaster recovery instance. Query the supported AZs via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.<br>Remark: To downgrade a three-node instance to a two-node one, set this parameter to empty to achieve it.</p>
 * @method void setBackupZone(string $BackupZone) Set <p>The availability zone information of standby 2 is empty by default. You can specify this parameter when upgrading the primary instance, but it is invalid when upgrading a read-only instance or disaster recovery instance. Query the supported AZs via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.<br>Remark: To downgrade a three-node instance to a two-node one, set this parameter to empty to achieve it.</p>
 * @method string getInstanceRole() Obtain <p>Instance type, defaults to master. Supported values include: master - refers to the primary instance, dr - refers to the disaster recovery instance, ro - refers to the read-only instance.</p>
 * @method void setInstanceRole(string $InstanceRole) Set <p>Instance type, defaults to master. Supported values include: master - refers to the primary instance, dr - refers to the disaster recovery instance, ro - refers to the read-only instance.</p>
 * @method string getDeviceType() Obtain <p>Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC" - BASIC edition instance.</p>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC" - BASIC edition instance.</p>
 * @method integer getCpu() Obtain <p>Number of cpu cores of the instance after upgrade. If not provided, the system will automatically fill in the minimum allowed specification based on the Memory size specified by Memory.<br>Description: If you need to migrate business, make sure to fill in the instance specification (cpu, Memory). Otherwise, the system will use the minimum allowed specification by default.</p>
 * @method void setCpu(integer $Cpu) Set <p>Number of cpu cores of the instance after upgrade. If not provided, the system will automatically fill in the minimum allowed specification based on the Memory size specified by Memory.<br>Description: If you need to migrate business, make sure to fill in the instance specification (cpu, Memory). Otherwise, the system will use the minimum allowed specification by default.</p>
 * @method integer getFastUpgrade() Obtain <p>Whether to perform Rapid Configuration Change. 0-Normal upgrade, 1-Rapid Configuration Change, 2-Precedence to rapid change. Selecting Rapid Configuration Change will validate whether it is possible to perform ultra-fast reconfiguration based on resource status. If conditions are met, ultra-fast reconfiguration will be performed; otherwise, error information will be returned.</p>
 * @method void setFastUpgrade(integer $FastUpgrade) Set <p>Whether to perform Rapid Configuration Change. 0-Normal upgrade, 1-Rapid Configuration Change, 2-Precedence to rapid change. Selecting Rapid Configuration Change will validate whether it is possible to perform ultra-fast reconfiguration based on resource status. If conditions are met, ultra-fast reconfiguration will be performed; otherwise, error information will be returned.</p>
 * @method integer getMaxDelayTime() Obtain <p>Delay threshold. Value ranges from 1 to 10, default value is 10.</p>
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set <p>Delay threshold. Value ranges from 1 to 10, default value is 10.</p>
 * @method integer getCrossCluster() Obtain <p>Whether to perform cross-region migration. 0 - ordinary migration, 1 - cross-region migration, default value is 0. When set to 1, it supports changes to the primary node availability zone of the instance.</p>
 * @method void setCrossCluster(integer $CrossCluster) Set <p>Whether to perform cross-region migration. 0 - ordinary migration, 1 - cross-region migration, default value is 0. When set to 1, it supports changes to the primary node availability zone of the instance.</p>
 * @method string getZoneId() Obtain <p>Primary node availability zone. This parameter is valid only when cross-AZ migration. You can only migrate in the same region.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Primary node availability zone. This parameter is valid only when cross-AZ migration. You can only migrate in the same region.</p>
 * @method string getRoTransType() Obtain <p>For cross-cluster migration scenarios, select the processing logic for intra-AZ read-only instances. together-intra-AZ read-only instances migrate with the primary instance to the target availability zone (default option), severally-intra-AZ read-only instances maintain the original deployment mode and do not move to the target availability zone.</p>
 * @method void setRoTransType(string $RoTransType) Set <p>For cross-cluster migration scenarios, select the processing logic for intra-AZ read-only instances. together-intra-AZ read-only instances migrate with the primary instance to the target availability zone (default option), severally-intra-AZ read-only instances maintain the original deployment mode and do not move to the target availability zone.</p>
 * @method ClusterTopology getClusterTopology() Obtain <p>Topology configuration of cloud disk edition nodes.</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) Set <p>Topology configuration of cloud disk edition nodes.</p>
 * @method integer getCheckFastUpgradeReboot() Obtain <p>Check whether in-place upgrade requires restart. 1-Check, 0-Do not check. If the value is 1 and the check shows that in-place upgrade must be restarted, the upgrade will be stopped and a notification will be returned. If in-place upgrade does not require restart, the upgrade process will proceed normally.</p>
 * @method void setCheckFastUpgradeReboot(integer $CheckFastUpgradeReboot) Set <p>Check whether in-place upgrade requires restart. 1-Check, 0-Do not check. If the value is 1 and the check shows that in-place upgrade must be restarted, the upgrade will be stopped and a notification will be returned. If in-place upgrade does not require restart, the upgrade process will proceed normally.</p>
 * @method string getDataCheckSensitive() Obtain <p>Data validation sensitivity. This parameter is used for non-Rapid Configuration Change scenarios. Sensitivity is calculated based on current instance specifications to determine cpu resource usage for data comparison during the migration process. Corresponding options are: "high", "normal", "low", empty by default. Parameter explanation: "high": Corresponds to high in the console, not recommended when database load is too high. "normal": Corresponds to standard in the console. "low": Corresponds to low in the console.</p>
 * @method void setDataCheckSensitive(string $DataCheckSensitive) Set <p>Data validation sensitivity. This parameter is used for non-Rapid Configuration Change scenarios. Sensitivity is calculated based on current instance specifications to determine cpu resource usage for data comparison during the migration process. Corresponding options are: "high", "normal", "low", empty by default. Parameter explanation: "high": Corresponds to high in the console, not recommended when database load is too high. "normal": Corresponds to standard in the console. "low": Corresponds to low in the console.</p>
 * @method string getFourthZone() Obtain <p>AZ information of standby database 3 is empty by default. You can specify this parameter when you proceed to purchase a four-node primary instance.</p>
 * @method void setFourthZone(string $FourthZone) Set <p>AZ information of standby database 3 is empty by default. You can specify this parameter when you proceed to purchase a four-node primary instance.</p>
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Memory size after upgrade, unit: MB. To ensure the validity of the imported Memory value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable memory specifications.<br>Note: If you perform business migration, fill in the instance specification (CPU, memory), otherwise the system will use the minimum allowed specification by default.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Disk size after upgrade, unit: GB. To ensure the validity of the imported Volume value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable disk range.</p>
     */
    public $Volume;

    /**
     * @var integer <p>Data replication method. Supported values include: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication. Specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
     */
    public $ProtectMode;

    /**
     * @var integer <p>Deployment mode, defaults to 0. Supported values include: 0 - single-AZ deployment, 1 - multi-AZ deployment. You can specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
     */
    public $DeployMode;

    /**
     * @var string <p>The availability zone information of standby database 1 matches the Zone parameter of the instance by default. You can specify this parameter when upgrading the primary instance to multi-AZ deployment. This parameter is invalid when upgrading a read-only instance or disaster recovery instance. You can query the supported availability zones via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.</p>
     */
    public $SlaveZone;

    /**
     * @var string <p>Database engine version of the primary instance. Supported values include 5.5, 5.6, 5.7, and 8.0.<br>Note: Please use the <a href="https://www.tencentcloud.com/document/api/236/15870?from_cn_redirect=1">UpgradeDBInstanceEngineVersion</a> API to upgrade the database version.</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch within a time window. When the value is 1, during the upgrade, the process to switch to a new instance will be performed within the time window, or the user can actively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">Switch to a New Instance</a> to trigger the process.</p>
     */
    public $WaitSwitch;

    /**
     * @var string <p>The availability zone information of standby 2 is empty by default. You can specify this parameter when upgrading the primary instance, but it is invalid when upgrading a read-only instance or disaster recovery instance. Query the supported AZs via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.<br>Remark: To downgrade a three-node instance to a two-node one, set this parameter to empty to achieve it.</p>
     */
    public $BackupZone;

    /**
     * @var string <p>Instance type, defaults to master. Supported values include: master - refers to the primary instance, dr - refers to the disaster recovery instance, ro - refers to the read-only instance.</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC" - BASIC edition instance.</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>Number of cpu cores of the instance after upgrade. If not provided, the system will automatically fill in the minimum allowed specification based on the Memory size specified by Memory.<br>Description: If you need to migrate business, make sure to fill in the instance specification (cpu, Memory). Otherwise, the system will use the minimum allowed specification by default.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Whether to perform Rapid Configuration Change. 0-Normal upgrade, 1-Rapid Configuration Change, 2-Precedence to rapid change. Selecting Rapid Configuration Change will validate whether it is possible to perform ultra-fast reconfiguration based on resource status. If conditions are met, ultra-fast reconfiguration will be performed; otherwise, error information will be returned.</p>
     */
    public $FastUpgrade;

    /**
     * @var integer <p>Delay threshold. Value ranges from 1 to 10, default value is 10.</p>
     */
    public $MaxDelayTime;

    /**
     * @var integer <p>Whether to perform cross-region migration. 0 - ordinary migration, 1 - cross-region migration, default value is 0. When set to 1, it supports changes to the primary node availability zone of the instance.</p>
     */
    public $CrossCluster;

    /**
     * @var string <p>Primary node availability zone. This parameter is valid only when cross-AZ migration. You can only migrate in the same region.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>For cross-cluster migration scenarios, select the processing logic for intra-AZ read-only instances. together-intra-AZ read-only instances migrate with the primary instance to the target availability zone (default option), severally-intra-AZ read-only instances maintain the original deployment mode and do not move to the target availability zone.</p>
     */
    public $RoTransType;

    /**
     * @var ClusterTopology <p>Topology configuration of cloud disk edition nodes.</p>
     */
    public $ClusterTopology;

    /**
     * @var integer <p>Check whether in-place upgrade requires restart. 1-Check, 0-Do not check. If the value is 1 and the check shows that in-place upgrade must be restarted, the upgrade will be stopped and a notification will be returned. If in-place upgrade does not require restart, the upgrade process will proceed normally.</p>
     */
    public $CheckFastUpgradeReboot;

    /**
     * @var string <p>Data validation sensitivity. This parameter is used for non-Rapid Configuration Change scenarios. Sensitivity is calculated based on current instance specifications to determine cpu resource usage for data comparison during the migration process. Corresponding options are: "high", "normal", "low", empty by default. Parameter explanation: "high": Corresponds to high in the console, not recommended when database load is too high. "normal": Corresponds to standard in the console. "low": Corresponds to low in the console.</p>
     */
    public $DataCheckSensitive;

    /**
     * @var string <p>AZ information of standby database 3 is empty by default. You can specify this parameter when you proceed to purchase a four-node primary instance.</p>
     */
    public $FourthZone;

    /**
     * @param string $InstanceId <p>Instance ID, in the format such as cdb-c1nl9rpv or cdbro-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the <a href="https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1">Query Instance List</a> API, with its value being the InstanceId field in the output parameter.</p>
     * @param integer $Memory <p>Memory size after upgrade, unit: MB. To ensure the validity of the imported Memory value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable memory specifications.<br>Note: If you perform business migration, fill in the instance specification (CPU, memory), otherwise the system will use the minimum allowed specification by default.</p>
     * @param integer $Volume <p>Disk size after upgrade, unit: GB. To ensure the validity of the imported Volume value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the upgradeable disk range.</p>
     * @param integer $ProtectMode <p>Data replication method. Supported values include: 0 - async replication, 1 - semi-sync replication, 2 - strong sync replication. Specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
     * @param integer $DeployMode <p>Deployment mode, defaults to 0. Supported values include: 0 - single-AZ deployment, 1 - multi-AZ deployment. You can specify this parameter when upgrading the primary instance. This parameter is invalid when upgrading a read-only instance or disaster recovery instance.</p>
     * @param string $SlaveZone <p>The availability zone information of standby database 1 matches the Zone parameter of the instance by default. You can specify this parameter when upgrading the primary instance to multi-AZ deployment. This parameter is invalid when upgrading a read-only instance or disaster recovery instance. You can query the supported availability zones via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.</p>
     * @param string $EngineVersion <p>Database engine version of the primary instance. Supported values include 5.5, 5.6, 5.7, and 8.0.<br>Note: Please use the <a href="https://www.tencentcloud.com/document/api/236/15870?from_cn_redirect=1">UpgradeDBInstanceEngineVersion</a> API to upgrade the database version.</p>
     * @param integer $WaitSwitch <p>The way to switch to a new instance defaults to 0. Supported values include: 0 - switch immediately, 1 - switch within a time window. When the value is 1, during the upgrade, the process to switch to a new instance will be performed within the time window, or the user can actively call the API <a href="https://www.tencentcloud.com/document/product/236/15864?from_cn_redirect=1">Switch to a New Instance</a> to trigger the process.</p>
     * @param string $BackupZone <p>The availability zone information of standby 2 is empty by default. You can specify this parameter when upgrading the primary instance, but it is invalid when upgrading a read-only instance or disaster recovery instance. Query the supported AZs via the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API.<br>Remark: To downgrade a three-node instance to a two-node one, set this parameter to empty to achieve it.</p>
     * @param string $InstanceRole <p>Instance type, defaults to master. Supported values include: master - refers to the primary instance, dr - refers to the disaster recovery instance, ro - refers to the read-only instance.</p>
     * @param string $DeviceType <p>Instance isolation type. Supported values include "UNIVERSAL" - general-purpose instance, "EXCLUSIVE" - dedicated instance, "BASIC" - BASIC edition instance.</p>
     * @param integer $Cpu <p>Number of cpu cores of the instance after upgrade. If not provided, the system will automatically fill in the minimum allowed specification based on the Memory size specified by Memory.<br>Description: If you need to migrate business, make sure to fill in the instance specification (cpu, Memory). Otherwise, the system will use the minimum allowed specification by default.</p>
     * @param integer $FastUpgrade <p>Whether to perform Rapid Configuration Change. 0-Normal upgrade, 1-Rapid Configuration Change, 2-Precedence to rapid change. Selecting Rapid Configuration Change will validate whether it is possible to perform ultra-fast reconfiguration based on resource status. If conditions are met, ultra-fast reconfiguration will be performed; otherwise, error information will be returned.</p>
     * @param integer $MaxDelayTime <p>Delay threshold. Value ranges from 1 to 10, default value is 10.</p>
     * @param integer $CrossCluster <p>Whether to perform cross-region migration. 0 - ordinary migration, 1 - cross-region migration, default value is 0. When set to 1, it supports changes to the primary node availability zone of the instance.</p>
     * @param string $ZoneId <p>Primary node availability zone. This parameter is valid only when cross-AZ migration. You can only migrate in the same region.</p>
     * @param string $RoTransType <p>For cross-cluster migration scenarios, select the processing logic for intra-AZ read-only instances. together-intra-AZ read-only instances migrate with the primary instance to the target availability zone (default option), severally-intra-AZ read-only instances maintain the original deployment mode and do not move to the target availability zone.</p>
     * @param ClusterTopology $ClusterTopology <p>Topology configuration of cloud disk edition nodes.</p>
     * @param integer $CheckFastUpgradeReboot <p>Check whether in-place upgrade requires restart. 1-Check, 0-Do not check. If the value is 1 and the check shows that in-place upgrade must be restarted, the upgrade will be stopped and a notification will be returned. If in-place upgrade does not require restart, the upgrade process will proceed normally.</p>
     * @param string $DataCheckSensitive <p>Data validation sensitivity. This parameter is used for non-Rapid Configuration Change scenarios. Sensitivity is calculated based on current instance specifications to determine cpu resource usage for data comparison during the migration process. Corresponding options are: "high", "normal", "low", empty by default. Parameter explanation: "high": Corresponds to high in the console, not recommended when database load is too high. "normal": Corresponds to standard in the console. "low": Corresponds to low in the console.</p>
     * @param string $FourthZone <p>AZ information of standby database 3 is empty by default. You can specify this parameter when you proceed to purchase a four-node primary instance.</p>
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("FastUpgrade",$param) and $param["FastUpgrade"] !== null) {
            $this->FastUpgrade = $param["FastUpgrade"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }

        if (array_key_exists("CrossCluster",$param) and $param["CrossCluster"] !== null) {
            $this->CrossCluster = $param["CrossCluster"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoTransType",$param) and $param["RoTransType"] !== null) {
            $this->RoTransType = $param["RoTransType"];
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("CheckFastUpgradeReboot",$param) and $param["CheckFastUpgradeReboot"] !== null) {
            $this->CheckFastUpgradeReboot = $param["CheckFastUpgradeReboot"];
        }

        if (array_key_exists("DataCheckSensitive",$param) and $param["DataCheckSensitive"] !== null) {
            $this->DataCheckSensitive = $param["DataCheckSensitive"];
        }

        if (array_key_exists("FourthZone",$param) and $param["FourthZone"] !== null) {
            $this->FourthZone = $param["FourthZone"];
        }
    }
}
