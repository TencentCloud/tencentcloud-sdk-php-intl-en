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
 * Proxy configuration
 *
 * @method string getDevice() Obtain Device
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setDevice(string $Device) Set Device
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getType() Obtain Type
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setType(string $Type) Set Type
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getDeviceType() Obtain Device type
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setDeviceType(string $DeviceType) Set Device type
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getMemory() Obtain Memory
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setMemory(integer $Memory) Set Memory
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getCpu() Obtain Number of CPU cores
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
Note: this field may return `null`, indicating that no valid value can be found.
 */
class CustomConfig extends AbstractModel
{
    /**
     * @var string Device
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Device;

    /**
     * @var string Type
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Type;

    /**
     * @var string Device type
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $DeviceType;

    /**
     * @var integer Memory
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Memory;

    /**
     * @var integer Number of CPU cores
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Cpu;

    /**
     * @param string $Device Device
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $Type Type
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $DeviceType Device type
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $Memory Memory
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $Cpu Number of CPU cores
Note: this field may return `null`, indicating that no valid value can be found.
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

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
