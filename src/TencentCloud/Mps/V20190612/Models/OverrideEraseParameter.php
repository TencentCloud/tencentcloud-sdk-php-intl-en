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
 * @method string getEraseType() Obtain <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
 * @method void setEraseType(string $EraseType) Set <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
 * @method UpdateSmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
 * @method void setEraseSubtitleConfig(UpdateSmartEraseSubtitleConfig $EraseSubtitleConfig) Set <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
 * @method UpdateSmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
 * @method void setEraseWatermarkConfig(UpdateSmartEraseWatermarkConfig $EraseWatermarkConfig) Set <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
 * @method UpdateSmartErasePrivacyConfig getErasePrivacyConfig() Obtain <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
 * @method void setErasePrivacyConfig(UpdateSmartErasePrivacyConfig $ErasePrivacyConfig) Set <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
 * @method integer getSubtitleEmbedId() Obtain <p>id of the subtitle removal suppression template.</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set <p>id of the subtitle removal suppression template.</p>
 */
class OverrideEraseParameter extends AbstractModel
{
    /**
     * @var string <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
     */
    public $EraseType;

    /**
     * @var UpdateSmartEraseSubtitleConfig <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
     */
    public $EraseSubtitleConfig;

    /**
     * @var UpdateSmartEraseWatermarkConfig <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
     */
    public $EraseWatermarkConfig;

    /**
     * @var UpdateSmartErasePrivacyConfig <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
     */
    public $ErasePrivacyConfig;

    /**
     * @var integer <p>id of the subtitle removal suppression template.</p>
     */
    public $SubtitleEmbedId;

    /**
     * @param string $EraseType <p>Removal Type</p><ul><li>subtitle removal</li><li>watermark removal</li><li>privacy protection</li></ul>
     * @param UpdateSmartEraseSubtitleConfig $EraseSubtitleConfig <p>Subtitle erasing configuration;<br>This field is required when the value of EraseType is set to subtitle.</p>
     * @param UpdateSmartEraseWatermarkConfig $EraseWatermarkConfig <p>Watermark erasing configuration.<br>This field is required when the value of EraseType is set to watermark.</p>
     * @param UpdateSmartErasePrivacyConfig $ErasePrivacyConfig <p>Privacy protection configuration.<br>This field is required when the value of EraseType is privacy.</p>
     * @param integer $SubtitleEmbedId <p>id of the subtitle removal suppression template.</p>
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

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }
    }
}
