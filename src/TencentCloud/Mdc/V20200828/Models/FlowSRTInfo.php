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
 * @method float getBandwidth() Obtain bandwidth
 * @method void setBandwidth(float $Bandwidth) Set bandwidth
 * @method float getSendBandwidth() Obtain Transmit bandwidth
 * @method void setSendBandwidth(float $SendBandwidth) Set Transmit bandwidth
 * @method float getRecvBandwidth() Obtain Receive bandwidth
 * @method void setRecvBandwidth(float $RecvBandwidth) Set Receive bandwidth
 * @method integer getSendPackets() Obtain Number of packets sent
 * @method void setSendPackets(integer $SendPackets) Set Number of packets sent
 * @method integer getRecvPackets() Obtain Number of received packets
 * @method void setRecvPackets(integer $RecvPackets) Set Number of received packets
 * @method integer getSendLostPackets() Obtain Send lost package
 * @method void setSendLostPackets(integer $SendLostPackets) Set Send lost package
 * @method integer getRecvLostPackets() Obtain Accept lost packages
 * @method void setRecvLostPackets(integer $RecvLostPackets) Set Accept lost packages
 * @method integer getSendRetransmitPackets() Obtain Number of retransmission packets sent
 * @method void setSendRetransmitPackets(integer $SendRetransmitPackets) Set Number of retransmission packets sent
 * @method integer getRecvRetransmitPackets() Obtain Number of received retransmission packets
 * @method void setRecvRetransmitPackets(integer $RecvRetransmitPackets) Set Number of received retransmission packets
 * @method integer getFlightSize() Obtain Flight window size
 * @method void setFlightSize(integer $FlightSize) Set Flight window size
 * @method integer getCongestionWindow() Obtain congestion window
 * @method void setCongestionWindow(integer $CongestionWindow) Set congestion window
 * @method integer getSendBuffer() Obtain Send buffer (ms)
 * @method void setSendBuffer(integer $SendBuffer) Set Send buffer (ms)
 * @method integer getRecvBuffer() Obtain Receive buffer (ms)
 * @method void setRecvBuffer(integer $RecvBuffer) Set Receive buffer (ms)
 * @method integer getSendLatency() Obtain Sending delay
 * @method void setSendLatency(integer $SendLatency) Set Sending delay
 * @method integer getRecvLatency() Obtain Receiving delay
 * @method void setRecvLatency(integer $RecvLatency) Set Receiving delay
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
     * @var float bandwidth
     */
    public $Bandwidth;

    /**
     * @var float Transmit bandwidth
     */
    public $SendBandwidth;

    /**
     * @var float Receive bandwidth
     */
    public $RecvBandwidth;

    /**
     * @var integer Number of packets sent
     */
    public $SendPackets;

    /**
     * @var integer Number of received packets
     */
    public $RecvPackets;

    /**
     * @var integer Send lost package
     */
    public $SendLostPackets;

    /**
     * @var integer Accept lost packages
     */
    public $RecvLostPackets;

    /**
     * @var integer Number of retransmission packets sent
     */
    public $SendRetransmitPackets;

    /**
     * @var integer Number of received retransmission packets
     */
    public $RecvRetransmitPackets;

    /**
     * @var integer Flight window size
     */
    public $FlightSize;

    /**
     * @var integer congestion window
     */
    public $CongestionWindow;

    /**
     * @var integer Send buffer (ms)
     */
    public $SendBuffer;

    /**
     * @var integer Receive buffer (ms)
     */
    public $RecvBuffer;

    /**
     * @var integer Sending delay
     */
    public $SendLatency;

    /**
     * @var integer Receiving delay
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
     * @param float $Bandwidth bandwidth
     * @param float $SendBandwidth Transmit bandwidth
     * @param float $RecvBandwidth Receive bandwidth
     * @param integer $SendPackets Number of packets sent
     * @param integer $RecvPackets Number of received packets
     * @param integer $SendLostPackets Send lost package
     * @param integer $RecvLostPackets Accept lost packages
     * @param integer $SendRetransmitPackets Number of retransmission packets sent
     * @param integer $RecvRetransmitPackets Number of received retransmission packets
     * @param integer $FlightSize Flight window size
     * @param integer $CongestionWindow congestion window
     * @param integer $SendBuffer Send buffer (ms)
     * @param integer $RecvBuffer Receive buffer (ms)
     * @param integer $SendLatency Sending delay
     * @param integer $RecvLatency Receiving delay
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
