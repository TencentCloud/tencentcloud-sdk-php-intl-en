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
 * Purchasable configuration details
 *
 * @method string getDevice() Obtain (Disused) Device type
 * @method void setDevice(string $Device) Set (Disused) Device type
 * @method string getType() Obtain (Disused) Purchasable specification description 
 * @method void setType(string $Type) Set (Disused) Purchasable specification description 
 * @method string getCdbType() Obtain (Disused) Instance type 
 * @method void setCdbType(string $CdbType) Set (Disused) Instance type 
 * @method integer getMemory() Obtain Memory size in MB
 * @method void setMemory(integer $Memory) Set Memory size in MB
 * @method integer getCpu() Obtain CPU core count
 * @method void setCpu(integer $Cpu) Set CPU core count
 * @method integer getVolumeMin() Obtain Minimum disk size in GB
 * @method void setVolumeMin(integer $VolumeMin) Set Minimum disk size in GB
 * @method integer getVolumeMax() Obtain Maximum disk size in GB
 * @method void setVolumeMax(integer $VolumeMax) Set Maximum disk size in GB
 * @method integer getVolumeStep() Obtain Disk increment in GB
 * @method void setVolumeStep(integer $VolumeStep) Set Disk increment in GB
 * @method integer getConnection() Obtain Number of connections
 * @method void setConnection(integer $Connection) Set Number of connections
 * @method integer getQps() Obtain Queries per second
 * @method void setQps(integer $Qps) Set Queries per second
 * @method integer getIops() Obtain IOs per second
 * @method void setIops(integer $Iops) Set IOs per second
 * @method string getInfo() Obtain Application scenario description
 * @method void setInfo(string $Info) Set Application scenario description
 * @method integer getStatus() Obtain Status. Value `0` indicates that this specification is purchasable.
 * @method void setStatus(integer $Status) Set Status. Value `0` indicates that this specification is purchasable.
 * @method integer getTag() Obtain (Disused) Tag value
 * @method void setTag(integer $Tag) Set (Disused) Tag value
 * @method string getDeviceType() Obtain Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setDeviceType(string $DeviceType) Set Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getDeviceTypeName() Obtain Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setDeviceTypeName(string $DeviceTypeName) Set Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class SellConfig extends AbstractModel
{
    /**
     * @var string (Disused) Device type
     */
    public $Device;

    /**
     * @var string (Disused) Purchasable specification description 
     */
    public $Type;

    /**
     * @var string (Disused) Instance type 
     */
    public $CdbType;

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
     * @var integer Disk increment in GB
     */
    public $VolumeStep;

    /**
     * @var integer Number of connections
     */
    public $Connection;

    /**
     * @var integer Queries per second
     */
    public $Qps;

    /**
     * @var integer IOs per second
     */
    public $Iops;

    /**
     * @var string Application scenario description
     */
    public $Info;

    /**
     * @var integer Status. Value `0` indicates that this specification is purchasable.
     */
    public $Status;

    /**
     * @var integer (Disused) Tag value
     */
    public $Tag;

    /**
     * @var string Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $DeviceType;

    /**
     * @var string Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $DeviceTypeName;

    /**
     * @param string $Device (Disused) Device type
     * @param string $Type (Disused) Purchasable specification description 
     * @param string $CdbType (Disused) Instance type 
     * @param integer $Memory Memory size in MB
     * @param integer $Cpu CPU core count
     * @param integer $VolumeMin Minimum disk size in GB
     * @param integer $VolumeMax Maximum disk size in GB
     * @param integer $VolumeStep Disk increment in GB
     * @param integer $Connection Number of connections
     * @param integer $Qps Queries per second
     * @param integer $Iops IOs per second
     * @param string $Info Application scenario description
     * @param integer $Status Status. Value `0` indicates that this specification is purchasable.
     * @param integer $Tag (Disused) Tag value
     * @param string $DeviceType Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $DeviceTypeName Instance resource isolation type. Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance).
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CdbType",$param) and $param["CdbType"] !== null) {
            $this->CdbType = $param["CdbType"];
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

        if (array_key_exists("Connection",$param) and $param["Connection"] !== null) {
            $this->Connection = $param["Connection"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
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

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DeviceTypeName",$param) and $param["DeviceTypeName"] !== null) {
            $this->DeviceTypeName = $param["DeviceTypeName"];
        }
    }
}
