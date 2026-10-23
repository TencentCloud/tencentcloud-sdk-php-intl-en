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
 * Instance initialization configuration information
 *
 * @method integer getCpu() Obtain Instance cpu
 * @method void setCpu(integer $Cpu) Set Instance cpu
 * @method integer getMemory() Obtain Instance memory
 * @method void setMemory(integer $Memory) Set Instance memory
 * @method string getInstanceType() Obtain Instance type. Valid values: `rw` (primary), `ro` (read-only).
 * @method void setInstanceType(string $InstanceType) Set Instance type. Valid values: `rw` (primary), `ro` (read-only).
 * @method integer getInstanceCount() Obtain Number of instances. Value range: 1-15.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances. Value range: 1-15.
 * @method string getDeviceType() Obtain Instance machine type. common: universal type; exclusive: dedicated type
 * @method void setDeviceType(string $DeviceType) Set Instance machine type. common: universal type; exclusive: dedicated type
 */
class IntegrateInstanceInfo extends AbstractModel
{
    /**
     * @var integer Instance cpu
     */
    public $Cpu;

    /**
     * @var integer Instance memory
     */
    public $Memory;

    /**
     * @var string Instance type. Valid values: `rw` (primary), `ro` (read-only).
     */
    public $InstanceType;

    /**
     * @var integer Number of instances. Value range: 1-15.
     */
    public $InstanceCount;

    /**
     * @var string Instance machine type. common: universal type; exclusive: dedicated type
     */
    public $DeviceType;

    /**
     * @param integer $Cpu Instance cpu
     * @param integer $Memory Instance memory
     * @param string $InstanceType Instance type. Valid values: `rw` (primary), `ro` (read-only).
     * @param integer $InstanceCount Number of instances. Value range: 1-15.
     * @param string $DeviceType Instance machine type. common: universal type; exclusive: dedicated type
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
