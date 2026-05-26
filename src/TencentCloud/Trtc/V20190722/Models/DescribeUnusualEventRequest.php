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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUnusualEvent request structure.
 *
 * @method integer getSdkAppId() Obtain User SdkAppId (for example: 1400xxxxxx).
 * @method void setSdkAppId(integer $SdkAppId) Set User SdkAppId (for example: 1400xxxxxx).
 * @method integer getStartTime() Obtain Query start time, local unix timestamp, in seconds (for example: 1590065777).
Note: support querying data within the last 14 days.
 * @method void setStartTime(integer $StartTime) Set Query start time, local unix timestamp, in seconds (for example: 1590065777).
Note: support querying data within the last 14 days.
 * @method integer getEndTime() Obtain Query end time, local unix timestamp, in seconds (for example, 1590065877). note: the time interval from StartTime should be no more than 1 hour.
 * @method void setEndTime(integer $EndTime) Set Query end time, local unix timestamp, in seconds (for example, 1590065877). note: the time interval from StartTime should be no more than 1 hour.
 * @method string getRoomId() Obtain Room number. query up to 20 abnormal experience events in the room.
 * @method void setRoomId(string $RoomId) Set Room number. query up to 20 abnormal experience events in the room.
 */
class DescribeUnusualEventRequest extends AbstractModel
{
    /**
     * @var integer User SdkAppId (for example: 1400xxxxxx).
     */
    public $SdkAppId;

    /**
     * @var integer Query start time, local unix timestamp, in seconds (for example: 1590065777).
Note: support querying data within the last 14 days.
     */
    public $StartTime;

    /**
     * @var integer Query end time, local unix timestamp, in seconds (for example, 1590065877). note: the time interval from StartTime should be no more than 1 hour.
     */
    public $EndTime;

    /**
     * @var string Room number. query up to 20 abnormal experience events in the room.
     */
    public $RoomId;

    /**
     * @param integer $SdkAppId User SdkAppId (for example: 1400xxxxxx).
     * @param integer $StartTime Query start time, local unix timestamp, in seconds (for example: 1590065777).
Note: support querying data within the last 14 days.
     * @param integer $EndTime Query end time, local unix timestamp, in seconds (for example, 1590065877). note: the time interval from StartTime should be no more than 1 hour.
     * @param string $RoomId Room number. query up to 20 abnormal experience events in the room.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
