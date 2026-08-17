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
 * Extract video digital watermark task information
 *
 * @method string getTaskId() Obtain Media processing task ID.
 * @method void setTaskId(string $TaskId) Set Media processing task ID.
 * @method string getStatus() Obtain Task flow status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task flow status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain Error code. `0` indicates success. Other values indicate failure.
 * @method void setErrCode(integer $ErrCode) Set Error code. `0` indicates success. Other values indicate failure.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method MediaInputInfo getInputInfo() Obtain Target file info of Media Processing Service.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set Target file info of Media Processing Service.
 * @method string getType() Obtain Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
 * @method void setType(string $Type) Set Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
 * @method boolean getIsDetected() Obtain Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not return it.
 * @method void setIsDetected(boolean $IsDetected) Set Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not return it.
 * @method string getResult() Obtain Watermark content fetched. Field will not be returned if no digital watermark is detected.
 * @method void setResult(string $Result) Set Watermark content fetched. Field will not be returned if no digital watermark is detected.
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain Extract digital watermark configuration.
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set Extract digital watermark configuration.
 */
class ExtractBlindWatermarkTask extends AbstractModel
{
    /**
     * @var string Media processing task ID.
     */
    public $TaskId;

    /**
     * @var string Task flow status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var integer Error code. `0` indicates success. Other values indicate failure.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var MediaInputInfo Target file info of Media Processing Service.
     */
    public $InputInfo;

    /**
     * @var string Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
     */
    public $Type;

    /**
     * @var boolean Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not return it.
     */
    public $IsDetected;

    /**
     * @var string Watermark content fetched. Field will not be returned if no digital watermark is detected.
     */
    public $Result;

    /**
     * @var ExtractBlindWatermarkTaskConfig Extract digital watermark configuration.
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @param string $TaskId Media processing task ID.
     * @param string $Status Task flow status. Valid values:
<li>WAITING: waiting.</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode Error code. `0` indicates success. Other values indicate failure.
     * @param string $Message Error message.
     * @param MediaInputInfo $InputInfo Target file info of Media Processing Service.
     * @param string $Type Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-ab: ab copyright digital watermark.</li>
     * @param boolean $IsDetected Tag whether a watermark is detected. If this parameter is true, the Result field will return the watermark extraction Result. If this parameter is false, the Result field will not return it.
     * @param string $Result Watermark content fetched. Field will not be returned if no digital watermark is detected.
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig Extract digital watermark configuration.
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
