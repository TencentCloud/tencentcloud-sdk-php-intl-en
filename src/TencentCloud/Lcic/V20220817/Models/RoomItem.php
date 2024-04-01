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
 * @method integer getMaxMicNumber() Obtain The maximum number of users allowed (including teachers) in the room. The default value is `0`, which indicates that no limit is set. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set The maximum number of users allowed (including teachers) in the room. The default value is `0`, which indicates that no limit is set. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableDirectControl() Obtain Whether the students' consent is required to control their cameras/microphones.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEnableDirectControl(integer $EnableDirectControl) Set Whether the students' consent is required to control their cameras/microphones.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getInteractionMode() Obtain 
 * @method void setInteractionMode(integer $InteractionMode) Set 
 * @method integer getVideoOrientation() Obtain 
 * @method void setVideoOrientation(integer $VideoOrientation) Set 
 * @method integer getIsGradingRequiredPostClass() Obtain 
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) Set 
 * @method integer getRoomType() Obtain Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
 * @method void setRoomType(integer $RoomType) Set Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
 * @method integer getEndDelayTime() Obtain 
 * @method void setEndDelayTime(integer $EndDelayTime) Set 
 * @method integer getLiveType() Obtain 
 * @method void setLiveType(integer $LiveType) Set 
 * @method string getRecordLiveUrl() Obtain 
 * @method void setRecordLiveUrl(string $RecordLiveUrl) Set 
 * @method integer getEnableAutoStart() Obtain 
 * @method void setEnableAutoStart(integer $EnableAutoStart) Set 
 * @method string getRecordBackground() Obtain 
 * @method void setRecordBackground(string $RecordBackground) Set 
 * @method string getRecordScene() Obtain 
 * @method void setRecordScene(string $RecordScene) Set 
 * @method string getRecordLang() Obtain 
 * @method void setRecordLang(string $RecordLang) Set 
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
     * @var integer 
     */
    public $InteractionMode;

    /**
     * @var integer 
     */
    public $VideoOrientation;

    /**
     * @var integer 
     */
    public $IsGradingRequiredPostClass;

    /**
     * @var integer Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
     */
    public $RoomType;

    /**
     * @var integer 
     */
    public $EndDelayTime;

    /**
     * @var integer 
     */
    public $LiveType;

    /**
     * @var string 
     */
    public $RecordLiveUrl;

    /**
     * @var integer 
     */
    public $EnableAutoStart;

    /**
     * @var string 
     */
    public $RecordBackground;

    /**
     * @var string 
     */
    public $RecordScene;

    /**
     * @var string 
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
     * @param integer $InteractionMode 
     * @param integer $VideoOrientation 
     * @param integer $IsGradingRequiredPostClass 
     * @param integer $RoomType Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
     * @param integer $EndDelayTime 
     * @param integer $LiveType 
     * @param string $RecordLiveUrl 
     * @param integer $EnableAutoStart 
     * @param string $RecordBackground 
     * @param string $RecordScene 
     * @param string $RecordLang 
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
