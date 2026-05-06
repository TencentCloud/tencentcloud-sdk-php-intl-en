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
 * @method array getMetricNames() Obtain Metric list. Valid values:
<ul><li>l7Flow_outFlux_hy: Request traffic from the EdgeOne node to the origin server. Unit: Byte.</li><li>l7Flow_outBandwidth_hy: Request bandwidth from the EdgeOne node to the origin server. Unit: bps.</li><li>l7Flow_request_hy: Number of requests from the EdgeOne node to the origin server. Unit: count.</li><li>l7Flow_inFlux_hy: Response traffic from the origin server to the EdgeOne node. Unit: Byte.</li><li>l7Flow_inBandwidth_hy: Response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li></ul>
 * @method void setMetricNames(array $MetricNames) Set Metric list. Valid values:
<ul><li>l7Flow_outFlux_hy: Request traffic from the EdgeOne node to the origin server. Unit: Byte.</li><li>l7Flow_outBandwidth_hy: Request bandwidth from the EdgeOne node to the origin server. Unit: bps.</li><li>l7Flow_request_hy: Number of requests from the EdgeOne node to the origin server. Unit: count.</li><li>l7Flow_inFlux_hy: Response traffic from the origin server to the EdgeOne node. Unit: Byte.</li><li>l7Flow_inBandwidth_hy: Response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li></ul>
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>If this parameter is not specified, the granularity will be automatically inferred based on the time range between the start time and end time. Specifically, the granularity will be min, 5min, hour, and day when the time range is within 2 hours, within 2 days, within 7 days, and exceeding 7 days, respectively.
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>If this parameter is not specified, the granularity will be automatically inferred based on the time range between the start time and end time. Specifically, the granularity will be min, 5min, hour, and day when the time range is within 2 hours, within 2 days, within 7 days, and exceeding 7 days, respectively.
 * @method array getFilters() Obtain Filter criteria. Detailed filter criteria:
<ul><li><strong>domain</strong>: The requested domain name from the client. If accessing EdgeOne via a wildcard domain, the data records the wildcard domain name rather than the specific subdomain.</li><li><strong>originStatusCode</strong>: Origin status code. This filter is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.
Valid values:<ul><li><code>1xx</code>: Status codes in the 1xx range.</li><li><code>2xx</code>: Status codes in the 2xx range.</li><li><code>3xx</code>: Status codes in the 3xx range.</li><li><code>4xx</code>: Status codes in the 4xx range.</li><li><code>5xx</code>: Status codes in the 5xx range.</li><li>Any integer in the range <code>[0, 600)</code>.</li></ul></li></ul>**Note**: When <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
 * @method void setFilters(array $Filters) Set Filter criteria. Detailed filter criteria:
<ul><li><strong>domain</strong>: The requested domain name from the client. If accessing EdgeOne via a wildcard domain, the data records the wildcard domain name rather than the specific subdomain.</li><li><strong>originStatusCode</strong>: Origin status code. This filter is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.
Valid values:<ul><li><code>1xx</code>: Status codes in the 1xx range.</li><li><code>2xx</code>: Status codes in the 2xx range.</li><li><code>3xx</code>: Status codes in the 3xx range.</li><li><code>4xx</code>: Status codes in the 4xx range.</li><li><code>5xx</code>: Status codes in the 5xx range.</li><li>Any integer in the range <code>[0, 600)</code>.</li></ul></li></ul>**Note**: When <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
 * @method string getDimensionName() Obtain Query dimension name. Valid values:
<ul><li><strong>domain</strong>: The domain name requested by the client. If EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.
When using the domain dimension, the <code>Filters</code> parameter must include the <code>domain</code> filter item, specifying a list of up to 100 domain names.</li><li><strong>origin-status-code</strong>: Origin status code, such as 200 or 404.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: Origin status code category, such as 2xx or 4xx.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li></ul><p>If <code>DimensionName</code> is left empty, data is aggregated by the <code>AppId</code> dimension by default, returning a single set of data.</p><p>If <code>DimensionName</code> is specified, time series data is returned grouped by the specified dimension. For example:</p><ul>When <code>DimensionName = origin-status-code</code>:<ul><li><code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li><code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul><p><strong>Note</strong>: When <code>DimensionName</code> is specified, concurrent calls are not allowed. Exceeding the query rate limit will return the error <code><strong>InvalidParameter.ActionInProgress</strong></code>.</p>
 * @method void setDimensionName(string $DimensionName) Set Query dimension name. Valid values:
<ul><li><strong>domain</strong>: The domain name requested by the client. If EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.
When using the domain dimension, the <code>Filters</code> parameter must include the <code>domain</code> filter item, specifying a list of up to 100 domain names.</li><li><strong>origin-status-code</strong>: Origin status code, such as 200 or 404.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: Origin status code category, such as 2xx or 4xx.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li></ul><p>If <code>DimensionName</code> is left empty, data is aggregated by the <code>AppId</code> dimension by default, returning a single set of data.</p><p>If <code>DimensionName</code> is specified, time series data is returned grouped by the specified dimension. For example:</p><ul>When <code>DimensionName = origin-status-code</code>:<ul><li><code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li><code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul><p><strong>Note</strong>: When <code>DimensionName</code> is specified, concurrent calls are not allowed. Exceeding the query rate limit will return the error <code><strong>InvalidParameter.ActionInProgress</strong></code>.</p>
 */
class DescribeTimingL7OriginPullDataRequest extends AbstractModel
{
    /**
     * @var array Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
     */
    public $ZoneIds;

