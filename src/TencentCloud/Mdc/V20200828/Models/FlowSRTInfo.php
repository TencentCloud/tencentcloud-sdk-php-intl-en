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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SRT quality data in the transport stream.
 *
 * @method integer getTimestamp() Obtain <p>Timestamp in seconds.</p>
 * @method void setTimestamp(integer $Timestamp) Set <p>Timestamp in seconds.</p>
 * @method integer getSendPacketLossRate() Obtain <p>Packet loss rate on transmitting.</p>
 * @method void setSendPacketLossRate(integer $SendPacketLossRate) Set <p>Packet loss rate on transmitting.</p>
 * @method integer getSendRetransmissionRate() Obtain <p>Retransmission rate.</p>
 * @method void setSendRetransmissionRate(integer $SendRetransmissionRate) Set <p>Retransmission rate.</p>
 * @method integer getRecvPacketLossRate() Obtain <p>Packet loss rate on receiving.</p>
 * @method void setRecvPacketLossRate(integer $RecvPacketLossRate) Set <p>Packet loss rate on receiving.</p>
 * @method integer getRecvRetransmissionRate() Obtain <p>Receiving retransmission rate.</p>
 * @method void setRecvRetransmissionRate(integer $RecvRetransmissionRate) Set <p>Receiving retransmission rate.</p>
 * @method integer getRTT() Obtain <p>RTT latency to the peer.</p>
 * @method void setRTT(integer $RTT) Set <p>RTT latency to the peer.</p>
 * @method string getSessionId() Obtain <p>Flag the same streaming session.</p>
 * @method void setSessionId(string $SessionId) Set <p>Flag the same streaming session.</p>
 * @method integer getSendPacketDropNumber() Obtain <p>Number of discarded packets on sending.</p>
 * @method void setSendPacketDropNumber(integer $SendPacketDropNumber) Set <p>Number of discarded packets on sending.</p>
 * @method integer getRecvPacketDropNumber() Obtain <p>Number of received dropped packets.</p>
 * @method void setRecvPacketDropNumber(integer $RecvPacketDropNumber) Set <p>Number of received dropped packets.</p>
 * @method float getBandwidth() Obtain <p>Bandwidth.</p>
 * @method void setBandwidth(float $Bandwidth) Set <p>Bandwidth.</p>
 * @method float getSendBandwidth() Obtain <p>Transmit bandwidth</p>
 * @method void setSendBandwidth(float $SendBandwidth) Set <p>Transmit bandwidth</p>
 * @method float getRecvBandwidth() Obtain <p>Receiving bandwidth</p>
 * @method void setRecvBandwidth(float $RecvBandwidth) Set <p>Receiving bandwidth</p>
 * @method integer getSendPackets() Obtain <p>Sent packet count</p>
 * @method void setSendPackets(integer $SendPackets) Set <p>Sent packet count</p>
 * @method integer getRecvPackets() Obtain <p>Number of received packets</p>
 * @method void setRecvPackets(integer $RecvPackets) Set <p>Number of received packets</p>
 * @method integer getSendLostPackets() Obtain <p>Sending lost packets</p>
 * @method void setSendLostPackets(integer $SendLostPackets) Set <p>Sending lost packets</p>
 * @method integer getRecvLostPackets() Obtain <p>Accept lost packets</p>
 * @method void setRecvLostPackets(integer $RecvLostPackets) Set <p>Accept lost packets</p>
 * @method integer getSendRetransmitPackets() Obtain <p>Sent retransmission packet count</p>
 * @method void setSendRetransmitPackets(integer $SendRetransmitPackets) Set <p>Sent retransmission packet count</p>
 * @method integer getRecvRetransmitPackets() Obtain <p>Number of received retransmission packets</p>
 * @method void setRecvRetransmitPackets(integer $RecvRetransmitPackets) Set <p>Number of received retransmission packets</p>
 * @method integer getFlightSize() Obtain <p>Flight window size</p>
 * @method void setFlightSize(integer $FlightSize) Set <p>Flight window size</p>
 * @method integer getCongestionWindow() Obtain <p>Congestion window.</p>
 * @method void setCongestionWindow(integer $CongestionWindow) Set <p>Congestion window.</p>
 * @method integer getSendBuffer() Obtain <p>Sending buffer (ms)</p>
 * @method void setSendBuffer(integer $SendBuffer) Set <p>Sending buffer (ms)</p>
 * @method integer getRecvBuffer() Obtain <p>Receive buffer (ms)</p>
 * @method void setRecvBuffer(integer $RecvBuffer) Set <p>Receive buffer (ms)</p>
 * @method integer getSendLatency() Obtain <p>Sending delay</p>
 * @method void setSendLatency(integer $SendLatency) Set <p>Sending delay</p>
 * @method integer getRecvLatency() Obtain <p>Receive latency</p>
 * @method void setRecvLatency(integer $RecvLatency) Set <p>Receive latency</p>
 * @method integer getSendNAKPackets() Obtain <p>Sent NAK packet count</p>
 * @method void setSendNAKPackets(integer $SendNAKPackets) Set <p>Sent NAK packet count</p>
 * @method integer getRecvNAKPackets() Obtain <p>Number of received NAK packets</p>
 * @method void setRecvNAKPackets(integer $RecvNAKPackets) Set <p>Number of received NAK packets</p>
 */
