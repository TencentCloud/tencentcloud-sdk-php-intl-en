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
 * The room list.
 *
 * @method string getName() Obtain The name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set The name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRoomId() Obtain The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoomId(integer $RoomId) Set The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain The room status. `0`: Not started; `1`: Started; `2`: Ended.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set The room status. `0`: Not started; `1`: Started; `2`: Ended.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain The scheduled start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(integer $StartTime) Set The scheduled start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain The scheduled end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set The scheduled end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRealStartTime() Obtain The actual start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealStartTime(integer $RealStartTime) Set The actual start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRealEndTime() Obtain The actual end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealEndTime(integer $RealEndTime) Set The actual end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResolution() Obtain The resolution. `1`: SD.
`2`: HD
`3`: FHD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResolution(integer $Resolution) Set The resolution. `1`: SD.
`2`: HD
`3`: FHD
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRTCMember() Obtain The maximum number of mic-on users allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRTCMember(integer $MaxRTCMember) Set The maximum number of mic-on users allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReplayUrl() Obtain The URL of the room's recording. This parameter has been deprecated. Please use `RecordUrl` instead.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplayUrl(string $ReplayUrl) Set The URL of the room's recording. This parameter has been deprecated. Please use `RecordUrl` instead.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordUrl() Obtain The recording URL (HTTPS), which is generated only after a room ends.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordUrl(string $RecordUrl) Set The recording URL (HTTPS), which is generated only after a room ends.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RoomItem extends AbstractModel
{
    /**
     * @var string The name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoomId;

    /**
     * @var integer The room status. `0`: Not started; `1`: Started; `2`: Ended.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer The scheduled start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer The scheduled end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer The actual start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealStartTime;

    /**
     * @var integer The actual end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealEndTime;

    /**
     * @var integer The resolution. `1`: SD.
`2`: HD
`3`: FHD
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resolution;

    /**
     * @var integer The maximum number of mic-on users allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRTCMember;

    /**
     * @var string The URL of the room's recording. This parameter has been deprecated. Please use `RecordUrl` instead.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplayUrl;

    /**
     * @var string The recording URL (HTTPS), which is generated only after a room ends.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordUrl;

    /**
     * @param string $Name The name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RoomId The room ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status The room status. `0`: Not started; `1`: Started; `2`: Ended.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTime The scheduled start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime The scheduled end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RealStartTime The actual start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RealEndTime The actual end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Resolution The resolution. `1`: SD.
`2`: HD
`3`: FHD
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRTCMember The maximum number of mic-on users allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReplayUrl The URL of the room's recording. This parameter has been deprecated. Please use `RecordUrl` instead.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordUrl The recording URL (HTTPS), which is generated only after a room ends.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RealStartTime",$param) and $param["RealStartTime"] !== null) {
            $this->RealStartTime = $param["RealStartTime"];
        }

        if (array_key_exists("RealEndTime",$param) and $param["RealEndTime"] !== null) {
            $this->RealEndTime = $param["RealEndTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxRTCMember",$param) and $param["MaxRTCMember"] !== null) {
            $this->MaxRTCMember = $param["MaxRTCMember"];
        }

        if (array_key_exists("ReplayUrl",$param) and $param["ReplayUrl"] !== null) {
            $this->ReplayUrl = $param["ReplayUrl"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }
    }
}
