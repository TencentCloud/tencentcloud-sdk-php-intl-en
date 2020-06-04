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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSCount response structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getIp() Obtain Resource IP
 * @method void setIp(string $Ip) Set Resource IP
 * @method string getStartTime() Obtain Statistics start time
 * @method void setStartTime(string $StartTime) Set Statistics start time
 * @method string getEndTime() Obtain Statistics end time
 * @method void setEndTime(string $EndTime) Set Statistics end time
 * @method string getMetricName() Obtain Metric. Valid values: [traffic (attack protocol traffic in KB), pkg (number of attack protocol packets), classnum (number of attack events)]
 * @method void setMetricName(string $MetricName) Set Metric. Valid values: [traffic (attack protocol traffic in KB), pkg (number of attack protocol packets), classnum (number of attack events)]
 * @method array getData() Obtain `Key-Value` array. Valid values of `Key`:
If `MetricName` is `traffic`:
If `key` is `TcpKBSum`, it indicates the traffic of TCP packets in KB.
If `key` is `UdpKBSum`, it indicates the traffic of UDP packets in KB.
If `key` is `IcmpKBSum`, it indicates the traffic of ICMP packets in KB.
If `key` is `OtherKBSum`, it indicates the traffic of other packets in KB.

If `MetricName` is `pkg`:
If `key` is `TcpPacketSum`, it indicates the number of TCP packets.
If `key` is `UdpPacketSum`, it indicates the number of UDP packets.
If `key` is `IcmpPacketSum`, it indicates the number of ICMP packets.
If `key` is `OtherPacketSum`, it indicates the number of other packets.

If `MetricName` is `classnum`:
The value of `key` indicates the attack event type. When the `key` is `UNKNOWNFLOOD`, it indicates  unknown attack events.
 * @method void setData(array $Data) Set `Key-Value` array. Valid values of `Key`:
If `MetricName` is `traffic`:
If `key` is `TcpKBSum`, it indicates the traffic of TCP packets in KB.
If `key` is `UdpKBSum`, it indicates the traffic of UDP packets in KB.
If `key` is `IcmpKBSum`, it indicates the traffic of ICMP packets in KB.
If `key` is `OtherKBSum`, it indicates the traffic of other packets in KB.

If `MetricName` is `pkg`:
If `key` is `TcpPacketSum`, it indicates the number of TCP packets.
If `key` is `UdpPacketSum`, it indicates the number of UDP packets.
If `key` is `IcmpPacketSum`, it indicates the number of ICMP packets.
If `key` is `OtherPacketSum`, it indicates the number of other packets.

If `MetricName` is `classnum`:
The value of `key` indicates the attack event type. When the `key` is `UNKNOWNFLOOD`, it indicates  unknown attack events.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDDoSCountResponse extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string Resource IP
     */
    public $Ip;

    /**
     * @var string Statistics start time
     */
    public $StartTime;

    /**
     * @var string Statistics end time
     */
    public $EndTime;

    /**
     * @var string Metric. Valid values: [traffic (attack protocol traffic in KB), pkg (number of attack protocol packets), classnum (number of attack events)]
     */
    public $MetricName;

    /**
     * @var array `Key-Value` array. Valid values of `Key`:
If `MetricName` is `traffic`:
If `key` is `TcpKBSum`, it indicates the traffic of TCP packets in KB.
If `key` is `UdpKBSum`, it indicates the traffic of UDP packets in KB.
If `key` is `IcmpKBSum`, it indicates the traffic of ICMP packets in KB.
If `key` is `OtherKBSum`, it indicates the traffic of other packets in KB.

If `MetricName` is `pkg`:
If `key` is `TcpPacketSum`, it indicates the number of TCP packets.
If `key` is `UdpPacketSum`, it indicates the number of UDP packets.
If `key` is `IcmpPacketSum`, it indicates the number of ICMP packets.
If `key` is `OtherPacketSum`, it indicates the number of other packets.

If `MetricName` is `classnum`:
The value of `key` indicates the attack event type. When the `key` is `UNKNOWNFLOOD`, it indicates  unknown attack events.
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     * @param string $Id Anti-DDoS instance ID
     * @param string $Ip Resource IP
     * @param string $StartTime Statistics start time
     * @param string $EndTime Statistics end time
     * @param string $MetricName Metric. Valid values: [traffic (attack protocol traffic in KB), pkg (number of attack protocol packets), classnum (number of attack events)]
     * @param array $Data `Key-Value` array. Valid values of `Key`:
If `MetricName` is `traffic`:
If `key` is `TcpKBSum`, it indicates the traffic of TCP packets in KB.
If `key` is `UdpKBSum`, it indicates the traffic of UDP packets in KB.
If `key` is `IcmpKBSum`, it indicates the traffic of ICMP packets in KB.
If `key` is `OtherKBSum`, it indicates the traffic of other packets in KB.

If `MetricName` is `pkg`:
If `key` is `TcpPacketSum`, it indicates the number of TCP packets.
If `key` is `UdpPacketSum`, it indicates the number of UDP packets.
If `key` is `IcmpPacketSum`, it indicates the number of ICMP packets.
If `key` is `OtherPacketSum`, it indicates the number of other packets.

If `MetricName` is `classnum`:
The value of `key` indicates the attack event type. When the `key` is `UNKNOWNFLOOD`, it indicates  unknown attack events.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
