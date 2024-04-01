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
 * The information of the room to create.
Used by actions: BatchCreateRoom.
 *
 * @method string getName() Obtain The room name.
 * @method void setName(string $Name) Set The room name.
 * @method integer getStartTime() Obtain The room start time (Unix timestamp).
 * @method void setStartTime(integer $StartTime) Set The room start time (Unix timestamp).
 * @method integer getEndTime() Obtain The room end time (Unix timestamp).
 * @method void setEndTime(integer $EndTime) Set The room end time (Unix timestamp).
 * @method integer getResolution() Obtain The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
 * @method void setResolution(integer $Resolution) Set The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
 * @method integer getMaxMicNumber() Obtain The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
 * @method string getSubType() Obtain The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
 * @method void setSubType(string $SubType) Set The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
 * @method string getTeacherId() Obtain The user ID of the teacher. User IDs are returned by the user registration APIs.
 * @method void setTeacherId(string $TeacherId) Set The user ID of the teacher. User IDs are returned by the user registration APIs.
 * @method integer getAutoMic() Obtain Whether to automatically turn the mic on when a user enters the room. Valid values: `0` (default): No; `1`: Yes.
 * @method void setAutoMic(integer $AutoMic) Set Whether to automatically turn the mic on when a user enters the room. Valid values: `0` (default): No; `1`: Yes.
 * @method integer getTurnOffMic() Obtain Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
 * @method void setTurnOffMic(integer $TurnOffMic) Set Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
 * @method integer getAudioQuality() Obtain Whether to enable the high audio quality mode. Valid values: `0` (default): No; `1`: Yes.
 * @method void setAudioQuality(integer $AudioQuality) Set Whether to enable the high audio quality mode. Valid values: `0` (default): No; `1`: Yes.
 * @method integer getDisableRecord() Obtain Whether to disable auto recording. Valid values: `0` (default): No; `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
 * @method void setDisableRecord(integer $DisableRecord) Set Whether to disable auto recording. Valid values: `0` (default): No; `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
 * @method array getAssistants() Obtain The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
 * @method void setAssistants(array $Assistants) Set The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
 * @method integer getRTCAudienceNumber() Obtain The number of RTC users.
 * @method void setRTCAudienceNumber(integer $RTCAudienceNumber) Set The number of RTC users.
 * @method integer getAudienceType() Obtain The audience type.
 * @method void setAudienceType(integer $AudienceType) Set The audience type.
 * @method integer getRecordLayout() Obtain The recording layout.
 * @method void setRecordLayout(integer $RecordLayout) Set The recording layout.
 * @method string getGroupId() Obtain The ID of the group to bind. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set The ID of the group to bind. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableDirectControl() Obtain Whether the students' consent is required to control their cameras/microphones.
 * @method void setEnableDirectControl(integer $EnableDirectControl) Set Whether the students' consent is required to control their cameras/microphones.
 * @method integer getInteractionMode() Obtain Turn on focus mode. 0 Watch all character audio and video (default) 1 Watch only teachers and teaching assistants
 * @method void setInteractionMode(integer $InteractionMode) Set Turn on focus mode. 0 Watch all character audio and video (default) 1 Watch only teachers and teaching assistants
 * @method integer getVideoOrientation() Obtain Horizontal and vertical screen. 0: Horizontal screen to open broadcast (default); 1: Vertical screen to open broadcast, currently only support mobile pure video type
 * @method void setVideoOrientation(integer $VideoOrientation) Set Horizontal and vertical screen. 0: Horizontal screen to open broadcast (default); 1: Vertical screen to open broadcast, currently only support mobile pure video type
 * @method integer getIsGradingRequiredPostClass() Obtain Whether the room is enabled for grading after the lesson. 0: not enabled 1: enabled
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) Set Whether the room is enabled for grading after the lesson. 0: not enabled 1: enabled
 * @method integer getRoomType() Obtain Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
 * @method void setRoomType(integer $RoomType) Set Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
 * @method integer getEndDelayTime() Obtain Drag class time: unit minutes, 0 is unlimited (default), -1 is can't drag the class, greater than 0 is the time of dragging the class, the maximum value of 120 minutes
 * @method void setEndDelayTime(integer $EndDelayTime) Set Drag class time: unit minutes, 0 is unlimited (default), -1 is can't drag the class, greater than 0 is the time of dragging the class, the maximum value of 120 minutes
 * @method integer getLiveType() Obtain Live type: 0 regular (default) 1 Simulated Live
 * @method void setLiveType(integer $LiveType) Set Live type: 0 regular (default) 1 Simulated Live
 * @method string getRecordLiveUrl() Obtain Simulated Live link
 * @method void setRecordLiveUrl(string $RecordLiveUrl) Set Simulated Live link
 * @method integer getEnableAutoStart() Obtain Whether to start the lesson automatically: 0 not automatic lesson (default) 1 automatic lesson live_type=1 is valid
 * @method void setEnableAutoStart(integer $EnableAutoStart) Set Whether to start the lesson automatically: 0 not automatic lesson (default) 1 automatic lesson live_type=1 is valid
 * @method string getRecordBackground() Obtain Recorded file background image, support png, jpg, jpeg, bmp format, does not support transparent channel for the time being
 * @method void setRecordBackground(string $RecordBackground) Set Recorded file background image, support png, jpg, jpeg, bmp format, does not support transparent channel for the time being
 * @method string getRecordScene() Obtain Record customized scene, only recordlayout=9 this parameter is valid, the data content for the user-defined scene parameters, data format for the json key-value pairs, where the key-value pairs of the value for the string type.
 * @method void setRecordScene(string $RecordScene) Set Record customized scene, only recordlayout=9 this parameter is valid, the data content for the user-defined scene parameters, data format for the json key-value pairs, where the key-value pairs of the value for the string type.
 * @method string getRecordLang() Obtain Record customized language, only when recordlayout=9, this parameter is valid.
 * @method void setRecordLang(string $RecordLang) Set Record customized language, only when recordlayout=9, this parameter is valid.
 */
