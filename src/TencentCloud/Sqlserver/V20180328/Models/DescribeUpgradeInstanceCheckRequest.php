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
 * DescribeUpgradeInstanceCheck request structure.
 *
 * @method string getInstanceId() Obtain Database instance ID, in the format of mssql-njj2mtpl.
 * @method void setInstanceId(string $InstanceId) Set Database instance ID, in the format of mssql-njj2mtpl.
 * @method integer getCpu() Obtain Number of CPU cores after instance configuration adjustment. If it is left blank, no modification is required.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores after instance configuration adjustment. If it is left blank, no modification is required.
 * @method integer getMemory() Obtain Memory size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
 * @method void setMemory(integer $Memory) Set Memory size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
 * @method integer getStorage() Obtain Disk size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
 * @method void setStorage(integer $Storage) Set Disk size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
 * @method string getDBVersion() Obtain Instance version. If it is left blank, no modification is required.
 * @method void setDBVersion(string $DBVersion) Set Instance version. If it is left blank, no modification is required.
 * @method string getHAType() Obtain Type after instance configuration adjustment. Valid values: CLUSTER - cluster. If it is left blank, no modification is required.
 * @method void setHAType(string $HAType) Set Type after instance configuration adjustment. Valid values: CLUSTER - cluster. If it is left blank, no modification is required.
 * @method string getMultiZones() Obtain Cross-AZ type after instance configuration adjustment. Valid values: SameZones - change to the same AZ; MultiZones - change to cross-AZ. If it is left blank, no modification is required.
 * @method void setMultiZones(string $MultiZones) Set Cross-AZ type after instance configuration adjustment. Valid values: SameZones - change to the same AZ; MultiZones - change to cross-AZ. If it is left blank, no modification is required.
 * @method array getDrZones() Obtain Secondary node AZ of the multi-node architecture instance. The default value is null. It should be specified when modifying the AZ of the specified secondary node needs to be performed during configuration adjustment. When MultiZones = MultiZones, the AZs of the primary nodes and secondary nodes cannot all be the same. The collection of AZs of the secondary node can include 2-5 AZs.
 * @method void setDrZones(array $DrZones) Set Secondary node AZ of the multi-node architecture instance. The default value is null. It should be specified when modifying the AZ of the specified secondary node needs to be performed during configuration adjustment. When MultiZones = MultiZones, the AZs of the primary nodes and secondary nodes cannot all be the same. The collection of AZs of the secondary node can include 2-5 AZs.
 */
class DescribeUpgradeInstanceCheckRequest extends AbstractModel
{
    /**
     * @var string Database instance ID, in the format of mssql-njj2mtpl.
     */
    public $InstanceId;

    /**
     * @var integer Number of CPU cores after instance configuration adjustment. If it is left blank, no modification is required.
     */
    public $Cpu;

    /**
     * @var integer Memory size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
     */
    public $Memory;

    /**
     * @var integer Disk size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
     */
    public $Storage;

    /**
     * @var string Instance version. If it is left blank, no modification is required.
     */
    public $DBVersion;

    /**
     * @var string Type after instance configuration adjustment. Valid values: CLUSTER - cluster. If it is left blank, no modification is required.
     */
    public $HAType;

    /**
     * @var string Cross-AZ type after instance configuration adjustment. Valid values: SameZones - change to the same AZ; MultiZones - change to cross-AZ. If it is left blank, no modification is required.
     */
    public $MultiZones;

    /**
     * @var array Secondary node AZ of the multi-node architecture instance. The default value is null. It should be specified when modifying the AZ of the specified secondary node needs to be performed during configuration adjustment. When MultiZones = MultiZones, the AZs of the primary nodes and secondary nodes cannot all be the same. The collection of AZs of the secondary node can include 2-5 AZs.
     */
    public $DrZones;

    /**
     * @param string $InstanceId Database instance ID, in the format of mssql-njj2mtpl.
     * @param integer $Cpu Number of CPU cores after instance configuration adjustment. If it is left blank, no modification is required.
     * @param integer $Memory Memory size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
     * @param integer $Storage Disk size after instance configuration adjustment, in GB. If it is left blank, no modification is required.
     * @param string $DBVersion Instance version. If it is left blank, no modification is required.
     * @param string $HAType Type after instance configuration adjustment. Valid values: CLUSTER - cluster. If it is left blank, no modification is required.
     * @param string $MultiZones Cross-AZ type after instance configuration adjustment. Valid values: SameZones - change to the same AZ; MultiZones - change to cross-AZ. If it is left blank, no modification is required.
     * @param array $DrZones Secondary node AZ of the multi-node architecture instance. The default value is null. It should be specified when modifying the AZ of the specified secondary node needs to be performed during configuration adjustment. When MultiZones = MultiZones, the AZs of the primary nodes and secondary nodes cannot all be the same. The collection of AZs of the secondary node can include 2-5 AZs.
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("HAType",$param) and $param["HAType"] !== null) {
            $this->HAType = $param["HAType"];
        }

        if (array_key_exists("MultiZones",$param) and $param["MultiZones"] !== null) {
            $this->MultiZones = $param["MultiZones"];
        }

        if (array_key_exists("DrZones",$param) and $param["DrZones"] !== null) {
            $this->DrZones = [];
            foreach ($param["DrZones"] as $key => $value){
                $obj = new DrZoneInfo();
                $obj->deserialize($value);
                array_push($this->DrZones, $obj);
            }
        }
    }
}
