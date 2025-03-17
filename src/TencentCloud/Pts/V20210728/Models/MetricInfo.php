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
 * Metric structure.
 *
 * @method string getMetric() Obtain Metric name in backend.
 * @method void setMetric(string $Metric) Set Metric name in backend.
 * @method string getAlias() Obtain Metric name displayed in frontend.
 * @method void setAlias(string $Alias) Set Metric name displayed in frontend.
 * @method string getDescription() Obtain Metric description.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDescription(string $Description) Set Metric description.

Note: This field may return null, indicating that no valid value is found.
 * @method string getMetricType() Obtain Metric type.
 * @method void setMetricType(string $MetricType) Set Metric type.
 * @method string getUnit() Obtain Default metric unit.
 * @method void setUnit(string $Unit) Set Default metric unit.
 * @method array getAggregations() Obtain Aggregation functions supported by the metric.
 * @method void setAggregations(array $Aggregations) Set Aggregation functions supported by the metric.
 * @method boolean getInnerMetric() Obtain Whether it is an internal metric, internal metrics cannot be freely selected by users on the frontend.
 * @method void setInnerMetric(boolean $InnerMetric) Set Whether it is an internal metric, internal metrics cannot be freely selected by users on the frontend.
 */
class MetricInfo extends AbstractModel
{
    /**
     * @var string Metric name in backend.
     */
    public $Metric;

    /**
     * @var string Metric name displayed in frontend.
     */
    public $Alias;

    /**
     * @var string Metric description.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Description;

    /**
     * @var string Metric type.
     */
    public $MetricType;

    /**
     * @var string Default metric unit.
     */
    public $Unit;

    /**
     * @var array Aggregation functions supported by the metric.
     */
    public $Aggregations;

    /**
     * @var boolean Whether it is an internal metric, internal metrics cannot be freely selected by users on the frontend.
     */
    public $InnerMetric;

    /**
     * @param string $Metric Metric name in backend.
     * @param string $Alias Metric name displayed in frontend.
     * @param string $Description Metric description.

Note: This field may return null, indicating that no valid value is found.
     * @param string $MetricType Metric type.
     * @param string $Unit Default metric unit.
     * @param array $Aggregations Aggregation functions supported by the metric.
     * @param boolean $InnerMetric Whether it is an internal metric, internal metrics cannot be freely selected by users on the frontend.
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Aggregations",$param) and $param["Aggregations"] !== null) {
            $this->Aggregations = [];
            foreach ($param["Aggregations"] as $key => $value){
                $obj = new AggregationLegend();
                $obj->deserialize($value);
                array_push($this->Aggregations, $obj);
            }
        }

        if (array_key_exists("InnerMetric",$param) and $param["InnerMetric"] !== null) {
            $this->InnerMetric = $param["InnerMetric"];
        }
    }
}
