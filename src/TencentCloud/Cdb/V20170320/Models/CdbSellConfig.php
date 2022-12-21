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
 * The details of purchasable configuration
 *
 * @method integer getMemory() Obtain Memory size in MB
 * @method void setMemory(integer $Memory) Set Memory size in MB
 * @method integer getCpu() Obtain CPU core count
 * @method void setCpu(integer $Cpu) Set CPU core count
 * @method integer getVolumeMin() Obtain Minimum disk size in GB
 * @method void setVolumeMin(integer $VolumeMin) Set Minimum disk size in GB
 * @method integer getVolumeMax() Obtain Maximum disk size in GB
 * @method void setVolumeMax(integer $VolumeMax) Set Maximum disk size in GB
 * @method integer getVolumeStep() Obtain Disk capacity increment in GB
 * @method void setVolumeStep(integer $VolumeStep) Set Disk capacity increment in GB
 * @method integer getIops() Obtain IO operations per second
 * @method void setIops(integer $Iops) Set IO operations per second
 * @method string getInfo() Obtain Application scenario description
 * @method void setInfo(string $Info) Set Application scenario description
 * @method integer getStatus() Obtain Status. The value `0` indicates that this specification is available.
 * @method void setStatus(integer $Status) Set Status. The value `0` indicates that this specification is available.
 * @method string getDeviceType() Obtain Instance type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance), `BASIC_V2` (basic v2 instance).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeviceType(string $DeviceType) Set Instance type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance), `BASIC_V2` (basic v2 instance).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineType() Obtain Engine type description. Valid values: `Innodb`, `RocksDB`.
 * @method void setEngineType(string $EngineType) Set Engine type description. Valid values: `Innodb`, `RocksDB`.
 * @method integer getId() Obtain Purchasable specifications ID
 * @method void setId(integer $Id) Set Purchasable specifications ID
 */
class CdbSellConfig extends AbstractModel
{
    /**
     * @var integer Memory size in MB
     */
    public $Memory;

    /**
     * @var integer CPU core count
     */
    public $Cpu;

    /**
     * @var integer Minimum disk size in GB
     */
    public $VolumeMin;

    /**
     * @var integer Maximum disk size in GB
     */
    public $VolumeMax;

    /**
     * @var integer Disk capacity increment in GB
     */
    public $VolumeStep;

    /**
     * @var integer IO operations per second
     */
    public $Iops;

    /**
     * @var string Application scenario description
     */
    public $Info;

    /**
     * @var integer Status. The value `0` indicates that this specification is available.
     */
    public $Status;

    /**
     * @var string Instance type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance), `BASIC_V2` (basic v2 instance).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeviceType;

    /**
     * @var string Engine type description. Valid values: `Innodb`, `RocksDB`.
     */
    public $EngineType;

    /**
     * @var integer Purchasable specifications ID
     */
    public $Id;

    /**
     * @param integer $Memory Memory size in MB
     * @param integer $Cpu CPU core count
     * @param integer $VolumeMin Minimum disk size in GB
     * @param integer $VolumeMax Maximum disk size in GB
     * @param integer $VolumeStep Disk capacity increment in GB
     * @param integer $Iops IO operations per second
     * @param string $Info Application scenario description
     * @param integer $Status Status. The value `0` indicates that this specification is available.
     * @param string $DeviceType Instance type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance), `BASIC_V2` (basic v2 instance).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineType Engine type description. Valid values: `Innodb`, `RocksDB`.
     * @param integer $Id Purchasable specifications ID
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VolumeMin",$param) and $param["VolumeMin"] !== null) {
            $this->VolumeMin = $param["VolumeMin"];
        }

        if (array_key_exists("VolumeMax",$param) and $param["VolumeMax"] !== null) {
            $this->VolumeMax = $param["VolumeMax"];
        }

        if (array_key_exists("VolumeStep",$param) and $param["VolumeStep"] !== null) {
            $this->VolumeStep = $param["VolumeStep"];
        }

        if (array_key_exists("Iops",$param) and $param["Iops"] !== null) {
            $this->Iops = $param["Iops"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
