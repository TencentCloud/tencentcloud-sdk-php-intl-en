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
 * Extraction task information of video digital watermark
 *
 * @method string getTaskId() Obtain Media processing task ID.
 * @method void setTaskId(string $TaskId) Set Media processing task ID.
 * @method string getStatus() Obtain Task stream status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task stream status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain Error code. `0`: Success. Other values: Failure.
 * @method void setErrCode(integer $ErrCode) Set Error code. `0`: Success. Other values: Failure.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method ExtractBlindWatermarkInputInfo getInputInfo() Obtain File input information for digital watermark extraction.
 * @method void setInputInfo(ExtractBlindWatermarkInputInfo $InputInfo) Set File input information for digital watermark extraction.
 * @method string getType() Obtain Digital watermark type. Available values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
 * @method void setType(string $Type) Set Digital watermark type. Available values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
 * @method boolean getIsDetected() Obtain Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not be returned.
 * @method void setIsDetected(boolean $IsDetected) Set Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not be returned.
 * @method string getResult() Obtain Extracted digital watermark content. This field will not be returned if no watermark is detected.
 * @method void setResult(string $Result) Set Extracted digital watermark content. This field will not be returned if no watermark is detected.
 * @method string getResultUV() Obtain Player's ID extracted from the traceability watermark, represented in hexadecimal, 6 digits in total.
 * @method void setResultUV(string $ResultUV) Set Player's ID extracted from the traceability watermark, represented in hexadecimal, 6 digits in total.
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain Configuration for digital watermark extraction.
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set Configuration for digital watermark extraction.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method string getSessionId() Obtain Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 */
class ExtractBlindWatermarkTask extends AbstractModel
{
    /**
     * @var string Media processing task ID.
     */
    public $TaskId;

    /**
     * @var string Task stream status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var integer Error code. `0`: Success. Other values: Failure.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var ExtractBlindWatermarkInputInfo File input information for digital watermark extraction.
     */
    public $InputInfo;

    /**
     * @var string Digital watermark type. Available values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
     */
    public $Type;

    /**
     * @var boolean Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not be returned.
     */
    public $IsDetected;

    /**
     * @var string Extracted digital watermark content. This field will not be returned if no watermark is detected.
     */
    public $Result;

    /**
     * @var string Player's ID extracted from the traceability watermark, represented in hexadecimal, 6 digits in total.
     */
    public $ResultUV;

    /**
     * @var ExtractBlindWatermarkTaskConfig Configuration for digital watermark extraction.
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @param string $TaskId Media processing task ID.
     * @param string $Status Task stream status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode Error code. `0`: Success. Other values: Failure.
     * @param string $Message Error message.
     * @param ExtractBlindWatermarkInputInfo $InputInfo File input information for digital watermark extraction.
     * @param string $Type Digital watermark type. Available values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
     * @param boolean $IsDetected Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not be returned.
     * @param string $Result Extracted digital watermark content. This field will not be returned if no watermark is detected.
     * @param string $ResultUV Player's ID extracted from the traceability watermark, represented in hexadecimal, 6 digits in total.
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig Configuration for digital watermark extraction.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param string $SessionId Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
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
