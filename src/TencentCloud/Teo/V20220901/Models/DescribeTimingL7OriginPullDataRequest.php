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
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method array getMetricNames() Obtain Metric list. Valid values:.
<li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server. Unit: byte.</li>
<li>l7Flow_outBandwidth_hy: specifies the request bandwidth from EdgeOne node to origin server. Unit: bps.</li>
<li>l7Flow_request_hy: specifies the request count from EdgeOne node to origin server. Unit: times.</li>
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node. Unit: byte.</li>
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li>

 * @method void setMetricNames(array $MetricNames) Set Metric list. Valid values:.
<li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server. Unit: byte.</li>
<li>l7Flow_outBandwidth_hy: specifies the request bandwidth from EdgeOne node to origin server. Unit: bps.</li>
<li>l7Flow_request_hy: specifies the request count from EdgeOne node to origin server. Unit: times.</li>
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node. Unit: byte.</li>
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li>

 * @method array getZoneIds() Obtain Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this interface.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this interface.
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<Li>min: 1 minute.</li><Li>5min: 5 minutes;</li><Li>hour: 1 hour;</li><li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<Li>min: 1 minute.</li><Li>5min: 5 minutes;</li><Li>hour: 1 hour;</li><li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
 * @method array getFilters() Obtain Filter conditions. Details:
<li>domain: specifies the domain name in client requests. When the domain is onboarded via a wildcard, the recorded value is the wildcard domain itself, not the specific subdomain.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. Details:
<li>domain: specifies the domain name in client requests. When the domain is onboarded via a wildcard, the recorded value is the wildcard domain itself, not the specific subdomain.</li>
 */
class DescribeTimingL7OriginPullDataRequest extends AbstractModel
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
     * @var array Metric list. Valid values:.
<li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server. Unit: byte.</li>
<li>l7Flow_outBandwidth_hy: specifies the request bandwidth from EdgeOne node to origin server. Unit: bps.</li>
<li>l7Flow_request_hy: specifies the request count from EdgeOne node to origin server. Unit: times.</li>
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node. Unit: byte.</li>
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li>

     */
    public $MetricNames;

    /**
     * @var array Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this interface.
     */
    public $ZoneIds;

    /**
     * @var string Time granularity of the query. Valid values:
<Li>min: 1 minute.</li><Li>5min: 5 minutes;</li><Li>hour: 1 hour;</li><li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
     */
    public $Interval;

    /**
     * @var array Filter conditions. Details:
<li>domain: specifies the domain name in client requests. When the domain is onboarded via a wildcard, the recorded value is the wildcard domain itself, not the specific subdomain.</li>
     */
    public $Filters;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param array $MetricNames Metric list. Valid values:.
<li>l7Flow_outFlux_hy: specifies the request traffic from the EdgeOne node to the origin server. Unit: byte.</li>
<li>l7Flow_outBandwidth_hy: specifies the request bandwidth from EdgeOne node to origin server. Unit: bps.</li>
<li>l7Flow_request_hy: specifies the request count from EdgeOne node to origin server. Unit: times.</li>
<li>l7Flow_inFlux_hy: specifies the response traffic from the origin server to the EdgeOne node. Unit: byte.</li>
<li>l7Flow_inBandwidth_hy: specifies the response bandwidth from the origin server to the EdgeOne node. Unit: bps.</li>

     * @param array $ZoneIds Site ID set. This parameter is required. A maximum of 100 zone-ids can be imported. Use `*` to query data for all sites under the Tencent Cloud root account. Querying account-level data requires permissions for all site resources in this interface.
     * @param string $Interval Time granularity of the query. Valid values:
<Li>min: 1 minute.</li><Li>5min: 5 minutes;</li><Li>hour: 1 hour;</li><li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of min, 5min, hour, and day respectively when the period is no more than 2 hours, no more than 2 days, no more than 7 days, and over 7 days.
     * @param array $Filters Filter conditions. Details:
<li>domain: specifies the domain name in client requests. When the domain is onboarded via a wildcard, the recorded value is the wildcard domain itself, not the specific subdomain.</li>
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
    }
}
