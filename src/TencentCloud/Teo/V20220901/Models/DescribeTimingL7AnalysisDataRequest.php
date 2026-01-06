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
 * DescribeTimingL7AnalysisData request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method array getMetricNames() Obtain Metric list. Valid values:
<Li>l7Flow_outFlux: L7 EdgeOne response traffic. Unit: byte;</li><Li>l7Flow_inFlux: L7 client request traffic. Unit: byte;</li><Li>l7Flow_flux: L7 total traffic (including EdgeOne response traffic and client request traffic). Unit: byte;</li><Li>l7Flow_outBandwidth: L7 EdgeOne response bandwidth. Unit: bps;</li><Li>l7Flow_inBandwidth: L7 client request bandwidth. Unit: bps;</li><Li>l7Flow_bandwidth: L7 total bandwidth (including EdgeOne response bandwidth and client request bandwidth). Unit: bps;</li><Li>l7Flow_request: L7 request count. Unit: times;</li><Li>l7Flow_avgResponseTime: Average L7 edge response time. Unit: ms (milliseconds);</li><Li>l7Flow_avgFirstByteResponseTime: Average L7 edge first byte response time. Unit: ms.</li>
 * @method void setMetricNames(array $MetricNames) Set Metric list. Valid values:
<Li>l7Flow_outFlux: L7 EdgeOne response traffic. Unit: byte;</li><Li>l7Flow_inFlux: L7 client request traffic. Unit: byte;</li><Li>l7Flow_flux: L7 total traffic (including EdgeOne response traffic and client request traffic). Unit: byte;</li><Li>l7Flow_outBandwidth: L7 EdgeOne response bandwidth. Unit: bps;</li><Li>l7Flow_inBandwidth: L7 client request bandwidth. Unit: bps;</li><Li>l7Flow_bandwidth: L7 total bandwidth (including EdgeOne response bandwidth and client request bandwidth). Unit: bps;</li><Li>l7Flow_request: L7 request count. Unit: times;</li><Li>l7Flow_avgResponseTime: Average L7 edge response time. Unit: ms (milliseconds);</li><Li>l7Flow_avgFirstByteResponseTime: Average L7 edge first byte response time. Unit: ms.</li>
 * @method array getZoneIds() Obtain Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.com/document/product/1145/59980). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.com/document/product/1145/59980). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
 * @method string getInterval() Obtain Query period granularity. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not filled in, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
 * @method void setInterval(string $Interval) Set Query period granularity. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not filled in, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
 * @method array getFilters() Obtain Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
 * @method void setFilters(array $Filters) Set Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
 * @method string getArea() Obtain Data ownership region. this parameter is deprecated. please filter data by client region in `Filters.country`.
 * @method void setArea(string $Area) Set Data ownership region. this parameter is deprecated. please filter data by client region in `Filters.country`.
 */
class DescribeTimingL7AnalysisDataRequest extends AbstractModel
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
     * @var array Metric list. Valid values:
<Li>l7Flow_outFlux: L7 EdgeOne response traffic. Unit: byte;</li><Li>l7Flow_inFlux: L7 client request traffic. Unit: byte;</li><Li>l7Flow_flux: L7 total traffic (including EdgeOne response traffic and client request traffic). Unit: byte;</li><Li>l7Flow_outBandwidth: L7 EdgeOne response bandwidth. Unit: bps;</li><Li>l7Flow_inBandwidth: L7 client request bandwidth. Unit: bps;</li><Li>l7Flow_bandwidth: L7 total bandwidth (including EdgeOne response bandwidth and client request bandwidth). Unit: bps;</li><Li>l7Flow_request: L7 request count. Unit: times;</li><Li>l7Flow_avgResponseTime: Average L7 edge response time. Unit: ms (milliseconds);</li><Li>l7Flow_avgFirstByteResponseTime: Average L7 edge first byte response time. Unit: ms.</li>
     */
    public $MetricNames;

    /**
     * @var array Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.com/document/product/1145/59980). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
     */
    public $ZoneIds;

    /**
     * @var string Query period granularity. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not filled in, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
     */
    public $Interval;

    /**
     * @var array Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
     */
    public $Filters;

    /**
     * @var string Data ownership region. this parameter is deprecated. please filter data by client region in `Filters.country`.
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param array $MetricNames Metric list. Valid values:
<Li>l7Flow_outFlux: L7 EdgeOne response traffic. Unit: byte;</li><Li>l7Flow_inFlux: L7 client request traffic. Unit: byte;</li><Li>l7Flow_flux: L7 total traffic (including EdgeOne response traffic and client request traffic). Unit: byte;</li><Li>l7Flow_outBandwidth: L7 EdgeOne response bandwidth. Unit: bps;</li><Li>l7Flow_inBandwidth: L7 client request bandwidth. Unit: bps;</li><Li>l7Flow_bandwidth: L7 total bandwidth (including EdgeOne response bandwidth and client request bandwidth). Unit: bps;</li><Li>l7Flow_request: L7 request count. Unit: times;</li><Li>l7Flow_avgResponseTime: Average L7 edge response time. Unit: ms (milliseconds);</li><Li>l7Flow_avgFirstByteResponseTime: Average L7 edge first byte response time. Unit: ms.</li>
     * @param array $ZoneIds Site ID set. this parameter will change from option to required after may 30, 2024. for details, see the notice: [tencent cloud EdgeOne API change notification](https://www.tencentcloud.com/document/product/1145/59980). a maximum of 100 site ids can be imported. use `*` to query all site data under the tencent cloud root account. querying account-level data requires all resource permissions for all sites in this interface.
     * @param string $Interval Query period granularity. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not filled in, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
     * @param array $Filters Filter criteria used when filtering data. valid values refer to the available filter options for L7 access traffic, bandwidth, and request count in the [metric analysis filtering condition description](https://www.tencentcloud.com/document/product/1145/56985#1aaf1150-55a4-4b4d-b103-3a8317ac7945).
If needed, limit the site or content identifier by importing the corresponding value in the `ZoneIds.N` parameter.
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

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
