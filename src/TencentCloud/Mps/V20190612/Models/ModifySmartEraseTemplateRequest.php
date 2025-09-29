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
 * ModifySmartEraseTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the smart erasing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the smart erasing template.
 * @method string getName() Obtain Length limit for the smart erasing template name: 64 characters.
 * @method void setName(string $Name) Set Length limit for the smart erasing template name: 64 characters.
 * @method string getComment() Obtain Length limit for the description information of the smart erasing template: 256 characters.
 * @method void setComment(string $Comment) Set Length limit for the description information of the smart erasing template: 256 characters.
 * @method string getEraseType() Obtain Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
 * @method void setEraseType(string $EraseType) Set Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) Set Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) Set Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() Obtain Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) Set Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.
 */
class ModifySmartEraseTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the smart erasing template.
     */
    public $Definition;

    /**
     * @var string Length limit for the smart erasing template name: 64 characters.
     */
    public $Name;

    /**
     * @var string Length limit for the description information of the smart erasing template: 256 characters.
     */
    public $Comment;

    /**
     * @var string Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.
     */
    public $ErasePrivacyConfig;

    /**
     * @param integer $Definition Unique identifier of the smart erasing template.
     * @param string $Name Length limit for the smart erasing template name: 64 characters.
     * @param string $Comment Length limit for the description information of the smart erasing template: 256 characters.
     * @param string $EraseType Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("EraseType",$param) and $param["EraseType"] !== null) {
            $this->EraseType = $param["EraseType"];
        }

        if (array_key_exists("EraseSubtitleConfig",$param) and $param["EraseSubtitleConfig"] !== null) {
            $this->EraseSubtitleConfig = new SmartEraseSubtitleConfig();
            $this->EraseSubtitleConfig->deserialize($param["EraseSubtitleConfig"]);
        }

        if (array_key_exists("EraseWatermarkConfig",$param) and $param["EraseWatermarkConfig"] !== null) {
            $this->EraseWatermarkConfig = new SmartEraseWatermarkConfig();
            $this->EraseWatermarkConfig->deserialize($param["EraseWatermarkConfig"]);
        }

        if (array_key_exists("ErasePrivacyConfig",$param) and $param["ErasePrivacyConfig"] !== null) {
            $this->ErasePrivacyConfig = new SmartErasePrivacyConfig();
            $this->ErasePrivacyConfig->deserialize($param["ErasePrivacyConfig"]);
        }
    }
}
