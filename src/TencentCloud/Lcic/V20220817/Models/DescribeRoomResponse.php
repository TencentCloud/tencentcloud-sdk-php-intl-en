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
 * @method integer getResolution() Obtain Resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD	
 * @method void setResolution(integer $Resolution) Set Resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD	
 * @method integer getMaxMicNumber() Obtain Maximum number of mic-on users (excluding teachers). Value range: [0, 16]	
 * @method void setMaxMicNumber(integer $MaxMicNumber) Set Maximum number of mic-on users (excluding teachers). Value range: [0, 16]	
 * @method integer getAutoMic() Obtain Whether to automatically turn the mic on when the user enters a room. Valid values: `0`: No (default value); `1`: Yes.	
 * @method void setAutoMic(integer $AutoMic) Set Whether to automatically turn the mic on when the user enters a room. Valid values: `0`: No (default value); `1`: Yes.	
 * @method integer getAudioQuality() Obtain Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.	
 * @method void setAudioQuality(integer $AudioQuality) Set Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.	
 * @method string getSubType() Obtain The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only.
 * @method void setSubType(string $SubType) Set The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only.
 * @method integer getDisableRecord() Obtain Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.	
 * @method void setDisableRecord(integer $DisableRecord) Set Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.	
 * @method array getAssistants() Obtain Assistant ID list	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssistants(array $Assistants) Set Assistant ID list	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordUrl() Obtain Recording URL. This parameter exists only after a room is ended.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordUrl(string $RecordUrl) Set Recording URL. This parameter exists only after a room is ended.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain The class status. `0`: The class has not started. `1`: The class has started. `2`: The class ended. `3`: The class expired.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set The class status. `0`: The class has not started. `1`: The class has started. `2`: The class ended. `3`: The class expired.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupId() Obtain 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
     * @var integer Resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD	
     */
    public $Resolution;

    /**
     * @var integer Maximum number of mic-on users (excluding teachers). Value range: [0, 16]	
     */
    public $MaxMicNumber;

    /**
     * @var integer Whether to automatically turn the mic on when the user enters a room. Valid values: `0`: No (default value); `1`: Yes.	
     */
    public $AutoMic;

    /**
     * @var integer Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.	
     */
    public $AudioQuality;

    /**
     * @var string The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only.
     */
    public $SubType;

    /**
     * @var integer Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.	
     */
    public $DisableRecord;

    /**
     * @var array Assistant ID list	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Assistants;

    /**
     * @var string Recording URL. This parameter exists only after a room is ended.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordUrl;

    /**
     * @var integer The class status. `0`: The class has not started. `1`: The class has started. `2`: The class ended. `3`: The class expired.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Room name	
     * @param integer $StartTime Reserved room start time, in UNIX timestamp format	
     * @param integer $EndTime Reserved room end time, in UNIX timestamp format	
     * @param string $TeacherId Teacher ID	
     * @param integer $SdkAppId LCIC SdkAppId	
     * @param integer $Resolution Resolution. Valid values: `1`: SD; `2`: HD; `3`: FHD	
     * @param integer $MaxMicNumber Maximum number of mic-on users (excluding teachers). Value range: [0, 16]	
     * @param integer $AutoMic Whether to automatically turn the mic on when the user enters a room. Valid values: `0`: No (default value); `1`: Yes.	
     * @param integer $AudioQuality Whether to enable the high audio quality mode. Valid values: `0`: No (default value); `1`: Yes.	
     * @param string $SubType The room subtype. Valid values: `videodoc`: Document + Video; `video`: Video only.
     * @param integer $DisableRecord Whether to disable auto recording. Valid values: `0`: No (default); `1`: Yes. If this parameter is `0`, recording will start when the class starts and stops when the class ends.	
     * @param array $Assistants Assistant ID list	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordUrl Recording URL. This parameter exists only after a room is ended.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status The class status. `0`: The class has not started. `1`: The class has started. `2`: The class ended. `3`: The class expired.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupId 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
