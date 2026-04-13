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
 * DescribeTimingL7OriginPullData request structure.
 *
 * @method array getZoneIds() Obtain Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
 * @method array getMetricNames() Obtain Metric list. valid values:
<ul><li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server direction. measurement unit: Byte.</li>
<li>l7Flow_outBandwidth_hy: request bandwidth from EdgeOne node to origin server direction, measurement unit: bps;</li>.
<li>l7Flow_request_hy: number of requests in the EdgeOne node to origin server direction. unit: count.</li>.
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node direction, measurement unit: Byte.</li>.
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. measurement unit: bps.</li></ul>.
 * @method void setMetricNames(array $MetricNames) Set Metric list. valid values:
<ul><li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server direction. measurement unit: Byte.</li>
<li>l7Flow_outBandwidth_hy: request bandwidth from EdgeOne node to origin server direction, measurement unit: bps;</li>.
<li>l7Flow_request_hy: number of requests in the EdgeOne node to origin server direction. unit: count.</li>.
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node direction, measurement unit: Byte.</li>.
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. measurement unit: bps.</li></ul>.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method string getInterval() Obtain Time granularity of the query. valid values:.
<Ul><Li>Min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is within 2 hours, within 2 days, within 7 days, and exceeding 7 days.
 * @method void setInterval(string $Interval) Set Time granularity of the query. valid values:.
<Ul><Li>Min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is within 2 hours, within 2 days, within 7 days, and exceeding 7 days.
 * @method array getFilters() Obtain Filter criteria. detailed filter criteria:.
<ul><li><strong>domain</strong>: the requested domain name from the client. if accessing EdgeOne via wildcard domain, the data records the wildcard domain name rather than the specific domain.</li><li><strong>originStatusCode</strong>: origin status code. this filter item is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.<br>the corresponding Value options are as follows:<ul><li><code>1xx</code>: status codes of the 1xx kind.</li><li><code>2xx</code>: status codes of the 2xx kind.</li><li><code>3xx</code>: status codes of the 3xx kind.</li><li><code>4xx</code>: status codes of the 4xx kind.</li><li><code>5xx</code>: status codes of the 5xx kind.</li><li>integer within range <code>[0, 600)</code> (excluding 600).</li></ul></li></ul>.
**Note**: when <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
 * @method void setFilters(array $Filters) Set Filter criteria. detailed filter criteria:.
<ul><li><strong>domain</strong>: the requested domain name from the client. if accessing EdgeOne via wildcard domain, the data records the wildcard domain name rather than the specific domain.</li><li><strong>originStatusCode</strong>: origin status code. this filter item is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.<br>the corresponding Value options are as follows:<ul><li><code>1xx</code>: status codes of the 1xx kind.</li><li><code>2xx</code>: status codes of the 2xx kind.</li><li><code>3xx</code>: status codes of the 3xx kind.</li><li><code>4xx</code>: status codes of the 4xx kind.</li><li><code>5xx</code>: status codes of the 5xx kind.</li><li>integer within range <code>[0, 600)</code> (excluding 600).</li></ul></li></ul>.
**Note**: when <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
 * @method string getDimensionName() Obtain <p>Query dimension name. valid values:</p><ul><li><strong>domain</strong>: the domain name requested by the client. if EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.<br>when using the domain dimension, the <code>Filters</code> must include the <code>domain</code> filter item, specifying a list of no more than 100 domain names to query.</li><li><strong>origin-status-code</strong>: origin status code, such as 200, 404.<br>this dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: origin status code category, such as 2xx, 4xx.<br>this dimension is supported only when <code>MetricNames =["l7Flow_request_hy"]</code>.</li></ul><p>if the <code>DimensionName</code> input parameter is empty, the data is aggregated by the <code>AppId</code> dimension by default, returning only one set of data.</p><p>if the <code>DimensionName</code> input parameter is not empty, the corresponding time series data is returned grouped by the specified query dimension. for example:</p><ul>when <code>DimensionName = origin-status-code</code>:<ul><li>the <code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li>the <code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul>.
<strong>Note</strong>: when specifying DimensionName during queries, concurrent calls are forbidden. if exceeded the query frequency limit, it will return an error <code><strong>InvalidParameter.ActionInProgress</strong></code>.
 * @method void setDimensionName(string $DimensionName) Set <p>Query dimension name. valid values:</p><ul><li><strong>domain</strong>: the domain name requested by the client. if EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.<br>when using the domain dimension, the <code>Filters</code> must include the <code>domain</code> filter item, specifying a list of no more than 100 domain names to query.</li><li><strong>origin-status-code</strong>: origin status code, such as 200, 404.<br>this dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: origin status code category, such as 2xx, 4xx.<br>this dimension is supported only when <code>MetricNames =["l7Flow_request_hy"]</code>.</li></ul><p>if the <code>DimensionName</code> input parameter is empty, the data is aggregated by the <code>AppId</code> dimension by default, returning only one set of data.</p><p>if the <code>DimensionName</code> input parameter is not empty, the corresponding time series data is returned grouped by the specified query dimension. for example:</p><ul>when <code>DimensionName = origin-status-code</code>:<ul><li>the <code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li>the <code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul>.
<strong>Note</strong>: when specifying DimensionName during queries, concurrent calls are forbidden. if exceeded the query frequency limit, it will return an error <code><strong>InvalidParameter.ActionInProgress</strong></code>.
 */
