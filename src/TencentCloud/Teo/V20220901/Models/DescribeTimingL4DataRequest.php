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
 * DescribeTimingL4Data request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method array getMetricNames() Obtain Metric list. Valid values:
<Li>l4Flow_connections: number of concurrent connections;</li>
<Li>l4Flow_flux: total traffic;</li>
<Li>l4Flow_inFlux: inbound traffic;</li>
<Li>l4Flow_outFlux: outbound traffic.</li>
<Li>l4Flow_inBandwidth: inbound peak bandwidth.</li>
<Li>l4Flow_outBandwidth: outbound peak bandwidth.</li>
 * @method void setMetricNames(array $MetricNames) Set Metric list. Valid values:
<Li>l4Flow_connections: number of concurrent connections;</li>
<Li>l4Flow_flux: total traffic;</li>
<Li>l4Flow_inFlux: inbound traffic;</li>
<Li>l4Flow_outFlux: outbound traffic.</li>
<Li>l4Flow_inBandwidth: inbound peak bandwidth.</li>
<Li>l4Flow_outBandwidth: outbound peak bandwidth.</li>
 * @method array getZoneIds() Obtain Zone ID set. This parameter is required. A maximum of 100 zone IDs can be passed in. If you need to query data for all zones under the Tencent Cloud main account, please use "*" instead. To query account-level data, you need to have full resource permissions for all zones of this interface.
 * @method void setZoneIds(array $ZoneIds) Set Zone ID set. This parameter is required. A maximum of 100 zone IDs can be passed in. If you need to query data for all zones under the Tencent Cloud main account, please use "*" instead. To query account-level data, you need to have full resource permissions for all zones of this interface.
 * @method array getProxyIds() Obtain List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
 * @method void setProxyIds(array $ProxyIds) Set List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
 * @method string getInterval() Obtain The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.

 * @method void setInterval(string $Interval) Set The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.

 * @method array getFilters() Obtain Filter criteria. The detailed key values of filter criteria are as follows:
<li>ruleId: filter by forwarding rule ID.</li>
<li>proxyId: filter by L4 proxy instance ID.</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The detailed key values of filter criteria are as follows:
<li>ruleId: filter by forwarding rule ID.</li>
<li>proxyId: filter by L4 proxy instance ID.</li>
 * @method string getArea() Obtain Data ownership region. This parameter is deprecated. Please filter data by client region in Filters.country.
 * @method void setArea(string $Area) Set Data ownership region. This parameter is deprecated. Please filter data by client region in Filters.country.
 */
class DescribeTimingL4DataRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     */
    public $EndTime;

    /**
     * @var array Metric list. Valid values:
<Li>l4Flow_connections: number of concurrent connections;</li>
<Li>l4Flow_flux: total traffic;</li>
<Li>l4Flow_inFlux: inbound traffic;</li>
<Li>l4Flow_outFlux: outbound traffic.</li>
<Li>l4Flow_inBandwidth: inbound peak bandwidth.</li>
<Li>l4Flow_outBandwidth: outbound peak bandwidth.</li>
     */
    public $MetricNames;

    /**
     * @var array Zone ID set. This parameter is required. A maximum of 100 zone IDs can be passed in. If you need to query data for all zones under the Tencent Cloud main account, please use "*" instead. To query account-level data, you need to have full resource permissions for all zones of this interface.
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
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.

     */
    public $Interval;

    /**
     * @var array Filter criteria. The detailed key values of filter criteria are as follows:
<li>ruleId: filter by forwarding rule ID.</li>
<li>proxyId: filter by L4 proxy instance ID.</li>
     */
    public $Filters;

    /**
     * @var string Data ownership region. This parameter is deprecated. Please filter data by client region in Filters.country.
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime The end time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param array $MetricNames Metric list. Valid values:
<Li>l4Flow_connections: number of concurrent connections;</li>
<Li>l4Flow_flux: total traffic;</li>
<Li>l4Flow_inFlux: inbound traffic;</li>
<Li>l4Flow_outFlux: outbound traffic.</li>
<Li>l4Flow_inBandwidth: inbound peak bandwidth.</li>
<Li>l4Flow_outBandwidth: outbound peak bandwidth.</li>
     * @param array $ZoneIds Zone ID set. This parameter is required. A maximum of 100 zone IDs can be passed in. If you need to query data for all zones under the Tencent Cloud main account, please use "*" instead. To query account-level data, you need to have full resource permissions for all zones of this interface.
     * @param array $ProxyIds List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
     * @param string $Interval The query granularity. Values:
<li>`min`: 1 minute;</li>
<li>`5min`: 5 minutes;</li>
<li>`hour`: 1 hour;</li>
<li>`day`: 1 day.</li>If this field is not specified, the granularity will be determined based on the query period. <br>Period <= 1 hour: `min`; <br>1 hour < period <= 2 days: `5min`; <br>2 days < period <= 7 days: `hour`; <br>Period > 7 days: `day`.

     * @param array $Filters Filter criteria. The detailed key values of filter criteria are as follows:
<li>ruleId: filter by forwarding rule ID.</li>
<li>proxyId: filter by L4 proxy instance ID.</li>
     * @param string $Area Data ownership region. This parameter is deprecated. Please filter data by client region in Filters.country.
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
