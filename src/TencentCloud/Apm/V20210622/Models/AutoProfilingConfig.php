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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Automated performance analysis configuration
 *
 * @method boolean getCpuProfilingEnable() Obtain Auto CPU profiling task switch
 * @method void setCpuProfilingEnable(boolean $CpuProfilingEnable) Set Auto CPU profiling task switch
 * @method boolean getMemoryProfilingEnable() Obtain Auto memory profiling task switch
 * @method void setMemoryProfilingEnable(boolean $MemoryProfilingEnable) Set Auto memory profiling task switch
 * @method integer getCpuProfilingThreshold() Obtain Auto CPU profiling task threshold
 * @method void setCpuProfilingThreshold(integer $CpuProfilingThreshold) Set Auto CPU profiling task threshold
 * @method integer getMemoryProfilingThreshold() Obtain Automated memory profiling task threshold
 * @method void setMemoryProfilingThreshold(integer $MemoryProfilingThreshold) Set Automated memory profiling task threshold
 * @method integer getCpuProfilingDuration() Obtain CPU auto profiling task duration
 * @method void setCpuProfilingDuration(integer $CpuProfilingDuration) Set CPU auto profiling task duration
 * @method integer getMemoryProfilingDuration() Obtain Memory auto profiling task duration
 * @method void setMemoryProfilingDuration(integer $MemoryProfilingDuration) Set Memory auto profiling task duration
 */
class AutoProfilingConfig extends AbstractModel
{
    /**
     * @var boolean Auto CPU profiling task switch
     */
    public $CpuProfilingEnable;

    /**
     * @var boolean Auto memory profiling task switch
     */
    public $MemoryProfilingEnable;

    /**
     * @var integer Auto CPU profiling task threshold
     */
    public $CpuProfilingThreshold;

    /**
     * @var integer Automated memory profiling task threshold
     */
    public $MemoryProfilingThreshold;

    /**
     * @var integer CPU auto profiling task duration
     */
    public $CpuProfilingDuration;

    /**
     * @var integer Memory auto profiling task duration
     */
    public $MemoryProfilingDuration;

    /**
     * @param boolean $CpuProfilingEnable Auto CPU profiling task switch
     * @param boolean $MemoryProfilingEnable Auto memory profiling task switch
     * @param integer $CpuProfilingThreshold Auto CPU profiling task threshold
     * @param integer $MemoryProfilingThreshold Automated memory profiling task threshold
     * @param integer $CpuProfilingDuration CPU auto profiling task duration
     * @param integer $MemoryProfilingDuration Memory auto profiling task duration
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
        if (array_key_exists("CpuProfilingEnable",$param) and $param["CpuProfilingEnable"] !== null) {
            $this->CpuProfilingEnable = $param["CpuProfilingEnable"];
        }

        if (array_key_exists("MemoryProfilingEnable",$param) and $param["MemoryProfilingEnable"] !== null) {
            $this->MemoryProfilingEnable = $param["MemoryProfilingEnable"];
        }

        if (array_key_exists("CpuProfilingThreshold",$param) and $param["CpuProfilingThreshold"] !== null) {
            $this->CpuProfilingThreshold = $param["CpuProfilingThreshold"];
        }

        if (array_key_exists("MemoryProfilingThreshold",$param) and $param["MemoryProfilingThreshold"] !== null) {
            $this->MemoryProfilingThreshold = $param["MemoryProfilingThreshold"];
        }

        if (array_key_exists("CpuProfilingDuration",$param) and $param["CpuProfilingDuration"] !== null) {
            $this->CpuProfilingDuration = $param["CpuProfilingDuration"];
        }

        if (array_key_exists("MemoryProfilingDuration",$param) and $param["MemoryProfilingDuration"] !== null) {
            $this->MemoryProfilingDuration = $param["MemoryProfilingDuration"];
        }
    }
}
