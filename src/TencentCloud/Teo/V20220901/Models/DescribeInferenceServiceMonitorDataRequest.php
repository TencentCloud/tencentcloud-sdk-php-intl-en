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
 * DescribeInferenceServiceMonitorData request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method array getServiceIds() Obtain <p>ID of the inference service. You can import up to 10 inference service IDs.</p>
 * @method void setServiceIds(array $ServiceIds) Set <p>ID of the inference service. You can import up to 10 inference service IDs.</p>
 * @method array getMetricNames() Obtain <p>Metric list, supports up to 10 metrics. Valid values: <li>cpu_usage_average: Average CPU utilization, unit: %, metric type: Float;</li><li>cpu_usage_max: Maximum CPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_average: Average GPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_max: Maximum GPU utilization, unit: %, metric type: Float;</li><li>instance_num_average: Average number of instances, unit: unit, metric type: Float;</li><li>instance_num_max: Maximum number of instances, unit: unit, metric type: Float;</li><li>gpu_memory_usage_max: Maximum GPU VRAM utilization, unit: %, metric type: Float;</li><li>memory_usage_average: Average memory utilization, unit: %, metric type: Float;</li><li>memory_usage_max: Maximum memory utilization, unit: %, metric type: Float;</li></p>
 * @method void setMetricNames(array $MetricNames) Set <p>Metric list, supports up to 10 metrics. Valid values: <li>cpu_usage_average: Average CPU utilization, unit: %, metric type: Float;</li><li>cpu_usage_max: Maximum CPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_average: Average GPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_max: Maximum GPU utilization, unit: %, metric type: Float;</li><li>instance_num_average: Average number of instances, unit: unit, metric type: Float;</li><li>instance_num_max: Maximum number of instances, unit: unit, metric type: Float;</li><li>gpu_memory_usage_max: Maximum GPU VRAM utilization, unit: %, metric type: Float;</li><li>memory_usage_average: Average memory utilization, unit: %, metric type: Float;</li><li>memory_usage_max: Maximum memory utilization, unit: %, metric type: Float;</li></p>
 * @method string getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time.</p>
 * @method string getEndTime() Obtain <p>End time. The query time range (<code>EndTime - StartTime</code>) must be less than or equal to 30 days.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time. The query time range (<code>EndTime - StartTime</code>) must be less than or equal to 30 days.</p>
 * @method string getInterval() Obtain <p>Query time granularity. Valid values:</p><li>min: 1 minute, supports queries within a 1-day range.</li><li>5min: 5 minutes, supports queries within a 7-day range.</li><li>hour: 1 hour, supports queries within a 30-day range.</li><li>day: 1 day, supports queries within a 30-day range.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
 * @method void setInterval(string $Interval) Set <p>Query time granularity. Valid values:</p><li>min: 1 minute, supports queries within a 1-day range.</li><li>5min: 5 minutes, supports queries within a 7-day range.</li><li>hour: 1 hour, supports queries within a 30-day range.</li><li>day: 1 day, supports queries within a 30-day range.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
 */
class DescribeInferenceServiceMonitorDataRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var array <p>ID of the inference service. You can import up to 10 inference service IDs.</p>
     */
    public $ServiceIds;

    /**
     * @var array <p>Metric list, supports up to 10 metrics. Valid values: <li>cpu_usage_average: Average CPU utilization, unit: %, metric type: Float;</li><li>cpu_usage_max: Maximum CPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_average: Average GPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_max: Maximum GPU utilization, unit: %, metric type: Float;</li><li>instance_num_average: Average number of instances, unit: unit, metric type: Float;</li><li>instance_num_max: Maximum number of instances, unit: unit, metric type: Float;</li><li>gpu_memory_usage_max: Maximum GPU VRAM utilization, unit: %, metric type: Float;</li><li>memory_usage_average: Average memory utilization, unit: %, metric type: Float;</li><li>memory_usage_max: Maximum memory utilization, unit: %, metric type: Float;</li></p>
     */
    public $MetricNames;

    /**
     * @var string <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time. The query time range (<code>EndTime - StartTime</code>) must be less than or equal to 30 days.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Query time granularity. Valid values:</p><li>min: 1 minute, supports queries within a 1-day range.</li><li>5min: 5 minutes, supports queries within a 7-day range.</li><li>hour: 1 hour, supports queries within a 30-day range.</li><li>day: 1 day, supports queries within a 30-day range.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
     */
    public $Interval;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param array $ServiceIds <p>ID of the inference service. You can import up to 10 inference service IDs.</p>
     * @param array $MetricNames <p>Metric list, supports up to 10 metrics. Valid values: <li>cpu_usage_average: Average CPU utilization, unit: %, metric type: Float;</li><li>cpu_usage_max: Maximum CPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_average: Average GPU utilization, unit: %, metric type: Float;</li><li>gpu_usage_max: Maximum GPU utilization, unit: %, metric type: Float;</li><li>instance_num_average: Average number of instances, unit: unit, metric type: Float;</li><li>instance_num_max: Maximum number of instances, unit: unit, metric type: Float;</li><li>gpu_memory_usage_max: Maximum GPU VRAM utilization, unit: %, metric type: Float;</li><li>memory_usage_average: Average memory utilization, unit: %, metric type: Float;</li><li>memory_usage_max: Maximum memory utilization, unit: %, metric type: Float;</li></p>
     * @param string $StartTime <p>Start time.</p>
     * @param string $EndTime <p>End time. The query time range (<code>EndTime - StartTime</code>) must be less than or equal to 30 days.</p>
     * @param string $Interval <p>Query time granularity. Valid values:</p><li>min: 1 minute, supports queries within a 1-day range.</li><li>5min: 5 minutes, supports queries within a 7-day range.</li><li>hour: 1 hour, supports queries within a 30-day range.</li><li>day: 1 day, supports queries within a 30-day range.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceIds",$param) and $param["ServiceIds"] !== null) {
            $this->ServiceIds = $param["ServiceIds"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
