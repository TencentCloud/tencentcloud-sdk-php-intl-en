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
 * @method string getMetricName() Obtain Queried metric. valid values:.
<li> l7Flow_outFlux_country: specifies the l7 EdgeOne response traffic metric counted by the country/region dimension.</li>.
<li> l7Flow_outFlux_province: specifies the l7 EdgeOne response traffic metric counted by the dimension of provinces in chinese mainland.</li>.
<li> l7Flow_outFlux_statusCode: specifies the l7 EdgeOne response traffic metric by status code dimension.</li>.
<li> l7Flow_outFlux_domain: specifies the l7 EdgeOne response traffic metric counted by domain name dimension.</li>.
<li>l7Flow_outFlux_url: specifies the l7 EdgeOne response traffic metric counted by url Path dimension.</li>.
<li> l7Flow_outFlux_resourceType: specifies the l7 EdgeOne response traffic metric counted by resource type dimension.</li>.
<li> l7Flow_outFlux_sip: specifies the l7 EdgeOne response traffic metric counted by the client IP dimension.</li>.
<li>l7Flow_outFlux_referers: specifies the l7 EdgeOne response traffic statistics by Referer dimension.</li>.
<li> l7Flow_outFlux_ua_device: specifies the l7 EdgeOne response traffic metric counted by device type dimension.</li>.
<li> l7Flow_outFlux_ua_browser: specifies the l7 EdgeOne response traffic metric by browser type dimension.</li>.
<li> l7Flow_outFlux_ua_os: specifies the l7 EdgeOne response traffic metric counted by the operating system type dimension.</li>.
<li> l7Flow_outFlux_ua: specifies the l7 EdgeOne response traffic metric by User-Agent dimension statistics.</li>.
<li> l7Flow_request_country: specifies the l7 access request count metric by country/region dimension.</li>.
<li> l7Flow_request_province: specifies the l7 access request count metric by province in the chinese mainland.</li>.
<li> l7Flow_request_statusCode: specifies the l7 access request count metric by status code dimension.</li>.
<li> l7Flow_request_domain: specifies the l7 access request count metric counted by the domain name dimension.</li>.
<li> l7Flow_request_url: specifies the l7 access request count metric counted by url Path dimension. </li>.
<li> l7Flow_request_resourceType: specifies the l7 access request count metric counted by the resource type dimension.</li>.
<li> l7Flow_request_sip: specifies the l7 access request count metric counted by the client IP dimension.</li>.
<li>l7Flow_request_referer: specifies l7 access request count metrics by referer dimension.</li>.
<li> l7Flow_request_ua_device: specifies the l7 access request count metric by device type dimension.</li>.
<li> l7Flow_request_ua_browser: specifies the l7 access request count metric by browser type dimension.</li>.
<li> l7Flow_request_ua_os: specifies the l7 access request count metric counted by the operating system type dimension.</li>.
<li> l7Flow_request_ua: l7 access request count metric counted by the User-Agent dimension.</li>.
 * @method void setMetricName(string $MetricName) Set Queried metric. valid values:.
