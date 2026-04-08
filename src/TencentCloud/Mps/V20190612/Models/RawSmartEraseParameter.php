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
 * @method string getEraseType() Obtain <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
 * @method void setEraseType(string $EraseType) Set <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) Set <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) Set <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() Obtain <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) Set <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubtitleEmbedId() Obtain <p>id of the subtitle removal suppression template.</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set <p>id of the subtitle removal suppression template.</p>
 * @method integer getUseOriginalPos() Obtain <p>Suppression configuration, enabled by default, moves subtitles back to the original subtitle position.</p>
 * @method void setUseOriginalPos(integer $UseOriginalPos) Set <p>Suppression configuration, enabled by default, moves subtitles back to the original subtitle position.</p>
 * @method integer getUseOriginalSize() Obtain <p>Suppression configuration, enabled by default. When enabled, use the original subtitle font size.</p>
 * @method void setUseOriginalSize(integer $UseOriginalSize) Set <p>Suppression configuration, enabled by default. When enabled, use the original subtitle font size.</p>
 */
class RawSmartEraseParameter extends AbstractModel
{
    /**
     * @var string <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErasePrivacyConfig;

    /**
     * @var integer <p>id of the subtitle removal suppression template.</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>Suppression configuration, enabled by default, moves subtitles back to the original subtitle position.</p>
     */
    public $UseOriginalPos;

    /**
     * @var integer <p>Suppression configuration, enabled by default. When enabled, use the original subtitle font size.</p>
     */
    public $UseOriginalSize;

    /**
     * @param string $EraseType <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubtitleEmbedId <p>id of the subtitle removal suppression template.</p>
     * @param integer $UseOriginalPos <p>Suppression configuration, enabled by default, moves subtitles back to the original subtitle position.</p>
     * @param integer $UseOriginalSize <p>Suppression configuration, enabled by default. When enabled, use the original subtitle font size.</p>
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

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("UseOriginalPos",$param) and $param["UseOriginalPos"] !== null) {
            $this->UseOriginalPos = $param["UseOriginalPos"];
        }

        if (array_key_exists("UseOriginalSize",$param) and $param["UseOriginalSize"] !== null) {
            $this->UseOriginalSize = $param["UseOriginalSize"];
        }
    }
}
