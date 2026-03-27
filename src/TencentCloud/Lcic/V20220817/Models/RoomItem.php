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
 * @method integer getMaxMicNumber() Obtain The maximum number of users allowed (including teachers) in the room. The default value is `0`, which indicates that no limit is set. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set The maximum number of users allowed (including teachers) in the room. The default value is `0`, which indicates that no limit is set. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableDirectControl() Obtain Whether the students' consent is required to control their cameras/microphones.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEnableDirectControl(integer $EnableDirectControl) Set Whether the students' consent is required to control their cameras/microphones.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getInteractionMode() Obtain Enable Focus Mode. 0: View all participants (default) 1: View only teacher and TA
 * @method void setInteractionMode(integer $InteractionMode) Set Enable Focus Mode. 0: View all participants (default) 1: View only teacher and TA
 * @method integer getVideoOrientation() Obtain Landscape/Portrait. 0: Landscape broadcast (default); 1: Portrait broadcast. Currently supported only for video-only type on mobile devices.
 * @method void setVideoOrientation(integer $VideoOrientation) Set Landscape/Portrait. 0: Landscape broadcast (default); 1: Portrait broadcast. Currently supported only for video-only type on mobile devices.
 * @method integer getIsGradingRequiredPostClass() Obtain Enable post-class evaluation. 0: Disable (default) 1: Enable
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) Set Enable post-class evaluation. 0: Disable (default) 1: Enable
 * @method integer getRoomType() Obtain Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
 * @method void setRoomType(integer $RoomType) Set Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
 * @method integer getEndDelayTime() Obtain Overtime duration: Unit in minutes. 0: No limitation (default); -1: Overtime prohibited; Values >0: Overtime duration in minutes, maximum 120 minutes
 * @method void setEndDelayTime(integer $EndDelayTime) Set Overtime duration: Unit in minutes. 0: No limitation (default); -1: Overtime prohibited; Values >0: Overtime duration in minutes, maximum 120 minutes
 * @method integer getLiveType() Obtain Live Streaming Type: 0: Regular (default) 1: Simulated Live
 * @method void setLiveType(integer $LiveType) Set Live Streaming Type: 0: Regular (default) 1: Simulated Live
 * @method string getRecordLiveUrl() Obtain Simulated Live Playback Link
 * @method void setRecordLiveUrl(string $RecordLiveUrl) Set Simulated Live Playback Link
 * @method integer getEnableAutoStart() Obtain Whether to auto-start class: 0: Do not auto-start (default) 1: Auto-start. Effective when live_type=1
 * @method void setEnableAutoStart(integer $EnableAutoStart) Set Whether to auto-start class: 0: Do not auto-start (default) 1: Auto-start. Effective when live_type=1
 * @method string getRecordBackground() Obtain Background image for recording files, supports png, jpg, jpeg, bmp formats. Alpha channel is currently not supported.
 * @method void setRecordBackground(string $RecordBackground) Set Background image for recording files, supports png, jpg, jpeg, bmp formats. Alpha channel is currently not supported.
 * @method string getRecordScene() Obtain Recording custom scenes. This parameter is valid only when recordlayout=9. The data content consists of user-defined scene parameters in json key-value pair format, where the value is of string type.
 * @method void setRecordScene(string $RecordScene) Set Recording custom scenes. This parameter is valid only when recordlayout=9. The data content consists of user-defined scene parameters in json key-value pair format, where the value is of string type.
 * @method string getRecordLang() Obtain Recording custom language. This parameter is valid only when recordlayout=9.
 * @method void setRecordLang(string $RecordLang) Set Recording custom language. This parameter is valid only when recordlayout=9.
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
     * @var integer The maximum number of users allowed (including teachers) in the room. The default value is `0`, which indicates that no limit is set. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMicNumber;

    /**
     * @var integer Whether the students' consent is required to control their cameras/microphones.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EnableDirectControl;

    /**
     * @var integer Enable Focus Mode. 0: View all participants (default) 1: View only teacher and TA
     */
    public $InteractionMode;

    /**
     * @var integer Landscape/Portrait. 0: Landscape broadcast (default); 1: Portrait broadcast. Currently supported only for video-only type on mobile devices.
     */
    public $VideoOrientation;

    /**
     * @var integer Enable post-class evaluation. 0: Disable (default) 1: Enable
     */
    public $IsGradingRequiredPostClass;

    /**
     * @var integer Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
     */
    public $RoomType;

    /**
     * @var integer Overtime duration: Unit in minutes. 0: No limitation (default); -1: Overtime prohibited; Values >0: Overtime duration in minutes, maximum 120 minutes
     */
    public $EndDelayTime;

    /**
     * @var integer Live Streaming Type: 0: Regular (default) 1: Simulated Live
     */
    public $LiveType;

    /**
     * @var string Simulated Live Playback Link
     */
    public $RecordLiveUrl;

    /**
     * @var integer Whether to auto-start class: 0: Do not auto-start (default) 1: Auto-start. Effective when live_type=1
     */
    public $EnableAutoStart;

    /**
     * @var string Background image for recording files, supports png, jpg, jpeg, bmp formats. Alpha channel is currently not supported.
     */
    public $RecordBackground;

    /**
     * @var string Recording custom scenes. This parameter is valid only when recordlayout=9. The data content consists of user-defined scene parameters in json key-value pair format, where the value is of string type.
     */
    public $RecordScene;

    /**
     * @var string Recording custom language. This parameter is valid only when recordlayout=9.
     */
    public $RecordLang;

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
     * @param integer $MaxMicNumber The maximum number of users allowed (including teachers) in the room. The default value is `0`, which indicates that no limit is set. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableDirectControl Whether the students' consent is required to control their cameras/microphones.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $InteractionMode Enable Focus Mode. 0: View all participants (default) 1: View only teacher and TA
     * @param integer $VideoOrientation Landscape/Portrait. 0: Landscape broadcast (default); 1: Portrait broadcast. Currently supported only for video-only type on mobile devices.
     * @param integer $IsGradingRequiredPostClass Enable post-class evaluation. 0: Disable (default) 1: Enable
     * @param integer $RoomType Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
     * @param integer $EndDelayTime Overtime duration: Unit in minutes. 0: No limitation (default); -1: Overtime prohibited; Values >0: Overtime duration in minutes, maximum 120 minutes
     * @param integer $LiveType Live Streaming Type: 0: Regular (default) 1: Simulated Live
     * @param string $RecordLiveUrl Simulated Live Playback Link
     * @param integer $EnableAutoStart Whether to auto-start class: 0: Do not auto-start (default) 1: Auto-start. Effective when live_type=1
     * @param string $RecordBackground Background image for recording files, supports png, jpg, jpeg, bmp formats. Alpha channel is currently not supported.
     * @param string $RecordScene Recording custom scenes. This parameter is valid only when recordlayout=9. The data content consists of user-defined scene parameters in json key-value pair format, where the value is of string type.
     * @param string $RecordLang Recording custom language. This parameter is valid only when recordlayout=9.
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

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
        }

        if (array_key_exists("EnableDirectControl",$param) and $param["EnableDirectControl"] !== null) {
            $this->EnableDirectControl = $param["EnableDirectControl"];
        }

        if (array_key_exists("InteractionMode",$param) and $param["InteractionMode"] !== null) {
            $this->InteractionMode = $param["InteractionMode"];
        }

        if (array_key_exists("VideoOrientation",$param) and $param["VideoOrientation"] !== null) {
            $this->VideoOrientation = $param["VideoOrientation"];
        }

        if (array_key_exists("IsGradingRequiredPostClass",$param) and $param["IsGradingRequiredPostClass"] !== null) {
            $this->IsGradingRequiredPostClass = $param["IsGradingRequiredPostClass"];
        }

        if (array_key_exists("RoomType",$param) and $param["RoomType"] !== null) {
            $this->RoomType = $param["RoomType"];
        }

        if (array_key_exists("EndDelayTime",$param) and $param["EndDelayTime"] !== null) {
            $this->EndDelayTime = $param["EndDelayTime"];
        }

        if (array_key_exists("LiveType",$param) and $param["LiveType"] !== null) {
            $this->LiveType = $param["LiveType"];
        }

        if (array_key_exists("RecordLiveUrl",$param) and $param["RecordLiveUrl"] !== null) {
            $this->RecordLiveUrl = $param["RecordLiveUrl"];
        }

        if (array_key_exists("EnableAutoStart",$param) and $param["EnableAutoStart"] !== null) {
            $this->EnableAutoStart = $param["EnableAutoStart"];
        }

        if (array_key_exists("RecordBackground",$param) and $param["RecordBackground"] !== null) {
            $this->RecordBackground = $param["RecordBackground"];
        }

        if (array_key_exists("RecordScene",$param) and $param["RecordScene"] !== null) {
            $this->RecordScene = $param["RecordScene"];
        }

        if (array_key_exists("RecordLang",$param) and $param["RecordLang"] !== null) {
            $this->RecordLang = $param["RecordLang"];
        }
    }
}
