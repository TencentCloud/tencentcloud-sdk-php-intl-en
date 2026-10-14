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
 * RTP stream status information of the real-time stream status query API.
 *
 * @method integer getPackets() Obtain Number of transmitted packets
 * @method void setPackets(integer $Packets) Set Number of transmitted packets
 */
class FlowRealtimeStatusRTP extends AbstractModel
{
    /**
     * @var integer Number of transmitted packets
     */
    public $Packets;

    /**
     * @param integer $Packets Number of transmitted packets
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
        if (array_key_exists("Packets",$param) and $param["Packets"] !== null) {
            $this->Packets = $param["Packets"];
        }
    }
}
