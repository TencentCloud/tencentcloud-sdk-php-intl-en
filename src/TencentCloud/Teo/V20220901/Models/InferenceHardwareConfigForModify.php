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
 * Parameter modification for the configured resource hardware of the inference service.
 *
 * @method float getCPUNum() Obtain <p>CPU cores per instance allocation for the inference service. Currently only support integer values.</p><p>If left blank, no modification will be made.</p>
 * @method void setCPUNum(float $CPUNum) Set <p>CPU cores per instance allocation for the inference service. Currently only support integer values.</p><p>If left blank, no modification will be made.</p>
 * @method integer getMemSize() Obtain <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
 * @method void setMemSize(integer $MemSize) Set <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
 * @method integer getDiskSize() Obtain <p>Temporary disk space allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Temporary disk space allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
 */
class InferenceHardwareConfigForModify extends AbstractModel
{
    /**
     * @var float <p>CPU cores per instance allocation for the inference service. Currently only support integer values.</p><p>If left blank, no modification will be made.</p>
     */
    public $CPUNum;

    /**
     * @var integer <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
     */
    public $MemSize;

    /**
     * @var integer <p>Temporary disk space allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
     */
    public $DiskSize;

    /**
     * @param float $CPUNum <p>CPU cores per instance allocation for the inference service. Currently only support integer values.</p><p>If left blank, no modification will be made.</p>
     * @param integer $MemSize <p>Memory size allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
     * @param integer $DiskSize <p>Temporary disk space allocated to a single instance of the inference service.</p><p>Unit: MB</p><p>If left blank, no modification is made; if filled, it must be an integral multiple of <code>1024</code>.</p>
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
