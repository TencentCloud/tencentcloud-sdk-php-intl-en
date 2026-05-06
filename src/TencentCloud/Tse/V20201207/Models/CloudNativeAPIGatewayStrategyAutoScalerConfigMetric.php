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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Auto scaling configuration metrics
 *
 * @method string getType() Obtain Metric Type
- Resource
 * @method void setType(string $Type) Set Metric Type
- Resource
 * @method string getResourceName() Obtain Metric resource name
- cpu
- memory
 * @method void setResourceName(string $ResourceName) Set Metric resource name
- cpu
- memory
 * @method string getTargetType() Obtain Metric target type, currently only support percentage Utilization
 * @method void setTargetType(string $TargetType) Set Metric target type, currently only support percentage Utilization
 * @method integer getTargetValue() Obtain Target value of the metric
 * @method void setTargetValue(integer $TargetValue) Set Target value of the metric
 */
class CloudNativeAPIGatewayStrategyAutoScalerConfigMetric extends AbstractModel
{
    /**
     * @var string Metric Type
- Resource
     */
    public $Type;

    /**
     * @var string Metric resource name
- cpu
- memory
     */
    public $ResourceName;

    /**
     * @var string Metric target type, currently only support percentage Utilization
     */
    public $TargetType;

    /**
     * @var integer Target value of the metric
     */
    public $TargetValue;

    /**
     * @param string $Type Metric Type
- Resource
     * @param string $ResourceName Metric resource name
- cpu
- memory
     * @param string $TargetType Metric target type, currently only support percentage Utilization
     * @param integer $TargetValue Target value of the metric
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetValue",$param) and $param["TargetValue"] !== null) {
            $this->TargetValue = $param["TargetValue"];
        }
    }
}
