<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AbWatermarkDetectionInfo
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getType() Obtain Types of testing
 * @method void setType(string $Type) Set Types of testing
 * @method string getState() Obtain State
 * @method void setState(string $State) Set State
 * @method string getResult() Obtain Result
 * @method void setResult(string $Result) Set Result
 * @method integer getErrorCode() Obtain Error code
 * @method void setErrorCode(integer $ErrorCode) Set Error code
 * @method string getErrorMsg() Obtain Error message
 * @method void setErrorMsg(string $ErrorMsg) Set Error message
 * @method AbWatermarkInputInfo getInputInfo() Obtain Input information
 * @method void setInputInfo(AbWatermarkInputInfo $InputInfo) Set Input information
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Task notification configuration
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Task notification configuration
 * @method integer getCreateTime() Obtain Create time
 * @method void setCreateTime(integer $CreateTime) Set Create time
 * @method integer getUpdateTime() Obtain Update time
 * @method void setUpdateTime(integer $UpdateTime) Set Update time
 * @method InputFileInfo getInputFileInfo() Obtain Input file information
 * @method void setInputFileInfo(InputFileInfo $InputFileInfo) Set Input file information
 */
class AbWatermarkDetectionInfo extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Types of testing
     */
    public $Type;

    /**
     * @var string State
     */
    public $State;

    /**
     * @var string Result
     */
    public $Result;

    /**
     * @var integer Error code
     */
    public $ErrorCode;

    /**
     * @var string Error message
     */
    public $ErrorMsg;

    /**
     * @var AbWatermarkInputInfo Input information
     */
    public $InputInfo;

    /**
     * @var TaskNotifyConfig Task notification configuration
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Create time
     */
    public $CreateTime;

    /**
     * @var integer Update time
     */
    public $UpdateTime;

    /**
     * @var InputFileInfo Input file information
     */
    public $InputFileInfo;

    /**
     * @param string $TaskId Task ID
     * @param string $Type Types of testing
     * @param string $State State
     * @param string $Result Result
     * @param integer $ErrorCode Error code
     * @param string $ErrorMsg Error message
     * @param AbWatermarkInputInfo $InputInfo Input information
     * @param TaskNotifyConfig $TaskNotifyConfig Task notification configuration
     * @param integer $CreateTime Create time
     * @param integer $UpdateTime Update time
     * @param InputFileInfo $InputFileInfo Input file information
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new AbWatermarkInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InputFileInfo",$param) and $param["InputFileInfo"] !== null) {
            $this->InputFileInfo = new InputFileInfo();
            $this->InputFileInfo->deserialize($param["InputFileInfo"]);
        }
    }
}
