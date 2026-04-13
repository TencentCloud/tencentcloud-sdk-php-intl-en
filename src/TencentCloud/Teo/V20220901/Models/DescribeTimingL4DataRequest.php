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
 * @method string getEndTime() Obtain End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method array getMetricNames() Obtain Query metrics. valid values:.
<ul><li>**l4Flow_flux**: specifies the total access traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inFlux**: specifies access inbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_outFlux**: access outbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inBandwidth**: specifies the inbound bandwidth peak of the visit. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_outBandwidth**: specifies the outbound bandwidth peak. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_connections**: specifies the number of concurrent connections, measurement unit: unit, metric value type: Integer.</li>.
<li>**l4Flow_newConnectionsRate**: the rate of new connections, measurement unit: per second, metric value type: Float, rounded to two decimal places.</li></ul>**note**:<ul><li>metrics of <code>Integer</code> type will return corresponding time series Data from <code>Data.N.TypeValue</code>;</li>.
<li>Metrics with <code>Float</code> value type will return corresponding time series Data from <code>Data.N.FloatTypeValue</code>.</li></ul>.
 * @method void setMetricNames(array $MetricNames) Set Query metrics. valid values:.
<ul><li>**l4Flow_flux**: specifies the total access traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inFlux**: specifies access inbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_outFlux**: access outbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inBandwidth**: specifies the inbound bandwidth peak of the visit. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_outBandwidth**: specifies the outbound bandwidth peak. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_connections**: specifies the number of concurrent connections, measurement unit: unit, metric value type: Integer.</li>.
<li>**l4Flow_newConnectionsRate**: the rate of new connections, measurement unit: per second, metric value type: Float, rounded to two decimal places.</li></ul>**note**:<ul><li>metrics of <code>Integer</code> type will return corresponding time series Data from <code>Data.N.TypeValue</code>;</li>.
<li>Metrics with <code>Float</code> value type will return corresponding time series Data from <code>Data.N.FloatTypeValue</code>.</li></ul>.
 * @method array getZoneIds() Obtain Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site ids. to query all site data under the tencent cloud root account, use `*` as a replacement. querying account-level data requires permission for all site resources of this api.
 * @method void setZoneIds(array $ZoneIds) Set Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site ids. to query all site data under the tencent cloud root account, use `*` as a replacement. querying account-level data requires permission for all site resources of this api.
 * @method array getProxyIds() Obtain List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
 * @method void setProxyIds(array $ProxyIds) Set List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
 * @method string getInterval() Obtain Time granularity of the query. valid values:.
<ul><li>**min**: 1 minute;</li>.
<Li>**5min**: 5 minutes;</li>.
<Li>**Hour**: 1 hour;</li>.
<Li>**Day**: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
 * @method void setInterval(string $Interval) Set Time granularity of the query. valid values:.
<ul><li>**min**: 1 minute;</li>.
<Li>**5min**: 5 minutes;</li>.
<Li>**Hour**: 1 hour;</li>.
<Li>**Day**: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
 * @method array getFilters() Obtain Filter criteria. the detailed Key values of filter criteria are as follows:.
<ul><li>**ruleId**: filter by forwarding rule ID.</li>.
<li>**proxyId**: filters by l4 proxy instance ID.</li></ul>.
 * @method void setFilters(array $Filters) Set Filter criteria. the detailed Key values of filter criteria are as follows:.
<ul><li>**ruleId**: filter by forwarding rule ID.</li>.
<li>**proxyId**: filters by l4 proxy instance ID.</li></ul>.
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
     * @var string End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     */
    public $EndTime;

    /**
     * @var array Query metrics. valid values:.
<ul><li>**l4Flow_flux**: specifies the total access traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inFlux**: specifies access inbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_outFlux**: access outbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inBandwidth**: specifies the inbound bandwidth peak of the visit. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_outBandwidth**: specifies the outbound bandwidth peak. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_connections**: specifies the number of concurrent connections, measurement unit: unit, metric value type: Integer.</li>.
<li>**l4Flow_newConnectionsRate**: the rate of new connections, measurement unit: per second, metric value type: Float, rounded to two decimal places.</li></ul>**note**:<ul><li>metrics of <code>Integer</code> type will return corresponding time series Data from <code>Data.N.TypeValue</code>;</li>.
<li>Metrics with <code>Float</code> value type will return corresponding time series Data from <code>Data.N.FloatTypeValue</code>.</li></ul>.
     */
    public $MetricNames;

    /**
     * @var array Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site ids. to query all site data under the tencent cloud root account, use `*` as a replacement. querying account-level data requires permission for all site resources of this api.
     */
    public $ZoneIds;

    /**
     * @var array List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
     */
    public $ProxyIds;

    /**
     * @var string Time granularity of the query. valid values:.
<ul><li>**min**: 1 minute;</li>.
<Li>**5min**: 5 minutes;</li>.
<Li>**Hour**: 1 hour;</li>.
<Li>**Day**: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
     */
    public $Interval;

    /**
     * @var array Filter criteria. the detailed Key values of filter criteria are as follows:.
<ul><li>**ruleId**: filter by forwarding rule ID.</li>.
<li>**proxyId**: filters by l4 proxy instance ID.</li></ul>.
     */
    public $Filters;

    /**
     * @var string Data ownership region. This parameter is deprecated. Please filter data by client region in Filters.country.
     * @deprecated
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime End time. the query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param array $MetricNames Query metrics. valid values:.
<ul><li>**l4Flow_flux**: specifies the total access traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inFlux**: specifies access inbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_outFlux**: access outbound traffic. measurement unit: Byte. metric value type: Integer.</li>.
<li>**l4Flow_inBandwidth**: specifies the inbound bandwidth peak of the visit. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_outBandwidth**: specifies the outbound bandwidth peak. measurement unit: bps. metric value type: Integer.</li>.
<li>**l4Flow_connections**: specifies the number of concurrent connections, measurement unit: unit, metric value type: Integer.</li>.
<li>**l4Flow_newConnectionsRate**: the rate of new connections, measurement unit: per second, metric value type: Float, rounded to two decimal places.</li></ul>**note**:<ul><li>metrics of <code>Integer</code> type will return corresponding time series Data from <code>Data.N.TypeValue</code>;</li>.
<li>Metrics with <code>Float</code> value type will return corresponding time series Data from <code>Data.N.FloatTypeValue</code>.</li></ul>.
     * @param array $ZoneIds Site ID. this parameter will change from selectable to required after may 30, 2024. for details, see the announcement: [tencent cloud EdgeOne: tencentcloud API change notification](https://www.tencentcloud.comom/document/product/1552/104902?from_cn_redirect=1).
Import up to 100 site ids. to query all site data under the tencent cloud root account, use `*` as a replacement. querying account-level data requires permission for all site resources of this api.
     * @param array $ProxyIds List of L4 proxy IDs. All L4 proxies will be selected if this field is not specified.
     * @param string $Interval Time granularity of the query. valid values:.
<ul><li>**min**: 1 minute;</li>.
<Li>**5min**: 5 minutes;</li>.
<Li>**Hour**: 1 hour;</li>.
<Li>**Day**: 1 day.</li></ul>if this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. specifically, data will be queried with a granularity of <code>min</code>, <code>5min</code>, <code>hour</code>, and <code>day</code> respectively when the period is no more than 1 hour, no more than 2 days, no more than 7 days, and over 7 days.
     * @param array $Filters Filter criteria. the detailed Key values of filter criteria are as follows:.
<ul><li>**ruleId**: filter by forwarding rule ID.</li>.
<li>**proxyId**: filters by l4 proxy instance ID.</li></ul>.
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
