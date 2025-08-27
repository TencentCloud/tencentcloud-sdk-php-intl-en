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
 * DescribeTopL7AnalysisData request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method string getMetricName() Obtain Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic aggregated by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic aggregated by the dimension of provinces in chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic aggregated by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic aggregated by the domain name dimension;</li>
<li>l7Flow_outFlux_url: L7 EdgeOne response traffic aggregated by url path dimension.</li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic aggregated by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic aggregated by the client IP dimension;</li>
<li>l7Flow_outFlux_referers: L7 EdgeOne response traffic aggregated by referer dimension.</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic aggregated by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic aggregated by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic aggregated by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic aggregated by the User-Agent dimension;</li>
<li> l7Flow_request_country: L7 request count aggregated by the country/region dimension;</li>
<li> l7Flow_request_province: L7 request count aggregated by the dimension of provinces in the chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 request count aggregated by the status code dimension;</li>
<li> l7Flow_request_domain: L7 request count aggregated by the domain name dimension;</li>
<li>l7Flow_request_url: L7 request count aggregated by url Path dimension.</li>
<li> l7Flow_request_resourceType: L7 request count aggregated by resource type dimension;</li>
<li> l7Flow_request_sip: L7 request count aggregated by the client IP dimension;</li>
<li>l7Flow_request_referer: L7 request count aggregated by referer dimension.</li>
<li> l7Flow_request_ua_device: L7 request count aggregated by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 request count aggregated by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 request count aggregated by the operating system type dimension.</li>
<li> l7Flow_request_ua: L7 request count aggregated by the User-Agent dimension.</li>
 * @method void setMetricName(string $MetricName) Set Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic aggregated by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic aggregated by the dimension of provinces in chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic aggregated by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic aggregated by the domain name dimension;</li>
