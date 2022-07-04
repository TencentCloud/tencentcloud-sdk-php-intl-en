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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Auto scaling policy
 *
 * @method integer getMinReplicas() Obtain (Optional) Minimum number of instances
 * @method void setMinReplicas(integer $MinReplicas) Set (Optional) Minimum number of instances
 * @method integer getMaxReplicas() Obtain (Optional) Maximum number of instances
 * @method void setMaxReplicas(integer $MaxReplicas) Set (Optional) Maximum number of instances
 * @method string getMetrics() Obtain Metrics (CPU or memory)
 * @method void setMetrics(string $Metrics) Set Metrics (CPU or memory)
 * @method integer getThreshold() Obtain Threshold (percentage)
 * @method void setThreshold(integer $Threshold) Set Threshold (percentage)
 * @method boolean getEnabled() Obtain Whether it is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether it is enabled
 */
class HorizontalAutoscaler extends AbstractModel
{
    /**
     * @var integer (Optional) Minimum number of instances
     */
    public $MinReplicas;

    /**
     * @var integer (Optional) Maximum number of instances
     */
    public $MaxReplicas;

    /**
     * @var string Metrics (CPU or memory)
     */
    public $Metrics;

    /**
     * @var integer Threshold (percentage)
     */
    public $Threshold;

    /**
     * @var boolean Whether it is enabled
     */
    public $Enabled;

    /**
     * @param integer $MinReplicas (Optional) Minimum number of instances
     * @param integer $MaxReplicas (Optional) Maximum number of instances
     * @param string $Metrics Metrics (CPU or memory)
     * @param integer $Threshold Threshold (percentage)
     * @param boolean $Enabled Whether it is enabled
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
