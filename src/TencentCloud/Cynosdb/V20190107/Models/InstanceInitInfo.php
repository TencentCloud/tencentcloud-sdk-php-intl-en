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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance initialization configuration information
 *
 * @method integer getCpu() Obtain Instance CPU
 * @method void setCpu(integer $Cpu) Set Instance CPU
 * @method integer getMemory() Obtain Instance memory
 * @method void setMemory(integer $Memory) Set Instance memory
 * @method string getInstanceType() Obtain Instance type. Valid values:`rw`, `ro`.
 * @method void setInstanceType(string $InstanceType) Set Instance type. Valid values:`rw`, `ro`.
 * @method integer getInstanceCount() Obtain Number of the instances. Value range: 1-15.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of the instances. Value range: 1-15.
 */
class InstanceInitInfo extends AbstractModel
{
    /**
     * @var integer Instance CPU
     */
    public $Cpu;

    /**
     * @var integer Instance memory
     */
    public $Memory;

    /**
     * @var string Instance type. Valid values:`rw`, `ro`.
     */
    public $InstanceType;

    /**
     * @var integer Number of the instances. Value range: 1-15.
     */
    public $InstanceCount;

    /**
     * @param integer $Cpu Instance CPU
     * @param integer $Memory Instance memory
     * @param string $InstanceType Instance type. Valid values:`rw`, `ro`.
     * @param integer $InstanceCount Number of the instances. Value range: 1-15.
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
    }
}
