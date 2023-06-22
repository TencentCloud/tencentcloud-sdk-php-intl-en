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
 * ModifyRoom request structure.
 *
 * @method integer getRoomId() Obtain The room ID.
 * @method void setRoomId(integer $RoomId) Set The room ID.
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method integer getStartTime() Obtain The room start time (Unix timestamp).
 * @method void setStartTime(integer $StartTime) Set The room start time (Unix timestamp).
 * @method integer getEndTime() Obtain The room end time (Unix timestamp).
 * @method void setEndTime(integer $EndTime) Set The room end time (Unix timestamp).
 * @method string getTeacherId() Obtain The user ID of the teacher. User IDs are returned by the user registration APIs.
 * @method void setTeacherId(string $TeacherId) Set The user ID of the teacher. User IDs are returned by the user registration APIs.
 * @method string getName() Obtain The room name.
 * @method void setName(string $Name) Set The room name.
 * @method integer getResolution() Obtain The resolution. Valid values: 1: SD; 2: HD; 3: FHD.
 * @method void setResolution(integer $Resolution) Set The resolution. Valid values: 1: SD; 2: HD; 3: FHD.
 * @method integer getMaxMicNumber() Obtain The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
 * @method integer getAutoMic() Obtain Whether to automatically turn the mic on when a user enters the room. Valid values: 0: No (default value); 1: Yes.
 * @method void setAutoMic(integer $AutoMic) Set Whether to automatically turn the mic on when a user enters the room. Valid values: 0: No (default value); 1: Yes.
 * @method integer getAudioQuality() Obtain Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
 * @method void setAudioQuality(integer $AudioQuality) Set Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
 * @method string getSubType() Obtain The room subtype. Valid values: videodoc: Document + Video; video: Video only; coteaching: Dual-teacher.
 * @method void setSubType(string $SubType) Set The room subtype. Valid values: videodoc: Document + Video; video: Video only; coteaching: Dual-teacher.
 * @method integer getDisableRecord() Obtain Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
 * @method void setDisableRecord(integer $DisableRecord) Set Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
 * @method array getAssistants() Obtain The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
 * @method void setAssistants(array $Assistants) Set The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
 * @method string getGroupId() Obtain The ID of the group to bind.
 * @method void setGroupId(string $GroupId) Set The ID of the group to bind.
 * @method integer getEnableDirectControl() Obtain Whether the students' consent is required to control their cameras/microphones.
 * @method void setEnableDirectControl(integer $EnableDirectControl) Set Whether the students' consent is required to control their cameras/microphones.
 */
class ModifyRoomRequest extends AbstractModel
{
    /**
     * @var integer The room ID.
     */
    public $RoomId;

    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var integer The room start time (Unix timestamp).
     */
    public $StartTime;

    /**
     * @var integer The room end time (Unix timestamp).
     */
    public $EndTime;

    /**
     * @var string The user ID of the teacher. User IDs are returned by the user registration APIs.
     */
    public $TeacherId;

    /**
     * @var string The room name.
     */
    public $Name;

    /**
     * @var integer The resolution. Valid values: 1: SD; 2: HD; 3: FHD.
     */
    public $Resolution;

    /**
     * @var integer The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
     */
    public $MaxMicNumber;

    /**
     * @var integer Whether to automatically turn the mic on when a user enters the room. Valid values: 0: No (default value); 1: Yes.
     */
    public $AutoMic;

    /**
     * @var integer Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
     */
    public $AudioQuality;

    /**
     * @var string The room subtype. Valid values: videodoc: Document + Video; video: Video only; coteaching: Dual-teacher.
     */
    public $SubType;

    /**
     * @var integer Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
     */
    public $DisableRecord;

    /**
     * @var array The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
     */
    public $Assistants;

    /**
     * @var string The ID of the group to bind.
     */
    public $GroupId;

    /**
     * @var integer Whether the students' consent is required to control their cameras/microphones.
     */
    public $EnableDirectControl;

    /**
     * @param integer $RoomId The room ID.
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param integer $StartTime The room start time (Unix timestamp).
     * @param integer $EndTime The room end time (Unix timestamp).
     * @param string $TeacherId The user ID of the teacher. User IDs are returned by the user registration APIs.
     * @param string $Name The room name.
     * @param integer $Resolution The resolution. Valid values: 1: SD; 2: HD; 3: FHD.
     * @param integer $MaxMicNumber The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
     * @param integer $AutoMic Whether to automatically turn the mic on when a user enters the room. Valid values: 0: No (default value); 1: Yes.
     * @param integer $AudioQuality Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
     * @param string $SubType The room subtype. Valid values: videodoc: Document + Video; video: Video only; coteaching: Dual-teacher.
     * @param integer $DisableRecord Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
     * @param array $Assistants The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
     * @param string $GroupId The ID of the group to bind.
     * @param integer $EnableDirectControl Whether the students' consent is required to control their cameras/microphones.
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EnableDirectControl",$param) and $param["EnableDirectControl"] !== null) {
            $this->EnableDirectControl = $param["EnableDirectControl"];
        }
    }
}
