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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target resource specification
 *
 * @method integer getMemory() Obtain Memory capacity in GB
 * @method void setMemory(integer $Memory) Set Memory capacity in GB
 * @method integer getCPUCores() Obtain Number of CPU cores
 * @method void setCPUCores(integer $CPUCores) Set Number of CPU cores
 * @method string getResourceId() Obtain Machine resource ID (EMR resource identifier)
 * @method void setResourceId(string $ResourceId) Set Machine resource ID (EMR resource identifier)
 * @method string getInstanceType() Obtain Target machine specification
 * @method void setInstanceType(string $InstanceType) Set Target machine specification
 */
class UpdateInstanceSettings extends AbstractModel
{
    /**
     * @var integer Memory capacity in GB
     */
    public $Memory;

    /**
     * @var integer Number of CPU cores
     */
    public $CPUCores;

    /**
     * @var string Machine resource ID (EMR resource identifier)
     */
    public $ResourceId;

    /**
     * @var string Target machine specification
     */
    public $InstanceType;

    /**
     * @param integer $Memory Memory capacity in GB
     * @param integer $CPUCores Number of CPU cores
     * @param string $ResourceId Machine resource ID (EMR resource identifier)
     * @param string $InstanceType Target machine specification
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

        if (array_key_exists("CPUCores",$param) and $param["CPUCores"] !== null) {
            $this->CPUCores = $param["CPUCores"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
