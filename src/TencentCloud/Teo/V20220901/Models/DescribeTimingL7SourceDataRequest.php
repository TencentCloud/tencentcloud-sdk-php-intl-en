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
 * DescribeTimingL7SourceData request structure.
 *
 * @method string getStartTime() Obtain Start time of the query period.
 * @method void setStartTime(string $StartTime) Set Start time of the query period.
 * @method string getEndTime() Obtain End time of the query period.
 * @method void setEndTime(string $EndTime) Set End time of the query period.
 * @method array getMetricNames() Obtain List of metrics. Values:
<li>`l7Flow_outFlux_hy`: EdgeOne request traffic</li>
<li>`l7Flow_outBandwidth_hy`: EdgeOne request bandwidth</li>
<li>`l7Flow_inFlux_hy`: Origin response traffic</li>
<li>`l7Flow_inBandwidth_hy`: Origin response bandwidth</li>
<li>`l7Flow_request_hy`: Origin-pull requests</li>
 * @method void setMetricNames(array $MetricNames) Set List of metrics. Values:
<li>`l7Flow_outFlux_hy`: EdgeOne request traffic</li>
<li>`l7Flow_outBandwidth_hy`: EdgeOne request bandwidth</li>
<li>`l7Flow_inFlux_hy`: Origin response traffic</li>
<li>`l7Flow_inBandwidth_hy`: Origin response bandwidth</li>
<li>`l7Flow_request_hy`: Origin-pull requests</li>
 * @method array getZoneIds() Obtain List of sites to be queried. All sites will be selected if this field is not specified.
 * @method void setZoneIds(array $ZoneIds) Set List of sites to be queried. All sites will be selected if this field is not specified.
 * @method string getInterval() Obtain The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity is determined based on the query period. **Query period < 1 hour**: 1-minute granularity; **1 hour < query period < 2 days**: 5-minute granularity; **2 days < query period < 7 days**: 1 hour granularity; **Query period > 7 days**: 1 day granularity.
 * @method void setInterval(string $Interval) Set The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity is determined based on the query period. **Query period < 1 hour**: 1-minute granularity; **1 hour < query period < 2 days**: 5-minute granularity; **2 days < query period < 7 days**: 1 hour granularity; **Query period > 7 days**: 1 day granularity.
 * @method array getFilters() Obtain Filter conditions. See below for details: 
<li>`domain`:<br>   Filter by <strong>the origin domain</strong><br>   Type: String<br>   Required: No</li>
<li>`origin`:<br>   Filter by <strong>the origin</strong><br>   Type: String<br>   Required: No</li>
<li>`originGroup`:<br>   Filter by <strong>the origin group</strong>, such as origin-xxxxx.<br>   Type: String<br>   Required: No</li>
<li>`flowType`:<br>   Filter by <strong>the origin response type</strong>. This parameter takes precedence over `MetricNames.N`.<br>   Type: String<br>   Required: No<br>   Values:<br>   `inFlow`: Origin response data, corresponding to `l7Flow_inFlux_hy`, `l7Flow_inBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.<br>   `outFlow`: EdgeOne request data, corresponding to `l7Flow_outFlux_hy`, `l7Flow_outBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. See below for details: 
<li>`domain`:<br>   Filter by <strong>the origin domain</strong><br>   Type: String<br>   Required: No</li>
<li>`origin`:<br>   Filter by <strong>the origin</strong><br>   Type: String<br>   Required: No</li>
<li>`originGroup`:<br>   Filter by <strong>the origin group</strong>, such as origin-xxxxx.<br>   Type: String<br>   Required: No</li>
<li>`flowType`:<br>   Filter by <strong>the origin response type</strong>. This parameter takes precedence over `MetricNames.N`.<br>   Type: String<br>   Required: No<br>   Values:<br>   `inFlow`: Origin response data, corresponding to `l7Flow_inFlux_hy`, `l7Flow_inBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.<br>   `outFlow`: EdgeOne request data, corresponding to `l7Flow_outFlux_hy`, `l7Flow_outBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.</li>
 * @method string getArea() Obtain Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 * @method void setArea(string $Area) Set Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 */
