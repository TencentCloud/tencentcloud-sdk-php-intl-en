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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The verification result of the network detection destination IP address.
 *
 * @method string getDetectDestinationIp() Obtain The destination IPv4 address of network detection.
 * @method void setDetectDestinationIp(string $DetectDestinationIp) Set The destination IPv4 address of network detection.
 * @method integer getState() Obtain The detection result.
0: successful;
-1: no packet loss occurred during routing;
-2: packet loss occurred when outbound traffic is blocked by the ACL;
-3: packet loss occurred when inbound traffic is blocked by the ACL;
-4: other errors.
 * @method void setState(integer $State) Set The detection result.
0: successful;
-1: no packet loss occurred during routing;
-2: packet loss occurred when outbound traffic is blocked by the ACL;
-3: packet loss occurred when inbound traffic is blocked by the ACL;
-4: other errors.
 * @method integer getDelay() Obtain The latency. Unit: ms.
 * @method void setDelay(integer $Delay) Set The latency. Unit: ms.
 * @method integer getPacketLossRate() Obtain The packet loss rate.
 * @method void setPacketLossRate(integer $PacketLossRate) Set The packet loss rate.
 */
class NetDetectIpState extends AbstractModel
{
    /**
     * @var string The destination IPv4 address of network detection.
     */
    public $DetectDestinationIp;

    /**
     * @var integer The detection result.
0: successful;
-1: no packet loss occurred during routing;
-2: packet loss occurred when outbound traffic is blocked by the ACL;
-3: packet loss occurred when inbound traffic is blocked by the ACL;
-4: other errors.
     */
    public $State;

    /**
     * @var integer The latency. Unit: ms.
     */
    public $Delay;

    /**
     * @var integer The packet loss rate.
     */
    public $PacketLossRate;

    /**
     * @param string $DetectDestinationIp The destination IPv4 address of network detection.
     * @param integer $State The detection result.
0: successful;
-1: no packet loss occurred during routing;
-2: packet loss occurred when outbound traffic is blocked by the ACL;
-3: packet loss occurred when inbound traffic is blocked by the ACL;
-4: other errors.
     * @param integer $Delay The latency. Unit: ms.
     * @param integer $PacketLossRate The packet loss rate.
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
        if (array_key_exists("DetectDestinationIp",$param) and $param["DetectDestinationIp"] !== null) {
            $this->DetectDestinationIp = $param["DetectDestinationIp"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Delay",$param) and $param["Delay"] !== null) {
            $this->Delay = $param["Delay"];
        }

        if (array_key_exists("PacketLossRate",$param) and $param["PacketLossRate"] !== null) {
            $this->PacketLossRate = $param["PacketLossRate"];
        }
    }
}
