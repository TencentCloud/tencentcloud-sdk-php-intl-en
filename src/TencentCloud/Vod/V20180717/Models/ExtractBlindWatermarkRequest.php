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
 * @method string getType() Obtain Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: traceable ab sequence watermark.</li>
 * @method void setType(string $Type) Set Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: traceable ab sequence watermark.</li>
 * @method ExtractBlindWatermarkInputInfo getInputInfo() Obtain File input information for the Media Processing Service (MPS) task.
 * @method void setInputInfo(ExtractBlindWatermarkInputInfo $InputInfo) Set File input information for the Media Processing Service (MPS) task.
 * @method integer getSubAppId() Obtain VOD application ID used for watermarking. Note that whether a FILEID or URL is imported, it must be in line with the SubAppId used for watermarking to extract the watermark.
 * @method void setSubAppId(integer $SubAppId) Set VOD application ID used for watermarking. Note that whether a FILEID or URL is imported, it must be in line with the SubAppId used for watermarking to extract the watermark.
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() Obtain Configuration of the digital watermark extraction task.
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) Set Configuration of the digital watermark extraction task.
 * @method string getSessionContext() Obtain Source context identifier used to pass through user request information. This field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback. Maximum length: 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context identifier used to pass through user request information. This field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback. Maximum length: 1000 characters.
 * @method string getSessionId() Obtain Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method integer getTasksPriority() Obtain Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 */
class ExtractBlindWatermarkRequest extends AbstractModel
{
    /**
     * @var string Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: traceable ab sequence watermark.</li>
     */
    public $Type;

    /**
     * @var ExtractBlindWatermarkInputInfo File input information for the Media Processing Service (MPS) task.
     */
    public $InputInfo;

    /**
     * @var integer VOD application ID used for watermarking. Note that whether a FILEID or URL is imported, it must be in line with the SubAppId used for watermarking to extract the watermark.
     */
    public $SubAppId;

    /**
     * @var ExtractBlindWatermarkTaskConfig Configuration of the digital watermark extraction task.
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string Source context identifier used to pass through user request information. This field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback. Maximum length: 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var integer Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @param string $Type Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-trace: traceable ab sequence watermark.</li>
     * @param ExtractBlindWatermarkInputInfo $InputInfo File input information for the Media Processing Service (MPS) task.
     * @param integer $SubAppId VOD application ID used for watermarking. Note that whether a FILEID or URL is imported, it must be in line with the SubAppId used for watermarking to extract the watermark.
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig Configuration of the digital watermark extraction task.
     * @param string $SessionContext Source context identifier used to pass through user request information. This field will be returned in the ExtractBlindWatermarkComplete callback and task flow status change callback. Maximum length: 1000 characters.
     * @param string $SessionId Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param integer $TasksPriority Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
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
