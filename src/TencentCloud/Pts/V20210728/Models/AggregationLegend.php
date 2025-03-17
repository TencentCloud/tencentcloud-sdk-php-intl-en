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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aggregation function
 *
 * @method string getAggregation() Obtain Aggregation functions supported by the metric.
 * @method void setAggregation(string $Aggregation) Set Aggregation functions supported by the metric.
 * @method string getLegend() Obtain Description after the aggregation function is applied to the metric.
 * @method void setLegend(string $Legend) Set Description after the aggregation function is applied to the metric.
 * @method string getUnit() Obtain Metric unit after aggregation.
 * @method void setUnit(string $Unit) Set Metric unit after aggregation.
 */
class AggregationLegend extends AbstractModel
{
    /**
     * @var string Aggregation functions supported by the metric.
     */
    public $Aggregation;

    /**
     * @var string Description after the aggregation function is applied to the metric.
     */
    public $Legend;

    /**
     * @var string Metric unit after aggregation.
     */
    public $Unit;

    /**
     * @param string $Aggregation Aggregation functions supported by the metric.
     * @param string $Legend Description after the aggregation function is applied to the metric.
     * @param string $Unit Metric unit after aggregation.
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
        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("Legend",$param) and $param["Legend"] !== null) {
            $this->Legend = $param["Legend"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
