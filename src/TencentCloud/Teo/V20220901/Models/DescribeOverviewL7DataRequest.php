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
 * DescribeOverviewL7Data request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method array getMetricNames() Obtain Queried metric. Valid values:
<li>l7Flow_outFlux: EdgeOne response traffic;</li>
<li>l7Flow_inFlux: EdgeOne request traffic;</li>
<li>l7Flow_outBandwidth: EdgeOne response bandwidth;</li>
<li>l7Flow_inBandwidth: EdgeOne request traffic;</li>
<li>l7Flow_hit_outFlux: cache hit traffic;</li>
<li>l7Flow_request: number of access requests;</li>
<li>l7Flow_flux: upstream and downstream traffic of access requests;</li>
<li>l7Flow_bandwidth: upstream and downstream bandwidths of access requests.</li>
 * @method void setMetricNames(array $MetricNames) Set Queried metric. Valid values:
<li>l7Flow_outFlux: EdgeOne response traffic;</li>
<li>l7Flow_inFlux: EdgeOne request traffic;</li>
<li>l7Flow_outBandwidth: EdgeOne response bandwidth;</li>
<li>l7Flow_inBandwidth: EdgeOne request traffic;</li>
<li>l7Flow_hit_outFlux: cache hit traffic;</li>
<li>l7Flow_request: number of access requests;</li>
<li>l7Flow_flux: upstream and downstream traffic of access requests;</li>
<li>l7Flow_bandwidth: upstream and downstream bandwidths of access requests.</li>
 * @method array getZoneIds() Obtain Site ID set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter is required.
 * @method array getDomains() Obtain Queried domain name set. This parameter has been deprecated.
 * @method void setDomains(array $Domains) Set Queried domain name set. This parameter has been deprecated.
 * @method string getProtocol() Obtain Protocol type of the query. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol;</li>
<li>http2: HTTP/2 protocol;</li>
<li>all: all protocols.</li>If this parameter is not input, the default value `all` is used. This parameter is not yet effective.
 * @method void setProtocol(string $Protocol) Set Protocol type of the query. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol;</li>
<li>http2: HTTP/2 protocol;</li>
<li>all: all protocols.</li>If this parameter is not input, the default value `all` is used. This parameter is not yet effective.
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.
 * @method array getFilters() Obtain Filter criteria. The detailed Key values of filter criteria are as follows:
<li>socket:<br>   Filter by [<strong>HTTP protocol type</strong>].<br>   Valid values:<br>   HTTP: HTTP protocol; <br>   HTTPS: HTTPS protocol;<br>   QUIC: QUIC protocol.</li>
<li>domain<br>?? Filter by [<strong>domain name</strong>].</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The detailed Key values of filter criteria are as follows:
<li>socket:<br>   Filter by [<strong>HTTP protocol type</strong>].<br>   Valid values:<br>   HTTP: HTTP protocol; <br>   HTTPS: HTTPS protocol;<br>   QUIC: QUIC protocol.</li>
<li>domain<br>?? Filter by [<strong>domain name</strong>].</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].</li>
 * @method string getArea() Obtain Data ownership area. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data.</li>If this parameter is not input, the default value `global` is used.
 * @method void setArea(string $Area) Set Data ownership area. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data.</li>If this parameter is not input, the default value `global` is used.
 */
class DescribeOverviewL7DataRequest extends AbstractModel
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
     * @var array Queried metric. Valid values:
<li>l7Flow_outFlux: EdgeOne response traffic;</li>
<li>l7Flow_inFlux: EdgeOne request traffic;</li>
<li>l7Flow_outBandwidth: EdgeOne response bandwidth;</li>
<li>l7Flow_inBandwidth: EdgeOne request traffic;</li>
<li>l7Flow_hit_outFlux: cache hit traffic;</li>
<li>l7Flow_request: number of access requests;</li>
<li>l7Flow_flux: upstream and downstream traffic of access requests;</li>
<li>l7Flow_bandwidth: upstream and downstream bandwidths of access requests.</li>
     */
    public $MetricNames;

    /**
     * @var array Site ID set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var array Queried domain name set. This parameter has been deprecated.
     */
    public $Domains;

    /**
     * @var string Protocol type of the query. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol;</li>
<li>http2: HTTP/2 protocol;</li>
<li>all: all protocols.</li>If this parameter is not input, the default value `all` is used. This parameter is not yet effective.
     */
    public $Protocol;

    /**
     * @var string Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.
     */
    public $Interval;

    /**
     * @var array Filter criteria. The detailed Key values of filter criteria are as follows:
<li>socket:<br>   Filter by [<strong>HTTP protocol type</strong>].<br>   Valid values:<br>   HTTP: HTTP protocol; <br>   HTTPS: HTTPS protocol;<br>   QUIC: QUIC protocol.</li>
<li>domain<br>?? Filter by [<strong>domain name</strong>].</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].</li>
     */
    public $Filters;

    /**
     * @var string Data ownership area. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data.</li>If this parameter is not input, the default value `global` is used.
     */
    public $Area;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param array $MetricNames Queried metric. Valid values:
<li>l7Flow_outFlux: EdgeOne response traffic;</li>
<li>l7Flow_inFlux: EdgeOne request traffic;</li>
<li>l7Flow_outBandwidth: EdgeOne response bandwidth;</li>
<li>l7Flow_inBandwidth: EdgeOne request traffic;</li>
<li>l7Flow_hit_outFlux: cache hit traffic;</li>
<li>l7Flow_request: number of access requests;</li>
<li>l7Flow_flux: upstream and downstream traffic of access requests;</li>
<li>l7Flow_bandwidth: upstream and downstream bandwidths of access requests.</li>
     * @param array $ZoneIds Site ID set. This parameter is required.
     * @param array $Domains Queried domain name set. This parameter has been deprecated.
     * @param string $Protocol Protocol type of the query. Valid values:
<li>http: HTTP protocol;</li>
<li>https: HTTPS protocol;</li>
<li>http2: HTTP/2 protocol;</li>
<li>all: all protocols.</li>If this parameter is not input, the default value `all` is used. This parameter is not yet effective.
     * @param string $Interval Time granularity of the query. Valid values:
<li>min: 1 minute;</li>
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.
     * @param array $Filters Filter criteria. The detailed Key values of filter criteria are as follows:
<li>socket:<br>   Filter by [<strong>HTTP protocol type</strong>].<br>   Valid values:<br>   HTTP: HTTP protocol; <br>   HTTPS: HTTPS protocol;<br>   QUIC: QUIC protocol.</li>
<li>domain<br>?? Filter by [<strong>domain name</strong>].</li>
<li>tagKey<br>?? Filter by [<strong>tag key</strong>].</li>
<li>tagValue<br>?? Filter by [<strong>tag value</strong>].</li>
     * @param string $Area Data ownership area. Valid values:
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

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
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
