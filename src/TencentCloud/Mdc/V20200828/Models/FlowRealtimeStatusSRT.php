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
 * SRT information of the real-time stream status query API.
 *
 * @method integer getLatency() Obtain Delay in ms.
 * @method void setLatency(integer $Latency) Set Delay in ms.
 * @method integer getRTT() Obtain RTT in ms.
 * @method void setRTT(integer $RTT) Set RTT in ms.
 * @method integer getPackets() Obtain Number of packets sent or received in real time.
 * @method void setPackets(integer $Packets) Set Number of packets sent or received in real time.
 * @method float getPacketLossRate() Obtain Packet loss rate.
 * @method void setPacketLossRate(float $PacketLossRate) Set Packet loss rate.
 * @method float getRetransmitRate() Obtain Retransmission rate.
 * @method void setRetransmitRate(float $RetransmitRate) Set Retransmission rate.
 * @method integer getDroppedPackets() Obtain Real-time packet loss count.
 * @method void setDroppedPackets(integer $DroppedPackets) Set Real-time packet loss count.
 * @method string getEncryption() Obtain Whether to encrypt. On | Off.
 * @method void setEncryption(string $Encryption) Set Whether to encrypt. On | Off.
 */
class FlowRealtimeStatusSRT extends AbstractModel
{
    /**
     * @var integer Delay in ms.
     */
    public $Latency;

    /**
     * @var integer RTT in ms.
     */
    public $RTT;

    /**
     * @var integer Number of packets sent or received in real time.
     */
    public $Packets;

    /**
     * @var float Packet loss rate.
     */
    public $PacketLossRate;

    /**
     * @var float Retransmission rate.
     */
    public $RetransmitRate;

    /**
     * @var integer Real-time packet loss count.
     */
    public $DroppedPackets;

    /**
     * @var string Whether to encrypt. On | Off.
     */
    public $Encryption;

    /**
     * @param integer $Latency Delay in ms.
     * @param integer $RTT RTT in ms.
     * @param integer $Packets Number of packets sent or received in real time.
     * @param float $PacketLossRate Packet loss rate.
     * @param float $RetransmitRate Retransmission rate.
     * @param integer $DroppedPackets Real-time packet loss count.
     * @param string $Encryption Whether to encrypt. On | Off.
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
        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }

        if (array_key_exists("RTT",$param) and $param["RTT"] !== null) {
            $this->RTT = $param["RTT"];
        }

        if (array_key_exists("Packets",$param) and $param["Packets"] !== null) {
            $this->Packets = $param["Packets"];
        }

        if (array_key_exists("PacketLossRate",$param) and $param["PacketLossRate"] !== null) {
            $this->PacketLossRate = $param["PacketLossRate"];
        }

        if (array_key_exists("RetransmitRate",$param) and $param["RetransmitRate"] !== null) {
            $this->RetransmitRate = $param["RetransmitRate"];
        }

        if (array_key_exists("DroppedPackets",$param) and $param["DroppedPackets"] !== null) {
            $this->DroppedPackets = $param["DroppedPackets"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }
    }
}
