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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The event information.
 *
 * @method integer getTimestamp() Obtain The Unix timestamp (seconds) when the event occurred.
 * @method void setTimestamp(integer $Timestamp) Set The Unix timestamp (seconds) when the event occurred.
 * @method string getEventType() Obtain The event type. Valid values: 
`RoomStart`: The class started. `RoomEnd`: The class ended. `MemberJoin`: A user joined. `MemberQuit`: A user left. `RecordFinish`: Recording is finished.
·Camera0n·: The camera is turned on.
`Camera0ff`: The camera is turned off.
`MicOn`: The mic is turned on.
`MicOff`: The mic is turned off.
`ScreenOn`: Screen sharing is enabled.
`ScreenOff`: Screen sharing is disabled.
`VisibleOn`: The page is visible.
`VisibleOff`: The page is invisible.
 * @method void setEventType(string $EventType) Set The event type. Valid values: 
`RoomStart`: The class started. `RoomEnd`: The class ended. `MemberJoin`: A user joined. `MemberQuit`: A user left. `RecordFinish`: Recording is finished.
·Camera0n·: The camera is turned on.
`Camera0ff`: The camera is turned off.
`MicOn`: The mic is turned on.
`MicOff`: The mic is turned off.
`ScreenOn`: Screen sharing is enabled.
`ScreenOff`: Screen sharing is disabled.
`VisibleOn`: The page is visible.
`VisibleOff`: The page is invisible.
 * @method EventDataInfo getEventData() Obtain The details of the event, including the room ID and the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventData(EventDataInfo $EventData) Set The details of the event, including the room ID and the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EventInfo extends AbstractModel
{
    /**
     * @var integer The Unix timestamp (seconds) when the event occurred.
     */
    public $Timestamp;

    /**
     * @var string The event type. Valid values: 
`RoomStart`: The class started. `RoomEnd`: The class ended. `MemberJoin`: A user joined. `MemberQuit`: A user left. `RecordFinish`: Recording is finished.
·Camera0n·: The camera is turned on.
`Camera0ff`: The camera is turned off.
`MicOn`: The mic is turned on.
`MicOff`: The mic is turned off.
`ScreenOn`: Screen sharing is enabled.
`ScreenOff`: Screen sharing is disabled.
`VisibleOn`: The page is visible.
`VisibleOff`: The page is invisible.
     */
    public $EventType;

    /**
     * @var EventDataInfo The details of the event, including the room ID and the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventData;

    /**
     * @param integer $Timestamp The Unix timestamp (seconds) when the event occurred.
     * @param string $EventType The event type. Valid values: 
`RoomStart`: The class started. `RoomEnd`: The class ended. `MemberJoin`: A user joined. `MemberQuit`: A user left. `RecordFinish`: Recording is finished.
·Camera0n·: The camera is turned on.
`Camera0ff`: The camera is turned off.
`MicOn`: The mic is turned on.
`MicOff`: The mic is turned off.
`ScreenOn`: Screen sharing is enabled.
`ScreenOff`: Screen sharing is disabled.
`VisibleOn`: The page is visible.
`VisibleOff`: The page is invisible.
     * @param EventDataInfo $EventData The details of the event, including the room ID and the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventData",$param) and $param["EventData"] !== null) {
            $this->EventData = new EventDataInfo();
            $this->EventData->deserialize($param["EventData"]);
        }
    }
}
