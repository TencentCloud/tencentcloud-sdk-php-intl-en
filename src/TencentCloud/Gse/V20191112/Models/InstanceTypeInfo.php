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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The server instance type information
 *
 * @method string getTypeName() Obtain Name of the server type, such as `Standard SA1`
 * @method void setTypeName(string $TypeName) Set Name of the server type, such as `Standard SA1`
 * @method string getInstanceType() Obtain Specification of the server type, such as `SA1.SMALL1`
 * @method void setInstanceType(string $InstanceType) Set Specification of the server type, such as `SA1.SMALL1`
 * @method integer getCpu() Obtain CPU, in core
 * @method void setCpu(integer $Cpu) Set CPU, in core
 * @method integer getMemory() Obtain Memory, in GB
 * @method void setMemory(integer $Memory) Set Memory, in GB
 * @method integer getNetworkCard() Obtain The packet sending and receiving capability, in 10k PPS. 
 * @method void setNetworkCard(integer $NetworkCard) Set The packet sending and receiving capability, in 10k PPS. 
 */
class InstanceTypeInfo extends AbstractModel
{
    /**
     * @var string Name of the server type, such as `Standard SA1`
     */
    public $TypeName;

    /**
     * @var string Specification of the server type, such as `SA1.SMALL1`
     */
    public $InstanceType;

    /**
     * @var integer CPU, in core
     */
    public $Cpu;

    /**
     * @var integer Memory, in GB
     */
    public $Memory;

    /**
     * @var integer The packet sending and receiving capability, in 10k PPS. 
     */
    public $NetworkCard;

    /**
     * @param string $TypeName Name of the server type, such as `Standard SA1`
     * @param string $InstanceType Specification of the server type, such as `SA1.SMALL1`
     * @param integer $Cpu CPU, in core
     * @param integer $Memory Memory, in GB
     * @param integer $NetworkCard The packet sending and receiving capability, in 10k PPS. 
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }
    }
}
