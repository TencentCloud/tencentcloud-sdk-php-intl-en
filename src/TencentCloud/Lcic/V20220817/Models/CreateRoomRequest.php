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
 * CreateRoom request structure.
 *
 * @method string getName() Obtain Room name
 * @method void setName(string $Name) Set Room name
 * @method integer getStartTime() Obtain Reserved room start time, in UNIX timestamp format
 * @method void setStartTime(integer $StartTime) Set Reserved room start time, in UNIX timestamp format
 * @method integer getEndTime() Obtain Reserved room end time, in UNIX timestamp format
 * @method void setEndTime(integer $EndTime) Set Reserved room end time, in UNIX timestamp format
 * @method integer getSdkAppId() Obtain LCIC SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) Set LCIC SdkAppId
 * @method integer getResolution() Obtain 	Resolution. Valid values: 1: SD; 2: HD; 3: FHD
 * @method void setResolution(integer $Resolution) Set 	Resolution. Valid values: 1: SD; 2: HD; 3: FHD
 * @method integer getMaxMicNumber() Obtain Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
 * @method string getSubType() Obtain The room subtype. Valid values: videodoc: Document + Video; video: Video only.
 * @method void setSubType(string $SubType) Set The room subtype. Valid values: videodoc: Document + Video; video: Video only.
 * @method string getTeacherId() Obtain The user ID of the teacher. User IDs are returned by the user registration APIs. The user specified will have teacher permissions in the room created.
 * @method void setTeacherId(string $TeacherId) Set The user ID of the teacher. User IDs are returned by the user registration APIs. The user specified will have teacher permissions in the room created.
 * @method integer getAutoMic() Obtain Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
 * @method void setAutoMic(integer $AutoMic) Set Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
 * @method integer getTurnOffMic() Obtain Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
 * @method void setTurnOffMic(integer $TurnOffMic) Set Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
 * @method integer getAudioQuality() Obtain Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
 * @method void setAudioQuality(integer $AudioQuality) Set Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
 * @method integer getDisableRecord() Obtain Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
 * @method void setDisableRecord(integer $DisableRecord) Set Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
 * @method array getAssistants() Obtain The user IDs of the teaching assistants. User IDs are returned by the user registration APIs. The users specified will have teaching assistant permissions in the room created.
 * @method void setAssistants(array $Assistants) Set The user IDs of the teaching assistants. User IDs are returned by the user registration APIs. The users specified will have teaching assistant permissions in the room created.
 * @method integer getRTCAudienceNumber() Obtain The number of RTC users.
 * @method void setRTCAudienceNumber(integer $RTCAudienceNumber) Set The number of RTC users.
 * @method integer getAudienceType() Obtain The audience type.
 * @method void setAudienceType(integer $AudienceType) Set The audience type.
 * @method integer getRecordLayout() Obtain Recording layout
 * @method void setRecordLayout(integer $RecordLayout) Set Recording layout
 * @method string getGroupId() Obtain The ID of the group to bind. If you specify this parameter, only members of the group can enter this room.
 * @method void setGroupId(string $GroupId) Set The ID of the group to bind. If you specify this parameter, only members of the group can enter this room.
 */
class CreateRoomRequest extends AbstractModel
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
     * @var integer LCIC SdkAppId
     */
    public $SdkAppId;

    /**
     * @var integer 	Resolution. Valid values: 1: SD; 2: HD; 3: FHD
     */
    public $Resolution;

    /**
     * @var integer Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
     */
    public $MaxMicNumber;

    /**
     * @var string The room subtype. Valid values: videodoc: Document + Video; video: Video only.
     */
    public $SubType;

    /**
     * @var string The user ID of the teacher. User IDs are returned by the user registration APIs. The user specified will have teacher permissions in the room created.
     */
    public $TeacherId;

    /**
     * @var integer Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
     */
    public $AutoMic;

    /**
     * @var integer Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
     */
    public $TurnOffMic;

    /**
     * @var integer Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
     */
    public $AudioQuality;

    /**
     * @var integer Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
     */
    public $DisableRecord;

    /**
     * @var array The user IDs of the teaching assistants. User IDs are returned by the user registration APIs. The users specified will have teaching assistant permissions in the room created.
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
     * @var integer Recording layout
     */
    public $RecordLayout;

    /**
     * @var string The ID of the group to bind. If you specify this parameter, only members of the group can enter this room.
     */
    public $GroupId;

    /**
     * @param string $Name Room name
     * @param integer $StartTime Reserved room start time, in UNIX timestamp format
     * @param integer $EndTime Reserved room end time, in UNIX timestamp format
     * @param integer $SdkAppId LCIC SdkAppId
     * @param integer $Resolution 	Resolution. Valid values: 1: SD; 2: HD; 3: FHD
     * @param integer $MaxMicNumber Maximum number of mic-on users (excluding teachers). Value range: [0, 16]
     * @param string $SubType The room subtype. Valid values: videodoc: Document + Video; video: Video only.
     * @param string $TeacherId The user ID of the teacher. User IDs are returned by the user registration APIs. The user specified will have teacher permissions in the room created.
     * @param integer $AutoMic Whether to automatically turn the mic on when the user enters a room. Valid values: 0: No (default value); 1: Yes.
     * @param integer $TurnOffMic Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0` (default): Yes; `1`: No.
     * @param integer $AudioQuality Whether to enable the high audio quality mode. Valid values: 0: No (default value); 1: Yes.
     * @param integer $DisableRecord Whether to disable auto recording. Valid values: 0: No (default); 1: Yes. If this parameter is 0, recording will start when the class starts and stops when the class ends.
     * @param array $Assistants The user IDs of the teaching assistants. User IDs are returned by the user registration APIs. The users specified will have teaching assistant permissions in the room created.
     * @param integer $RTCAudienceNumber The number of RTC users.
     * @param integer $AudienceType The audience type.
     * @param integer $RecordLayout Recording layout
     * @param string $GroupId The ID of the group to bind. If you specify this parameter, only members of the group can enter this room.
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
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
    }
}
