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
 * @method integer getCpu() Obtain <p>Instance cpu</p>
 * @method void setCpu(integer $Cpu) Set <p>Instance cpu</p>
 * @method integer getMemory() Obtain <p>Instance memory</p>
 * @method void setMemory(integer $Memory) Set <p>Instance memory</p>
 * @method string getInstanceType() Obtain <p>Instance type rw/ro</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance type rw/ro</p>
 * @method integer getInstanceCount() Obtain <p>Number of instances, range [1,15]</p>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Number of instances, range [1,15]</p>
 * @method integer getMinRoCount() Obtain <p>Minimum count of Serverless instance, range [1,15]</p>
 * @method void setMinRoCount(integer $MinRoCount) Set <p>Minimum count of Serverless instance, range [1,15]</p>
 * @method integer getMaxRoCount() Obtain <p>Maximum count of Serverless instances, range [1,15]</p>
 * @method void setMaxRoCount(integer $MaxRoCount) Set <p>Maximum count of Serverless instances, range [1,15]</p>
 * @method float getMinRoCpu() Obtain <p>Minimum specification of Serverless instance</p>
 * @method void setMinRoCpu(float $MinRoCpu) Set <p>Minimum specification of Serverless instance</p>
 * @method float getMaxRoCpu() Obtain <p>Maximum specification of Serverless instance</p>
 * @method void setMaxRoCpu(float $MaxRoCpu) Set <p>Maximum specification of Serverless instance</p>
 * @method string getDeviceType() Obtain <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
 */
class InstanceInitInfo extends AbstractModel
{
    /**
     * @var integer <p>Instance cpu</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Instance memory</p>
     */
    public $Memory;

    /**
     * @var string <p>Instance type rw/ro</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>Number of instances, range [1,15]</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>Minimum count of Serverless instance, range [1,15]</p>
     */
    public $MinRoCount;

    /**
     * @var integer <p>Maximum count of Serverless instances, range [1,15]</p>
     */
    public $MaxRoCount;

    /**
     * @var float <p>Minimum specification of Serverless instance</p>
     */
    public $MinRoCpu;

    /**
     * @var float <p>Maximum specification of Serverless instance</p>
     */
    public $MaxRoCpu;

    /**
     * @var string <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
     */
    public $DeviceType;

    /**
     * @param integer $Cpu <p>Instance cpu</p>
     * @param integer $Memory <p>Instance memory</p>
     * @param string $InstanceType <p>Instance type rw/ro</p>
     * @param integer $InstanceCount <p>Number of instances, range [1,15]</p>
     * @param integer $MinRoCount <p>Minimum count of Serverless instance, range [1,15]</p>
     * @param integer $MaxRoCount <p>Maximum count of Serverless instances, range [1,15]</p>
     * @param float $MinRoCpu <p>Minimum specification of Serverless instance</p>
     * @param float $MaxRoCpu <p>Maximum specification of Serverless instance</p>
     * @param string $DeviceType <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
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

        if (array_key_exists("MinRoCount",$param) and $param["MinRoCount"] !== null) {
            $this->MinRoCount = $param["MinRoCount"];
        }

        if (array_key_exists("MaxRoCount",$param) and $param["MaxRoCount"] !== null) {
            $this->MaxRoCount = $param["MaxRoCount"];
        }

        if (array_key_exists("MinRoCpu",$param) and $param["MinRoCpu"] !== null) {
            $this->MinRoCpu = $param["MinRoCpu"];
        }

        if (array_key_exists("MaxRoCpu",$param) and $param["MaxRoCpu"] !== null) {
            $this->MaxRoCpu = $param["MaxRoCpu"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
