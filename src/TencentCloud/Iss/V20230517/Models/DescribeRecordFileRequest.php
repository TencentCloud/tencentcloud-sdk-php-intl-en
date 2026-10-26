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
 * DescribeRecordFile request structure.
 *
 * @method string getDeviceId() Obtain Device ID to which the channel belongs
 * @method void setDeviceId(string $DeviceId) Set Device ID to which the channel belongs
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method integer getStartTime() Obtain Search start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
 * @method void setStartTime(integer $StartTime) Set Search start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
 * @method integer getEndTime() Obtain Search end time, UTC seconds. Example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
 * @method void setEndTime(integer $EndTime) Set Search end time, UTC seconds. Example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
 * @method boolean getWithUrl() Obtain Whether to carry the playback url for each time period
 * @method void setWithUrl(boolean $WithUrl) Set Whether to carry the playback url for each time period
 */
class DescribeRecordFileRequest extends AbstractModel
{
    /**
     * @var string Device ID to which the channel belongs
     */
    public $DeviceId;

    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var integer Search start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
     */
    public $StartTime;

    /**
     * @var integer Search end time, UTC seconds. Example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
     */
    public $EndTime;

    /**
     * @var boolean Whether to carry the playback url for each time period
     */
    public $WithUrl;

    /**
     * @param string $DeviceId Device ID to which the channel belongs
     * @param string $ChannelId Channel ID
     * @param integer $StartTime Search start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
     * @param integer $EndTime Search end time, UTC seconds. Example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
     * @param boolean $WithUrl Whether to carry the playback url for each time period
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("WithUrl",$param) and $param["WithUrl"] !== null) {
            $this->WithUrl = $param["WithUrl"];
        }
    }
}
