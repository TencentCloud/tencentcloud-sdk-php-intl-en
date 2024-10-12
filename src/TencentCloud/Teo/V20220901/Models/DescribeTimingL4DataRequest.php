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
 * DescribeTimingL4Data request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time.
 * @method void setEndTime(string $EndTime) Set The end time.
 * @method array getMetricNames() Obtain Query indicator. Values: 
<li>l4Flow_connections: Number of access connections;</li>
<li>l4Flow_flux: Total access traffic;</li>
<li>l4Flow_inFlux: Ingress access traffic;</li>
<li>l4Flow_outFlux: Egress access traffic. </li>
 * @method void setMetricNames(array $MetricNames) Set Query indicator. Values: 
<li>l4Flow_connections: Number of access connections;</li>
<li>l4Flow_flux: Total access traffic;</li>
<li>l4Flow_inFlux: Ingress access traffic;</li>
<li>l4Flow_outFlux: Egress access traffic. </li>
 * @method array getZoneIds() Obtain ZoneId set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set ZoneId set. This parameter is required.
 * @method array getProxyIds() Obtain List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
 * @method void setProxyIds(array $ProxyIds) Set List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
 * @method string getInterval() Obtain The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period ≤ 1 hour: `min`; <br>1 hour < Period ≤ 2 days: `5min`; <br>2 days < period ≤ 7 days: `hour`; <br>Period > 7 days: `day`.
 * @method void setInterval(string $Interval) Set The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period ≤ 1 hour: `min`; <br>1 hour < Period ≤ 2 days: `5min`; <br>2 days < period ≤ 7 days: `hour`; <br>Period > 7 days: `day`.
 * @method array getFilters() Obtain Filter criteria. The detailed Key values of filter criteria are as follows:
<li>ruleId: Filter by forwarding rule ID.</li>
<li>proxyId: Filter by L4 proxy instance ID.</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The detailed Key values of filter criteria are as follows:
<li>ruleId: Filter by forwarding rule ID.</li>
<li>proxyId: Filter by L4 proxy instance ID.</li>
 * @method string getArea() Obtain Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 * @method void setArea(string $Area) Set Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 */
class DescribeTimingL4DataRequest extends AbstractModel
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
     * @var array Query indicator. Values: 
<li>l4Flow_connections: Number of access connections;</li>
<li>l4Flow_flux: Total access traffic;</li>
<li>l4Flow_inFlux: Ingress access traffic;</li>
<li>l4Flow_outFlux: Egress access traffic. </li>
     */
    public $MetricNames;

    /**
     * @var array ZoneId set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var array List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
     */
    public $ProxyIds;

    /**
     * @var string The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period ≤ 1 hour: `min`; <br>1 hour < Period ≤ 2 days: `5min`; <br>2 days < period ≤ 7 days: `hour`; <br>Period > 7 days: `day`.
     */
    public $Interval;

    /**
     * @var array Filter criteria. The detailed Key values of filter criteria are as follows:
<li>ruleId: Filter by forwarding rule ID.</li>
<li>proxyId: Filter by L4 proxy instance ID.</li>
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
     * @param array $MetricNames Query indicator. Values: 
<li>l4Flow_connections: Number of access connections;</li>
<li>l4Flow_flux: Total access traffic;</li>
<li>l4Flow_inFlux: Ingress access traffic;</li>
<li>l4Flow_outFlux: Egress access traffic. </li>
     * @param array $ZoneIds ZoneId set. This parameter is required.
     * @param array $ProxyIds List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
     * @param string $Interval The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period ≤ 1 hour: `min`; <br>1 hour < Period ≤ 2 days: `5min`; <br>2 days < period ≤ 7 days: `hour`; <br>Period > 7 days: `day`.
     * @param array $Filters Filter criteria. The detailed Key values of filter criteria are as follows:
<li>ruleId: Filter by forwarding rule ID.</li>
<li>proxyId: Filter by L4 proxy instance ID.</li>
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

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
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
