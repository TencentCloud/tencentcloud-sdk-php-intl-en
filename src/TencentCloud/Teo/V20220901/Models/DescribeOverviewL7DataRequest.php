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
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time.
 * @method void setEndTime(string $EndTime) Set The end time.
 * @method array getMetricNames() Obtain The query metric. Values:
<li>`l7Flow_outFlux`: Access traffic;</li>
<li>`l7Flow_request`: Access requests;</li>
<li>`l7Flow_outBandwidth`: Access bandwidth.</li>
<li>`l7Flow_hit_outFlux`: Cache hit traffic.</li>
 * @method void setMetricNames(array $MetricNames) Set The query metric. Values:
<li>`l7Flow_outFlux`: Access traffic;</li>
<li>`l7Flow_request`: Access requests;</li>
<li>`l7Flow_outBandwidth`: Access bandwidth.</li>
<li>`l7Flow_hit_outFlux`: Cache hit traffic.</li>
 * @method array getZoneIds() Obtain List of sites
Enter the IDs of sites to query. The maximum query period is determined by the <a href="https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1#edgeone-.E5.A5.97.E9.A4.90">max data query period</a> of the bound plan. If it's not specified, all sites are selected by default, and the query period must be within the last 30 days. 
 * @method void setZoneIds(array $ZoneIds) Set List of sites
Enter the IDs of sites to query. The maximum query period is determined by the <a href="https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1#edgeone-.E5.A5.97.E9.A4.90">max data query period</a> of the bound plan. If it's not specified, all sites are selected by default, and the query period must be within the last 30 days. 
 * @method array getDomains() Obtain List of subdomain names to be queried. All subdomain names will be selected if this field is not specified.
 * @method void setDomains(array $Domains) Set List of subdomain names to be queried. All subdomain names will be selected if this field is not specified.
 * @method string getProtocol() Obtain The protocol type. Values:
<li>`http`: HTTP protocol;</li>
<li>`https`: HTTPS protocol;</li>
<li>`http2`: HTTP2 protocol;</li>
<li>`all`:   All protocols. </li>If it's not specified, `all` is used. This parameter is not yet available now.
 * @method void setProtocol(string $Protocol) Set The protocol type. Values:
<li>`http`: HTTP protocol;</li>
<li>`https`: HTTPS protocol;</li>
<li>`http2`: HTTP2 protocol;</li>
<li>`all`:   All protocols. </li>If it's not specified, `all` is used. This parameter is not yet available now.
 * @method string getInterval() Obtain The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: One day</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < Period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.
 * @method void setInterval(string $Interval) Set The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: One day</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < Period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.
 * @method array getFilters() Obtain Filters
<li>tagKey<br>   Filter by the specified <strong>tag key</strong></li>
<li>tagValue<br>   Filter by the specified <strong>tag value</strong></li>
 * @method void setFilters(array $Filters) Set Filters
<li>tagKey<br>   Filter by the specified <strong>tag key</strong></li>
<li>tagValue<br>   Filter by the specified <strong>tag value</strong></li>
 * @method string getArea() Obtain Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 * @method void setArea(string $Area) Set Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 */
class DescribeOverviewL7DataRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string The end time.
     */
    public $EndTime;

    /**
     * @var array The query metric. Values:
<li>`l7Flow_outFlux`: Access traffic;</li>
<li>`l7Flow_request`: Access requests;</li>
<li>`l7Flow_outBandwidth`: Access bandwidth.</li>
<li>`l7Flow_hit_outFlux`: Cache hit traffic.</li>
     */
    public $MetricNames;

    /**
     * @var array List of sites
Enter the IDs of sites to query. The maximum query period is determined by the <a href="https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1#edgeone-.E5.A5.97.E9.A4.90">max data query period</a> of the bound plan. If it's not specified, all sites are selected by default, and the query period must be within the last 30 days. 
     */
    public $ZoneIds;

    /**
     * @var array List of subdomain names to be queried. All subdomain names will be selected if this field is not specified.
     */
    public $Domains;

    /**
     * @var string The protocol type. Values:
<li>`http`: HTTP protocol;</li>
<li>`https`: HTTPS protocol;</li>
<li>`http2`: HTTP2 protocol;</li>
<li>`all`:   All protocols. </li>If it's not specified, `all` is used. This parameter is not yet available now.
     */
    public $Protocol;

    /**
     * @var string The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: One day</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < Period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.
     */
    public $Interval;

    /**
     * @var array Filters
<li>tagKey<br>   Filter by the specified <strong>tag key</strong></li>
<li>tagValue<br>   Filter by the specified <strong>tag value</strong></li>
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
     * @param string $StartTime The start time.
     * @param string $EndTime The end time.
     * @param array $MetricNames The query metric. Values:
<li>`l7Flow_outFlux`: Access traffic;</li>
<li>`l7Flow_request`: Access requests;</li>
<li>`l7Flow_outBandwidth`: Access bandwidth.</li>
<li>`l7Flow_hit_outFlux`: Cache hit traffic.</li>
     * @param array $ZoneIds List of sites
Enter the IDs of sites to query. The maximum query period is determined by the <a href="https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1#edgeone-.E5.A5.97.E9.A4.90">max data query period</a> of the bound plan. If it's not specified, all sites are selected by default, and the query period must be within the last 30 days. 
     * @param array $Domains List of subdomain names to be queried. All subdomain names will be selected if this field is not specified.
     * @param string $Protocol The protocol type. Values:
<li>`http`: HTTP protocol;</li>
<li>`https`: HTTPS protocol;</li>
<li>`http2`: HTTP2 protocol;</li>
<li>`all`:   All protocols. </li>If it's not specified, `all` is used. This parameter is not yet available now.
     * @param string $Interval The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: One day</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < Period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.
     * @param array $Filters Filters
<li>tagKey<br>   Filter by the specified <strong>tag key</strong></li>
<li>tagValue<br>   Filter by the specified <strong>tag value</strong></li>
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
