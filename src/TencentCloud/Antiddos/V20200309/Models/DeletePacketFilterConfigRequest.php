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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePacketFilterConfig request structure.
 *
 * @method string getInstanceId() Obtain Anti-DDoS instance ID
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID
 * @method PacketFilterConfig getPacketFilterConfig() Obtain Feature filtering configuration
 * @method void setPacketFilterConfig(PacketFilterConfig $PacketFilterConfig) Set Feature filtering configuration
 */
class DeletePacketFilterConfigRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS instance ID
     */
    public $InstanceId;

    /**
     * @var PacketFilterConfig Feature filtering configuration
     */
    public $PacketFilterConfig;

    /**
     * @param string $InstanceId Anti-DDoS instance ID
     * @param PacketFilterConfig $PacketFilterConfig Feature filtering configuration
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PacketFilterConfig",$param) and $param["PacketFilterConfig"] !== null) {
            $this->PacketFilterConfig = new PacketFilterConfig();
            $this->PacketFilterConfig->deserialize($param["PacketFilterConfig"]);
        }
    }
}