    /**
     * @var array Metric list. Valid values:
<ul><li>l7Flow_outFlux_hy: Request traffic from the EdgeOne node to the origin server. Unit: Byte.</li><li>l7Flow_outBandwidth_hy: Request bandwidth from the EdgeOne node to the origin server. Unit: bps.</li><li>l7Flow_request_hy: Number of requests from the EdgeOne node to the origin server. Unit: count.</li><li>l7Flow_inFlux_hy: Response traffic from the origin server to the EdgeOne node. Unit: Byte.</li><li>l7Flow_inBandwidth_hy: Response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li></ul>
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
     * @var string Time granularity of the query. Valid values:
<ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>If this parameter is not specified, the granularity will be automatically inferred based on the time range between the start time and end time. Specifically, the granularity will be min, 5min, hour, and day when the time range is within 2 hours, within 2 days, within 7 days, and exceeding 7 days, respectively.
     */
    public $Interval;

    /**
     * @var array Filter criteria. Detailed filter criteria:
<ul><li><strong>domain</strong>: The requested domain name from the client. If accessing EdgeOne via a wildcard domain, the data records the wildcard domain name rather than the specific subdomain.</li><li><strong>originStatusCode</strong>: Origin status code. This filter is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.
Valid values:<ul><li><code>1xx</code>: Status codes in the 1xx range.</li><li><code>2xx</code>: Status codes in the 2xx range.</li><li><code>3xx</code>: Status codes in the 3xx range.</li><li><code>4xx</code>: Status codes in the 4xx range.</li><li><code>5xx</code>: Status codes in the 5xx range.</li><li>Any integer in the range <code>[0, 600)</code>.</li></ul></li></ul>**Note**: When <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
     */
    public $Filters;

    /**
     * @var string Query dimension name. Valid values:
<ul><li><strong>domain</strong>: The domain name requested by the client. If EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.
When using the domain dimension, the <code>Filters</code> parameter must include the <code>domain</code> filter item, specifying a list of up to 100 domain names.</li><li><strong>origin-status-code</strong>: Origin status code, such as 200 or 404.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: Origin status code category, such as 2xx or 4xx.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li></ul><p>If <code>DimensionName</code> is left empty, data is aggregated by the <code>AppId</code> dimension by default, returning a single set of data.</p><p>If <code>DimensionName</code> is specified, time series data is returned grouped by the specified dimension. For example:</p><ul>When <code>DimensionName = origin-status-code</code>:<ul><li><code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li><code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul><p><strong>Note</strong>: When <code>DimensionName</code> is specified, concurrent calls are not allowed. Exceeding the query rate limit will return the error <code><strong>InvalidParameter.ActionInProgress</strong></code>.</p>
     */
    public $DimensionName;

    /**
     * @param array $ZoneIds Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this API.
     * @param array $MetricNames Metric list. Valid values:
<ul><li>l7Flow_outFlux_hy: Request traffic from the EdgeOne node to the origin server. Unit: Byte.</li><li>l7Flow_outBandwidth_hy: Request bandwidth from the EdgeOne node to the origin server. Unit: bps.</li><li>l7Flow_request_hy: Number of requests from the EdgeOne node to the origin server. Unit: count.</li><li>l7Flow_inFlux_hy: Response traffic from the origin server to the EdgeOne node. Unit: Byte.</li><li>l7Flow_inBandwidth_hy: Response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li></ul>
     * @param string $StartTime Start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param string $Interval Time granularity of the query. Valid values:
<ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>If this parameter is not specified, the granularity will be automatically inferred based on the time range between the start time and end time. Specifically, the granularity will be min, 5min, hour, and day when the time range is within 2 hours, within 2 days, within 7 days, and exceeding 7 days, respectively.
     * @param array $Filters Filter criteria. Detailed filter criteria:
<ul><li><strong>domain</strong>: The requested domain name from the client. If accessing EdgeOne via a wildcard domain, the data records the wildcard domain name rather than the specific subdomain.</li><li><strong>originStatusCode</strong>: Origin status code. This filter is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.
Valid values:<ul><li><code>1xx</code>: Status codes in the 1xx range.</li><li><code>2xx</code>: Status codes in the 2xx range.</li><li><code>3xx</code>: Status codes in the 3xx range.</li><li><code>4xx</code>: Status codes in the 4xx range.</li><li><code>5xx</code>: Status codes in the 5xx range.</li><li>Any integer in the range <code>[0, 600)</code>.</li></ul></li></ul>**Note**: When <code>DimensionName</code> is not empty, only the <code>equals</code> operator is supported.
     * @param string $DimensionName Query dimension name. Valid values:
<ul><li><strong>domain</strong>: The domain name requested by the client. If EdgeOne is accessed via a wildcard domain name, the data records the wildcard domain name.
When using the domain dimension, the <code>Filters</code> parameter must include the <code>domain</code> filter item, specifying a list of up to 100 domain names.</li><li><strong>origin-status-code</strong>: Origin status code, such as 200 or 404.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li><li><strong>origin-status-code-category</strong>: Origin status code category, such as 2xx or 4xx.
This dimension is supported only when <code>MetricNames = ["l7Flow_request_hy"]</code>.</li></ul><p>If <code>DimensionName</code> is left empty, data is aggregated by the <code>AppId</code> dimension by default, returning a single set of data.</p><p>If <code>DimensionName</code> is specified, time series data is returned grouped by the specified dimension. For example:</p><ul>When <code>DimensionName = origin-status-code</code>:<ul><li><code>TimingDataRecords.TypeKey</code> in the returned data is the specific origin status code, such as 200.</li><li><code>TimingDataRecords.TypeValue</code> in the returned data is the time series data corresponding to that status code.</li></ul></ul><p><strong>Note</strong>: When <code>DimensionName</code> is specified, concurrent calls are not allowed. Exceeding the query rate limit will return the error <code><strong>InvalidParameter.ActionInProgress</strong></code>.</p>
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
