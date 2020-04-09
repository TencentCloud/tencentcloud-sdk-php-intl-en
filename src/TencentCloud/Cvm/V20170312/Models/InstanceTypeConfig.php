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
 * Describes the configurations of an instance model.
 *
 * @method string getZone() Obtain Availability zone.
 * @method void setZone(string $Zone) Set Availability zone.
 * @method string getInstanceType() Obtain Instance model.
 * @method void setInstanceType(string $InstanceType) Set Instance model.
 * @method string getInstanceFamily() Obtain Instance model family.
 * @method void setInstanceFamily(string $InstanceFamily) Set Instance model family.
 * @method integer getGPU() Obtain Number of GPU cores.
 * @method void setGPU(integer $GPU) Set Number of GPU cores.
 * @method integer getCPU() Obtain Number of CPU cores.
 * @method void setCPU(integer $CPU) Set Number of CPU cores.
 * @method integer getMemory() Obtain Memory capacity; unit: `GB`.
 * @method void setMemory(integer $Memory) Set Memory capacity; unit: `GB`.
 * @method integer getFPGA() Obtain Number of FPGA cores; unit: core.
 * @method void setFPGA(integer $FPGA) Set Number of FPGA cores; unit: core.
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
     * @var integer Number of FPGA cores; unit: core.
     */
    public $FPGA;

    /**
     * @param string $Zone Availability zone.
     * @param string $InstanceType Instance model.
     * @param string $InstanceFamily Instance model family.
     * @param integer $GPU Number of GPU cores.
     * @param integer $CPU Number of CPU cores.
     * @param integer $Memory Memory capacity; unit: `GB`.
     * @param integer $FPGA Number of FPGA cores; unit: core.
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

        if (array_key_exists("FPGA",$param) and $param["FPGA"] !== null) {
            $this->FPGA = $param["FPGA"];
        }
    }
}
