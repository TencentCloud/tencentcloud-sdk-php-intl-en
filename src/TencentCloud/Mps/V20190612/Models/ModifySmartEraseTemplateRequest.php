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
 * @method integer getDefinition() Obtain <p>Unique identifier of the intelligent erasure template</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the intelligent erasure template</p>
 * @method string getName() Obtain <p>Length limit for the smart erasing template name: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Length limit for the smart erasing template name: 64 characters.</p>
 * @method string getComment() Obtain <p>Length limit for the description information of the smart erasing template: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Length limit for the description information of the smart erasing template: 256 characters.</p>
 * @method string getEraseType() Obtain <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
 * @method void setEraseType(string $EraseType) Set <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain <p>Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.</p>
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) Set <p>Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.</p>
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain <p>Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.</p>
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) Set <p>Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.</p>
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() Obtain <p>Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.</p>
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) Set <p>Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.</p>
 */
class ModifySmartEraseTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of the intelligent erasure template</p>
     */
    public $Definition;

    /**
     * @var string <p>Length limit for the smart erasing template name: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Length limit for the description information of the smart erasing template: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig <p>Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.</p>
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig <p>Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.</p>
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig <p>Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.</p>
     */
    public $ErasePrivacyConfig;

    /**
     * @param integer $Definition <p>Unique identifier of the intelligent erasure template</p>
     * @param string $Name <p>Length limit for the smart erasing template name: 64 characters.</p>
     * @param string $Comment <p>Length limit for the description information of the smart erasing template: 256 characters.</p>
     * @param string $EraseType <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig <p>Subtitle erasing configuration. It takes effect when the value of EraseType is set to subtitle, or when the value of EraseType is left unspecified but the original EraseType value of the modified template is subtitle.</p>
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig <p>Watermark erasing configuration. The value of EraseType can be set to watermark or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to watermark.</p>
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig <p>Privacy protection configuration. The value of EraseType can be set to privacy or left unspecified. This parameter is valid only when the value of EraseType of the corresponding template is set to privacy.</p>
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
