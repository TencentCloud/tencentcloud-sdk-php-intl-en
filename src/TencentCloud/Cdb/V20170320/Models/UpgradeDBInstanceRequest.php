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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of `cdb-c1nl9rpv` or `cdbro-c1nl9rpv`. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `cdb-c1nl9rpv` or `cdbro-c1nl9rpv`. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method integer getMemory() Obtain Memory size in MB after upgrade. To ensure that the `Memory` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the memory that can be upgraded to.
 * @method void setMemory(integer $Memory) Set Memory size in MB after upgrade. To ensure that the `Memory` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the memory that can be upgraded to.
 * @method integer getVolume() Obtain Disk size in GB after upgrade. To ensure that the `Volume` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the disk that can be upgraded to.
 * @method void setVolume(integer $Volume) Set Disk size in GB after upgrade. To ensure that the `Volume` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the disk that can be upgraded to.
 * @method integer getProtectMode() Obtain Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
 * @method void setProtectMode(integer $ProtectMode) Set Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
 * @method integer getDeployMode() Obtain Deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
 * @method void setDeployMode(integer $DeployMode) Set Deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
 * @method string getSlaveZone() Obtain AZ information of secondary database 1, which is the `Zone` value of the instance by default. This parameter can be specified when upgrading primary instances in multi-AZ mode and is meaningless for read-only or disaster recovery instances. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the supported AZs.
 * @method void setSlaveZone(string $SlaveZone) Set AZ information of secondary database 1, which is the `Zone` value of the instance by default. This parameter can be specified when upgrading primary instances in multi-AZ mode and is meaningless for read-only or disaster recovery instances. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the supported AZs.
 * @method string getEngineVersion() Obtain Version of primary instance database engine. Valid values: 5.5, 5.6, 5.7.
 * @method void setEngineVersion(string $EngineVersion) Set Version of primary instance database engine. Valid values: 5.5, 5.6, 5.7.
 * @method integer getWaitSwitch() Obtain Switch mode for accessing the new instance.  Valid values:  `0` (switch immediately), `1` (switch within a time window). Default value: `0`. If the value is `1`, the switch process will be performed within a time window. Or, you can call the [SwitchForUpgrade](https://intl.cloud.tencent.com/document/product/236/15864?from_cn_redirect=1) API to trigger the process.
 * @method void setWaitSwitch(integer $WaitSwitch) Set Switch mode for accessing the new instance.  Valid values:  `0` (switch immediately), `1` (switch within a time window). Default value: `0`. If the value is `1`, the switch process will be performed within a time window. Or, you can call the [SwitchForUpgrade](https://intl.cloud.tencent.com/document/product/236/15864?from_cn_redirect=1) API to trigger the process.
 * @method string getBackupZone() Obtain AZ information of secondary database 2, which is empty by default. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
 * @method void setBackupZone(string $BackupZone) Set AZ information of secondary database 2, which is empty by default. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
 * @method string getInstanceRole() Obtain Instance type. Valid values: master (primary instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
 * @method void setInstanceRole(string $InstanceRole) Set Instance type. Valid values: master (primary instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
 * @method string getDeviceType() Obtain The resource isolation type after the instance is upgraded. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). If this parameter is left empty, the resource isolation type will be the same as the original one.
 * @method void setDeviceType(string $DeviceType) Set The resource isolation type after the instance is upgraded. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). If this parameter is left empty, the resource isolation type will be the same as the original one.
 * @method integer getCpu() Obtain The number of CPU cores after the instance is upgraded. If this parameter is left empty, the minimum value will be automatically filled based on the value specified by `Memory`.
 * @method void setCpu(integer $Cpu) Set The number of CPU cores after the instance is upgraded. If this parameter is left empty, the minimum value will be automatically filled based on the value specified by `Memory`.
 * @method integer getFastUpgrade() Obtain QuickChange options. Valid values: `0` (common upgrade), `1` (QuickChange), `2` (QuickChange first). After QuickChange is enabled, the required resources will be checked. QuickChange will be performed only when the required resources support the feature; otherwise, an error message will be returned.
 * @method void setFastUpgrade(integer $FastUpgrade) Set QuickChange options. Valid values: `0` (common upgrade), `1` (QuickChange), `2` (QuickChange first). After QuickChange is enabled, the required resources will be checked. QuickChange will be performed only when the required resources support the feature; otherwise, an error message will be returned.
 * @method integer getMaxDelayTime() Obtain Delay threshold. Value range: 1-10. Default value: `10`.
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set Delay threshold. Value range: 1-10. Default value: `10`.
 * @method integer getCrossCluster() Obtain Whether to migrate the source node across AZs. Valid values: `0` (no), `1`(yes). Default value: `0`. If it is `1`, you can modify the source node AZ.
 * @method void setCrossCluster(integer $CrossCluster) Set Whether to migrate the source node across AZs. Valid values: `0` (no), `1`(yes). Default value: `0`. If it is `1`, you can modify the source node AZ.
 * @method string getZoneId() Obtain New AZ of the source node. This field is only valid when `CrossCluster` is `1`. Only migration across AZs in the same region is supported.
 * @method void setZoneId(string $ZoneId) Set New AZ of the source node. This field is only valid when `CrossCluster` is `1`. Only migration across AZs in the same region is supported.
 * @method string getRoTransType() Obtain Processing logic of the intra-AZ read-only instance for cross-cluster migration. Valid values: `together` (intra-AZ read-only instances will be migrated to the target AZ with the source instance by default.), `severally` (intra-AZ read-only instances will maintain the original deployment mode and will not be migrated to the target AZ.).
 * @method void setRoTransType(string $RoTransType) Set Processing logic of the intra-AZ read-only instance for cross-cluster migration. Valid values: `together` (intra-AZ read-only instances will be migrated to the target AZ with the source instance by default.), `severally` (intra-AZ read-only instances will maintain the original deployment mode and will not be migrated to the target AZ.).
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `cdb-c1nl9rpv` or `cdbro-c1nl9rpv`. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the ID, whose value is the `InstanceId` value in output parameters.
     */
    public $InstanceId;

    /**
     * @var integer Memory size in MB after upgrade. To ensure that the `Memory` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the memory that can be upgraded to.
     */
    public $Memory;

    /**
     * @var integer Disk size in GB after upgrade. To ensure that the `Volume` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the disk that can be upgraded to.
     */
    public $Volume;

    /**
     * @var integer Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
     */
    public $ProtectMode;

    /**
     * @var integer Deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
     */
    public $DeployMode;

    /**
     * @var string AZ information of secondary database 1, which is the `Zone` value of the instance by default. This parameter can be specified when upgrading primary instances in multi-AZ mode and is meaningless for read-only or disaster recovery instances. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the supported AZs.
     */
    public $SlaveZone;

    /**
     * @var string Version of primary instance database engine. Valid values: 5.5, 5.6, 5.7.
     */
    public $EngineVersion;

    /**
     * @var integer Switch mode for accessing the new instance.  Valid values:  `0` (switch immediately), `1` (switch within a time window). Default value: `0`. If the value is `1`, the switch process will be performed within a time window. Or, you can call the [SwitchForUpgrade](https://intl.cloud.tencent.com/document/product/236/15864?from_cn_redirect=1) API to trigger the process.
     */
    public $WaitSwitch;

    /**
     * @var string AZ information of secondary database 2, which is empty by default. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
     */
    public $BackupZone;

    /**
     * @var string Instance type. Valid values: master (primary instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
     */
    public $InstanceRole;

    /**
     * @var string The resource isolation type after the instance is upgraded. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). If this parameter is left empty, the resource isolation type will be the same as the original one.
     */
    public $DeviceType;

    /**
     * @var integer The number of CPU cores after the instance is upgraded. If this parameter is left empty, the minimum value will be automatically filled based on the value specified by `Memory`.
     */
    public $Cpu;

    /**
     * @var integer QuickChange options. Valid values: `0` (common upgrade), `1` (QuickChange), `2` (QuickChange first). After QuickChange is enabled, the required resources will be checked. QuickChange will be performed only when the required resources support the feature; otherwise, an error message will be returned.
     */
    public $FastUpgrade;

    /**
     * @var integer Delay threshold. Value range: 1-10. Default value: `10`.
     */
    public $MaxDelayTime;

    /**
     * @var integer Whether to migrate the source node across AZs. Valid values: `0` (no), `1`(yes). Default value: `0`. If it is `1`, you can modify the source node AZ.
     */
    public $CrossCluster;

    /**
     * @var string New AZ of the source node. This field is only valid when `CrossCluster` is `1`. Only migration across AZs in the same region is supported.
     */
    public $ZoneId;

    /**
     * @var string Processing logic of the intra-AZ read-only instance for cross-cluster migration. Valid values: `together` (intra-AZ read-only instances will be migrated to the target AZ with the source instance by default.), `severally` (intra-AZ read-only instances will maintain the original deployment mode and will not be migrated to the target AZ.).
     */
    public $RoTransType;

    /**
     * @param string $InstanceId Instance ID in the format of `cdb-c1nl9rpv` or `cdbro-c1nl9rpv`. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) API to query the ID, whose value is the `InstanceId` value in output parameters.
     * @param integer $Memory Memory size in MB after upgrade. To ensure that the `Memory` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the memory that can be upgraded to.
     * @param integer $Volume Disk size in GB after upgrade. To ensure that the `Volume` value to be passed in is valid, please use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the specifications of the disk that can be upgraded to.
     * @param integer $ProtectMode Data replication mode. Valid values: 0 (async), 1 (semi-sync), 2 (strong sync). This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
     * @param integer $DeployMode Deployment mode. Valid values: 0 (single-AZ), 1 (multi-AZ). Default value: 0. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
     * @param string $SlaveZone AZ information of secondary database 1, which is the `Zone` value of the instance by default. This parameter can be specified when upgrading primary instances in multi-AZ mode and is meaningless for read-only or disaster recovery instances. You can use the [DescribeDBZoneConfig](https://intl.cloud.tencent.com/document/product/236/17229?from_cn_redirect=1) API to query the supported AZs.
     * @param string $EngineVersion Version of primary instance database engine. Valid values: 5.5, 5.6, 5.7.
     * @param integer $WaitSwitch Switch mode for accessing the new instance.  Valid values:  `0` (switch immediately), `1` (switch within a time window). Default value: `0`. If the value is `1`, the switch process will be performed within a time window. Or, you can call the [SwitchForUpgrade](https://intl.cloud.tencent.com/document/product/236/15864?from_cn_redirect=1) API to trigger the process.
     * @param string $BackupZone AZ information of secondary database 2, which is empty by default. This parameter can be specified when upgrading primary instances and is meaningless for read-only or disaster recovery instances.
     * @param string $InstanceRole Instance type. Valid values: master (primary instance), dr (disaster recovery instance), ro (read-only instance). Default value: master.
     * @param string $DeviceType The resource isolation type after the instance is upgraded. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). If this parameter is left empty, the resource isolation type will be the same as the original one.
     * @param integer $Cpu The number of CPU cores after the instance is upgraded. If this parameter is left empty, the minimum value will be automatically filled based on the value specified by `Memory`.
     * @param integer $FastUpgrade QuickChange options. Valid values: `0` (common upgrade), `1` (QuickChange), `2` (QuickChange first). After QuickChange is enabled, the required resources will be checked. QuickChange will be performed only when the required resources support the feature; otherwise, an error message will be returned.
     * @param integer $MaxDelayTime Delay threshold. Value range: 1-10. Default value: `10`.
     * @param integer $CrossCluster Whether to migrate the source node across AZs. Valid values: `0` (no), `1`(yes). Default value: `0`. If it is `1`, you can modify the source node AZ.
     * @param string $ZoneId New AZ of the source node. This field is only valid when `CrossCluster` is `1`. Only migration across AZs in the same region is supported.
     * @param string $RoTransType Processing logic of the intra-AZ read-only instance for cross-cluster migration. Valid values: `together` (intra-AZ read-only instances will be migrated to the target AZ with the source instance by default.), `severally` (intra-AZ read-only instances will maintain the original deployment mode and will not be migrated to the target AZ.).
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
    }
}
