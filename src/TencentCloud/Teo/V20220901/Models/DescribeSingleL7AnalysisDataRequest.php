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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSingleL7AnalysisData request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time.
 * @method void setEndTime(string $EndTime) Set The end time.
 * @method array getMetricNames() Obtain The query metric. Values:
<li>`l7Flow_singleIpRequest`: Number of requests from a single IP.</li>
 * @method void setMetricNames(array $MetricNames) Set The query metric. Values:
<li>`l7Flow_singleIpRequest`: Number of requests from a single IP.</li>
 * @method array getZoneIds() Obtain List of sites to be queried. All sites will be selected if this field is not specified.
 * @method void setZoneIds(array $ZoneIds) Set List of sites to be queried. All sites will be selected if this field is not specified.
 * @method array getFilters() Obtain Filter conditions. See below for details: 
<li>`country`:<br>   Filter by the <strong>country/region code</strong>. <a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a> country codes are used.<br>   Type: String<br>   Required: No</li>
<li>`domain`<br>   Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br>   Type: String<br>   Required: No</li>
<li>`protocol`:<br>   Filter by the <strong>HTTP protocol</strong><br>   Type: String<br>   Required: No<br>   Values:<br>   `HTTP/1.0`: HTTP 1.0<br>   `HTTP/1.1`: HTTP 1.1<br>   `HTTP/2.0`: HTTP 2.0<br>   `HTTP/3.0`: HTTP 3.0<br>   `WebSocket`: WebSocket</li>
<li>`tagKey`:<br>   Filter by the <strong>tag key</strong><br>   Type: String<br>   Required: No</li>
<li>`tagValue`<br>   Filter by the <strong>tag value</strong><br>   Type: String<br>   Required: No</li>
 * @method void setFilters(array $Filters) Set Filter conditions. See below for details: 
<li>`country`:<br>   Filter by the <strong>country/region code</strong>. <a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a> country codes are used.<br>   Type: String<br>   Required: No</li>
<li>`domain`<br>   Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br>   Type: String<br>   Required: No</li>
<li>`protocol`:<br>   Filter by the <strong>HTTP protocol</strong><br>   Type: String<br>   Required: No<br>   Values:<br>   `HTTP/1.0`: HTTP 1.0<br>   `HTTP/1.1`: HTTP 1.1<br>   `HTTP/2.0`: HTTP 2.0<br>   `HTTP/3.0`: HTTP 3.0<br>   `WebSocket`: WebSocket</li>
<li>`tagKey`:<br>   Filter by the <strong>tag key</strong><br>   Type: String<br>   Required: No</li>
<li>`tagValue`<br>   Filter by the <strong>tag value</strong><br>   Type: String<br>   Required: No</li>
 * @method string getInterval() Obtain The query time granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
 * @method void setInterval(string $Interval) Set The query time granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
 * @method string getArea() Obtain Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 * @method void setArea(string $Area) Set Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 */
class DescribeSingleL7AnalysisDataRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string The end time.
     */
    public $EndTime;

    /**
     * @var array The query metric. Values:
<li>`l7Flow_singleIpRequest`: Number of requests from a single IP.</li>
     */
    public $MetricNames;

    /**
     * @var array List of sites to be queried. All sites will be selected if this field is not specified.
     */
    public $ZoneIds;

    /**
     * @var array Filter conditions. See below for details: 
<li>`country`:<br>   Filter by the <strong>country/region code</strong>. <a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a> country codes are used.<br>   Type: String<br>   Required: No</li>
<li>`domain`<br>   Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br>   Type: String<br>   Required: No</li>
<li>`protocol`:<br>   Filter by the <strong>HTTP protocol</strong><br>   Type: String<br>   Required: No<br>   Values:<br>   `HTTP/1.0`: HTTP 1.0<br>   `HTTP/1.1`: HTTP 1.1<br>   `HTTP/2.0`: HTTP 2.0<br>   `HTTP/3.0`: HTTP 3.0<br>   `WebSocket`: WebSocket</li>
<li>`tagKey`:<br>   Filter by the <strong>tag key</strong><br>   Type: String<br>   Required: No</li>
<li>`tagValue`<br>   Filter by the <strong>tag value</strong><br>   Type: String<br>   Required: No</li>
     */
    public $Filters;

    /**
     * @var string The query time granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
     */
    public $Interval;

    /**
     * @var string Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime The end time.
     * @param array $MetricNames The query metric. Values:
<li>`l7Flow_singleIpRequest`: Number of requests from a single IP.</li>
     * @param array $ZoneIds List of sites to be queried. All sites will be selected if this field is not specified.
     * @param array $Filters Filter conditions. See below for details: 
<li>`country`:<br>   Filter by the <strong>country/region code</strong>. <a href="https://zh.wikipedia.org/wiki/ISO_3166-1">ISO 3166</a> country codes are used.<br>   Type: String<br>   Required: No</li>
<li>`domain`<br>   Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br>   Type: String<br>   Required: No</li>
<li>`protocol`:<br>   Filter by the <strong>HTTP protocol</strong><br>   Type: String<br>   Required: No<br>   Values:<br>   `HTTP/1.0`: HTTP 1.0<br>   `HTTP/1.1`: HTTP 1.1<br>   `HTTP/2.0`: HTTP 2.0<br>   `HTTP/3.0`: HTTP 3.0<br>   `WebSocket`: WebSocket</li>
<li>`tagKey`:<br>   Filter by the <strong>tag key</strong><br>   Type: String<br>   Required: No</li>
<li>`tagValue`<br>   Filter by the <strong>tag value</strong><br>   Type: String<br>   Required: No</li>
     * @param string $Interval The query time granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
     * @param string $Area Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
