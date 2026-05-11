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
 * Smart erasing template details.
 *
 * @method integer getDefinition() Obtain Unique identifier of the smart erasing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the smart erasing template.
 * @method string getName() Obtain Smart erasing template name.
 * @method void setName(string $Name) Set Smart erasing template name.
 * @method string getComment() Obtain Smart erasing template description information.
 * @method void setComment(string $Comment) Set Smart erasing template description information.
 * @method string getType() Obtain Template type. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
 * @method void setType(string $Type) Set Template type. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
 * @method string getEraseType() Obtain Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
 * @method void setEraseType(string $EraseType) Set Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain Subtitle erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) Set Subtitle erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain Watermark erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) Set Watermark erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() Obtain Privacy protection configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) Set Privacy protection configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getAliasName() Obtain Alias of the preset smart erasing template.
 * @method void setAliasName(string $AliasName) Set Alias of the preset smart erasing template.
 */
class SmartEraseTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique identifier of the smart erasing template.
     */
    public $Definition;

    /**
     * @var string Smart erasing template name.
     */
    public $Name;

    /**
     * @var string Smart erasing template description information.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
     */
    public $Type;

    /**
     * @var string Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig Subtitle erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig Watermark erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig Privacy protection configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErasePrivacyConfig;

    /**
     * @var string Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @var string Alias of the preset smart erasing template.
     */
    public $AliasName;

    /**
     * @param integer $Definition Unique identifier of the smart erasing template.
     * @param string $Name Smart erasing template name.
     * @param string $Comment Smart erasing template description information.
     * @param string $Type Template type. Valid values:
* Preset: system preset template.
* Custom: user-defined template.
     * @param string $EraseType Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig Subtitle erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig Watermark erasing configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig Privacy protection configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Template creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $UpdateTime Last modification time of the template in [ISO datetime format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $AliasName Alias of the preset smart erasing template.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