class RoomInfo extends AbstractModel
{
    /**
     * @var string The room name.
     */
    public $Name;

    /**
     * @var integer The room start time (Unix timestamp).
     */
    public $StartTime;

    /**
     * @var integer The room end time (Unix timestamp).
     */
    public $EndTime;

    /**
     * @var integer The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
     */
    public $Resolution;

    /**
     * @var integer The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
     */
    public $MaxMicNumber;

    /**
     * @var string The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
     */
    public $SubType;

    /**
     * @var string The user ID of the teacher. User IDs are returned by the user registration APIs.
     */
    public $TeacherId;

    /**
     * @var integer Whether to automatically turn the mic on when a user enters the room. Valid values: `0` (default): No; `1`: Yes.
     */
    public $AutoMic;

    /**
     * @var integer Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
     */
    public $TurnOffMic;

    /**
     * @var integer Whether to enable the high audio quality mode. Valid values: `0` (default): No; `1`: Yes.
     */
    public $AudioQuality;

    /**
     * @var integer Whether to disable auto recording. Valid values: `0` (default): No; `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
     */
    public $DisableRecord;

    /**
     * @var array The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
     */
    public $Assistants;

    /**
     * @var integer The number of RTC users.
     */
    public $RTCAudienceNumber;

    /**
     * @var integer The audience type.
     */
    public $AudienceType;

    /**
     * @var integer The recording layout.
     */
    public $RecordLayout;

    /**
     * @var string The ID of the group to bind. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @var integer Whether the students' consent is required to control their cameras/microphones.
     */
    public $EnableDirectControl;

    /**
     * @var integer Turn on focus mode. 0 Watch all character audio and video (default) 1 Watch only teachers and teaching assistants
     */
    public $InteractionMode;

    /**
     * @var integer Horizontal and vertical screen. 0: Horizontal screen to open broadcast (default); 1: Vertical screen to open broadcast, currently only support mobile pure video type
     */
    public $VideoOrientation;

    /**
     * @var integer Whether the room is enabled for grading after the lesson. 0: not enabled 1: enabled
     */
    public $IsGradingRequiredPostClass;

    /**
     * @var integer Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
     */
    public $RoomType;

    /**
     * @var integer Drag class time: unit minutes, 0 is unlimited (default), -1 is can't drag the class, greater than 0 is the time of dragging the class, the maximum value of 120 minutes
     */
    public $EndDelayTime;

    /**
     * @var integer Live type: 0 regular (default) 1 Simulated Live
     */
    public $LiveType;

    /**
     * @var string Simulated Live link
     */
    public $RecordLiveUrl;

