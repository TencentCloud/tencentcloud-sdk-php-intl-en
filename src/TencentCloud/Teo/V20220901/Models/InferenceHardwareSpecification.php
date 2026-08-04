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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reasoning hardware specifications.
 *
 * @method string getSpec() Obtain Specification flag.
 * @method void setSpec(string $Spec) Set Specification flag.
 * @method string getName() Obtain Specification name.
 * @method void setName(string $Name) Set Specification name.
 * @method float getCPUNum() Obtain Number of CPU cores.
 * @method void setCPUNum(float $CPUNum) Set Number of CPU cores.
 * @method integer getMemSize() Obtain Memory size. Unit: MB.
 * @method void setMemSize(integer $MemSize) Set Memory size. Unit: MB.
 * @method float getGPUNum() Obtain Number of GPU cards.
 * @method void setGPUNum(float $GPUNum) Set Number of GPU cards.
 * @method integer getGPUMemSize() Obtain GPU VRAM size. Unit: MB.
 * @method void setGPUMemSize(integer $GPUMemSize) Set GPU VRAM size. Unit: MB.
 */
class InferenceHardwareSpecification extends AbstractModel
{
    /**
     * @var string Specification flag.
     */
    public $Spec;

    /**
     * @var string Specification name.
     */
    public $Name;

    /**
     * @var float Number of CPU cores.
     */
    public $CPUNum;

    /**
     * @var integer Memory size. Unit: MB.
     */
    public $MemSize;

    /**
     * @var float Number of GPU cards.
     */
    public $GPUNum;

    /**
     * @var integer GPU VRAM size. Unit: MB.
     */
    public $GPUMemSize;

    /**
     * @param string $Spec Specification flag.
     * @param string $Name Specification name.
     * @param float $CPUNum Number of CPU cores.
     * @param integer $MemSize Memory size. Unit: MB.
     * @param float $GPUNum Number of GPU cards.
     * @param integer $GPUMemSize GPU VRAM size. Unit: MB.
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CPUNum",$param) and $param["CPUNum"] !== null) {
            $this->CPUNum = $param["CPUNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            $this->GPUNum = $param["GPUNum"];
        }

        if (array_key_exists("GPUMemSize",$param) and $param["GPUMemSize"] !== null) {
            $this->GPUMemSize = $param["GPUMemSize"];
        }
    }
}
