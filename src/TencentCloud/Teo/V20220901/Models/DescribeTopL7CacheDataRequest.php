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
 * DescribeTopL7CacheData request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getMetricName() Obtain Queried metric. Valid values:
<li> l7Cache_outFlux_domain: host/domain name;</li>
<li> l7Cache_outFlux_url: URL address;</li>
<li> l7Cache_outFlux_resourceType: resource type;</li>
<li> l7Cache_outFlux_statusCode: status code.</li>
 * @method void setMetricName(string $MetricName) Set Queried metric. Valid values:
<li> l7Cache_outFlux_domain: host/domain name;</li>
<li> l7Cache_outFlux_url: URL address;</li>
<li> l7Cache_outFlux_resourceType: resource type;</li>
<li> l7Cache_outFlux_statusCode: status code.</li>
 * @method array getZoneIds() Obtain Site ID set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter is required.
 * @method integer getLimit() Obtain Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method void setLimit(integer $Limit) Set Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method array getFilters() Obtain Filter criteria. The detailed filter criteria are as follows:
<li>domain<br>?? Filter by [<strong>subdomain</strong>]. The subdomain format is test.example.com.<br>?? Type: String<br>?? Required: No</li>
<li>url<br>        Filter by <strong>URL</strong>. This parameter supports only a 30-day time range. URL format: /content.<br>        Type: String<br>        Required: No</li>
<li>resourceType<br>        Filter by [<strong>resource type</strong>]. This parameter supports only a 30-day time range. Resource type examples: jpg, png.<br>        Type: String<br>        Required: No</li>
<li>cacheType<br>        Filter by <strong>cache type</strong>.<br>        Type: String<br>        Required: No<br>        Options:<br>        hit: cache hit;<br>        dynamic: non-cacheable resource;<br>        miss: cache miss.</li>
<li>statusCode<br>   Filter by [<strong>status code</strong>]. This parameter supports only a 30-day time range.<br>   Type: String<br>   Required: No<br>   Options:<br>   1XX: 1xx status codes;<br>   100: 100 status code;<br>   101: 101 status code;<br>   102: 102 status code;<br>   2XX: 2xx status codes;<br>   200: 200 status code;<br>   201: 201 status code;<br>   202: 202 status code;<br>   203: 203 status code;<br>   204: 204 status code;<br>   100: 100 status code;<br>   206: 206 status code;<br>   207: 207 status code;<br>   3XX: 3xx status codes;<br>   300: 300 status code;<br>   301: 301 status code;<br>   302: 302 status code;<br>   303: 303 status code;<br>   304: 304 status code;<br>   305: 305 status code;<br>   307: 307 status code;<br>   4XX: 4xx status codes;<br>   400: 400 status code;<br>   401: 401 status code;<br>   402: 402 status code;<br>   403: 403 status code;<br>   404: 404 status code;<br>   405: 405 status code;<br>   406: 406 status code;<br>   407: 407 status code;<br>   408: 408 status code;<br>   409: 409 status code;<br>   410: 410 status code;<br>   411: 411 status code;<br>   412: 412 status code;<br>   412: 413 status code;<br>   414: 414 status code;<br>   415: 415 status code;<br>   416: 416 status code;<br>   417: 417 status code;<br>   422: 422 status code;<br>   423: 423 status code;<br>   424: 424 status code;<br>   426: 426 status code;<br>   451: 451 status code;<br>   5XX: 5xx status codes;<br>   500: 500 status code;<br>   501: 501 status code;<br>   502: 502 status code;<br>   503: 503 status code;<br>   504: 504 status code;<br>   505: 505 status code;<br>   506: 506 status code;<br>   507: 507 status code;<br>   510: 510 status code;<br>   514: 514 status code;<br>   544: 544 status code.</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].<br>?? Type: String<br>?? Required: No</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].<br>?? Type: String<br>?? Required: No</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The detailed filter criteria are as follows:
<li>domain<br>?? Filter by [<strong>subdomain</strong>]. The subdomain format is test.example.com.<br>?? Type: String<br>?? Required: No</li>
<li>url<br>        Filter by <strong>URL</strong>. This parameter supports only a 30-day time range. URL format: /content.<br>        Type: String<br>        Required: No</li>
<li>resourceType<br>        Filter by [<strong>resource type</strong>]. This parameter supports only a 30-day time range. Resource type examples: jpg, png.<br>        Type: String<br>        Required: No</li>
<li>cacheType<br>        Filter by <strong>cache type</strong>.<br>        Type: String<br>        Required: No<br>        Options:<br>        hit: cache hit;<br>        dynamic: non-cacheable resource;<br>        miss: cache miss.</li>
<li>statusCode<br>   Filter by [<strong>status code</strong>]. This parameter supports only a 30-day time range.<br>   Type: String<br>   Required: No<br>   Options:<br>   1XX: 1xx status codes;<br>   100: 100 status code;<br>   101: 101 status code;<br>   102: 102 status code;<br>   2XX: 2xx status codes;<br>   200: 200 status code;<br>   201: 201 status code;<br>   202: 202 status code;<br>   203: 203 status code;<br>   204: 204 status code;<br>   100: 100 status code;<br>   206: 206 status code;<br>   207: 207 status code;<br>   3XX: 3xx status codes;<br>   300: 300 status code;<br>   301: 301 status code;<br>   302: 302 status code;<br>   303: 303 status code;<br>   304: 304 status code;<br>   305: 305 status code;<br>   307: 307 status code;<br>   4XX: 4xx status codes;<br>   400: 400 status code;<br>   401: 401 status code;<br>   402: 402 status code;<br>   403: 403 status code;<br>   404: 404 status code;<br>   405: 405 status code;<br>   406: 406 status code;<br>   407: 407 status code;<br>   408: 408 status code;<br>   409: 409 status code;<br>   410: 410 status code;<br>   411: 411 status code;<br>   412: 412 status code;<br>   412: 413 status code;<br>   414: 414 status code;<br>   415: 415 status code;<br>   416: 416 status code;<br>   417: 417 status code;<br>   422: 422 status code;<br>   423: 423 status code;<br>   424: 424 status code;<br>   426: 426 status code;<br>   451: 451 status code;<br>   5XX: 5xx status codes;<br>   500: 500 status code;<br>   501: 501 status code;<br>   502: 502 status code;<br>   503: 503 status code;<br>   504: 504 status code;<br>   505: 505 status code;<br>   506: 506 status code;<br>   507: 507 status code;<br>   510: 510 status code;<br>   514: 514 status code;<br>   544: 544 status code.</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].<br>?? Type: String<br>?? Required: No</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].<br>?? Type: String<br>?? Required: No</li>
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within one hour, within two days, within seven days, and over seven days.
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within one hour, within two days, within seven days, and over seven days.
 * @method string getArea() Obtain Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data.</li>If this parameter is not input, the default value `global` is used.
 * @method void setArea(string $Area) Set Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data.</li>If this parameter is not input, the default value `global` is used.
 */
