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
 * DescribeDDoSEvInfo response structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getIp() Obtain Resource IP
 * @method void setIp(string $Ip) Set Resource IP
 * @method string getStartTime() Obtain Attack start time
 * @method void setStartTime(string $StartTime) Set Attack start time
 * @method string getEndTime() Obtain Attack end time
 * @method void setEndTime(string $EndTime) Set Attack end time
 * @method integer getTcpPacketSum() Obtain Number of TCP attack packets
 * @method void setTcpPacketSum(integer $TcpPacketSum) Set Number of TCP attack packets
 * @method integer getTcpKBSum() Obtain Traffic of TCP attacks in KB
 * @method void setTcpKBSum(integer $TcpKBSum) Set Traffic of TCP attacks in KB
 * @method integer getUdpPacketSum() Obtain Number of UDP attack packets
 * @method void setUdpPacketSum(integer $UdpPacketSum) Set Number of UDP attack packets
 * @method integer getUdpKBSum() Obtain Traffic of UDP attacks in KB
 * @method void setUdpKBSum(integer $UdpKBSum) Set Traffic of UDP attacks in KB
 * @method integer getIcmpPacketSum() Obtain Number of ICMP attack packets
 * @method void setIcmpPacketSum(integer $IcmpPacketSum) Set Number of ICMP attack packets
 * @method integer getIcmpKBSum() Obtain Traffic of ICMP attacks in KB
 * @method void setIcmpKBSum(integer $IcmpKBSum) Set Traffic of ICMP attacks in KB
 * @method integer getOtherPacketSum() Obtain Number of other attack packets
 * @method void setOtherPacketSum(integer $OtherPacketSum) Set Number of other attack packets
 * @method integer getOtherKBSum() Obtain Traffic of other attacks in KB
 * @method void setOtherKBSum(integer $OtherKBSum) Set Traffic of other attacks in KB
 * @method integer getTotalTraffic() Obtain Total attack traffic in KB
 * @method void setTotalTraffic(integer $TotalTraffic) Set Total attack traffic in KB
 * @method integer getMbps() Obtain Attack traffic bandwidth peak
 * @method void setMbps(integer $Mbps) Set Attack traffic bandwidth peak
 * @method integer getPps() Obtain Attack packet rate peak
 * @method void setPps(integer $Pps) Set Attack packet rate peak
 * @method array getPcapUrl() Obtain PCAP file download link
 * @method void setPcapUrl(array $PcapUrl) Set PCAP file download link
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDDoSEvInfoResponse extends AbstractModel
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
     * @var string Attack start time
     */
    public $StartTime;

    /**
     * @var string Attack end time
     */
    public $EndTime;

    /**
     * @var integer Number of TCP attack packets
     */
    public $TcpPacketSum;

    /**
     * @var integer Traffic of TCP attacks in KB
     */
    public $TcpKBSum;

    /**
     * @var integer Number of UDP attack packets
     */
    public $UdpPacketSum;

    /**
     * @var integer Traffic of UDP attacks in KB
     */
    public $UdpKBSum;

    /**
     * @var integer Number of ICMP attack packets
     */
    public $IcmpPacketSum;

    /**
     * @var integer Traffic of ICMP attacks in KB
     */
    public $IcmpKBSum;

    /**
     * @var integer Number of other attack packets
     */
    public $OtherPacketSum;

    /**
     * @var integer Traffic of other attacks in KB
     */
    public $OtherKBSum;

    /**
     * @var integer Total attack traffic in KB
     */
    public $TotalTraffic;

    /**
     * @var integer Attack traffic bandwidth peak
     */
    public $Mbps;

    /**
     * @var integer Attack packet rate peak
     */
    public $Pps;

    /**
     * @var array PCAP file download link
     */
    public $PcapUrl;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     * @param string $Id Anti-DDoS instance ID
     * @param string $Ip Resource IP
     * @param string $StartTime Attack start time
     * @param string $EndTime Attack end time
     * @param integer $TcpPacketSum Number of TCP attack packets
     * @param integer $TcpKBSum Traffic of TCP attacks in KB
     * @param integer $UdpPacketSum Number of UDP attack packets
     * @param integer $UdpKBSum Traffic of UDP attacks in KB
     * @param integer $IcmpPacketSum Number of ICMP attack packets
     * @param integer $IcmpKBSum Traffic of ICMP attacks in KB
     * @param integer $OtherPacketSum Number of other attack packets
     * @param integer $OtherKBSum Traffic of other attacks in KB
     * @param integer $TotalTraffic Total attack traffic in KB
     * @param integer $Mbps Attack traffic bandwidth peak
     * @param integer $Pps Attack packet rate peak
     * @param array $PcapUrl PCAP file download link
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

        if (array_key_exists("TcpPacketSum",$param) and $param["TcpPacketSum"] !== null) {
            $this->TcpPacketSum = $param["TcpPacketSum"];
        }

        if (array_key_exists("TcpKBSum",$param) and $param["TcpKBSum"] !== null) {
            $this->TcpKBSum = $param["TcpKBSum"];
        }

        if (array_key_exists("UdpPacketSum",$param) and $param["UdpPacketSum"] !== null) {
            $this->UdpPacketSum = $param["UdpPacketSum"];
        }

        if (array_key_exists("UdpKBSum",$param) and $param["UdpKBSum"] !== null) {
            $this->UdpKBSum = $param["UdpKBSum"];
        }

        if (array_key_exists("IcmpPacketSum",$param) and $param["IcmpPacketSum"] !== null) {
            $this->IcmpPacketSum = $param["IcmpPacketSum"];
        }

        if (array_key_exists("IcmpKBSum",$param) and $param["IcmpKBSum"] !== null) {
            $this->IcmpKBSum = $param["IcmpKBSum"];
        }

        if (array_key_exists("OtherPacketSum",$param) and $param["OtherPacketSum"] !== null) {
            $this->OtherPacketSum = $param["OtherPacketSum"];
        }

        if (array_key_exists("OtherKBSum",$param) and $param["OtherKBSum"] !== null) {
            $this->OtherKBSum = $param["OtherKBSum"];
        }

        if (array_key_exists("TotalTraffic",$param) and $param["TotalTraffic"] !== null) {
            $this->TotalTraffic = $param["TotalTraffic"];
        }

        if (array_key_exists("Mbps",$param) and $param["Mbps"] !== null) {
            $this->Mbps = $param["Mbps"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("PcapUrl",$param) and $param["PcapUrl"] !== null) {
            $this->PcapUrl = $param["PcapUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
