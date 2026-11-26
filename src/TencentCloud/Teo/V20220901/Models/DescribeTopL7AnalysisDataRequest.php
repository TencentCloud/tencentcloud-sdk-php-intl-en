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
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method string getMetricName() Obtain Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic metric counted by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic metric counted by the dimension of provinces in Chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic metric counted by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic metric counted by the domain name dimension;</li>
<li> l7Flow_outFlux_url: l7 EdgeOne response traffic metric counted by url Path dimension; </li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic metric counted by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic metric counted by the client IP dimension;</li>
<li> l7Flow_outFlux_referers: statistics of L7 EdgeOne response traffic by Referer dimension;</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic metric counted by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic metric counted by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic metric counted by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic metric by User-Agent dimension;</li>
<li> l7Flow_request_country: L7 access request count metric counted by the country/region dimension;</li>
<li> l7Flow_request_province: L7 access request count metric counted by the dimension of provinces in the Chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 access request count metric counted by the status code dimension;</li>
<li> l7Flow_request_domain: L7 access request count metric counted by the domain name dimension;</li>
<li> l7Flow_request_url: l7 access request count metrics counted by url Path dimension; </li>
<li> l7Flow_request_resourceType: L7 access request count metric counted by the resource type dimension;</li>
<li> l7Flow_request_sip: L7 access request count metric counted by the client IP dimension;</li>
<li> l7Flow_request_referers: L7 access request count metric by Referer dimension;</li>
<li> l7Flow_request_ua_device: L7 access request count metric counted by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 access request count metric counted by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 access request count metric counted by the operating system type dimension;</li>
<li> l7Flow_request_ua: L7 access request count metric counted by the User-Agent dimension.</li>
 * @method void setMetricName(string $MetricName) Set Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic metric counted by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic metric counted by the dimension of provinces in Chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic metric counted by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic metric counted by the domain name dimension;</li>
