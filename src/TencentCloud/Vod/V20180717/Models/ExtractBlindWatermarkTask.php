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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getTaskId() Obtain 
 * @method void setTaskId(string $TaskId) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method integer getErrCode() Obtain 
 * @method void setErrCode(integer $ErrCode) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 * @method ExtractBlindWatermarkInputInfo getInputInfo() Obtain 
 * @method void setInputInfo(ExtractBlindWatermarkInputInfo $InputInfo) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method boolean getIsDetected() Obtain 
 * @method void setIsDetected(boolean $IsDetected) Set 
 * @method string getResult() Obtain 
 * @method void setResult(string $Result) Set 
 * @method string getResultUV() Obtain 
 * @method void setResultUV(string $ResultUV) Set 
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain 
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 */
class ExtractBlindWatermarkTask extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskId;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var integer 
     */
    public $ErrCode;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @var ExtractBlindWatermarkInputInfo 
     */
    public $InputInfo;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var boolean 
     */
    public $IsDetected;

    /**
     * @var string 
     */
    public $Result;

    /**
     * @var string 
     */
    public $ResultUV;

    /**
     * @var ExtractBlindWatermarkTaskConfig 
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @param string $TaskId 
     * @param string $Status 
     * @param integer $ErrCode 
     * @param string $Message 
     * @param ExtractBlindWatermarkInputInfo $InputInfo 
     * @param string $Type 
     * @param boolean $IsDetected 
     * @param string $Result 
     * @param string $ResultUV 
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig 
     * @param string $SessionContext 
     * @param string $SessionId 
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new ExtractBlindWatermarkInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsDetected",$param) and $param["IsDetected"] !== null) {
            $this->IsDetected = $param["IsDetected"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ResultUV",$param) and $param["ResultUV"] !== null) {
            $this->ResultUV = $param["ResultUV"];
        }

        if (array_key_exists("ExtractBlindWatermarkConfig",$param) and $param["ExtractBlindWatermarkConfig"] !== null) {
            $this->ExtractBlindWatermarkConfig = new ExtractBlindWatermarkTaskConfig();
            $this->ExtractBlindWatermarkConfig->deserialize($param["ExtractBlindWatermarkConfig"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
