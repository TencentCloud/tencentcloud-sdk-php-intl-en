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
 * The information of a room event.
 *
 * @method integer getRoomId() Obtain The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoomId(integer $RoomId) Set The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain The ID of the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set The ID of the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDevice() Obtain User device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Wechat Mini Program.
 * @method void setDevice(integer $Device) Set User device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Wechat Mini Program.
 * @method integer getDuration() Obtain Recording time. Unit: seconds
 * @method void setDuration(integer $Duration) Set Recording time. Unit: seconds
 * @method integer getRecordSize() Obtain Recorded file size
 * @method void setRecordSize(integer $RecordSize) Set Recorded file size
 * @method string getRecordUrl() Obtain Recording url
 * @method void setRecordUrl(string $RecordUrl) Set Recording url
 */
class EventDataInfo extends AbstractModel
{
    /**
     * @var integer The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoomId;

    /**
     * @var string The ID of the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var integer User device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Wechat Mini Program.
     */
    public $Device;

    /**
     * @var integer Recording time. Unit: seconds
     */
    public $Duration;

    /**
     * @var integer Recorded file size
     */
    public $RecordSize;

    /**
     * @var string Recording url
     */
    public $RecordUrl;

    /**
     * @param integer $RoomId The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserId The ID of the user to whom the event occurred.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Device User device type. 0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Wechat Mini Program.
     * @param integer $Duration Recording time. Unit: seconds
     * @param integer $RecordSize Recorded file size
     * @param string $RecordUrl Recording url
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RecordSize",$param) and $param["RecordSize"] !== null) {
            $this->RecordSize = $param["RecordSize"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }
    }
}
