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
 * Custom parameters for smart erasing.
 *
 * @method string getEraseType() Obtain Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
 * @method void setEraseType(string $EraseType) Set Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
 * @method UpdateSmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain Subtitle erasing configuration.
This field is required when the value of EraseType is subtitle.
 * @method void setEraseSubtitleConfig(UpdateSmartEraseSubtitleConfig $EraseSubtitleConfig) Set Subtitle erasing configuration.
This field is required when the value of EraseType is subtitle.
 * @method UpdateSmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain Watermark erasing configuration.
This field is required when the value of EraseType is watermark.
 * @method void setEraseWatermarkConfig(UpdateSmartEraseWatermarkConfig $EraseWatermarkConfig) Set Watermark erasing configuration.
This field is required when the value of EraseType is watermark.
 * @method UpdateSmartErasePrivacyConfig getErasePrivacyConfig() Obtain Privacy protection configuration.
This field is required when the value of EraseType is privacy.
 * @method void setErasePrivacyConfig(UpdateSmartErasePrivacyConfig $ErasePrivacyConfig) Set Privacy protection configuration.
This field is required when the value of EraseType is privacy.
 */
class OverrideEraseParameter extends AbstractModel
{
    /**
     * @var string Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
     */
    public $EraseType;

    /**
     * @var UpdateSmartEraseSubtitleConfig Subtitle erasing configuration.
This field is required when the value of EraseType is subtitle.
     */
    public $EraseSubtitleConfig;

    /**
     * @var UpdateSmartEraseWatermarkConfig Watermark erasing configuration.
This field is required when the value of EraseType is watermark.
     */
    public $EraseWatermarkConfig;

    /**
     * @var UpdateSmartErasePrivacyConfig Privacy protection configuration.
This field is required when the value of EraseType is privacy.
     */
    public $ErasePrivacyConfig;

    /**
     * @param string $EraseType Erasing type.
-subtitle: subtitle removal.
-watermark: watermark removal.
-privacy: privacy protection.
     * @param UpdateSmartEraseSubtitleConfig $EraseSubtitleConfig Subtitle erasing configuration.
This field is required when the value of EraseType is subtitle.
     * @param UpdateSmartEraseWatermarkConfig $EraseWatermarkConfig Watermark erasing configuration.
This field is required when the value of EraseType is watermark.
     * @param UpdateSmartErasePrivacyConfig $ErasePrivacyConfig Privacy protection configuration.
This field is required when the value of EraseType is privacy.
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
        if (array_key_exists("EraseType",$param) and $param["EraseType"] !== null) {
            $this->EraseType = $param["EraseType"];
        }

        if (array_key_exists("EraseSubtitleConfig",$param) and $param["EraseSubtitleConfig"] !== null) {
            $this->EraseSubtitleConfig = new UpdateSmartEraseSubtitleConfig();
            $this->EraseSubtitleConfig->deserialize($param["EraseSubtitleConfig"]);
        }

        if (array_key_exists("EraseWatermarkConfig",$param) and $param["EraseWatermarkConfig"] !== null) {
            $this->EraseWatermarkConfig = new UpdateSmartEraseWatermarkConfig();
            $this->EraseWatermarkConfig->deserialize($param["EraseWatermarkConfig"]);
        }

        if (array_key_exists("ErasePrivacyConfig",$param) and $param["ErasePrivacyConfig"] !== null) {
            $this->ErasePrivacyConfig = new UpdateSmartErasePrivacyConfig();
            $this->ErasePrivacyConfig->deserialize($param["ErasePrivacyConfig"]);
        }
    }
}
