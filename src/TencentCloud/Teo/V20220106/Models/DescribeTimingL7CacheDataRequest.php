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
 * DescribeTimingL7CacheData request structure.
 *
 * @method string getStartTime() Obtain Start time of the query (client time in RFC 3339)
 * @method void setStartTime(string $StartTime) Set Start time of the query (client time in RFC 3339)
 * @method string getEndTime() Obtain Start time of the query (client time in RFC 3339)
 * @method void setEndTime(string $EndTime) Set Start time of the query (client time in RFC 3339)
 * @method array getMetricNames() Obtain Supported metrics for data query:
`l7Cache_outFlux`: Access traffic
`l7Cache_request`: Access requests
 * @method void setMetricNames(array $MetricNames) Set Supported metrics for data query:
`l7Cache_outFlux`: Access traffic
`l7Cache_request`: Access requests
 * @method string getInterval() Obtain Time interval. Values: {min, 5min, hour, day, week}
 * @method void setInterval(string $Interval) Set Time interval. Values: {min, 5min, hour, day, week}
 * @method array getZoneIds() Obtain List of site IDs
 * @method void setZoneIds(array $ZoneIds) Set List of site IDs
 * @method array getFilters() Obtain Filter condition:
{Key: "cacheType", Value: ["hit"], Operator: "equals"}: Filter by data responded from EdgeOne
{Key: "cacheType", Value: ["miss", "dynamic"], Operator: "equals"}: Filter by data responded from the origin server
 * @method void setFilters(array $Filters) Set Filter condition:
{Key: "cacheType", Value: ["hit"], Operator: "equals"}: Filter by data responded from EdgeOne
{Key: "cacheType", Value: ["miss", "dynamic"], Operator: "equals"}: Filter by data responded from the origin server
 */
class DescribeTimingL7CacheDataRequest extends AbstractModel
{
    /**
     * @var string Start time of the query (client time in RFC 3339)
     */
    public $StartTime;

    /**
     * @var string Start time of the query (client time in RFC 3339)
     */
    public $EndTime;

    /**
     * @var array Supported metrics for data query:
`l7Cache_outFlux`: Access traffic
`l7Cache_request`: Access requests
     */
    public $MetricNames;

    /**
     * @var string Time interval. Values: {min, 5min, hour, day, week}
     */
    public $Interval;

    /**
     * @var array List of site IDs
     */
    public $ZoneIds;

    /**
     * @var array Filter condition:
{Key: "cacheType", Value: ["hit"], Operator: "equals"}: Filter by data responded from EdgeOne
{Key: "cacheType", Value: ["miss", "dynamic"], Operator: "equals"}: Filter by data responded from the origin server
     */
    public $Filters;

    /**
     * @param string $StartTime Start time of the query (client time in RFC 3339)
     * @param string $EndTime Start time of the query (client time in RFC 3339)
     * @param array $MetricNames Supported metrics for data query:
`l7Cache_outFlux`: Access traffic
`l7Cache_request`: Access requests
     * @param string $Interval Time interval. Values: {min, 5min, hour, day, week}
     * @param array $ZoneIds List of site IDs
     * @param array $Filters Filter condition:
{Key: "cacheType", Value: ["hit"], Operator: "equals"}: Filter by data responded from EdgeOne
{Key: "cacheType", Value: ["miss", "dynamic"], Operator: "equals"}: Filter by data responded from the origin server
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

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
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
