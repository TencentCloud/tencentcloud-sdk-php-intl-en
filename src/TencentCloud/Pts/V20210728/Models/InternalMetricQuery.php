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
 * General metric query structure.
 *
 * @method string getMetric() Obtain Metric name.
 * @method void setMetric(string $Metric) Set Metric name.
 * @method string getAggregation() Obtain Aggregation Function, optional value including Rate, Count, Avg, P90, P95, P99, Gauge.
 * @method void setAggregation(string $Aggregation) Set Aggregation Function, optional value including Rate, Count, Avg, P90, P95, P99, Gauge.
 * @method array getLabels() Obtain Deprecated, please use 'Filters'.
 * @method void setLabels(array $Labels) Set Deprecated, please use 'Filters'.
 * @method array getFilters() Obtain Use label filter rules to filter metrics. Rules include LabelName, LabelValue, and Operator (0 means equal, 1 means not equal).
 * @method void setFilters(array $Filters) Set Use label filter rules to filter metrics. Rules include LabelName, LabelValue, and Operator (0 means equal, 1 means not equal).
 * @method array getGroupBy() Obtain Metric group.
 * @method void setGroupBy(array $GroupBy) Set Metric group.
 */
class InternalMetricQuery extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $Metric;

    /**
     * @var string Aggregation Function, optional value including Rate, Count, Avg, P90, P95, P99, Gauge.
     */
    public $Aggregation;

    /**
     * @var array Deprecated, please use 'Filters'.
     */
    public $Labels;

    /**
     * @var array Use label filter rules to filter metrics. Rules include LabelName, LabelValue, and Operator (0 means equal, 1 means not equal).
     */
    public $Filters;

    /**
     * @var array Metric group.
     */
    public $GroupBy;

    /**
     * @param string $Metric Metric name.
     * @param string $Aggregation Aggregation Function, optional value including Rate, Count, Avg, P90, P95, P99, Gauge.
     * @param array $Labels Deprecated, please use 'Filters'.
     * @param array $Filters Use label filter rules to filter metrics. Rules include LabelName, LabelValue, and Operator (0 means equal, 1 means not equal).
     * @param array $GroupBy Metric group.
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

        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }
    }
}