<li> l7Flow_outFlux_url: l7 EdgeOne response traffic metric counted by url Path dimension; </li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic metric counted by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic metric counted by the client IP dimension;</li>
<li> l7Flow_outFlux_referers: statistics of L7 EdgeOne response traffic by Referer dimension;</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic metric counted by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic metric counted by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic metric counted by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic metric by User-Agent dimension;</li>
<li> l7Flow_request_country: L7 access request count metric counted by the country/region dimension;</li>
<li> l7Flow_request_province: L7 access request count metric counted by the dimension of provinces in the Chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 access request count metric counted by the status code dimension;</li>
<li> l7Flow_request_domain: L7 access request count metric counted by the domain name dimension;</li>
<li> l7Flow_request_url: l7 access request count metrics counted by url Path dimension; </li>
<li> l7Flow_request_resourceType: L7 access request count metric counted by the resource type dimension;</li>
<li> l7Flow_request_sip: L7 access request count metric counted by the client IP dimension;</li>
<li> l7Flow_request_referers: L7 access request count metric by Referer dimension;</li>
<li> l7Flow_request_ua_device: L7 access request count metric counted by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 access request count metric counted by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 access request count metric counted by the operating system type dimension;</li>
<li> l7Flow_request_ua: L7 access request count metric counted by the User-Agent dimension.</li>
 * @method array getZoneIds() Obtain Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permission for all site resources of this interface.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permission for all site resources of this interface.
 * @method integer getLimit() Obtain Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method void setLimit(integer $Limit) Set Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method array getFilters() Obtain Filter criteria used when filtering data. For values, see the available filter options for L7 access traffic, bandwidth, and request count in [Metric Analysis Filter Criteria](https://www.tencentcloud.com/document/product/1552/98219?from_cn_redirect=1#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If you need to limit the site or content identifier, enter the corresponding value in the `ZoneIds.N` parameter.
 * @method void setFilters(array $Filters) Set Filter criteria used when filtering data. For values, see the available filter options for L7 access traffic, bandwidth, and request count in [Metric Analysis Filter Criteria](https://www.tencentcloud.com/document/product/1552/98219?from_cn_redirect=1#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If you need to limit the site or content identifier, enter the corresponding value in the `ZoneIds.N` parameter.
 * @method string getInterval() Obtain Query time granularity. This parameter is invalid and to be deprecated.
 * @method void setInterval(string $Interval) Set Query time granularity. This parameter is invalid and to be deprecated.
 * @method string getArea() Obtain Data ownership region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
 * @method void setArea(string $Area) Set Data ownership region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
 */
class DescribeTopL7AnalysisDataRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     */
    public $EndTime;

    /**
     * @var string Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic metric counted by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic metric counted by the dimension of provinces in Chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic metric counted by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic metric counted by the domain name dimension;</li>
<li> l7Flow_outFlux_url: l7 EdgeOne response traffic metric counted by url Path dimension; </li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic metric counted by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic metric counted by the client IP dimension;</li>
<li> l7Flow_outFlux_referers: statistics of L7 EdgeOne response traffic by Referer dimension;</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic metric counted by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic metric counted by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic metric counted by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic metric by User-Agent dimension;</li>
<li> l7Flow_request_country: L7 access request count metric counted by the country/region dimension;</li>
<li> l7Flow_request_province: L7 access request count metric counted by the dimension of provinces in the Chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 access request count metric counted by the status code dimension;</li>
<li> l7Flow_request_domain: L7 access request count metric counted by the domain name dimension;</li>
<li> l7Flow_request_url: l7 access request count metrics counted by url Path dimension; </li>
<li> l7Flow_request_resourceType: L7 access request count metric counted by the resource type dimension;</li>
<li> l7Flow_request_sip: L7 access request count metric counted by the client IP dimension;</li>
<li> l7Flow_request_referers: L7 access request count metric by Referer dimension;</li>
<li> l7Flow_request_ua_device: L7 access request count metric counted by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 access request count metric counted by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 access request count metric counted by the operating system type dimension;</li>
<li> l7Flow_request_ua: L7 access request count metric counted by the User-Agent dimension.</li>
     */
    public $MetricName;

    /**
     * @var array Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permission for all site resources of this interface.
     */
    public $ZoneIds;

    /**
     * @var integer Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     */
    public $Limit;

    /**
     * @var array Filter criteria used when filtering data. For values, see the available filter options for L7 access traffic, bandwidth, and request count in [Metric Analysis Filter Criteria](https://www.tencentcloud.com/document/product/1552/98219?from_cn_redirect=1#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If you need to limit the site or content identifier, enter the corresponding value in the `ZoneIds.N` parameter.
     */
    public $Filters;

    /**
     * @var string Query time granularity. This parameter is invalid and to be deprecated.
     */
    public $Interval;

    /**
     * @var string Data ownership region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
     */
    public $Area;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param string $MetricName Queried metric. Valid values:
<li> l7Flow_outFlux_country: L7 EdgeOne response traffic metric counted by the country/region dimension;</li>
<li> l7Flow_outFlux_province: L7 EdgeOne response traffic metric counted by the dimension of provinces in Chinese mainland;</li>
<li> l7Flow_outFlux_statusCode: L7 EdgeOne response traffic metric counted by the status code dimension;</li>
<li> l7Flow_outFlux_domain: L7 EdgeOne response traffic metric counted by the domain name dimension;</li>
<li> l7Flow_outFlux_url: l7 EdgeOne response traffic metric counted by url Path dimension; </li>
<li> l7Flow_outFlux_resourceType: L7 EdgeOne response traffic metric counted by the resource type dimension;</li>
<li> l7Flow_outFlux_sip: L7 EdgeOne response traffic metric counted by the client IP dimension;</li>
<li> l7Flow_outFlux_referers: statistics of L7 EdgeOne response traffic by Referer dimension;</li>
<li> l7Flow_outFlux_ua_device: L7 EdgeOne response traffic metric counted by the device type dimension;</li>
<li> l7Flow_outFlux_ua_browser: L7 EdgeOne response traffic metric counted by the browser type dimension;</li>
<li> l7Flow_outFlux_ua_os: L7 EdgeOne response traffic metric counted by the operating system type dimension;</li>
<li> l7Flow_outFlux_ua: L7 EdgeOne response traffic metric by User-Agent dimension;</li>
<li> l7Flow_request_country: L7 access request count metric counted by the country/region dimension;</li>
<li> l7Flow_request_province: L7 access request count metric counted by the dimension of provinces in the Chinese mainland;</li>
<li> l7Flow_request_statusCode: L7 access request count metric counted by the status code dimension;</li>
<li> l7Flow_request_domain: L7 access request count metric counted by the domain name dimension;</li>
<li> l7Flow_request_url: l7 access request count metrics counted by url Path dimension; </li>
<li> l7Flow_request_resourceType: L7 access request count metric counted by the resource type dimension;</li>
<li> l7Flow_request_sip: L7 access request count metric counted by the client IP dimension;</li>
<li> l7Flow_request_referers: L7 access request count metric by Referer dimension;</li>
<li> l7Flow_request_ua_device: L7 access request count metric counted by the device type dimension;</li>
<li> l7Flow_request_ua_browser: L7 access request count metric counted by the browser type dimension;</li>
<li> l7Flow_request_ua_os: L7 access request count metric counted by the operating system type dimension;</li>
<li> l7Flow_request_ua: L7 access request count metric counted by the User-Agent dimension.</li>
     * @param array $ZoneIds Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permission for all site resources of this interface.
     * @param integer $Limit Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     * @param array $Filters Filter criteria used when filtering data. For values, see the available filter options for L7 access traffic, bandwidth, and request count in [Metric Analysis Filter Criteria](https://www.tencentcloud.com/document/product/1552/98219?from_cn_redirect=1#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If you need to limit the site or content identifier, enter the corresponding value in the `ZoneIds.N` parameter.
     * @param string $Interval Query time granularity. This parameter is invalid and to be deprecated.
     * @param string $Area Data ownership region. This parameter is deprecated. Please filter data by client region in `Filters.country`.
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
