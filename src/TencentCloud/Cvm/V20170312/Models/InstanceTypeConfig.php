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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取Availability zone.
 * @method void setZone(string $Zone) 设置Availability zone.
 * @method string getInstanceType() 获取Instance model.
 * @method void setInstanceType(string $InstanceType) 设置Instance model.
 * @method string getInstanceFamily() 获取Instance model family.
 * @method void setInstanceFamily(string $InstanceFamily) 设置Instance model family.
 * @method integer getGPU() 获取Number of GPU cores.
 * @method void setGPU(integer $GPU) 设置Number of GPU cores.
 * @method integer getCPU() 获取Number of CPU cores.
 * @method void setCPU(integer $CPU) 设置Number of CPU cores.
 * @method integer getMemory() 获取Memory capacity; unit: `GB`.
 * @method void setMemory(integer $Memory) 设置Memory capacity; unit: `GB`.
 */

/**
 *Describes the configurations of an instance model.
 */
class InstanceTypeConfig extends AbstractModel
{
    /**
     * @var string Availability zone.
     */
    public $Zone;

    /**
     * @var string Instance model.
     */
    public $InstanceType;

    /**
     * @var string Instance model family.
     */
    public $InstanceFamily;

    /**
     * @var integer Number of GPU cores.
     */
    public $GPU;

    /**
     * @var integer Number of CPU cores.
     */
    public $CPU;

    /**
     * @var integer Memory capacity; unit: `GB`.
     */
    public $Memory;
    /**
     * @param string $Zone Availability zone.
     * @param string $InstanceType Instance model.
     * @param string $InstanceFamily Instance model family.
     * @param integer $GPU Number of GPU cores.
     * @param integer $CPU Number of CPU cores.
     * @param integer $Memory Memory capacity; unit: `GB`.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("GPU",$param) and $param["GPU"] !== null) {
            $this->GPU = $param["GPU"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
