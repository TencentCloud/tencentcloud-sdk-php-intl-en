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
 * Hardware configuration for the inference service.
 *
 * @method float getGPUNum() Obtain <p>Number of GPU cards assigned to each inference service instance. Currently, supports integers only, and must be an available value in <code>AllowedGPUNums</code> of the specification corresponding to <code>HardwareSpecId</code>.</p><p>If not filled, the default <code>GPUNum</code> value of the selected <code>HardwareSpecId</code> specification is used.</p>
 * @method void setGPUNum(float $GPUNum) Set <p>Number of GPU cards assigned to each inference service instance. Currently, supports integers only, and must be an available value in <code>AllowedGPUNums</code> of the specification corresponding to <code>HardwareSpecId</code>.</p><p>If not filled, the default <code>GPUNum</code> value of the selected <code>HardwareSpecId</code> specification is used.</p>
 * @method float getCPUNum() Obtain <p>Number of CPU cores allocated to each inference service instance. Currently only supports integer values.</p><p>If left blank, use the default <code>CPUNum</code> value of the selected <code>HardwareSpecId</code> specification.</p>
 * @method void setCPUNum(float $CPUNum) Set <p>Number of CPU cores allocated to each inference service instance. Currently only supports integer values.</p><p>If left blank, use the default <code>CPUNum</code> value of the selected <code>HardwareSpecId</code> specification.</p>
 * @method integer getMemSize() Obtain <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, use the default <code>MemSize</code> value of the selected <code>HardwareSpecId</code>; if filled, it must be a multiple of <code>1024</code>.</p>
 * @method void setMemSize(integer $MemSize) Set <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, use the default <code>MemSize</code> value of the selected <code>HardwareSpecId</code>; if filled, it must be a multiple of <code>1024</code>.</p>
 * @method integer getDiskSize() Obtain <p>Temporary disk capacity allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If not filled, the default <code>DiskSize</code> value of the specification corresponding to the selected <code>HardwareSpecId</code> is used; if filled, it must be an integral multiple of <code>1024</code>.</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Temporary disk capacity allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If not filled, the default <code>DiskSize</code> value of the specification corresponding to the selected <code>HardwareSpecId</code> is used; if filled, it must be an integral multiple of <code>1024</code>.</p>
 */
class InferenceHardwareConfig extends AbstractModel
{
    /**
     * @var float <p>Number of GPU cards assigned to each inference service instance. Currently, supports integers only, and must be an available value in <code>AllowedGPUNums</code> of the specification corresponding to <code>HardwareSpecId</code>.</p><p>If not filled, the default <code>GPUNum</code> value of the selected <code>HardwareSpecId</code> specification is used.</p>
     */
    public $GPUNum;

    /**
     * @var float <p>Number of CPU cores allocated to each inference service instance. Currently only supports integer values.</p><p>If left blank, use the default <code>CPUNum</code> value of the selected <code>HardwareSpecId</code> specification.</p>
     */
    public $CPUNum;

    /**
     * @var integer <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, use the default <code>MemSize</code> value of the selected <code>HardwareSpecId</code>; if filled, it must be a multiple of <code>1024</code>.</p>
     */
    public $MemSize;

    /**
     * @var integer <p>Temporary disk capacity allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If not filled, the default <code>DiskSize</code> value of the specification corresponding to the selected <code>HardwareSpecId</code> is used; if filled, it must be an integral multiple of <code>1024</code>.</p>
     */
    public $DiskSize;

    /**
     * @param float $GPUNum <p>Number of GPU cards assigned to each inference service instance. Currently, supports integers only, and must be an available value in <code>AllowedGPUNums</code> of the specification corresponding to <code>HardwareSpecId</code>.</p><p>If not filled, the default <code>GPUNum</code> value of the selected <code>HardwareSpecId</code> specification is used.</p>
     * @param float $CPUNum <p>Number of CPU cores allocated to each inference service instance. Currently only supports integer values.</p><p>If left blank, use the default <code>CPUNum</code> value of the selected <code>HardwareSpecId</code> specification.</p>
     * @param integer $MemSize <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, use the default <code>MemSize</code> value of the selected <code>HardwareSpecId</code>; if filled, it must be a multiple of <code>1024</code>.</p>
     * @param integer $DiskSize <p>Temporary disk capacity allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If not filled, the default <code>DiskSize</code> value of the specification corresponding to the selected <code>HardwareSpecId</code> is used; if filled, it must be an integral multiple of <code>1024</code>.</p>
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
        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            $this->GPUNum = $param["GPUNum"];
        }

        if (array_key_exists("CPUNum",$param) and $param["CPUNum"] !== null) {
            $this->CPUNum = $param["CPUNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
