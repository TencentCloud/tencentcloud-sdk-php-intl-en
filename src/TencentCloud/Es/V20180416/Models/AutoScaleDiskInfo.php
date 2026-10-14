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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Auto capacity expansion parameter for cvm
 *
 * @method string getNodeType() Obtain Node type. Valid values: `hotData`, `warmData`.
 * @method void setNodeType(string $NodeType) Set Node type. Valid values: `hotData`, `warmData`.
 * @method integer getScaleType() Obtain 0: Percentage-based scale-out; 1: Absolute value-based scale-out
 * @method void setScaleType(integer $ScaleType) Set 0: Percentage-based scale-out; 1: Absolute value-based scale-out
 * @method integer getThreshold() Obtain Trigger threshold. Unit: %. For example, 80%.
 * @method void setThreshold(integer $Threshold) Set Trigger threshold. Unit: %. For example, 80%.
 * @method integer getDuration() Obtain Trigger duration in minutes, for example, 60
 * @method void setDuration(integer $Duration) Set Trigger duration in minutes, for example, 60
 * @method integer getPercentSize() Obtain Expansion ratio per time, unit: %, for example, 20%
 * @method void setPercentSize(integer $PercentSize) Set Expansion ratio per time, unit: %, for example, 20%
 * @method integer getFixSize() Obtain Absolute value-based scale-out, in GB, for example, 100 GB
 * @method void setFixSize(integer $FixSize) Set Absolute value-based scale-out, in GB, for example, 100 GB
 * @method integer getMaxSize() Obtain Capacity limit for scale-out, in GB, for example, 500 GB
 * @method void setMaxSize(integer $MaxSize) Set Capacity limit for scale-out, in GB, for example, 500 GB
 */
class AutoScaleDiskInfo extends AbstractModel
{
    /**
     * @var string Node type. Valid values: `hotData`, `warmData`.
     */
    public $NodeType;

    /**
     * @var integer 0: Percentage-based scale-out; 1: Absolute value-based scale-out
     */
    public $ScaleType;

    /**
     * @var integer Trigger threshold. Unit: %. For example, 80%.
     */
    public $Threshold;

    /**
     * @var integer Trigger duration in minutes, for example, 60
     */
    public $Duration;

    /**
     * @var integer Expansion ratio per time, unit: %, for example, 20%
     */
    public $PercentSize;

    /**
     * @var integer Absolute value-based scale-out, in GB, for example, 100 GB
     */
    public $FixSize;

    /**
     * @var integer Capacity limit for scale-out, in GB, for example, 500 GB
     */
    public $MaxSize;

    /**
     * @param string $NodeType Node type. Valid values: `hotData`, `warmData`.
     * @param integer $ScaleType 0: Percentage-based scale-out; 1: Absolute value-based scale-out
     * @param integer $Threshold Trigger threshold. Unit: %. For example, 80%.
     * @param integer $Duration Trigger duration in minutes, for example, 60
     * @param integer $PercentSize Expansion ratio per time, unit: %, for example, 20%
     * @param integer $FixSize Absolute value-based scale-out, in GB, for example, 100 GB
     * @param integer $MaxSize Capacity limit for scale-out, in GB, for example, 500 GB
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ScaleType",$param) and $param["ScaleType"] !== null) {
            $this->ScaleType = $param["ScaleType"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("PercentSize",$param) and $param["PercentSize"] !== null) {
            $this->PercentSize = $param["PercentSize"];
        }

        if (array_key_exists("FixSize",$param) and $param["FixSize"] !== null) {
            $this->FixSize = $param["FixSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