class FlowSRTInfo extends AbstractModel
{
    /**
     * @var integer <p>Timestamp in seconds.</p>
     */
    public $Timestamp;

    /**
     * @var integer <p>Packet loss rate on transmitting.</p>
     */
    public $SendPacketLossRate;

    /**
     * @var integer <p>Retransmission rate.</p>
     */
    public $SendRetransmissionRate;

    /**
     * @var integer <p>Packet loss rate on receiving.</p>
     */
    public $RecvPacketLossRate;

    /**
     * @var integer <p>Receiving retransmission rate.</p>
     */
    public $RecvRetransmissionRate;

    /**
     * @var integer <p>RTT latency to the peer.</p>
     */
    public $RTT;

    /**
     * @var string <p>Flag the same streaming session.</p>
     */
    public $SessionId;

    /**
     * @var integer <p>Number of discarded packets on sending.</p>
     */
    public $SendPacketDropNumber;

    /**
     * @var integer <p>Number of received dropped packets.</p>
     */
    public $RecvPacketDropNumber;

    /**
     * @var float <p>Bandwidth.</p>
     */
    public $Bandwidth;

    /**
     * @var float <p>Transmit bandwidth</p>
     */
    public $SendBandwidth;

    /**
     * @var float <p>Receiving bandwidth</p>
     */
    public $RecvBandwidth;

    /**
     * @var integer <p>Sent packet count</p>
     */
    public $SendPackets;

    /**
     * @var integer <p>Number of received packets</p>
     */
    public $RecvPackets;

    /**
     * @var integer <p>Sending lost packets</p>
     */
    public $SendLostPackets;

    /**
     * @var integer <p>Accept lost packets</p>
     */
    public $RecvLostPackets;

    /**
     * @var integer <p>Sent retransmission packet count</p>
     */
    public $SendRetransmitPackets;

    /**
     * @var integer <p>Number of received retransmission packets</p>
     */
    public $RecvRetransmitPackets;

    /**
     * @var integer <p>Flight window size</p>
     */
    public $FlightSize;

    /**
     * @var integer <p>Congestion window.</p>
     */
    public $CongestionWindow;

    /**
     * @var integer <p>Sending buffer (ms)</p>
     */
    public $SendBuffer;

    /**
     * @var integer <p>Receive buffer (ms)</p>
     */
    public $RecvBuffer;

    /**
     * @var integer <p>Sending delay</p>
     */
    public $SendLatency;

    /**
     * @var integer <p>Receive latency</p>
     */
    public $RecvLatency;

    /**
     * @var integer <p>Sent NAK packet count</p>
     */
    public $SendNAKPackets;

    /**
     * @var integer <p>Number of received NAK packets</p>
     */
    public $RecvNAKPackets;

