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
 * @method string getTaskId() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDataId() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataId(string $DataId) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBizType() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBizType(string $BizType) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method InputInfo getInputInfo() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInputInfo(InputInfo $InputInfo) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAudioText() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioText(string $AudioText) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAudioSegments() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioSegments(array $AudioSegments) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrorType() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorType(string $ErrorType) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrorDescription() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorDescription(string $ErrorDescription) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataId;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BizType;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var array 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var InputInfo 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InputInfo;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioText;

    /**
     * @var array 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioSegments;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorType;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorDescription;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var string 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskId 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DataId 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BizType 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Name 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Type 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Labels 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param InputInfo $InputInfo 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AudioText 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AudioSegments 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorType 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorDescription 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Label 
Note: this field may return null, indicating that no valid values can be obtained.
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