<li>l7Flow_outFlux_url: L7 EdgeOne response traffic aggregated by url path dimension.</li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic aggregated by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic aggregated by the client IP dimension;</li>
<li>l7Flow_outFlux_referers: L7 EdgeOne response traffic aggregated by referer dimension.</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic aggregated by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic aggregated by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic aggregated by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic aggregated by the User-Agent dimension;</li>
<li> l7Flow_request_country: L7 request count aggregated by the country/region dimension;</li>
<li> l7Flow_request_province: L7 request count aggregated by the dimension of provinces in the chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 request count aggregated by the status code dimension;</li>
<li> l7Flow_request_domain: L7 request count aggregated by the domain name dimension;</li>
<li>l7Flow_request_url: L7 request count aggregated by url Path dimension.</li>
<li> l7Flow_request_resourceType: L7 request count aggregated by resource type dimension;</li>
<li> l7Flow_request_sip: L7 request count aggregated by the client IP dimension;</li>
<li>l7Flow_request_referer: L7 request count aggregated by referer dimension.</li>
<li> l7Flow_request_ua_device: L7 request count aggregated by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 request count aggregated by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 request count aggregated by the operating system type dimension.</li>
<li> l7Flow_request_ua: L7 request count aggregated by the User-Agent dimension.</li>
 * @method array getZoneIds() Obtain Site ID list. This parameter is required. A maximum of 100 site IDs can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. To query account-level data, you must have resource permissions for all sites in this API.
 * @method void setZoneIds(array $ZoneIds) Set Site ID list. This parameter is required. A maximum of 100 site IDs can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. To query account-level data, you must have resource permissions for all sites in this API.
 * @method integer getLimit() Obtain Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method void setLimit(integer $Limit) Set Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method array getFilters() Obtain Filtering conditions used when querying data. Refer to the [Filtering Conditions for Analytics](https://www.tencentcloud.com/document/product/1145/56985) document for the available filters applicable to L7 client traffic, bandwidth and requests.  
 * @method void setFilters(array $Filters) Set Filtering conditions used when querying data. Refer to the [Filtering Conditions for Analytics](https://www.tencentcloud.com/document/product/1145/56985) document for the available filters applicable to L7 client traffic, bandwidth and requests.  
 * @method string getInterval() Obtain Query time granularity. This parameter is deprecated.
 * @method void setInterval(string $Interval) Set Query time granularity. This parameter is deprecated.
 * @method string getArea() Obtain Data region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
 * @method void setArea(string $Area) Set Data region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
 */
class DescribeTopL7AnalysisDataRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     */
    public $EndTime;

    /**
     * @var string Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic aggregated by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic aggregated by the dimension of provinces in chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic aggregated by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic aggregated by the domain name dimension;</li>
<li>l7Flow_outFlux_url: L7 EdgeOne response traffic aggregated by url path dimension.</li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic aggregated by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic aggregated by the client IP dimension;</li>
<li>l7Flow_outFlux_referers: L7 EdgeOne response traffic aggregated by referer dimension.</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic aggregated by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic aggregated by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic aggregated by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic aggregated by the User-Agent dimension;</li>
<li> l7Flow_request_country: L7 request count aggregated by the country/region dimension;</li>
<li> l7Flow_request_province: L7 request count aggregated by the dimension of provinces in the chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 request count aggregated by the status code dimension;</li>
<li> l7Flow_request_domain: L7 request count aggregated by the domain name dimension;</li>
<li>l7Flow_request_url: L7 request count aggregated by url Path dimension.</li>
<li> l7Flow_request_resourceType: L7 request count aggregated by resource type dimension;</li>
<li> l7Flow_request_sip: L7 request count aggregated by the client IP dimension;</li>
<li>l7Flow_request_referer: L7 request count aggregated by referer dimension.</li>
<li> l7Flow_request_ua_device: L7 request count aggregated by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 request count aggregated by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 request count aggregated by the operating system type dimension.</li>
<li> l7Flow_request_ua: L7 request count aggregated by the User-Agent dimension.</li>
     */
    public $MetricName;

    /**
     * @var array Site ID list. This parameter is required. A maximum of 100 site IDs can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. To query account-level data, you must have resource permissions for all sites in this API.
     */
    public $ZoneIds;

    /**
     * @var integer Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     */
    public $Limit;

    /**
     * @var array Filtering conditions used when querying data. Refer to the [Filtering Conditions for Analytics](https://www.tencentcloud.com/document/product/1145/56985) document for the available filters applicable to L7 client traffic, bandwidth and requests.  
     */
    public $Filters;

    /**
     * @var string Query time granularity. This parameter is deprecated.
     */
    public $Interval;

    /**
     * @var string Data region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param string $MetricName Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic aggregated by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic aggregated by the dimension of provinces in chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic aggregated by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic aggregated by the domain name dimension;</li>
<li>l7Flow_outFlux_url: L7 EdgeOne response traffic aggregated by url path dimension.</li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic aggregated by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic aggregated by the client IP dimension;</li>
<li>l7Flow_outFlux_referers: L7 EdgeOne response traffic aggregated by referer dimension.</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic aggregated by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic aggregated by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic aggregated by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic aggregated by the User-Agent dimension;</li>
<li> l7Flow_request_country: L7 request count aggregated by the country/region dimension;</li>
<li> l7Flow_request_province: L7 request count aggregated by the dimension of provinces in the chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 request count aggregated by the status code dimension;</li>
<li> l7Flow_request_domain: L7 request count aggregated by the domain name dimension;</li>
<li>l7Flow_request_url: L7 request count aggregated by url Path dimension.</li>
<li> l7Flow_request_resourceType: L7 request count aggregated by resource type dimension;</li>
<li> l7Flow_request_sip: L7 request count aggregated by the client IP dimension;</li>
<li>l7Flow_request_referer: L7 request count aggregated by referer dimension.</li>
<li> l7Flow_request_ua_device: L7 request count aggregated by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 request count aggregated by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 request count aggregated by the operating system type dimension.</li>
<li> l7Flow_request_ua: L7 request count aggregated by the User-Agent dimension.</li>
     * @param array $ZoneIds Site ID list. This parameter is required. A maximum of 100 site IDs can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. To query account-level data, you must have resource permissions for all sites in this API.
     * @param integer $Limit Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     * @param array $Filters Filtering conditions used when querying data. Refer to the [Filtering Conditions for Analytics](https://www.tencentcloud.com/document/product/1145/56985) document for the available filters applicable to L7 client traffic, bandwidth and requests.  
     * @param string $Interval Query time granularity. This parameter is deprecated.
     * @param string $Area Data region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
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
