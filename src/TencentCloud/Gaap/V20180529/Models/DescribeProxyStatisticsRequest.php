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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxyStatistics request structure.
 *
 * @method string getProxyId() Obtain Connection ID
 * @method void setProxyId(string $ProxyId) Set Connection ID
 * @method string getStartTime() Obtain Start time (2019-03-25 12:00:00)
 * @method void setStartTime(string $StartTime) Set Start time (2019-03-25 12:00:00)
 * @method string getEndTime() Obtain End time (2019-03-25 12:00:00)
 * @method void setEndTime(string $EndTime) Set End time (2019-03-25 12:00:00)
 * @method array getMetricNames() Obtain Statistical metric name list. Valid values: `InBandwidth` (inbound bandwidth); `OutBandwidth` (outbound bandwidth); Concurrent (concurrence); `InPackets` (inbound packets); `OutPackets` (outbound packets); `PacketLoss` (packet loss rate); `Latency` (latency); `HttpQPS` (the number of HTTP requests); `HttpsQPS` (the number of HTTPS requests).
 * @method void setMetricNames(array $MetricNames) Set Statistical metric name list. Valid values: `InBandwidth` (inbound bandwidth); `OutBandwidth` (outbound bandwidth); Concurrent (concurrence); `InPackets` (inbound packets); `OutPackets` (outbound packets); `PacketLoss` (packet loss rate); `Latency` (latency); `HttpQPS` (the number of HTTP requests); `HttpsQPS` (the number of HTTPS requests).
 * @method integer getGranularity() Obtain Monitoring granularity. It currently supports: 60, 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 3 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 day. Supported minimum granularity: 300 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 36,00 seconds;
 * @method void setGranularity(integer $Granularity) Set Monitoring granularity. It currently supports: 60, 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 3 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 day. Supported minimum granularity: 300 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 36,00 seconds;
 * @method string getIsp() Obtain Specifies the ISP. Valid values: `CMCC`, `CUCC`, and `CTCC`. If it is not specified, all ISP data will be returned. Note that this field is valid only when a non-BGP connection is used.
 * @method void setIsp(string $Isp) Set Specifies the ISP. Valid values: `CMCC`, `CUCC`, and `CTCC`. If it is not specified, all ISP data will be returned. Note that this field is valid only when a non-BGP connection is used.
 */
class DescribeProxyStatisticsRequest extends AbstractModel
{
    /**
     * @var string Connection ID
     */
    public $ProxyId;

    /**
     * @var string Start time (2019-03-25 12:00:00)
     */
    public $StartTime;

    /**
     * @var string End time (2019-03-25 12:00:00)
     */
    public $EndTime;

    /**
     * @var array Statistical metric name list. Valid values: `InBandwidth` (inbound bandwidth); `OutBandwidth` (outbound bandwidth); Concurrent (concurrence); `InPackets` (inbound packets); `OutPackets` (outbound packets); `PacketLoss` (packet loss rate); `Latency` (latency); `HttpQPS` (the number of HTTP requests); `HttpsQPS` (the number of HTTPS requests).
     */
    public $MetricNames;

    /**
     * @var integer Monitoring granularity. It currently supports: 60, 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 3 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 day. Supported minimum granularity: 300 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 36,00 seconds;
     */
    public $Granularity;

    /**
     * @var string Specifies the ISP. Valid values: `CMCC`, `CUCC`, and `CTCC`. If it is not specified, all ISP data will be returned. Note that this field is valid only when a non-BGP connection is used.
     */
    public $Isp;

    /**
     * @param string $ProxyId Connection ID
     * @param string $StartTime Start time (2019-03-25 12:00:00)
     * @param string $EndTime End time (2019-03-25 12:00:00)
     * @param array $MetricNames Statistical metric name list. Valid values: `InBandwidth` (inbound bandwidth); `OutBandwidth` (outbound bandwidth); Concurrent (concurrence); `InPackets` (inbound packets); `OutPackets` (outbound packets); `PacketLoss` (packet loss rate); `Latency` (latency); `HttpQPS` (the number of HTTP requests); `HttpsQPS` (the number of HTTPS requests).
     * @param integer $Granularity Monitoring granularity. It currently supports: 60, 300, 3,600, and 86,400. Unit: seconds.
Time range: ≤ 3 day. Supported minimum granularity: 60 seconds;
Time range: ≤ 7 day. Supported minimum granularity: 300 seconds;
Time range: ≤ 30 days. Supported minimum granularity: 36,00 seconds;
     * @param string $Isp Specifies the ISP. Valid values: `CMCC`, `CUCC`, and `CTCC`. If it is not specified, all ISP data will be returned. Note that this field is valid only when a non-BGP connection is used.
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
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

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }
    }
}
