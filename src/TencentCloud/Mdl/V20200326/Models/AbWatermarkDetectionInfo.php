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
 * @method string getTaskId() Obtain 
 * @method void setTaskId(string $TaskId) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getState() Obtain 
 * @method void setState(string $State) Set 
 * @method string getResult() Obtain 
 * @method void setResult(string $Result) Set 
 * @method integer getErrorCode() Obtain 
 * @method void setErrorCode(integer $ErrorCode) Set 
 * @method string getErrorMsg() Obtain 
 * @method void setErrorMsg(string $ErrorMsg) Set 
 * @method AbWatermarkInputInfo getInputInfo() Obtain 
 * @method void setInputInfo(AbWatermarkInputInfo $InputInfo) Set 
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain 
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set 
 * @method integer getCreateTime() Obtain 
 * @method void setCreateTime(integer $CreateTime) Set 
 * @method integer getUpdateTime() Obtain 
 * @method void setUpdateTime(integer $UpdateTime) Set 
 * @method InputFileInfo getInputFileInfo() Obtain 
 * @method void setInputFileInfo(InputFileInfo $InputFileInfo) Set 
 */
class AbWatermarkDetectionInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskId;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $State;

    /**
     * @var string 
     */
    public $Result;

    /**
     * @var integer 
     */
    public $ErrorCode;

    /**
     * @var string 
     */
    public $ErrorMsg;

    /**
     * @var AbWatermarkInputInfo 
     */
    public $InputInfo;

    /**
     * @var TaskNotifyConfig 
     */
    public $TaskNotifyConfig;

    /**
     * @var integer 
     */
    public $CreateTime;

    /**
     * @var integer 
     */
    public $UpdateTime;

    /**
     * @var InputFileInfo 
     */
    public $InputFileInfo;

    /**
     * @param string $TaskId 
     * @param string $Type 
     * @param string $State 
     * @param string $Result 
     * @param integer $ErrorCode 
     * @param string $ErrorMsg 
     * @param AbWatermarkInputInfo $InputInfo 
     * @param TaskNotifyConfig $TaskNotifyConfig 
     * @param integer $CreateTime 
     * @param integer $UpdateTime 
     * @param InputFileInfo $InputFileInfo 
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
