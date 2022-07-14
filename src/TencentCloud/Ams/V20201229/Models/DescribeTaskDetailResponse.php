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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail response structure.
 *
 * @method string getTaskId() Obtain This field is used to return the task ID (in the `Results` parameter) after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set This field is used to return the task ID (in the `Results` parameter) after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDataId() Obtain This field is used to return the data ID parameter passed in within the `Tasks` parameter when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataId(string $DataId) Set This field is used to return the data ID parameter passed in within the `Tasks` parameter when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBizType() Obtain This field is used to return the `BizType` parameter passed in when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBizType(string $BizType) Set This field is used to return the `BizType` parameter passed in when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain This field is used to return the task name in the `TaskInput` parameter passed in when the audio moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set This field is used to return the task name in the `TaskInput` parameter passed in when the audio moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain This field is used to return the task status of the queried content.
<br>Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set This field is used to return the task status of the queried content.
<br>Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain This field is used to return the audio moderation type passed in when the audio moderation API is called. Valid values: **AUDIO** (audio on demand), **LIVE_AUDIO** (audio live streaming). Default value: AUDIO.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set This field is used to return the audio moderation type passed in when the audio moderation API is called. Valid values: **AUDIO** (audio on demand), **LIVE_AUDIO** (audio live streaming). Default value: AUDIO.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain Label of the malicious content detected. <br>Values: **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLabels(array $Labels) Set Label of the malicious content detected. <br>Values: **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method InputInfo getInputInfo() Obtain This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInputInfo(InputInfo $InputInfo) Set This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAudioText() Obtain This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioText(string $AudioText) Set This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAudioSegments() Obtain This field is used to return the moderation result of an audio segment, mainly including the start time and audio moderation result.<br>For the specific output content, see the detailed description of the `AudioSegments` and `AudioResult` data structures.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioSegments(array $AudioSegments) Set This field is used to return the moderation result of an audio segment, mainly including the start time and audio moderation result.<br>For the specific output content, see the detailed description of the `AudioSegments` and `AudioResult` data structures.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrorType() Obtain If the task status is `Error`, this field will return the error type; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorType(string $ErrorType) Set If the task status is `Error`, this field will return the error type; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrorDescription() Obtain If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorDescription(string $ErrorDescription) Set If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain This field is used to return the creation time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set This field is used to return the creation time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain This field is used to return the last update time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set This field is used to return the last update time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLabel(string $Label) Set If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string This field is used to return the task ID (in the `Results` parameter) after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string This field is used to return the data ID parameter passed in within the `Tasks` parameter when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataId;

    /**
     * @var string This field is used to return the `BizType` parameter passed in when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BizType;

    /**
     * @var string This field is used to return the task name in the `TaskInput` parameter passed in when the audio moderation API is called for easier task identification and management.
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
     * @var string This field is used to return the audio moderation type passed in when the audio moderation API is called. Valid values: **AUDIO** (audio on demand), **LIVE_AUDIO** (audio live streaming). Default value: AUDIO.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var array Label of the malicious content detected. <br>Values: **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Labels;

    /**
     * @var InputInfo This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InputInfo;

    /**
     * @var string This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioText;

    /**
     * @var array This field is used to return the moderation result of an audio segment, mainly including the start time and audio moderation result.<br>For the specific output content, see the detailed description of the `AudioSegments` and `AudioResult` data structures.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioSegments;

    /**
     * @var string If the task status is `Error`, this field will return the error type; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorType;

    /**
     * @var string If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorDescription;

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
     * @var string If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Label;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskId This field is used to return the task ID (in the `Results` parameter) after an audio moderation task is created. It is used to identify the moderation task for which to query the details.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DataId This field is used to return the data ID parameter passed in within the `Tasks` parameter when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BizType This field is used to return the `BizType` parameter passed in when the audio moderation API is called for easier data identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Name This field is used to return the task name in the `TaskInput` parameter passed in when the audio moderation API is called for easier task identification and management.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status This field is used to return the task status of the queried content.
<br>Valid values: **FINISH** (task completed), **PENDING** (task pending), **RUNNING** (task in progress), **ERROR** (task error), **CANCELLED** (task canceled).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Type This field is used to return the audio moderation type passed in when the audio moderation API is called. Valid values: **AUDIO** (audio on demand), **LIVE_AUDIO** (audio live streaming). Default value: AUDIO.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion This field is used to return the operation suggestion for the maliciousness tag. When you get the determination result, the returned value indicates the operation suggested by the system. We recommend you handle different types of violations and suggestions according to your business needs. <br>Returned values: **Block**, **Review**, **Pass**.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Labels Label of the malicious content detected. <br>Values: **Porn**: pornographic; **Abuse**: abusive; **Ad**: advertising; **Custom**: custom type of non-compliant content and other offensive, unsafe, or inappropriate types of content.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param InputInfo $InputInfo This field is used to return the media content information of the moderation service, mainly including the input file type and access URL.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AudioText This field is used to return the recognized text content of an audio file. **Up to the first 1,000 characters** can be recognized.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AudioSegments This field is used to return the moderation result of an audio segment, mainly including the start time and audio moderation result.<br>For the specific output content, see the detailed description of the `AudioSegments` and `AudioResult` data structures.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorType If the task status is `Error`, this field will return the error type; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorDescription If the task status is `Error`, this field will return the error message; otherwise, null will be returned by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt This field is used to return the creation time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt This field is used to return the last update time of the queried task in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Label If the recognition result is normal, this parameter is returned with the value `Normal`. If malicious content is recognized, the tag with the highest priority in the result of `Labels` is returned.
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("AudioText",$param) and $param["AudioText"] !== null) {
            $this->AudioText = $param["AudioText"];
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

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
