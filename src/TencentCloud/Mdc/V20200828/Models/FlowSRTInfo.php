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
     * @param integer $Timestamp The timestamp (seconds).
     * @param integer $SendPacketLossRate The packet loss rate for sending.
     * @param integer $SendRetransmissionRate The retry rate for sending.
     * @param integer $RecvPacketLossRate The packet loss rate for receiving.
     * @param integer $RecvRetransmissionRate The retry rate for receiving.
     * @param integer $RTT The peer RTT.
     * @param string $SessionId The ID of a push session.
     * @param integer $SendPacketDropNumber The number of dropped packets for sending.
     * @param integer $RecvPacketDropNumber The number of dropped packets for receiving.
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
    }
}