class DescribeTimingL7OriginPullDataRequest extends AbstractModel
{
    /**
     * @var array Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
     */
    public $ZoneIds;

    /**
     * @var array Metric list. valid values:
<ul><li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server direction. measurement unit: Byte.</li>
<li>l7Flow_outBandwidth_hy: request bandwidth from EdgeOne node to origin server direction, measurement unit: bps;</li>.
<li>l7Flow_request_hy: number of requests in the EdgeOne node to origin server direction. unit: count.</li>.
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node direction, measurement unit: Byte.</li>.
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. measurement unit: bps.</li></ul>.
     */
    public $MetricNames;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     */
    public $EndTime;

    /**
     * @var string Time granularity of the query. valid values:.
<Ul><Li>Min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is within 2 hours, within 2 days, within 7 days, and exceeding 7 days.
     */
    public $Interval;

    /**
     * @var array Filter criteria. detailed filter criteria:.
<ul><li><strong>domain</strong>: the requested domain name from the client. if accessing EdgeOne via wildcard domain, the data records the wildcard domain name rather than the specific domain.</li><li><strong>originStatusCode</strong>: origin status code. this filter item is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.<br>the corresponding Value options are as follows:<ul><li><code>1xx</code>: status codes of the 1xx kind.</li><li><code>2xx</code>: status codes of the 2xx kind.</li><li><code>3xx</code>: status codes of the 3xx kind.</li><li><code>4xx</code>: status codes of the 4xx kind.</li><li><code>5xx</code>: status codes of the 5xx kind.</li><li>integer within range <code>[0, 600)</code> (excluding 600).</li></ul></li></ul>.
**Note**: when <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
     */
    public $Filters;

    /**
     * @var string <p>Query dimension name. valid values:</p><ul><li><strong>domain</strong>: the domain name requested by the client. if EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.<br>when using the domain dimension, the <code>Filters</code> must include the <code>domain</code> filter item, specifying a list of no more than 100 domain names to query.</li><li><strong>origin-status-code</strong>: origin status code, such as 200, 404.<br>this dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: origin status code category, such as 2xx, 4xx.<br>this dimension is supported only when <code>MetricNames =["l7Flow_request_hy"]</code>.</li></ul><p>if the <code>DimensionName</code> input parameter is empty, the data is aggregated by the <code>AppId</code> dimension by default, returning only one set of data.</p><p>if the <code>DimensionName</code> input parameter is not empty, the corresponding time series data is returned grouped by the specified query dimension. for example:</p><ul>when <code>DimensionName = origin-status-code</code>:<ul><li>the <code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li>the <code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul>.
<strong>Note</strong>: when specifying DimensionName during queries, concurrent calls are forbidden. if exceeded the query frequency limit, it will return an error <code><strong>InvalidParameter.ActionInProgress</strong></code>.
     */
    public $DimensionName;

    /**
     * @param array $ZoneIds Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
     * @param array $MetricNames Metric list. valid values:
<ul><li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server direction. measurement unit: Byte.</li>
<li>l7Flow_outBandwidth_hy: request bandwidth from EdgeOne node to origin server direction, measurement unit: bps;</li>.
<li>l7Flow_request_hy: number of requests in the EdgeOne node to origin server direction. unit: count.</li>.
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node direction, measurement unit: Byte.</li>.
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. measurement unit: bps.</li></ul>.
     * @param string $StartTime Start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param string $Interval Time granularity of the query. valid values:.
<Ul><Li>Min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is within 2 hours, within 2 days, within 7 days, and exceeding 7 days.
     * @param array $Filters Filter criteria. detailed filter criteria:.
<ul><li><strong>domain</strong>: the requested domain name from the client. if accessing EdgeOne via wildcard domain, the data records the wildcard domain name rather than the specific domain.</li><li><strong>originStatusCode</strong>: origin status code. this filter item is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.<br>the corresponding Value options are as follows:<ul><li><code>1xx</code>: status codes of the 1xx kind.</li><li><code>2xx</code>: status codes of the 2xx kind.</li><li><code>3xx</code>: status codes of the 3xx kind.</li><li><code>4xx</code>: status codes of the 4xx kind.</li><li><code>5xx</code>: status codes of the 5xx kind.</li><li>integer within range <code>[0, 600)</code> (excluding 600).</li></ul></li></ul>.
**Note**: when <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
     * @param string $DimensionName <p>Query dimension name. valid values:</p><ul><li><strong>domain</strong>: the domain name requested by the client. if EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.<br>when using the domain dimension, the <code>Filters</code> must include the <code>domain</code> filter item, specifying a list of no more than 100 domain names to query.</li><li><strong>origin-status-code</strong>: origin status code, such as 200, 404.<br>this dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: origin status code category, such as 2xx, 4xx.<br>this dimension is supported only when <code>MetricNames =["l7Flow_request_hy"]</code>.</li></ul><p>if the <code>DimensionName</code> input parameter is empty, the data is aggregated by the <code>AppId</code> dimension by default, returning only one set of data.</p><p>if the <code>DimensionName</code> input parameter is not empty, the corresponding time series data is returned grouped by the specified query dimension. for example:</p><ul>when <code>DimensionName = origin-status-code</code>:<ul><li>the <code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li>the <code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul>.
<strong>Note</strong>: when specifying DimensionName during queries, concurrent calls are forbidden. if exceeded the query frequency limit, it will return an error <code><strong>InvalidParameter.ActionInProgress</strong></code>.
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
        }
    }
}
