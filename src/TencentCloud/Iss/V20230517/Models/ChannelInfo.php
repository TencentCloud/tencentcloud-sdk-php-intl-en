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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel and device information of the channel
 *
 * @method string getDeviceId() Obtain Device ID to which the channel belongs
 * @method void setDeviceId(string $DeviceId) Set Device ID to which the channel belongs
 * @method string getChannelId() Obtain Device channel ID. A device channel can only be added to one cloud connection plan.
 * @method void setChannelId(string $ChannelId) Set Device channel ID. A device channel can only be added to one cloud connection plan.
 */
class ChannelInfo extends AbstractModel
{
    /**
     * @var string Device ID to which the channel belongs
     */
    public $DeviceId;

    /**
     * @var string Device channel ID. A device channel can only be added to one cloud connection plan.
     */
    public $ChannelId;

    /**
     * @param string $DeviceId Device ID to which the channel belongs
     * @param string $ChannelId Device channel ID. A device channel can only be added to one cloud connection plan.
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
