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
 * DescribeBillingData request structure.
 *
 * @method string getStartTime() Obtain Start time of the query.
 * @method void setStartTime(string $StartTime) Set Start time of the query.
 * @method string getEndTime() Obtain End time of the query.
 * @method void setEndTime(string $EndTime) Set End time of the query.
 * @method array getZoneIds() Obtain Zone ID set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set Zone ID set. This parameter is required.
 * @method string getMetricName() Obtain Indicator list. Valid values:<li>acc_flux: Content acceleration traffic, in bytes;</li>
<li>smt_flux: Smart acceleration traffic, in bytes;</li>
<li>l4_flux: Layer 4 acceleration traffic, in bytes;</li>
<li>sec_flux: Exclusive DDoS mitigation traffic, in bytes;</li>
<li>zxctg_flux: Cross-MLC-border acceleration traffic, in bytes;</li>
<li>acc_bandwidth: Content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: Smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: Layer 4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: Exclusive DDoS mitigation bandwidth, in bps;</li>
<li>zxctg_bandwidth: Cross-MLC-border acceleration bandwidth, in bps;</li><li>sec_request_clean: HTTP/HTTPS requests, in count;</li>
<li>smt_request_clean: Smart acceleration requests, in count;</li>
<li>quic_request: QUIC requests, in count;</li>
<li>bot_request_clean: Bot requests, in count;</li>
<li>cls_count: Real-time log delivery log counts, in count;</li>
<li>ddos_bandwidth: Exclusive DDoS mitigation elastic bandwidth, in bps.</li>
 * @method void setMetricName(string $MetricName) Set Indicator list. Valid values:<li>acc_flux: Content acceleration traffic, in bytes;</li>
<li>smt_flux: Smart acceleration traffic, in bytes;</li>
<li>l4_flux: Layer 4 acceleration traffic, in bytes;</li>
<li>sec_flux: Exclusive DDoS mitigation traffic, in bytes;</li>
<li>zxctg_flux: Cross-MLC-border acceleration traffic, in bytes;</li>
<li>acc_bandwidth: Content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: Smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: Layer 4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: Exclusive DDoS mitigation bandwidth, in bps;</li>
<li>zxctg_bandwidth: Cross-MLC-border acceleration bandwidth, in bps;</li><li>sec_request_clean: HTTP/HTTPS requests, in count;</li>
<li>smt_request_clean: Smart acceleration requests, in count;</li>
<li>quic_request: QUIC requests, in count;</li>
<li>bot_request_clean: Bot requests, in count;</li>
<li>cls_count: Real-time log delivery log counts, in count;</li>
<li>ddos_bandwidth: Exclusive DDoS mitigation elastic bandwidth, in bps.</li>
 * @method string getInterval() Obtain Query granularity. Valid values:<li>5min: 5-minute granularity;</li>
<li>hour: 1-hour granularity;</li>
<li>day: 1-day granularity.</li>
 * @method void setInterval(string $Interval) Set Query granularity. Valid values:<li>5min: 5-minute granularity;</li>
<li>hour: 1-hour granularity;</li>
<li>day: 1-day granularity.</li>
 * @method array getFilters() Obtain Filter. The detailed filters are as follows:
<li>host: Filter by Domain Name. Example: test.example.com.<br></li>
<li>proxy-id: Filter by Layer 4 Proxy Instance ID. Example: sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by Billing Region.Options are:<br>   CH: Chinese mainland<br>   AF: Africa<br>   AS1: Asia-Pacific Region 1<br>   AS2: Asia-Pacific Region 2<br>   AS3: Asia-Pacific Region 3<br>  EU: Europe<br>   MidEast: Middle East<br>   NA: North America<br>   SA: South America</li>
 * @method void setFilters(array $Filters) Set Filter. The detailed filters are as follows:
<li>host: Filter by Domain Name. Example: test.example.com.<br></li>
<li>proxy-id: Filter by Layer 4 Proxy Instance ID. Example: sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by Billing Region.Options are:<br>   CH: Chinese mainland<br>   AF: Africa<br>   AS1: Asia-Pacific Region 1<br>   AS2: Asia-Pacific Region 2<br>   AS3: Asia-Pacific Region 3<br>  EU: Europe<br>   MidEast: Middle East<br>   NA: North America<br>   SA: South America</li>
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string Start time of the query.
     */
    public $StartTime;

    /**
     * @var string End time of the query.
     */
    public $EndTime;

    /**
     * @var array Zone ID set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var string Indicator list. Valid values:<li>acc_flux: Content acceleration traffic, in bytes;</li>
<li>smt_flux: Smart acceleration traffic, in bytes;</li>
<li>l4_flux: Layer 4 acceleration traffic, in bytes;</li>
<li>sec_flux: Exclusive DDoS mitigation traffic, in bytes;</li>
<li>zxctg_flux: Cross-MLC-border acceleration traffic, in bytes;</li>
<li>acc_bandwidth: Content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: Smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: Layer 4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: Exclusive DDoS mitigation bandwidth, in bps;</li>
<li>zxctg_bandwidth: Cross-MLC-border acceleration bandwidth, in bps;</li><li>sec_request_clean: HTTP/HTTPS requests, in count;</li>
<li>smt_request_clean: Smart acceleration requests, in count;</li>
<li>quic_request: QUIC requests, in count;</li>
<li>bot_request_clean: Bot requests, in count;</li>
<li>cls_count: Real-time log delivery log counts, in count;</li>
<li>ddos_bandwidth: Exclusive DDoS mitigation elastic bandwidth, in bps.</li>
     */
    public $MetricName;

    /**
     * @var string Query granularity. Valid values:<li>5min: 5-minute granularity;</li>
<li>hour: 1-hour granularity;</li>
<li>day: 1-day granularity.</li>
     */
    public $Interval;

    /**
     * @var array Filter. The detailed filters are as follows:
<li>host: Filter by Domain Name. Example: test.example.com.<br></li>
<li>proxy-id: Filter by Layer 4 Proxy Instance ID. Example: sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by Billing Region.Options are:<br>   CH: Chinese mainland<br>   AF: Africa<br>   AS1: Asia-Pacific Region 1<br>   AS2: Asia-Pacific Region 2<br>   AS3: Asia-Pacific Region 3<br>  EU: Europe<br>   MidEast: Middle East<br>   NA: North America<br>   SA: South America</li>
     */
    public $Filters;

    /**
     * @param string $StartTime Start time of the query.
     * @param string $EndTime End time of the query.
     * @param array $ZoneIds Zone ID set. This parameter is required.
     * @param string $MetricName Indicator list. Valid values:<li>acc_flux: Content acceleration traffic, in bytes;</li>
<li>smt_flux: Smart acceleration traffic, in bytes;</li>
<li>l4_flux: Layer 4 acceleration traffic, in bytes;</li>
<li>sec_flux: Exclusive DDoS mitigation traffic, in bytes;</li>
<li>zxctg_flux: Cross-MLC-border acceleration traffic, in bytes;</li>
<li>acc_bandwidth: Content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: Smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: Layer 4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: Exclusive DDoS mitigation bandwidth, in bps;</li>
<li>zxctg_bandwidth: Cross-MLC-border acceleration bandwidth, in bps;</li><li>sec_request_clean: HTTP/HTTPS requests, in count;</li>
<li>smt_request_clean: Smart acceleration requests, in count;</li>
<li>quic_request: QUIC requests, in count;</li>
<li>bot_request_clean: Bot requests, in count;</li>
<li>cls_count: Real-time log delivery log counts, in count;</li>
<li>ddos_bandwidth: Exclusive DDoS mitigation elastic bandwidth, in bps.</li>
     * @param string $Interval Query granularity. Valid values:<li>5min: 5-minute granularity;</li>
<li>hour: 1-hour granularity;</li>
<li>day: 1-day granularity.</li>
     * @param array $Filters Filter. The detailed filters are as follows:
<li>host: Filter by Domain Name. Example: test.example.com.<br></li>
<li>proxy-id: Filter by Layer 4 Proxy Instance ID. Example: sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by Billing Region.Options are:<br>   CH: Chinese mainland<br>   AF: Africa<br>   AS1: Asia-Pacific Region 1<br>   AS2: Asia-Pacific Region 2<br>   AS3: Asia-Pacific Region 3<br>  EU: Europe<br>   MidEast: Middle East<br>   NA: North America<br>   SA: South America</li>
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new BillingDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