<li> l7Flow_outFlux_country: specifies the l7 EdgeOne response traffic metric counted by the country/region dimension.</li>.
<li> l7Flow_outFlux_province: specifies the l7 EdgeOne response traffic metric counted by the dimension of provinces in chinese mainland.</li>.
<li> l7Flow_outFlux_statusCode: specifies the l7 EdgeOne response traffic metric by status code dimension.</li>.
<li> l7Flow_outFlux_domain: specifies the l7 EdgeOne response traffic metric counted by domain name dimension.</li>.
<li>l7Flow_outFlux_url: specifies the l7 EdgeOne response traffic metric counted by url Path dimension.</li>.
<li> l7Flow_outFlux_resourceType: specifies the l7 EdgeOne response traffic metric counted by resource type dimension.</li>.
<li> l7Flow_outFlux_sip: specifies the l7 EdgeOne response traffic metric counted by the client IP dimension.</li>.
<li>l7Flow_outFlux_referers: specifies the l7 EdgeOne response traffic statistics by Referer dimension.</li>.
<li> l7Flow_outFlux_ua_device: specifies the l7 EdgeOne response traffic metric counted by device type dimension.</li>.
<li> l7Flow_outFlux_ua_browser: specifies the l7 EdgeOne response traffic metric by browser type dimension.</li>.
<li> l7Flow_outFlux_ua_os: specifies the l7 EdgeOne response traffic metric counted by the operating system type dimension.</li>.
<li> l7Flow_outFlux_ua: specifies the l7 EdgeOne response traffic metric by User-Agent dimension statistics.</li>.
<li> l7Flow_request_country: specifies the l7 access request count metric by country/region dimension.</li>.
<li> l7Flow_request_province: specifies the l7 access request count metric by province in the chinese mainland.</li>.
<li> l7Flow_request_statusCode: specifies the l7 access request count metric by status code dimension.</li>.
<li> l7Flow_request_domain: specifies the l7 access request count metric counted by the domain name dimension.</li>.
<li> l7Flow_request_url: specifies the l7 access request count metric counted by url Path dimension. </li>.
<li> l7Flow_request_resourceType: specifies the l7 access request count metric counted by the resource type dimension.</li>.
<li> l7Flow_request_sip: specifies the l7 access request count metric counted by the client IP dimension.</li>.
<li>l7Flow_request_referer: specifies l7 access request count metrics by referer dimension.</li>.
<li> l7Flow_request_ua_device: specifies the l7 access request count metric by device type dimension.</li>.
<li> l7Flow_request_ua_browser: specifies the l7 access request count metric by browser type dimension.</li>.
<li> l7Flow_request_ua_os: specifies the l7 access request count metric counted by the operating system type dimension.</li>.
<li> l7Flow_request_ua: l7 access request count metric counted by the User-Agent dimension.</li>.
 * @method array getZoneIds() Obtain Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
 * @method integer getLimit() Obtain Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method void setLimit(integer $Limit) Set Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method array getFilters() Obtain Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
 * @method void setFilters(array $Filters) Set Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
 * @method string getInterval() Obtain Query time granularity. this parameter is invalid. to be deprecated.
 * @method void setInterval(string $Interval) Set Query time granularity. this parameter is invalid. to be deprecated.
 * @method string getArea() Obtain Data ownership region. this parameter is deprecated. please filter data by client region in `Filters.country`.
 * @method void setArea(string $Area) Set Data ownership region. this parameter is deprecated. please filter data by client region in `Filters.country`.
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
     * @var string Queried metric. valid values:.
