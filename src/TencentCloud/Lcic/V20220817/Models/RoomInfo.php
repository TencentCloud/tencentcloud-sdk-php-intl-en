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
 *
 * @method string getName() Obtain The room name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set The room name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain The room start time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(integer $StartTime) Set The room start time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain The room end time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set The room end time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResolution() Obtain The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResolution(integer $Resolution) Set The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMicNumber() Obtain The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubType() Obtain The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubType(string $SubType) Set The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeacherId() Obtain The user ID of the teacher. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeacherId(string $TeacherId) Set The user ID of the teacher. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoMic() Obtain Whether to automatically turn the mic on when a user enters the room. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoMic(integer $AutoMic) Set Whether to automatically turn the mic on when a user enters the room. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTurnOffMic() Obtain Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0`: Yes (default value); `1`: No.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTurnOffMic(integer $TurnOffMic) Set Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0`: Yes (default value); `1`: No.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAudioQuality() Obtain Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioQuality(integer $AudioQuality) Set Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDisableRecord() Obtain Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisableRecord(integer $DisableRecord) Set Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAssistants() Obtain The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssistants(array $Assistants) Set The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRTCAudienceNumber() Obtain The number of RTC users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRTCAudienceNumber(integer $RTCAudienceNumber) Set The number of RTC users.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAudienceType() Obtain The audience type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudienceType(integer $AudienceType) Set The audience type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRecordLayout() Obtain The recording layout.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordLayout(integer $RecordLayout) Set The recording layout.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupId() Obtain The ID of the group to bind.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set The ID of the group to bind.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RoomInfo extends AbstractModel
{
    /**
     * @var string The room name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer The room start time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer The room end time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resolution;

    /**
     * @var integer The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMicNumber;

    /**
     * @var string The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubType;

    /**
     * @var string The user ID of the teacher. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeacherId;

    /**
     * @var integer Whether to automatically turn the mic on when a user enters the room. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoMic;

    /**
     * @var integer Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0`: Yes (default value); `1`: No.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TurnOffMic;

    /**
     * @var integer Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioQuality;

    /**
     * @var integer Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisableRecord;

    /**
     * @var array The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Assistants;

    /**
     * @var integer The number of RTC users.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RTCAudienceNumber;

    /**
     * @var integer The audience type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudienceType;

    /**
     * @var integer The recording layout.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordLayout;

    /**
     * @var string The ID of the group to bind.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @param string $Name The room name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTime The room start time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime The room end time (Unix timestamp).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Resolution The resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMicNumber The maximum number of mic-on users (excluding the teacher). Value range: 0-16.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubType The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only; `coteaching`: Dual-teacher.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeacherId The user ID of the teacher. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoMic Whether to automatically turn the mic on when a user enters the room. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TurnOffMic Whether to disconnect communication after audio/video permissions are revoked. Valid values: `0`: Yes (default value); `1`: No.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AudioQuality Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DisableRecord Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Assistants The user IDs of the teacher assistants. User IDs are returned by the user registration APIs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RTCAudienceNumber The number of RTC users.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AudienceType The audience type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RecordLayout The recording layout.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupId The ID of the group to bind.
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
    }
}
