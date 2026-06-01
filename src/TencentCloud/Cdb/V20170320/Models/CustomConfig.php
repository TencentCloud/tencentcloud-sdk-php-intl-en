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
 * Proxy configuration
 *
 * @method string getDevice() Obtain device
 * @method void setDevice(string $Device) Set device
 * @method string getType() Obtain Type.
 * @method void setType(string $Type) Set Type.
 * @method string getDeviceType() Obtain Device type
 * @method void setDeviceType(string $DeviceType) Set Device type
 * @method integer getMemory() Obtain Memory, measured in MB
 * @method void setMemory(integer $Memory) Set Memory, measured in MB
 * @method integer getCpu() Obtain Number of cores
 * @method void setCpu(integer $Cpu) Set Number of cores
 */
class CustomConfig extends AbstractModel
{
    /**
     * @var string device
     */
    public $Device;

    /**
     * @var string Type.
     */
    public $Type;

    /**
     * @var string Device type
     */
    public $DeviceType;

    /**
     * @var integer Memory, measured in MB
     */
    public $Memory;

    /**
     * @var integer Number of cores
     */
    public $Cpu;

    /**
     * @param string $Device device
     * @param string $Type Type.
     * @param string $DeviceType Device type
     * @param integer $Memory Memory, measured in MB
     * @param integer $Cpu Number of cores
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
