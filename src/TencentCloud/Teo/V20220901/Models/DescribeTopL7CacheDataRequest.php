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
 * DescribeTopL7CacheData request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time.
 * @method void setEndTime(string $EndTime) Set The end time.
 * @method string getMetricName() Obtain The query metric. Values:
<li>l7Cache_outFlux_domain: Host/Domain name;</li>
<li>l7Cache_outFlux_url: URL address;</li>
<li>l7Cache_outFlux_resourceType: Resource type;</li>
<li>l7Cache_outFlux_statusCode: Status code.</li>
 * @method void setMetricName(string $MetricName) Set The query metric. Values:
<li>l7Cache_outFlux_domain: Host/Domain name;</li>
<li>l7Cache_outFlux_url: URL address;</li>
<li>l7Cache_outFlux_resourceType: Resource type;</li>
<li>l7Cache_outFlux_statusCode: Status code.</li>
 * @method array getZoneIds() Obtain ZoneId set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set ZoneId set. This parameter is required.
 * @method integer getLimit() Obtain The number of data entries to be queried. The maximum value is 1000. If it is not specified, the value 10 is used by default, indicating that the top 10 data entries.
 * @method void setLimit(integer $Limit) Set The number of data entries to be queried. The maximum value is 1000. If it is not specified, the value 10 is used by default, indicating that the top 10 data entries.
 * @method array getFilters() Obtain Filter conditions. See below for details: 
<li>`domain`<br> Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br> Type: String<br> Required: No</li>
<li>`url`<br> Filter by the <strong>URL</strong>, such as `/content`. The query period cannot exceed 30 days. <br> Type: String<br> Required: No</li>
<li>`resourceType`<br> Filter by the <strong>resource file type</strong>, such as `jpg`, `png`. The query period cannot exceed 30 days.<br>Type: String<br> Required: No</li>
<li>cacheType<br>Filter by the <strong>cache hit result</strong>.<br>Type: String<br> Required: No<br> Values: <br> `hit`: Cache hit; <br> `dynamic`: Resource non-cacheable; <br> `miss`: Cache miss</li>
<li>`statusCode`<br> Filter by the <strong> status code</strong>. The query period  cannot exceed 30 days. <br> Type: String<br> Required: No<br> Values: <br> `1XX`: All 1xx status codes;<br> `100`: 100 status code;<br> `101`: 101 status code;<br> `102`: 102 status code;<br> `2XX`: All 2xx status codes;<br> `200`: 200 status code;<br> `201`: 201 status code;<br> `202`: 202 status code;<br> `203`: 203 status code;<br> `204`: 204 status code;<br> `205`: 205 status code;<br> `206`: 206 status code;<br> `207`: 207 status code;<br> `3XX`: All 3xx status codes;<br> `300`: 300 status code;<br> `301`: 301 status code;<br> `302`: 302 status code;<br> `303`: 303 status code;<br> `304`: 304 status code;<br> `305`: 305 status code;<br> `307`: 307 status code;<br> `4XX`: All 4xx status codes;<br> `400`: 400 status code;<br> `401`: 401 status code;<br> `402`: 402 status code;<br> `403`: 403 status code;<br> `404`: 404 status code;<br> `405`: 405 status code;<br> `406`: 406 status code;<br> `407`: 407 status code;<br> `408`: 408 status code;<br> `409`: 409 status code;<br> `410`: 410 status code;<br> `411`: 411 status code;<br> `412`: 412 status code;<br> `412`: 413 status code;<br> `414`: 414 status code;<br> `415`: 415 status code;<br> `416`: 416 status code;<br> `417`: 417 status code;<br>`422`: 422 status code;<br> `423`: 423 status code;<br> `424`: 424 status code;<br> `426`: 426 status code;<br> `451`: 451 status code;<br> `5XX`: All 5xx status codes;<br> `500`: 500 status code;<br> `501`: 501 status code;<br> `502`: 502 status code;<br> `503`: 503 status code;<br> `504`: 504 status code;<br> `505`: 505 status code;<br> `506`: 506 status code;<br> `507`: 507 status code;<br> `510`: 510 status code;<br> `514`: 514 status code;<br> `544`: 544 status code.</li>
<li>`tagKey`:<br> Filter by the <strong>tag key</strong><br> Type: String<br> Required: No</li>
<li>`tagValue`<br> Filter by the <strong>tag value</strong><br> Type: String<br> Required: No</li>
 * @method void setFilters(array $Filters) Set Filter conditions. See below for details: 