class DescribeTimingL7SourceDataRequest extends AbstractModel
{
    /**
     * @var string Start time of the query period.
     */
    public $StartTime;

    /**
     * @var string End time of the query period.
     */
    public $EndTime;

    /**
     * @var array List of metrics. Values:
<li>`l7Flow_outFlux_hy`: EdgeOne request traffic</li>
<li>`l7Flow_outBandwidth_hy`: EdgeOne request bandwidth</li>
<li>`l7Flow_inFlux_hy`: Origin response traffic</li>
<li>`l7Flow_inBandwidth_hy`: Origin response bandwidth</li>
<li>`l7Flow_request_hy`: Origin-pull requests</li>
     */
    public $MetricNames;

    /**
     * @var array List of sites to be queried. All sites will be selected if this field is not specified.
     */
    public $ZoneIds;

    /**
     * @var string The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity is determined based on the query period. **Query period < 1 hour**: 1-minute granularity; **1 hour < query period < 2 days**: 5-minute granularity; **2 days < query period < 7 days**: 1 hour granularity; **Query period > 7 days**: 1 day granularity.
     */
    public $Interval;

    /**
     * @var array Filter conditions. See below for details: 
<li>`domain`:<br>   Filter by <strong>the origin domain</strong><br>   Type: String<br>   Required: No</li>
<li>`origin`:<br>   Filter by <strong>the origin</strong><br>   Type: String<br>   Required: No</li>
<li>`originGroup`:<br>   Filter by <strong>the origin group</strong>, such as origin-xxxxx.<br>   Type: String<br>   Required: No</li>
<li>`flowType`:<br>   Filter by <strong>the origin response type</strong>. This parameter takes precedence over `MetricNames.N`.<br>   Type: String<br>   Required: No<br>   Values:<br>   `inFlow`: Origin response data, corresponding to `l7Flow_inFlux_hy`, `l7Flow_inBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.<br>   `outFlow`: EdgeOne request data, corresponding to `l7Flow_outFlux_hy`, `l7Flow_outBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.</li>
     */
    public $Filters;

    /**
     * @var string Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
     */
    public $Area;

    /**
     * @param string $StartTime Start time of the query period.
     * @param string $EndTime End time of the query period.
     * @param array $MetricNames List of metrics. Values:
<li>`l7Flow_outFlux_hy`: EdgeOne request traffic</li>
<li>`l7Flow_outBandwidth_hy`: EdgeOne request bandwidth</li>
<li>`l7Flow_inFlux_hy`: Origin response traffic</li>
<li>`l7Flow_inBandwidth_hy`: Origin response bandwidth</li>
<li>`l7Flow_request_hy`: Origin-pull requests</li>
     * @param array $ZoneIds List of sites to be queried. All sites will be selected if this field is not specified.
     * @param string $Interval The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity is determined based on the query period. **Query period < 1 hour**: 1-minute granularity; **1 hour < query period < 2 days**: 5-minute granularity; **2 days < query period < 7 days**: 1 hour granularity; **Query period > 7 days**: 1 day granularity.
     * @param array $Filters Filter conditions. See below for details: 
<li>`domain`:<br>   Filter by <strong>the origin domain</strong><br>   Type: String<br>   Required: No</li>
<li>`origin`:<br>   Filter by <strong>the origin</strong><br>   Type: String<br>   Required: No</li>
<li>`originGroup`:<br>   Filter by <strong>the origin group</strong>, such as origin-xxxxx.<br>   Type: String<br>   Required: No</li>
<li>`flowType`:<br>   Filter by <strong>the origin response type</strong>. This parameter takes precedence over `MetricNames.N`.<br>   Type: String<br>   Required: No<br>   Values:<br>   `inFlow`: Origin response data, corresponding to `l7Flow_inFlux_hy`, `l7Flow_inBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.<br>   `outFlow`: EdgeOne request data, corresponding to `l7Flow_outFlux_hy`, `l7Flow_outBandwidth_hy` and `l7Flow_request_hy` in `MetricNames.N`.</li>
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
