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
 * 
 *
 * @method string getResourceProviderIdentifier() Obtain 
 * @method void setResourceProviderIdentifier(string $ResourceProviderIdentifier) Set 
 * @method string getResourceProviderType() Obtain 
 * @method void setResourceProviderType(string $ResourceProviderType) Set 
 * @method string getNodeType() Obtain 
 * @method void setNodeType(string $NodeType) Set 
 * @method integer getCpu() Obtain 
 * @method void setCpu(integer $Cpu) Set 
 * @method integer getMemory() Obtain 
 * @method void setMemory(integer $Memory) Set 
 * @method array getDataVolumes() Obtain 
 * @method void setDataVolumes(array $DataVolumes) Set 
 */
class PodSpec extends AbstractModel
{
    /**
     * @var string 
     */
    public $ResourceProviderIdentifier;

    /**
     * @var string 
     */
    public $ResourceProviderType;

    /**
     * @var string 
     */
    public $NodeType;

    /**
     * @var integer 
     */
    public $Cpu;

    /**
     * @var integer 
     */
    public $Memory;

    /**
     * @var array 
     */
    public $DataVolumes;

    /**
     * @param string $ResourceProviderIdentifier 
     * @param string $ResourceProviderType 
     * @param string $NodeType 
     * @param integer $Cpu 
     * @param integer $Memory 
     * @param array $DataVolumes 
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
        if (array_key_exists("ResourceProviderIdentifier",$param) and $param["ResourceProviderIdentifier"] !== null) {
            $this->ResourceProviderIdentifier = $param["ResourceProviderIdentifier"];
        }

        if (array_key_exists("ResourceProviderType",$param) and $param["ResourceProviderType"] !== null) {
            $this->ResourceProviderType = $param["ResourceProviderType"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DataVolumes",$param) and $param["DataVolumes"] !== null) {
            $this->DataVolumes = $param["DataVolumes"];
        }
    }
}
