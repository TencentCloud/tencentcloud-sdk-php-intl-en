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
 * DescribeSampleQuery request structure.
 *
 * @method string getJobId() Obtain Job ID.
 * @method void setJobId(string $JobId) Set Job ID.
 * @method string getScenarioId() Obtain Scenario ID.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.
 * @method string getMetric() Obtain Metric name. For the value range, refer to all metric names returned by the DescribeMetricLabelWithValues API.
 * @method void setMetric(string $Metric) Set Metric name. For the value range, refer to all metric names returned by the DescribeMetricLabelWithValues API.
 * @method string getAggregation() Obtain Aggregation function. Range of values: Rate, Count, Avg, P90, P95, P99, Gauge.
 * @method void setAggregation(string $Aggregation) Set Aggregation function. Range of values: Rate, Count, Avg, P90, P95, P99, Gauge.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method array getLabels() Obtain Label filtering condition. For supported labels, refer to all metrics and labels returned by the DescribeMetricLabelWithValues API.
 * @method void setLabels(array $Labels) Set Label filtering condition. For supported labels, refer to all metrics and labels returned by the DescribeMetricLabelWithValues API.
 */
class DescribeSampleQueryRequest extends AbstractModel
{
    /**
     * @var string Job ID.
     */
    public $JobId;

    /**
     * @var string Scenario ID.
     */
    public $ScenarioId;

    /**
     * @var string Metric name. For the value range, refer to all metric names returned by the DescribeMetricLabelWithValues API.
     */
    public $Metric;

    /**
     * @var string Aggregation function. Range of values: Rate, Count, Avg, P90, P95, P99, Gauge.
     */
    public $Aggregation;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var array Label filtering condition. For supported labels, refer to all metrics and labels returned by the DescribeMetricLabelWithValues API.
     */
    public $Labels;

    /**
     * @param string $JobId Job ID.
     * @param string $ScenarioId Scenario ID.
     * @param string $Metric Metric name. For the value range, refer to all metric names returned by the DescribeMetricLabelWithValues API.
     * @param string $Aggregation Aggregation function. Range of values: Rate, Count, Avg, P90, P95, P99, Gauge.
     * @param string $ProjectId Project ID.
     * @param array $Labels Label filtering condition. For supported labels, refer to all metrics and labels returned by the DescribeMetricLabelWithValues API.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
