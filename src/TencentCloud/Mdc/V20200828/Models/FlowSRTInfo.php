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
 * The SRT streaming performance data.
 *
 * @method integer getTimestamp() Obtain The timestamp (seconds).
 * @method void setTimestamp(integer $Timestamp) Set The timestamp (seconds).
 * @method integer getSendPacketLossRate() Obtain The packet loss rate for sending.
 * @method void setSendPacketLossRate(integer $SendPacketLossRate) Set The packet loss rate for sending.
 * @method integer getSendRetransmissionRate() Obtain The retry rate for sending.
 * @method void setSendRetransmissionRate(integer $SendRetransmissionRate) Set The retry rate for sending.
 * @method integer getRecvPacketLossRate() Obtain The packet loss rate for receiving.
 * @method void setRecvPacketLossRate(integer $RecvPacketLossRate) Set The packet loss rate for receiving.
 * @method integer getRecvRetransmissionRate() Obtain The retry rate for receiving.
 * @method void setRecvRetransmissionRate(integer $RecvRetransmissionRate) Set The retry rate for receiving.
 * @method integer getRTT() Obtain The peer RTT.
 * @method void setRTT(integer $RTT) Set The peer RTT.
 * @method string getSessionId() Obtain The ID of a push session.
 * @method void setSessionId(string $SessionId) Set The ID of a push session.
 * @method integer getSendPacketDropNumber() Obtain The number of dropped packets for sending.
 * @method void setSendPacketDropNumber(integer $SendPacketDropNumber) Set The number of dropped packets for sending.
 * @method integer getRecvPacketDropNumber() Obtain The number of dropped packets for receiving.
 * @method void setRecvPacketDropNumber(integer $RecvPacketDropNumber) Set The number of dropped packets for receiving.
 * @method float getBandwidth() Obtain Bandwidth
 * @method void setBandwidth(float $Bandwidth) Set Bandwidth
 * @method float getSendBandwidth() Obtain transmit bandwidth
 * @method void setSendBandwidth(float $SendBandwidth) Set transmit bandwidth
 * @method float getRecvBandwidth() Obtain Receiving bandwidth
 * @method void setRecvBandwidth(float $RecvBandwidth) Set Receiving bandwidth
 * @method integer getSendPackets() Obtain Sent packet count
 * @method void setSendPackets(integer $SendPackets) Set Sent packet count
 * @method integer getRecvPackets() Obtain Received packets
 * @method void setRecvPackets(integer $RecvPackets) Set Received packets
 * @method integer getSendLostPackets() Obtain Sent lost packets
 * @method void setSendLostPackets(integer $SendLostPackets) Set Sent lost packets
 * @method integer getRecvLostPackets() Obtain accept lost packets
 * @method void setRecvLostPackets(integer $RecvLostPackets) Set accept lost packets
 * @method integer getSendRetransmitPackets() Obtain Retransmitted packet count
 * @method void setSendRetransmitPackets(integer $SendRetransmitPackets) Set Retransmitted packet count
 * @method integer getRecvRetransmitPackets() Obtain Retransmitted packets received
 * @method void setRecvRetransmitPackets(integer $RecvRetransmitPackets) Set Retransmitted packets received
 * @method integer getFlightSize() Obtain Window size
 * @method void setFlightSize(integer $FlightSize) Set Window size
 * @method integer getCongestionWindow() Obtain Congestion window
 * @method void setCongestionWindow(integer $CongestionWindow) Set Congestion window
 * @method integer getSendBuffer() Obtain Sending buffer (ms)
 * @method void setSendBuffer(integer $SendBuffer) Set Sending buffer (ms)
 * @method integer getRecvBuffer() Obtain Receive buffer (ms)
 * @method void setRecvBuffer(integer $RecvBuffer) Set Receive buffer (ms)
 * @method integer getSendLatency() Obtain Send delay
 * @method void setSendLatency(integer $SendLatency) Set Send delay
 * @method integer getRecvLatency() Obtain receive latency
 * @method void setRecvLatency(integer $RecvLatency) Set receive latency
 */
class FlowSRTInfo extends AbstractModel
{
    /**
     * @var integer The timestamp (seconds).
     */
    public $Timestamp;

    /**
     * @var integer The packet loss rate for sending.
     */
    public $SendPacketLossRate;

    /**
     * @var integer The retry rate for sending.
     */
    public $SendRetransmissionRate;

    /**
     * @var integer The packet loss rate for receiving.
     */
    public $RecvPacketLossRate;

    /**
     * @var integer The retry rate for receiving.
     */
    public $RecvRetransmissionRate;

    /**
     * @var integer The peer RTT.
     */
    public $RTT;

    /**
     * @var string The ID of a push session.
     */
    public $SessionId;

    /**
     * @var integer The number of dropped packets for sending.
     */
    public $SendPacketDropNumber;

    /**
     * @var integer The number of dropped packets for receiving.
     */
    public $RecvPacketDropNumber;

    /**
     * @var float Bandwidth
     */
    public $Bandwidth;

    /**
     * @var float transmit bandwidth
     */
    public $SendBandwidth;

    /**
     * @var float Receiving bandwidth
     */
    public $RecvBandwidth;

    /**
     * @var integer Sent packet count
     */
    public $SendPackets;

    /**
     * @var integer Received packets
     */
    public $RecvPackets;

    /**
     * @var integer Sent lost packets
     */
    public $SendLostPackets;

    /**
     * @var integer accept lost packets
     */
    public $RecvLostPackets;

    /**
     * @var integer Retransmitted packet count
     */
    public $SendRetransmitPackets;

    /**
     * @var integer Retransmitted packets received
     */
    public $RecvRetransmitPackets;

    /**
     * @var integer Window size
     */
    public $FlightSize;

    /**
     * @var integer Congestion window
     */
    public $CongestionWindow;

    /**
     * @var integer Sending buffer (ms)
     */
    public $SendBuffer;

    /**
     * @var integer Receive buffer (ms)
     */
    public $RecvBuffer;

    /**
     * @var integer Send delay
     */
    public $SendLatency;

    /**
     * @var integer receive latency
     */
    public $RecvLatency;

    /**
     * @param integer $Timestamp The timestamp (seconds).
     * @param integer $SendPacketLossRate The packet loss rate for sending.
     * @param integer $SendRetransmissionRate The retry rate for sending.
     * @param integer $RecvPacketLossRate The packet loss rate for receiving.
     * @param integer $RecvRetransmissionRate The retry rate for receiving.
     * @param integer $RTT The peer RTT.
     * @param string $SessionId The ID of a push session.
     * @param integer $SendPacketDropNumber The number of dropped packets for sending.
     * @param integer $RecvPacketDropNumber The number of dropped packets for receiving.
     * @param float $Bandwidth Bandwidth
     * @param float $SendBandwidth transmit bandwidth
     * @param float $RecvBandwidth Receiving bandwidth
     * @param integer $SendPackets Sent packet count
     * @param integer $RecvPackets Received packets
     * @param integer $SendLostPackets Sent lost packets
     * @param integer $RecvLostPackets accept lost packets
     * @param integer $SendRetransmitPackets Retransmitted packet count
     * @param integer $RecvRetransmitPackets Retransmitted packets received
     * @param integer $FlightSize Window size
     * @param integer $CongestionWindow Congestion window
     * @param integer $SendBuffer Sending buffer (ms)
     * @param integer $RecvBuffer Receive buffer (ms)
     * @param integer $SendLatency Send delay
     * @param integer $RecvLatency receive latency
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
    }
}
