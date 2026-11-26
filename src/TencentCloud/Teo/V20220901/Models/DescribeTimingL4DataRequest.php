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
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
 * @method array getMetricNames() Obtain Queried metric. Valid values:
<ul><li>**l4Flow_flux**: Total access traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inFlux**: Access inbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_outFlux**: Access outbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inBandwidth**: Inbound bandwidth peak for access, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_outBandwidth**: Outbound access bandwidth peak, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_connections**: Number of concurrent connections, unit: count, metric value type: Integer;</li>
<li>**l4Flow_newConnectionsRate**: Rate of new connections, unit: connections/second, metric value type: Float, rounded to two decimal places.</li></ul>**Note**:<ul><li>Metrics of the <code>Integer</code> value type will return corresponding time series data from <code>Data.N.TypeValue</code>;</li>
<li>Metrics of the <code>Float</code> value type return corresponding time series data from <code>Data.N.FloatTypeValue</code>.</li></ul>
 * @method void setMetricNames(array $MetricNames) Set Queried metric. Valid values:
<ul><li>**l4Flow_flux**: Total access traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inFlux**: Access inbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_outFlux**: Access outbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inBandwidth**: Inbound bandwidth peak for access, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_outBandwidth**: Outbound access bandwidth peak, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_connections**: Number of concurrent connections, unit: count, metric value type: Integer;</li>
<li>**l4Flow_newConnectionsRate**: Rate of new connections, unit: connections/second, metric value type: Float, rounded to two decimal places.</li></ul>**Note**:<ul><li>Metrics of the <code>Integer</code> value type will return corresponding time series data from <code>Data.N.TypeValue</code>;</li>
<li>Metrics of the <code>Float</code> value type return corresponding time series data from <code>Data.N.FloatTypeValue</code>.</li></ul>
 * @method array getZoneIds() Obtain Site ID. This parameter will change from selectable to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permissions for all site resources of this interface.
 * @method void setZoneIds(array $ZoneIds) Set Site ID. This parameter will change from selectable to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permissions for all site resources of this interface.
 * @method array getProxyIds() Obtain Layer-4 instance list. If not specified, it means select all instances.
 * @method void setProxyIds(array $ProxyIds) Set Layer-4 instance list. If not specified, it means select all instances.
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<ul><li>**min**: 1 minute;</li>
<li>**5min**: 5 minutes;</li>
<li>**hour**: 1 hour;</li>
<li>**day**: 1 day.</li></ul>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<ul><li>**min**: 1 minute;</li>
<li>**5min**: 5 minutes;</li>
<li>**hour**: 1 hour;</li>
<li>**day**: 1 day.</li></ul>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
 * @method array getFilters() Obtain Filter criteria. The detailed Key values of filter criteria are as follows:
<ul><li>**ruleId**: Filter by forwarding rule ID.</li>
<li>**proxyId**: filter by L4 proxy instance ID.</li></ul>
 * @method void setFilters(array $Filters) Set Filter criteria. The detailed Key values of filter criteria are as follows:
<ul><li>**ruleId**: Filter by forwarding rule ID.</li>
<li>**proxyId**: filter by L4 proxy instance ID.</li></ul>
 * @method string getArea() Obtain Data ownership region. Deprecated. Filter data by client region in Filters.country.
 * @method void setArea(string $Area) Set Data ownership region. Deprecated. Filter data by client region in Filters.country.
 */
class DescribeTimingL4DataRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
     */
    public $EndTime;

    /**
     * @var array Queried metric. Valid values:
<ul><li>**l4Flow_flux**: Total access traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inFlux**: Access inbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_outFlux**: Access outbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inBandwidth**: Inbound bandwidth peak for access, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_outBandwidth**: Outbound access bandwidth peak, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_connections**: Number of concurrent connections, unit: count, metric value type: Integer;</li>
<li>**l4Flow_newConnectionsRate**: Rate of new connections, unit: connections/second, metric value type: Float, rounded to two decimal places.</li></ul>**Note**:<ul><li>Metrics of the <code>Integer</code> value type will return corresponding time series data from <code>Data.N.TypeValue</code>;</li>
<li>Metrics of the <code>Float</code> value type return corresponding time series data from <code>Data.N.FloatTypeValue</code>.</li></ul>
     */
    public $MetricNames;

    /**
     * @var array Site ID. This parameter will change from selectable to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permissions for all site resources of this interface.
     */
    public $ZoneIds;

    /**
     * @var array Layer-4 instance list. If not specified, it means select all instances.
     */
    public $ProxyIds;

    /**
     * @var string Time granularity of the query. Valid values:
<ul><li>**min**: 1 minute;</li>
<li>**5min**: 5 minutes;</li>
<li>**hour**: 1 hour;</li>
<li>**day**: 1 day.</li></ul>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
     */
    public $Interval;

    /**
     * @var array Filter criteria. The detailed Key values of filter criteria are as follows:
<ul><li>**ruleId**: Filter by forwarding rule ID.</li>
<li>**proxyId**: filter by L4 proxy instance ID.</li></ul>
     */
    public $Filters;

    /**
     * @var string Data ownership region. Deprecated. Filter data by client region in Filters.country.
     * @deprecated
     */
    public $Area;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
     * @param array $MetricNames Queried metric. Valid values:
<ul><li>**l4Flow_flux**: Total access traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inFlux**: Access inbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_outFlux**: Access outbound traffic, unit: Byte, metric value type: Integer;</li>
<li>**l4Flow_inBandwidth**: Inbound bandwidth peak for access, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_outBandwidth**: Outbound access bandwidth peak, unit: bps, metric value type: Integer;</li>
<li>**l4Flow_connections**: Number of concurrent connections, unit: count, metric value type: Integer;</li>
<li>**l4Flow_newConnectionsRate**: Rate of new connections, unit: connections/second, metric value type: Float, rounded to two decimal places.</li></ul>**Note**:<ul><li>Metrics of the <code>Integer</code> value type will return corresponding time series data from <code>Data.N.TypeValue</code>;</li>
<li>Metrics of the <code>Float</code> value type return corresponding time series data from <code>Data.N.FloatTypeValue</code>.</li></ul>
     * @param array $ZoneIds Site ID. This parameter will change from selectable to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you must have permissions for all site resources of this interface.
     * @param array $ProxyIds Layer-4 instance list. If not specified, it means select all instances.
     * @param string $Interval Time granularity of the query. Valid values:
<ul><li>**min**: 1 minute;</li>
<li>**5min**: 5 minutes;</li>
<li>**hour**: 1 hour;</li>
<li>**day**: 1 day.</li></ul>If this parameter is not input, the granularity will be automatically calculated based on the interval between the start time and end time. Specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
     * @param array $Filters Filter criteria. The detailed Key values of filter criteria are as follows:
<ul><li>**ruleId**: Filter by forwarding rule ID.</li>
<li>**proxyId**: filter by L4 proxy instance ID.</li></ul>
     * @param string $Area Data ownership region. Deprecated. Filter data by client region in Filters.country.
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
