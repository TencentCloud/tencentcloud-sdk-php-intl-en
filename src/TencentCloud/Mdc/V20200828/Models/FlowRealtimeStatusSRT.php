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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The real-time SRT streaming information of a flow.
 *
 * @method integer getLatency() Obtain The latency (ms).
 * @method void setLatency(integer $Latency) Set The latency (ms).
 * @method integer getRTT() Obtain RTT (ms).
 * @method void setRTT(integer $RTT) Set RTT (ms).
 * @method integer getPackets() Obtain The number of packets sent or received.
 * @method void setPackets(integer $Packets) Set The number of packets sent or received.
 * @method float getPacketLossRate() Obtain The packet loss rate.
 * @method void setPacketLossRate(float $PacketLossRate) Set The packet loss rate.
 * @method float getRetransmitRate() Obtain The retransmission rate.
 * @method void setRetransmitRate(float $RetransmitRate) Set The retransmission rate.
 * @method integer getDroppedPackets() Obtain The number of packets dropped.
 * @method void setDroppedPackets(integer $DroppedPackets) Set The number of packets dropped.
 * @method string getEncryption() Obtain Whether to encrypt the stream. Valid values: On, Off.
 * @method void setEncryption(string $Encryption) Set Whether to encrypt the stream. Valid values: On, Off.
 */
class FlowRealtimeStatusSRT extends AbstractModel
{
    /**
     * @var integer The latency (ms).
     */
    public $Latency;

    /**
     * @var integer RTT (ms).
     */
    public $RTT;

    /**
     * @var integer The number of packets sent or received.
     */
    public $Packets;

    /**
     * @var float The packet loss rate.
     */
    public $PacketLossRate;

    /**
     * @var float The retransmission rate.
     */
    public $RetransmitRate;

    /**
     * @var integer The number of packets dropped.
     */
    public $DroppedPackets;

    /**
     * @var string Whether to encrypt the stream. Valid values: On, Off.
     */
    public $Encryption;

    /**
     * @param integer $Latency The latency (ms).
     * @param integer $RTT RTT (ms).
     * @param integer $Packets The number of packets sent or received.
     * @param float $PacketLossRate The packet loss rate.
     * @param float $RetransmitRate The retransmission rate.
     * @param integer $DroppedPackets The number of packets dropped.
     * @param string $Encryption Whether to encrypt the stream. Valid values: On, Off.
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