<li>`domain`<br> Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br> Type: String<br> Required: No</li>
<li>`url`<br> Filter by the <strong>URL</strong>, such as `/content`. The query period cannot exceed 30 days. <br> Type: String<br> Required: No</li>
<li>`resourceType`<br> Filter by the <strong>resource file type</strong>, such as `jpg`, `png`. The query period cannot exceed 30 days.<br>Type: String<br> Required: No</li>
<li>cacheType<br>Filter by the <strong>cache hit result</strong>.<br>Type: String<br> Required: No<br> Values: <br> `hit`: Cache hit; <br> `dynamic`: Resource non-cacheable; <br> `miss`: Cache miss</li>
<li>`statusCode`<br> Filter by the <strong> status code</strong>. The query period  cannot exceed 30 days. <br> Type: String<br> Required: No<br> Values: <br> `1XX`: All 1xx status codes;<br> `100`: 100 status code;<br> `101`: 101 status code;<br> `102`: 102 status code;<br> `2XX`: All 2xx status codes;<br> `200`: 200 status code;<br> `201`: 201 status code;<br> `202`: 202 status code;<br> `203`: 203 status code;<br> `204`: 204 status code;<br> `205`: 205 status code;<br> `206`: 206 status code;<br> `207`: 207 status code;<br> `3XX`: All 3xx status codes;<br> `300`: 300 status code;<br> `301`: 301 status code;<br> `302`: 302 status code;<br> `303`: 303 status code;<br> `304`: 304 status code;<br> `305`: 305 status code;<br> `307`: 307 status code;<br> `4XX`: All 4xx status codes;<br> `400`: 400 status code;<br> `401`: 401 status code;<br> `402`: 402 status code;<br> `403`: 403 status code;<br> `404`: 404 status code;<br> `405`: 405 status code;<br> `406`: 406 status code;<br> `407`: 407 status code;<br> `408`: 408 status code;<br> `409`: 409 status code;<br> `410`: 410 status code;<br> `411`: 411 status code;<br> `412`: 412 status code;<br> `412`: 413 status code;<br> `414`: 414 status code;<br> `415`: 415 status code;<br> `416`: 416 status code;<br> `417`: 417 status code;<br>`422`: 422 status code;<br> `423`: 423 status code;<br> `424`: 424 status code;<br> `426`: 426 status code;<br> `451`: 451 status code;<br> `5XX`: All 5xx status codes;<br> `500`: 500 status code;<br> `501`: 501 status code;<br> `502`: 502 status code;<br> `503`: 503 status code;<br> `504`: 504 status code;<br> `505`: 505 status code;<br> `506`: 506 status code;<br> `507`: 507 status code;<br> `510`: 510 status code;<br> `514`: 514 status code;<br> `544`: 544 status code.</li>
<li>`tagKey`:<br> Filter by the <strong>tag key</strong><br> Type: String<br> Required: No</li>
<li>`tagValue`<br> Filter by the <strong>tag value</strong><br> Type: String<br> Required: No</li>
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
class DescribeTopL7CacheDataRequest extends AbstractModel
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
     * @var string The query metric. Values:
<li>l7Cache_outFlux_domain: Host/Domain name;</li>
<li>l7Cache_outFlux_url: URL address;</li>
<li>l7Cache_outFlux_resourceType: Resource type;</li>
<li>l7Cache_outFlux_statusCode: Status code.</li>
     */
    public $MetricName;

    /**
     * @var array ZoneId set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var integer The number of data entries to be queried. The maximum value is 1000. If it is not specified, the value 10 is used by default, indicating that the top 10 data entries.
     */
    public $Limit;

    /**
     * @var array Filter conditions. See below for details: 
<li>`domain`<br> Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br> Type: String<br> Required: No</li>
<li>`url`<br> Filter by the <strong>URL</strong>, such as `/content`. The query period cannot exceed 30 days. <br> Type: String<br> Required: No</li>
<li>`resourceType`<br> Filter by the <strong>resource file type</strong>, such as `jpg`, `png`. The query period cannot exceed 30 days.<br>Type: String<br> Required: No</li>
<li>cacheType<br>Filter by the <strong>cache hit result</strong>.<br>Type: String<br> Required: No<br> Values: <br> `hit`: Cache hit; <br> `dynamic`: Resource non-cacheable; <br> `miss`: Cache miss</li>
<li>`statusCode`<br> Filter by the <strong> status code</strong>. The query period  cannot exceed 30 days. <br> Type: String<br> Required: No<br> Values: <br> `1XX`: All 1xx status codes;<br> `100`: 100 status code;<br> `101`: 101 status code;<br> `102`: 102 status code;<br> `2XX`: All 2xx status codes;<br> `200`: 200 status code;<br> `201`: 201 status code;<br> `202`: 202 status code;<br> `203`: 203 status code;<br> `204`: 204 status code;<br> `205`: 205 status code;<br> `206`: 206 status code;<br> `207`: 207 status code;<br> `3XX`: All 3xx status codes;<br> `300`: 300 status code;<br> `301`: 301 status code;<br> `302`: 302 status code;<br> `303`: 303 status code;<br> `304`: 304 status code;<br> `305`: 305 status code;<br> `307`: 307 status code;<br> `4XX`: All 4xx status codes;<br> `400`: 400 status code;<br> `401`: 401 status code;<br> `402`: 402 status code;<br> `403`: 403 status code;<br> `404`: 404 status code;<br> `405`: 405 status code;<br> `406`: 406 status code;<br> `407`: 407 status code;<br> `408`: 408 status code;<br> `409`: 409 status code;<br> `410`: 410 status code;<br> `411`: 411 status code;<br> `412`: 412 status code;<br> `412`: 413 status code;<br> `414`: 414 status code;<br> `415`: 415 status code;<br> `416`: 416 status code;<br> `417`: 417 status code;<br>`422`: 422 status code;<br> `423`: 423 status code;<br> `424`: 424 status code;<br> `426`: 426 status code;<br> `451`: 451 status code;<br> `5XX`: All 5xx status codes;<br> `500`: 500 status code;<br> `501`: 501 status code;<br> `502`: 502 status code;<br> `503`: 503 status code;<br> `504`: 504 status code;<br> `505`: 505 status code;<br> `506`: 506 status code;<br> `507`: 507 status code;<br> `510`: 510 status code;<br> `514`: 514 status code;<br> `544`: 544 status code.</li>
<li>`tagKey`:<br> Filter by the <strong>tag key</strong><br> Type: String<br> Required: No</li>
<li>`tagValue`<br> Filter by the <strong>tag value</strong><br> Type: String<br> Required: No</li>
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
     * @param string $MetricName The query metric. Values:
<li>l7Cache_outFlux_domain: Host/Domain name;</li>
<li>l7Cache_outFlux_url: URL address;</li>
<li>l7Cache_outFlux_resourceType: Resource type;</li>
<li>l7Cache_outFlux_statusCode: Status code.</li>
     * @param array $ZoneIds ZoneId set. This parameter is required.
     * @param integer $Limit The number of data entries to be queried. The maximum value is 1000. If it is not specified, the value 10 is used by default, indicating that the top 10 data entries.
     * @param array $Filters Filter conditions. See below for details: 
<li>`domain`<br> Filter by the <strong>sub-domain name</strong>, such as `test.example.com`<br> Type: String<br> Required: No</li>
<li>`url`<br> Filter by the <strong>URL</strong>, such as `/content`. The query period cannot exceed 30 days. <br> Type: String<br> Required: No</li>
<li>`resourceType`<br> Filter by the <strong>resource file type</strong>, such as `jpg`, `png`. The query period cannot exceed 30 days.<br>Type: String<br> Required: No</li>
<li>cacheType<br>Filter by the <strong>cache hit result</strong>.<br>Type: String<br> Required: No<br> Values: <br> `hit`: Cache hit; <br> `dynamic`: Resource non-cacheable; <br> `miss`: Cache miss</li>
<li>`statusCode`<br> Filter by the <strong> status code</strong>. The query period  cannot exceed 30 days. <br> Type: String<br> Required: No<br> Values: <br> `1XX`: All 1xx status codes;<br> `100`: 100 status code;<br> `101`: 101 status code;<br> `102`: 102 status code;<br> `2XX`: All 2xx status codes;<br> `200`: 200 status code;<br> `201`: 201 status code;<br> `202`: 202 status code;<br> `203`: 203 status code;<br> `204`: 204 status code;<br> `205`: 205 status code;<br> `206`: 206 status code;<br> `207`: 207 status code;<br> `3XX`: All 3xx status codes;<br> `300`: 300 status code;<br> `301`: 301 status code;<br> `302`: 302 status code;<br> `303`: 303 status code;<br> `304`: 304 status code;<br> `305`: 305 status code;<br> `307`: 307 status code;<br> `4XX`: All 4xx status codes;<br> `400`: 400 status code;<br> `401`: 401 status code;<br> `402`: 402 status code;<br> `403`: 403 status code;<br> `404`: 404 status code;<br> `405`: 405 status code;<br> `406`: 406 status code;<br> `407`: 407 status code;<br> `408`: 408 status code;<br> `409`: 409 status code;<br> `410`: 410 status code;<br> `411`: 411 status code;<br> `412`: 412 status code;<br> `412`: 413 status code;<br> `414`: 414 status code;<br> `415`: 415 status code;<br> `416`: 416 status code;<br> `417`: 417 status code;<br>`422`: 422 status code;<br> `423`: 423 status code;<br> `424`: 424 status code;<br> `426`: 426 status code;<br> `451`: 451 status code;<br> `5XX`: All 5xx status codes;<br> `500`: 500 status code;<br> `501`: 501 status code;<br> `502`: 502 status code;<br> `503`: 503 status code;<br> `504`: 504 status code;<br> `505`: 505 status code;<br> `506`: 506 status code;<br> `507`: 507 status code;<br> `510`: 510 status code;<br> `514`: 514 status code;<br> `544`: 544 status code.</li>
<li>`tagKey`:<br> Filter by the <strong>tag key</strong><br> Type: String<br> Required: No</li>
<li>`tagValue`<br> Filter by the <strong>tag value</strong><br> Type: String<br> Required: No</li>
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

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
