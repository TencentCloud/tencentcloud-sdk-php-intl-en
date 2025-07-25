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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogTimeSeriesStats response structure.
 *
 * @method integer getPeriod() Obtain Time range in seconds in histogram.
 * @method void setPeriod(integer $Period) Set Time range in seconds in histogram.
 * @method array getTimeSeries() Obtain Number of slow logs in the specified time range.
 * @method void setTimeSeries(array $TimeSeries) Set Number of slow logs in the specified time range.
 * @method MonitorMetricSeriesData getSeriesData() Obtain Instance CPU utilization monitoring data in the specified time range.
 * @method void setSeriesData(MonitorMetricSeriesData $SeriesData) Set Instance CPU utilization monitoring data in the specified time range.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSlowLogTimeSeriesStatsResponse extends AbstractModel
{
    /**
     * @var integer Time range in seconds in histogram.
     */
    public $Period;

    /**
     * @var array Number of slow logs in the specified time range.
     */
    public $TimeSeries;

    /**
     * @var MonitorMetricSeriesData Instance CPU utilization monitoring data in the specified time range.
     */
    public $SeriesData;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Period Time range in seconds in histogram.
     * @param array $TimeSeries Number of slow logs in the specified time range.
     * @param MonitorMetricSeriesData $SeriesData Instance CPU utilization monitoring data in the specified time range.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TimeSeries",$param) and $param["TimeSeries"] !== null) {
            $this->TimeSeries = [];
            foreach ($param["TimeSeries"] as $key => $value){
                $obj = new TimeSlice();
                $obj->deserialize($value);
                array_push($this->TimeSeries, $obj);
            }
        }

        if (array_key_exists("SeriesData",$param) and $param["SeriesData"] !== null) {
            $this->SeriesData = new MonitorMetricSeriesData();
            $this->SeriesData->deserialize($param["SeriesData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
