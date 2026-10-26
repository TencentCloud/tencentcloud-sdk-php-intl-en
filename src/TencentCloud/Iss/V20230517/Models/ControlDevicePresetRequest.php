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
 * ControlDevicePreset request structure.
 *
 * @method string getChannelId() Obtain Channel ID (obtain from the channel query API DescribeDeviceChannel)
 * @method void setChannelId(string $ChannelId) Set Channel ID (obtain from the channel query API DescribeDeviceChannel)
 * @method string getCmd() Obtain Command (goto: preset position call;
Set: preset position settings
del: Delete preset position)
 * @method void setCmd(string $Cmd) Set Command (goto: preset position call;
Set: preset position settings
del: Delete preset position)
 * @method integer getIndex() Obtain Preset position index (supports only index positions 1-10; an error is reported if exceeded)
 * @method void setIndex(integer $Index) Set Preset position index (supports only index positions 1-10; an error is reported if exceeded)
 */
class ControlDevicePresetRequest extends AbstractModel
{
    /**
     * @var string Channel ID (obtain from the channel query API DescribeDeviceChannel)
     */
    public $ChannelId;

    /**
     * @var string Command (goto: preset position call;
Set: preset position settings
del: Delete preset position)
     */
    public $Cmd;

    /**
     * @var integer Preset position index (supports only index positions 1-10; an error is reported if exceeded)
     */
    public $Index;

    /**
     * @param string $ChannelId Channel ID (obtain from the channel query API DescribeDeviceChannel)
     * @param string $Cmd Command (goto: preset position call;
Set: preset position settings
del: Delete preset position)
     * @param integer $Index Preset position index (supports only index positions 1-10; an error is reported if exceeded)
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

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
