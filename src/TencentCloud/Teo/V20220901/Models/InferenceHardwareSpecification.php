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
 * Reasoning hardware specification info.
 *
 * @method string getSpec() Obtain <p>Specification flag. Abandoned. For reference, use the field <code>HardwareSpecId</code>.</p>
 * @method void setSpec(string $Spec) Set <p>Specification flag. Abandoned. For reference, use the field <code>HardwareSpecId</code>.</p>
 * @method string getHardwareSpecId() Obtain <p>Unique identification ID of the specification.</p>
 * @method void setHardwareSpecId(string $HardwareSpecId) Set <p>Unique identification ID of the specification.</p>
 * @method string getName() Obtain <p>Specification name.</p>
 * @method void setName(string $Name) Set <p>Specification name.</p>
 * @method float getGPUNum() Obtain <p>Number of GPU cards assigned by default for the specification.</p>
 * @method void setGPUNum(float $GPUNum) Set <p>Number of GPU cards assigned by default for the specification.</p>
 * @method float getCPUNum() Obtain <p>Default number of CPU cores allocated to the specification.</p>
 * @method void setCPUNum(float $CPUNum) Set <p>Default number of CPU cores allocated to the specification.</p>
 * @method integer getMemSize() Obtain <p>Default allocated memory size for the specification.</p><p>In MB.</p>
 * @method void setMemSize(integer $MemSize) Set <p>Default allocated memory size for the specification.</p><p>In MB.</p>
 * @method integer getGPUMemSize() Obtain <p>GPU VRAM size assigned by default in the specification.</p><p>Unit: MB</p>
 * @method void setGPUMemSize(integer $GPUMemSize) Set <p>GPU VRAM size assigned by default in the specification.</p><p>Unit: MB</p>
 * @method integer getDiskSize() Obtain <p>Default disk space allocated for the specification.</p><p>Unit: MB</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Default disk space allocated for the specification.</p><p>Unit: MB</p>
 * @method array getAllowedGPUNums() Obtain <p>List of GPU card counts currently supported by the specification.</p><p>If not filled or filled with an empty array, only the GPU card count assigned by default for the specification is supported.</p>
 * @method void setAllowedGPUNums(array $AllowedGPUNums) Set <p>List of GPU card counts currently supported by the specification.</p><p>If not filled or filled with an empty array, only the GPU card count assigned by default for the specification is supported.</p>
 */
class InferenceHardwareSpecification extends AbstractModel
{
    /**
     * @var string <p>Specification flag. Abandoned. For reference, use the field <code>HardwareSpecId</code>.</p>
     * @deprecated
     */
    public $Spec;

    /**
     * @var string <p>Unique identification ID of the specification.</p>
     */
    public $HardwareSpecId;

    /**
     * @var string <p>Specification name.</p>
     */
    public $Name;

    /**
     * @var float <p>Number of GPU cards assigned by default for the specification.</p>
     */
    public $GPUNum;

    /**
     * @var float <p>Default number of CPU cores allocated to the specification.</p>
     */
    public $CPUNum;

    /**
     * @var integer <p>Default allocated memory size for the specification.</p><p>In MB.</p>
     */
    public $MemSize;

    /**
     * @var integer <p>GPU VRAM size assigned by default in the specification.</p><p>Unit: MB</p>
     */
    public $GPUMemSize;

    /**
     * @var integer <p>Default disk space allocated for the specification.</p><p>Unit: MB</p>
     */
    public $DiskSize;

    /**
     * @var array <p>List of GPU card counts currently supported by the specification.</p><p>If not filled or filled with an empty array, only the GPU card count assigned by default for the specification is supported.</p>
     */
    public $AllowedGPUNums;

    /**
     * @param string $Spec <p>Specification flag. Abandoned. For reference, use the field <code>HardwareSpecId</code>.</p>
     * @param string $HardwareSpecId <p>Unique identification ID of the specification.</p>
     * @param string $Name <p>Specification name.</p>
     * @param float $GPUNum <p>Number of GPU cards assigned by default for the specification.</p>
     * @param float $CPUNum <p>Default number of CPU cores allocated to the specification.</p>
     * @param integer $MemSize <p>Default allocated memory size for the specification.</p><p>In MB.</p>
     * @param integer $GPUMemSize <p>GPU VRAM size assigned by default in the specification.</p><p>Unit: MB</p>
     * @param integer $DiskSize <p>Default disk space allocated for the specification.</p><p>Unit: MB</p>
     * @param array $AllowedGPUNums <p>List of GPU card counts currently supported by the specification.</p><p>If not filled or filled with an empty array, only the GPU card count assigned by default for the specification is supported.</p>
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

        if (array_key_exists("HardwareSpecId",$param) and $param["HardwareSpecId"] !== null) {
            $this->HardwareSpecId = $param["HardwareSpecId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            $this->GPUNum = $param["GPUNum"];
        }

        if (array_key_exists("CPUNum",$param) and $param["CPUNum"] !== null) {
            $this->CPUNum = $param["CPUNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GPUMemSize",$param) and $param["GPUMemSize"] !== null) {
            $this->GPUMemSize = $param["GPUMemSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AllowedGPUNums",$param) and $param["AllowedGPUNums"] !== null) {
            $this->AllowedGPUNums = $param["AllowedGPUNums"];
        }
    }
}