<li> l7Flow_outFlux_country: specifies the l7 EdgeOne response traffic metric counted by the country/region dimension.</li>.
<li> l7Flow_outFlux_province: specifies the l7 EdgeOne response traffic metric counted by the dimension of provinces in chinese mainland.</li>.
<li> l7Flow_outFlux_statusCode: specifies the l7 EdgeOne response traffic metric by status code dimension.</li>.
<li> l7Flow_outFlux_domain: specifies the l7 EdgeOne response traffic metric counted by domain name dimension.</li>.
<li>l7Flow_outFlux_url: specifies the l7 EdgeOne response traffic metric counted by url Path dimension.</li>.
<li> l7Flow_outFlux_resourceType: specifies the l7 EdgeOne response traffic metric counted by resource type dimension.</li>.
<li> l7Flow_outFlux_sip: specifies the l7 EdgeOne response traffic metric counted by the client IP dimension.</li>.
<li>l7Flow_outFlux_referers: specifies the l7 EdgeOne response traffic statistics by Referer dimension.</li>.
<li> l7Flow_outFlux_ua_device: specifies the l7 EdgeOne response traffic metric counted by device type dimension.</li>.
<li> l7Flow_outFlux_ua_browser: specifies the l7 EdgeOne response traffic metric by browser type dimension.</li>.
<li> l7Flow_outFlux_ua_os: specifies the l7 EdgeOne response traffic metric counted by the operating system type dimension.</li>.
<li> l7Flow_outFlux_ua: specifies the l7 EdgeOne response traffic metric by User-Agent dimension statistics.</li>.
<li> l7Flow_request_country: specifies the l7 access request count metric by country/region dimension.</li>.
<li> l7Flow_request_province: specifies the l7 access request count metric by province in the chinese mainland.</li>.
<li> l7Flow_request_statusCode: specifies the l7 access request count metric by status code dimension.</li>.
<li> l7Flow_request_domain: specifies the l7 access request count metric counted by the domain name dimension.</li>.
<li> l7Flow_request_url: specifies the l7 access request count metric counted by url Path dimension. </li>.
<li> l7Flow_request_resourceType: specifies the l7 access request count metric counted by the resource type dimension.</li>.
<li> l7Flow_request_sip: specifies the l7 access request count metric counted by the client IP dimension.</li>.
<li>l7Flow_request_referer: specifies l7 access request count metrics by referer dimension.</li>.
<li> l7Flow_request_ua_device: specifies the l7 access request count metric by device type dimension.</li>.
<li> l7Flow_request_ua_browser: specifies the l7 access request count metric by browser type dimension.</li>.
<li> l7Flow_request_ua_os: specifies the l7 access request count metric counted by the operating system type dimension.</li>.
<li> l7Flow_request_ua: l7 access request count metric counted by the User-Agent dimension.</li>.
     */
    public $MetricName;

    /**
     * @var array Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
     */
    public $ZoneIds;

    /**
     * @var integer Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     */
    public $Limit;

    /**
     * @var array Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
     */
    public $Filters;

    /**
     * @var string Query time granularity. this parameter is invalid. to be deprecated.
     */
    public $Interval;

    /**
     * @var string Data ownership region. this parameter is deprecated. please filter data by client region in `Filters.country`.
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param string $MetricName Queried metric. valid values:.
<li> l7Flow_outFlux_country: specifies the l7 EdgeOne response traffic metric counted by the country/region dimension.</li>.
<li> l7Flow_outFlux_province: specifies the l7 EdgeOne response traffic metric counted by the dimension of provinces in chinese mainland.</li>.
<li> l7Flow_outFlux_statusCode: specifies the l7 EdgeOne response traffic metric by status code dimension.</li>.
<li> l7Flow_outFlux_domain: specifies the l7 EdgeOne response traffic metric counted by domain name dimension.</li>.
<li>l7Flow_outFlux_url: specifies the l7 EdgeOne response traffic metric counted by url Path dimension.</li>.
<li> l7Flow_outFlux_resourceType: specifies the l7 EdgeOne response traffic metric counted by resource type dimension.</li>.
<li> l7Flow_outFlux_sip: specifies the l7 EdgeOne response traffic metric counted by the client IP dimension.</li>.
<li>l7Flow_outFlux_referers: specifies the l7 EdgeOne response traffic statistics by Referer dimension.</li>.
<li> l7Flow_outFlux_ua_device: specifies the l7 EdgeOne response traffic metric counted by device type dimension.</li>.
<li> l7Flow_outFlux_ua_browser: specifies the l7 EdgeOne response traffic metric by browser type dimension.</li>.
<li> l7Flow_outFlux_ua_os: specifies the l7 EdgeOne response traffic metric counted by the operating system type dimension.</li>.
<li> l7Flow_outFlux_ua: specifies the l7 EdgeOne response traffic metric by User-Agent dimension statistics.</li>.
<li> l7Flow_request_country: specifies the l7 access request count metric by country/region dimension.</li>.
<li> l7Flow_request_province: specifies the l7 access request count metric by province in the chinese mainland.</li>.
<li> l7Flow_request_statusCode: specifies the l7 access request count metric by status code dimension.</li>.
<li> l7Flow_request_domain: specifies the l7 access request count metric counted by the domain name dimension.</li>.
<li> l7Flow_request_url: specifies the l7 access request count metric counted by url Path dimension. </li>.
<li> l7Flow_request_resourceType: specifies the l7 access request count metric counted by the resource type dimension.</li>.
<li> l7Flow_request_sip: specifies the l7 access request count metric counted by the client IP dimension.</li>.
<li>l7Flow_request_referer: specifies l7 access request count metrics by referer dimension.</li>.
<li> l7Flow_request_ua_device: specifies the l7 access request count metric by device type dimension.</li>.
<li> l7Flow_request_ua_browser: specifies the l7 access request count metric by browser type dimension.</li>.
<li> l7Flow_request_ua_os: specifies the l7 access request count metric counted by the operating system type dimension.</li>.
<li> l7Flow_request_ua: l7 access request count metric counted by the User-Agent dimension.</li>.
     * @param array $ZoneIds Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
     * @param integer $Limit Indicates the top N data to be queried. The maximum value is 1000. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     * @param array $Filters Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
     * @param string $Interval Query time granularity. this parameter is invalid. to be deprecated.
     * @param string $Area Data ownership region. this parameter is deprecated. please filter data by client region in `Filters.country`.
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
