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
 * DescribeRecordPlaybackUrl request structure.
 *
 * @method string getChannelId() Obtain Device channel ID
 * @method void setChannelId(string $ChannelId) Set Device channel ID
 * @method integer getStartTime() Obtain Replay start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
 * @method void setStartTime(integer $StartTime) Set Replay start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
 * @method integer getEndTime() Obtain Replay end time in UTC seconds, for example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
 * @method void setEndTime(integer $EndTime) Set Replay end time in UTC seconds, for example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
 * @method boolean getIsInternal() Obtain Whether to obtain the intranet address
 * @method void setIsInternal(boolean $IsInternal) Set Whether to obtain the intranet address
 * @method boolean getCorrectTimestamp() Obtain Whether to enable timestamp correction during cloud video playback. This primarily addresses issues such as timestamp reversal or rollback that cause playback failure.
 * @method void setCorrectTimestamp(boolean $CorrectTimestamp) Set Whether to enable timestamp correction during cloud video playback. This primarily addresses issues such as timestamp reversal or rollback that cause playback failure.
 */
class DescribeRecordPlaybackUrlRequest extends AbstractModel
{
    /**
     * @var string Device channel ID
     */
    public $ChannelId;

    /**
     * @var integer Replay start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
     */
    public $StartTime;

    /**
     * @var integer Replay end time in UTC seconds, for example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
     */
    public $EndTime;

    /**
     * @var boolean Whether to obtain the intranet address
     */
    public $IsInternal;

    /**
     * @var boolean Whether to enable timestamp correction during cloud video playback. This primarily addresses issues such as timestamp reversal or rollback that cause playback failure.
     */
    public $CorrectTimestamp;

    /**
     * @param string $ChannelId Device channel ID
     * @param integer $StartTime Replay start time in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
     * @param integer $EndTime Replay end time in UTC seconds, for example: 1662114246. The longest period between the start and end times is one day, and cannot span multiple days.
     * @param boolean $IsInternal Whether to obtain the intranet address
     * @param boolean $CorrectTimestamp Whether to enable timestamp correction during cloud video playback. This primarily addresses issues such as timestamp reversal or rollback that cause playback failure.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }

        if (array_key_exists("CorrectTimestamp",$param) and $param["CorrectTimestamp"] !== null) {
            $this->CorrectTimestamp = $param["CorrectTimestamp"];
        }
    }
}
