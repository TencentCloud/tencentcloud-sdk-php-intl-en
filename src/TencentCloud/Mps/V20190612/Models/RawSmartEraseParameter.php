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
 * Smart erasure custom parameter.
 *
 * @method string getEraseType() Obtain Specifies the removal type.
-subtitle removal.
-Remove watermark.
-privacy protection.
 * @method void setEraseType(string $EraseType) Set Specifies the removal type.
-subtitle removal.
-Remove watermark.
-privacy protection.
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain Subtitle erasure configuration.
When EraseType is subtitle, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) Set Subtitle erasure configuration.
When EraseType is subtitle, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain Specifies the watermark removal configuration.
When EraseType is watermark, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) Set Specifies the watermark removal configuration.
When EraseType is watermark, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() Obtain Privacy protection configuration.
When EraseType is privacy, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) Set Privacy protection configuration.
When EraseType is privacy, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RawSmartEraseParameter extends AbstractModel
{
    /**
     * @var string Specifies the removal type.
-subtitle removal.
-Remove watermark.
-privacy protection.
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig Subtitle erasure configuration.
When EraseType is subtitle, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig Specifies the watermark removal configuration.
When EraseType is watermark, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig Privacy protection configuration.
When EraseType is privacy, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErasePrivacyConfig;

    /**
     * @param string $EraseType Specifies the removal type.
-subtitle removal.
-Remove watermark.
-privacy protection.
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig Subtitle erasure configuration.
When EraseType is subtitle, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig Specifies the watermark removal configuration.
When EraseType is watermark, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig Privacy protection configuration.
When EraseType is privacy, this field is required.
Note: This field may return null, indicating that no valid value can be obtained.
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
