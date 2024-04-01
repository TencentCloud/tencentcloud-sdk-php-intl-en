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
 * DescribeRoom response structure.
 *
 * @method string getName() Obtain Room name	
 * @method void setName(string $Name) Set Room name	
 * @method integer getStartTime() Obtain Reserved room start time, in UNIX timestamp format	
 * @method void setStartTime(integer $StartTime) Set Reserved room start time, in UNIX timestamp format	
 * @method integer getEndTime() Obtain Reserved room end time, in UNIX timestamp format	
 * @method void setEndTime(integer $EndTime) Set Reserved room end time, in UNIX timestamp format	
 * @method string getTeacherId() Obtain Teacher ID	
 * @method void setTeacherId(string $TeacherId) Set Teacher ID	
 * @method integer getSdkAppId() Obtain LCIC SdkAppId	
 * @method void setSdkAppId(integer $SdkAppId) Set LCIC SdkAppId	
 * @method integer getAudienceType() Obtain  Watch type. Can have the following values: 1 interactive viewing 2 standard viewing
 * @method void setAudienceType(integer $AudienceType) Set  Watch type. Can have the following values: 1 interactive viewing 2 standard viewing
 * @method integer getResolution() Obtain Resolution. Valid values: 1: SD; 2: HD; 3: FHD
 * @method void setResolution(integer $Resolution) Set Resolution. Valid values: 1: SD; 2: HD; 3: FHD
 * @method integer getMaxMicNumber() Obtain Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
 * @method integer getAutoMic() Obtain Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
 * @method void setAutoMic(integer $AutoMic) Set Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
 * @method integer getAudioQuality() Obtain Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
 * @method void setAudioQuality(integer $AudioQuality) Set Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
 * @method string getSubType() Obtain The room subtype. Valid values: videodoc: Document + Video; video: Video only.
 * @method void setSubType(string $SubType) Set The room subtype. Valid values: videodoc: Document + Video; video: Video only.
 * @method integer getDisableRecord() Obtain Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
 * @method void setDisableRecord(integer $DisableRecord) Set Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
 * @method array getAssistants() Obtain Assistant ID list Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssistants(array $Assistants) Set Assistant ID list Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordUrl() Obtain Recording URL. This parameter exists only after a room is ended. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordUrl(string $RecordUrl) Set Recording URL. This parameter exists only after a room is ended. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain The class status. 0: The class has not started. 1: The class has started. 2: The class ended. 3: The class expired. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set The class status. 0: The class has not started. 1: The class has started. 2: The class ended. 3: The class expired. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupId() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set Note: This field may return null, indicating that no valid values can be obtained.
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
 * @method integer getVideoDuration() Obtain Recording Duration
 * @method void setVideoDuration(integer $VideoDuration) Set Recording Duration
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
 * @method string getRTMPStreamingURL() Obtain RTMP  stream link
 * @method void setRTMPStreamingURL(string $RTMPStreamingURL) Set RTMP  stream link
 * @method string getRecordScene() Obtain Record customized scene, only recordlayout=9 this parameter is valid
 * @method void setRecordScene(string $RecordScene) Set Record customized scene, only recordlayout=9 this parameter is valid
 * @method string getRecordLang() Obtain Record customized language, only when recordlayout=9, this parameter is valid
 * @method void setRecordLang(string $RecordLang) Set Record customized language, only when recordlayout=9, this parameter is valid
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeRoomResponse extends AbstractModel
{
    /**
     * @var string Room name	
     */
    public $Name;

    /**
     * @var integer Reserved room start time, in UNIX timestamp format	
     */
    public $StartTime;

    /**
     * @var integer Reserved room end time, in UNIX timestamp format	
     */
    public $EndTime;

    /**
     * @var string Teacher ID	
     */
    public $TeacherId;

    /**
     * @var integer LCIC SdkAppId	
     */
    public $SdkAppId;

    /**
     * @var integer  Watch type. Can have the following values: 1 interactive viewing 2 standard viewing
     */
    public $AudienceType;

    /**
     * @var integer Resolution. Valid values: 1: SD; 2: HD; 3: FHD
     */
    public $Resolution;

    /**
     * @var integer Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
     */
    public $MaxMicNumber;

    /**
     * @var integer Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
     */
    public $AutoMic;

    /**
     * @var integer Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
     */
    public $AudioQuality;

    /**
     * @var string The room subtype. Valid values: videodoc: Document + Video; video: Video only.
     */
    public $SubType;

    /**
     * @var integer Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
     */
    public $DisableRecord;

    /**
     * @var array Assistant ID list Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Assistants;

    /**
     * @var string Recording URL. This parameter exists only after a room is ended. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordUrl;

    /**
     * @var integer The class status. 0: The class has not started. 1: The class has started. 2: The class ended. 3: The class expired. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer Recording Duration
     */
    public $VideoDuration;

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
     * @var string RTMP  stream link
     */
    public $RTMPStreamingURL;

    /**
     * @var string Record customized scene, only recordlayout=9 this parameter is valid
     */
    public $RecordScene;

    /**
     * @var string Record customized language, only when recordlayout=9, this parameter is valid
     */
    public $RecordLang;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Room name	
     * @param integer $StartTime Reserved room start time, in UNIX timestamp format	
     * @param integer $EndTime Reserved room end time, in UNIX timestamp format	
     * @param string $TeacherId Teacher ID	
     * @param integer $SdkAppId LCIC SdkAppId	
     * @param integer $AudienceType  Watch type. Can have the following values: 1 interactive viewing 2 standard viewing
     * @param integer $Resolution Resolution. Valid values: 1: SD; 2: HD; 3: FHD
     * @param integer $MaxMicNumber Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
     * @param integer $AutoMic Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
     * @param integer $AudioQuality Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
     * @param string $SubType The room subtype. Valid values: videodoc: Document + Video; video: Video only.
     * @param integer $DisableRecord Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
     * @param array $Assistants Assistant ID list Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordUrl Recording URL. This parameter exists only after a room is ended. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status The class status. 0: The class has not started. 1: The class has started. 2: The class ended. 3: The class expired. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupId Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableDirectControl Whether the students' consent is required to control their cameras/microphones.
     * @param integer $InteractionMode Turn on focus mode. 0 Watch all character audio and video (default) 1 Watch only teachers and teaching assistants
     * @param integer $VideoOrientation Horizontal and vertical screen. 0: Horizontal screen to open broadcast (default); 1: Vertical screen to open broadcast, currently only support mobile pure video type
     * @param integer $IsGradingRequiredPostClass Whether the room is enabled for grading after the lesson. 0: not enabled 1: enabled
     * @param integer $RoomType Room Type: 0 Small Classroom(default); 1 Lecture Hall(public class)
     * @param integer $VideoDuration Recording Duration
     * @param integer $EndDelayTime Drag class time: unit minutes, 0 is unlimited (default), -1 is can't drag the class, greater than 0 is the time of dragging the class, the maximum value of 120 minutes
     * @param integer $LiveType Live type: 0 regular (default) 1 Simulated Live
     * @param string $RecordLiveUrl Simulated Live link
     * @param integer $EnableAutoStart Whether to start the lesson automatically: 0 not automatic lesson (default) 1 automatic lesson live_type=1 is valid
     * @param string $RecordBackground Recorded file background image, support png, jpg, jpeg, bmp format, does not support transparent channel for the time being
     * @param string $RTMPStreamingURL RTMP  stream link
     * @param string $RecordScene Record customized scene, only recordlayout=9 this parameter is valid
     * @param string $RecordLang Record customized language, only when recordlayout=9, this parameter is valid
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AudienceType",$param) and $param["AudienceType"] !== null) {
            $this->AudienceType = $param["AudienceType"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
        }

        if (array_key_exists("AutoMic",$param) and $param["AutoMic"] !== null) {
            $this->AutoMic = $param["AutoMic"];
        }

        if (array_key_exists("AudioQuality",$param) and $param["AudioQuality"] !== null) {
            $this->AudioQuality = $param["AudioQuality"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("Assistants",$param) and $param["Assistants"] !== null) {
            $this->Assistants = $param["Assistants"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
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

        if (array_key_exists("RTMPStreamingURL",$param) and $param["RTMPStreamingURL"] !== null) {
            $this->RTMPStreamingURL = $param["RTMPStreamingURL"];
        }

        if (array_key_exists("RecordScene",$param) and $param["RecordScene"] !== null) {
            $this->RecordScene = $param["RecordScene"];
        }

        if (array_key_exists("RecordLang",$param) and $param["RecordLang"] !== null) {
            $this->RecordLang = $param["RecordLang"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