class DescribeTopL7CacheDataRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string Queried metric. Valid values:
<li> l7Cache_outFlux_domain: host/domain name;</li>
<li> l7Cache_outFlux_url: URL address;</li>
<li> l7Cache_outFlux_resourceType: resource type;</li>
<li> l7Cache_outFlux_statusCode: status code.</li>
     */
    public $MetricName;

    /**
     * @var array Site ID set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var integer Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The detailed filter criteria are as follows:
<li>domain<br>?? Filter by [<strong>subdomain</strong>]. The subdomain format is test.example.com.<br>?? Type: String<br>?? Required: No</li>
<li>url<br>        Filter by <strong>URL</strong>. This parameter supports only a 30-day time range. URL format: /content.<br>        Type: String<br>        Required: No</li>
<li>resourceType<br>        Filter by [<strong>resource type</strong>]. This parameter supports only a 30-day time range. Resource type examples: jpg, png.<br>        Type: String<br>        Required: No</li>
<li>cacheType<br>        Filter by <strong>cache type</strong>.<br>        Type: String<br>        Required: No<br>        Options:<br>        hit: cache hit;<br>        dynamic: non-cacheable resource;<br>        miss: cache miss.</li>
<li>statusCode<br>   Filter by [<strong>status code</strong>]. This parameter supports only a 30-day time range.<br>   Type: String<br>   Required: No<br>   Options:<br>   1XX: 1xx status codes;<br>   100: 100 status code;<br>   101: 101 status code;<br>   102: 102 status code;<br>   2XX: 2xx status codes;<br>   200: 200 status code;<br>   201: 201 status code;<br>   202: 202 status code;<br>   203: 203 status code;<br>   204: 204 status code;<br>   100: 100 status code;<br>   206: 206 status code;<br>   207: 207 status code;<br>   3XX: 3xx status codes;<br>   300: 300 status code;<br>   301: 301 status code;<br>   302: 302 status code;<br>   303: 303 status code;<br>   304: 304 status code;<br>   305: 305 status code;<br>   307: 307 status code;<br>   4XX: 4xx status codes;<br>   400: 400 status code;<br>   401: 401 status code;<br>   402: 402 status code;<br>   403: 403 status code;<br>   404: 404 status code;<br>   405: 405 status code;<br>   406: 406 status code;<br>   407: 407 status code;<br>   408: 408 status code;<br>   409: 409 status code;<br>   410: 410 status code;<br>   411: 411 status code;<br>   412: 412 status code;<br>   412: 413 status code;<br>   414: 414 status code;<br>   415: 415 status code;<br>   416: 416 status code;<br>   417: 417 status code;<br>   422: 422 status code;<br>   423: 423 status code;<br>   424: 424 status code;<br>   426: 426 status code;<br>   451: 451 status code;<br>   5XX: 5xx status codes;<br>   500: 500 status code;<br>   501: 501 status code;<br>   502: 502 status code;<br>   503: 503 status code;<br>   504: 504 status code;<br>   505: 505 status code;<br>   506: 506 status code;<br>   507: 507 status code;<br>   510: 510 status code;<br>   514: 514 status code;<br>   544: 544 status code.</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].<br>?? Type: String<br>?? Required: No</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].<br>?? Type: String<br>?? Required: No</li>
     */
    public $Filters;

    /**
     * @var string Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within one hour, within two days, within seven days, and over seven days.
     */
    public $Interval;

    /**
     * @var string Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data.</li>If this parameter is not input, the default value `global` is used.
     */
    public $Area;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param string $MetricName Queried metric. Valid values:
<li> l7Cache_outFlux_domain: host/domain name;</li>
<li> l7Cache_outFlux_url: URL address;</li>
<li> l7Cache_outFlux_resourceType: resource type;</li>
<li> l7Cache_outFlux_statusCode: status code.</li>
     * @param array $ZoneIds Site ID set. This parameter is required.
     * @param integer $Limit Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     * @param array $Filters Filter criteria. The detailed filter criteria are as follows:
<li>domain<br>?? Filter by [<strong>subdomain</strong>]. The subdomain format is test.example.com.<br>?? Type: String<br>?? Required: No</li>
<li>url<br>        Filter by <strong>URL</strong>. This parameter supports only a 30-day time range. URL format: /content.<br>        Type: String<br>        Required: No</li>
<li>resourceType<br>        Filter by [<strong>resource type</strong>]. This parameter supports only a 30-day time range. Resource type examples: jpg, png.<br>        Type: String<br>        Required: No</li>
<li>cacheType<br>        Filter by <strong>cache type</strong>.<br>        Type: String<br>        Required: No<br>        Options:<br>        hit: cache hit;<br>        dynamic: non-cacheable resource;<br>        miss: cache miss.</li>
<li>statusCode<br>   Filter by [<strong>status code</strong>]. This parameter supports only a 30-day time range.<br>   Type: String<br>   Required: No<br>   Options:<br>   1XX: 1xx status codes;<br>   100: 100 status code;<br>   101: 101 status code;<br>   102: 102 status code;<br>   2XX: 2xx status codes;<br>   200: 200 status code;<br>   201: 201 status code;<br>   202: 202 status code;<br>   203: 203 status code;<br>   204: 204 status code;<br>   100: 100 status code;<br>   206: 206 status code;<br>   207: 207 status code;<br>   3XX: 3xx status codes;<br>   300: 300 status code;<br>   301: 301 status code;<br>   302: 302 status code;<br>   303: 303 status code;<br>   304: 304 status code;<br>   305: 305 status code;<br>   307: 307 status code;<br>   4XX: 4xx status codes;<br>   400: 400 status code;<br>   401: 401 status code;<br>   402: 402 status code;<br>   403: 403 status code;<br>   404: 404 status code;<br>   405: 405 status code;<br>   406: 406 status code;<br>   407: 407 status code;<br>   408: 408 status code;<br>   409: 409 status code;<br>   410: 410 status code;<br>   411: 411 status code;<br>   412: 412 status code;<br>   412: 413 status code;<br>   414: 414 status code;<br>   415: 415 status code;<br>   416: 416 status code;<br>   417: 417 status code;<br>   422: 422 status code;<br>   423: 423 status code;<br>   424: 424 status code;<br>   426: 426 status code;<br>   451: 451 status code;<br>   5XX: 5xx status codes;<br>   500: 500 status code;<br>   501: 501 status code;<br>   502: 502 status code;<br>   503: 503 status code;<br>   504: 504 status code;<br>   505: 505 status code;<br>   506: 506 status code;<br>   507: 507 status code;<br>   510: 510 status code;<br>   514: 514 status code;<br>   544: 544 status code.</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].<br>?? Type: String<br>?? Required: No</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].<br>?? Type: String<br>?? Required: No</li>
     * @param string $Interval Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within one hour, within two days, within seven days, and over seven days.
     * @param string $Area Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data.</li>If this parameter is not input, the default value `global` is used.
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
