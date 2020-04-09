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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of InstanceTypeConfig available to BatchCompute
 *
 * @method integer getMem() Obtain Memory size in GB.
 * @method void setMem(integer $Mem) Set Memory size in GB.
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method string getInstanceType() Obtain Instance model.
 * @method void setInstanceType(string $InstanceType) Set Instance model.
 * @method string getZone() Obtain Availability zone.
 * @method void setZone(string $Zone) Set Availability zone.
 * @method string getInstanceFamily() Obtain Instance model family.
 * @method void setInstanceFamily(string $InstanceFamily) Set Instance model family.
 */
class InstanceTypeConfig extends AbstractModel
{
    /**
     * @var integer Memory size in GB.
     */
    public $Mem;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var string Instance model.
     */
    public $InstanceType;

    /**
     * @var string Availability zone.
     */
    public $Zone;

    /**
     * @var string Instance model family.
     */
    public $InstanceFamily;

    /**
     * @param integer $Mem Memory size in GB.
     * @param integer $Cpu Number of CPU cores.
     * @param string $InstanceType Instance model.
     * @param string $Zone Availability zone.
     * @param string $InstanceFamily Instance model family.
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
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
