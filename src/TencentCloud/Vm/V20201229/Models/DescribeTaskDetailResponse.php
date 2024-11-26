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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail response structure.
 *
 * @method string getTaskId() Obtain This field is used to return the task ID (in the `Results` parameter) after a video moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set This field is used to return the task ID (in the `Results` parameter) after a video moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDataId() Obtain This field is used to return the data ID parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataId(string $DataId) Set This field is used to return the data ID parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBizType() Obtain This field is used to return the `BizType` parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBizType(string $BizType) Set This field is used to return the `BizType` parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain This field is used to return the task status of the queried content.
<br>Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set This field is used to return the task status of the queried content.
<br>Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain This field is used to return the type of video for moderation. Valid values: `VIDEO` (video on demand), `LIVE_VIDEO` (video live streaming). Default value: `VIDEO`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set This field is used to return the type of video for moderation. Valid values: `VIDEO` (video on demand), `LIVE_VIDEO` (video live streaming). Default value: `VIDEO`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSuggestion() Obtain This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain This field is used to return the maliciousness tag in the detection result.<br>Values: `Normal`: normal; `Porn`: pornographic; `Abuse`: abusive; `Ad`: advertising; `Custom`: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLabels(array $Labels) Set This field is used to return the maliciousness tag in the detection result.<br>Values: `Normal`: normal; `Porn`: pornographic; `Abuse`: abusive; `Ad`: advertising; `Custom`: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method MediaInfo getMediaInfo() Obtain This field is used to return the details of the input media file, including encoding/decoding formats and segment length. For details, see the description of the `MediaInfo` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMediaInfo(MediaInfo $MediaInfo) Set This field is used to return the details of the input media file, including encoding/decoding formats and segment length. For details, see the description of the `MediaInfo` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method InputInfo getInputInfo() Obtain This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInputInfo(InputInfo $InputInfo) Set This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain This field is used to return the creation time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set This field is used to return the creation time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain This field is used to return the last update time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set This field is used to return the last update time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getImageSegments() Obtain This field is used to return the moderation result of the frames captured from the video. For the detailed returned content, see the description of the `ImageSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setImageSegments(array $ImageSegments) Set This field is used to return the moderation result of the frames captured from the video. For the detailed returned content, see the description of the `ImageSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAudioSegments() Obtain This field is used to return the moderation result of the audio in the video. For the detailed returned content, see the description of the `AudioSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioSegments(array $AudioSegments) Set This field is used to return the moderation result of the audio in the video. For the detailed returned content, see the description of the `AudioSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrorType() Obtain When the task status is `Error`, the type of the error will be returned. Valid values: **DECODE_ERROR**: decoding failed (the input resource may contain video that cannot be decoded).
**URL_ERROR**: download address verification failed.
**TIMEOUT_ERROR**: processing timed out. When the task status is not `Error`, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorType(string $ErrorType) Set When the task status is `Error`, the type of the error will be returned. Valid values: **DECODE_ERROR**: decoding failed (the input resource may contain video that cannot be decoded).
**URL_ERROR**: download address verification failed.
**TIMEOUT_ERROR**: processing timed out. When the task status is not `Error`, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrorDescription() Obtain If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorDescription(string $ErrorDescription) Set If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLabel(string $Label) Set If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string This field is used to return the task ID (in the `Results` parameter) after a video moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string This field is used to return the data ID parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataId;

    /**
     * @var string This field is used to return the `BizType` parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BizType;

    /**
     * @var string This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string This field is used to return the task status of the queried content.
<br>Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string This field is used to return the type of video for moderation. Valid values: `VIDEO` (video on demand), `LIVE_VIDEO` (video live streaming). Default value: `VIDEO`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var array This field is used to return the maliciousness tag in the detection result.<br>Values: `Normal`: normal; `Porn`: pornographic; `Abuse`: abusive; `Ad`: advertising; `Custom`: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Labels;

    /**
     * @var MediaInfo This field is used to return the details of the input media file, including encoding/decoding formats and segment length. For details, see the description of the `MediaInfo` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MediaInfo;

    /**
     * @var InputInfo This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InputInfo;

    /**
     * @var string This field is used to return the creation time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string This field is used to return the last update time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var array This field is used to return the moderation result of the frames captured from the video. For the detailed returned content, see the description of the `ImageSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ImageSegments;

    /**
     * @var array This field is used to return the moderation result of the audio in the video. For the detailed returned content, see the description of the `AudioSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioSegments;

    /**
     * @var string When the task status is `Error`, the type of the error will be returned. Valid values: **DECODE_ERROR**: decoding failed (the input resource may contain video that cannot be decoded).
**URL_ERROR**: download address verification failed.
**TIMEOUT_ERROR**: processing timed out. When the task status is not `Error`, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorType;

    /**
     * @var string If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorDescription;

    /**
     * @var string If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Label;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskId This field is used to return the task ID (in the `Results` parameter) after a video moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DataId This field is used to return the data ID parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BizType This field is used to return the `BizType` parameter passed in when the video moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Name This field is used to return the task name in the `TaskInput` parameter passed in when the video moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status This field is used to return the task status of the queried content.
<br>Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Type This field is used to return the type of video for moderation. Valid values: `VIDEO` (video on demand), `LIVE_VIDEO` (video live streaming). Default value: `VIDEO`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Suggestion This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Labels This field is used to return the maliciousness tag in the detection result.<br>Values: `Normal`: normal; `Porn`: pornographic; `Abuse`: abusive; `Ad`: advertising; `Custom`: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param MediaInfo $MediaInfo This field is used to return the details of the input media file, including encoding/decoding formats and segment length. For details, see the description of the `MediaInfo` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param InputInfo $InputInfo This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt This field is used to return the creation time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt This field is used to return the last update time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ImageSegments This field is used to return the moderation result of the frames captured from the video. For the detailed returned content, see the description of the `ImageSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AudioSegments This field is used to return the moderation result of the audio in the video. For the detailed returned content, see the description of the `AudioSegments` data structure.<br>Note: the data is valid for 24 hours. To extend the storage period, set it in the configured COS bucket.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorType When the task status is `Error`, the type of the error will be returned. Valid values: **DECODE_ERROR**: decoding failed (the input resource may contain video that cannot be decoded).
**URL_ERROR**: download address verification failed.
**TIMEOUT_ERROR**: processing timed out. When the task status is not `Error`, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorDescription If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Label If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ImageSegments",$param) and $param["ImageSegments"] !== null) {
            $this->ImageSegments = [];
            foreach ($param["ImageSegments"] as $key => $value){
                $obj = new ImageSegments();
                $obj->deserialize($value);
                array_push($this->ImageSegments, $obj);
            }
        }

        if (array_key_exists("AudioSegments",$param) and $param["AudioSegments"] !== null) {
            $this->AudioSegments = [];
            foreach ($param["AudioSegments"] as $key => $value){
                $obj = new AudioSegments();
                $obj->deserialize($value);
                array_push($this->AudioSegments, $obj);
            }
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("ErrorDescription",$param) and $param["ErrorDescription"] !== null) {
            $this->ErrorDescription = $param["ErrorDescription"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