    /**
     * @param integer $Timestamp <p>Timestamp in seconds.</p>
     * @param integer $SendPacketLossRate <p>Packet loss rate on transmitting.</p>
     * @param integer $SendRetransmissionRate <p>Retransmission rate.</p>
     * @param integer $RecvPacketLossRate <p>Packet loss rate on receiving.</p>
     * @param integer $RecvRetransmissionRate <p>Receiving retransmission rate.</p>
     * @param integer $RTT <p>RTT latency to the peer.</p>
     * @param string $SessionId <p>Flag the same streaming session.</p>
     * @param integer $SendPacketDropNumber <p>Number of discarded packets on sending.</p>
     * @param integer $RecvPacketDropNumber <p>Number of received dropped packets.</p>
     * @param float $Bandwidth <p>Bandwidth.</p>
     * @param float $SendBandwidth <p>Transmit bandwidth</p>
     * @param float $RecvBandwidth <p>Receiving bandwidth</p>
     * @param integer $SendPackets <p>Sent packet count</p>
     * @param integer $RecvPackets <p>Number of received packets</p>
     * @param integer $SendLostPackets <p>Sending lost packets</p>
     * @param integer $RecvLostPackets <p>Accept lost packets</p>
     * @param integer $SendRetransmitPackets <p>Sent retransmission packet count</p>
     * @param integer $RecvRetransmitPackets <p>Number of received retransmission packets</p>
     * @param integer $FlightSize <p>Flight window size</p>
     * @param integer $CongestionWindow <p>Congestion window.</p>
     * @param integer $SendBuffer <p>Sending buffer (ms)</p>
     * @param integer $RecvBuffer <p>Receive buffer (ms)</p>
     * @param integer $SendLatency <p>Sending delay</p>
     * @param integer $RecvLatency <p>Receive latency</p>
     * @param integer $SendNAKPackets <p>Sent NAK packet count</p>
     * @param integer $RecvNAKPackets <p>Number of received NAK packets</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SendPacketLossRate",$param) and $param["SendPacketLossRate"] !== null) {
            $this->SendPacketLossRate = $param["SendPacketLossRate"];
        }

        if (array_key_exists("SendRetransmissionRate",$param) and $param["SendRetransmissionRate"] !== null) {
            $this->SendRetransmissionRate = $param["SendRetransmissionRate"];
        }

        if (array_key_exists("RecvPacketLossRate",$param) and $param["RecvPacketLossRate"] !== null) {
            $this->RecvPacketLossRate = $param["RecvPacketLossRate"];
        }

        if (array_key_exists("RecvRetransmissionRate",$param) and $param["RecvRetransmissionRate"] !== null) {
            $this->RecvRetransmissionRate = $param["RecvRetransmissionRate"];
        }

        if (array_key_exists("RTT",$param) and $param["RTT"] !== null) {
            $this->RTT = $param["RTT"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SendPacketDropNumber",$param) and $param["SendPacketDropNumber"] !== null) {
            $this->SendPacketDropNumber = $param["SendPacketDropNumber"];
        }

        if (array_key_exists("RecvPacketDropNumber",$param) and $param["RecvPacketDropNumber"] !== null) {
            $this->RecvPacketDropNumber = $param["RecvPacketDropNumber"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("SendBandwidth",$param) and $param["SendBandwidth"] !== null) {
            $this->SendBandwidth = $param["SendBandwidth"];
        }

        if (array_key_exists("RecvBandwidth",$param) and $param["RecvBandwidth"] !== null) {
            $this->RecvBandwidth = $param["RecvBandwidth"];
        }

        if (array_key_exists("SendPackets",$param) and $param["SendPackets"] !== null) {
            $this->SendPackets = $param["SendPackets"];
        }

        if (array_key_exists("RecvPackets",$param) and $param["RecvPackets"] !== null) {
            $this->RecvPackets = $param["RecvPackets"];
        }

        if (array_key_exists("SendLostPackets",$param) and $param["SendLostPackets"] !== null) {
            $this->SendLostPackets = $param["SendLostPackets"];
        }

        if (array_key_exists("RecvLostPackets",$param) and $param["RecvLostPackets"] !== null) {
            $this->RecvLostPackets = $param["RecvLostPackets"];
        }

        if (array_key_exists("SendRetransmitPackets",$param) and $param["SendRetransmitPackets"] !== null) {
            $this->SendRetransmitPackets = $param["SendRetransmitPackets"];
        }

        if (array_key_exists("RecvRetransmitPackets",$param) and $param["RecvRetransmitPackets"] !== null) {
            $this->RecvRetransmitPackets = $param["RecvRetransmitPackets"];
        }

        if (array_key_exists("FlightSize",$param) and $param["FlightSize"] !== null) {
            $this->FlightSize = $param["FlightSize"];
        }

        if (array_key_exists("CongestionWindow",$param) and $param["CongestionWindow"] !== null) {
            $this->CongestionWindow = $param["CongestionWindow"];
        }

        if (array_key_exists("SendBuffer",$param) and $param["SendBuffer"] !== null) {
            $this->SendBuffer = $param["SendBuffer"];
        }

        if (array_key_exists("RecvBuffer",$param) and $param["RecvBuffer"] !== null) {
            $this->RecvBuffer = $param["RecvBuffer"];
        }

        if (array_key_exists("SendLatency",$param) and $param["SendLatency"] !== null) {
            $this->SendLatency = $param["SendLatency"];
        }

        if (array_key_exists("RecvLatency",$param) and $param["RecvLatency"] !== null) {
            $this->RecvLatency = $param["RecvLatency"];
        }

        if (array_key_exists("SendNAKPackets",$param) and $param["SendNAKPackets"] !== null) {
            $this->SendNAKPackets = $param["SendNAKPackets"];
        }

        if (array_key_exists("RecvNAKPackets",$param) and $param["RecvNAKPackets"] !== null) {
            $this->RecvNAKPackets = $param["RecvNAKPackets"];
        }
    }
}
