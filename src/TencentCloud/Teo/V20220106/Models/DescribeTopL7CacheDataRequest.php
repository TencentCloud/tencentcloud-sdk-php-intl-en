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
 * DescribeTopL7CacheData request structure.
 *
 * @method string getStartTime() Obtain Start time of the query (client time in RFC 3339)
 * @method void setStartTime(string $StartTime) Set Start time of the query (client time in RFC 3339)
 * @method string getEndTime() Obtain End time of the query (client time in RFC 3339)
 * @method void setEndTime(string $EndTime) Set End time of the query (client time in RFC 3339)
 * @method string getMetricName() Obtain Metric for time-series data query
 * @method void setMetricName(string $MetricName) Set Metric for time-series data query
 * @method integer getLimit() Obtain Specifies the number of data records to return. If `0` is passed in, all data is returned.
 * @method void setLimit(integer $Limit) Set Specifies the number of data records to return. If `0` is passed in, all data is returned.
 * @method string getInterval() Obtain Time interval. Values: {min, 5min, hour, day, week}. This field is optional.
 * @method void setInterval(string $Interval) Set Time interval. Values: {min, 5min, hour, day, week}. This field is optional.
 * @method array getZoneIds() Obtain Array of site IDs
 * @method void setZoneIds(array $ZoneIds) Set Array of site IDs
 * @method array getFilters() Obtain Filter condition
 * @method void setFilters(array $Filters) Set Filter condition
 */
class DescribeTopL7CacheDataRequest extends AbstractModel
{
    /**
     * @var string Start time of the query (client time in RFC 3339)
     */
    public $StartTime;

    /**
     * @var string End time of the query (client time in RFC 3339)
     */
    public $EndTime;

    /**
     * @var string Metric for time-series data query
     */
    public $MetricName;

    /**
     * @var integer Specifies the number of data records to return. If `0` is passed in, all data is returned.
     */
    public $Limit;

    /**
     * @var string Time interval. Values: {min, 5min, hour, day, week}. This field is optional.
     */
    public $Interval;

    /**
     * @var array Array of site IDs
     */
    public $ZoneIds;

    /**
     * @var array Filter condition
     */
    public $Filters;

    /**
     * @param string $StartTime Start time of the query (client time in RFC 3339)
     * @param string $EndTime End time of the query (client time in RFC 3339)
     * @param string $MetricName Metric for time-series data query
     * @param integer $Limit Specifies the number of data records to return. If `0` is passed in, all data is returned.
     * @param string $Interval Time interval. Values: {min, 5min, hour, day, week}. This field is optional.
     * @param array $ZoneIds Array of site IDs
     * @param array $Filters Filter condition
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
