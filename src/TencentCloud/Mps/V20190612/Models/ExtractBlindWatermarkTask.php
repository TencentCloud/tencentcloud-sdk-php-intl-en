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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Extract video digital watermark task information.
 *
 * @method string getTaskId() Obtain Media processing task ID.
 * @method void setTaskId(string $TaskId) Set Media processing task ID.
 * @method string getStatus() Obtain Task flow status. valid values:.
<Li>WAITING: waiting.</li>.
<Li>PROCESSING: processing.</li>.
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task flow status. valid values:.
<Li>WAITING: waiting.</li>.
<Li>PROCESSING: processing.</li>.
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain Error code. `0` indicates success. other values indicate failure.
 * @method void setErrCode(integer $ErrCode) Set Error code. `0` indicates success. other values indicate failure.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method MediaInputInfo getInputInfo() Obtain Target file information for media processing.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set Target file information for media processing.
 * @method string getType() Obtain Specifies the digital watermark type. valid values: <li>blind-basic: basic version copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>.
 * @method void setType(string $Type) Set Specifies the digital watermark type. valid values: <li>blind-basic: basic version copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>.
 * @method boolean getIsDetected() Obtain Indicates whether a watermark is detected. if this parameter is true, the Result field will return the watermark extraction Result. if this parameter is false, the Result field will not return.
 * @method void setIsDetected(boolean $IsDetected) Set Indicates whether a watermark is detected. if this parameter is true, the Result field will return the watermark extraction Result. if this parameter is false, the Result field will not return.
 * @method string getResult() Obtain Fetched watermark content. this field will not be returned when no detection.
 * @method void setResult(string $Result) Set Fetched watermark content. this field will not be returned when no detection.
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain Extracts the digital watermark configuration.
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set Extracts the digital watermark configuration.
 */
class ExtractBlindWatermarkTask extends AbstractModel
{
    /**
     * @var string Media processing task ID.
     */
    public $TaskId;

    /**
     * @var string Task flow status. valid values:.
<Li>WAITING: waiting.</li>.
<Li>PROCESSING: processing.</li>.
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var integer Error code. `0` indicates success. other values indicate failure.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var MediaInputInfo Target file information for media processing.
     */
    public $InputInfo;

    /**
     * @var string Specifies the digital watermark type. valid values: <li>blind-basic: basic version copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>.
     */
    public $Type;

    /**
     * @var boolean Indicates whether a watermark is detected. if this parameter is true, the Result field will return the watermark extraction Result. if this parameter is false, the Result field will not return.
     */
    public $IsDetected;

    /**
     * @var string Fetched watermark content. this field will not be returned when no detection.
     */
    public $Result;

    /**
     * @var ExtractBlindWatermarkTaskConfig Extracts the digital watermark configuration.
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @param string $TaskId Media processing task ID.
     * @param string $Status Task flow status. valid values:.
<Li>WAITING: waiting.</li>.
<Li>PROCESSING: processing.</li>.
<li>FINISH: completed</li>
     * @param integer $ErrCode Error code. `0` indicates success. other values indicate failure.
     * @param string $Message Error message.
     * @param MediaInputInfo $InputInfo Target file information for media processing.
     * @param string $Type Specifies the digital watermark type. valid values: <li>blind-basic: basic version copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>.
     * @param boolean $IsDetected Indicates whether a watermark is detected. if this parameter is true, the Result field will return the watermark extraction Result. if this parameter is false, the Result field will not return.
     * @param string $Result Fetched watermark content. this field will not be returned when no detection.
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig Extracts the digital watermark configuration.
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
            $this->InputInfo = new MediaInputInfo();
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

        if (array_key_exists("ExtractBlindWatermarkConfig",$param) and $param["ExtractBlindWatermarkConfig"] !== null) {
            $this->ExtractBlindWatermarkConfig = new ExtractBlindWatermarkTaskConfig();
            $this->ExtractBlindWatermarkConfig->deserialize($param["ExtractBlindWatermarkConfig"]);
        }
    }
}
