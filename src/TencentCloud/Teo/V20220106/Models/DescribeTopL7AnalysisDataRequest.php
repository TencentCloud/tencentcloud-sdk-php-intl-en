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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopL7AnalysisData request structure.
 *
 * @method string getStartTime() Obtain Client time in RFC 3339 format
 * @method void setStartTime(string $StartTime) Set Client time in RFC 3339 format
 * @method string getEndTime() Obtain Client time in RFC 3339 format
 * @method void setEndTime(string $EndTime) Set Client time in RFC 3339 format
 * @method string getMetricName() Obtain Time series-type access traffic metric
 * @method void setMetricName(string $MetricName) Set Time series-type access traffic metric
 * @method integer getLimit() Obtain Top N. 0 indicates to return the full data.
 * @method void setLimit(integer $Limit) Set Top N. 0 indicates to return the full data.
 * @method string getInterval() Obtain Time interval. Valid values: {min, 5min, hour, day, week}
 * @method void setInterval(string $Interval) Set Time interval. Valid values: {min, 5min, hour, day, week}
 * @method array getZoneIds() Obtain Array of `ZoneId` values
 * @method void setZoneIds(array $ZoneIds) Set Array of `ZoneId` values
 * @method array getFilters() Obtain Filter
 * @method void setFilters(array $Filters) Set Filter
 */
class DescribeTopL7AnalysisDataRequest extends AbstractModel
{
    /**
     * @var string Client time in RFC 3339 format
     */
    public $StartTime;

    /**
     * @var string Client time in RFC 3339 format
     */
    public $EndTime;

    /**
     * @var string Time series-type access traffic metric
     */
    public $MetricName;

    /**
     * @var integer Top N. 0 indicates to return the full data.
     */
    public $Limit;

    /**
     * @var string Time interval. Valid values: {min, 5min, hour, day, week}
     */
    public $Interval;

    /**
     * @var array Array of `ZoneId` values
     */
    public $ZoneIds;

    /**
     * @var array Filter
     */
    public $Filters;

    /**
     * @param string $StartTime Client time in RFC 3339 format
     * @param string $EndTime Client time in RFC 3339 format
     * @param string $MetricName Time series-type access traffic metric
     * @param integer $Limit Top N. 0 indicates to return the full data.
     * @param string $Interval Time interval. Valid values: {min, 5min, hour, day, week}
     * @param array $ZoneIds Array of `ZoneId` values
     * @param array $Filters Filter
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