    /**
     * @var integer Whether to start the lesson automatically: 0 not automatic lesson (default) 1 automatic lesson live_type=1 is valid
     */
    public $EnableAutoStart;

    /**
     * @var string Recorded file background image, support png, jpg, jpeg, bmp format, does not support transparent channel for the time being
     */
    public $RecordBackground;

    /**
     * @var string Record customized scene, only recordlayout=9 this parameter is valid, the data content for the user-defined scene parameters, data format for the json key-value pairs, where the key-value pairs of the value for the string type.
     */
    public $RecordScene;

    /**
     * @var string Record customized language, only when recordlayout=9, this parameter is valid.
     * @deprecated
     */
    public $RecordLang;

    /**
     * @param string $Name The room name.
     * @param integer $StartTime The room start time (Unix timestamp).
     * @param integer $EndTime The room end time (Unix timestamp).
     * @param integer $Resolution The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
     * @param integer $MaxMicNumber The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
     * @param string $SubType The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
     * @param string $TeacherId The user ID of the teacher. User IDs are returned by the user registration APIs.
     * @param integer $AutoMic Whether to automatically turn the mic on when a user enters the room. Valid values: `0` (default): No; `1`: Yes.
     * @param integer $TurnOffMic Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
     * @param integer $AudioQuality Whether to enable the high audio quality mode. Valid values: `0` (default): No; `1`: Yes.
     * @param integer $DisableRecord Whether to disable auto recording. Valid values: `0` (default): No; `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
     * @param array $Assistants The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
     * @param integer $RTCAudienceNumber The number of RTC users.
     * @param integer $AudienceType The audience type.
     * @param integer $RecordLayout The recording layout.
     * @param string $GroupId The ID of the group to bind. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableDirectControl Whether the students' consent is required to control their cameras/microphones.
     * @param integer $InteractionMode Turn on focus mode. 0 Watch all character audio and video (default) 1 Watch only teachers and teaching assistants
     * @param integer $VideoOrientation Horizontal and vertical screen. 0: Horizontal screen to open broadcast (default); 1: Vertical screen to open broadcast, currently only support mobile pure video type
     * @param integer $IsGradingRequiredPostClass Whether the room is enabled for grading after the lesson. 0: not enabled 1: enabled
     * @param integer $RoomType Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
     * @param integer $EndDelayTime Drag class time: unit minutes, 0 is unlimited (default), -1 is can't drag the class, greater than 0 is the time of dragging the class, the maximum value of 120 minutes
     * @param integer $LiveType Live type: 0 regular (default) 1 Simulated Live
     * @param string $RecordLiveUrl Simulated Live link
     * @param integer $EnableAutoStart Whether to start the lesson automatically: 0 not automatic lesson (default) 1 automatic lesson live_type=1 is valid
     * @param string $RecordBackground Recorded file background image, support png, jpg, jpeg, bmp format, does not support transparent channel for the time being
     * @param string $RecordScene Record customized scene, only recordlayout=9 this parameter is valid, the data content for the user-defined scene parameters, data format for the json key-value pairs, where the key-value pairs of the value for the string type.
     * @param string $RecordLang Record customized language, only when recordlayout=9, this parameter is valid.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("AutoMic",$param) and $param["AutoMic"] !== null) {
            $this->AutoMic = $param["AutoMic"];
        }

        if (array_key_exists("TurnOffMic",$param) and $param["TurnOffMic"] !== null) {
            $this->TurnOffMic = $param["TurnOffMic"];
        }

        if (array_key_exists("AudioQuality",$param) and $param["AudioQuality"] !== null) {
            $this->AudioQuality = $param["AudioQuality"];
        }

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("Assistants",$param) and $param["Assistants"] !== null) {
            $this->Assistants = $param["Assistants"];
        }

        if (array_key_exists("RTCAudienceNumber",$param) and $param["RTCAudienceNumber"] !== null) {
            $this->RTCAudienceNumber = $param["RTCAudienceNumber"];
        }

        if (array_key_exists("AudienceType",$param) and $param["AudienceType"] !== null) {
            $this->AudienceType = $param["AudienceType"];
        }

        if (array_key_exists("RecordLayout",$param) and $param["RecordLayout"] !== null) {
            $this->RecordLayout = $param["RecordLayout"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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
