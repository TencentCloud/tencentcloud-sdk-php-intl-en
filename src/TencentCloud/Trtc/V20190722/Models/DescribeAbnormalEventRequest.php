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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAbnormalEvent request structure.
 *
 * @method string getSdkAppId() Obtain User `SDKAppID`, which can be used to query 20 exceptional experience events (in one or more rooms)
 * @method void setSdkAppId(string $SdkAppId) Set User `SDKAppID`, which can be used to query 20 exceptional experience events (in one or more rooms)
 * @method integer getStartTime() Obtain Query start time (s) in the format of Unix timestamp, e.g., 1592448600
 * @method void setStartTime(integer $StartTime) Set Query start time (s) in the format of Unix timestamp, e.g., 1592448600
 * @method integer getEndTime() Obtain Query end time (s) in the format of Unix timestamp, e.g., 1592449080
 * @method void setEndTime(integer $EndTime) Set Query end time (s) in the format of Unix timestamp, e.g., 1592449080
 * @method string getRoomId() Obtain Room ID, which can be used to query up to 20 exceptional experience events in a specific room
 * @method void setRoomId(string $RoomId) Set Room ID, which can be used to query up to 20 exceptional experience events in a specific room
 */
class DescribeAbnormalEventRequest extends AbstractModel
{
    /**
     * @var string User `SDKAppID`, which can be used to query 20 exceptional experience events (in one or more rooms)
     */
    public $SdkAppId;

    /**
     * @var integer Query start time (s) in the format of Unix timestamp, e.g., 1592448600
     */
    public $StartTime;

    /**
     * @var integer Query end time (s) in the format of Unix timestamp, e.g., 1592449080
     */
    public $EndTime;

    /**
     * @var string Room ID, which can be used to query up to 20 exceptional experience events in a specific room
     */
    public $RoomId;

    /**
     * @param string $SdkAppId User `SDKAppID`, which can be used to query 20 exceptional experience events (in one or more rooms)
     * @param integer $StartTime Query start time (s) in the format of Unix timestamp, e.g., 1592448600
     * @param integer $EndTime Query end time (s) in the format of Unix timestamp, e.g., 1592449080
     * @param string $RoomId Room ID, which can be used to query up to 20 exceptional experience events in a specific room
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
