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
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method array getZoneIds() Obtain Site ID set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter is required.
 * @method string getMetricName() Obtain Metric list. Valid values:
<li>acc_flux: content acceleration traffic, in bytes;</li>
<li>smt_flux: smart acceleration traffic, in bytes;</li>
<li>l4_flux: L4 acceleration traffic, in bytes;</li>
<li>sec_flux: exclusive protection traffic, in bytes;</li>
<li>zxctg_flux: network optimization traffic in the Chinese mainland, in bytes;</li>
<li>acc_bandwidth: content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: L4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: exclusive protection bandwidth, in bps;</li>
<li>zxctg_bandwidth: network optimization bandwidth in the Chinese mainland, in bps;</li>
<li>sec_request_clean: number of HTTP/HTTPS requests;</li>
<li>smt_request_clean: number of smart acceleration requests;</li>
<li>quic_request: number of QUIC requests;</li>
<li>bot_request_clean: number of Bot requests;</li>
<li>cls_count: number of real-time log entries pushed;</li>
<li>ddos_bandwidth: elastic DDoS protection bandwidth, in bps.</li>
 * @method void setMetricName(string $MetricName) Set Metric list. Valid values:
<li>acc_flux: content acceleration traffic, in bytes;</li>
<li>smt_flux: smart acceleration traffic, in bytes;</li>
<li>l4_flux: L4 acceleration traffic, in bytes;</li>
<li>sec_flux: exclusive protection traffic, in bytes;</li>
<li>zxctg_flux: network optimization traffic in the Chinese mainland, in bytes;</li>
<li>acc_bandwidth: content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: L4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: exclusive protection bandwidth, in bps;</li>
<li>zxctg_bandwidth: network optimization bandwidth in the Chinese mainland, in bps;</li>
<li>sec_request_clean: number of HTTP/HTTPS requests;</li>
<li>smt_request_clean: number of smart acceleration requests;</li>
<li>quic_request: number of QUIC requests;</li>
<li>bot_request_clean: number of Bot requests;</li>
<li>cls_count: number of real-time log entries pushed;</li>
<li>ddos_bandwidth: elastic DDoS protection bandwidth, in bps.</li>
 * @method string getInterval() Obtain Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
 * @method void setInterval(string $Interval) Set Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
 * @method array getFilters() Obtain Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Filter by domain name, such as test.example.com.<br></li>
<li>proxy-id: Filter by L4 proxy instance ID, such as sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Filter by domain name, such as test.example.com.<br></li>
<li>proxy-id: Filter by L4 proxy instance ID, such as sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>
 */
class DescribeBillingDataRequest extends AbstractModel
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
     * @var array Site ID set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var string Metric list. Valid values:
<li>acc_flux: content acceleration traffic, in bytes;</li>
<li>smt_flux: smart acceleration traffic, in bytes;</li>
<li>l4_flux: L4 acceleration traffic, in bytes;</li>
<li>sec_flux: exclusive protection traffic, in bytes;</li>
<li>zxctg_flux: network optimization traffic in the Chinese mainland, in bytes;</li>
<li>acc_bandwidth: content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: L4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: exclusive protection bandwidth, in bps;</li>
<li>zxctg_bandwidth: network optimization bandwidth in the Chinese mainland, in bps;</li>
<li>sec_request_clean: number of HTTP/HTTPS requests;</li>
<li>smt_request_clean: number of smart acceleration requests;</li>
<li>quic_request: number of QUIC requests;</li>
<li>bot_request_clean: number of Bot requests;</li>
<li>cls_count: number of real-time log entries pushed;</li>
<li>ddos_bandwidth: elastic DDoS protection bandwidth, in bps.</li>
     */
    public $MetricName;

    /**
     * @var string Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
     */
    public $Interval;

    /**
     * @var array Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Filter by domain name, such as test.example.com.<br></li>
<li>proxy-id: Filter by L4 proxy instance ID, such as sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>
     */
    public $Filters;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param array $ZoneIds Site ID set. This parameter is required.
     * @param string $MetricName Metric list. Valid values:
<li>acc_flux: content acceleration traffic, in bytes;</li>
<li>smt_flux: smart acceleration traffic, in bytes;</li>
<li>l4_flux: L4 acceleration traffic, in bytes;</li>
<li>sec_flux: exclusive protection traffic, in bytes;</li>
<li>zxctg_flux: network optimization traffic in the Chinese mainland, in bytes;</li>
<li>acc_bandwidth: content acceleration bandwidth, in bps;</li>
<li>smt_bandwidth: smart acceleration bandwidth, in bps;</li>
<li>l4_bandwidth: L4 acceleration bandwidth, in bps;</li>
<li>sec_bandwidth: exclusive protection bandwidth, in bps;</li>
<li>zxctg_bandwidth: network optimization bandwidth in the Chinese mainland, in bps;</li>
<li>sec_request_clean: number of HTTP/HTTPS requests;</li>
<li>smt_request_clean: number of smart acceleration requests;</li>
<li>quic_request: number of QUIC requests;</li>
<li>bot_request_clean: number of Bot requests;</li>
<li>cls_count: number of real-time log entries pushed;</li>
<li>ddos_bandwidth: elastic DDoS protection bandwidth, in bps.</li>
     * @param string $Interval Time granularity of the query. Valid values:
<li>5min: 5 minutes;</li>
<li>hour: 1 hour;</li>
<li>day: 1 day.</li>
     * @param array $Filters Filter criteria. The detailed values of filter criteria are as follows:
<li>host: Filter by domain name, such as test.example.com.<br></li>
<li>proxy-id: Filter by L4 proxy instance ID, such as sid-2rugn89bkla9.<br></li>
<li>region-id: Filter by billing region. Options:<br>  CH: Chinese mainland<br>  AF: Africa<br>  AS1: Asia-Pacific Region 1<br>  AS2: Asia-Pacific Region 2<br>  AS3: Asia-Pacific Region 3<br>  EU: Europe<br>  MidEast: Middle East<br>  NA: North America<br>  SA: South America</li>
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
