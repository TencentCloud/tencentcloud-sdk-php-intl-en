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
 * ExtractBlindWatermark request structure.
 *
 * @method string getType() Obtain Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: trace the source ab sequence watermark.</li>
 * @method void setType(string $Type) Set Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: trace the source ab sequence watermark.</li>
 * @method ExtractBlindWatermarkInputInfo getInputInfo() Obtain File input information for the Media Processing Service (MPS) task.
 * @method void setInputInfo(ExtractBlindWatermarkInputInfo $InputInfo) Set File input information for the Media Processing Service (MPS) task.
 * @method integer getSubAppId() Obtain VOD application ID for watermarking. Note that the SubAppId must be in line with the one used during watermarking to extract the watermark, whether importing FILEID or URL.
 * @method void setSubAppId(integer $SubAppId) Set VOD application ID for watermarking. Note that the SubAppId must be in line with the one used during watermarking to extract the watermark, whether importing FILEID or URL.
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain Configuration of the digital watermark extraction task.
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set Configuration of the digital watermark extraction task.
 * @method string getSessionContext() Obtain Identify source context, used for passing through user request information. The value of this field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback, with a maximum length of 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Identify source context, used for passing through user request information. The value of this field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback, with a maximum length of 1000 characters.
 * @method string getSessionId() Obtain An identification code for task deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identification code for task deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with an empty string indicates no deduplication.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 */
class ExtractBlindWatermarkRequest extends AbstractModel
{
    /**
     * @var string Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: trace the source ab sequence watermark.</li>
     */
    public $Type;

    /**
     * @var ExtractBlindWatermarkInputInfo File input information for the Media Processing Service (MPS) task.
     */
    public $InputInfo;

    /**
     * @var integer VOD application ID for watermarking. Note that the SubAppId must be in line with the one used during watermarking to extract the watermark, whether importing FILEID or URL.
     */
    public $SubAppId;

    /**
     * @var ExtractBlindWatermarkTaskConfig Configuration of the digital watermark extraction task.
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string Identify source context, used for passing through user request information. The value of this field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback, with a maximum length of 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string An identification code for task deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     */
    public $TasksPriority;

    /**
     * @param string $Type Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: trace the source ab sequence watermark.</li>
     * @param ExtractBlindWatermarkInputInfo $InputInfo File input information for the Media Processing Service (MPS) task.
     * @param integer $SubAppId VOD application ID for watermarking. Note that the SubAppId must be in line with the one used during watermarking to extract the watermark, whether importing FILEID or URL.
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig Configuration of the digital watermark extraction task.
     * @param string $SessionContext Identify source context, used for passing through user request information. The value of this field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback, with a maximum length of 1000 characters.
     * @param string $SessionId An identification code for task deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with an empty string indicates no deduplication.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new ExtractBlindWatermarkInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
