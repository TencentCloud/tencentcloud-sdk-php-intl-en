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
 * ControlDevicePTZ request structure.
 *
 * @method string getChannelId() Obtain Channel ID (obtain from the channel query API DescribeDeviceChannel)
 * @method void setChannelId(string $ChannelId) Set Channel ID (obtain from the channel query API DescribeDeviceChannel)
 * @method string getType() Obtain Command type (up, down, left, right).
Upper left: leftup, upper right: rightup, lower left: leftdown, lower right: rightdown
Zoom in: zoom in, zoom out: zoom out
Focus far: focusfar, focus near: focusnear
Iris in: enlarge aperture, iris out: shrink aperture)
 * @method void setType(string $Type) Set Command type (up, down, left, right).
Upper left: leftup, upper right: rightup, lower left: leftdown, lower right: rightdown
Zoom in: zoom in, zoom out: zoom out
Focus far: focusfar, focus near: focusnear
Iris in: enlarge aperture, iris out: shrink aperture)
 * @method integer getSpeed() Obtain Command description (speed range: 1-8)
 * @method void setSpeed(integer $Speed) Set Command description (speed range: 1-8)
 */
class ControlDevicePTZRequest extends AbstractModel
{
    /**
     * @var string Channel ID (obtain from the channel query API DescribeDeviceChannel)
     */
    public $ChannelId;

    /**
     * @var string Command type (up, down, left, right).
Upper left: leftup, upper right: rightup, lower left: leftdown, lower right: rightdown
Zoom in: zoom in, zoom out: zoom out
Focus far: focusfar, focus near: focusnear
Iris in: enlarge aperture, iris out: shrink aperture)
     */
    public $Type;

    /**
     * @var integer Command description (speed range: 1-8)
     */
    public $Speed;

    /**
     * @param string $ChannelId Channel ID (obtain from the channel query API DescribeDeviceChannel)
     * @param string $Type Command type (up, down, left, right).
Upper left: leftup, upper right: rightup, lower left: leftdown, lower right: rightdown
Zoom in: zoom in, zoom out: zoom out
Focus far: focusfar, focus near: focusnear
Iris in: enlarge aperture, iris out: shrink aperture)
     * @param integer $Speed Command description (speed range: 1-8)
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
