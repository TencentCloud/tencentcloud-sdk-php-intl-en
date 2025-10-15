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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Initializes the configuration information of an instance.
 *
 * @method integer getCpu() Obtain Specifies the cpu of the instance.
 * @method void setCpu(integer $Cpu) Set Specifies the cpu of the instance.
 * @method integer getMemory() Obtain Specifies the instance memory.
 * @method void setMemory(integer $Memory) Set Specifies the instance memory.
 * @method string getInstanceType() Obtain Instance type (rw/ro).
 * @method void setInstanceType(string $InstanceType) Set Instance type (rw/ro).
 * @method integer getInstanceCount() Obtain Number of instances. value range: [1,15].
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances. value range: [1,15].
 * @method string getDeviceType() Obtain Instance machine type. valid values: universal type (common), exclusive type.
 * @method void setDeviceType(string $DeviceType) Set Instance machine type. valid values: universal type (common), exclusive type.
 */
class IntegrateInstanceInfo extends AbstractModel
{
    /**
     * @var integer Specifies the cpu of the instance.
     */
    public $Cpu;

    /**
     * @var integer Specifies the instance memory.
     */
    public $Memory;

    /**
     * @var string Instance type (rw/ro).
     */
    public $InstanceType;

    /**
     * @var integer Number of instances. value range: [1,15].
     */
    public $InstanceCount;

    /**
     * @var string Instance machine type. valid values: universal type (common), exclusive type.
     */
    public $DeviceType;

    /**
     * @param integer $Cpu Specifies the cpu of the instance.
     * @param integer $Memory Specifies the instance memory.
     * @param string $InstanceType Instance type (rw/ro).
     * @param integer $InstanceCount Number of instances. value range: [1,15].
     * @param string $DeviceType Instance machine type. valid values: universal type (common), exclusive type.
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
